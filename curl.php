<?php
$ch = curl_init("https://codecanyon.net/item/consultine-consulting-business-and-finance-website-cms/22236735");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($ch);
$error = curl_error($ch);
if ($error) {
    echo $error;
}
?>