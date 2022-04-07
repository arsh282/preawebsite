<?php
include('connection.php');
if(isset($_POST) && $_SESSION['role']=='1'){
    $id = $_POST['id'];
    echo $query = "SELECT * FROM login_user where staff_id= '$id'";
    $userdata =  get_query_data($query,true); 
    
   // pr($userdata);
} ?>
<h3 class='text-center'>Change <?=$userdata['full_name']?> Status</h3>
<hr>
<br>
<form id='update_salary'>
<div class="row">
    <div class="col-xs-12">
        <label for="">Current Status</label>
        <div class="md-radio-inline">
            <div class="md-radio">
                <input type="radio" <?=($userdata['user_status']=='Active')?'checked':''?>  name="job_status" id='Active' value='Active' class="md-radiobtn job_status">
                <label for="Active">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> Active</label>
            </div>
            <div class="md-radio">
                <input type="radio" <?=($userdata['user_status']=='Inactive')?'checked':''?>  name="job_status" id='Inactive' value='Inactive' class="md-radiobtn job_status">
                <label for="Inactive">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> Inactive</label>
            </div>
            <div class="md-radio">
                <input type="radio" <?=($userdata['user_status']=='Resign')?'checked':''?>  name="job_status" id='Resign' value='Resign' class="md-radiobtn job_status">
                <label for="Resign">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> Resign</label>
            </div>
             <div class="md-radio">
                <input type="radio" <?=($userdata['user_status']=='Left')?'checked':''?>  name="job_status" id='Left' value='Left' class="md-radiobtn job_status">
                <label for="Left">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> Left</label>
            </div>
            <div class="md-radio">
                <input type="radio" <?=($userdata['user_status']=='Fired')?'checked':''?>  name="job_status" id='Fired' value='Fired' class="md-radiobtn job_status">
                <label for="Fired">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> Fired</label>
            </div>
        </div>
    </div>
    <div class="text-center col-xs-12">
        <input type="hidden" name="update_delete" value='<?=$userdata['id'];?>'/>
        <button class='btn btn-success'>Update</button>
    </div>
</div>
</form>