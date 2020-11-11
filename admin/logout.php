<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://localhost/karan/admin/index.php/"); // Redirecting To Home Page
}
?>