<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Aditya Raj">
    <title>Semicolon | About</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <style>
table {
  border-collapse: collapse;
  margin-top: 100px;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
    </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Semicolon</span> Technologies</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="login.php">Login</a></li>
            <li  class="current"><a href="test.php">Employee</a></li>
             <li><a href="contact.html">Contact</a> </li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="newsletter">
      <div class="container">
        <a href="employee.html"> <button type="button" name="button">All Employee details</button></a>
      </div>
    </section>

    <section id="main">
  <div class="container">



<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM users";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        echo "<table border=2>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>username</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

</div>
</section>

<footer>
<p>Team Semicolon, Copyright &copy; 2019</p>
</footer>
</body>
</html>
