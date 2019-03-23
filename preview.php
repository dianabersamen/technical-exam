<?php

require_once "config/saveInfo.php";

$output = '';

$output .= '<form id="formPreview">';
    $output .= '<h2> Review the Information Below </h2>';

    $output .= '<label for="name">Full Name:</label>';
    $output .= '<p>'.$_POST['fname'].' '.$_POST['lname'].'</p>';

    $output .= '<label for="contactNum">Contact Number:</label>';
    $output .= '<p>'.$_POST['contactNum'].'</p>';

    $output .= '<label for="email">Email Address:</label>';
    $output .= '<p>'.$_POST['email'].'</p>';

    $output .= '<label for="nric">NRIC/Passport Number:</label>';
    $output .= '<p>'.$_POST['nric'].'</p>';

    $output .= '<label for="address">Address:</label>';
    $output .= '<p>'.$_POST['address'].'</p>';

    $output .= '<label for="city">City:</label>';
    $output .= '<p>'.$_POST['city'].'</p>';

    $output .= '<label for="state">State:</label>';
    $output .= '<p>'.$_POST['state'].'</p>';

    $output .= '<label for="country">Country:</label>';
    $output .= '<p>'.$_POST['country'].'</p>';

    $output .= '<label for="zipcode">Zip Code:</label>';
    $output .= '<p>'.$_POST['zipcode'].'</p>';

    $output .= '<button class="btn btn-default" id="back">Back</button>';
    $output .= '<button type="submit" class="btn btn-primary" id="Submit">Submit</button>';

$output .= '</form>';

echo $output;