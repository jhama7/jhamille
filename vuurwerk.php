<!DOCTYPE html>
// Jhamille Cumberbatch//
<html lang="en">
<head>
<style>
    body {background-color: black;}
h1   {color: red;}
p    {color: red;}
    </style>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*
/* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #ff0000;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ffffff;
  color: black;
}
/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #ff0000;
  color: black;
}
/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}
/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #cccvv;
  }
}
* {
  box-sizing: border-box;
  
  
  
  
  
  
  
  
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
/* Style the header */
header {
  background-color: #9f1414;
  padding: 15px;
  text-align: center;
  font-size: 30px;
  color: black;
}
/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 8%;
  height: 500px; /* only for demonstration, should be removed */
  front-size
  background: #9f1414;
  padding: 30px;
}
/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}
article {
  float: left;
  padding: 30px;
  width: 50%;
  background-color: #0000ff;
  height: 300px; /* only for demonstration, should be removed */
}
/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the footer */
footer {
  background-color: #342b2b;
  padding: 10px;
  text-align: center;
  color: red;
}
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

*/
</style>
</head>
<body>

<div class="topnav"> .
  <a class="active" href="http://localhost/vuurwerk.php">Home</a>
  <a href="https://www.youtube.com/watch?v=GsKnPDeU9vI">youtube</a>
  <a href="#contact">Contact</a>
  <input type="text" placeholder="Search..">
</div>
<header>
  <h2>vuurwerk</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="http://localhost/vuurwerk.php">Assortiment</a></li>
      <li><a href="http://localhost/knal.html">Knalvuurwerk</a></li>
      <li><a href="http://localhost/sier.html">Siervuurwerk</a></li>
    </ul>
  </nav>

  
   <?php include 'connectshop.php' ?>
  </article>
</section>

<link rel="stylesheet" type="text/css" href="vuurwerk.css">


</body>
</html>