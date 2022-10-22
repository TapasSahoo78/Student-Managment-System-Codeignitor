<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Signin</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">




  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>public/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <main class="form-signin">
    <form method="post" action="">
      <img class="mb-4" src="<?php echo base_url(); ?>public/image/admin_logo.jpg" alt="" width="100" height="70">
      <h1 class="h1 mb-3 fw-bold">Admin Login</h1>



      <?php
      //$message = $this->session->userdata('message');
      // if ($message) {
      //   echo "<span>$message</span>";
      //   $this->session->unset_userdata('message');
      // }
      //name="username"
      //name="password"

      ?>

      <div class="form-floating">
        <input type="email" class="form-control" id="name" name="name" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <!--<button class="w-100 btn btn-lg btn-primary" id="submit" type="submit">Sign in</button>-->
      <input class="w-60 btn btn-lg btn-primary" type="submit" value="Login" id="submit" name="submit">

      <!-- <div id='err_msg' style='display: none'>
        <div id='content_result'>
          <div id='err_show' class="w3-text-red">
            <div id='msg'> </div></label>
          </div>
        </div>
      </div> -->

      <div id="msg" class="mt-4"></div>
      

      <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>-->
    </form>
  </main>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
  // Ajax post  
  $(document).ready(function() {
    $("#submit").click(function() {
      //var data = $("#submit").serialize();
      var user_name = $("#name").val();
      var password = $("#pwd").val();
      // Returns error message when submitted without req fields.  
      if (user_name == '' || password == '') {
        $("div#err_msg").show();
        $("div#msg").html("All fields are required");
      } else {
        // AJAX Code To Submit Form.  
        $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>" + "admin/check_login",
          data: {
            name: user_name,
            pwd: password
          },
          dataType: 'json',
          success: function(result) {
            console.log(result);
            
            if (result.stat == 'oky') {
              $("#msg").html("<span style='color:green'>" + result.msg + "</span>");
              setTimeout(function(){ 
                location.href = "<?php echo base_url(); ?>" + "dashboard";
              }, 3000);
              
            } else {
              $("#msg").html("<span style='color:red'>" + result.msg + "</span>");
            }
          }
        });
      }
      return false;
    });
  });
</script>


</html>