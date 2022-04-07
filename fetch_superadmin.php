<?php
include('connection.php');

    $sr=1;
    $login_users = array();
    $data= array();
    $query = "SELECT  * from login_user";
    $res = mysqli_query( $conn,$query );
    if( $res ){
       while($row = mysqli_fetch_assoc( $res )){
		if($row['status']==1)
		{				
			// $status ="<button type='button' data-id='".$row['id']."'' class='btn btn-small modal-trigger' style='padding: 1px 5px;font-size: 12px;'><a href='#modal2?id= $row[id]'><i class='material-icons dp48'>create</i></a></button>";
  
// 	$status ='<button  class="btn btn-small" style="padding: 1px 5px;font-size: 12px;><a href="#"><i class="material-icons dp48">create</i></a>Active</button>';
// 	$status ="<a class='btn btn-small modal-trigger' data-id='".$row['id']."'' href='#modal2' style='padding: 1px 5px;font-size: 12px;'><i class='material-icons dp48'>create</i></a>";
// 	$update ="<button type='button' data-id='".$row['id']."'' class=' btn  tiny disabled' style='padding: 1px 5px;font-size: 12px;'><a href='update-form.php'><i class='material-icons dp48'>brush</i></a></button>";
	// $status ="<button type='button' data-id='".$row['id']."'' class=' btn  tiny ' style='padding: 1px 5px;font-size: 12px;'><a href='#modal2' class='modal-trigger'><i class='material-icons dp48'>brush</i>Modal</a></button>";
	$status = "<button type='button ' data-id='".$row['id']."'  title='Remove From School' class='btn btn btn-small user_delete' style='padding: 1px 5px;font-size: 12px;'><i class='material-icons dp48'>brush</i></button>";
}
		else{
			$status ='<button  class="btn btn-small " style="padding: 1px 5px;font-size: 12px;">Deactive</button>';
		}
		if($row['token']== NULL){
			$update ="<button type='button' data-id='".$row['id']."'' class=' btn  tiny disabled' style='padding: 1px 5px;font-size: 12px;'><a href='update-form.php'><i class='material-icons dp48'>brush</i></a></button>";
		}
		else{
			$update ="<button type='button' data-id='".$row['id']."'' class='btn btn-small' style='padding: 1px 5px;font-size: 12px;'><a href='update-form.php'><i class='material-icons dp48'>brush</i></a></button>";
		}
		$data[0]= $sr;
        $data[1]=ucwords($row['name']);
		$data[2]=$row['email'];
		$data[3]=$row['contact'];
		$data[4]=ucwords($row['gender']);
		$data[5]=$row['address'];
		$data[6]=$row['uid'];
		$data[7]=$row['pancard'];
		$data[8]=date("d-M-Y", strtotime($row['doj']) );
		$data[9]= "<div class='btn-wrapper text-right'>
		$status
		$update		
		<button type='button' data-id='".$row['id']."'' class='btn btn-small ' style='padding: 1px 5px;font-size: 12px;'><a href='delete.php?id= $row[id]'><i class='material-icons dp48'>delete</i></a></button>
		</div>";
		$sr++;
		array_push($login_users,$data);
		unset($data);
		$html ='';

       }
    }

    $finaldata = array('data'=>$login_users);
    
  echo    json_encode($finaldata);
    
?>

