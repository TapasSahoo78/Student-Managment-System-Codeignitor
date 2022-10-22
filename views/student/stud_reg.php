<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Student :: Add Student</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-1">
          <a href="<?php echo base_url('student_con/stud_personal_info');?>">
          <button type="button" class="btn btn-primary">Student List</button></a></div>
        </div>
      </div>
</main>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

<form method="post" id="stu_form" action="">
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
    <label for="middle_name">Middle_Name:</label>
			<input type="text" class="form-control"  placeholder="Middle Name" name="middle_name">
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
    <label for="last_name">Last_Name:</label>
			<input type="text" class="form-control"  placeholder="Last Name" name="last_name" required>
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
    <label for="gender">Gender:</label><br>
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
    <label for="dob">Dob:</label>
			<input type="date" class="form-control"  name="dob" required>
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
    <label for="doj">Date_of_Join:</label>
			<input type="date" class="form-control"  placeholder="Date of Join" name="date_of_join" required>
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
    <label for="password">Password:</label>
			<input type="text" class="form-control"  placeholder="login_password" name="login_password"required>
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
	<label for="first_name">Class:</label>
    <select class="form-select" aria-label="Default select example" name="class_name" required>

    <option selected>select class</option>
		 <?php
		foreach($class_data as $class)
		{?>
		 <option value="<?php echo $class->id?>"><?php echo $class->class_name?></option>
		 <?php	} ?>
        </select>
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
	<label for="first_name">Section:</label>
   <select class="form-select" aria-label="Default select example" name="section_name" required>

      <option selected>select section</option>
		 <?php
		foreach($section_data as $section)
		{?>
		 <option value="<?php echo $section->id?>"><?php echo $section->section_name?></option>
		 <?php	} ?>
       </select>
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
    <label for="password">Roll No:</label>
			<input type="text" class="form-control" placeholder="Roll Number" name="roll_no" required>
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
    <label for="password">Year_of_Join:</label>
			<input type="text" class="form-control" placeholder="Year of join" name="year_of_join" required>
    </div>
   </div>

    <div class="col-md-3">
    <div class="mb-3">
    <label for="password">Last_year_marks:</label>
			<input type="text" class="form-control"  placeholder="Last year marks" name="last_year_marks" required>
    </div>
   </div>

       <div class="col-md-3">
    <div class="mb-3">
	<label for="first_name">Is_Promoted:</label>
    <select class="form-select" aria-label="Default select example" name="is_promoted" required>
        <option selected>select Status</option>
        <option value="yes">Yes</option>
		<option value="no">No</option>
		<option value="new">New</option>
        </select>
    </div>
   </div>


   <div class="text-center">
<button type="button" class="btn btn-primary" id="stu_insert_btn">Submit</button>
</div>

</div>
</div>

</form>

<div class="container">
		<span id="success_show" style="color: green;text-align:center"></span>
		<span id="fail_show" style="color: green;text-align:center"></span>
	</div>

	<input type="hidden" name="stud_id" id="temp_stud_id">


</main>




<!--Modal-->
<div class="modal" tabindex="-1" id="studentModal">
	<div class="modal-dialog">  
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Student data is inserted</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-lebel="Close"></button>
			</div>
			<div class="modal-body">
				<p>Would you like to insert parent's data also </p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-secondary" onclick="goToParentForm();">No</button>
			<button type="button" class="btn btn-primary" onclick="goToParentForm();">Yes</button>
			<!-- <a href="<?php //echo base_url();?>parent_con/stud_parent_info_show"></a> -->
			</div>
		</div>		
	</div>
</div>