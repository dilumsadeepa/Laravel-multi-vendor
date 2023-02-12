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



        <section style="background-color: #eee;">
            <div class="container py-5">
              <div class="row justify-content-center mb-3">

                @foreach ($shops as $s)

                    <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                <img src="{{ asset('uploads/'.$s->shopprofile) }}"/>
                                <a href="#!">
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                </div>
                                </a>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4>{{$s->title}}</h4>
                            <div class="d-flex flex-row">
                                <div class="mb-1 me-2" style="color:#FFD700;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                </div>
                                <span>(6)</span>
                            </div>

                            @php
                                $cat = explode(",",$s->catagory)
                            @endphp

                            <div class="mt-1 mb-0 text-muted small">
                                @foreach($cat as $c)
                                    <span class="text-primary"> • </span>
                                    <span>{{$c}}</span>
                                @endforeach
                            </div>

                            <p class="text-truncate mb-4 mb-md-0">
                                @php
                                    echo $s->shopdis
                                @endphp
                            </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            {{-- <div class="d-flex flex-row align-items-center mb-1">
                                <h4 class="mb-1 me-1">26</h4>
                            </div>
                            <h6 class="text-success">Pending Orders</h6> --}}
                            <div class="d-flex flex-column mt-4">
                                <a class="btn btn-primary btn-sm" href="{{route('shop.show', $s->id)}}">Details</a>
                                <a class="btn btn-outline-primary btn-sm mt-2" href="{{route('shop.index')}}">
                                Update Shop
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                @endforeach

              </div>

            </div>
          </section>



</x-dashboard>
