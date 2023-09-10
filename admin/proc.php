<?php

if(isset($_POST['toggle'])){
	$ud=file_get_contents('db.json');
	$udarray = json_decode($ud,true);
	$narr=array();
	foreach($udarray as $key=>$value){$narr[$key]=$value;};
	if($narr['status'] == 'on'){
		$narr['status'] = 'off';}
	else{$narr['status'] = 'on';};
	file_put_contents('db.json',json_encode($narr));
	header('location:./?');};
		
if(isset($_POST['clear'])){
	$narr=array('visits'=>array(),'bots'=>array(),'humans'=>array(),'clients'=>0,'o'=>array(),'status'=>'on');
	file_put_contents('db.json',json_encode($narr));
	file_put_contents('bots.txt','');
	file_put_contents('results.txt','');
	file_put_contents('dirs.txt','');
	file_put_contents('yo.txt','');
	if(file_exists('fdir.json')){unlink('fdir.json');};
	header('location:./?');};
		
		
		
		
		
		
		?>