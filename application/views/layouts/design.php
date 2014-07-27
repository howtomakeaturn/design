<!DOCTYPE html>
<html>
	<head>
    <meta charset='utf8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?php echo $template['title']; ?></title>
		<?php echo $template['metadata']; ?>
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css"> 
    <script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script> 
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>      

    <style>
        body{
            font-family: Lato, sans-serif, 微軟正黑體;
            background: url('/assets/img/bg.jpg');
        }      
      
      
        a, a:hover{
            color: black;
        }
      
        img{
            max-width: 100%;
            max-height: 600px;
        }
        
        .work-box{
            margin-bottom: 10px;
            height: 180px;
            overflow: hidden;
        }
        
        .layout-sidebar{
            line-height: 1.5;
        }
      
    </style>

	</head>
	<body>
    
    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Itees</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="./">關於Itees</a></li>
              <li><a href="../navbar-static-top/">使用規則</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <?php echo $template['body']; ?>            


    </div> <!-- /container -->

	</body>
</html>
