<?php

	require "connect.php";
	
	 $author_name=isset($_POST['author_name'])?$_POST['author_name']:'';
	 $semester=isset($_POST['semester'])?$_POST['semester']:'';
	 $sub_name=isset($_POST['sub_name'])?$_POST['sub_name']:'';
	 $proff_name=isset($_POST['proff_name'])?$_POST['proff_name']:'';
	 $sub_code=isset($_POST['sub_code'])?$_POST['sub_code']:'';

	 $filename=isset($_FILES['uploadedfile']['name'])?$_FILES['uploadedfile']['name']:'';
	 $tmpname=isset($_FILES['uploadedfile']['tmp_name'])?$_FILES['uploadedfile']['tmp_name']:'';


	$status=move_uploaded_file($tmpname,"files/".$filename);
	if($status)
	{
		//echo "file uploaded successfully";
	}
	else
	{
		//echo "file upload unsuccessful";
	}
	
	$sql="insert into notes(author_name,semester,sub_name,note,date,proff_name,sub_code) values ('$author_name','$semester','$sub_name','$filename',curdate(),'$proff_name','$sub_code')";
	$status=mysqli_query($con,$sql);
	if($status)
	{
		//echo "insert successfully";
		$msg="Your notes are successfully uploaded!";
		header('Location:index.php?msg='.$msg);
	}
	else
	{
		//echo "insert unsuccessful";
		$msg="Sorry! Your notes couldn't uploaded!";
		header('Location:index.php?msg='.$msg);
	}
	
?>