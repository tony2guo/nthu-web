<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="UTF-8" lang="UTF-8">
<head>
	<link rel="stylesheet" href="http://www.tfcis.org/test/style.css" type="text/css" title="TFCIS" media="all" />
	<link rel="shortcut icon" href="http://www.tfcis.org/test/images/ico.jpg" /> 
	<link rel="icon" href="http://www.tfcis.org/test/images/ico.jpg" type="image/x-icon" />
	<link rel="Bookmark" href="http://www.tfcis.org/test/images/ico.jpg" />

	<base href="http://www.tfcis.org/test/" />

	<script type="text/javascript" src="time.js"></script>
	<script type="text/javascript" src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js"></script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="tony2guo" />
	<meta name="keywords" content="台南一中,社團,資訊社,TFCIS" />
	<meta name="description" content="台南一中,社團,資訊社,TFCIS,程設,網管,網頁" />

	<title>台南一中資訊社TFCIS</title>
</head>

<body onload="time();">
<div class="containerbg">

	<div class="containerbgleft">
	</div>

	<div class="container">

		<div class="header">
			<a href="index.php"><img src="images/TFcisweb3_03.gif" alt="首頁" title="首頁" width="780" height="200" /></a>
		</div>

		<div class="mainmenu">
		<script type="text/javascript" src="menu.js"></script>
		</div>

		<div class="right">
		</div>

		<div class="content">
			<p>&nbsp;</p>
		</div>

		<div class="footer">
			<table class="footer">
			<tr>
			<td>
				<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" /></a><br />
				<a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml11-blue" alt="Valid XHTML 1.1" /></a>
			</td>
			<td>
				<span id="showtime"></span><br />
				更新時間：下午 12:39 2010/12/28<br />
				Copyright 2010 tony2guo<br />
<?
echo"人次: ";
	$file=fopen("count.txt","r");
	$k=fgets($file,10);
	$file=fclose;
	$k++;
	echo$k;
	
	for($l=0;$l<strlen($k);$l++){
		$g=substr($k,$l,1);
	}
	$file=fopen("count.txt","w");
	fputs($file,$k);
	$file=fclose;
?>
			</td>
			</tr>
			</table>
		</div>
	</div>

	<div class="containerbgright">
	</div>

</div>
</body>
</html>
