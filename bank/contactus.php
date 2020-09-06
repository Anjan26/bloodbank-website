<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&family=Righteous&display=swap" rel="stylesheet">

    <!-- footer part -->
    <link rel="stylesheet" type="text/css" href="footer/footer.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

    <title>Contact Us</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
</head>

<style>
    .nav-link:hover {
        /* text-decoration: underline; */
        background-color: #5fa2db;
        border-radius: 5px;
    }
    
    body {
        background-color: #fff3e6;
    }
    
    </style>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #000066; padding-left:25px; width: 100%;">
        <a class="navbar-brand" href="homepage.php" style="font-family: 'Lemonada', cursive;
            font-family: 'Righteous', cursive; font-size: 1.5vw; color: white;"><img src="images/icon.png" style="width: 7%;">&nbsp Blood Bank
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="margin-right: 20px; font-weight: bold;color: white;">About </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="whybecomedonor.php" style="margin-right: 20px; font-weight: bold;color: white;">Why Become donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="becomedonor.php" style="margin-right: 20px; font-weight: bold;color: white;">Become a donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="searchblood.php" style="margin-right: 20px; font-weight: bold;color: white;">Search Blood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php" style="margin-right: 20px; font-weight: bold;color: white;">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/php/bank/adminpanel/index.php" style="margin-right: 20px; font-weight: bold;color: white;">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <br> <br> <br>
    
    <div class="container">
        <h1 class="mt-4 mb-3">Contact Us</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="homepage.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact Us</li>
        </ol>
        <form method="post">
            <div style="background-color: #b3e6ff;  padding: 2%; border-radius: 5px;">
                <div class="column">
                    <h3>Send Us Message</h3>
                    <br>

                    <div class="col-lg-6 mb-4">
                        <div>Full Name<span style="color:red">*</span></div>
                        <input name="fullname" class="form-control" type="text" placeholder="Enter Name" required>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div>Mobile Number<span style="color:red">*</span></div>
                        <input name="mobileno" class="form-control" type="number" placeholder="Enter Mobile Number" required>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div>Email Id<span style="color:red">*</span></div>
                        <input name="emailid" class="form-control" type="email" placeholder="Enter Email Address" required><br><br>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div>Message<span style="color:red">*</span></div>
                        <textarea name="message" class="form-control" required></textarea>
                    </div>
  
                    <div class="col-lg-4 mb-4 ">
                        <div><input type="submit" name="submit" class="btn btn-primary" value="Submit"></div>
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
                             $message=$_POST['message'];
                             $sql="insert into contactusquery(Name,ContactNumber,EmailId,Message) values('$fullname','$mobile','$email','$message')";
                    if (mysqli_query($conn, $sql)) {
                        echo "<b style='color:#00b33c;'>Success:</b> <b>Query placed. We will contact you shortly!</b>";
                      
                     } else {
                        echo "<b style='color:#00b33c;'>Error:</b> <b>Something is wrong!</b>";
                     }
                     mysqli_close($conn);
                }
                    
                    ?>
                
                </div>
                
            </div>
        </form>
    </div>

    <br>
    <br>
    <br>

    <?php
        include('footer/footer.php');      
    ?>
<script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>
 
</body>
</html>