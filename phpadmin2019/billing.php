<?php
  session_start();
  require 'dbh.php';
 ?>




<!DOCTYPE html>
<html>

<head>
<title>Product Billing</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/6.1.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

<style>
@import url('https://fonts.googleapis.com/css?family=Bree+Serif|Sedgwick+Ave+Display');

body{
  width:98%;
  /* background-color: blue; */
}
#head,.page-header{
background-color: f8f8f8;
padding: 20px;
font-size:40px;
font-family: 'Bree Serif', serif;
}
form{

margin-top: 20px;
  width:50%;


}
.form-group{
  margin:10px;
  padding: 10px;
}
#product-editor{
  margin: 20px;

}
.row{
  padding: 20px;
}

</style>
</head>
<body>

    <div id="head"><span class="glyphicon glyphicon-grain" style="color:green;"></span><span style="color:green;">Q's </span>Inventory<span style="color:green;">Management   </span></div>
   <span class="menu"><a id="product-editor" class="btn btn-success" href="product-entry.html">New Product Entry</a><a id="Product Billing" class="btn btn-success" href="billing.html">Product Billing</a></span>

  <center>

    <div class="page-header">
  Billing Form
    </div>
    </center>

    <div class="row">
  <div class="col-xs-6 col-md-4">

        <div class="form-group form-inline">
          <label class="sr-only" for="exampleInputProductName">Product Name</label>
          <div class="input-group">
            <div class="input-group-addon">Product Name</div>
            <input type="text" class="form-control" id="exampleInputAmount"  placeholder="Search By Product Name">


            <!-- <div class="form-group form-inline">
              <label class="sr-only" for="exampleInputAmount">Quantity</label>
              <div class="input-group">
                <div class="input-group-addon">Quantity</div>
                <input type="number" class="form-control" id="exampleInputAmount" placeholder="New Quantity">
                <div class="input-group-addon">.00</div>
              </div>
            </div>
           -->
          </div>
                      <button type="submit" class="btn btn-primary">Search</button>
      </div>


<div id="info">
  <div class="product jumbotron" style="padding:10px;" >

      <span><h3>Product Name:</h3></span><span> <h2 class="product-name">

    </h2></span>
    <span><h3>Purchased Price:</h3></span><span> <h3 class="product-price">

    </h3></span>
    <span><h3>Selling Price:</h3></span><span>  <h3 class="product-gst">

    </h3></span>
    <div class="product-add">
      <button  type="submit" class="btn btn-primary add-product">Add</button>

    </div>
  </div>

</div>
  </div>

  <div class="col-xs-6 col-md-4">
    <div style="font-family: 'Bree Serif', serif;font-size:50px;text-align:right;">Total Price</div>

    <output type="number" class="form-control" id="exampleOutputAmount"  placeholder="">

  <div style="font-family: 'Bree Serif', serif;font-size:40px;text-align:right;">

    <span id="total-price" >
<br>
    <button  type="submit" class="btn btn-primary add-product">Checkout</button>
</div>


</div>
</body>
</html>



<?php
  require "footer.php"
?>
