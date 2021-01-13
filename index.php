
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>We host</title>
<?php
use Phppot\Member;
if (isset($_POST["goLive"])) {
    require_once 'Member.php';
    $member = new Member();
    $registrationResponse = $member->startLiveProcess();
}
?>

<script src="https://kit.fontawesome.com/755dcdeb7d.js" crossorigin="anonymous"></script>
 <!-- Compiled and minified CSS -->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>       
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<link rel="stylesheet" href="css/flip.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">


</head>

<body>
  <div class="container-fluid">
    <div class="text-center row navbar-brand">
    <h4 class="text-center">Keyname.org</h4>
    <h5 class="products text-center">    
      <span>
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </span>
      <span>
        <a class="nav-link" href="#price">Price</a>
      </span>
      <span>
        <a class="nav-link" href="#goLiveForm">Go Live</a>
      </span>
    
  </h5>
  </div>




  <div class="jumbotron text-center border border-primary rounded">    
      <div class="row">
        <div class="col-sm-12">
          <h1 class="products">What we believe</h1>
          <p>The world has evolved to become a global village.With technology, access to products and services is no longer limited by boundaries, why let your business be?</p>
          
          <a href="price.html" class="btn btn-primary">Learn More</a>
          
        </div>
      </div>
    </div> 

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center ">
        <h1 class="products">What we offer</h1>
        <p>Get yourself an online presence.With the latest technologies you can expect:</p>
      </div>
    </div>
  </div>
</section>

<section>
<div class="container">
<div class="row" id="pricing">
<div class="col-sm-4">
<div class="card product">  
  <div class="card-body products">
    <h5 class="card-title text-primary text-center">Basic</h5>
    <p class="card-text text-center">
    <i class="fas fa-database products"></i>	
    </p>
    <p class="card-text text-center "><span class="features">Storage</span></p>
    <p class="card-text text-center">KShs. 400/month  KShs 4500/year</p> 
  </div>
</div>
</div>

<div class="col-sm-4">
<div class="card product">  
  <div class="card-body products">
    <h5 class="card-title text-primary text-center">Intermediate</h5>
    <p class="card-text text-center">
    <i class="fas fa-database products"></i>
	<i class="fas fa-hammer products"></i>
    </p>
    <p class="card-text text-center"><span class="features">Storage  </span><span class="features">Maintenance</span></p>
    <p class="card-text text-center">KShs 600/month	KShs 6500/year</p>   
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card product">  
  <div class="card-body products">
    <h5 class="card-title text-primary text-center">Advanced</h5>
    <p class="card-text text-center">
    <i class="fas fa-database products"></i>
	<i class="fas fa-hammer products"></i>
    <i class="fas fa-code products"></i>
    </p>
    <p class="card-text text-center"><span class="features">Storage  </span><span class="features">Maintenance  </span><span class="features">Develop</span></p>
    <p class="card-text text-center">KShs 12,000/month</p>
  </div>
</div>
</div>

</div>
</div>
</section>
<section>
<div class="row" id="goLiveForm">	
	<div class="card signupForm">
<div class="card-text">
    <form action="#goLiveForm" method="post">
       <?php 
                           if(!empty($registrationResponse["status"]))
                           {
                           ?>
                        <?php 
                           if($registrationResponse["status"] == "error")
                           {
                           ?>
                        <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                        <?php 
                           } 
                           else if($registrationResponse["status"] == "success")
                           {
                                   ?>
                        <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                        <?php
        }
        ?>
                        <?php 
                           }
                                   ?>
                
                        <div class="error-msg" id="error-msg"></div>
    	<div class="row">
    <div class="form-group col-sm-6">
    <label for="username">Full Name</label>
    <input class="form-control" type="text" name="username">
    </div>    
    <div class="form-group col-sm-6">
    <label for="email">Email</label>
    <input class="form-control" type="text" name="email">
    </div>  
</div>
    <div class="row">  
    <div class="form-group col-sm-6">
    <label for="telephone">Phone Number</label>
    <input class="form-control" type="text" name="telephone">
    </div>   
    <div class="form-group col-sm-6">
    <label for="package">Select package</label>
    <select class="form-control" name="package" style="border-radius:5px" >   
    <option value="Basic">Basic</option>
    <option value="Intermediate">Intermediate</option>
    <option value="Advanced">Advanced</option>
    </select>
	</div>
    </div>
    <div class="row goLive">
    <button class="btn products" type="submit" name="goLive">Go Live</button>
</div>
    </form>
    </div>    
</div>
</div>
<div class="row">
  <div class="card products">
   <p class="card-text text-center">
    <i class="fas fa-globe products"></i>
  <i class="fas fa-comments products"></i>
    <i class="fas fa-toggle-on products"></i>
    </p>
    <p class="text-center">
      <span class="products">Global Access</span>     
      <span class="products">24 hrs support</span>    
      <span class="products">Always On</span>     
    </p>
  </div>
</div>

</div>
    </section>
<hr>
<div class="section well">
    <div class="container rounded" id="contacts">
   	  <div class="row">
		<div class="col-lg-4 col-md-4">
            <h3 class="text-center products">WHO WE ARE</h3>
            <h5>We are a dedicated team of developers and engineers looking to connect as well as provide technology solutions to individuals and business</h5>
        </div>
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center products">GET IN TOUCH</h3>
          <address class="text-center">
             <p>
    <i class="fas fa-envelope" style="font-size:40px;color:#2196F3" href="mailto:perryobara@keyname.org"></i>
  <i class="fas fa-phone"  href="tel:+254 728678161" style="font-size:40px;color:#2196F3"></i>    
    </p>
  <a href="mailto:perryobara@keyname.org">Email Us</a>
  <a href="tel:+254 728678161">Call Us</a>
</address>
</div>
</div>
    </div>
	</div>
    <footer class="text-center">
  <div class="container border border-primary rounded">
    <div class="row">
      <div class="col-sm-12">
        <p class="products">With love <i class="fas fa-heart" style="font-size:15px;color:red"></i> © keyname.org. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>


  </div>
</body>
</html>