<?php

	require "connect.php";
	
	 $author_name=isset($_POST['author_name'])?$_POST['author_name']:'';
	 $branch=isset($_POST['branch'])?$_POST['branch']:'';
	 $sub_name=isset($_POST['sub_name'])?$_POST['sub_name']:'';

	 $filename=isset($_FILES['uploadedfile']['name'])?$_FILES['uploadedfile']['name']:'';
	 $tmpname=isset($_FILES['uploadedfile']['tmp_name'])?$_FILES['uploadedfile']['tmp_name']:'';


	$status=move_uploaded_file($tmpname,"files/".$filename);
	if($status)
	{
		echo "file uploaded successfully";
	}
	else
	{
		echo "file upload unsuccessful";
	}
	
	$sql="insert into gate_notes(author_name,branch,sub_name,note,date) values ('$author_name','$branch','$sub_name','$filename',curdate())";
	$status=mysqli_query($con,$sql);
	if($status)
	{
		//echo "insert successfully";
		$msg="Your notes are successfully uploaded!";
		header('Location:index.php?msg1='.$msg);
	}
	else
	{
		//echo "insert unsuccessful";
		$msg="Sorry! Your notes couldn't uploaded!";
		header('Location:index.php?msg1='.$msg);
	}
	
?>