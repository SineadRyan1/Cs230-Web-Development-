
<?php
		include_once "Connect.php"
		

  
  $creator = mysqli_real_escape_string($connect, $_POST,['creator']);
  $title  = mysqli_real_escape_string($connect, $_POST,['title']);
  $type = mysqli_real_escape_string($connect, $_POST,['type']);
  $identifier = mysqli_real_escape_string($connect, $_POST,['identifier']);
  $date  = mysqli_real_escape_string($connect, $_POST,['date']);
  $language  = mysqli_real_escape_string($connect, $_POST,['language']);
  $description  = mysqli_real_escape_string($connect, $_POST,['description']);

$sql =  "Insert into 'eBook_MetaData'('id','creator','title','type','identifier','date','language','description')
VALUES('5','Sarah Knight','The Life-Changing Magic of Not Giving a F**k: The bestselling book everyone is talking about','Selp Help','9781784298463','2015-12-21','English',
'This irreverent and practical book explains how to rid yourself of unwanted obligations, shame, and guilt - 
and give your f**ks instead to people and things that make you happy.')";

mysqli_query($connect,$sql);
redirect('index.php');
function redirect($url){
	header ("Location:".$url);
}
mysqli.close($connect);