<?php
 include_once "Connect.php";
 $id = $_POST['id'];
 $creator = mysqli_real_escape_string($connect, $_POST,['creator']);
  $title  = mysqli_real_escape_string($connect, $_POST,['title']);
  $type = mysqli_real_escape_string($connect, $_POST,['type']);
  $identifier = mysqli_real_escape_string($connect, $_POST,['identifier']);
  $date  = mysqli_real_escape_string($connect, $_POST,['date']);
  $language  = mysqli_real_escape_string($connect, $_POST,['language']);
  $description  = mysqli_real_escape_string($connect, $_POST,['description']);
  
  $sql =  "Update eBook_MetaData set creator = '$creator' ,title = '$title',type = '$type',identifier = '$identifier', date = '$date',language ='$language',
  description = '$description' where id = $'id'";
  mysqli_query($connect,$sql);
  redirect('index.php');
  
  function redirect ($url){
	  header = ("Location:.$url);
  }
  mysqli_close($connect);
  
