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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
    
    <!-- footer part -->
    <link rel="stylesheet" type="text/css" href="footer/footer.css">
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

    <title>Homepage</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
</head>

<style>
    .nav-link:hover {
        /* text-decoration: underline; */
        background-color: #5fa2db;       
        border-radius: 5px;
    }
    
    .carousel-item {
        width: 100%;
        /* height: 630px; */
        background-size: cover;
    }
    
    .mydiv {
        width: 75%;
        align-content: center;
        background-color: #000066;
        font-size: large;
        text-align: center;
        padding: 15px;
        position: relative;
        border-radius: 10px;
        box-shadow: 7px 7px #888888;
        animation: mymove 8s infinite;
    }
    
    @keyframes mymove {
        from {
            left: 5%;
        }
        to {
            left: 20%;
        }
    }
    
    body {
        background-color: #fff3e6;
    }

    .header1{
        margin-left:8%; 
        margin-bottom: 3.5%;
        margin-top: 1.5%;
        width: 83%;
        background-color: #b3e6ff ;
        color: black;
        font-size: 180%;
        font-family: 'Bree Serif', serif;
        padding: 10px;
        padding-left:2%;
        position: relative;
        border-radius: 10px;
        box-shadow: 5px 5px #888888;
    }
    .header2{
        margin-left:8%; 
        margin-bottom: 3.5%;
        margin-top: 3%;
        width: 83%;
        background-color: #b3e6ff ;
        color: black;
        font-size: 180%;
        font-family: 'Bree Serif', serif;
        padding: 10px;
        padding-left:2%;
        position: relative;
        border-radius: 10px;
        box-shadow: 5px 5px #888888;
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



    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
                <img src="images/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="images/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="images/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="images/4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>

        <div style="text-align: center;position: relative;margin-top: -42%;margin-bottom: 20%; font-family: 'Metal Mania', cursive; ">
            <p style="color:  #b3e6ff;font-size: 6vw; -webkit-text-stroke: 0.1px black;"><b>Donate Blood, </b></p>
            <p style="color:  #b3e6ff;font-size: 6vw; -webkit-text-stroke: 0.1px black;"><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSave Lives</b></p>
    </div>

    <br>
    <br>
    <br>
    
    
    <div class="mydiv">
        <h2 style="color: white;font-family: 'Bree Serif', serif;">Welcome to BloodBank & Donor Management System</h2>
    </div>
<br>

    <div class="container" style="margin-top: 2%; border-radius: 15px;">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card" style="border-color: #0099cc;">
                    <h4 class="card-header" style="background-color: #b3e6ff ; font-family: 'Bree Serif', serif;">The Need for Blood</h4>

                    <p class="card-text" style="padding-left:2%; background-color: #f2f2f2;">The reason to donate is simple, it helps save lives. In fact, every two seconds of every day, someone needs blood. Since blood cannot be manufactured outside the body and has a limited shelf life, the supply must constantly be replenished
                        by generous blood donors.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" style="border-color: #0099cc;">
                    <h4 class="card-header" style="background-color: #b3e6ff; font-family: 'Bree Serif', serif;">Blood Tips</h4>

                    <p class="card-text" style="padding-left:2%;background-color: #f2f2f2;">In the days before your donation, eat healthy, iron-rich foods such as spinach, red meat, fish, poultry, beans, iron-fortified cereals and raisins. This will help maintain a healthy iron level. The number one reason for deferrals is
                        anemia. Get a good night’s sleep.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" style="border-color: #0099cc;">
                    <h4 class="card-header" style="background-color: #b3e6ff;font-family: 'Bree Serif', serif;">Who you could Help</h4>

                    <p class="card-text" style="padding-left:2%;background-color: #f2f2f2;">Every day, blood donors help patients of all ages: accident and burn victims, heart surgery and organ transplant patients, and those battling cancer. In fact, every two seconds, someone in the U.S. needs blood. Most deaths occured
                        due to unavailability of required blood. </p>
                </div>
            </div>
        </div>
    </div>


<div class="header1">Some of the Donors</div>

<div class="container">
<div class="row" style="row-gap: 25px;">
<?php
$conn = new mysqli("localhost", "root","","bloodbank");

if($conn->connect_error){
    die("connection error");
}

$status=1;
$donorquery = "select * from blooddonor where status='$status' order by rand() limit 6;";
$donorresult = $conn->query($donorquery);

while( $record = mysqli_fetch_assoc($donorresult) ) {
?>

<div class="col-lg-4 col-sm-6 portfolio-item">
<div class="card h-100"  style="border-color: #0099cc; border-radius: 10px;">
<img class="card-img-top img-fluid" src="images/card1.jpg">
<div class="card-block" style="background-color: #f2f2f2;">
<h5 class="card-title" style="padding-left: 10px; padding-top:5px;">Donor Information</h5><hr>
<p class="card-text"style="padding-left: 10px"><a href="#" style="font-weight:bold;"><?php echo $record['FullName']; ?></a></p>
<p class="card-text"style="padding-left: 10px"><b>Gender:</b> &nbsp <?php echo $record['Gender']; ?></p>
<p class="card-text"style="padding-left: 10px"><b>Age:</b> &nbsp <?php echo $record['Age']; ?></p>
<p class="card-text"style="padding-left: 10px"><b>BloodGroup:</b> &nbsp <?php echo $record['BloodGroup']; ?></p>

</div>
</div>
</div>

<?php } 
$conn->close();
?>
</div>
</div>

<br>


<div class="header1">Blood Groups</div>
<div class="container" style="margin-top: 1%;">
    <div class="row">
        <div class="col-lg-6">     
          <div style="background-color:#f2f2f2; border: 1px solid #0099cc; padding: 20px; border-radius: 10px;">  Blood Group of any human being will mainly fall in any one of the following groups:<br>
                <ul>              
<li>A positive or A negative</li> 
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.<br><br>
                The diet advises people to eat according to their ABO blood type, claiming to improve health and decrease risk of chronic disease such as cardiovascular disease 
                and hypertension, among others.
          </div>
        </div>
        <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/type.gif" alt="">
        </div>
    </div>
</div>


<div class="header2">Universal Donors and Recipients</div>
    <div class="container" style="margin-top: 1%;">
        <div class="row">
            <div class="col-lg-6" > 
                <div style="background-color:#f2f2f2; border: 1px solid #0099cc; padding: 20px; border-radius: 10px;">
                The most common blood type is O, followed by type A.
                Type O individuals are often called "universal
                donors" since their blood can be transfused into 
                persons with any blood type.
                </div>
             </div>

             <div class="col-lg-6"><a class="btn btn-lg btn-info btn-block" href="becomedonor.php" style="font-family: 'Bree Serif', serif; margin-top:5%;">Become a Donor</a></div>
        </div>
    </div>
</div>

    <br>
    <br>
    
    <?php
        include('footer/footer.php');      
    ?>
<script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>
</body>
</html>


