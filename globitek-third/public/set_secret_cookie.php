<?php require_once('../private/sign.php'); ?>
<?php
const CIPHER_METHOD = 'AES-256-CBC';

$plain_text = 'I have a secret to tell.';
$key = 'scrt';

$key = str_pad($key, 32, '*');

$iv_length = openssl_cipher_iv_length(CIPHER_METHOD);
$iv = openssl_random_pseudo_bytes($iv_length);

$encrypted = openssl_encrypt($plain_text, CIPHER_METHOD, $key, OPENSSL_RAW_DATA, $iv);

$message = $iv . $encrypted;

$val = base64_encode($message);
$sign_val = sign_string($val);

setcookie($key, $sign_val, time() + 3600, "/");

echo $sign_val;
?>

