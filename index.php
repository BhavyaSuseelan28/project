<html>
<head>
	 <title>
	 my website
	 </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"> 
   
     
</head>

<body style="background-image: linear-gradient(to right, #2FCAE9,white,#2FCAE9) " >
	<?php include('view/template/header.php');?>
<?php include('view/template/slider.php');?><br>
	<?php include('view/template/pro_cards.php');?>
	
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script>const exampleEl = document.getElementById('example')
const popover = new bootstrap.Popover(exampleEl, options)</script>
	<script>
	$(document).read(function(){
		 $.ajax({
		url: 'controler/products.php',
		method: 'GET',
		dataType: 'html',
		success: function(response) {
		  // Populate the card container with the HTML
		  $('#pro_cards').html(response);
		 
		},
		error: function(xhr, status, error) {
		  console.log('An error occurred: ' + error);
		 
		
	});
	
	</script>
	<div class="container" style="padding: 2px">
	<div class="row align-items-start">
	<div class="col-5" style="padding: 5px; border-style: outset">
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Send us you feedback</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>
<div class="col-1"></div>
<div class="col-5">
<div class="mb-3" style="padding: 5px;">
<h3><em>ABOUT US</em><h3>
<h6><i>Our mission at is to empower businesses, entrepreneurs, and creative minds to showcase and sell their products to a discerning audience. We believe in the diversity and uniqueness of each product, and our platform is designed to celebrate this individuality.</i></h6>
</div>
</div>
</div>
</div>
<?php include('view/template/footer.php');?>
</body>



</html>
