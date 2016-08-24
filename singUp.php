
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Freak Studio</title>
	<!-- CSS -->
	<link href="./Apply mechanically/css/bootstrap.min.css" rel="stylesheet">
	<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">-->
	<link rel="stylesheet" href="./Apply mechanically/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="./Apply mechanically/css/form-elements.css">
	<link rel="stylesheet" href="./Apply mechanically/css/signUp.css">

	<!-- Favicon  -->
	<link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon" />
  
</head>

<body>
	
	<nav class="navbar navbar-inverse navbar-static-top" >
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> 
      <button type="button" class="navbar-toggle collapsed" 
              data-toggle="collapse" 
              data-target="#bs-example-navbar-collapse-1" 
              aria-expanded="false"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> </button>        
       
      </div>
      <!-- Collect the nav links,forms,and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.html" style="background-image:url(Img/smallHome.png);width:78px;height:48px"></a></li>
          <li><a href="ourStory.html">Our Story</a></li> 
          <li><a href="Games.html" >Games</a></li>
          <li><a href="terms.html">Terms</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
           <li class="active"><a href="singUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
           
        </ul>
          
       </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!-- 以上是navbar -->

	<div class="top-content">

		<div class="inner-bg">
			<div class="container">

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
						<h1><strong>Please</strong> Login or Register </h1>
						<div class="description">
							<p>
								如未註冊請填寫表單註冊帳戶。<br>
								或使用其他社群連結登入。
							</p>
						</div>
					</div>
				</div>

				

  
					

					<div class="col-sm-5" >

						<div class="form-box" >
							<div class="form-top">
								<div class="form-top-left">
									<h3>Sign up now</h3>
									<p>Fill in the form below to get instant access:</p>
								</div>
								<div class="form-top-right">
									<i class="fa fa-pencil"></i>
								</div>
							</div>
							<div class="form-bottom">
								<form role="form" action="register_finish.php" method="post" class="registration-form">
									<div class="form-group">
										<label class="sr-only" for="form-username">Username</label>
										<input type="text" name="form-username" placeholder="Username..." class="form-first-name form-control" id="form-username">
									</div>
									<div class="form-group">
										<label class="sr-only" for="form-password">Password</label>
										<input type="password" name="form-password" placeholder="Password..." class="form-last-name form-control" id="form-password">
									</div>
									<div class="form-group">
										<label class="sr-only" for="form-email">Email</label>
										<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="email">
									</div>
									<div class="form-group">
										<label class="sr-only" for="form-about-yourself">About yourself</label>
										<textarea name="about-yourself" placeholder="About yourself..." class="form-about-yourself form-control" id="about-yourself"></textarea>
									</div>
									<button type="submit" class="btn">Sign me up!</button>
								</form>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">

				<div class="col-sm-8 col-sm-offset-2">
					<div class="footer-border"></div>
					<p>Copyright © 2016 <a href="https://www.facebook.com/Createfreak/" target="_blank"><strong>Freak studio</strong></a> , Inc. <i class="fa fa-smile-o"></i></p>
				</div>

			</div>
		</div>
	</footer>

	<!-- Javascript -->
	<script src="./Apply mechanically/js/jquery.js"></script>
  	<script src="./Apply mechanically/js/bootstrap.min.js"></script>
	<script src="./Apply mechanically/js/jquery.backstretch.min.js"></script>
	<script src="./Apply mechanically/js/signUp.js"></script>

	<!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>

</html>