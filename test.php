<?php



/*echo "toto <br>" ;

echo "Tata <br> <code> &lt;br&gt </code>";

echo "titi" ;

echo "<br>" ;

echo "titi" ;*/

/*$i = 0 ;
$b = 4 ;
$c = 3 ;
echo " test i <br>";

echo $i+ $b ;
$b++;
echo "<br>";

echo $b ;
echo "<br>";

$b--;
$b--;
$b--;
echo $b ;


$a = 5 ;

echo "<br>";
echo "i";

echo "a";

$i++ ; 
echo "test i";

$i--;
echo "i";

$i += 4;
echo "i";

($i++ * $i)*3;*/

$e = 3 ;
// $e += 2 ;

$e = $e + 2 ;
echo $e ;
echo "<br>";




//echo $nb ;

/*$test= "Ceci est un test ";

$mot ="gros mot" ;

$test. " ".$mot ;

$test.=$mot ;

echo $test;*/



$userName ="Omar" ;
$a= 4 ;
$b = 3 ;

$a." ".$b;

$c= "<br>";

echo "Salam, je m'appelle"." ".$userName."!".$c."j'ai"." ". ($a+=10 * $b)." "."ans !".$c."J'habite au". ($a+$b)." ". "boulevard national ";



$fruits =["fraise","banane","Cerise","Pomme","abricot"];

//Deux possiblites de declarer un tableaux
//1er
var_dump($fruits);

//2eme
echo "<pre>";
print_r($fruits);
echo "<pre>";


echo $fruits[4] ; // permet d'accèder à la valeur 4 du tableau
$fruits[4] = "peche"; // modifie l'entrée
var_dump($fruits);

//mix de valeurs

//tableau à 2D 3D

$toto="Michel";

$games=[
    
    ["tarkov",10,false],
//0  [1       2     3]
    ["cod",100,false],
//1  [1       2     3]
    ["mario",1,false],
//2  [1       2     3]
    ["cs",10,false],
//3  [1       2     3]

];

var_dump($games);

var_dump($games [3][0]);

//$games ="tata";
$games[]=["toto","tata"];


var_dump($games);

$tab =["a",1,2,true];

$tab[]= false; //ajout à la fin tableau;
var_dump($tab);// a,1,2,true,false

$games3D=
[

    ["tarkov",10,false],
    ["cod",100,false],
    ["mario",1,false],
    ["cs",10,true,["MM","Bombe","Otages"]]


];

$frameworksAssoc =
[
    ["name" =>"angular","dev"=>"front","asyne" => true],
    ["name" =>"symfony","dev"=>"full-stack","asynec" => true],
    ["name" =>"spring boot","dev"=>"full-stack","asynec" => true]


];
var_dump($frameworksAssoc);

$frameworkIndex =
[
    ["angular","front",true],
    ["symfony","Full-stack",false],
    ["spring boot","Full-stack",false]

];
var_dump($frameworkIndex);







