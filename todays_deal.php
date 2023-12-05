 <html>
 <head>
 <title>todays deal</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"> 
 </head>
 <body>
 <?php include('view/template/header.php');?>
 <div class="container text-center" >
  <div class="row align-items-start">
  
   
	  <div id="products">
	  
	  </div>	
	  <div class="col-3">
	  <div class="card" >
  <img src="KISSAN.jpg" class="card-img-top" alt="...">
  <div class="cardbody">
    <h5 class="pro_name"><b>KISSAN JAM</b></h5>
    <p class="pro_price"><b> &#8377 45</b></p>
     <button type="button" class="btn btn-outline-danger position-relative">
  ADD TO CART
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    25/-
    <span class="visually-hidden">BUY PRODUCT</span>
  </span>
</button>
  </div>
</div>
	  </div>
	  
	  <div class="col-3">
	  <div class="card" >
  <img src="darkchoco.png" class="card-img-top" alt="...">
  <div class="cardbody">
    <h5 class="pro_name">DARK CHOCO</h5>
    <p class="pro_price">100 </p>
<button type="button" class="btn btn-outline-danger position-relative">
  ADD TO CART
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
   20/-
    <span class="visually-hidden">BUY PRODUCT</span>
  </span>
</button>
  </div>
</div>
	  </div>
	   <div class="col-3">
	  <div class="card" >
  <img src="icecream.jpeg" class="card-img-top" alt="ice cream">
  <div class="cardbody">
    <h5 class="pro_name">Ice cream</h5>
    <p class="pro_price">150</p>
    <a href="addtocart" class="btn btn-outline-danger">ADD TO CART</a>
  </div>
</div>
	  </div> 
</div>
</div>
<?php include('view/template/footer.php');?>
</body>
</html>
