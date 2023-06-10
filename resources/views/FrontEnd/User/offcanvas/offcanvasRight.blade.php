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
      @foreach (@yield('foreach'))
           
       
          <ul class="list-group list-group-flush">
          <!-- list group -->

          <li class="list-group-item py-3 ps-0">
            <!-- row -->
            <div class="row align-items-center">
              <div class="col-3 col-md-2">
                <!-- img --> <img src="{{ asset("@yield('image')")}}" alt="Ecommerce"
                  class="img-fluid"></div>
              <div class="col-4 col-md-6 col-lg-5">
                <!-- title -->
                <a href="shop-single.html" class="text-inherit">
                  <h6 class="mb-0">@yield('Name') </h6>
                </a>
                <span><small class="text-muted">@yield('Weight')</small></span>
                <!-- text -->
                <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
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
                <span class="fw-bold text-danger">@yield('Sale_price')</span>
                <div class="text-decoration-line-through text-muted small">@yield('Regular_price')</div>
              </div>
            </div>

          </li>

         </ul>
      @endforeach
        <!-- btn -->
        <div class="d-flex justify-content-between mt-4">
          <a href="#!" class="btn btn-primary">Continue Shopping</a>
          <a href="#!" class="btn btn-dark">Update Cart</a>
        </div>

      </div>
    </div>
  </div>
