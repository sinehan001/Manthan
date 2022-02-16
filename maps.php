<html>
  <head>
      <title>Maps - Crime Analysis</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['State Code', 'State', 'Total Crimes'],
          ['IN-AP', 'Andhra Pradesh', 130089],
          ['IN-AR', 'Arunachal Pradesh', 2342],
          ['IN-AS', 'Assam', 36877],
          ['IN-BR', 'Bihar',  88432],
          ['IN-CT', 'Chattisgarh',  38460],
          ['IN-DL', 'Delhi', 54384],
          ['IN-GA', 'Goa',  2341],
          ['IN-GJ', 'Gujarat',  103419],
          ['IN-HR', 'Haryana',  38759],
          ['IN-HP', 'Himachal Pradesh',  11499],
          ['IN-JK', 'Jammu and Kashmir',  19505],
          ['IN-JH', 'Jharkhand',  25447],
          ['IN-KA', 'Karnataka',  109098],
          ['IN-KL', 'Kerala',  103847],
          ['IN-MP', 'Madhya Pradesh',  181741],
          ['IN-MH', 'Maharastra',  171233],
          ['IN-MN', 'Manipur',  2489],
          ['IN-ML', 'Meghalaya',  1687],
          ['IN-MZ', 'Mizoram',  2246],
          ['IN-NL', 'Nagaland',  1234],
          ['IN-OR', 'Odisha',  46661],
          ['IN-PB', 'Punjab',  27774],
          ['IN-RJ', 'Rajasthan',  155185],
          ['IN-SK', 'Sikkim',  444],
          ['IN-TN', 'Tamil Nadu',  154801],
          ['IN-TR', 'Tripura',  2801],
          ['IN-UP', 'Uttar Pradesh',  178129],
          ['IN-UT', 'Uttarakhand',  8073],
          ['IN-WB', 'West Bengal',  61563],
          ['IN-AN', 'Andaman and Nicobar Islands',  658],
          ['IN-CH', 'Chandigarh',  3397],
          ['IN-DH', 'Dadra & Nagar Haveli and Daman & Diu',  350],
          ['IN-LD', 'Lakshadweep',  3397],
          ['IN-PY', 'Pudhucherry',  3397]
        ]);

        var options = {
        	backgroundColor:"#def4fa",
        	region:"IN",
            resolution: 'provinces',
            colorAxis: {
      minValue: 0,
      colors: ['#fff33b', '#fdc70c', '#f3903f', '#ed683c', '#e93e3a']
    }
            };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
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
  width: 33.33%;
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
  padding-left: 8px;
  padding-right: 8px;
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
  .topnav li:not(:nth-child(3)) {display: none;}
  .topnav li.icon {
      float: right;
      display: block;
      position: relative;
      }
          .topnav li  
      {
        width: 30%;
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
          .topnav.responsive li:first-child
          {
              margin-top: 3.2rem;
          }
        }
        .topnav .icon {
          display: none;
        }
  .crime select
  {
    width: 300px;
  }
.srch 
{
    text-align: center;
}

input
{
    background-color: red;
    color: white;
    font-size: 20px;
    border-radius: 15px;
    cursor: pointer;
    outline: none;
}
input::-webkit-input-placeholder {
    font-size: 15px;
}
input:hover::-webkit-input-placeholder {
    font-size: 20px;
}
#myInput
{
    background-color: white;
    color: black;
    outline: none;
    padding: 4px;
}
#myInput:hover
{
  padding: 10px;
  border: 4px solid green;
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
.region
{
    width: 900px;
    height: 500px;
    margin: 0 auto;
}
@media (max-width: 918px)
{
    .region
    {
        width: 500px;
    }
}
@media (max-width: 540px)
{
    .region 
    {
        width: 300px;
        height: 400px;
    }
}
</style>
  </head>
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
    <div id="regions_div" class="region"></div>
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
  xhttp.open("GET", "script.php?q="+str, true);
  xhttp.send();
}
</script>
  </body>
</html>
