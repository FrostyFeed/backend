<?php
session_start(); 
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']); 
}
echo "<h2>Welcome to Your Profile</h2>";
echo "<p>Here you can see your personal information and perform various actions.</p>";
?>