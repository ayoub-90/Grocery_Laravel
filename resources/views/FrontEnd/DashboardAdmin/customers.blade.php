@extends('FrontEnd.User.layout')
@extends('FrontEnd.SellerMenu')
@section('imgurl')
{{ $data->Photo }}
@endsection
@section('usercontent')
    <div class="main-wrapper">
      <!-- navbar vertical -->

            <nav class="navbar-vertical-nav d-none d-xl-block ">
                <div class="navbar-vertical">
                                <div class="px-4 py-5">
                                    <a href="index-2.html" class="navbar-brand">
                                        <img src="images/logo/freshcart-logo.svg" alt="">
                                    </a>
                                </div>
                                <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
                                    <ul class="navbar-nav flex-column" id="sideNavbar">

                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('dashadmin') }}" >
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                                                    <span class="nav-link-text">Dashboard</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item mt-6 mb-3">
                                            <span class="nav-label">Store Managements</span></li>
                                        <li class="nav-item ">
                                            <a class="nav-link "  href="{{ route('ProAdmin') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-cart"></i></span>
                                                    <span class="nav-link-text">Products</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('categorieAdmin') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-list-task"></i></span>
                                                    <span class="nav-link-text">Categories</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{ route('ordersAdmin') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-bag"></i></span>
                                                    <span class="nav-link-text">Orders</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('sellersAdmin') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-shop"></i></span>
                                                    <span class="nav-link-text">Sellers / Vendors</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link  active " href="{{ route('customersAdmin') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-people"></i></span>
                                                    <span class="nav-link-text">Customers</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('reviewsAdmin') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-star"></i></span>
                                                    <span class="nav-link-text">Reviews</span>
                                                </div>
                                            </a>
                                        </li>
                                         <!-- Nav item -->



                                        <li class="nav-item ">
                                            <a class="nav-link " href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-gear"></i></span>
                                                    <span class="nav-link-text">Settings</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item mt-6 mb-3">
                                            <span class="nav-label">Support</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span></li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-headphones"></i></span>
                                                    <span class="nav-link-text">Support Ticket</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-question-circle"></i></span>
                                                    <span class="nav-link-text">Help Center</span>
                                                </div>
                                            </a>
                                        </li>


                                        <li class="nav-item mt-6 mb-3">
                                            <span class="nav-label">Our Apps</span></li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-apple"></i></span>
                                                    <span class="nav-link-text">Apple Store</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-google-play"></i></span>
                                                    <span class="nav-link-text">Google Play Store</span>
                                                </div>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            </nav>

                            <nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1" id="offcanvasExample" >
                                <div class="navbar-vertical">
                                                <div class="px-4 py-5 d-flex justify-content-between align-items-center">
                                                    <a href="index-2.html" class="navbar-brand">
                                                        <img src="images/logo/freshcart-logo.svg" alt="">
                                                    </a>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
                                                    <ul class="navbar-nav flex-column">
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="{{ route('dashadmin') }}" >
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                                                                    <span>Dashboard</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mt-6 mb-3">
                                                            <span class="nav-label">Store Managements</span></li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link "  href="{{ route('ProAdmin') }}">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-cart"></i></span>
                                                                    <span class="nav-link-text">Products</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="{{ route('categorieAdmin') }}">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-list-task"></i></span>
                                                                    <span class="nav-link-text">Categories</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                          <a class="nav-link active" href="{{ route('ordersAdmin') }}">
                                                              <div class="d-flex align-items-center">
                                                                  <span class="nav-link-icon"> <i class="bi bi-bag"></i></span>
                                                                  <span class="nav-link-text">Orders</span>
                                                              </div>
                                                          </a>
                                                      </li>
                                                      <li class="nav-item ">
                                                        <a class="nav-link " href="{{ route('sellersAdmin') }}">
                                                            <div class="d-flex align-items-center">
                                                                <span class="nav-link-icon"> <i class="bi bi-shop"></i></span>
                                                                <span class="nav-link-text">Sellers / Vendors</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link  active " href="{{ route('customersAdmin') }}">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-people"></i></span>
                                                                    <span class="nav-link-text">Customers</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="{{ route('reviewsAdmin') }}">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-star"></i></span>
                                                                    <span class="nav-link-text">Reviews</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="{{ route('settingsAdmin') }}">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-gear"></i></span>
                                                                    <span class="nav-link-text">Settings</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mt-6 mb-3">
                                                            <span class="nav-label">Support</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span></li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-headphones"></i></span>
                                                                    <span class="nav-link-text">Support Ticket</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-question-circle"></i></span>
                                                                    <span class="nav-link-text">Help Center</span>
                                                                </div>
                                                            </a>
                                                        </li>


                                                        <li class="nav-item mt-6 mb-3">
                                                            <span class="nav-label">Our Apps</span></li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-apple"></i></span>
                                                                    <span class="nav-link-text">Apple Store</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-google-play"></i></span>
                                                                    <span class="nav-link-text">Google Play Store</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="navMenuLevel" class="collapse "
                                                        data-bs-parent="#sideNavbar">

                                                    </li>


                                                    </ul>
                                                </div>
                                            </div>

                                            </nav>


      <main class="main-content-wrapper">
        <div class="container">
          <div class="row mb-8">
            <div class="col-md-12">
              <div class="d-md-flex justify-content-between align-items-center">
                <div>
                  <h2>Customers</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Customers</li>
                    </ol>
                  </nav>
                </div>
                <div>
                  <a href="#!" class="btn btn-primary">Add New Customer</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-xl-12 col-12 mb-5">
              <div class="card h-100 card-lg">

                <div class="p-6">
                  <div class="row justify-content-between">
                    <div class="col-md-4 col-12">
                      <form class="d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Search Customers" aria-label="Search">

                      </form>
                    </div>

                  </div>
                </div>
                <div class="card-body p-0 ">

                  <div class="table-responsive">
                    <table
                      class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                      <thead class="bg-light">
                        <tr>
                          <th>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkAll">
                              <label class="form-check-label" for="checkAll">

                              </label>
                            </div>
                          </th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Purchase Date</th>
                          <th>Phone</th>
                          <th>Spent</th>

                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($comptes as $items)
                            <tr>

                                <td class="pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="customerEleven">
                                    <label class="form-check-label" for="customerEleven">

                                    </label>
                                </div>
                                </td>

                                <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $items->Photo }}" alt=""
                                    class="avatar avatar-xs rounded-circle">
                                    <div class="ms-2">
                                    <a href="#" class="text-inherit">{{ $items->Nom }}</a>
                                    </div>
                                </div>
                                </td>
                                <td>{{ $items->Email }}</td>

                                <td>
                                {{ $items->created_at }}
                                </td>
                                <td>{{ $items->Telephone }}</td>
                                <td>
                                ${{ $items->total_price }}
                                </td>

                                <td>
                                <div class="dropdown ">
                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                                    </li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                       @endforeach
                      </tbody>
                    </table>

                  </div>

                  <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                    <span>Showing 1 to 8 of 12 entries</span>
                    <nav class="mt-2 mt-md-0">
                      <ul class="pagination mb-0 ">
                        <li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>
                        <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>

              </div>

            </div>
          </div>
          </div>
      </main>

    </div>

@endsection
