<?php session_start();?>

<?php   $removeitem=$_REQUEST['remove'];
$itemname=$_SESSION['itemname'];
//$removeitem1=$_REQUEST['remove1'];
//print_r($removeitem1); 
//echo "<hr/>";   
//$itemname1=$_SESSION['itemname'];
$price1=$_SESSION['price'];
$qty1=$_SESSION['qty'];

//print_r($removeitem);
//echo "removeitem<br/>";
//print_r($itemname);
//echo "name<hr/><hr/><hr/>";
if(count($removeitem)>0){


    $itemname_remove=array_diff_key($itemname,$removeitem );
    
   // print_r($itemname_remove);
    //echo "<br/><hr/>";
  
}else
{
  $itemname_remove=$itemname;
}
?>
<html>
<head>
<style> 
body{background:yellow;}
form{background:lightgreen;border:2px solid blue;}

</style>

</head>

<body>
<form action="final page.php" method='post'>
<table border=collapse>

<tr><th> Description of items purchased</th>
<th>Price of items purchased</th> 
<th>Quantity </th><th>Total of purchased</th> </tr>
<?php foreach($itemname_remove as $key=>$value){
echo "<tr> <td>".$key."</td><td>".$price1[$key]."</td><td>"
.$qty1[$key]."</td><td>".($price1[$key]*$qty1[$key]).
"</td><td> <input type='checkbox' name='remove1[".$key."]' 
value='on'/></td>
  </tr>";

  $sum_total[$key]=$price1[$key]*$qty1[$key];
}
$sum_total1=array_sum($sum_total);

echo "<b> The total amount is ".$sum_total1."/- </b>";
?>


 </table>
 <input type='submit' value="remove item"/>
</form>
<?php $_SESSION['itemremove']=$itemname_remove;?>





 </body>

</html>
