<x-dashboard>

    <style>
        .thumbwrapper{
            margin-top: 80px;
        }
        .thumbspic{
            margin-top: 70px;
            display: flex;
            justify-content: space-around;
        }



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
    }

    body {
      background: #000;
      color: #000;
    }

    .swiper {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    </style>

<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">

            @php
                $images = explode(",",$product->pimg);
            @endphp


            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video controls width="100%">
                            <source src="{{ asset('uploads/'.$product->pvideo) }}" type="video/mp4">

                            Your browser does not support the video tag.
                          </video>
                    </div>
                    @foreach($images as $i)
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/'.$i) }}" />
                        </div>
                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div thumbsSlider="" class="swiper mySwiper">

                <div class="swiper-wrapper">
                    @foreach($images as $i)
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/'.$i) }}" />
                        </div>
                    @endforeach

                </div>
              </div>

        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">{{$product->pname}}</h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">${{$product->pprice}}</h3>
            <p class="mb-4">@php echo($product->pshort); @endphp</p>
            <hr>
            <p class="mb-4">@php echo($product->pdis); @endphp</p>
            <br><hr>
            <div class="d-flex mb-1">
                <p class="text-dark font-weight-medium mb-0 mr-3">Catagory:</p>
                <p class="mb-4">{{$product->pcatid}}</p>
            </div>
            <div class="d-flex mb-1">
                <p class="text-dark font-weight-medium mb-0 mr-3">The Sub Catagory:</p>
                <p class="mb-4">{{$product->psubcat}}</p>

            </div>
            <div class="d-flex mb-4">
                <p class="text-dark font-weight-medium mb-0 mr-3">Product is a : {{$product->dop}} product</p>

            </div>
            <div class="d-flex mb-4">

                <p class="text-dark font-weight-medium mb-0 mr-3">There are : {{$product->pqun}} products</p>
            </div>

            </div>
            <div class="d-flex pt-2">

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>

<style>
    div#social-links {
        margin: 0 auto;
        max-width: 500px;
    }
    div#social-links ul li {
        display: inline-block;
    }
    div#social-links ul li a {
        padding: 10px;
        border: 1px solid #ccc;
        margin: 1px;
        font-size: 20px;
        color: #222;
        background-color: #ccc;
    }
</style>


</x-dashboard>
