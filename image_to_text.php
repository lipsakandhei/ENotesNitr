<?php
	 $filename=isset($_FILES['uploadedfile']['name'])?$_FILES['uploadedfile']['name']:'';
	 $tmpname=isset($_FILES['uploadedfile']['tmp_name'])?$_FILES['uploadedfile']['tmp_name']:'';


	$status=move_uploaded_file($tmpname,'files/OCR/'.$filename);
	if($status)
	{
		echo "file uploaded successfully";
	}
	else
	{
		echo "file upload unsuccessful";
	}
	require_once "./vendor/autoload.php";
  use thiagoalessio\TesseractOCR\TesseractOCR;
  //require_once "./vendor/thiagoalessio/tesseract_ocr/src/TesseractOCR.php";
  //use thiagoalessio\tesseract_ocr\src\TesseractOCR;
   // echo (new TesseractOCR('images/follow.png'))->run();
  $tesseract=new TesseractOCR('files/OCR/'.$filename);
  
  if (stristr(PHP_OS, 'WIN'))
  {
    $tesseract->executable('D:\Tesseract-OCR\tesseract.exe');

    $tesseract->tessdataDir('D:\Tesseract-OCR\tessdata');
  }
    //echo $tesseract->run();
  	$temp=substr($filename,0,3).rand();
  	$myfile = fopen("files/OCRFILES/".$temp.".txt", "w") or die("Unable to open file!");
	$txt = $tesseract->run();
	fwrite($myfile, $txt);
	$msg="files/OCRFILES/".$temp.".txt";
	header('Location:new 2.php?msg='.$msg);
	
	fclose($myfile);
  exit;
?>