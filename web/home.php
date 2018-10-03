<html>
<head>
<title> Welcome! - Introduction </title>
<link rel="stylesheet" href="home.css">
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
//source: https://www.w3schools.com/js/tryit.asp?filename=tryjs_timing_clock
</script>
</head>

<body onload="startTime()" bgcolor="#dcdce2">


<div class="header">
  <center><h2><div id="txt"></div></h2></center>
  <?php
  echo "Today is " . date("Y/m/d") . "<br>";
  echo "The day is: " . date("l");
  ?>
  <h1> Welcome to the webpage of: Austin Eversole! </h1>
</div>

<ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="assignments.html">Assignments</a></li>
</ul>

<br /><br /><br /><p>Welcome! My Name is Austin Eversole.<br />
I am 24 years old. Im working on my Computer Science Bachelors degree.
</p><br /><br/>


"God has a plan for everyone!"
<br /><br/>
"Don't Worry, Be Happy!"
<br /><br/>
"Pain is very real but so is hope!"
<br /><br /><br /> <br />

I am very excited for Halo: Infinite!
<br /><br />
<img src="haloInfinite.jpg" />
<br /><br />


Here are some of my favorite videos:
<br /><br />
<iframe width="1280" height="720" src="https://www.youtube.com/embed/R0xoMhCT-7A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<Br /><br />
<iframe width="1519" height="538" src="https://www.youtube.com/embed/6nVBI4r0SBc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<Br /><br /><Br /><br /><Br />
</center>
</body>
</html>