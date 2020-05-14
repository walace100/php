<h1>mcrypt e openssl_encrypt</h1>
<h2>Não funciona mais o mcrypt</h2>
<?php
$data = ["nome" => "Hcode"];
define("SECRET", pack("a16", "senha"));
define("SECRET_IV", pack("a16", "senha"));
// $mcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, SECRET, json_encode($data), MCRYPT_MODE_ECB);
// $final = base64_encode($mcrypt);
// $string = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, SECRET, base64_decode($final), MCRYPT_MODE_ECB);

$openssl = openssl_encrypt(json_encode($data), "AES-128-CBC", SECRET, 0, SECRET_IV);
var_dump($openssl);
$string = openssl_decrypt(json_encode($data), "AES-128-CBC", SECRET, 0, SECRET_IV);
var_dump(json_decode($string));