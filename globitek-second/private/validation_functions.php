<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    // Function can be improved later to check for
    // more than just '@'.
    return (strpos($value, '@') !== false) && 
    (preg_match("/^[a-zA-Z0-9_@.-]+$/", $value));
  }

  function only_whitelist_characters($value) {
  	return (preg_match("/^[a-zA-Z0-9_]+$/", $value));
  }

  function phone_number_limit($value) {
  	return (preg_match("/^[0-9()\s-]+$/", $value));
  }

  // My validation
  function has_valid_name($value) {
    return (preg_match("/^[a-zA-Z]+$/", $value));
  }

?>
