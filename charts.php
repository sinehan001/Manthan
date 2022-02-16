<!DOCTYPE html>
<html>
<head>
	<title>Charts - Crime Analysis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.head
{
  color: blue;
  font-size: 28px;
  font-weight: bold;
  text-align: center;
  padding-bottom: 2rem;
  font-family: cursive;
  background: linear-gradient(140deg,#ff9933,white,green);
}
body
{
  font-family: arial;
  margin: 0;
  padding: 0;
}
.table
{
  margin-top: -1rem;
  padding: 0;
}
.tab {
  overflow: hidden;
  background-color: black;
  color:  white;
}
.tab button {
  background-color: #3f3f3f;
  color:  white;
  width: 50%;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}
.tab button:hover {
  font-weight: bold;
}
.tab button.active {
  background: linear-gradient(140deg,#ff9933,white,green); 
  font-weight: bold;
  color: blue;
}
.tabcontent {
  display: none;
  padding: 6px 12px;
  border-top: none;
}

    select 
    {
      border-radius: 15px;
      font-size: 20px;
      padding: 5px;
      border-width: 2px;
    }
    select:hover
    {
      border-color: green;
      border-width: 4px;
      outline: none;
    }
select.desktopDropDown::-ms-expand {
    display: none;
}
select {
        -moz-appearance: none;
        -webkit-appearance: none;
      }
tr:nth-child(even)
{
  background-color: lightgrey;
}
th 
{
  background: linear-gradient(140deg,#ff9933,white,green);
  color: blue;
  font-family: Arial;
  padding-top: 12px;
  padding-bottom: 12px;
}
td 
{
    border: 2px solid #ddd;
  padding: 8px;
}
    ul 
    {
            list-style-type: none;
            padding: 0;
            overflow: hidden;
            border: 1px solid #e7e7e7;
            background-color: #c7d3d4ff;
        }

        li 
        {
            width: 20%;
        }

        li a 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 14px 22px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        li a:hover:not(.active)
        {
            background-color: green;
            color: white;
            font-weight: bold;
        }

        li a.active 
        {
            color: white;
            background-color: #4CAF50;
        }

        li button 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 14px 22px;
            text-decoration: none;
            font-family: sans-serif;
            border: 0px;
        }

        li button:hover:not(.active)
        {
            background-color: #a35709;
            color: white;
            font-weight: bold;
        }

        li button.active 
        {
            color: white;
            background-color: #4CAF50;
        }
@media screen and (max-width: 950px) {
  .topnav li:not(:nth-child(1)) {display: none;}
  .topnav li.icon {
      float: right;
      display: block;
      position: relative;
      }
    }

@media screen and (max-width: 950px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          .topnav.responsive li{
            float: left;
            display: block;
            width: 100%;
            text-align: left;
          }
          .topnav.responsive li:first-child
          {
              margin-top: 3.2rem;
          }
          .icon i
          {
            float: right;
            cursor: pointer;
            font-size: 24px;
            margin-right: 0.5em;
            margin-top: 0.5em;
            color: black;
          }
          .icon i:hover
          {
            color: green;
          }
        }
        .topnav .icon {
          display: none;
        }
.foot
{
  bottom: 0;
  width: 100%;
  height: 200px;
  background: linear-gradient(140deg,#4cd056,#267d39);
  color: white;
}
.foot a i 
{
  font-size: 28px;
  padding-left: 10px;
  padding-right: 10px;
  color: white;
}
</style>
<body>
<div class="head">
  <br>
  <span>APPROACH TO CRIME ANALYSIS</span>
</div>
<div class="table">
  <ul class="topnav" id="myTopnav">
      <li style="float: left;" class="active"><a href="index.php">List</a></li>
      <li style="float: left;"><a href="charts.php">Charts</a></li>
      <li style="float: left;"><a href="maps.php">Maps</a></li>
      <li style="float: left;"><a href="crimes.php">Crimes</a></li>
      <li style="float: left;"><a href="about.php">About</a></li>
      <li href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars fa-times" id="bars"></i>
      </li>
  </ul>
</div>
<br>
<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'State')">State</button>
  <button class="tablinks" onclick="openCity(event, 'District')">District</button>
</div>
<div id="State" class="tabcontent" style="display: block;">
<br><br>
<?php 
$db=mysqli_connect("localhost","root","","manthan");
// fetch query
function fetch_data(){
 global $db;
error_reporting(0);
ini_set('display_errors', 0);
$result=mysqli_query($db,"SELECT * from state");
$row=mysqli_fetch_assoc($result);
$dst=$row['state_id'];
 if($_GET['q']=='all')
 {
  $query="SELECT * from state";
}
else
{
  $query="SELECT * from state";
}
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
 echo '<table border="1" style="border-collapse: collapse; width: 100%;">
        <tr>
            <th>S.No</th>
            <th>States</th>
            <th>TC 2001</th>
        </tr>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 
$color = dechex(rand(0x111111, 0xFFFFFF));
$color="#".$color;
  echo '<tr>
          <td style="text-align: center;">'.$sn.'</td>
          <td style="text-align: center;">'.$data['state_title'].'</td>
          <td style="text-align: center;">'.$data['2001'].'</td>
   </tr>';
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}
?>
<br><br>
</div>
<div id="District" class="tabcontent">
  <br><br>
  <center> 
<select id="demo" onchange="showElement(this.value)">
  <option value="" selected disabled>Select State</option>
  <option value="all">All</option>
  <?php 
   $conn=mysqli_connect("localhost","root","","manthan");
   $d=mysqli_query($conn,"SELECT * from state");
   while($row = mysqli_fetch_assoc($d))
  {
	echo '<option value="'.$row['state_title'].'">'.$row['state_title'].'</option>';
}
?>
</select>
<br><br>
<div id="txtHint"></div>
</center>
</div>
<script>

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
  var element = document.getElementById("bars");
  element.classList.toggle("fa-bars");
}

function showElement(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "backend-script.php?q="+str, true);
  xhttp.send();
}

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<br>
<br>
<div class="foot">
  <center>
    <h1 style="padding-top: 30px;">Developed by Sinehan S</h1>
    <h2>Follow Me</h2>
    <a href="https://facebook.com/sinehan.s.9/" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="https://instagram.com/sinehan001" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="https://twitter.com/sinehan001" target="_blank"><i class="fa fa-twitter"></i></a>
  </center>
</div>
</body>
</html>