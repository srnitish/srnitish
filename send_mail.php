<?php
if(isset($_POST['submit'])){
$msg = 'First Name: ' .$_POST['first_name'] ."\n"
		.'Last Name: ' .$_POST['last_name'] ."\n"
		.'Email: ' .$_POST['email'] ."\n"
		.'Message: ' .$_POST['message'];

		mail('enquiry@vikihealth.ai', 'VIKI Contact Us Form', $msg); 
		// header('location: contact-us-tank-you.php');
		// alert("Thank You for your interest, we will get back to you soon!!");
		// echo "<script> alert('Thank You for your interest, we will get back to you soon!!'); </script>"
		// echo "Thank You for your interest, we will get back to you soon!!";
		echo '<script language="javascript">';
		echo 'alert("Thank You for your interest, we will get back to you soon!!")';
		// echo 'window.location = 'index.php';';
		echo '</script>';
		header('location: index.php');
} else{
	header('location: index.php');
	exit(0);
}
?>