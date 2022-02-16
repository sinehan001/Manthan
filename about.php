<!DOCTYPE html>
<html>
<head>
	<title>About - Crime Analysis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body
{
  font-family: Arial;
}
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
  .topnav li:not(:nth-child(5)) {display: none;}
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
.info h1
{
  background: linear-gradient(140deg,#4cd056,#248d2c);
  color: white;
  width: 300px;
  padding: 12px;
  border-radius: 23px;
}
.info h2
{
  background: linear-gradient(140deg,#1f9ae1,#013dc4);
  color: white;
  width: 230px;
  padding: 8px;
  border-radius: 23px;
}
.info p 
{
  margin-left: 5%;
  margin-right: 5%;
  font-size: 28px;
  font-family: calibri;
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
<div class="info">
  <center>
  <h1>About the Project</h1>
  <p>Crime is one of the dominating problems in our society and crime reduction is an important task for every person in daily life. In India, a huge number of crimes are committed continually on a day-to-day basis. Crime forestalling requires keeping track of all the crimes and maintaining a database for the same which may be used for future reference. Analysing the data to help in predicting and cracking crimes in the future is the answer to the problem that we're facing. So, we have devised a solution that's entirely grounded on the conception of data analysis (crime analysis) and it consists of five steps: Data collection, classification, pattern recognition, prediction, and visualization. All the aforementioned are parts of the approach. </p>
  <p>The project's ultimate objective is to predict crime-prone areas using a machine learning algorithm (prediction of crime-prone areas or prediction of crimes). The idea of data mining underpins the conception of data collection. The data set required will include the location and state of the crime that occurred, the type of crime or accident, and the count of the type of crime that occurred within a month. The data set classification is based on the type of crime or accident that happened in a specific area. </p>
  <p>The database will be used for storing and re-collecting classified data sets. The data for the data set is collected from National Crime Records Bureau (NCRB). Keywords Machine Learning; Data Mining; Naive Bayes; Decision tree; Pattern Identification; Crime Prediction; NCRB Data sets.</p><br>
  <h1>Developer</h1>
  <h2>Sinehan S</h2>
  <h1>Web Integration</h1>
  <h2>Thinesh Babu KS</h2>
  <h1>Python Developer</h1>
  <h2>Suriya T</h2>
  <h1>Research & Development</h1>
  <h2>Swetha SK</h2>
  <h1>Data Analytics</h1>
  <h2>NithyaLakshmy CR</h2>
</center>
</div>
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
</script>
</body>
</html>