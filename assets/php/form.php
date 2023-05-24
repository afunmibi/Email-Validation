<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $full_name = $_POST['Your Full Name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $guardian_phone = $_POST['phone'];
  $study = $_POST['study'];
  $address = $_POST['address'];
  $organization = $_POST['Organization'];
  $position = $_POST['position'];
  $module = $_POST['more'];
  $preferred_class = $_POST['yyy'];

  // send email
  $to = 'kazim@tedprimehub.org'; // replace with your own email address
  $subject = 'New registration form submission';
  $message = "Title: $title\nFull Name: $full_name\nEmail: $email\nPhone: $phone\nGuardian Phone: $guardian_phone\nPreference of Study: $study\nAddress: $address\nOrganization/School/Institution: $organization\nPosition Held: $position\nModule Option: $module\nPreferred Class: $preferred_class";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  mail($to, $subject, $message, $headers);

  // redirect to thank you page
  header('Location: thank-you.php');
  exit;
}
?>
<!-- Note that you'll need to replace youremail@example.com with your own email address. Also, make sure to create a thank-you.php page that the user will be redirected to after submitting the form. -->