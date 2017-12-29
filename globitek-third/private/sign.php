<?php
	
	function signing_checksum($string) {
		return hash('sha1', $string);
	}

	function sign_string($string) {
		return $string . "--" . signing_checksum($string);
	}

	function signed_string_is_valid($string) {
		$array = explode('--', sign_string($string));

		if(count($array) != 2)
			return false;
		$new_checksum = signing_checksum($array[0]);
		return ($new_checksum === $array[1]);
	}

?>