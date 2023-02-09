<x-dashboard>

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
        <h1>All Shops</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">All Shops</li>
        </ol>
        </div>
        </div>
        </div>
        </section>



        <div class="container my-5">
            <div class="row p-2 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Seller Name</h1>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequatur doloribus sed perferendis quis illo quam magni repudiandae, laudantium odit amet aperiam minus tempore commodi accusamus molestias libero eveniet assumenda minima blanditiis. Error commodi est quisquam dolores corrupti unde repudiandae.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" data-toggle="modal" data-target="#modalQuickView">Manage Profile</button>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg vendorLogo">
                  <img class="rounded-lg-3" src="{{ asset('images/CWarm_logo.jpg') }}" alt="" style="max-width: 320px">
              </div>
            </div>
          </div>


        <section style="background-color: #eee;">
            <div class="container py-5">
              <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                  <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                          <div class="bg-image hover-zoom ripple rounded ripple-surface">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                              class="w-100" />
                            <a href="#!">
                              <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h4>Shop Name</h4>
                          <div class="d-flex flex-row">
                            <div class="mb-1 me-2" style="color:#FFD700;">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                            </div>
                            <span>(6)</span>
                          </div>
                          <div class="mt-1 mb-0 text-muted small">
                            <span class="text-primary"> • </span>
                            <span>Art</span>
                            <span class="text-primary"> • </span>
                            <span>Technology<br /></span>
                          </div>
                        
                          <p class="text-truncate mb-4 mb-md-0">
                            There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or
                            randomised words which don't look even slightly believable.
                          </p>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                          <div class="d-flex flex-row align-items-center mb-1">
                            <h4 class="mb-1 me-1">26</h4>
                          </div>
                          <h6 class="text-success">Pending Orders</h6>
                          <div class="d-flex flex-column mt-4">
                            <a class="btn btn-primary btn-sm" href="{{route('shop.index')}}">Details</a>
                            <a class="btn btn-outline-primary btn-sm mt-2" href="{{route('shop.index')}}">
                              Update Shop
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </section>

</x-dashboard>