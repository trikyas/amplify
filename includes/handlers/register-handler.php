<?php
function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}
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
  $password = sanitizeFormString($_POST['password']);
  $password2 = sanitizeFormString($_POST['password2']);
  $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
	if($wasSuccessful) {
    header('Location: index.php');
	}
}
?>
