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
  <h3>Update Section</h3>
  <div class="row">

  <?php
  foreach($result as $row)
  {
  ?>

    <form role="form" method="post" action="<?php echo base_url('Add_sec_con/edit_details') ?>" class="col-xs-3">

      <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <label for="name">&nbsp;<i>Section Name</i></label>
        <input type="text" class="form-control" id="name" name="section_name" value="<?php echo $row['section_name'];?>" >
      </div>
       <br>
      <input type="submit"  class="btn btn-outline-primary" name="update" value="Update">

    </form>
    <?php } ?>
  </div>
</div>

  </div>




