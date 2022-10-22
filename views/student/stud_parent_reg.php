<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Student :: Add Parent</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-1">
          <a href="<?php echo base_url('Parent_con/stud_parent_info');?>">
          <button type="button" class="btn btn-primary">Parent List</button></a></div>
        </div>
      </div>
</main>


<br/><br/>




<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
<form method="post" id="parent_form" action="">

<div class="container-fluid">
  <div class="row">
   

   <div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">First_Name:</label>
      <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
    </div>
   </div>


<div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">Middle_Name:</label>
      <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" required>
    </div>
   </div>


   <div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">Last_Name:</label>
      <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
    </div>
   </div>


   <div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">Parent Type:</label>
      <select class="form-select" aria-label="Default select example" name="parent_type" required>
        <option selected>select Parent type</option>
        <option value="Father">Father</option>
    <option value="Mother">Mother</option>
    <option value="Local Guardian">Local Guardian</option>
        </select>
    </div>
   </div>

      <div class="col-md-3">
    <div class="mb-3">
      <label for="gender">Gender:</label>&nbsp;<br>
      <input type="radio" value="m" name="gender" required>
      <label for="gender">Male</label><br>
      <input type="radio" value="f" name="gender">
      <label for="gender">Female</label><br>
      <input type="radio" value="o" name="gender">
      <label for="gender">Others</label><br>
    </div>
   </div>


   <div class="col-md-3">
    <div class="mb-3">
      <label for="first_name">Contact_num:</label>
      <input type="text" class="form-control" placeholder="Contact Number" name="contact_num" required>
    </div>
   </div>


   <div class="col-md-3">
    <div class="mb-3">
     <label for="first_name">Email_id:</label>
      <input type="text" class="form-control" placeholder="Email id" name="email_id" required>
    </div>
   </div>


   <div class="col-md-3">
    <div class="mb-3">
     <label for="first_name">Address:</label>
      <input type="text" class="form-control" placeholder="Address" name="address" required>
    </div>
   </div>

      <div class="col-md-3">
    <div class="mb-3">
     <label for="first_name">City:</label>
      <input type="text" class="form-control" placeholder="City" name="city" required>
    </div>
   </div>

      <div class="col-md-3">
    <div class="mb-3">
   <label for="first_name">State:</label>
      <input type="text" class="form-control" placeholder="State" name="state" required>
    </div>
   </div>

      <div class="col-md-3">
    <div class="mb-3">
   <label for="first_name">Country:</label>
      <input type="text" class="form-control" placeholder="Country" name="country" required>
    </div>
   </div>

   <input type="hidden" name="stud_id" id="temp_stud_id" value="<?php echo $stud_id ?>">



<div class="text-center">
<button type="button" class="btn btn-primary" id="parent_insert_btn">Submit</button>
</div>



</div>
</div>

</form>

<div class="container">
    <span id="success_show" style="color: green;text-align:center"></span>
    <span id="fail_show" style="color: green;text-align:center"></span>
  </div>

</main>



<!--Modal-->
<div class="modal" tabindex="-1" id="parentModal">
  <div class="modal-dialog">  
    <!-- Modal content-->
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
      <!-- <a href="<?php //echo base_url();?>parent_con/stud_parent_info_show"></a> -->
      </div>
    </div>    
  </div>
</div>