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




            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/3.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/4.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/5.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/6.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/7.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/3.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/4.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/5.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/6.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/7.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('images/products/2.jpg') }}" />
                  </div>
                </div>
              </div>














            {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{ asset('images/products/2.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('images/products/3.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('images/products/7.jpg') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/products/6.jpg') }}" alt="Third slide">
                      </div>
                  </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="thumbwrapper">
                    <ol class="carousel-indicators thumbspic">
                        <img src="{{ asset('images/products/2.jpg') }}" alt="" srcset="" style="max-width:80px;" data-target="#carouselExampleIndicators" data-slide-to="0" class="active mr-2">
                        <img src="{{ asset('images/products/3.jpg') }}" alt="" srcset="" style="max-width:80px;" data-target="#carouselExampleIndicators" data-slide-to="1" class="mr-2">
                        <img src="{{ asset('images/products/7.jpg') }}" alt="" srcset="" style="max-width:80px;" data-target="#carouselExampleIndicators" data-slide-to="2" class="mr-2">
                        <img src="{{ asset('images/products/6.jpg') }}" alt="" srcset="" style="max-width:80px;" data-target="#carouselExampleIndicators" data-slide-to="3" class="mr-2">
                    </ol>
                </div> --}}

        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">Colorful Stylish Shirt</h3>
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
            <h3 class="font-weight-semi-bold mb-4">$150.00</h3>
            <p class="mb-4">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy. Accus labore stet, est lorem sit diam sea et justo, amet at lorem et eirmod ipsum diam et rebum kasd rebum.</p>
            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                <form>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-1" name="size">
                        <label class="custom-control-label" for="size-1">XS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-2" name="size">
                        <label class="custom-control-label" for="size-2">S</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-3" name="size">
                        <label class="custom-control-label" for="size-3">M</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-4" name="size">
                        <label class="custom-control-label" for="size-4">L</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-5" name="size">
                        <label class="custom-control-label" for="size-5">XL</label>
                    </div>
                </form>
            </div>
            <div class="d-flex mb-4">
                <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
                <form>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-1" name="color">
                        <label class="custom-control-label" for="color-1">Black</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-2" name="color">
                        <label class="custom-control-label" for="color-2">White</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-3" name="color">
                        <label class="custom-control-label" for="color-3">Red</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-4" name="color">
                        <label class="custom-control-label" for="color-4">Blue</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-5" name="color">
                        <label class="custom-control-label" for="color-5">Green</label>
                    </div>
                </form>
            </div>




            </div>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
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


</x-dashboard>
