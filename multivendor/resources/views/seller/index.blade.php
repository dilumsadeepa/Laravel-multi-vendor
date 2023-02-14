<?php
   use Carbon\Carbon;
   $date = Carbon::now()->format('Y-m-d');
   $time = Carbon::now()->format('H:i:s');
   ?>
<x-dashboard>
    <style>
.swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 0px !important;
    }

    </style>


   <div class="row">
      <div class="col-md-12 grid-margin">
         <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
               @auth
               <h3 class="font-weight-bold">Welcome {{auth()->user()->name}}</h3>
               @endauth
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
         <div class="card tale-bg">
            <div class="card-people" style="padding-top: 0; border-radius: 30px;">

                {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="images/dashboard/online-shopping-concept.svg" alt="First slide" style="max-height: 310px">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/dashboard/online-shopping-concept.svg" alt="Second slide" style="max-height: 310px">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/dashboard/online-shopping-concept.svg" alt="Third slide" style="max-height: 310px">
                      </div>
                    </div>
                  </div> --}}


                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/carousel/banner_1.jpg" alt="people" style="max-height: 310px"></div>
                    <div class="swiper-slide"><img src="images/carousel/banner_2.jpg" alt="people" style="max-height: 310px"></div>
                    <div class="swiper-slide"><img src="images/carousel/banner_3.jpg" alt="people" style="max-height: 310px"></div>
                    <div class="swiper-slide"><img src="images/carousel/banner_4.jpg" alt="people" style="max-height: 310px"></div>
                    <div class="swiper-slide"><img src="images/carousel/banner_5.jpg" alt="people" style="max-height: 310px"></div>
                    <div class="swiper-slide"><img src="images/carousel/banner_6.jpg" alt="people" style="max-height: 310px"></div>
                    <div class="swiper-slide"><img src="images/carousel/banner_7.jpg" alt="people" style="max-height: 310px"></div>
                    <div class="swiper-slide"><img src="images/carousel/banner_8.jpg" alt="people" style="max-height: 310px"></div>
                    </div>

                    <div class="swiper-pagination"></div>
                    </div>



               {{-- <img src="images/dashboard/online-shopping-concept.svg" alt="people" style="max-height: 310px"> --}}
               <div class="weather-info">
                  <div class="d-flex">
                     <div>
                        {{--
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>Stats @</h2>
                        --}}
                     </div>
                     <div class="ml-2">
                        <h4 class="location font-weight-normal">{{ $date }}</h4>
                        <h6 class="font-weight-normal">{{ $time }}</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
         <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
               <div class="card card-tale">
                  <div class="card-body">
                     <p class="mb-4">Today’s Orders</p>
                     <p class="fs-30 mb-2">{{$TodayOrderCount}}</p>
                     <p>10.00% (30 days)</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
               <div class="card card-dark-blue">
                  <div class="card-body">
                     <p class="mb-4">This month Orders</p>
                     <p class="fs-30 mb-2">{{$MonthOrderCount}}</p>
                     <p>22.00% (30 days)</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
               <div class="card card-light-blue">
                  <div class="card-body">
                     <p class="mb-4">All Orders</p>
                     <p class="fs-30 mb-2">{{$AllOrderCount}}</p>
                     <p>2.00% (30 days)</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
               <div class="card card-light-danger">
                  <div class="card-body">
                     <p class="mb-4">Toatl Revenue</p>
                     <p class="fs-30 mb-2">$ {{$revenuetotal}}</p>
                     <p>0.22% (30 days)</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Orders</h4>
            <p class="card-description">
               All <code>.Orders</code>
            </p>
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th>
                           User
                        </th>
                        <th>
                           User name
                        </th>
                        <th>
                           Payment Status
                        </th>
                        <th>
                           Amount
                        </th>
                        <th>
                           Order Date
                        </th>
                        <th>
                           Action
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        @foreach($orders as $order)
                        <td class="py-1">
                           <!-- User image is not set and can't set the image right now -->
                           <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>
                           {{$order->firstname}}
                        </td>
                        <td>
                           {{$order->paymentstatus}}
                        </td>
                        <td>
                           <!-- Currency should be set in here -->
                           ${{number_format($order->oqun*$order->oprice, 2)}}
                        </td>
                        <td>
                           {{$order->created_at}}
                        </td>
                        <td>
                           <button type="button" class="btn btn-success btn-icon-text">

                           <a href="{{route('order.show', $order->id )}}" style="text-decoration: none;">
                            <i class="ti-file btn-icon-append"></i>  View</a>
                           </button>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 60000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>



</x-dashboard>
