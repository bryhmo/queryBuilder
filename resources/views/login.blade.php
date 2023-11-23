<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email],input[type=tel],input[type=date] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="imgcontainer">
      <img src="images/lin.png" alt="Avatar" class="avatar">
    </div>

<h1 style="text-align: center;color:red;">Welcome to the LincolnSiwes Portal</h1>

<h2 style="color:red;text-align:center;">Register Here to Create Account</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="max-width:250px; margin:0 40% 0 40%;">Register</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post" style="max-width:500px;margin:auto">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/lin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="lastname"><b>Lastname</b></label>
      <input type="text" placeholder="Enter lastname" name="lastname" required>

      <label for="firstname"><b>FirstName</b></label>
      <input type="text" placeholder="Enter firstname" name="firstname" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter email" name="email" required>
      
      <label for="phone"><b>Phone</b></label>
      <input type="tel" placeholder="123-456-7890" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  required>

      <label for="phone"><b>Birthday</b></label>
      <input type="date" placeholder="enter your birthday" name="bday"   required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Your Password" name="password" required>
        
      <button type="submit">Register</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<h2 style="color:red; text-align:center">Already Have Account</h2>

<button onclick="document.getElementById('id02').style.display='block'" style="max-width:250px; margin:0 40% 0 40%;">Login</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post" style="max-width:500px;margin:auto">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/lin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="email" placeholder="Enter Username" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<h2 style="color:red; text-align:center">Visit Lincoln Home Page</h2>

<a href="https://lincoln.edu.ng"><button style="max-width:250px; margin:0 40% 0 40%;">lincoln.edu.ng</button></a>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
