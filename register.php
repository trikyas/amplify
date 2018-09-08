<?php
include('includes/classes/db.php');
include('includes/classes/Account.php');
include('includes/classes/Constants.php');
$account = new Account($db_con);
include('includes/handlers/register-handler.php');
include('includes/handlers/login-handler.php');
function getInputValue($name) {
  if(isset($_POST[$name])) {
    echo $_POST[$name];
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Amplify | Trikyas</title>
  <link href="css/main.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- Login Section -->
	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. Chad Trikyas Mooney" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>
			<button type="submit" name="loginButton">LOG IN</button>
		</form>
  <!-- Register Section -->
  <form id="registerForm" action="register.php" method="POST">
    <h2>Create your FREE account today</h2>
    <p>
      <?php echo $account->getError(Constants::$usernameCharacters); ?>
      <?php echo $account->getError(Constants::$usernameTaken); ?>
      <label for="username">Username</label>
      <input id="username" name="username" type="text" placeholder="Trikyas" required/>
    </p>
    <p>
      <?php echo $account->getError(Constants::$firstNameCharacters); ?>
      <label for="firstName">First Name</label>
      <input id="firstName" name="firstName" type="text" placeholder="Chad" required/>
    </p>
    <p>
      <?php echo $account->getError(Constants::$lastNameCharacters); ?>
      <label for="lastName">Last Name</label>
      <input id="lastName" name="lastName" type="text" placeholder="Mooney" required/>
    </p>
    <p>
      <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
      <?php echo $account->getError(Constants::$emailInvalid); ?>
      <?php echo $account->getError(Constants::$emailTaken); ?>
      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="trikyas@amplify.com" required/>
    </p>
    <p>
      <label for="email2">Confirm Email</label>
      <input id="email2" name="email2" type="email" placeholder="trikyas@amplify.com" required/>
    </p>
    <p>
      <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
      <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
      <?php echo $account->getError(Constants::$passwordCharacters); ?>
      <label for="password">Password</label>
      <input id="password" name="password" type="password" placeholder="••••••••••" required/>
    </p>
    <p>
      <label for="password2">Confirm Password</label>
      <input id="password2" name="password2" type="password" placeholder="••••••••••" required/>
    </p>
    <button type="submit" name="registerButton">SIGN UP</button>
  </form>
	</div>
</body>
</html>
