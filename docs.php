<?php


# 1 
echo phpinfo();

#2 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// echo $FIRSTNAME."ASDASDD"."<BR>"; 

#3 
define("siteName", "http://localhost:80/php_pro/docs.php");
echo siteName . "" . "<br>";

#4
echo $_SERVER['SERVER_NAME'] . "(1) server name" . "<br>"; //server name
echo 'User IP Address - ' . $_SERVER['REMOTE_ADDR'] . "(2) ip adress" . "<br>"; //ip adress
echo $_SERVER['SERVER_PORT'] . "(3) Root" . "<br>"; // server port
$fullpath = __FILE__;
echo $fullpath . "(4) current path" . "<BR>"; //FILE PATH
$fileName = basename($fullpath);
echo $fileName . "(5) file name" . "<br>";

#5
// for loop
echo "<BR>"."<BR>"."<BR>";
echo "For loop"."<BR>";
$a = 0;
$b = 0;
for ($i = 0; $i < 5; $i++) {
    $a += 10; //$a=$a+10
    $b += 5;
}
echo ("At the end of the FOR loop a = $a and b = $b") . "<br>"; //a = 50, b=25

//while loop
echo "<BR>"."<BR>"."<BR>";
echo "While loop"."<BR>";

$i = 0;
$num = 50;
while ($i < 10) {
    $num--;
    $i++;
}
echo ("While Loop stopped at i = $i and num = $num"). "<br>"; // i = 10 , num =40

//do while
echo "<BR>"."<BR>"."<BR>";
echo "Do-while loop"."<BR>";

$i = 0;
$num = 0;
do {
    $i++;
} while ($i < 10);
echo ("Do-while loop stopped at i = $i"). "<br>"; //i=10


echo "<BR>"."<BR>"."<BR>";
echo "For-each loop"."<BR>";

$array = array(1, 2, 3, 4, 5);
     
foreach ($array as $value)
 {
    echo "For-each loop Value is $value <br />";
 }
  

echo "<BR>"."<BR>";
echo "BREAK"."<BR>";

$i = 0;
while ($i < 10)
 {
    $i++;
    if ($i == 3) break;
}
echo ("Break loop stopped at i = $i"). "<br>"; // i =3




echo "<BR>"."<BR>"."<BR>";
echo "continue"."<BR>";

$array = array(1, 2, 3, 4, 5);

foreach ($array as $value) {
    if ($value == 3) continue;
    echo "continue value is $value <br />";
}
                              

#6
echo "<BR>"."<BR>"."<BR>";
echo "Switch"."<BR>";
$age=10;
switch($age){
    case $age<5:
        echo "Stay at home";
        break;
    case $age==5:
        echo " Go to nursery";
        break;
    case $age>5&& $age<12:
        echo "Go to grade: ".($age-6) ;
        break;
    default:
        echo "fine!";
}
