<?php
session_start();
if($_POST['username'] == "futurz" AND $_POST['password'] == "deadman"){
$_SESSION['name'] = "futurz";
header("Location: update.php");
}
else{
  header("Location: form.php");
}
