<?php



mail('magmartinez1291@gmail.com', 'deal', 'mess');



ini_set('display_errors', 'On');

// process the form
// if form was submited
if(isset($_POST['submit']))
{



	if( 
		!empty($_POST['first_name']) &&
		isset($_POST['last_name']) &&
		isset($_POST['email']) &&
		isset($_POST['subject']) &&
		isset($_POST['message']))
	{
		// set var
		$first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
		$email      = $_POST['email'];
		$subject    = $_POST['subject'];
		$message    = $_POST['message'];
		
		$admin_email = 'magmartinez1291@gmail.com';

		// prep the message
		$new_message = '';
		$new_message .= '<p>NAME: '.$first_name.' '.$last_name.'</p>';
		$new_message .= '<p>EMAIL:'.$email.'</p>';
		$new_message .= '<p>MESSAGE:'.$message.'</p>';

		// set config for mail and send
		// http://www.w3schools.com/php/func_mail_mail.asp
		$success = mail($admin_email, $subject, $new_message);

		if($success == 1){
			// return success
			echo '<div class="alert alert-success">Thanks for contacting us '.$first_name.'. Will be in touch shortly!</div>';
		} else {
			echo 'Error';
		}
	} else {
		// something happned
		echo '<div class="alert alert-danger">Please fill out all fields.</div>';
	}
}
