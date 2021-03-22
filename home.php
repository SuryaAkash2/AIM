<?PHP
  session_start();
  if(!isset($_SESSION['userid']))
  {header('location:index.php');}
  elseif ($_SESSION['userid']!="admin")
  {
    header('location:index.php');
  }else
  {
    $d=$_SESSION['userid'];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>ORDERS LIST</title>
<link rel="icon" type="image/png" href="images/aitam.ico"/>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="style/style1.css">
<script src="bootstrap/boot.js"></script>
<script src="bootstrap/boot0.js"></script>
<link rel="stylesheet" href="bootstrap/boot2.css">
<script src="bootstrap/boot3.js"></script>
<script src="bootstrap/boot4.js"></script>
</head>
<style type="text/css">
  @media screen and (min-width: 1080px) {
    html {
        overflow-x: hidden;
    }
}

.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}


#sidebar-container {
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
    width: 230px;
}
.sidebar-collapsed {
    width: 60px;
}

/* Menu item*/
#sidebar-container .list-group a {
    height: 50px;
    color: white;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
}
.sidebar-submenu {
    font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
    background-color: #333;
    height: 35px;
}
.sidebar-separator {
    background-color: #333;
    height: 25px;
}
.logo-separator {
    background-color: #333;    
    height: 60px;
}

/* Closed submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
  /*----------------------------------------------------------------*/
  /* 
Generic Styling, for Desktops/Laptops 
*/
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}



/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

  .responsive-table-input-matrix {
    display: block;
    position: relative;
    width: 100%;

    &:after {
      clear: both;
      content: '';
      display: block;
      font-size: 0;
      height: 0;
      visibility: hidden;
    }

    tbody {
      display: block;
      overflow-x: auto;
      position: relative;
      white-space: nowrap;
      width: auto;


      tr {
        display: inline-block;
        vertical-align: top;

        td {
          display: block;
          text-align: center;

          &:first-child {
            text-align: left;
          }
        }
      }
    }

    thead {
      display: block;
      float: left;
      margin-right: 10px;

      &:after {
        clear: both;
        content: "";
        display: block;
        font-size: 0;
        height: 0;
        visibility: hidden;
      }

      th:first-of-type {
        height: 1.4em;
      }

      th {
        display: block;
        text-align: right;

        &:first-child {
          text-align: right;
        }
      }
    }
  }
}


/* Transparent
/* 
/*.navbar-default {
  background: none;
  border: none;
}*/

@media (min-width: 768px) {
  .navbar-nav {
    width: 100%;
    text-align: center;
  }
  .navbar-nav > li {
    float: none;
    display: inline-block;
  }
  .navbar-nav > li.navbar-right {
    float: right !important;
  }
}

@media (min-width: 768px) {
  .navbar-nav1 {
    width: 100%;
    text-align: center;
  }
  .navbar-nav1 > li {
    float: right;
    display: inline-block;
    color: silver !important;
  }
}
  .button{
    display: block;
    color: #333;
    font-weight: bold;
    cursor: pointer;
    outline: none;
  }
  .button:hover 
  {
    background-color: grey;
    color:white;
    font-weight: bold;
    font-size: 18px;
  }



  input[type=text], select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 input[type=date],input[type=submit]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.butn{
  margin:.0rem;
  font-size:0.9rem;
  min-width: 60px;
  padding:1rem 2rem;
  text-transform:uppercase;
  border-radius: 4px;
  letter-spacing: 0.05857em;
  font-family: 'Roboto', sans-serif;
  background:transparent;
  position: relative;
  border: 1px solid;
  font-weight: bold;
  cursor:pointer;
  outline:none;
    color:white;
  background-color: black;
  }
  .butn:hover{
  margin:.0rem;
  font-size:0.9rem;
  min-width: 60px;
  padding:1rem 2rem;
  text-transform:uppercase;
  border-radius: 4px;
  letter-spacing: 0.05857em;
  font-family: 'Roboto', sans-serif;
  background:transparent;
  position: relative;
  border: 1px solid;
  font-weight: bold;
  cursor:pointer;
  outline:none;
   color:black;
  background-color: white;
  }
</style>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button id="toggle2" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="menu2">

    <h5><ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="request.php">Order</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="accept.php">Accept</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="reject.php">Reject</a>
      </li><li class="nav-item">
       <a class="nav-link " href="registration.php">Registration</a>
      </li>
    </ul></h5>
    <div class="navbar-nav">
    <ul class="navbar-nav1">
    
      <li class="nav-item">
         <?PHP echo"<h2 style='color:#f5f6f5;'><i class='fa fa-user'>&nbsp".$d."</h2></i><a class='nav-link' href='logout.php'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogout</a>";?>
      </li>
    </ul>
</div>
  </div>

</nav>
<br>
</header>
<body>
<div class="row">

    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">

        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            </li>
           <a href="#" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                  <span id="collapse-text" class="menu-collapsed"><i class="fa fa-fort-awesome" aria-hidden="true">&nbsp&nbsp&nbsp<b>A I T A M</b></i></span>
                </div>
            </a>
            <a id = "toggle" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content"style="cursor: pointer !important;">
                    <span class="fa fa-dashboard fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Dashboards</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id="menu" class="collapse sidebar-submenu">
                <a href="inandout.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">INWARD</span>
                </a>
                <a href="outandin.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">OUTWARD</span>
                </a>
            </div>
            <a id = "toggle1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content" style="cursor: pointer !important;">
                    <span class="fa fa-university fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Departments</span>
                    <span class="submenu-icon ml-auto" ></span>
                </div>
            </a>
     <div id="menu1" class="collapse sidebar-submenu">
                <a href="ecedepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">ECE</span>
                </a>
                <a href="itdepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">IT</span>
                </a>
                <a href="eeedepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">EEE</span>
                </a>
                <a href="csedepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">CSE</span>
                </a>
                <a href="mechdepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">MECHANICAL</span>
                </a>
                <a href="civildepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">CIVIL</span>
                </a>
                <a href="diplomadepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">DIPLOMA</span>
                </a>
                <a href="mbadepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">MBA</span>
                </a>
            </div>
              
        </ul>
    </div>

  <!------------------------------------------------------------------------>
 <div class="col">
    <div class="col">
<hr>
<h1 class="bg-dark" style="color:#f5f6f5;
  display: inline-block; margin: 0;
  padding: 0.5em 1em;
  width:31%; margin-left: 34%;
  font-size: 1.25em;
  text-align: center;">REQUESTED ORDERS</h1>
<hr>
<span class="counter pull-right"></span>

<table class="table table-hover table-bordered results"  id="ticketLinesTable">
  <thead>
     <tr>
      <th>Sno</th>
      <th>DATE</th>
      <th>FACULTY ID</th>
      <th >ITEM</th>
      <th >QUANTITY</th>
      <th>EXPECTED PRICE</th>
      <th>PRIORITY</th>
      <th>ACCEPT</th>
      <th>REJECT</th>
    </tr>
  </thead>
  <tbody>
 <?PHP
            $i=1;
            include 'connect.php';
            $oquery = "SELECT * FROM `order` WHERE `status` = 'pending' ORDER BY `sno` DESC";
            $sql = mysqli_query($conn, $oquery);
            if($sql->num_rows > 0){
              while($row = mysqli_fetch_array($sql)){
             
                echo " <tr><th>".$i."</th><td>".$row['date']."</td><td>".$row['facid']."</td>
        <td>".$row['item']."</td><td>".$row['qty']."</td><td>".$row['expp']."</td>
        <td>".$row['priority']."</td><td><a href='orderaccept.php?k=".$row['sno']."'><b>Accept</b></a></td><td><a href='orderreject.php?k=".$row['sno']."'><b>Reject</b></a></td> </tr>";
        $i++;
            }
          }else {
              if($sql->num_rows == 0)
            {
              echo "<tr><td colspan='10'><center><i class='fa fa-exclamation-triangle'></i>&nbsp&nbspREQUESTED ORDERS NOT FOUND</center></td></tr>";
            }
          }
           echo "</table>";
         ?>




    
  </tbody>
</table></div>
<hr>
<h1 class="bg-dark" style="color:#f5f6f5;
  display: inline-block; margin: 0;
  padding: 0.5em 1em;
  width:31%; margin-left: 34%;
  font-size: 1.25em;
  text-align: center;">INWARD REQUESTS</h1>
<hr>
<br>
<span class="counter pull-right"></span>

<table class="table table-hover table-bordered results"  id="ticketLinesTable">
  <thead>
      <th>Sno</th>
      <th>DATE</th>
      <th>INFRASTRUCTURE</th>
      <th>MODEL NAME</th>
      <th>SERIAL NUMBER</th>
      <th>TYPE</th>
      <th>PURPOSE</th>
      <th>TEMPORARY /<br> PERMANENT</th>
      <th>ACCEPT</th>
      <th>REJECT</th>
    <tr class="warning no-result">
      <td colspan="9"><center><i class="fa fa-warning"></i> No result</center></td>
    </tr>
  </thead>
  <tbody>
 <?PHP
            $i=1;
            include 'connect.php';
            $oquery = "SELECT * FROM `ward` WHERE `status` = 'pending' AND `ward` = 'inward' ORDER BY `sno` DESC";
            $sql = mysqli_query($conn, $oquery);
            if($sql->num_rows > 0) {

              while($row = mysqli_fetch_array($sql)){
          echo "<tr><th>".$i."</th><td>".$row['date']."</td><td>".$row['infra']."</td>
        <td>".$row['modelname']."</td><td>".$row['serialno']."</td><td>".$row['type']."</td>
        <td>".$row['purpose']."<td>".$row['temper']."</td></td><td><a href='inwardaccept.php?k=".$row['sno']."'><b>Accept</b></a></td><td><a href='inwardreject.php?k=".$row['sno']."'><b>Reject</b></a></td> </tr>";
        $i++;
            }
          }
            else {
              if($sql->num_rows == 0)
            {
              echo "<tr><td colspan='10'><center><i class='fa fa-exclamation-triangle'></i>&nbsp&nbspINWARD REQUESTS NOT FOUND</center></td></tr>";
            }
          }
           echo "</table>";

         ?>




    
  </tbody>
</table></div>


</div></div>
<script type="text/javascript">
  $(function() {
  /* initial variables */
  var numRows = $('#ticketLinesTable').find('tr').length;
  var SHOWN = 4;
  var MORE = 5;

  /* get how many more can be shown */
  var getNumMore = function(ns) {
      var more = MORE;
      var leftOver = numRows - ns;
      if ((leftOver) < more) {
        more = leftOver;
      }
      return more;
    }
    /* how many are shown */
  var getInitialNumShown = function() {
      var shown = SHOWN;
      if (numRows < shown) {
        shown = numRows;
      }
      return shown;
    }
    /* set how many are initially shown */
  var numShown = getInitialNumShown();

  /* set the numMore if less than 20 */
  var numMore = getNumMore(numShown);

  /* set more html */
  if (numMore > 0) {
    var more_html = '<p><button id="more" class="butn">SHOW <span style="font-weight: bold;"></span>MORE</button></p>';
    $('#ticketLinesTable').find('tr:gt(' + (numShown - 1) + ')').hide().end().after(more_html);
  }
  $('#more').click(function() {
    /* determine how much more we should update */
    numMore = getNumMore(numShown);
    /* update num shown */
    numShown = numShown + numMore;
    $('#ticketLinesTable').find('tr:lt(' + numShown + ')').show();

    /* determine if to show more and how much left over */
    numMore = getNumMore(numShown);
    if (numMore > 0) {
      $('#more span').html(numMore);
    } else {
      $('#more').remove();
    }
  });

});

</script>

<!-------------------------------------------------------------->
<script type="text/javascript">
$(document).ready(function(){
// Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
$("#toggle").click(function() {
  $(this).toggleClass("on");
  $("#menu").slideToggle();
});
$("#toggle1").click(function() {
  $(this).toggleClass("on");
  $("#menu1").slideToggle();
});
$("#toggle2").click(function() {
  $(this).toggleClass("on");
  $("#menu2").slideToggle();
});

});
</script>


</body>
<br>
<footer class="bg-dark" style="width:100% !important; color: white;">  <center><br><p><img src="images/aitamlogo.png" width="5%"/>&nbsp&nbsp&nbsp&nbspDesigned and Developed by Developers Club, <a href="http://www.aitamsac.in">AITAM SAC</a></p><br></center></footer>
</html>