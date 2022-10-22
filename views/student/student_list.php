

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Student :: Student List</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-1">
          <a href="<?php echo base_url('Student_con/stud_personal_info_show');?>">
          <button type="button" class="btn btn-primary">Add Student</button></a></div>
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
<br/><br/><br/>

  <div class="col-sm-8">

  <div class="container">
  <table class="table table-bordered" style="border: '2';">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>Date of join</th>
        <th>Password</th>
        <th>Class</th>
        <th>Section</th>
        <th>Roll No</th>
        <th>Year of Join</th>
        <th>Last_year_marks</th>
        <th>Is_Promoted</th>
        <th>Details</th>
      </tr>
    </thead>

  <?php /*echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->class_name."</td>";
  echo "</tr>";
  $i++;*/ ?>


    

     <?php //echo print_r($stud_list); ?>


    <tbody>
    <?php
    $i=1;
    foreach($stud_list as $row)
    { ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['middle_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['dob'] ?></td>
        <td><?php echo $row['date_of_join'] ?></td>
        <td><?php echo $row['login_password'] ?></td>
        <td><?php echo $row['class_name'] ?></td>
        <td><?php echo $row['section_name'] ?></td>
        <td><?php echo $row['roll_no'] ?></td>
        <td><?php echo $row['year_of_join'] ?></td>
        <td><?php echo $row['last_year_marks'] ?></td>
        <td><?php echo $row['is_promoted'] ?></td>
        <td><a href="<?php echo base_url()?>parent_con/stud_parent_info/<?php echo $row['stud_id'] ?>"><button>Parent</button></a></td>
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
