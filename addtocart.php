<?php session_start();?>


<html>
<head>
    <style>
    table{background:yellow;position:absolute;left:20%;top:30%;}
	tr{height:30px;}
	#btn2{position:absolute;top:55%;height:30px;width:170px;background:lightblue;left:20%;}
	b{position:absolute;font-size:40px;top:60%;left:20%;}
    </style>
</head>

<body>
<?php 
$itemname=$_REQUEST['item'];
$_SESSION['itemname']=$itemname;

//$_SESSION['itemname']=$itemname;
//echo "Items checked";
//print_r($itemname);

//echo "<hr/>";

$price=$_POST['price'];
$_SESSION['price']=$price;
//echo "Price of items";
//print_r($price);
//echo "<hr/>";

$qty=$_POST['qty'];
$_SESSION['qty']=$qty;
//echo "Quantities entered";
//print_r($qty);
//echo "<hr/>";

?>

<form action="removeitem.php" method="post">
    <table  border=collapse>
    <tr><th>Description of items purchased</th><th>Price of items purchased</th> <th>Quantity </th><th>Totalof purchased</th></tr>
<?php foreach($itemname as $key=>$val) {
   
  echo "<tr><td>".$key."</td><td>".$price[$key]."</td>
  <td>".$qty[$key]."</td><td>".($price[$key]*$qty[$key]).
  "</td><td> <input type='checkbox' name='remove[".$key."]' value='on'/></td>
    </tr>";
    $sum_total[$key]=$price[$key]*$qty[$key];
}
$sum_total1=array_sum($sum_total);

echo "<b>The total amount is ".$sum_total1."/- </b>";

?>

   </table>
   
    <input type='submit' value="Remove item" id='btn2'/>

    </form>

<a href="selectcategory.php"> Back </a>
</body>
</html>