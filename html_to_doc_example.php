<?php
	include("html_to_doc.inc.php");
	$content=$_POST['contentToSave'];
	$mode="w";
	$fp=@fopen('test.html',$mode);
	//if(!is_resource($fp))
	//return false;
	fwrite($fp,$content);
	fclose($fp);
	//return true;
	$htmltodoc= new HTML_TO_DOC();
	
	$htmltodoc->createDoc("test.html","testingchaka.".$_POST['Type'],true);
	unlink('test.html');
	//$htmltodoc->createDocFromURL("http://yahoo.com","test");
	

?>