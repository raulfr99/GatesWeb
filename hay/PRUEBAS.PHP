<?php
require("conexao.php");


// Select all the rows in the markers table
$result_markers = "SELECT * FROM user";
$resultado_markers = mysqli_query($conn, $result_markers);


// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
  // Add to XML document node
  echo 'name="' . $row_markers['namel'] . '" ';
  echo 'address="' . $row_markers['address'] . '" ';
  echo 'lat="' . $row_markers['lat'] . '" ';
  echo 'lng="' . $row_markers['Ing'] . '" ';
  echo 'type="' . $row_markers['type'] . '" ';
	echo 'img="' . $row_markers['img'] . '" ';

}
