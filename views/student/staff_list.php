<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Teacher :: Staff List</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-1">
          <a href="<?php echo base_url('staff_con/staff_info_form');?>">
          <button type="button" class="btn btn-primary">Add Staff</button></a></div>
        </div>
      </div>
</main>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<!-- <div class="row">
  <div class="col-sm-4">
  <div class="container">
  <h3>Insert Class</h3>
  <div class="row">
    <form role="form" method="post" action="<?php //echo base_url();?>Add_class_con/savedata" class="col-xs-3">

      <div class="form-group">
        <label for="name">&nbsp;<i>Class Name</i></label>
        <input type="text" class="form-control" id="name" name="class_name" required>
      </div>
       <br>
      <input type="submit"  class="btn btn-outline-primary" name="save" value="Submit">

    </form>
  </div>
</div>
 </div> -->
 <br/><br/>

<div class="col-sm-12">

<div class="container">
<table class="table table-bordered" style="border: '2';">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Contact Num</th>
        <th>Email_id</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
      </tr>
    </thead>

    <?php //print_r($staff_list)?>
    


    <tbody>
    <?php
    $i=1;
    foreach($staff_list as $row)
    { ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['middle_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['contact_num'] ?></td>
        <td><?php echo $row['email_id'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['state'] ?></td>
        <td><?php echo $row['country'] ?></td>
        
      </tr>  
      <?php
    $i++; 
    }
    ?> 

      </tbody>  


  </table>
</div>


  

  </div>
</div>

 
</main>
