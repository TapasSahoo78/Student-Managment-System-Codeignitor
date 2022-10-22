
    </div>
    </div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> 
   <script src="<?php echo base_url();?>public/js/dashboard.js"></script>
  </body>
</html>


<script>

function goToStudentForm() {
		window.location.href= "<?php echo base_url();?>student_con/stud_personal_info_show";
		//windows.location.reload();
		
	}

	function goToParentForm() {
		window.location.href= "<?php echo base_url();?>parent_con/stud_parent_info_form/" + $("#temp_stud_id").val();
		
	}
//Parent Data Insert
$("#stu_insert_btn").click(function(){

var form_data=$("#stu_form").serialize();

$.ajax({
	type: "POST",
	url: "<?php echo base_url('student_con/stud_personal_info_insert');?>",
	data: form_data,
	dataType: 'json',
	success: function(return_data){ 
		//console.log(form_data);
		//console.log('hello');
            var myModal= new bootstrap.Modal(document.getElementById("studentModal"),{});
			myModal.show();
			 if(return_data.stat == 'ok'){
				 $("#temp_stud_id").val(return_data.stud_id);
				$('#success_show').html('Form submitted successfully !'); 
			 }else{
				$('#fail_show').html('Form submission failed..... '); 
			 }


			}
    
			
	

});
});

//Double parent data Insert
$("#parent_insert_btn").click(function(){

var form_data=$("#parent_form").serialize();


//validation

// var f_name = $('#parent_form [name=first_name]').val();

// if(f_name == ''){
// 	alert('asdsad asdsd');
// 	return;
// }


$.ajax({
	type: "POST",
	url: "<?php echo base_url('parent_con/parent_personal_info_insert')?>",
	data: form_data,
	dataType: 'json',
	success: function(return_data){
		//console.log(form_data);
		//console.log('hello');
            var myModal= new bootstrap.Modal(document.getElementById("parentModal"),{});
			myModal.show();
			 if(return_data.stat == 'ok'){
				//$("#temp_stud_id").val(return_data.stud_id);
				$('#success_show').html('Form submitted successfully !'); 
			 }else{
				$('#fail_show').html('Form submission failed..... '); 
			 }


			}
    
			
	

});
});








function validation(){ 
	//console.log('hello');
	var first = document.getElementById('firstname').value;
	var last = document.getElementById('lastname').value;

	var n = document.getElementById('number').value;

	var x = document.getElementById('email').value;

	//var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

	var genderM = document.getElementById('male').value;
	var genderF = document.getElementById('female').value;
	var genderO = document.getElementById('other').value;
	// console.log(first);
	// return;
	//var last  = document.getElementById('middlename').value;
	//var last  = document.getElementById('lastname').value;
	// var email  = document.getElementById('email').value;
	// var pass  = document.getElementById('password').value;
	// var cnfmpass = document.getElementById('cnfmpass').value;
	//firstname
	if (first == "") {
	document.getElementById('firstspan').innerHTML =" ** please fill the first name";
	return false;
	}
	if((first.length <= 2) || (first.length > 20)) {
	document.getElementById('firstspan').innerHTML =" ** user length must be between 2 and 20";
	return false;    
	}
	if(!isNaN(first)){
	document.getElementById('firstspan').innerHTML =" ** only characters not numbers";
	return false;   
	}


	if (last == "") {
	document.getElementById('lastspan').innerHTML =" ** please fill the last name";
	return false;
	}
	if((last.length <= 2) || (last.length > 20)) {
	document.getElementById('lastspan').innerHTML =" ** user length must be between 2 and 20";
	return false;    
	}
	if(!isNaN(last)){
	document.getElementById('lastspan').innerHTML =" ** only characters not numbers";
	return false;   
	}


	

  
            // if(document.getElementById('male').checked) {   
            //     document.getElementById("disp").innerHTML   
            //         = document.getElementById("male").value   
            //         + " radio button is checked";   
            // }   
            // else if(document.getElementById('female').checked) {   
            //     document.getElementById("disp").innerHTML   
            //         = document.getElementById("winter").value   
            //         + " radio button is checked";     
            // }   
            // else if(document.getElementById('other').checked) {   
            //     document.getElementById("disp").innerHTML   
            //         = document.getElementById("other").value   
            //         + " radio button is checked";     
            // }  
            // else {   
            //     document.getElementById("error").innerHTML   
            //         = "You have not selected any season";  
			// 		//return true; 
            // }   



			var getSelectedValue = document.querySelector(   
                'input[name="gender"]:checked');   
                
            if(getSelectedValue != null) {   
                document.getElementById("disp").innerHTML   
                    = getSelectedValue.value   
                    + " season is selected";   
            }   
            else {   
                document.getElementById("error").innerHTML   
                    = "*You have not selected any season";  
					return true; 
            }   
        







	if ( n == '' || isNaN(n)) {
		document.getElementById(
			"numberText").innerHTML =
			"Please enter Numeric value**";
		return true;
	} else {
		document.getElementById(
			"numberph").innerHTML = 
			"Your phone number : " + n;
		
	}



	//var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  //alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  document.getElementById('notvalemail').innerHTML =" ** Please enter a valid e-mail address";
  return false;  
}



	$('#submit_staff_info').submit();



}






</script>







<!--

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var first_name = $('#name').val();
    var middle_name = $('#name').val();
    var last_name = $('#name').val();
    var phone = $('#phone').val();
    //var  = $('#name').val();
		var dob = $('#dob').val();
		var doj = $('#doj').val();
		var password = $('#password').val();
		if(first_name!="" && middle_name!="" && last_name!="" && phone!="" && dob!="" && doj!="" && password!=""){
			$.ajax({
				url: "",
				type: "POST",
				data: {
					first_name: first_name,
					middle_name: middle_name,
					last_name: last_name,
					phone: phone,
          dob : dob,
          phone: phone,
          doj : doj,
          password: password,	
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>

-->