<?php session_start();?>
<html>
<head>
<style>
#header{position:absolute;background:orange;top:0.2px;left:0.2px;right:0.2px;
height:40%;font-family:lucida handwriting;font-size:80px;padding:40px;text-align:center;
}

#div1{background:yellow;left:0.2px;top:40%;
height:100%;width:100%;font-family:Arial;}

h1{position:absolute; left:50%;top:50%;font-size:60px;}
#cat{position:absolute;left:40%;top:70%;height:50px;width:450px;}
#button{position:absolute;left:40%; top:85%;height:45px;}
</style>

</head>
<body> 

<div id='header'> Shopping Website  </div>
<div id='div1'>
    <form id='form1' action='selectcategory.php' method='post'>
    <h1> Category </h1>
    <select name='category' id='cat'> 
    <option value='books'>Books</option>
    <option value='clothes'>Clothes</option>
    <option value='sports'>Sports</option>
     </select>
     <input type='submit' value='click for category' id='button'></input>
    </form>



</body>

</html>