<?php

	$type=$_GET['type'];
	
	getdata($type);
	
	function getdata($type){
		
	if($type==1){
		
		$json = array(array("id"=>1,"title"=>"微软、小米逆势押宝PC 是否黄昏产业还存变数"),
		array("id"=>1,"title"=>"1微软、小米逆势押宝PC 是否黄昏产业还存变数"),
		array("id"=>2,"title"=>"2微软、小米逆势押宝PC 是否黄昏产业还存变数"),
		array("id"=>3,"title"=>"3微软、小米逆势押宝PC 是否黄昏产业还存变数"),
		array("id"=>4,"title"=>"4微软、小米逆势押宝PC 是否黄昏产业还存变数"));
		
		echo json_encode($json);
		exit(0);
		
	}else if($type===2){
		$json = array(array("id"=>1,"title"=>"外交部回应日本人因间谍嫌疑被捕:中方正依法调查"),
		array("id"=>1,"title"=>"外交部回应日本人因间谍嫌疑被捕:中方正依法调查"),
		array("id"=>2,"title"=>"外交部回应日本人因间谍嫌疑被捕:中方正依法调查"),
		array("id"=>3,"title"=>"外交部回应日本人因间谍嫌疑被捕:中方正依法调查"),
		array("id"=>4,"title"=>"外交部回应日本人因间谍嫌疑被捕:中方正依法调查"));
		
		echo json_encode($json);
		exit(0);
		
	}else if($type==3){
		$json = array(array("id"=>1,"title"=>"微软、小米逆势押宝PC 是否黄昏产业还存变数"),
		array("id"=>1,"title"=>"1民航反腐风暴发酵 南航副总经理刘纤被带走调查"),
		array("id"=>2,"title"=>"2民航反腐风暴发酵 南航副总经理刘纤被带走调查"),
		array("id"=>3,"title"=>"3民航反腐风暴发酵 南航副总经理刘纤被带走调查"),
		array("id"=>4,"title"=>"4民航反腐风暴发酵 南航副总经理刘纤被带走调查"));
		
		echo json_encode($json);
		exit(0);
		
	}

	}
	
?>