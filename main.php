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
    <div id="Login" class="container">
        <div class="header">
            <h1>COVID-19 Contact Tracing</h1>
        </div>
        <div class="login-box"
        <div class="row">
        <div class="col-md-6" login-left>
            <h2> Login Here</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="username" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" name="pass" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary"> Login </button>
                <button type="submit" class="btn btn-primary" value="Reload Page" onclick="reload"> Cancel </button>
                <p>
                <p>
                <button type="submit" class="btn btn-primary" onclick="return show('Register','Login')"> Register </button>
            </form>
        </div>
        </div>
    </div>
</div>

<div id="Register" style="display:none">
    <div class="header">
        <h1>COVID-19 Contact Tracing</h1>
    </div>
    <div class="col-md-6" login-right>
        <h2> Register Here</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label> Surname </label>
                <input type="text" name="surname" class="form-control" required>
            </div>
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label> Password </label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <button type="submit" name="register" class="btn btn-primary"> Register </button>
            <button type="submit" class="btn btn-primary"> Return </button>
        </form>
    </div>

</div>

</body>
</html>