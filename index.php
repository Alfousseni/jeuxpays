<?php 
session_start();

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}



require_once 'src/drapeaux.php';
require_once 'src/answere.php';

if(isset($_POST['submit'])){

$answere=$_POST['answere'];
$flag_name=$_POST['flag_name'];
$resu=answere($answere,$flag_name);

if($resu){
    $_SESSION['score']++;
    $resu=false;
}
else{
    header("location: src/des.php" );
}
echo $_SESSION['score'];


}