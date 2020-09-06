<?php
session_start();
$conn = new mysqli("localhost", "root","","bloodbank");

if($conn->connect_error){
    die("connection error");
}
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Original+Surfer&display=swap" rel="stylesheet">
    

    <!-- Sidenav CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
    <script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
   

  <!-- Custom styles for this template -->
  <!-- <link href="css/simple-sidebar.css" rel="stylesheet"> -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Donor</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />  
</head>
<style>
    
    #wrapper {
    overflow-x: hidden;
 }

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
#list{
    background-color: #000066; 
    color:#b3e6ff;
}
#list:hover{   
    background-color: #5fa2db;            
    }
</style>

<body style="background-color: #fff3e6;">
   
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class=" border-right" id="sidebar-wrapper"  style="background-color: #000066;">
  <div class="sidebar-heading" style="color:#b3e6ff;"><u><b>Contents </b></u></div>
  <div class="list-group list-group-flush">
    <a href="dashboard.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-tachometer-alt"></i>&nbsp Dashboard</a>
    <a href="adddonor.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-user-edit"></i>&nbsp Add Donor</a>
    <a href="donorlist.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-users"></i>&nbsp Donor List</a>
    <a href="managequery.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-desktop"></i>&nbsp Manage Query</a>
    <a href="changepassword.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-eye"></i>&nbsp Change Password</a>
    <a href="logout.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-power-off"></i>&nbsp Logout</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #000066;">
    <button class="btn btn-info" id="menu-toggle">Menu</button>

    <a class="navbar-brand" href="#" style="font-family: 'Lemonada', cursive;
            font-family: 'Righteous', cursive; font-size: 1.5vw; color: white;"><img src="images/icon.png" style="width: 7%; margin-left:2%;">&nbsp Blood Bank
        </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
       
      </ul>
    </div>
  </nav>



  <div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title" style="width:80%; padding:0.5%;margin-top:2%; padding-left: 1%; background-color:#b3e6ff;border-radius: 10px; box-shadow: 5px 5px #888888;" >Add Donor</h2>

						<div class="panel panel-default">               
              <div class="panel-heading" style="font-size: 150%; margin-left:1%; margin-top:3%;"><b>Basic Info </b></div><hr>



<form method="post" >
<div class="table-bordered" style="padding: 2%; border-radius: 10px; border: 1px solid #00b3b3;">
<div class="form-row">
<div class="col-md-4 mb-3">
<label >Full Name<span style="color:red">*</span></label>
<input type="text" name="fullname" class="form-control"  placeholder="Enter Name" required>
</div>
<div class="col-md-4 mb-3">
<label>Mobile No<span style="color:red">*</span></label>
<input type="number" name="mobileno"   maxlength="10" class="form-control" placeholder="Enter Mobile Number"  required>
</div>
<div class="col-md-4 mb-3">
<label>Email Id<span style="color:red">*</span></label>
<input type="email" name="emailid" class="form-control" placeholder="Enter Email Address"required>
</div>
</div>

<div class="form-row">
<div class="col-md-4 mb-3">
<label >Age<span style="color:red">*</span></label>
<input name="age" class="form-control" type="number " placeholder="Age" required>
</div>
<div class="col-md-4 mb-3">
<label>Gender<span style="color:red">*</span></label>
<select name="gender" class="form-control " required>
                            <option value=" ">Select</option>
                            <option value="Male ">Male</option>
                            <option value="Female ">Female</option>
                            <option value="Others ">Other</option>
</select>
</div>
<div class="col-md-4 mb-3">
<label>Blood Group<span style="color:red">*</span></label>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "bloodbank");

                        if($conn->connect_error){
                        die("connection failed");
                        }
                        echo '<select name="bloodgroup" class="form-control" required>
                        <option>Select</option>';
                         
                        $sqli = "select * from bloodgroup";
                        $result = mysqli_query($conn, $sqli);
                        while ($row = mysqli_fetch_array($result)) {
                        echo '<option>'.$row['BloodGroup'].'</option>';
                        }
                         
                        echo '</select>';
                         
                        ?>
                  
</div>
</div>


<div class="form-row">
<div class="col-lg-6 mb-4">
<label>Address<span style="color:red">*</span></label>
<textarea name="address" class="form-control" maxlength="100" required></textarea>
</div>
<div class="col-lg-6 mb-4">
<label>Message</label>
<textarea name="message" class="form-control" maxlength="100"></textarea>
</div>


<div class="form-row">
<button class="btn btn-danger" type="reset" style="margin-left: 10px;">Cancel</button>
<button class="btn btn-success" name="submit" type="submit" style="margin-left: 10px;">Save Changes</button>
</div>
</div>
            </div>
          </div>
        
      



<?php
             $conn = new mysqli("localhost","root","","bloodbank");

            if($conn->connect_error){
                die("connection failed");
              }
              if(isset($_POST['submit']))
                 {
                    $fullname=$_POST['fullname'];
                    $mobile=$_POST['mobileno'];
                    $email=$_POST['emailid'];
                    $age=$_POST['age'];
                    $gender=$_POST['gender'];
                    $bloodgroup=$_POST['bloodgroup'];
                    $address=$_POST['address'];
                    $message=$_POST['message'];
                    $status=1;
                    $sql="INSERT INTO  blooddonor(FullName,MobileNumber,EmailId,Age,Gender,BloodGroup,Address,Message,status) VALUES('$fullname','$mobile','$email','$age','$gender','$bloodgroup','$address','$message','$status')";
                    if (mysqli_query($conn, $sql)) {
                        echo "<b style='color:#00b33c;'>Success:</b> <b>Record saved successfully!</b>";
                     } else {
                        echo "<b style='color:#00b33c;'>Error:</b> <b>Something is wrong!</b>";
                     }
                     mysqli_close($conn);
                }

              ?>

</form>
</div>
</div>
</div>
		
             


<!-- Bootstrap core JavaScript
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>