<?php

$url = 'https://ds666.nmtcc.com/ajax.php?act=pay';
$headers = array(
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'User-Agent: Mozilla/5.0 (Linux; Android 10; Redmi 8A Build/QKQ1.191014.001;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.101 Mobile Safari/537.36',
    'X-Requested-With: XMLHttpRequest',
    'Referer: https://ds666.nmtcc.com/?cid=58&tid=4045',
    'Accept-Encoding: gzip, deflate',
    'Accept-Language: zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7'
);

$data = array(
    'tid' => '4046',
    'inputvalue' => '3233008951',
    'inputvalue2' => '37cdb3c09595b55d0de10b00',
    'num' => '1',
    'hashsalt' => '17f8ce6b29319af9de5d036e6c7b7958'
);

$encoded_data = http_build_query($data);

$cookies = array(
    'PHPSESSID' => 'tttq0qghdchvg7k3m3ojno1hig',
    'sec_defend' => 'b10430beadf8136f0c458b0f80a3a9df191842646fe34bb28b2dcd00ef3a7559',
    'mysid' => 'eb2e877db57a827187ed5a530c3c0b65',
    'counter' => '1',
    '_aihecong_chat_visibility' => 'true'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded_data);
curl_setopt($ch, CURLOPT_COOKIE, http_build_query($cookies, '', '; '));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

echo $response;

?>
