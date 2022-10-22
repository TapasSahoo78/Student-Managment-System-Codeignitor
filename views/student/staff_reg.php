<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Teacher :: Add Teacher</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-1">
          <a href="<?php echo base_url('staff_con/staff_info_list');?>">
          <button type="button" class="btn btn-primary">Staff List</button></a></div>
        </div>
      </div>
</main>


<br/><br/>




<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
<form method="post" id="submit_staff_info" action="<?php echo base_url();?>staff_con/staff_info_insert">

<div class="container-fluid">
  <div class="row">
   

   <div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">First_Name<span style= "color:red">*</span></label>
      <input type="text" class="form-control" placeholder="First Name" id="firstname" name="first_name" >
      <span id="firstspan" style='color: red;'></span>
    </div>
   </div>


<div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">Middle_Name</label>
      <input type="text" class="form-control" placeholder="Middle Name" id="middlename" name="middle_name" >
    </div>
   </div>


   <div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">Last_Name<span style= "color:red">*</span></label>
      <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="last_name" required>
      <span id="lastspan" style='color: red;'></span>
    </div>
   </div>



      <div class="col-md-3">
    <div class="mb-3">
      <label for="gender">Gender<span style= "color:red">*</span></label>&nbsp;<br>
      <input type="radio" value="m"  id="male" name="gender" required>
      <label for="gender">Male</label><br>
      <input type="radio" value="f"  id="female" name="gender">
      <label for="gender">Female</label><br>
      <input type="radio" value="o"  id="other" name="gender">
      <label for="gender">Others</label><br>
      <span id="disp" style= "color:green"> </span>  
      <span id="error" style= "color:red"> </span>  
    </div>
   </div>




   <div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">Contact_num<span style= "color:red">*</span></label>
      <input type="number" class="form-control" placeholder="123-45-678" id="number"
      name="contact_num" required>
      <span id="numberph" style= "color:green"> </span>
      <span id="numberText" style= "color:red"></span>
    </div>
   </div>


   <div class="col-md-3">
    <div class="mb-3">
     <label for="first_name">Email_id<span style= "color:red">*</span></label>
      <input type="text" class="form-control" placeholder="Email id" id="email" name="email_id" required>
      <!-- <span id="valemail" style= "color:green"> </span> -->
      <span id="notvalemail" style= "color:red"></span>
    </div>
   </div>


   <div class="col-md-3">
    <div class="mb-3">
     <label for="first_name">Address</label>
      <input type="text" class="form-control" placeholder="Address" name="address" required>
    </div>
   </div>

      <div class="col-md-3">
    <div class="mb-3">
     <label for="first_name">City</label>
      <input type="text" class="form-control" placeholder="City" name="city" required>
    </div>
   </div>

      <div class="col-md-3">
    <div class="mb-3">
   <label for="first_name">State</label>
      <input type="text" class="form-control" placeholder="State" name="state" required>
    </div>
   </div>

      <div class="col-md-3">
    <div class="mb-3">
   <label for="first_name">Country</label>
      <input type="text" class="form-control" placeholder="Country" name="country" required>
    </div>
   </div>

   <!-- <input type="hidden" name="stud_id" id="temp_stud_id" value="<?php //echo $stud_id ?>"> -->



<div class="text-center">
<button type="button" onclick="validation()" class="btn btn-primary" id="">Submit</button>
</div>



</div>
</div>

</form>

<!-- <div class="container">
    <span id="success_show" style="color: green;text-align:center"></span>
    <span id="fail_show" style="color: green;text-align:center"></span>
  </div> -->

</main>



<!--Modal-->
<!-- <a href="<?php //echo base_url();?>parent_con/stud_parent_info_show"></a> -->
<!-- <div class="modal" tabindex="-1" id="parentModal">
  <div class="modal-dialog">  
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Parent data is inserted</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-lebel="Close"></button>
      </div>
      <div class="modal-body">
        <p>Would you like to another parent details </p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" onclick="goToStudentForm();">No</button>
      <button type="button" class="btn btn-primary" onclick="goToParentForm();">Yes</button>
      
      </div>
    </div>    
  </div>
</div> -->






