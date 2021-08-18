<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>Digital Voting System</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--<li><a href="feedback.html"><span class="subFont"><strong>Contact Us</strong></span></a></li>
            <li><a href="Contact.html"><span class="subFont"><strong>Contact Us</strong></span></a></li>-->
          </ul>
          <!--<span class="normalFont"><a href="admin\index.php" class="btn btn-success navbar-right navbar-btn"><strong>Admin Panel</strong></a></span>-->
        </div>

      </div> 
      <!-- end of container -->
    </nav>
    </div>
<div class="login-box">
  	<div class="login-logo">
  		<b>Voter Authentication</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Prove Your Authencity of being correct voter.</p>

		<form action="login.php" method="POST">
      			<div class="form-group">
      				<label for="">Voter ID</label><br>
      				<input type="number" class="form-control" name="voterid" placeholder="Voter's ID" required><br>

      				<label for="">Password</label><br>
      				<input type="password" class="form-control" name="password" placeholder="Password" required><br>

      				<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</button>

              <label id="error"></label>
      			</div>

    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>