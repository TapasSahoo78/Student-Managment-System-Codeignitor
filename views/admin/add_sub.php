

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard :: School CRM</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-1">
          <a href="<?php echo base_url();?>insert-class">
          <button type="button" class="btn btn-primary">Add Class</button></a></div>
          <div class="btn-group me-1">
          <a href="<?php echo base_url();?>insert-section">
            <button type="button" class="btn btn-success">Add Section</button></a>
          </div>
          <div class="btn-group me-1">
          <a href="<?php echo base_url();?>insert-subject">
            <button type="button" class="btn btn-danger">Add Subject</button></a>

          </div>
        </div>
      </div>
</main>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="row">
  <div class="col-sm-4">

  <div class="container">
  <h3>Insert Subject</h3>
  <div class="row">
    <form role="form" method="post" action="<?php echo base_url();?>Add_sub_con/savedata" class="col-xs-3">

      <div class="form-group">
        <label for="name">&nbsp;<i>Subject Name</i></label>
        <input type="text" class="form-control" id="name" name="sub_name" required>
      </div>
      <div class="form-group">
       <!-- <label for="name">&nbsp;<i></i></label>-->
        <input type="hidden" class="form-control" id="name" name="is_active">
      </div>
       <br>
      <input type="submit"  class="btn btn-outline-primary" name="save" value="Submit">
    </form>
  </div>
</div>

  </div>


  <div class="col-sm-8">

  <div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>Subject Name</th>
        <th>Is_Active</th>
        <th>Option</th>
      </tr>
</thead>

  <?php /*echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->class_name."</td>";
  echo "</tr>";
  $i++;*/ ?>

<tbody>
    <?php
    $i=1;
    foreach($data as $row)
    { ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row->subj_name ?></td>
        <td><?php echo $row->is_active ?></td>
        <td><a href="<?php echo base_url();?>Add_sub_con/updatedata/<?php echo $row->id;?>">Edit</a></td>
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















