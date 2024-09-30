<?php
/**
 * Template Name: Homepage
 */

get_header();
while ( have_posts() ) : the_post();
    the_content();
endwhile;
get_footer();

// Note: Requires cURL library
$TEST_MODE = true;

$connection_options = [
    'live' => [
        'api_host_port' => 'https://rr-n1-tor.opensrs.net:55443',
        'api_key' => '3c23da2619baa5b883e5c98e717c61104c64025919a058304b0e55f2587ec3ec8883231e21eb85ef7a94dc5fcd53aac4a9a0ad2b6ac3e250',
        'reseller_username' => 'host2media'
    ],
    'test' => [
        'api_host_port' => 'https://horizon.opensrs.net:55443',
        'api_key' => '3c23da2619baa5b883e5c98e717c61104c64025919a058304b0e55f2587ec3ec8883231e21eb85ef7a94dc5fcd53aac4a9a0ad2b6ac3e250',
        'reseller_username' => 'host2media'
    ]
];

if ($TEST_MODE) {
    $connection_details = $connection_options['test'];
} else {
    $connection_details = $connection_options['live'];
}

$xml = <<<EOD
<?xml version='1.0' encoding='UTF-8' standalone='no' ?>
<!DOCTYPE OPS_envelope SYSTEM 'ops.dtd'>
<OPS_envelope>
<header>
    <version>0.9</version>
</header>
<body>
<data_block>
    <dt_assoc>
        <item key="protocol">XCP</item>
        <item key="action">LOOKUP</item>
        <item key="object">DOMAIN</item>
        <item key="attributes">
         <dt_assoc>
                <item key="domain">host2media.com</item>
         </dt_assoc>
        </item>
    </dt_assoc>
</data_block>
</body>
</OPS_envelope>
EOD;

$data = [
    'Content-Type:text/xml',
    'X-Username:' . $connection_details['reseller_username'],
    'X-Signature:' . md5(md5($xml . $connection_details['api_key']) .  $connection_details['api_key']),
];

$ch = curl_init($connection_details['api_host_port']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $data);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

$response = curl_exec($ch);

echo 'Request as reseller: ' . $connection_details['reseller_username'] . "\n" .  $xml . "\n";

echo "Response\n";
echo $response . "\n";
