<?php

// Function to start session
session_start();

// Check the session name exists or not
if( isset($_SESSION['name']) ) {
    echo 'Kindly Refresh the page to logout. '.'<br>' ;
}
else {
    echo 'session is destroyed'.'<br>';
    header("Location: form.php");
}

echo $_SESSION['name'].'<br>';


$_SESSION = array();

// If it's desired to kill the session, also
// delete the session cookie.
// Note: This will destroy the session, and
// not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();

?>
