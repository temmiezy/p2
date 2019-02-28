<?php
require 'User.php';

use Filter1\User;

session_start();

# Get results data from session if available
$hasErrors = "";
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $users = $results['users'];
    $username = $results['username'];
    $usersCount = $results['usersCount'];
    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];
    $otherErrors = $results['otherErrors'];
    $filterItem = $results['filterItem'];
} else {
    $userData = new User('docs/data.json');
    $users = $userData->getAllUsers();
}

# Clear session data when page is refreshed
session_unset();
