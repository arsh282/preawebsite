<?php
include('connection.php');
$msg='';
$response=[
  'status'=>'error',
];

    $upc=$_POST['upc'];
    $part_code=$_POST['part_code'];
    $description=$_POST['description'];
    $hsn=$_POST['hsn'];
    foreach($upc as $index => $upcs)
    {
      echo $upcs;
    }
    // $check=mysqli_num_rows(mysqli_query($conn,"SELECT part_code FROM add_product WHERE part_code ='$part_code'"));
    // if($check>0)
    // {
      
    //   $response = [
    //     'status'=>'fail',
    //     'msg'  => 'part code exist'
    //   ];
    // }
    // else{
    //   $insert="INSERT INTO add_product(upc,part_code,description,hsn) VALUES ('$upc','$part_code','$description','$hsn')";
    //   $result=mysqli_query($conn,$insert);
    //   if($result){
    //     // echo "success";
    //     $response = [
    //       'status'=>'success',
    //       'msg'  => 'insert successfully'
    //     ];
     
    //   }  
    // }
    // echo json_encode($response);

?>