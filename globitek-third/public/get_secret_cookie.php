<?php require_once('../private/sign.php'); ?>
<?php
const CIPHER_METHOD = 'AES-256-CBC';

$key = 'scrt';

$key = str_pad($key, 32, '*');

$message = $_COOKIE[$key];

if(signed_string_is_valid($message)) {

	$arr = explode('--', $message);
	$messagea = $arr[0];

	$iv_with_cipher_text = base64_decode($messagea);

	$iv_length = openssl_cipher_iv_length(CIPHER_METHOD);
	$iv = substr($iv_with_cipher_text, 0, $iv_length);
	$cipher_text = substr($iv_with_cipher_text, $iv_length);

	$plaintext = openssl_decrypt($cipher_text, CIPHER_METHOD, $key, OPENSSL_RAW_DATA, $iv);

	echo $plaintext;
}
else
	echo "Error";
?>
