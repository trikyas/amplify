<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "amplify");
$db_con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()) {
  die("Database Failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() .")" );
}
// if($db_con) {
//   echo '<body style="margin: 0;
//   padding: 0;
//   font-size: calc(2vh + 2vw + 2vmin); color: #00ffff75;">
//   <main style="mix-blend-mode: difference; background: linear-gradient(23deg, #343456 50%, #006721 50%); width: 100%; height: 100vh;">
// <h1 style="text-align: center; color: 00ff0085;">We have Connected! </h1>
//   <header style="background-color: #34343450; height: 50vh; width: 70%; position: absolute; top: 25vh; right: 15%;">
//   <nav style=" text-align: center; width: 100%;">
//   <ul style="list-style: none;">
//   <li>
//   <a style="color: CurrentColor; text-decoration: none; mix-blend-mode: luminosity;" href="../../register.php">👉 Take me Home</a>
//   </li>
//   </ul>
//   </nav>
//   </header>
//   <div style="position: absolute; bottom: 0; width: 100%;">
//   <h1 style="text-align: center; color: 00ff0085;">Recieving passwords now. </h1>
//   </div>
//   </main>
//   </body>';
// }
?>
