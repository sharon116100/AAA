
<?php
require_once 'config.php';
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SHARON'S HOME</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        
        <style>
        
            
            html, body {
                height: 100%;
            }
            
            body {
                background-image: url('img_forest.jpg');
                
                min-height: 100%;
                background-position: center;
                background-size: cover;
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: "cursive";
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                text-align: center;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
                    }
            .button1 {
                background-color: white; 
                color: black; 
                border: 2px solid #4CAF50;
                font-family: "cursive";
                    }

            .button1:hover {
                background-color: #4CAF50;
                color: white;
                    }
        </style>
        
    </head>
    <body style="color:azure;">
        
        <div class="container">
            <div class="content">
                <div class="title" title="Memer">LogIn</div> 
                
                <form action="login.function.php" method="post">
			<ul>
				<li><p>ID:</p><input type="text" name="id" required></li>
				<li><p>Password:</p><input type="password" name="password" required></li>
			</ul>
            <h1><?php echo "---------------------------------------------------";?></h1>
                    
			<input type="submit" value="Login" class="button1" style="width:200px;height:50px;font-size:30px;"><br><br>
            
		</form>
                <form action="register.php" method="post">
                    <input type="submit" value="new person!!" class="button1" style="width:200px;height:50px;font-size:30px;">
                </form>
                    
                <div class="info"><br />
                    
                    <br />
                    <marquee>吉他社民謠之夜摳尼吉哇即將在5/21舉行,快來!!</marquee>
                    
                    
                </div>
                
            </div>

        </div>
        
    </body>
</html>