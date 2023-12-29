<!DOCTYPE html>
<head>
<title>
responsive
</title>
<link rel="stylesheet" href="pad.css">
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="index.php">Gallery</a>
  <a href="contact.php">Contact us</a>
  <!-- <a href="more_gallery.php">calculation</a> -->

  <div class="dropdown">
    <!-- <button class="dropbtn">Dropdown     -->
  <i class="fa fa-caret-down"></i>
		</button>
		
    <div class="dropdown-content">
       <a href="quadratic.php">quadratic</a>
      <a href="simple.php">simple</a>
	  <a href="grading.php">Grading</a>
    </div>
  </div>
  <a href="about.php">About Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>