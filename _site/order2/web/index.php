<!DOCTYPE html>
<html lang="en">

  <head>

    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/css/main.css">

    <link rel='stylesheet' type='text/css' href='/assets/css/sendEmail.css'/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">

	<script type='text/javascript' src='/assets/validateEmail.js'></script>
    
  </head>

  <body>

  <div class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      <a href="/"><img src="/assets/images/logo/logoLR.png"/></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        
        
        
  
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
        
          <li><a href="/products">Products</a></li>
        
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
    
  
    
      
    
  

  
    
  
    
      
        
          <li><a href="/aboutUs">About Us</a></li>
        
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
    
  
    
      
    
  

  
    
  
    
      
    
  
    
      
        
          <li><a href="/contact">Contact Us</a></li>
        
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
    
  
    
      
    
  

  
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
        
          <li><a href="/testimonials">Testimonials</a></li>
        
      
    
  
    
      
    
  

  
    
  
    
      
    
  
    
      
    
  
    
      
        
          <li><a href="/faqs">FAQs</a></li>
        
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
    
  
    
      
    
  

  
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
        
          <li><a href="/measurements">Measurements</a></li>
        
      
    
  
    
      
        
          <li><a href="/order">Order</a></li>
        
      
    
  
    
  
    
      
    
  
    
      
        
          <li class="active"><a href="/order2/web/index.php" class="active">Order</a></li>
        
      
    
  

  
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
    
  
    
      
    
  

  
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
    
  
    
      
    
  

  
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
    
  
    
      
    
  

  
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
      
    
  
    
  
    
      
    
  
    
      
    
  




      </ul>
    </div>
  </div>
</div>




    <div class ="orders">
        <div class = "container">
            <h2>Before you order</h2>
            <p>Make sure that you have accurate measurements for your table as specified in another place on this site (will include link).  Also double check that the image is of the right quality as specified (link).</p>
            <hr class="featurette-divider">
            
            <p>When you are ready, submit your image and size in the form below.  You will be redirected to our store which is hosted by Square.</p>

            <form name="contactform" class="contactform" method="post" onsubmit="return validateForm()"  action="sendEmail.php">
              <label>Sender Email:</label>
              <input type="text" id="semail" name="semail" />
              <label>Recipient Email:</label>
              <input type="text" id="remail" name="remail" value="" />
              <label for="Subject">Subject:</label>
              <input type="text" name="Subject" id="Subject" />
              <label for="Attachment">Attachment:</label>
              <input type="file" name="attach1" id="attach1" />
              <label for="Message">Message:</label><br />
              <textarea name="Message" rows="10" cols="50" id="Message"></textarea>
              <div class="submit-btn">
              <input type="submit"/>
              </div>
            </form>

        </div>
    
<div style="
	cursor: pointer; 
	margin-top: -24px; 
	position: fixed;
	right: 0px;
	top: 50%;
	z-index: 2147483646;
	-webkit-transform: translateX(0px);
	transform: translateX(0px);
	-webkit-transition: transform 0.2 ease;
	transition: transform -.2s ease;
	backgroundcolor: white;"</div>

<div style = "
	cursor: pointer;
	margin-top: -24px;
	position: fixed;
	right: 0px;
	top: 50%;
	z-index: 2147483646;
	-webkit-transform: translateX(0px);
	transform 0.2s ease;
	transition: transform 0.2s ease;
	background color: white;">

	<a href="https://squareup.com/market/trilliumproducts#js-sticky-basket-flyout" style="
		box-sizing: border-box;
		color: white;
		display: table;
		height: 48 px;
		opacity: 1;
		padding: 10px 0px 16px;
		table-layout: fixed;
		text-decoration: none;
		width: 59px;
		-webkit-transiton: opacity 0.2s ease;
		transition: opacity 0.2s ease;
		background-color: rgb(255, 83, 26);">

			<i style ="
				display: table-cell;
				height: 21px;
				padding-left: 13px;
				background-image: url(https://cdn.sq-api.com/market/images/basket_icon.png);
				background-size: 23px;
				background-position: 50% 50%;
				background-repeat: no-repeat;"></i>
			<span style ="
				display: none;
				font-family: SQMarket-light, 'Helvetica Neue', sans-serif;
				font-size: 12px;
				font-style: italic;
				font-weight: 300;
				letter-spacing: 2px;
				line-height: 14px;
				text-indent: -9px;
				margin: 0px;
				vertical-align: bottom;
				width: 10px;
				-webkit-font-smoothing: auto;">0</span>
	</a>
</div>



   
    </div>
    

  </body>
</html>