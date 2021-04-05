<?php
session_start();

?>

<html>

<head>
<title> COVID-19 Contact Tracing </title>
<link rel="stylesheet" type="text/css"
href="style.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script>
    function show(shown, hidden) {
      document.getElementById(shown).style.display='block';
      document.getElementById(hidden).style.display='none';
      return false;
    }
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
    output.innerHTML = this.value;
}
    </script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
    hr {
        height: 3px;
        width: 100%;
        top: 10px;
        background: black;
        margin-bottom: 20px;
    }
    h2 {
        text-align: center;
    }
    h3 {
        text-align: center;
        font-size: 14px;
    }
    tr#ROW1 {
        background-color: blueviolet;
    }
    .dropbtn {
  background-color: rgba(173,185,202,1);
  color: black;
  padding: 14px;
  font-size: 14px;
  border: 5px;
  width: 300px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 6px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>
</head>

<body>

<div id="Home">
    <div class="header">
        <h1>COVID-19 Contact Tracing</h1>
    </div>
    <div class="col-md-6" style="position: absolute; left:0px">
    <div class="table">
    <table style="width:45%">
        <tr id="ROW1">
            <td onclick="return show('Home','Home')">Home</td>
        </tr>
        <tr>
            <td onclick="return show('Overview','Home')">Overview</td>
        </tr>
        <tr>
            <td onclick="return show('AddVisit','Home')">Add Visit</td>
        </tr>
        <tr>
            <td onclick="return show('Report','Home')">Report</td>
        </tr>
        <tr>
            <td onclick="return show('Settings','Home')">Settings</td>
        </tr>
        <div>
            <tr>
                <td onclick="return show('Login','Home')">Logout</td>
            </tr>
        </div>
    </table>
    </div>
    </div>
    <div class="col-md-6" style="position: absolute; left:300px">
        <h2>Status</h2>
        <hr />
        <div class="middle-column">
            <div class="col-md-6" style="position: absolute; left: 10px; top:100px" middle>
                Hi <?php
                    echo $_SESSION['username']; 
                        ?> 
                , you might have had a connection to an infected person at the location shown in red.
            </div>
            <div class="col-md-6" style="position: absolute; left: 10px; top:350px" middle>
                Click on the marker to see details about the infection.
            </div>
    </div>
    <div class="col-md-6" style="position: absolute; left:300px">
        <img src="exeter.jpg" width="300" height="300" style="border:3px solid black;">
    </div>
</div>
</div> 

<div class="container" id="Overview" style="display:none">
    <div class="header">
        <h1>COVID-19 Contact Tracing</h1>
    </div>
    <div class="col-md-6" style="position: absolute; left:0px">
        <div class="table">
        <table style="width:45%">
            <tr id="ROW1">
                <td onclick="return show('Home','Overview')">Home</td>
            </tr>
            <tr>
                <td onclick="return show('Overview','Overview')">Overview</td>
            </tr>
            <tr>
                <td onclick="return show('AddVisit','Overview')">Add Visit</td>
            </tr>
            <tr>
                <td onclick="return show('Report','Overview')">Report</td>
            </tr>
            <tr>
                <td onclick="return show('Settings','Overview')">Settings</td>
            </tr>
            <div>
                <tr>
                    <td onclick="return show('Login','Overview')">Logout</td>
                </tr>
            </div>
        </table>
        </div>
        </div>
</div>

<div class="container" id="AddVisit" style="display:none">
    <div class="header">
        <h1>COVID-19 Contact Tracing</h1>
    </div>
    <div class="col-md-6" style="position: absolute; left:0px">
        <div class="table">
        <table style="width:45%">
            <tr id="ROW1">
                <td onclick="return show('Home','AddVisit')">Home</td>
            </tr>
            <tr>
                <td onclick="return show('Overview','AddVisit')">Overview</td>
            </tr>
            <tr>
                <td onclick="return show('AddVisit','AddVisit')">Add Visit</td>
            </tr>
            <tr>
                <td onclick="return show('Report','AddVisit')">Report</td>
            </tr>
            <tr>
                <td onclick="return show('Settings','AddVisit')">Settings</td>
            </tr>
            <div>
                <tr>
                    <td onclick="return show('Login','AddVisit')">Logout</td>
                </tr>
            </div>
        </table>
        </div>
        </div>
        <div class="col-md-6" style="position: absolute; left:300px">
            <h2>Add Visit</h2>
            <hr />
            <div class="middle-column">
                <div class="col-md-6" style="position: absolute; left: 10px; top:100px" middle>
                    <form>
                        <label for="fname">Date</label><br>
                        <input type="text" id="date" name="date"><br>
                        <label for="lname">Time</label><br>
                        <input type="text" id="time" name="time"><br>
                        <label for="lname">Duration</label><br>
                        <input type="text" id="duration" name="duration">
                      </form>
                    <button type="submit" class="btn btn-primary"> Add </button> <br> <br>
                    <button type="submit" class="btn btn-primary"> Cancel </button>
                </div>
                <div class="col-md-6" style="position: absolute; left:300px">
                    <img src="exeter.jpg" width="300" height="300" style="border:3px solid black;">
                </div>
        </div>
    </div>
</div>

<div class="container" id="Report" style="display:none">
    <div class="header">
        <h1>COVID-19 Contact Tracing</h1>
    </div>
    <div class="col-md-6" style="position: absolute; left:0px">
        <div class="table">
        <table style="width:45%">
            <tr id="ROW1">
                <td onclick="return show('Home','Report')">Home</td>
            </tr>
            <tr>
                <td onclick="return show('Overview','Report')">Overview</td>
            </tr>
            <tr>
                <td onclick="return show('AddVisit','Report')">Add Visit</td>
            </tr>
            <tr>
                <td onclick="return show('Report','Report')">Report</td>
            </tr>
            <tr>
                <td onclick="return show('Settings','Report')">Settings</td>
            </tr>
            <div>
                <tr>
                    <td onclick="return show('Login','Report')">Logout</td>
                </tr>
            </div>
        </table>
        </div>
        </div>
        <div class="col-md-6" style="position: absolute; left:300px">
            <h2>Report An Infection</h2>
            <hr />
            <h3>Please report the date and time when you were tested positive for COVID-19.</h3>
            <div class="middle-column">
                <div class="col-md-6" style="position: absolute; left: 10px; top:100px" middle>
                    <form>
                        <br> <br>
                        <label for="fname">Date</label><br>
                        <input type="text" id="date" name="date"><br>
                        <label for="lname">Time</label><br>
                        <input type="text" id="time" name="time"><br>
                      </form>
                      <button type="submit" class="btn btn-primary"> Report </button> <br> <br>
                    <button type="submit" class="btn btn-primary"> Cancel </button>
                </div>
        </div>
</div>
</div>

<div class="container" id="Settings" style="display:none">
    <div class="header">
        <h1>COVID-19 Contact Tracing</h1>
    </div>
    <div class="col-md-6" style="position: absolute; left:0px">
        <div class="table">
        <table style="width:45%">
            <tr id="ROW1">
                <td onclick="return show('Home','Settings')">Home</td>
            </tr>
            <tr>
                <td onclick="return show('Overview','Settings')">Overview</td>
            </tr>
            <tr>
                <td onclick="return show('AddVisit','Settings')">Add Visit</td>
            </tr>
            <tr>
                <td onclick="return show('Report','Settings')">Report</td>
            </tr>
            <tr>
                <td onclick="return show('Settings','Settings')">Settings</td>
            </tr>
            <div>
                <tr>
                    <td onclick="return show('Login','Settings')">Logout</td>
                </tr>
            </div>
        </table>
        </div>
        </div>
        <div class="col-md-6" style="position: absolute; left:300px">
            <h2>Alert Settings</h2>
            <hr />
            <h3>Here you may change the alert distance and the time span for which the contact tracing will be performed.</h3>
            <div class="middle-column">
                <div class="col-md-6" style="position: absolute; left: 100px; top:100px" middle>
                    <form>
                        <div class="dropdown">
                            <br> <br>
                            <button class="dropbtn">Window</button>
                            <div class="dropdown-content">
                              <a href="#">1 Week</a>
                              <a href="#">2 Weeks</a>
                              <a href="#">3 Weeks</a>
                              <a href="#">4 Weeks</a>
                            </div>
                          </div>
                        <br> <br> 
                        <div class="slidecontainer">
                            <label for="distance">Distance</label> <br>
                            <input type="range" min="1" max="500" value="50" class="slider" id="myRange">
                            <p>Value: <span id="demo"></span></p>
                        </div>
                      </form>
                    <button type="submit" class="btn btn-primary"> Submit </button>
                    <button type="submit" class="btn btn-primary"> Cancel </button>
                </div>
        </div>
        </div>
</div>

</body>
</html>