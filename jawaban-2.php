<?php
header('Content-Type: text/plain');

function is_username_valid($string) {
  if(preg_match('|^[a-z_]{8}$|', $string)) {
    return(TRUE);
  }
  return(FALSE);
}
// return false
var_dump(is_username_valid('jakarta'));
var_dump(is_username_valid('solo abc'));
var_dump(is_username_valid('_soetami_'));
// return true
var_dump(is_username_valid('_jakarta'));
var_dump(is_username_valid('solo_abc'));
var_dump(is_username_valid('soetami_'));
echo("\r\n\r\n");

function is_password_valid($string) {
if(preg_match('|[A-Z]|', $string) && preg_match('|[a-z]|', $string) && preg_match('|[\d]|', $string) && preg_match('|[)<~!@#$%^&*?+>_\s(-]|', $string) && strlen($string)==8) {
    return(TRUE);
  }
  return(FALSE);
}
// return false
var_dump(is_password_valid('Qwertyu1'));
var_dump(is_password_valid('#Qwert1'));
var_dump(is_password_valid('@$^(&%_+'));
// return true
var_dump(is_password_valid('wsxE99##'));
var_dump(is_password_valid('sw1p3^UP'));
