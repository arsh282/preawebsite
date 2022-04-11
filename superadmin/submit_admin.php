<?php 
include('../connection.php');
$response=[
  'status'=>'error',
];
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$msg='';
$email_error="";
// $file_pointer = '.././vendor/autoload.php';
//         if (file_exists($file_pointer)) {
//             echo "The file $file_pointer exists";
//         }else {
//             echo "The file $file_pointer does 
//                                    not exists";
//         }
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
function send($token,$email)
{     
        $email = $_POST['email'];
        require '.././PHPMailer/src/Exception.php';
        require '.././PHPMailer/src/PHPMailer.php';
        require '.././PHPMailer/src/SMTP.php';
        require '.././vendor/autoload.php';
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
              <button><a href=".$actual_link."<?=base_url;?>superadmin/form-wizard.php?token=$token&email=$email>Verify</a></button>";
            $mail->send();
            // echo 'Message has been sent';
          if(!$mail->send())
          {
// echo"mail success";
          } 
          else 
          {
            // echo"mail fail";
          }
        }
$name=$_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];

$token = rand();
  $check=mysqli_num_rows(mysqli_query($conn,"SELECT email FROM login_user WHERE email ='$email'"));
  // $_SESSION['id']=$check['id'];
  if($check>0)
  {
  //  echo 'email exist'; 
   $response = [
    'status'=>'email exist',
    'msg'  => 'Email already exist'
  ];
  }
else{
  $sql = "INSERT INTO login_user(`name`,`email`,`contact`,`gender`,`token`) VALUES ('$name', '$email', '$contact', '$gender','$token')";
  $result=mysqli_query($conn,$sql);
  if ($result) 
  {   
      // send($token,$email);
      // echo ('success');
      $response = [
        'status'=>'success',
        'msg'  => 'User has been registered.Please check your mail '
      ];
  }
  else
    {
      // echo ('fails');
      $response = [
        'status'=>'fails',
        'msg'  => 'Registration has been failed '
      ];
    }
    echo json_encode($response);

}
  

?>