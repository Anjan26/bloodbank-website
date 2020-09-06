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

    <title>About</title>
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

    <br><br><br>

    <div class="container">
        <h1 class="mt-4 mb-3">About Us</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="homepage.php">Home</a>
            </li>

            <li class="breadcrumb-item active">About Us</li>
        </ol>
        <p style="background-color: #b3e6ff; padding: 20px; border-radius: 5px; text-align: justify;">The e-Blood bank enables electronic monitoring of blood collection, testing, storage and final use and disposal. By making such key data available in public domain, it brings in transparency in availability and disbursement of blood units. Citizens
            who are looking for blood can use the web-enabled system thereby reducing their dependency on personal and other sources for blood. It also helps to weed out professional donors and touts. According to the National AIDS Control Organisation
            (NACO) data, out of the 2,760 blood banks in India, 2,711 are already on a digital platform.


            <div style="background-color: #b3e6ff; padding: 20px; border-radius: 5px;">
                <h4>E-Blood Banking at the National level</h4>
                <hr>
                <ol start="1" style="text-align: justify;">
                    <li>Real time data about blood and blood components (Packed Red Blood Cell, Fresh Frozen Plasma, Platelets Concentrates, Cryoprecipitate) at the State and the district level are made available at the &nbsp<a href="https://www.nhp.gov.in/"
                            style="color: rgb(235, 69, 39);">National Health Portal</a>.</li>
                    <li>The data is updated every 48 hours.</li>
                    <li>
                        Users can search state-wise, district-wise and through Blood bank Name to get the data on availability of blood/components and the contact details of the blood bank for further enquiry.
                    </li>
                    <li>As on January 2016, availability of whole blood/components from nearly 200 blood banks in Jammu & Kashmir, Gujarat, Rajasthan and Odisha are made available.</li>
                </ol>
            </div>
        </p>
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