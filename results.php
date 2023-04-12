<?php
	// get coefficient a
	$coefficientA= $_POST["coefficientA"];
  // get coefficient a
	$coefficientB= $_POST["coefficientB"];
  // get constant c
  $constantC = $_POST["constantC"];

	//calculate the axis of symmetry
	$axisOfSymm= round((-1*$coefficientB)/(2*$coefficientA),2);
  //calculate the y-coordinate of the vertex
  $coordinateY = round($coefficientA*pow($axisOfSymm, 2)+$coefficientB*$axisOfSymm+$constantC, 2)
?>
<center>
<?php
  // display the axis of symmetry and y-coordinate of the vertex
  echo "The axis of symmetry is "."$axisOfSymm";
?>
<br>
<?php
  // display how much the government will pay
  echo "The y-coordinate of the vertex is "."$coordinateY";
?>
<br>
<?php 
  // display vertex
  echo "Therefore, this would mean that the coordinates of the vertex would be ("."$axisOfSymm".", "."$coordinateY".")"
?>
</center>