<?php
include("conn.php");
error_reporting(0);
if(preg_match('/union|\*|\'|\"|substr|mid|\=|like|into|file|sleep|benchmark| |\^|or|\|\||\&|>|<|#|\-|ascii|ord/is',$_GET['cat'])){
	die("<center><img src='img/nono.png'><br>我TMD烦死了做不出来，打都打不掉！</center>");
}
function main($cat,$conn){
	$id = $cat;
	$sql="SELECT * FROM cat WHERE id=$id";
	//echo $sql;
	$r = $conn->query($sql);
	$result = $r->fetch_array(MYSQLI_ASSOC);
	echo "<center><img src='img/cat.png'>";
	
}

if(isset($_GET['cat'])){
	
	register_shutdown_function('main',$_GET['cat'],$conn);  

}else{
	echo "<script >window.location.href=\"index.php?cat=1\";</script>";
}
?>
