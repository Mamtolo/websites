<?php 
    $total = 0;
    foreach ($_SESSION as $key=>$val){
    echo("<br>");
    echo("<br>");
    $product_id_number_without_p = substr($key, -6);    // returns "f"
    $name = return_info($conn, 'products', 'name', 'id', $product_id_number_without_p);
    $price = return_info($conn, 'products', 'price', 'id', $product_id_number_without_p);
    echo("
    <form action='load-page.php' method='post'>
    $name $price
        <button class='btn add-to-cart' name='remove_from_cart' type='submit'>
            <i class='material-icons shopping-cart'></i>
            Remove from cart
        </button>
        <input type='hidden' name='id' value='$product_id_number_without_p'>
    </form>
    ");
    $total += $price;
    }

?>
<form action="">
    <div class="row">
    <div class ="col">
    <h3 class = "title"> Billing Address </h3>

    <div class="inputBox">
       <span> Full Name:</span>
       <input type="text"placeholder="Nozuko Mazola">
</div>
    <div class="inputBox">
       <span> Email Address:</span>
       <input type="text"placeholder="connex@gmail.com">
</div>
<br>
<div class="inputBox">
    <span>Address:</span>
    <input type="text" placeholder="street number-street-area">
</div>
<br>
<div class="inputBox">
    <span>City:</span>
    <input type="text" placeholder="MTHATHA">
</div>
<br>
<div class="flex">
<div class="inputBox">
    <span>Province:</span>
    <input type="text"placeholder="EASTERN CAPE">
</div>
<br>
<div class="inputBox">
    <span>Zip Code:</span>
    <input type="text" placeholder="0277-1288">
</div>

</div>
<div class="col">
<h3 class="text">Payment</h3>
<div class="inputBox">
   <span> Name on Card:</span>
   <input type="text"placeholder="Mrs NP MAZOLA">
</div>
<br>
<div class="inputBox">
   <span>Card Accepted:</span>
   <irg src="Connex_Store_img/paymet29.pngg">
</div>
<br>
<div class="inputBox">
    <span>Credit Card Number:</span>
     <input type="text"placeholder="111-2222-3333-4444">
</div>
<br>
<div class="inputBox">
    <span>VALID THRU"</span>
    <input type="text"placeholder="10/27">
</div>
<br>           

</form>

<div class='container'>
    <form class="row g-3">
        <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
</div>
<div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Check me out
        </label>
    </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</form>
</div>