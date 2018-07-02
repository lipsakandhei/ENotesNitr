<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ENOTES NITR</title>
    <link rel="shortcut icon" type="image/gif" href="/images/nitrlogo.jpg"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.header
  	{
  		color: #fff;
        background: #000;
        font-family: 'Roboto', sans-serif;
        height: 70px;

  	}
  	.pheader
  	{
  		color:#f12;
  		font-size:45px;
  		 font-family: 'Roboto', sans-serif;

  	}
  	 body{
        color: #fff;
        background: #fff;
        font-family: 'Roboto', sans-serif;
    }
    .form-control{
        height: 40px;
        box-shadow: none;
        color: #969fa4;
    }
    .form-control:focus{
        border-color: #5cb85c;
    }
    .form-control, .btn{        
        border-radius: 3px;
    }
    .signup-form{
        width: 400px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .signup-form h2{
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }
    
    .signup-form .hint-text{
        color: #999;
        margin-bottom: 30px;
        text-align: center;
    }
    .signup-form form{
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .signup-form .form-group{
        margin-bottom: 20px;
    }
    .signup-form input[type="checkbox"]{
        margin-top: 3px;
    }
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;      
        min-width: 140px;
        outline: none !important;
    }
    .signup-form .row div:first-child{
        padding-right: 10px;
    }
    .signup-form .row div:last-child{
        padding-left: 10px;
    }       
    .signup-form a{
        color: #fff;
        text-decoration: underline;
    }
    .signup-form a:hover{
        text-decoration: none;
    }
    .signup-form form a{
        color: #5cb85c;
        text-decoration: none;
    }   
    .signup-form form a:hover{
        text-decoration: underline;
    } 
  </style>

</head>
<body>
    <!--<h1>Hello, world!</h1>-->
    <div class='container'>
    <div class='header'>
    	<p class="pheader">
    		ENOTES NITR
    	</p>
    </div>
    <ul class="nav nav-tabs">
    <li class="active"><a href="index.php">NITR NOTES</a></li>
    <!--<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">SEMESTERS <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#evensem">EVEN SEM</a></li>
        <li><a href="#oddsem">ODD SEM</a></li>
                               
      </ul>
    </li>-->
    <li><a href="#">GATE NOTES</a></li>
    <li class="dropdown">
    	<a class="dropdown-toggle" data-toggle="dropdown" href="#uploadnotes">UPLOAD NOTES <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="gate.php">GATE</a></li>
        <li><a href="nitr.php">NITR</a></li>
                               
      </ul>
</li>

    <li><a href="new 2.php">IMAGE TO TEXT FORMAT</a></li>
      <li><a href="test.php">ONLINE TUTORIALS</a></li>
  </ul>
</div>



    <!--  
    	<div id="gate" class="tab-pane fade in active">

    		 <div class="signup-form">
   			 	<form enctype="multipart/form-data" action="fetch_gate.php" method="post">
               <?php
               if(isset($_GET['msg1']))
               {
      
              ?>
              <div class="alert alert-success">
              <strong>Success!</strong> <?php echo $_GET['msg1']; ?> 
              </div>
     
    
              <?php }
              ?>
             

      			  <h2>GATE NOTES</h2>
        			<p class="hint-text">Upload your gate notes here.</p>

        	

        <div class="form-group">
                <div><input type="text" class="form-control" name="author_name" placeholder="Author Name" required="required"></div>          
        </div>

         <div class="form-group">
                <div "><input type="text" class="form-control" name="branch" placeholder="Branch" required="required" ></div>
        
        </div> 

       
       

        <div class="form-group">
                <div "><input type="text" class="form-control" name="sub_name" placeholder="subject name" required="required" ></div>
        
        </div>   

         <div class="form-group">
         	<div class="row">
         		<label class="col-xs-6">enter the file to be uploaded. </label>
         		<div class="col-xs-6">  <input id="file" type="file" name="uploadedfile" class="form-control" /></label></div> 
         	</div>
                      
        </div>  

     
        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Upload</button>
        </div>

    </form>

    </div>
	</div>-->


<!--the form for uploading the nitr notes-->
 
          <div id="nitr" class="tab-pane fade in active">
    		 <div class="signup-form">
   			 	<form enctype="multipart/form-data" action="fetch_nitr.php" method="post">
               <?php
               if(isset($_GET['msg']))
               {
      
              ?>
              <div class="alert alert-success">
              <strong>Success!</strong> <?php echo $_GET['msg']; ?> 
              </div>
     
    
              <?php }
              ?>

      			  <h2>NITR NOTES</h2>
        			<p class="hint-text">Upload your nitr notes here.</p>

        	

        <div class="form-group">
                <div><input type="text" class="form-control" name="author_name" placeholder="Author Name" required="required"></div>          
        </div>

         <div class="form-group">
                <div "><input type="text" class="form-control" name="sub_name" placeholder="subject name" required="required" ></div>
        
        </div> 

       
       

        <div class="form-group">
                <div "><input type="text" class="form-control" name="sub_code" placeholder="subject code" required="required" ></div>
        
        </div>  

        <div class="form-group">
                <div "><input type="text" class="form-control" name="proff_name" placeholder="professor name" required="required" ></div>
        
        </div>

        <div class="form-group">
                <div "><input type="text" class="form-control" name="semester" placeholder="semester" required="required" ></div>
        
        </div> 

         <div class="form-group">
         	<div class="row">
         		<label class="col-xs-6">enter the file to be uploaded. </label>>
         		<div class="col-xs-6">  <input id="file" type="file" name="uploadedfile" class="form-control" /></label></div> 
         	</div>
                      
        </div>  

     
        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Upload</button>
        </div>

    </form>

    </div>
	</div>




</div>

    </div>
        
</body>
</html>