<?php
require 'helpers.php';
require 'User.php';
require 'Form.php';

use Filter1\User;
use DWA\Form;

session_start();

# Instantiate Our Objects
$user = new User('docs/data.json');
$form = new Form($_POST);
$otherErrors = "";

# unset POST of form is submitted empty
foreach ($_POST as $key => $value){

    if($value == ""){
        unset($_POST[$key]);
    }
}

# check if form submitted empty
if(count($_POST) == 0){
    $otherErrors = "please use a field to filter by";
}

#check if more than one filed is used
if(count($_POST) > 1) {
    $otherErrors = "please do not use more than one field to filter by";
}

# Get form data from request
$username = $form->get('username');
$filterType = "";
$filterItem = "";
$errors = "";


if($_POST['state'] != '') {
    $filterItem = $_POST['state'];
    $filterType = 'state';
}
if(isset($_POST['checkActive'])) {
    $filterItem = $_POST['checkActive'];
    $filterType = 'active';
}

if($filterType == '' && $filterItem == '') {
    echo "state and checkActive not set";
    $errors = $form->validate([
        'username' => 'required|alphaNumeric'
    ]);
}
$users = array();
if(!$form->hasErrors){
    if($filterItem == ""){
        $users = $user->getByFilterItem($username);
    }
    else {
        $users = $user->getByFilterItem($filterItem, $filterType);
    }

}


$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'username' => $username,
    'users' => $users,
    'usersCount' => count($users),
    'otherErrors' => $otherErrors,
    'filterItem' => $filterItem
];
header('Location: index.php');