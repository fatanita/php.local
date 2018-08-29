<?php
 include_once  "functions.php";
 echo "hello functions.";
$arr=array(
    'mellat'=>array('merchant'=>'12345',
        'username'=>'5dst',
        'password'=>'37898',
    ),
    'saman'=>array(
        'api_key'=>'s77770s7ts862',
    ),
    'parsian'=>array(
        'username'=>'dkedhxv',
        'password'=>'65782923',
    ),
);
foreach ($arr as $k =>$v){
    echo $k .'<br>';
//  foreach ($v as $b=>$v){
//     echo "<pre>";
//      echo $b . "=>" . $v;
//     echo "</pre>";

foreach($v  as $k=>$b){
    echo $k ." , " ;
    echo "<br>";
}

}
$families = array("Ahmadi"=>array("a"=>"Ali","b"=>"Reza","c"=>"Sara"),
    "Naderi"=>array("a"=>"Amir"),
    "Mohamadi"=>array("a"=>"Poya","b"=>"Parniya")
);
echo $families['Naderi']['a'] ;