<?php
include('connection.php');

    $sr=1;
    $store = array();
    $data= array();
    $query = "SELECT  * from stores";
    $res = mysqli_query( $conn,$query );
    if( $res ){
       while($row = mysqli_fetch_assoc( $res )){

			$update ="<button type='button' data-id='".$row['id']."'' class='btn btn-small' style='padding: 1px 5px;font-size: 12px;'><a href='update-form.php'><i class='material-icons dp48'>brush</i></a></button>";
		$data[0]= $sr;
        $data[1]=ucwords($row['name']);
		$data[2]=$row['address'];
		$data[3]=$row['gst_no'];
		$data[4]=ucwords($row['username']);
		$data[5]=date("d-M-Y", strtotime($row['createdata']) );
		$data[6]= "<div class='btn-wrapper text-right'>
		$status
		$update		
		<button type='button' data-id='".$row['id']."'' class='btn btn-smal user_deletel' style='padding: 1px 5px;font-size: 12px;'><a href='delete.php?id= $row[id]'><i class='material-icons dp48'>delete</i></a></button>
		</div>";
		$sr++;
		array_push($store,$data);
		unset($data);
		$html ='';

       }
    }

    $finaldata = array('data'=>$store);
    
  echo    json_encode($finaldata);
    
?>

