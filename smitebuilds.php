<!DOCTYPE html>
<html>
<head>
  <title> Build</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/smitestyles.css" rel="stylesheet">
</head>
<!--src="<? echo 'assets/img/smitebeta.png'; ?> "-->
<body>

<?php
	$godName = $_GET['god'];
	$itemsPath = "assets/img/items/";
	$portraitPath = "assets/img/god portraits/" . $godName . "_Card.jpg";
	$buildPath = "assets/God Builds/" . $godName . ".txt";
	
	$hasData = true;
	$file = fopen($buildPath, "r");
	if (!$file) {
		$hasData = false;
		$itemBuild = array("sad", "sad", "sad", "sad", "sad", "sad", "sad", "sad");
	}
	else {
		$itemBuild = explode("\n", fread($file, filesize($buildPath)));
	}
	
	$unpopular = " is not very popular at high levels. There isn't enough data ;_;";
	
?>
	<div class="container small-p">
		<div class="row-fluid">
			<a href="smitegods.html"><img class="img-responsive" src="assets/img/smitebeta.png" /></a>
		</div>
	</div>
	
	<div class="container centered-text">
		<h1 class="uppercase shadowed"><b><?echo $godName?></b></h1>
		<? if($hasData == false) echo $godName . $unpopular ?>
		<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
				<img class="img-responsive" src="<?=$portraitPath;?>" />
			</div>
		</div>
		<div class="row mtb">
			<p><b>Core Items</b></p>
			<div class="col-sm-2">
					<img class="img-responsive" src="<?=$itemsPath.$itemBuild[0]?>.jpg" title="<?echo $itemBuild[0]?>"/>
					<p><?echo $itemBuild[0]?></p>
			</div>
			<div class="col-sm-2">
					<img class="img-responsive" src="<?=$itemsPath.$itemBuild[1]?>.jpg" title="<?$itemBuild[1]?>"/>
					<p><?echo $itemBuild[1]?></p>
			</div>
			<div class="col-sm-2">
					<img class="img-responsive" src="<?=$itemsPath.$itemBuild[2]?>.jpg" title="<?$itemBuild[2]?>"/>
					<p><?echo $itemBuild[2]?></p>
			</div>
			<div class="col-sm-2">
					<img class="img-responsive" src="<?=$itemsPath.$itemBuild[3]?>.jpg" ttitle="<?$itemBuild[3]?>"/>
					<p><?echo $itemBuild[3]?></p>
			</div>
			<div class="col-sm-2">
					<img class="img-responsive" src="<?=$itemsPath.$itemBuild[4]?>.jpg" title="<?$itemBuild[4]?>"/>
					<p><?echo $itemBuild[4]?></p>
			</div>
			<div class="col-sm-2">
					<img class="img-responsive" src="<?=$itemsPath.$itemBuild[5]?>.jpg" title="<?$itemBuild[5]?>"/>
					<p><?echo $itemBuild[5]?></p>
			</div>
		</div>
		<div class="row">
			<p><b>Active Items</b></p>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-2">
					<img class="img-responsive" src="<?=$itemsPath.$itemBuild[6]?>.jpg" title="<?$itemBuild[6]?>"/>
					<p><?echo $itemBuild[6]?></p>
			</div>
			<div class="col-sm-2">
					<img class="img-responsive" src="<?=$itemsPath.$itemBuild[7]?>.jpg" title="<?$itemBuild[7]?>" />
					<p><?echo $itemBuild[7]?></p>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>
	
</body>

</html>