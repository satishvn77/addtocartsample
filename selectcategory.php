<?php session_start();?>
<html>
<head>
<style>
body{background:yellow;}
#div2{border:2px solid black;padding:20px;overflow:scroll;}
#div6{background:orange;padding:15px;border:2px solid blue;display:inline-block;border-radius:15px;margin:20px;text-align:center;}
#btn{position:absolute; height:60px;width:150px;left:60%;top:90%;}
#category{text-align:center;font-size:40px;}
</style>
</head>
<?php

$category=$_POST['category'];

$items_array= array('books'=>array('Harry Potter'=>5000,
'Such a long journey'=>399,'godfather'=>4000),
'clothes'=> array('shirt'=>500,'Jacket'=>299,'pant'=>488),
'sports'=>array('badminton'=>388,'tennis Racquet'=>3999,'Cricket bat'=>188));

//print_r($items_array);
//echo "<hr/><hr/>";

?>
<body>
<div id='div2'>
<form id='form2' action='addtocart.php' method='post'>
 <?php
foreach($items_array as $key=>$value)
{
    if($key==$category){
        //print_r($value);
        // echo "<hr/><hr/>";
		echo "<h1 id='category'>".$category."</h1>";
         foreach($value as $key=>$val){	echo "<div id='div6'>";
             echo "<h2>".$key."</h2>";
             echo "    ";
             echo $val."  /-Rupees";
             echo "<input type='checkbox' name= 'item[".$key."]' id='check'/>";
             echo "<img src='../images/".$key.".jpg' height=100px width=100px/>";
             echo "<input type='hidden' name='price[".$key."]' value='".$val."'/>";
             echo "Quantity : <input type='number' name='qty[".$key."]'/>  Numbers";
             echo "<hr/><hr/>";
			 echo "</div>";	
         }
		 
    }
}
?>
<input type='submit' value='click for selected items' id='btn'/>
</form>
</div>

<!--<a href='../shoppingwebsite/shoppinginput.php'>refresh</a>-->
</body>
</html>