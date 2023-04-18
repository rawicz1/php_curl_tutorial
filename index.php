<?php 

// headers to add to the request

$headers = [
    "User-Agent: php_curl_tutorial",
    "Authorization: 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"
];


$ch = curl_init("https://api.github.com/user/repos"); // returns handle to the curl session


// to attach headers to the request:

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


curl_exec($ch);

curl_close($ch);

 
?>