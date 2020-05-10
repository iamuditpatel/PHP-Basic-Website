<?php 
$display_name = 'Udit Patel';
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics By <?php echo $display_name; ?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name; ?></h1>
          <p>Contact:<br />
          <a href="mailto:contact@uditpatel.com">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href="https://twitter.com/iamuditpatel"><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: <?php echo date('D, d M Y'); ?></p>
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>
    
          <h2>Unit Conversion</h2>
            <?php include 'inc/units.php'; ?>
              
          <hr />
    
          <h2>Daily Exercise</h2>
            <?php include 'inc/exercise.php'; ?>
        </section>
    </div>
    <section class="footer text-center">
      &copy; <?php 
echo date('Y'); 
echo " " . $display_name . ". ";
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
    </section>
  </body>
</html>