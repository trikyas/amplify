<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Amplify | Trikyas</title>
  <link href="css/main.css" type="text/css" rel="stylesheet" />
</head>
<body>

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

  <!-- Register Sect -->
  <form id="registerForm" action="register.php" method="POST">
    <h2>Login to your account</h2>
    <p>
      <label for="username">Username</label>
      <input id="username" name="username" type="text" placeholder="Trikyas" required>
    </p>
    <p>
      <label for="firstName">First Name</label>
      <input id="firstName" name="firstName" type="text" placeholder="Chad" required>
    </p>
    <p>
      <label for="lastName">Last Name</label>
      <input id="lastName" name="lastName" type="text" placeholder="Mooney" required>
    </p>
    <p>
      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="trikyas@amplify.com" required>
    </p>
    <p>
      <label for="email2">Confirm Email</label>
      <input id="email2" name="email2" type="email" placeholder="trikyas@amplify.com" required>
    </p>
    <p>
      <label for="password">Password</label>
      <input id="password" name="password" type="password" placeholder="••••••••••" required>
    </p>
    <p>
      <label for="password2">Confirm Password</label>
      <input id="password2" name="password2" type="password" placeholder="••••••••••" required>
    </p>

    <button type="submit" name="registerButton">SIGN UP</button>

  </form>
	</div>

</body>
</html>
