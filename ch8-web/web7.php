<?php
/*
8.7 Using Cookie Authentication
Problem
You want more control over the user login procedure, such as presenting your own login
form.
*/
$secret_word = 'if i ate spinach';


function validate($username, $pass) {
  if ($username == 'admin' && $pass == '123') {
    return true;
  } else {
    return false;
  }
}

if (validate($_POST['username'],$_POST['password'])) {
  setcookie('login',
  $_POST['username'].','.md5($_POST['username'].$secret_word));
}

// Example 8-7. Verifying a login cookie
unset($username);
if (isset($_COOKIE['login'])) {
  list($c_username, $cookie_hash) = explode(',', $_COOKIE['login']);
  $username = $c_username;
  if (md5($c_username.$secret_word) == $cookie_hash) {
    $username = $c_username;
  } else {
    print "You have sent a bad cookie.";
  }
}
if (isset($username)) {
  print "Welcome, $username.";
} else {
  print "Welcome, anonymous user.";
}

// Example 8-8. Storing login info in a session
if (validate($_POST['username'],$_POST['password'])) {
  $_SESSION['login'] =
  $_POST['username'].','.md5($_POST['username'].$secret_word);
}

// Example 8-9. Verifying session info
unset($username);
if (isset($_SESSION['login'])) {
  list($c_username,$cookie_hash) = explode(',',$_SESSION['login']);
  if (md5($c_username.$secret_word) == $cookie_hash) {
    $username = $c_username;
  } else {
    print "You have tampered with your session.";
  }
}

// Example 8-10. Connecting logged-out and logged-in usage
if (validate($_POST['username'], $_POST['password'])) {
  $_SESSION['login'] =
  $_POST['username'].','.md5($_POST['username'].$secret_word);
  error_log('Session id '.session_id().' log in as '.$_POST['username']);
}

?>
<!-- Example 8-6. Sample cookie authentication login form -->
<form method="POST" action="web7.php">
Username: <input type="text" name="username"> <br>
Password: <input type="password" name="password"> <br>
<input type="submit" value="Log In">
</form>