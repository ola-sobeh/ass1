<?php
 $stdGrads  = array(" Quran" => 100 ," calculus"=>90 , "English"=>94 ); 
?>
  <?php $Countries = array("palestine" => "xx" ," Egypt"=>" yy" , "Jorden" =>"hh" , " lebanon" => "rr" , "syria" => "bb");
?>
<?php  
$IUG= array("IT" => array("dean"=>"x","lowest"=>1000,"hightest"=>8000) ,
	"ENG" => array("dean"=>"y","lowest"=>1000,"hightest"=>9000) );
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  $stdGrads = array(" Quran" => 100 ," calculus"=>90 , "English"=>94 );
	?>
	<table border="1"><tbody>	
    <?php 
      $sum=0; 	
	  foreach ($stdGrads as $key => $value) {
	  	$sum += $value;
	  	echo " <tr><th> $key </th> <td> $value</td> </tr> ";
		  }?>
		   </tbody><tfoot><tr><th colspan="2">
	      <?php echo $sum/count($stdGrads)?>
	      </th></tr></tfoot></table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  $cars = array( "car1" => array("make" => "Toyota", "color" => "Green", "year" => 1999,"engine_cc" => 1998), 
"car2" => array("make" => "BMW", "color" => "RED", "year" => 2005,"engine_cc" => 2400) 
);?>
<table border="2">
	<thead> <tr> <th>cars</th><th>make</th><th>color</th><th>year</th> <th>engine_cc</th></tr></thead>
	

	<?php 
	for(reset($cars); $ky=key($cars); next($cars) ) {
		echo "<tr><th> $ky </th>";
		for(reset($cars[$ky]); $k=key($cars[$ky]); next($cars[$ky])){
		echo "<td>", $cars[$ky][$k], "</td>";				


	} echo "</tr>";
} ?>
</table>
</body>
</html>

<?php
$founded = array_search("Skoda",$cars); 
 if ($founded) {
 printf( "<br> %s : %s", $founded,  $cars[$founded]); 
}else
print("Not Found");
 ?>
 <?php 
 $Fname  = array("oldborother"=> "baraa",
                   "midborother"=> "Mohanned", 
                   "yangborother" => "abed-alrhman"
   );
 foreach ($Fname as $key => $value) {
 	
 	printf(" <br> My %s is %s",$key,$value);
 	
 	
 }

  ?>

  
