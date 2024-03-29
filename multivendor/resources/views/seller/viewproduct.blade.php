<x-dashboard>


            {{-- content start --}}


            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ $message }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
            <h1>All Products</h1>
            </div>
            <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All Products</li>
            </ol>

            <ol class="breadcrumb float-sm-right mr-3">
                <li class="breadcrumb-item"><a href="{{route('product.create')}}" style="text-decoration:none;">Add Products</a></li>
            </ol>
            </div>
            </div>
            </div>
            </section>



            <section style="background-color: #eee;">
                <div class="container py-5">





                  <div class="row justify-content-center mb-3">

                    @foreach ($products as $p)

                        <div class="col-md-12 col-xl-10 mb-2">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                            <div class="row pl-2">
                                @php
                                $images = explode(",", $p->pimg)
                                @endphp

                                @if($p->dop == 'digital')
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 ">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                <video controls autoplay muted width="100%" height="100%">
                                    <source src="{{ asset('uploads/'.$p->pvideo) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                                </div>
                                @else
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 " style="background-image: url('{{ asset('uploads/'.$images[0]) }}'); background-position: center; background-repeat: no-repeat; background-size: cover; width = 100%;">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface w-100">
                                    {{-- <img src="{{ asset('uploads/'.$images[0]) }}" class="w-100" /> --}}
                                    </div>

                                    @endif
                                    <a href="#!">
                                    </a>

                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                <h4>{{$p->pname}}</h4>
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
                                        <span>{{$p->pcatid}}</span>

                                </div>

                                <p class="text-truncate mb-4 mb-md-0">
                                    @php
                                        echo $p->pshort
                                    @endphp
                                </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                {{-- <div class="d-flex flex-row align-items-center mb-1">
                                    <h4 class="mb-1 me-1">26</h4>
                                </div>
                                <h6 class="text-success">Pending Orders</h6> --}}
                                <div class="d-flex flex-column mt-4">
                                    <a class="btn btn-primary btn-sm" href="{{route('product.show', $p->id )}}" style="width: 180px">Details</a>
                                    <a class="btn btn-outline-primary btn-sm mt-2" href="{{route('product.edit', $p->id)}}" style="width: 180px">
                                    Update Item
                                    </a>

                                    <form action="{{route('product.destroy',$p->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mt-2" style="width: 180px">Delete</button>
                                    </form>
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



            {{-- content end --}}
          </x-dashboard>
