<?php
session_start();
$conn = new mysqli("localhost", "root","","bloodbank");

if($conn->connect_error){
    die("connection error");
}
if(strlen($_SESSION['login'])==0){
    header('Location: index.php');

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

  <title>Donor List</title>
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

	@media
	  only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {

		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
      
      
      
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

    tr {
      margin: 0 0 1rem 0;
      
    }
      
    tr:nth-child(odd) {
      background: #ccc;
    }
    
		td {
			/* Behave  like a "row" */
			
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
    
		}

		td:before {
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 0;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
		}

		/*
		Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
		*/
        td:nth-of-type(1):before { content: "Id"; }
		td:nth-of-type(2):before { content: "Name"; }
		td:nth-of-type(3):before { content: "ContactNo"; }
		td:nth-of-type(4):before { content: "Email"; }
		td:nth-of-type(5):before { content: "Gender"; }
		td:nth-of-type(6):before { content: "Age"; }
		td:nth-of-type(7):before { content: "BloodGroup"; }
        td:nth-of-type(8):before { content: "Address"; }
        td:nth-of-type(9):before { content: "Message"; }
        td:nth-of-type(10):before { content: "Action"; }
    
		
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



<div class="container-fulid">
    <div class="row">
        <div class="col-md-12">
        <h2 class="page-title" style="width:80%; padding:0.5%;margin-top:2%;margin-left:1.5%; padding-left: 1%; background-color:#b3e6ff;border-radius: 10px; box-shadow: 5px 5px #888888;">Donor List</h2>
        <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 150%; margin-left:2%; margin-top:3%;"><b>Donors info </b></div><hr>
        
        <?php
                        if(isset($_REQUEST['hidden']))
                        {
                            $eid=intval($_GET['hidden']);
                            $status="0";
                            $sql = "update blooddonor SET Status='$status' where  id='$eid'";
                            if (mysqli_query($conn, $sql)){
                                echo"<b style='color:#00b33c;margin-left:2%;'>Success:</b> <b>Details Hidden Successfully!</b> ";
                                }
                        }  
                        if(isset($_REQUEST['public']))
                                {
                            $aeid=intval($_GET['public']);
                            $status=1;

                            $sql = "update blooddonor SET Status='$status' WHERE  id='$aeid'";
                           
                            if (mysqli_query($conn, $sql)){
                            echo "<b style='color:#00b33c; margin-left:2%;'>Success:</b> <b>Details Published Successfully!</b>";
                            }
                        }
                        if(isset($_REQUEST['del']))
                         {
                            $did=intval($_GET['del']);
                            $sql = "delete from blooddonor where id='$did'";
                        
                            if (mysqli_query($conn, $sql)){
                            echo "<b style='color:#00b33c;margin-left:2%;'>Success:</b> <b>Details Deleted Successfully!</b> ";
                            }
                        } 
                        ?>
				    <div class="panel-body"  style="padding: 2%; border-radius: 10px; border: 1px solid #00b3b3;">
                    <table role="table" class="table-striped table-bordered" style="width: 100%;" >
                        <thead role="rowgroup">
							<tr role="row">
								<th role="columnheader">Id</th>
								<th role="columnheader">Name</th>
                                <th role="columnheader">ContactNo</th>
                                <th role="columnheader">Email</th>
                                <th role="columnheader">Gender</th>
                                <th role="columnheader">Age</th>
                                <th role="columnheader">BloodGroup</th>
                                <th role="columnheader">Address</th>
                                <th role="columnheader">Message</th>
                                <th role="columnheader" colspan="2">Action</th>
                            </tr>
					    </thead>
									
						<tbody role="rowgroup">
                            <?php
                                $query = "select * from blooddonor";
                                    $result = $conn->query($query);
                                    $cnt=1;
                                    while($row = $result->fetch_assoc()){

                                    echo "<tr role='row'>";
                                    echo "<td role='cell'>$cnt</td>";
                                    echo "<td role='cell'>".$row["FullName"]."</td>";
                                    echo "<td role='cell'>".$row["MobileNumber"]."</td>";
                                    echo "<td role='cell'>".$row["EmailId"]."</td>";
                                    echo "<td role='cell'>".$row["Gender"]."</td>";
                                    echo "<td role='cell'>".$row["Age"]."</td>";
                                    echo "<td role='cell'>".$row["BloodGroup"]."</td>";
                                    echo "<td role='cell'>".$row["Address"]."</td>";
                                    echo "<td role='cell'>".$row["Message"]."</td>";
                              
                                   if($row['status'] == 1){
                                     
                                    echo "<td> <a href='donorlist.php?hidden=".$row["id"]."'  onclick=\"javascript:return confirm('Do you really want to hide this detail?');\"> Hide </a>  </td>";
                                   }else{
                                    echo  "<td> <a href='donorlist.php?public=".$row["id"]."'  onclick=\"javascript:return confirm('Do you really want to public this detail?');\">Public</a> </td>";
                                   }
                                     echo "<td><a href='donorlist.php?del=".$row["id"]."'  onclick=\"javascript:return confirm('Do you really want to delete this record?');\">Delete</a> </td>";
                                       
                                    echo"</tr>";
                        
                                        ?>
                                     <?php $cnt=$cnt+1; } ?> 
                                  
                        </tbody> 
                    </table>

                        
                    </div>
                </div>
            </div>
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
