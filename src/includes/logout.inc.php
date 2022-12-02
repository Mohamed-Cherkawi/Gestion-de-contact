<?php
// We need to start a session in order to destroy a Session .
session_start();
session_unset();
session_destroy();

// Going to front Page 
header("location: ../../templates/login.php");