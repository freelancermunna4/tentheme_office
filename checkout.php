<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container space-y-6 py-24">

      <!-- Item Title -->
      <h3 class="text-4xl font-medium tracking-wide">Checkout</h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>
        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="checkout.php"> checkout
        </a>
      </div>

    </div>
  </header>

  <div class="bg-gray-50 w-full py-12">
    <div class="container flex items-start flex-col lg:flex-row justify-between gap-8">


    <?php
    
    
    
    if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $pmn_method = $_POST['pmn_method'];

    $card_number = $_POST['card_number'];
    $expire_date = $_POST['expire_date'];
    $card_code = $_POST['card_code'];

    $mobile_agent = $_POST['mobile_agent'];
    $pmn_address = $_POST['pmn_address'];
    $trans_id = $_POST['trans_id'];
    $amount = $_POST['amount'];

    $terms = $_POST['terms'];

      if($password == $password){
        $insert = _insert("person","name, phone, address, email, password, terms, time","'$name', '$phone', '$address', '$email', '$password', '$terms', '$time'");
        $check = _fetch("person","email='$email' AND password='$password'");
        $user_id = $check['id'];
        if($check>0){
        $_SESSION['user_id'] = $user_id;
        setcookie('user_id', $user_id , time()+2592000);
        $msg = "Successfully application submitted!";
        header("location:checkout.php?msg=$msg");
        }
        if($pmn_method == 'card_method'){

        }else{
          $deposit_insert = _insert("deposit","pid, method, pmn_address, tr_id, amount, status, time","'$user_id', '$mobile_agent', '$pmn_address', '$trans_id', '$amount', 'new', '$time'");
        }
      }else{
        $err = "Please fill-up carefully";
        header("location:checkout.php?err=$err");
      }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="w-full space-y-6">        
        <div class="p-5 bg-white rounded shadow space-y-6">
          <h2 class="text-2xl font-medium tracking-wide">Billing details</h2>

          <div class="w-full">
            <label for="name" class="pb-1 block">Your name *</label> <input name="name"
              class="w-full rounded bg-white px-4 py-2.5 border" type="text" id="name" placeholder="Your name">
          </div>

          <div class="w-full">
            <label for="phone" class="pb-1 block">Phone  *</label> <input name="phone" 
              class="w-full rounded bg-white px-4 py-2.5 border" type="number" id="phone" placeholder="Phone Number">
          </div>

          <div class="w-full">
            <label for="email" class="pb-1 block">Email  *</label> <input name="email" 
              class="w-full rounded bg-white px-4 py-2.5 border" type="email" id="email" placeholder="Email address">
          </div>

          <div class="w-full">
            <label for="address" class="pb-1 block">Address *</label> <input name="address"
              class="w-full rounded bg-white px-4 py-2.5 border" type="text" id="address" placeholder="Address">
          </div>

          <div class="w-full">
            <label for="Password" class="pb-1 block">Password *</label> <input name="password"
              class="w-full rounded bg-white px-4 py-2.5 border" type="password" id="name" placeholder="Password">
          </div>
          
          <div class="w-full">
            <label for="cPassword" class="pb-1 block">Confirm Password *</label> <input name="cpassword"
              class="w-full rounded bg-white px-4 py-2.5 border" type="password" id="cname" placeholder="Confirm Password">
          </div>

        </div>

        <div>
          <h3 class="text-lg mb-2">Choose Payment Method</h3>
          <div class="grid grid-cols-12 border border-b-transparent">
            <label for="card" class="method_name border-r active" data-method="cart">
              <input type="radio" id="card" name="pmn_method" checked value="card_method">
              <div class="flex items-center gap-x-2">
                <img class="hidden xl:block w-full lg:w-auto lg:h-9" src="assets/images/card.svg" alt="">
                <span>Credit Card</span>
              </div>
              <span></span>
            </label>

            <label for="mobile_banking" class="method_name" data-method="mobile_banking">
              <input type="radio" id="mobile_banking" name="pmn_method" value="mobile_method">
              <div>
                <img class="w-full" src="assets/images/bd-mobile-banking-long.jpg" alt="">
              </div>
            </label>
          </div>

          <!-- payment methods content -->
          <div class="p-5 bg-white border">

            <!-- cart -->
            <div class="method_content" data-method="cart">
              <img src="assets/images/payment-methods-cards.png" alt="">
              <br>
              <br>
              <div>
                <label for="card_number" class="mb-1 block">Card Number *</label>
                <input  type="text" id="card_number" name="card_number"
                  class="w-full h-11 p-3 rounded border focus:ring-1 ring-green-500 outline-none"
                  placeholder="xxxx-xxxx-xxxx-xxxx">
              </div>
              <div class="flex justify-between gap-6 pt-6">
                <div class="w-full">
                  <label for="card_expire" class="mb-1 block">Expiry Date *</label>
                  <input name="expire_date"  type="text" id="card_expire"
                    class="w-full h-11 p-3 rounded border focus:ring-1 ring-green-500 outline-none"
                    placeholder="MM / YY">
                </div>
                <div class="w-full">
                  <label for="card_code" class="mb-1 block">Card Code <span class="hidden sm:inline-block">(CVC)</span>
                    *</label>
                  <input name="card_code"  type="text" id="card_code"
                    class="w-full h-11 p-3 rounded border focus:ring-1 ring-green-500 outline-none" placeholder="xxxx">
                </div>
              </div>
            </div>

            <!-- mobile banking -->
            <div class="method_content hidden" data-method="mobile_banking">
              <div>
                <label class="mb-3 text-base tracking-wide font-medium">Method</label>
                <select name="mobile_agent"
                  class="w-full border-8 py-1 ring-gray-200 outline-none focus:ring-blue-500 rounded bg-white border-white ring-1 focus:ring-2">
                  <option value="01701701701">Bkash</option>
                  <option value="01701701701">Nagat</option>
                  <option value="01701701701">Rocket</option>
                  <option value="shamimlem@yahoo.com">Payoneer</option>
                </select>
              </div>

              <div class="block w-full bg-[#86efac] p-5" id="wallet_details">
                <p id="wallet_details_text">Bkash Personal Minimum (100Taka)</p>
                <div class="copy_input">
                  <input id="wallet_value" disabled="" type="text" value="">
                  <div class="copy_wrapper">
                    <button id="copy_wallet" class="copy_icon" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                        width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                        <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                      </svg></button>
                  </div>
                </div>
              </div>

              <br>
              <label class="mb-3 text-base tracking-wide font-medium">Payment Address</label>
              <input  type="text" id="card_number" name="pmn_address"
                  class="w-full h-11 p-3 rounded border focus:ring-1 ring-green-500 outline-none"
                  placeholder="Payment Address">
              <br>
              <br>
              <label class="mb-3 text-base tracking-wide font-medium">Transaction ID</label>
              <input  type="text" id="trans_id" name="trans_id"
                  class="w-full h-11 p-3 rounded border focus:ring-1 ring-green-500 outline-none"
                  placeholder="Transaction Id">
              <br>
              <br>
              <label class="mb-3 text-base tracking-wide font-medium">Amount</label>
              <input  type="text" id="amount" name="amount"
                  class="w-full h-11 p-3 rounded border focus:ring-1 ring-green-500 outline-none"
                  placeholder="100">

            </div>

          </div>
        </div>

        <p class="text-base font-medium tracking-wider">Your personal data will be used to process your order, support
          your experience throughout this website, and
          for other purposes described in our <a class="text-blue-600" href="#">privacy policy</a>.</p>

        <div class="flex">
          <label for="tos" class="flex items-center gap-x-3">

            <input name="terms" type="checkbox" id="tos" value="Accepted">
            <span> I have read and agree to the website <a class="text-blue-600" href="#">terms and conditions</a>
              *</span>

          </label>
        </div>

        <button type="submit" name="submit"
          class="w-full py-3 shadow-lg rounded bg-blue-600 text-white focus:ring-2 ring-blue-600 ring-offset-1">Sign Up
          Now</button>
      </div>
      </form>

      <div class="w-full lg:min-w-[450px] lg:w-[450px]">
        <div class="border p-5">
          <h2 class="text-2xl font-semibold text-gray-700 pb-4 border-b">Order Summary</h2>

          <div class="py-5 space-y-4">

            <?php
            $cart = _get("cart","pid=$id AND type='product' AND status=0");
            $total_price = 0;
            while($data = mysqli_fetch_assoc($cart)){
              $cart_id = $data['cart_id'];
              $product = _fetch("products","id=$cart_id");
              $total_price += $product['sell_price'];
            ?>
            <div class="text-lg font-medium tracking-wide text-gray-500 justify-between flex items-center">
              <span class="w-8/12 truncate overflow-hidden"><?php echo $product['title'];?></span>
              <span class="w-fit">৳<?php echo $product['sell_price'];?></span>
            </div>
            <?php }?>

          </div>

          <div class="text-2xl font-semibold text-gray-700 items-center justify-between flex pt-5 border-t">
            <span>Total:</span>
            <span>BDT <?php echo $total_price;?></span>
          </div>

        </div>

        <?php 
        if(isset($_POST['submit'])){
          $total_amount = $_POST['total_amount'];
          $balance = _update("person","balance=balance-$total_amount","id=$id");
          $update = _update("cart","status=1","pid=$id");
          if($update && $balance){
            $msg = "Congratulations for Purchase.";
            header("location:dashboard.php?msg=$msg");
          }
        }
        ?>
        <form action="" method="POST">
          <input type="hidden" name="total_amount" value="<?php echo $total_price;?>">
          <button type="submit" name="submit" class="w-full py-3 shadow-lg rounded bg-blue-600 text-white focus:ring-2 ring-blue-600 ring-offset-1">Pay Now</button>
        </form>     
        
        
        <div class="py-5 text-center flex items-center gap-x-2 justify-center text-gray-500">
          <i class="fa-solid fa-lock"></i>
          <p>Secure checkout</p>
        </div>
        <div class="p-5 rounded text-white space-y-4"
          style="background: linear-gradient(144deg,#1C004B 0,#020B2D 100%);">
          <h2 class="text-3xl">Need Help?</h2>

          <p>Any confusion about your order? <br> We are here to help.</p>

          <div class="flex justify-between">
            <div class="flex justify-start text-lg flex-col gap-y-0.5 font-medium text-gray-300 cursor-pointer">
              <span class="text-2xl"><i class="fa-solid fa-comments"></i>
              </span>
              <span class="text-white font-bold">Start A Chat</span>
            </div>

            <a href="mailto:support@bs.com"
              class="flex justify-start text-lg flex-col gap-y-0.5 font-medium text-gray-300 cursor-pointer">
              <span class="text-2xl">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <i>support@bs.com</i>
            </a>
          </div>

          <div class="flex gap-2">
            <span>See our</span>
            <a class="underline italic" href="#">Refund Policy</a>
            <span>or</span>
            <a class="underline italic" href="#">FAQs</a>
          </div>

        </div>
      </div>
    </div>
  </div>


<!-- Header area -->
<?php include("common/footer.php");?>
<!-- Header area -->