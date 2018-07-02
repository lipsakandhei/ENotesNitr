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
                        <h1 class="entry-title">Compiler Design | Lexical Analysis</h1>
                
                        </header><!-- .entry-header -->

                <div class="entry-content">
            <p>Lexical Analysis is the first phase of compiler also known as scanner. It converts the input program into a sequence of <strong>Tokens</strong>.</p>
<p>Lexical Analysis can be implemented with the <a href="http://quiz.geeksforgeeks.org/toc-finite-automata-introduction/" target="_blank">Deterministic finite Automata</a>.</p>
<p><strong>What is a token?</strong><br />
A lexical token is a sequence of characters that can be treated as a unit in the grammar of the programming languages.</p>
<p><strong>Example of tokens:</strong></p>
<ul>
<li>Type token (id, number, real, . . . )</li>
<li>Punctuation tokens (IF, void, return, . . . )</li>
<li>Alphabetic tokens (keywords)</li>
</ul>
<pre>Keywords; Examples-for, while, if etc.
Identifier; Examples-Variable name, function name etc.
Operators; Examples '+', '++', '-' etc.
Separators; Examples ',' ';' etc</pre>
<p><strong>Example of Non-Tokens:</strong></p><br/>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- post_top_responsive -->
          <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-9465609616171866"
          data-ad-slot="4501693235"
          data-ad-format="auto"></ins>
         <!-- <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>-->
        <br/>
            
<ul>
<li>Comments, preprocessor directive, macros, blanks, tabs, newline  etc</li>
</ul>
<p><strong>How Lexical Analyzer functions<a href="https://www.geeksforgeeks.org/wp-content/uploads/gq/2015/10/la.png"><br />
</a></strong><br />
1. Tokenization .i.e Dividing the program into valid tokens.<br />
2. Remove white space characters.<br />
3. Remove comments.<br />
4. It also provides help in generating error message by providing row number and column number.</p>
<p><img class="aligncenter size-full wp-image-19686" src="https://www.geeksforgeeks.org/wp-content/uploads/Compiler_design_lexical_analysis.jpg" alt="la" width="500" height="500" /></p>
<p>The lexical analyzer identifies the error with the help of automation machine and the grammar of  the given language on which it is based like C , C++.</p>
<p>Suppose we pass a statement through lexical analyzer &#8211;</p>
<p><strong>a = b + c</strong> ;                It will generate token sequence like this:</p>
<p><strong>id=id+id</strong>;                 Where each id reference to it’s variable in the symbol table referencing all details</p>
<p>For example, consider the program</p>
<pre>int main()
{
  // 2 variables
  int a, b;
  a = 10;
 return 0;
}</pre>
<p>All the valid tokens are:</p>
<pre>'int'  'main'  '('  ')'  '{'  '}'  'int'  'a' ','  'b'  ';'
 'a'  '='  '10'  ';' 'return'  '0'  ';'  '}'</pre>
<p>Above are the valid tokens.<br />
You can observe that we have omitted comments.</p>
<p>As another example, consider below printf statement.<br />
<a href="https://www.geeksforgeeks.org/wp-content/uploads/gq/2015/07/token.png"><img class="alignnone size-medium wp-image-18180" src="https://www.geeksforgeeks.org/wp-content/uploads/gq/2015/07/token-300x126.png" alt="token" width="300" height="126" /></a><br />
There are 5 valid token in this printf statement.<br />
<strong>Exercise 1:</strong><br />
Count number of tokens :</p>
<pre>int main()
{
  int a = 10, b = 20;
  printf("sum is :%d",a+b);
  return 0;
}
Answer: Total number of token: 27.</pre>
<p><strong>Exercise 2:</strong></p>
<p>Count number of tokens :</p>
<p>int max(int i);</p>
<ul>
<li>Lexical analyzer first read <strong>int</strong> and finds it to be valid and accepts as token</li>
<li><strong>max</strong> is read by it and found to be valid function name after reading<strong> (</strong></li>
<li><strong>int</strong>  is also a token , then again<strong> i</strong> as another token and finally <strong>;</strong></li>
</ul>
<pre> Answer:  Total number of tokens 7:     int, max, ( ,int, i, ), ;</pre>
<p>Below are previous year GATE question on Lexical analysis.</p>
<p><a href="http://quiz.geeksforgeeks.org/lexical-analysis/" target="_blank">http://quiz.geeksforgeeks.org/lexical-analysis/</a><br />
Please write comments if you find anything incorrect, or you want to share more information about the topic discussed above</p>
<br/><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- post_bottom_responsive -->
          <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-9465609616171866"
          data-ad-slot="8385097921"
          data-ad-format="auto"></ins>
          <!--<script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>>-->
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



