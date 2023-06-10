

@extends('FrontEnd.User.layout')
@extends('FrontEnd.User.Menu')

@section('src')
    {{ $data->Photo }}
@endsection

@section('url')
    {{ route('Accountset') }}
@endsection
@section('wish')
  {{$WishCount->count()}}
@endsection
@section('cart')
{{$datacart->count()}}
@endsection
@section('usercontent')
@section('alldepartement')
    @foreach ($cat as $item)
        <li><a class="dropdown-item" href="{{ route('CategoryView',$item->idcat) }}">{{ $item->CategoryName }}</a></li>
    @endforeach
@endsection
    @if(Session::has('fail'))
        <div class="alert alert-danger">Failed</div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success">helloo</div>
    @endif
    <main>
      <section class="mt-8">
        <div class="container">
          <div class="hero-slider ">
            <div
              style="background: url(images/slider/slide-1.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
              <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery </h2>
                <p class="lead">Introduced a new model for online grocery shopping
                  and convenient home delivery.</p>
                <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
              </div>

            </div>
            <div class=" "
              style="background: url(images/slider/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
              <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> orders over <span
                    class="text-primary">$100</span></h2>
                <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.
                </p>
                <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
              </div>

            </div>

          </div>
        </div>
      </section>

      <!-- Category Section Start-->
      <section class="mb-lg-10 mt-lg-14 my-8">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-6">

              <h3 class="mb-0">Featured Categories</h3>

            </div>
          </div>
          <div class="category-slider ">

            @foreach ($cat as $categories )
              <div class="item"> <a href="{{ route('CategoryView',$categories->idcat) }}" class="text-decoration-none text-inherit">
                  <div class="card card-product mb-lg-4">
                    <div class="card-body text-center py-8">
                      <img src="{{ asset("$categories->CatPhoto") }}" alt="Grocery Ecommerce Template"
                        class="mb-3 img-fluid">
                      <div class="text-truncate">{{ $categories->CategoryName }}</div>
                    </div>
                  </div>
                </a>
              </div>

            @endforeach





          </div>


        </div>
      </section>
      <!-- Category Section End-->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-lg-0">
              <div>
                <div class="py-10 px-8 rounded"
                  style="background:url(images/banner/grocery-banner.png)no-repeat; background-size: cover; background-position: center;">
                  <div>
                    <h3 class="fw-bold mb-1">Fruits & Vegetables
                    </h3>
                    <p class="mb-4">Get Upto <span class="fw-bold">30%</span> Off</p>
                    <a href="#!" class="btn btn-dark">Shop Now</a>
                  </div>
                </div>

              </div>

            </div>
            <div class="col-12 col-md-6 ">

              <div>
                <div class="py-10 px-8 rounded"
                  style="background:url(images/banner/grocery-banner-2.jpg)no-repeat; background-size: cover; background-position: center;">
                  <div>
                    <h3 class="fw-bold mb-1">Freshly Baked
                      Buns
                    </h3>
                    <p class="mb-4">Get Upto <span class="fw-bold">25%</span> Off</p>
                    <a href="#!" class="btn btn-dark">Shop Now</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular Products Start-->
      <section class="my-lg-14 my-8">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-6">
              <h3 class="mb-0">Popular Products</h3>
            </div>
          </div>

          <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
              @foreach ($prod as $product)
                  <div class="col">
                      <div class="card card-product">
                      <div class="card-body">

                          <div class="text-center position-relative ">
                          <div class=" position-absolute top-0 start-0">
                              @if ($product->status=="Active")
                              <span class="badge bg-success">Active</span>
                              @else
                                  <span class="badge bg-warning">Sale</span>
                              @endif

                          </div>
                          <a href="{{ Route('productview',$product->id) }}"> <img src="{{ $product->proPhoto }}" alt="Grocery Ecommerce Template" height="164px"
                              width="160px"></a>

                          <div class="card-product-action">
                              <a href="#" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $product->id }}"><i
                                  class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                              <a href="{{ url('wishlist/'.$data->id.'/'.$product->id) }}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                  class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                                  class="bi bi-arrow-left-right"></i></a>
                          </div>

                          </div>
                          <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>{{ $product->idc_cat }}</small></a></div>
                          <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">{{$product->Name}}</a></h2>
                          <div>

                          <small class="text-warning"> <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(149)</span>
                          </div>
                          <div class="d-flex justify-content-between align-items-center mt-3">
                          <div><span class="text-dark">{{ $product->Sale_price }}</span> <span
                              class="text-decoration-line-through text-muted">{{ $product->Regular_price }}</span>
                          </div>
                          <div><a href="{{ url('Addtocart/'.$data->id.'/'.$product->id) }}" class="btn btn-primary btn-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  class="feather feather-plus">
                                  <line x1="12" y1="5" x2="12" y2="19"></line>
                                  <line x1="5" y1="12" x2="19" y2="12"></line>
                              </svg> Add</a></div>
                          </div>
                      </div>
                      </div>
                  </div>
              @endforeach


          </div>
        </div>
      </section>
      <!-- Popular Products End-->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-6">
              <h3 class="mb-0">Daily Best Sells</h3>
            </div>
          </div>
          <div class="table-responsive-xl pb-6">
          <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
            <div class="col">
              <div class=" pt-8 px-6 px-xl-8 rounded"
                style="background:url(images/banner/banner-deal.jpg)no-repeat; background-size: cover; height: 470px;">
                <div>
                  <h3 class="fw-bold text-white">100% Organic
                    Coffee Beans.
                  </h3>
                  <p class="text-white">Get the best deal before close.</p>
                  <a href="#!" class="btn btn-primary">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-product">
                <div class="card-body">
                  <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                        src="images/products/product-img-11.jpg" alt="Grocery Ecommerce Template"
                        class="mb-3 img-fluid"></a>

                    <div class="card-product-action">
                      <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                      <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                          class="bi bi-heart"></i></a>
                      <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                          class="bi bi-arrow-left-right"></i></a>
                    </div>
                  </div>
                  <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Tea, Coffee &
                        Drinks</small></a></div>
                  <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Roast
                      Ground Coffee</a></h2>

                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div><span class="text-dark">$13</span> <span
                        class="text-decoration-line-through text-muted">$18</span>
                    </div>
                    <div>
                      <small class="text-warning"> <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </small>
                      <span><small>4.5</small></span>
                    </div>
                  </div>
                  <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add to cart </a></div>
                  <div class="d-flex justify-content-start text-center mt-3">
                    <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-product">
                <div class="card-body">
                  <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                        src="images/products/product-img-12.jpg" alt="Grocery Ecommerce Template"
                        class="mb-3 img-fluid"></a>
                    <div class="card-product-action">
                      <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                          class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                      <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                          class="bi bi-heart"></i></a>
                      <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                          class="bi bi-arrow-left-right"></i></a>
                    </div>
                  </div>
                  <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Fruits &
                        Vegetables</small></a></div>
                  <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Crushed
                      Tomatoes</a></h2>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div><span class="text-dark">$13</span> <span
                        class="text-decoration-line-through text-muted">$18</span>
                    </div>
                    <div>
                      <small class="text-warning"> <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </small>
                      <span><small>4.5</small></span>
                    </div>
                  </div>
                  <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add to cart </a></div>
                  <div class="d-flex justify-content-start text-center mt-3 w-100">
                    <div class="deals-countdown w-100" data-countdown="2028/12/9 00:00:00"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-product">
                <div class="card-body">
                  <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                        src="images/products/product-img-13.jpg" alt="Grocery Ecommerce Template"
                        class="mb-3 img-fluid"></a>
                    <div class="card-product-action">
                      <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                          class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                      <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                          class="bi bi-heart"></i></a>
                      <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                          class="bi bi-arrow-left-right"></i></a>
                    </div>
                  </div>
                  <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Fruits &
                        Vegetables</small></a></div>
                  <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Golden
                      Pineapple</a></h2>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div><span class="text-dark">$13</span> <span
                        class="text-decoration-line-through text-muted">$18</span>
                    </div>
                    <div>
                      <small class="text-warning"> <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i></small>
                      <span><small>4.5</small></span>
                    </div>
                  </div>
                  <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add to cart </a></div>
                  <div class="d-flex justify-content-start text-center mt-3">
                    <div class="deals-countdown w-100" data-countdown="2028/11/11 00:00:00"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      <section class="my-lg-14 my-8">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="mb-8 mb-xl-0">
                <div class="mb-6"><img src="images/icons/clock.svg" alt=""></div>
                <h3 class="h5 mb-3">
                  10 minute grocery now
                </h3>
                <p>Get your order delivered to your doorstep at the earliest from Hanooty pickup stores near you.</p>
              </div>
            </div>
            <div class="col-md-6  col-lg-3">
              <div class="mb-8 mb-xl-0">
                <div class="mb-6"><img src="images/icons/gift.svg" alt=""></div>
                <h3 class="h5 mb-3">Best Prices & Offers</h3>
                <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess &
                  offers.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="mb-8 mb-xl-0">
                <div class="mb-6"><img src="images/icons/package.svg" alt=""></div>
                <h3 class="h5 mb-3">Wide Assortment</h3>
                <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other
                  categories.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="mb-8 mb-xl-0">
                <div class="mb-6"><img src="images/icons/refresh-cw.svg" alt=""></div>
                <h3 class="h5 mb-3">Easy Returns</h3>
                <p>Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked
                  <a href="#!">policy</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    <!-- Modal -->
    @foreach ($prod as $product)
      <div class="modal fade" id="quickViewModal{{ $product->id }}" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-body p-8">
                              <div class="position-absolute top-0 end-0 me-3 mt-3">
                                  <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                  ></button>
                              </div>
                              <div class="row">
                                  <div class="col-lg-6">
                                  <!-- img slide -->
                                      <div class="product productModal" id="productModal">
                                          <div>
                                          <!-- img -->
                                              <img
                                                  src="{{ $product->proPhoto }}" alt="">
                                          </div>
                                      <div>

                                  </div>
                              </div>
                          <!-- product tools -->
                              <div class="product-tools">
                                  {{-- <div class="thumbnails row g-3" id="productModalThumbnails">
                                  <div class="col-3" class="tns-nav-active">
                                      <div class="thumbnails-img">
                                      <!-- img -->
                                      <img
                                      class="zoom"
                                      onmousemove="zoom(event)"
                                          src="{{ $product->proPhoto }}"
                                          alt=""
                                  >
                                      </div>
                                  </div>
                                  <div class="col-3">
                                      <div class="thumbnails-img" >
                                      <!-- img -->
                                      <img
                                      class="zoom"
                                      onmousemove="zoom(event)"
                                          src="{{ $product->proPhoto }}"
                                          alt=""
                                  >
                                      </div>
                                  </div>

                                  </div> --}}
                              </div>
                          </div>
                          <div class="col-lg-6">
                          <div class="ps-lg-8 mt-6 mt-lg-0">
                              <a href="#!" class="mb-4 d-block">{{ $product->idc_cat }}</a>
                              <h2 class="mb-1 h1">{{ $product->Name }}</h2>
                              <div class="mb-4">
                              <small class="text-warning">
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-half"></i></small
                              ><a href="#" class="ms-2">(30 reviews)</a>
                              </div>
                              <div class="fs-4">
                              <span class="fw-bold text-dark">{{ $product->Sale_price }}</span>
                              <span class="text-decoration-line-through text-muted">{{ $product->Regular_price }}</span
                              ><span
                                  ><small class="fs-6 ms-2 text-danger">26% Off</small></span
                              >
                              </div>
                              <hr class="my-6">
                              <div class="mb-4">
                              <button type="button" class="btn btn-outline-secondary">
                                  250g
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                  500g
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                  1kg
                              </button>
                              </div>
                              <div>
                              <!-- input -->
                              <!-- input -->
                              <div class="input-group input-spinner  ">
                                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                  <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                              </div>
                              </div>
                              <div
                              class="mt-3 row justify-content-start g-2 align-items-center"
                              >

                              <div class="col-lg-4 col-md-5 col-6 d-grid">
                                  <!-- button -->
                                  <!-- btn -->
                                  <button type="button" class="btn btn-primary">
                                  <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                                  cart
                                  </button>
                              </div>
                              <div class="col-md-4 col-5">
                                  <!-- btn -->
                                  <a
                                  class="btn btn-light"
                                  href="#"
                                  data-bs-toggle="tooltip"
                                  data-bs-html="true"
                                  aria-label="Compare"
                                  ><i class="bi bi-arrow-left-right"></i
                                  ></a>
                                  <a
                                  class="btn btn-light"
                                  href="#!"
                                  data-bs-toggle="tooltip"
                                  data-bs-html="true"
                                  aria-label="Wishlist"
                                  ><i class="feather-icon icon-heart"></i
                                  ></a>
                              </div>
                              </div>
                              <hr class="my-6">
                              <div>
                              <table class="table table-borderless">
                                  <tbody>
                                  <tr>
                                      <td>Product Code:</td>
                                      <td>FBB00255</td>
                                  </tr>
                                  <tr>
                                      <td>Availability:</td>
                                      <td>In Stock</td>
                                  </tr>
                                  <tr>
                                      <td>Type:</td>
                                      <td>Fruits</td>
                                  </tr>
                                  <tr>
                                      <td>Shipping:</td>
                                      <td>
                                      <small
                                          >01 day shipping.<span class="text-muted"
                                          >( Free pickup today)</span
                                          ></small
                                      >
                                      </td>
                                  </tr>
                                  </tbody>
                              </table>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    @endforeach

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header border-bottom">
        <div class="text-start">
          <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
          <small>Location in 382480</small>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">

        <div class="">
          <!-- alert -->
          <div class="alert alert-danger p-2" role="alert">
            You’ve got FREE delivery. Start <a href="#!" class="alert-link">checkout now!</a>
          </div>
            <ul class="list-group list-group-flush">
            <!-- list group -->
            @foreach ($datacart as $car)
              <li class="list-group-item py-3 ps-0">
                <!-- row -->
                <div class="row align-items-center">
                  <div class="col-3 col-md-2">
                    <!-- img --> <img src="{{ asset("$car->proPhoto")}}" alt="Ecommerce"
                      class="img-fluid"></div>
                  <div class="col-4 col-md-6 col-lg-5">
                    <!-- title -->
                    <a href="shop-single.html" class="text-inherit">
                      <h6 class="mb-0">{{$car->Name}}</h6>
                    </a>
                    <span><small class="text-muted">{{$car->weight}}</small></span>
                    <!-- text -->
                    <div class="mt-2 small lh-1"> <a href="{{ url('DeleteFromCart/'.$car->id) }}" class="text-decoration-none text-inherit"> <span
                          class="me-1 align-text-bottom">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash-2 text-success">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                          </svg></span><span class="text-muted">Remove</span></a></div>
                  </div>
                  <!-- input group -->
                  <div class="col-3 col-md-3 col-lg-3">
                    <!-- input -->
                    <!-- input -->
                    <div class="input-group input-spinner  ">
                      <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                      <input type="number" step="1" max="10" value="1" name="quantity"
                        class="quantity-field form-control-sm form-input   ">
                      <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                    </div>
                  </div>
                  <!-- price -->
                  <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                    <span class="fw-bold text-danger">{{$car->Sale_price}}</span>
                    <div class="text-decoration-line-through text-muted small">{{$car->Regular_price}}</div>
                  </div>
                </div>

              </li>
            @endforeach
           </ul>

          <!-- btn -->
          <div class="d-flex justify-content-between mt-4">
            <a href="#!" class="btn btn-primary">Continue Shopping</a>
            <a href="{{url('shopcart/'.$data->id)}}" class="btn btn-dark">Update Cart</a>
            <!--  -->
          </div>

        </div>
      </div>
    </div>
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
                <li class="nav-item mb-2"><a href="pages/shop-checkout.html" class="nav-link">Shop Checkout</a></li>
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
              <h6 class="mb-4">Hanooty programs</h6>
              <ul class="nav flex-column">
                  <!-- list -->
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Hanooty programs</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos & Coupons</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Hanooty Ads</a></li>
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
              <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with Hanooty</li>
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








