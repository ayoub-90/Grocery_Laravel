@extends('FrontEnd.User.layout')
@extends('FrontEnd.User.Menu')

@section('src')
    {{ $data->Photo }}
@endsection

@section('url')
    {{ route('Accountset') }}
@endsection
@section('usercontent')
<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="fullName" class="form-label">Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="">
          </div>

          <div class="mb-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" required="">
            <small class="form-text">By Signup, you agree to our <a href="#!">Terms of Service</a> & <a
                href="#!">Privacy Policy</a></small>
          </div>

          <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
      </div>
      <div class="modal-footer border-0 justify-content-center">

        Already have an account? <a href="#">Sign in</a>
      </div>
    </div>
  </div>
</div>
<!--change pic-->
<div class="modal fade" id="picmodel" tabindex="-1" aria-labelledby="picModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
          <div class="modal-header border-0">
          <h5 class="modal-title fs-3 fw-bold" id="picModalLabel">Sign Up</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form>
              <div class="mb-3">
              <label for="fullName" class="form-label">Name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="">
              </div>
              <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="">
              </div>

              <div class="mb-5">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter Password" required="">
              <small class="form-text">By Signup, you agree to our <a href="#!">Terms of Service</a> & <a
                  href="#!">Privacy Policy</a></small>
              </div>

              <button type="submit" class="btn btn-primary">Sign Up</button>
          </form>
          </div>
          <div class="modal-footer border-0 justify-content-center">

          Already have an account? <a href="#">Sign in</a>
          </div>
      </div>
  </div>
</div>

<!-- Shop Cart -->

<!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-body p-6">
        <div class="d-flex justify-content-between align-items-start ">
          <div>
            <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
            <p class="mb-0 small">Enter your address and we will specify the offer you area. </p>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="my-5">
          <input type="search" class="form-control" placeholder="Search your area">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h6 class="mb-0">Select Location</h6>
          <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>


        </div>
        <div>
          <div data-simplebar style="height:300px;">
            <div class="list-group list-group-flush">

              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                <span>Alabama</span><span>Min:$20</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Alaska</span><span>Min:$30</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Arizona</span><span>Min:$50</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>California</span><span>Min:$29</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Colorado</span><span>Min:$80</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Florida</span><span>Min:$90</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Arizona</span><span>Min:$50</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>California</span><span>Min:$29</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Colorado</span><span>Min:$80</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Florida</span><span>Min:$90</span></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<main>
  <!-- section -->
  <section>
     <!-- container -->
    <div class="container">
       <!-- row -->
      <div class="row">
         <!-- col -->
         <div class="col-12">
          <div class="d-flex justify-content-between align-items-center d-md-none py-4">
            <!-- heading -->
            <h3 class="fs-5 mb-0">Account Setting</h3>
            <!-- button -->
            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 " type="button"
              data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
              <i class="bi bi-text-indent-left fs-3"></i>
            </button>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
          <div class="pt-10 pe-lg-10">
              <!--pic-->

                  <div class="profilepic">
                      <img class="profilepic__image" src="{{ $data->Photo }}" width="150" height="150" alt="Profibild" />
                      <a id="openBtn"><div class="profilepic__content">
                      <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                      <span class="profilepic__text">Edit Profile</span>
                      </div></a>
                  </div>



                  <div id="popup" class="popup">
                      <div class="popup-content">
                        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <h2 class="modal-title fs-3 fw-bold">Modify Picture</h2>
                        <form action="{{ Route('modifyimg',$data->id) }}" method="Post" enctype="multipart/form-data">
                          {!! csrf_field() !!}
                          <span class="modal-title fs-3 fw-bold">Click or drop photo here</span>
                              <input type="file" class="form-control" name="Photo" id="Photo"  placeholder="Photo" aria-label="Photo"
                              required>


                          <button class="btn-primary btn " type="submit">ok</button>
                        </form>
                      </div>
                    </div>



             <!-- nav -->
            <ul class="nav flex-column nav-pills nav-pills-dark">
               <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ Route('userorders') }}"><i
                    class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
              </li>
                <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link " href="{{ Route('Accountset') }}"><i
                    class="feather-icon icon-settings me-2"></i>Settings</a>
              </li>
                <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link " href="{{ Route('userAdress') }}"><i
                    class="feather-icon icon-map-pin me-2"></i>Address</a>
              </li>
                <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link active" href="{{ Route('payementmethod') }}"><i
                    class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
              </li>
                <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link" href="{{ Route('notifications') }}"><i
                    class="feather-icon icon-bell me-2"></i>Notification</a>
              </li>  <!-- nav item -->
              <li class="nav-item">
                <hr>
              </li>
                <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link " href="{{ Route('Logout') }}"><i class="feather-icon icon-log-out me-2"></i>Log out</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
          <div class="py-6 p-md-6 p-lg-10">
              <!-- heading -->
            <div class="d-flex justify-content-between mb-6 align-items-center">
              <h2 class="mb-0">Payment Methods</h2>
              <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Add
                Payment </a>

            </div>

            <ul class="list-group list-group-flush">
              <!-- List group item -->
              @foreach($payement as $card)
                  <li class="list-group-item py-5 px-0">
                      <div class="d-flex justify-content-between">
                          <div class="d-flex">
                              <!-- img -->
                          <img src="{{ $card->Payement }}" alt="">
                              <!-- text -->
                          <div class="ms-4">
                              <h5 class="mb-0 h6 h6">*****{{substr($card->Cardnumber,-5)}}</h5>
                              <p class="mb-0 small">Expires in {{ $card->Month }}/{{ $card->Year }}
                              </p>
                          </div>
                          </div>
                          <div>
                              <!-- button -->
                          <a href="{{ route('deletecard',$card->id) }}" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                          </div>
                      </div>
                  </li>
              @endforeach
          </ul>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>
  <!-- modal -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
      <!-- offcanvas header -->
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
     <!-- offcanvas body -->
    <div class="offcanvas-body">
      <ul class="nav flex-column nav-pills nav-pills-dark">
         <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="account-orders.html"><i
              class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
        </li>
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link " href="account-settings.html"><i class="feather-icon icon-settings me-2"></i>Settings</a>
        </li>
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link" href="account-address.html"><i class="feather-icon icon-map-pin me-2"></i>Address</a>
        </li>
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link active" href="account-payment-method.html"><i
              class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
        </li>
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link" href="account-notification.html"><i
              class="feather-icon icon-bell me-2"></i>Notification</a>
        </li>
      </ul>
      <hr class="my-6">
      <div>
        <!-- navs -->
        <ul class="nav flex-column nav-pills nav-pills-dark">
          <!-- nav item -->
          <li class="nav-item">
            <a class="nav-link " href="../index-2.html"><i class="feather-icon icon-log-out me-2"></i>Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Payment Modal -->
  <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <!-- modal content -->
      <div class="modal-content">
        <!-- modal header -->
        <div class="modal-header align-items-center d-flex">
          <h5 class="modal-title" id="paymentModalLabel">
            Add New Payment Method
          </h5>
          <!-- button -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

          </button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div>
            <!-- Form -->
            <form class="row mb-4" method="POST" action="{{ Route('addcard',$data->id) }}">
              {!! csrf_field() !!}
              <div class="mb-3 col-12 col-md-12 mb-4">
                <h5 class="mb-3">Credit / Debit card</h5>
                <!-- Radio button -->
                <div class="d-inline-flex">
                  <div class="form-check me-2">
                    <input type="radio" id="paymentRadioOne" name="Payement" value="images/payment/american-express.svg" class="form-check-input" />
                    <label class="form-check-label" for="paymentRadioOne"><img
                        src="images/payment/american-express.svg" alt=""></label>
                  </div>
                  <!-- Radio button -->
                  <div class="form-check me-2">
                    <input type="radio" id="paymentRadioTwo" name="Payement" value="images/payment/mastercard.svg" class="form-check-input" />
                    <label class="form-check-label" for="paymentRadioTwo"><img
                        src="images/payment/mastercard.svg" alt=""></label>
                  </div>

                  <!-- Radio button -->
                  <div class="form-check">
                    <input type="radio" id="paymentRadioFour" name="Payement" value="images/payment/visa.svg" class="form-check-input" />
                    <label class="form-check-label" for="paymentRadioFour"><img src="images/payment/visa.svg"
                        alt=""></label>
                  </div>
                </div>
              </div>
              <!-- Name on card -->
              <div class="mb-3 col-12 col-md-4">
                <label for="nameoncard" class="form-label">Name on card</label>
                <input id="nameoncard" type="text" class="form-control" name="Nameoncard" placeholder="Name" required />
              </div>
              <!-- Month -->
              <div class="mb-3 col-12 col-md-4">
                <label class="form-label">Month</label>
                <select name="Month" class="form-select">
                  <option value="">Month</option>
                  <option value="1">Jan</option>
                  <option value="2">Feb</option>
                  <option value="3">Mar</option>
                  <option value="4">Apr</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">Aug</option>
                  <option value="9">Sep</option>
                  <option value="10">Oct</option>
                  <option value="11">Nov</option>
                  <option value="12">Dec</option>
                </select>
              </div>
              <!-- Year -->
              <div class="mb-3 col-12 col-md-4">
                <label class="form-label">Year</label>
                <select name="Year" class="form-select">
                  <option value="">Year</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                </select>
              </div>
              <!-- Card number -->
              <div class="mb-3 col-md-8 col-12">
                <label for="cc-mask" class="form-label">Card Number</label>
                <input type="text" class="form-control" name="Cardnumber" id="cc-mask" data-inputmask="'mask': '9999 9999 9999 9999'" placeholder="xxxx-xxxx-xxxx-xxxx" required />
              </div>
              <!-- CVV -->
              <div class="mb-3 col-md-4 col-12">
                <div class="mb-3">
                  <label for="cvv" class="form-label">CVV Code
                                        <i class="fe fe-help-circle ms-1" data-bs-toggle="tooltip" data-placement="top"
                                            title="A 3 - digit number, typically printed on the back of a card."></i></label>
                                <input type="password" class="form-control" name="Cvv" id="cvv"  data-inputmask="'mask':'999'" placeholder="xxx" maxlength="3" required />
                </div>
              </div>
              <!-- Button -->
              <div class="col-md-6 col-12">
                <button class="btn btn-primary" type="submit">
                  Add New Card
                </button>
                <button class="btn btn-outline-gray-400 text-muted" type="button" data-bs-dismiss="modal">
                  Close
                </button>
              </div>
            </form>
            <span><strong>Note:</strong> that you can later remove your card at
              the account setting page.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Footer -->
  <!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row g-4 py-4">
      <div class="col-12 col-md-12 col-lg-4">
        <h6 class="mb-4">Categories</h6>
        <div class="row">
          <div class="col-6">
            <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables & Fruits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Breakfast & instant food</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Bakery & Biscuits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Atta, rice & dal</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Sauces & spreads</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Organic & gourmet</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Baby care</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Cleaning essentials</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Personal care</a></li>
            </ul>
          </div>
          <div class="col-6">
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread & eggs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Cold drinks & juices</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Tea, coffee & drinks</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Masala, oil & more</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Chicken, meat & fish</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Paan corner</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Pharma & wellness</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Home & office</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Pet care</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-8">
        <div class="row g-4">
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Get to know us</h6>
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
              <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">For Consumers</h6>
            <ul class="nav flex-column">
                  <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
              <li class="nav-item mb-2"><a href="shop-checkout.html" class="nav-link">Shop Checkout</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Become a Shopper</h6>
            <ul class="nav flex-column">
                <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper Opportunities</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas & Guides</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Freshcart programs</h6>
            <ul class="nav flex-column">
                <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart programs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos & Coupons</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
          <ul class="list-inline mb-0">
            <li class="list-inline-item text-dark">Payment Partners</li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/amazonpay.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/american-express.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/mastercard.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/paypal.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/visa.svg" alt=""></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-7 mt-4 mt-md-0">
          <ul class="list-inline mb-0 text-lg-end text-center">
            <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
            <li class="list-inline-item ms-4">
              <a href="#!"> <img src="images/appbutton/appstore-btn.svg" alt=""
                  style="width: 140px;"></a></li>
            <li class="list-inline-item">
              <a href="#!"> <img src="images/appbutton/googleplay-btn.svg" alt=""
                  style="width: 140px;"></a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-md-6"><span class="small text-muted">Copyright 2023 © FreshCart eCommerce HTML Template.  All rights reserved. Powered by <a href="https://codescandy.com/">Codescandy</a>.</span></div>
        <div class="col-md-6">
          <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
            <li class="list-inline-item text-muted">Follow us on</li>
            <li class="list-inline-item me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a></li>
            <li class="list-inline-item me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-twitter" viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a></li>
            <li class="list-inline-item">
              <a href="#!" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>
@endsection
