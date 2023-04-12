<!DOCTYPE html>
<!-- ICS2O-Assign-02-PHP-Calculations -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Axis of symmetry and y-coordinate of the Vertex (standard form calculator)">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Julien L.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index_php/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index_php/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index_php/favicon-16x16.png">
    <link rel="manifest" href="./fav_index_php/site.webmanifest">
    <!--Link to MDL-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Axis of symmetry and y-coordinate of the Vertex (standard form calculator)</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Header and Text-->
    <center>
      <?php echo "<h1> Axis of symmetry and y-coordinate of the Vertex (standard form calculator) </h1>" ?>
      <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
      <?php echo "<h4>Course: ICS20 Programming</h4>" ?>
      <br>
      <!--User Input-->
      <?php echo "<p>With this calculator, which was coded with PHP, you will be able to solve for the axis of symmetry as well as the y-coordinate of the vertex from a quadratic equation in standard form </p>" ?>
      <?php echo "<h3>Please enter the following:</h3>" ?>
      <form action="./results.php" method="post" target="result">
        <label for="coefficientA">Coefficient A:</label>
        <input type="number" id="coefficientA" step=".001" placeholder="Enter the first coefficient" name="coefficientA"><br><br>
        <label for="coefficientB">Coefficient B:</label>
        <input type="number" id="coefficientB" step=".001" placeholder="Enter the second coefficient" name="coefficientB"><br><br>
        <label for="constantC">Constant C:</label>
        <input type="number" id="constantC" step=".001" placeholder="Enter the vonstant" name="constantC"><br><br>
        <input type="submit" value="Enter"><br><br>	
      </form>
      <!--Display results-->
      <center>
      <iframe id="result" name="result">
<?php
  echo "The axis of symmetry is"."$axisOfSymm";
?>
<br>
<?php
  echo "The y-coordinate of the vertex is "."$coordinateY";
?>
<br>
<?php 
  echo "Therefore, this would mean that the coordinates of the vertex would be ("."$axisOfSymm".", "."$coordinateY".")"
?>
      </iframe>
      </center>
      <br>
      <!--Image-->
      <img src="./images/standard-form-of-quadratic-equation-php.png" alt="Quadratic Equation" width = "500" height="350">
      <!-- MDL Progress Bar with Indeterminate Progress -->
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    </center>
  </body>
</html>