<?php
class Account {
  private $db_con;
  private $errorArray;
  public function __construct($db_con) {
    $this->con = $db_con;
    $this->errorArray = array();
  }
    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
      $this->validateUsername($un);
      $this->validateFirstname($fn);
      $this->validateLastname($ln);
      $this->validateEmails($em, $em2);
      $this->validatePasswords($pw, $pw2);

      if(empty($this->errorArray)) {
        //insert it baby! YEAH!
        return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
      } else {
        //Oh you're tired now... ERROR!
        return false;
      }
    }
    public function getError($error) {
      if(!in_array($error, $this->errorArray)) {
        $error = " ";
      }
      return "<span class='errorMessage'> $error </span>";
    }
    private function insertUserDetails($un, $fn, $ln, $em, $pw) {
      $encryptedPw = password_hash($pw, PASSWORD_ARGON2I);
      $profilePic = "assets/images/profile-pics/head_default.png";
      $date = date("Y-m-d");
      $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic')");
      return $result;
    }
    private function validateUsername($un) {
      if(strlen($un) > 25 || strlen($un) < 5) {
        array_push($this->errorArray, Constants::$usernameCharacters);
        return;
      }
      $checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
      if(mysqli_num_rows($checkUsernameQuery) != 0) {
        array_push($this->errorArray, Constants::$usernameTaken);
        return;
      }
    }
    private function validateFirstname($fn) {
      if(strlen($fn) > 25 || strlen($fn) < 2) {
        array_push($this->errorArray, Constants::$firstNameCharacters);
        return;
      }
    }
    private function validateLastname($ln) {
      if(strlen($ln) > 25 || strlen($ln) < 2) {
        array_push($this->errorArray, Constants::$lastNameCharacters);
        return;
      }
    }
    private function validateEmails($em, $em2) {
      //Check if emails match
      if($em != $em2) {
        array_push($this->errorArray, Constants::$emailsDoNotMatch);
        return;
      }
      //Check if they're in the correct Format
      if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        array_push($this->errorArray, Constants::$emailInvalid);
        return;
      }
      $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE username='$em'");
      if(mysqli_num_rows($checkEmailQuery) != 0) {
        array_push($this->errorArray, Constants::$emailTaken);
        return;
      }
    }
    private function validatePasswords($pw, $pw2) {
      if($pw != $pw2) {
        array_push($this->errorArray, Constants::$passwordsDoNoMatch);
        return;
      }
      //If it is not a letter or number than == NO else == TRUE
      if(preg_match('/[^A-Za-z0-9]/', $pw)) {
        array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
        return;
      }
      if(strlen($pw) > 30 || strlen($pw) < 5) {
        array_push($this->errorArray, Constants::$passwordCharacters);
        return;
      }
    }
}
?>
