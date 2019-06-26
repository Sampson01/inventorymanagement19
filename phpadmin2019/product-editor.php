<?php
  session_start();
  require './includes/dbh.inc.php';
 ?>


<!DOCTYPE html>
<html>

<head>
<title>Product Editor</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-app.js"></script>


<style>
@import url('https://fonts.googleapis.com/css?family=Bree+Serif|Sedgwick+Ave+Display');

body{
  width:98%;
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

  <div id="head"><span class="glyphicon glyphicon-grain" style="color:green;"></span><span style="color:green;">Q's </span>Inventory<span style="color:green;">Management</span></div>
 <span class="menu"><a id="product-editor" class="btn btn-success" href="product-entry.html">New Product Entry</a><a id="Product Billing" class="btn btn-success" href="billing.html">Product Billing</a></span>

<center>

  <div class="page-header">
    Product Editor Form
  </div>

    <form >
      <div class="form-group">
        <label class="sr-only" for="exampleInputProductName">Product Name</label>
        <div class="input-group">
          <div class="input-group-addon">Product Name</div>
          <input type="text" class="form-control" id="exampleInputAmount" placeholder="Old Product Name">
        </div>
    </div>

    <div class="form-group">
      <label class="sr-only" for="exampleInputProductName">Purchased Price</label>
      <div class="input-group">
        <div class="input-group-addon">Purchased Price</div>
        <input type="text" class="form-control" id="exampleInputAmount" placeholder="New Purchased Price">
        <div class="input-group-addon">.00</div>
      </div>
  </div>

  <div class="form-group">
    <label class="sr-only" for="exampleInputProductName">Selling Price</label>
    <div class="input-group">
      <div class="input-group-addon">Selling Price</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="New Selling Price">
      <div class="input-group-addon">.00</div>
    </div>
</div>

<div class="form-group">
  <label class="sr-only" for="exampleInputAmount">Quantity</label>
  <div class="input-group">
    <div class="input-group-addon">Quantity</div>
    <input type="number" class="form-control" id="exampleInputAmount" placeholder="New Quantity">
    <!-- <div class="input-group-addon">.00</div> -->
  </div>
</div>


      <!-- <div class="form-group">
        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
        <div class="input-group">
          <div class="input-group-addon">INR</div>
          <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
          <div class="input-group-addon">.00</div>
        </div>
      </div>

        <div class="form-group">
          <label class="sr-only" for="exampleInputGST">GST(in Percentage)</label>
          <div class="input-group">
            <div class="input-group-addon">GST</div>
            <input type="text" class="form-control" id="exampleInputGST" placeholder="GST">
            <div class="input-group-addon">%</div>
          </div>
      </div> -->

      <button type="submit" class="btn btn-primary">Update</button>
    </form>
      </center>
  </div>
</div>
</div>
</body>
</html>



<?php
  require "footer.php"
?>
