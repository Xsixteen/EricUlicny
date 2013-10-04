<?

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>-= ericulicny.com =-</title>
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <style>

       input[type="text"] {
           width: 200px;
           margin-left:  33px;
           margin-right: 33px;
       }

       input[type="password"] {
           width: 200px;
           margin-left:  33px;
           margin-right: 33px;
       }

       label {
           width: 200px;
           margin-left:  33px;
           margin-right: 33px;
       }

       #submit_btn {
           margin-top: 25px;
           margin-left:  33px;
           border: 1px solid;
       }

       #submit_btn:hover {
            background: #fafafa;
            box-shadow: 0px 0px 8px 2px #ddd;
       }

       .login_box {
           width: 300px;
           margin: auto;
           border: 1px;
           background: #eeeeee;
       }


      </style>
  </head>


  <body>
  <div id="wrapper">
    <!-- <div id=main> -->
    <div id="top"><br />
      <div id="logo"></div>
      <div id="menu-bar">
      	<a href="index.html">Home</a>
        <a href="about.php">About</a>
      </div>
    </div>
    <div id="bar"></div>
    <div id="lg_disp">	<br />
      <br />
    	<center>
    	  <p>&nbsp;</p>
    	</center>
    </div>
    <div id="bar"></div>
    <div id="content_pane"><br />
        <form class="login_box">
            <fieldset>
                <center><h1>Login</h1></center><br>
                <label for  = "u_name">Username</label><br>
                <input type = "text" id="u_name" /> <br>

                <label for  = "p_word">Password</label><br>
                <input type = "password" id="p_word" /><br />

                <input type="submit" id="submit_btn" value="Login">
            </fieldset>
        </form><br /><br />
    </div>



    <div id="footer">(c) 2013 EricUlicny.com</div>

  </div>
  </body>
  </html>
