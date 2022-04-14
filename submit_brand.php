<?php
$response=[
  'status'=>'error',
];
include('connection.php');
if (isset($_POST['submit'])) {
  $values=$_POST['brand_name'];
  $check=mysqli_num_rows(mysqli_query($conn,"SELECT brand_name FROM add_brand WHERE brand_name ='$values'"));
    if($check>0)
    {
        $response = [
            'status'=>'Fail',
            'msg'  => 'message will come here'
          ];
    }
  else{
    foreach ($values as $value )
    {
      $insert="INSERT INTO brands(brand_name) VALUES ('$value')";
      $result=mysqli_query($conn,$insert);
      if($result){
        // echo "success";
        $response = [
          'status'=>'success',
          'msg'  => 'message will come here'
        ];
      }
    }
  }
  echo json_encode($response);
}
// $msg='';
// $response=[
//   'status'=>'error',
// ];

//     $brand_name=$_POST['brand_name'];

//     print_r($_POST);
//     $check=mysqli_num_rows(mysqli_query($conn,"SELECT brand_name FROM add_brand WHERE brand_name ='$brand_name'"));
//     if($check>0)
//     {
//         $response = [
//             'status'=>'Fail',
//             'msg'  => 'message will come here'
//           ];
//     }
//     else{
//       $insert="INSERT INTO add_brand(brand_name) VALUES ('$brand_name')";
//       $result=mysqli_query($conn,$insert);
//       if($result){
//         // echo "success";
//         $response = [
//           'status'=>'success',
//           'msg'  => 'message will come here'
//         ];
     
//      echo json_encode($response);
//       }  
//     }

?>