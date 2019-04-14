<?php session_start();?>
<html>
<head>
  
<style> #table3{background:yellow;}
</style>
</head>
<body>
<?php

$removeitem1=$_REQUEST['remove1'];
//print_r($removeitem1); 
//echo "<hr/>";
$price2=$_SESSION['price'];
$qty2=$_SESSION['qty'];
$item_rem=$_SESSION['itemremove'];
//print_r($item_rem);

if(count($removeitem1)>0){
    
    $itemname_remo=array_diff_key($item_rem,$removeitem1 );
  //print_r($itemname_remo);
  }

?>

<table border=collapse id='table3'>

<tr><th> Description of items purchased</th>
<th>Price of items purchased</th> 
<th>Quantity </th><th>Ttalof purchased</th> </tr>
<?php foreach($itemname_remo as $key=>$value){
echo "<tr> <td>".$key."</td><td>".$price2[$key]."</td><td>"
.$qty2[$key]."</td><td>".($price2[$key]*$qty2[$key]).
"</td><td> <input type='checkbox' name='remove1[".$key."]' 
value='on'/></td>
  </tr>";

  $sum_total[$key]=$price2[$key]*$qty2[$key];
}
$sum_total2=array_sum($sum_total);

echo "<h1>The total amount is ".$sum_total2."/- </h1>";
?>
</table>
<a href="removeitem.php" > Back </a>
</body>
</html>