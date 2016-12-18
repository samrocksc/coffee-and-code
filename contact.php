<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    $from = $email; 
    $to = 'youremail@email.com'; 
    $subject = 'Coffee & Code Website Contact';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Telephone: $tel\n Message:\n $message";
				
    if ($_POST['submit']) {
      if ($name != '' && $email != '') {
          if ($human == '4') {				 
              if (mail ($to, $subject, $body, $from)) { 
              echo '<p>Your message has been sent!</p>';
          } else { 
              echo '<p>Something went wrong, go back and try again!</p>'; 
          } 
      } else if ($_POST['submit'] && $human != '4') {
          echo '<p>You answered the anti-spam question incorrectly.</p>';
      }
      } else {
          echo '<p>Please fill in all required fields.</p>';
      }
  }
?>
