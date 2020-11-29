<!DOCTYPE html>
<html>
<head>
    <title>Php Function Creation</title>
    </head>

<style>
    div{
        background-color: chartreuse;
        color:red;
        width:300px;
        height:100px;
        border:10px solid orange;
        background-image: url("water.jpg");
    }
    
    </style>
<body>
    <div>
<?php
function sarath()  //we created a function by declaring functions inside the function 
{
	$a=10;  //local variable
	$b=20;   //local variable
	$name="Bujala sarah kumar reddy";  //local variable
	echo "value of a is:" .$a;
	echo "<br>";
	echo "value of b is:" .$b;
	echo "<br>";
	echo "Myname is:" .$name;
}
sarath();
                     //I Created one more function using local variables
$a=10;
$name="Bujala sarath kumar reddy";
function kumar()
{
  //note:if we declare varibale and values to the variables outside he function then ihe variable is global variable you can print the value outside the functon only by calling the function()//
    echo "<br>";
    
}
kumar();
echo "value of a  is:" .$a ."<br>";
echo "myname is:" .$name;

?>
    </div>
    </body>
</html>
