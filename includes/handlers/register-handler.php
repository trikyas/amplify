<?php
// Coded by Trikyas
function sanitizeFormUsername($inputText) {
$inputText = strip_tags($inputText);
$inputText = str_replace(" ", "", $inputText);
return $inputText;
}
// Coded by Trikyas
function sanitizeFormString($inputText) {
$inputText = strip_tags($inputText);
$inputText = str_replace(" ", "", $inputText);
$inputText = ucfirst(strtolower($inputText));
return $inputText;
}
// Coded by Trikyas
if(isset($_POST['registerButton'])) {
  $username = sanitizeFormUsername($_POST['username']);
  $firstName = sanitizeFormString($_POST['firstName']);
  $lastName = sanitizeFormString($_POST['lastName']);
  $email = sanitizeFormString($_POST['email']);
  $email2 = sanitizeFormString($_POST['email2']);
  echo "$username pressed the Register Button";
}
?>
