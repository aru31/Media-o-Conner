<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
echo "Arpit<br>";
$num_one = 1;
$num_two = 2;

var_dump($num_one); //it tells the data type of the variable
echo "<br>";
$name= "Arpit";

$string_name = 'Hello $name'; //in single quotes $name is printed as $name..
$string_name1 = "Hello $name"; // but in case of double quotes it gives its value i.e Hello Arpit..!!!


echo $string_name;
echo "<br>";
echo $string_name1;   
echo "<br>";

$string_one = "Learning to display \"Hello $name!\" to the screen.";
echo "$string_one";
echo "<br>";

$string_one = 'Learning to display "Hello ' .$name. '!" to the screen';

echo "$string_one";
echo "<br>";

//or...

$string_one = 'Learning to dsplay ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';   //the use of dot operator is very important...

echo "$string_one";
echo "<br>";

$isReady = true; //not case sensitive but use standard that is small letters
var_dump($isReady);
echo "<br>";


var_dump(1 + '2');  //has data type 3 due to the use of arithmetic operator

echo "<br>";

//Same concept of ==, ===,!= and !== as in javaScript
?>
<h2>
  Time now is : <?php echo date('Y-m-d H:i:s'); //Syntax to get current date and Time 
echo "</br>";
echo "Last modified: " . date("Y-m-d H:i:s", getlastmod()); //gives last modified date...
  ?> </h2>

<?php 

$a = 0;
$b = 5;

if($a){
	echo "Oh Yeah"; // 0 is cosideres as false i.e $a==false
}
echo "<br>";

if($b){    //any other number except 0 is considered as true
	echo "yeah";
}
echo "<br>";

if ($a==0||is_string($a)) {
	echo "yes, u got it right"; //is_string means it checks whether the expression is string or not
}

echo "<br>";

$var1 = true && false;
$var2 = true and false;

var_dump($var1 , $var2); //&& is high in heirarchy than == whereas and is low in heirarchy than ==  ..!!!

echo "<br>";

$learn = array('Conditionals', 'arrays', 'loops');
var_dump($learn);

echo "<br>";

echo $learn[0];
echo "<br>";
echo $learn[1];
echo "<br>";


//echo $learn;  --> This will give an error because php doesnot know how to give out that whole data through echo..!!

echo implode( "<br>", $learn); //implode function helps us to join all values of an array and print them out
echo "<br>";

array_push($learn, "functions","arpit");
var_dump($learn);

echo "<br>";

array_unshift($learn, "fun", "sun");
var_dump($learn);   //Same rules just asa javascript... 
echo "<br>";

echo 'You Removed ' .array_shift($learn);//i.e will remove the first element and can be stored in a variable or used directly

echo "<br>";
echo 'You Removed ' .array_pop($learn);// will remove the last element of the array and can be stored in a variable or used directly
echo "<br>";

unset($learn[1],$learn[2]);//these values are permanently removed from the array

//other functions that are array_pop and array_shift updated the values of the array index but unset doesnot update the index values and there always be a hole in index 0 & 3...!!!

$learn = array_values($learn);
var_dump($learn);//it refreshes the array indexes
echo "<br>";

//  unset($learn);
//   var_dump($learn);//This shows an error because whole of array is removed by LINE-->130


$learn[0] = 'Email'; //Now the value of first element of the array is changed and rest are the same

$iceCream = array(
    'Alena'       => 'Black Cherry', 
    'Dave'        => 'Cookies and Cream',
    'Treasure'    => 'Chocolate',
    'Rialla'      => 'Strawberry'
);
var_dump($iceCream);//Here Alena,dave,treasure and rialla are keys to their respective array indexes

echo "<br>";
echo $iceCream['Alena'];//which gives the name of ice-cream she likes..
echo "<br>";

$iceCream['alena'] = 'Pistachio';//A new key is added at last

var_dump($iceCream);

echo "<br>";

$keys = array(
                1 => 'a',
                '1' => 'b',
                1.5 => 'c',
                true => 'd'
                //The values in purple are keys for the array so keys in php can be either string or integer
                //numbers are numbers
                //String with only number are number
                //float values are treated with greatest integer function
                //true -->1        False -->0  
                );

var_dump($keys);//As all keys are 1, all values are overwritten
echo "<br>";

$iceCream[] = 'Vanilla';
var_dump($iceCream);//Earlier in this array all keys were string and the first integer value available for the key is 0
echo "<br>";


$task1 = array(
   'title' => 'Laundry',
   'priority' => 2,
   'due' => '',
   'complete' => true,
);

$task2 = array(
      'title' => 'Claen our refrigerator',
   'priority' => 3,
   'due' => '07/30/2016',
   'complete' => false,
);

$list = array($task1 ,$task2);

var_dump($list);
echo "<br>";

echo $list[0]['title'];


/*$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array);*/  //Learn about it more...

asort($learn);//This would sort them in alphabetical order without reindexing
var_dump($learn);

echo "<br>";

sort($learn);//This would sort them in alphabetical order and also reindexes them
var_dump($learn);

echo "<br>";

rsort($learn);
var_dump($learn); //This would sort them in reverse order without reindexing
echo "<br>";

shuffle($learn);//This would sort them in any order without reindexing
var_dump($learn); 
echo "<br>";

//Ksort helps sorting array using keys. in alphabeticla order..!!!

//smaller alphabets are sorted first then upper case letters

$length = count($learn);//provides length of the array
echo $length;
echo "<br>";


//FUNCTIONS.....

function hello(){
	echo "Hello World!";
}

hello();
echo "<br>";


$current_user = 'arpit';

function is_arpit(){

global $current_user;
	if($current_user=='arpit'){
		echo "It is Arpit";
	}
	else{
		echo "Nope, it is Not Arpit...";
	}
}

is_arpit();
echo "<br>";

function aru($arr){
	if(is_array($arr)){  //is_array checks whether it is an array or not..
		foreach ($arr as $name) {
			echo "Hello $name, How's it's going. "; //$name totally in double quotes...
			echo "<br>";
		}
	}
	else{
		echo "Hello, Freinds";
	}
}

$names = array('Arpit','Gaurav', 'Kirandeep');
aru($names);

function yeah(){
	return 'Hello World!';
}
$greeting = yeah();
echo $greeting;

echo "<br>";

function answer(){
	return 42;
}

$func = 'answer';
echo $func();

//Errors


?>


</body>


</html>















