<!DOCTYPE html>
<html>
<head>
	<title>ENOTES NITR</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
     h2{
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }
    .pheader
    {
      color:#f12;
      font-size:45px;
       font-family: 'Roboto', sans-serif;

    }
     body{
        color: #000;
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
    a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article, a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}



/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
  </style>


</head>
<body>
	

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
        <li><a href="nitrnotes.php">EVEN SEM</a></li>
        <li><a href="oddsem.php">ODD SEM</a></li>
                               
      </ul>
    </li>-->
    <li><a href="gatenotes.php">GATE NOTES</a></li>
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


<!--sidebar code-->

<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Compiler Design</h3>
                </div>

                <ul class="list-unstyled components">
                    <!--<p>Lexical Analysis</p>-->
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Lexical Analysis</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="test.php">Compiler Design|Lexical Analyses</a></li>
                            <li><a href="https://www.geeksforgeeks.org/lexical-analysis-gq/">Quiz on Lexical Analyses</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <!--<a href="#">Syntax Analyses</a>-->
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Syntax Analyses</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="intro_to_syntax.php">Introduction to Syntax Analyses</a></li>
                            <li><a href="#">Why FIRST and FOLLOW?</a></li>
                            <li><a href="#">FIRST Set in Syntax Analyses</a></li>
                            <li><a href="#">FOLLOW Set in Syntax Analyses</a></li>
                            <li><a href="#">Classification of Context Free Grammars(CFG)</a></li>
                            <li><a href="#">Ambiguous Grammar</a></li>
                             <li><a href="#">Parsing | Set 1 (Introduction, Ambiguity and Parsers)</a></li>
                              <li><a href="#">Parsing | Set 2 (Bottom Up or Shift Reduce Parsers)</a></li>
                               <li><a href="#">Parsing | Set 3 (SLR, CLR and LALR Parsers)</a></li>
                        </ul>
                    </li>
                      <li>
                        <!--<a href="#">Syntax Analyses</a>-->
                        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">Syntax Directed Translation</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu1">
                            <li><a href="#">Syntax Directed Translation</a></li>
                            <li><a href="https://www.geeksforgeeks.org/parsing-and-syntax-directed-translation-gq/">Quiz on Parsing and Syntax Directed Translation</a></li>
                            
                        </ul>
                    </li>
                  <!--  <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>-->
                </ul>

                <ul class="list-unstyled CTAs">
                   <!-- <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>-->
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <!--<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>-->
                        </div>

                       <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div>-->
                    </div>
                </nav>

               <!-- <h2>Compiler Design | Lexical Analysis</h2>
                <p>Lexical Analysis is the first phase of compiler also known as scanner. It converts the input program into a sequence of Tokens.

Lexical Analysis can be implemented with the Deterministic finite Automata.

What is a token?
A lexical token is a sequence of characters that can be treated as a unit in the grammar of the programming languages.

Example of tokens:

Type token (id, number, real, . . . )
Punctuation tokens (IF, void, return, . . . )
Alphabetic tokens (keywords)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h3>Lorem Ipsum Dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>-->


       <header class="entry-header">
						<h1 class="entry-title">Compiler Design | Introduction to Syntax Analysis</h1>
				
						</header><!-- .entry-header -->

				<div class="entry-content">
			<p style="text-align: justify">When an input string (source code or a program in some language) is given to a compiler, the compiler processes it in several phases, starting from <a href="http://quiz.geeksforgeeks.org/compiler-lexical-analysis/">lexical analysis</a> (scans the input and divides it into tokens) to target code generation.<span id="more-142744"></span></p>
<p style="text-align: justify">Syntax Analysis or Parsing is the second phase, i.e. after lexical analysis. It checks the syntactical structure of the given input, i.e. whether the given input is in the correct syntax (of the language in which the input has been written) or not. It does so by building a data structure, called a Parse tree or Syntax tree. The parse tree is constructed by using the pre-defined Grammar of the language and the input string. <em><strong>If the given input string can be produced with the help of the syntax tree (in the derivation process), the input string is found to be in the correct syntax.</strong></em></p>
<p style="text-align: justify">The Grammar for a Language consists of Production rules.</p>
<p style="text-align: justify"><u><strong>Example:</strong></u><br />
Suppose Production rules for the Grammar of a language are:</p>
<pre>  S -&gt; cAd
  A -&gt; bc|a
  And the input string is “cad”.</pre>
<p style="text-align: justify">Now the parser attempts to construct syntax tree from this grammar for the given input string. It uses the given production rules and applies those as needed to generate the string. To generate string “cad” it uses the rules as shown in the given diagram:<br />
<a href="https://cdncontribute.geeksforgeeks.org/wp-content/uploads/Introduction-to-Syntax-Analysis.png"><img class="alignnone size-full wp-image-19099" src="https://cdncontribute.geeksforgeeks.org/wp-content/uploads/Introduction-to-Syntax-Analysis.png" alt="syntaxAnalysis" width="480" height="230" /></a></p><br/>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- post_top_responsive -->
          <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-9465609616171866"
          data-ad-slot="4501693235"
          data-ad-format="auto"></ins>
          <!--<script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>-->
        <br/>
            
<p style="text-align: justify">In the step iii above, the production rule A-&gt;bc was not a suitable one to apply (because the string produced is “cbcd” not “cad”), here the parser needs to backtrack, and apply the next production rule available with A which is shown in the step iv, and the string “cad” is produced.</p>
<p style="text-align: justify">Thus, the given input can be produced by the given grammar, therefore the input is correct in syntax.<br />
But back-track was needed to get the correct syntax tree, which is really a complex process to implement.</p>
<p style="text-align: justify">There can be an easier way to solve this, which we shall see in the next article “Concepts of FIRST and FOLLOW sets in Compiler Design”.</p>
<p style="text-align: justify"><a style="color: green" href="http://quiz.geeksforgeeks.org/parsing-and-syntax-directed-translation/">Quiz on Syntax Analysis</a></p>
<p style="text-align: justify">This article is compiled by <a href="https://disqus.com/by/vaibhav2992/"><strong>Vaibhav Bajpai</strong></a>. Please write comments if you find anything incorrect, or you want to share more information about the topic discussed above</p>
<br/><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- post_bottom_responsive -->
          <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-9465609616171866"
          data-ad-slot="8385097921"
          data-ad-format="auto"></ins>
          <!--<script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>-->
            <br/><br/>
			 		
		<footer class="entry-meta">
		<span><div class="categoryButton"><a href="https://www.geeksforgeeks.org/category/computer-subject/compiler-design/" rel="category tag">Compiler Design</a></div></span> <span></span>
           	<div id="improveArticle" style="float: right;cursor: pointer;"></div><div class="common-bottom">Please write to us at contribute@geeksforgeeks.org to report any issue with the above content.</div>   





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>

         <!--side bar <code></code>-->


</body>
</html>



