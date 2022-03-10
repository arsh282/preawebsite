<?php 
include('connection.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$msg='';
$email_error="";
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
function send($token,$email)
{ 
        $email = $_POST['email'];
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';
        require 'vendor/autoload.php';
        // create object of PHPMailer class with boolean parameter which sets/unsets exception.
        $mail = new PHPMailer(true);                              
            $actual_link = "http://$_SERVER[HTTP_HOST]";
            $mail->isSMTP(); // using SMTP protocol                                     
            $mail->Host = 'smtp.mailtrap.io'; // SMTP host as gmail 
            $mail->SMTPAuth = true;  // enable smtp authentication                             
            $mail->Username = '9ece0636bee2c0';  // sender gmail host              
            $mail->Password = '89d28787209c08'; // sender gmail host password                          
            $mail->SMTPSecure = 'tls';  // for encrypted connection                           
            $mail->Port = 2525;   // port for SMTP     
            $mail->isHTML(true); 
            $mail->setFrom('aarshk28@gmail.com', 'arsh'); // sender's email and name
            $mail->addAddress($email, 'arsh');  // receiver's email and name
            $mail->Subject = 'Email verification';
            $mail->Body    = "Please click this button to verify your account: previous 
              <a href=".$actual_link."/preawebsite/form-wizard.php?token=$token>Verify</a>";
            $mail->send();
            echo 'Message has been sent';
          if(!$mail->send())
          {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
          } 
          else 
          {
              echo 'Message has been sent';
             
              echo $actual_link;
          }
        }
    $name=$_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $token = rand();
    echo $sql = "INSERT INTO login_user(`name`,`email`,`contact`,`gender`,`token`) VALUES ('$name', '$email', '$contact', '$gender','$token')";
    $result=mysqli_query($conn,$sql);
    if ($result) 
      {
          echo "Registration successfull. Please verify your email.";
          send($token,$email);
        }
      else
        {
            echo 'fail';
        }

    

?>