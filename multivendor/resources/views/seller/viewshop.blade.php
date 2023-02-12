<x-dashboard>

    <style>
        .line {
            height: 1px;
            background-color: #EEEEEE;
            width: 100%;
            margin: 35px 0px;
        }


        .user-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            cursor: pointer;
        }

        .fa-star.active {
            color: #E91E63;
        }

        .btn-pink {
            background-color: #E91E63;
            color: #fff;
            height: 70px;
            padding: 20px 30px;
            margin-top: 15px;
        }

        .btn-pink:hover {
            background-color: #D81B60;
        }

        .image-bg {
            width: 100px;
        }

        .fit-image {
            object-fit: cover;
            width: 100%;
        }

        .prod-pic {
            width: 80px;
            height: 100px;
            cursor: pointer;
        }

        .prod-bg {
            width: 19.5%;
            height: 110px;
            background-color: #E0E0E0;
            margin-bottom: 10px;
        }

        .fat-img {
            width: 94px;
            height: 100px;
        }

        .more {
            width: 19.5%;
            height: 110px;
            color: #fff;
            background-color: #000;
            cursor: pointer;
        }


        .shop_details{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        /* .shopjumbo {
            position: absolute;
            top: 30px;
            right: 24px;
        }

        .text-left {
            position: absolute;
            top: 30px;
            left: 24px;
        } */

        /* .megaWrapper{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-content: center;
} */

        .banner_wrapper {
            /* background-color: rgba(0,0,0,0.6); */
            margin: 20px 0;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        .data_wrapper{
            width: 300px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-content: center;
            align-items: center;
        }



        .btn-grad {
            background-image: linear-gradient(to right, #B993D6 0%, #8CA6DB 51%, #B993D6 100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
        }

        .btn-grad:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }






        @media screen and (max-width: 677px) {
            .card {
                width: 100%;
                margin: auto;
            }

            .btn-pink {
                width: 100%;
                height: 40px;
                padding: 6px 30px;
            }

            .prod-bg {
                width: 33%;
                height: 110px;
                background-color: #E0E0E0;
            }

            .more {
                width: 66%;
            }
        }
    </style>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Shop Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">shop Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    @if($pershop == 0)
        <a href="{{route('shop.create')}}" class="btn btn-primary">Create Shop</a>
    @else


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center" >
                                <img class="profile-user-img img-fluid img-circle user-img fit-image"
                                    src="{{ ($shop->shopprofile) ? asset('uploads/' . $shop->shopprofile) : asset('images/default/dp.jpeg') }}" alt="User profile picture" style="width:180px; height:180px;">
                            </div>
                            <h3 class="profile-username text-center mt-3">{{ $shop->title }}</h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Orders</b> <a class="float-right">{{ $allorder }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Pending Orders</b> <a class="float-right">{{ $pending }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>No of Sell Items</b> <a class="float-right">{{ $sell }}</a>
                                </li>
                            </ul>
                            <a href="{{ route('product.index') }}" class="btn btn-primary btn-block"><b>View
                                    Product</b></a>
                        </div>

                    </div>


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Shop Details</h3>
                        </div>

                        <div class="card-body">

                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Category</strong>
                            <p class="text-muted">

                                    <span class="badge badge-info">{{ $shop->catagory }}</span>

                            </p>
                            <hr>

                        </div>

                    </div>

                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Overall</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> --}}
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit
                                        Shop</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">


                                    <div class="container-fluid py-5 mx-auto">
                                        <div class="card py-4 px-4">


                                            <div class="col-md-12 grid-margin stretch-card">
                                                <div class="card tale-bg">
                                                    <div class="" style="position:relative;">
                                                        <div class="bannerwrap" style="background-image: url('{{ $shop->banner ? asset('uploads/' . $shop->banner) : asset('images/default/dp cover.jpeg') }}'); background-position: center center; background-repeat: no-repeat; background-size: cover; width:100%; height:350px;">

                                                        </div>
                                                        {{-- <img src="{{ $shop->banner ? asset('uploads/' . $shop->banner) : asset('images/default/dp cover.jpeg') }}"
                                                            style="width:100%; max-height:350px;" alt="people"> --}}
                                                        <div class="">
                                                            <div class="megaWrapper">
                                                                <div>
                                                                    {{-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>Stats @</h2> --}}
                                                                </div>
                                                                <div class="ml-2">

                                                                    <div class=" px-3 banner_wrapper">
                                                                        <div class="data_wrapper">
                                                                            <div class="text-left">
                                                                                <div class="image-bg mr-3">
                                                                                    <img class="user-img fit-image"
                                                                                        src="{{ $shop->banner ? asset('uploads/' . $shop->shopprofile) : asset('images/default/dp.jpeg') }}">
                                                                                </div>

                                                                            </div>

                                                                            <div class="">
                                                                                <h2>{{ $shop->title }}</h2>
                                                                                <h6>10 ITEMS - 21 SALE</h6>
                                                                                {{-- <span class="fa fa-star active"></span>
                                                                                <span class="fa fa-star active"></span>
                                                                                <span class="fa fa-star active"></span>
                                                                                <span class="fa fa-star active"></span>
                                                                                <span class="fa fa-star"></span> --}}
                                                                            </div>
                                                                        </div>


                                                                        {{-- <div class="btn-grad weather-info"
                                                                            style="margin-left: 50px;">Manage Shop</div> --}}
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="line"></div>

                                            <div class="col-md-12">
                                                <p>@php echo($shop->shopdis) @endphp</p>
                                            </div>

                                            <div class="line"></div>
                                            <h2 class="my-3">Recent Products</h2>
                                            <div class="row d-flex justify-content-start px-3">
                                                @foreach ($products as $p)
                                                    @php
                                                        $rpimg = explode(",",$p->pimg)
                                                    @endphp
                                                    @foreach($rpimg as $r)
                                                        <div class="prod-bg text-center py-1 mr-2"><img class="prod-pic"
                                                            src="{{ asset('uploads/'.$r) }}"></div>
                                                        @php
                                                            break;
                                                        @endphp
                                                    @endforeach
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>





                                </div>

                                <div class="tab-pane" id="timeline">

                                    <div class="timeline timeline-inverse">


                                    </div>
                                </div>

                                <div class="tab-pane" id="settings">


                                    <form class="forms-sample" action="{{ route('shop.update', $shop->id) }}"
                                        enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputName1">Shop Name</label>
                                            <input type="text" class="form-control" name="title"
                                                id="exampleInputName1" value="{{ $shop->title }}"
                                                placeholder="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="shopDescription">Shop Description</label>
                                            <textarea class="form-control" id="myeditorinstance" rows="4" name="shopdis">{{ $shop->shopdis }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Profile Photo</label>
                                            <img src="{{ asset('uploads/' . $shop->shopprofile) }}"
                                                id="preview-selected-image4" alt="" class="img-fluid">
                                            <input type="hidden" name="shopprofile"
                                                value="{{ $shop->shopprofile }}">
                                            <input type="file" name="imgpro" class="file-upload-default"
                                                onchange="previewImage4(event);">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Profile Photo">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        {{--
                  <div class="form-group">
                    <label>Cover Photo</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Banner Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div> --}}
                                        <div class="form-group">
                                            <label>Banner</label>
                                            <img src="{{ asset('uploads/' . $shop->banner) }}"
                                                id="preview-selected-image3" alt="" class="img-fluid">
                                            <input type="hidden" name="banner" value="{{ $shop->banner }}">
                                            <input type="file" name="imgban" class="file-upload-default"
                                                onchange="previewImage3(event);">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>

                                            <div class="form-group mt-3" style="min-width: 100%">
                                                <label>Shop Category (if you change the catagory reselect the
                                                    catagories)</label>
                                                <br>
                                                <input type="hidden" name="catlist" value="{{ $shop->catagory }}">
                                                <select class="form-control" name="catagory">
                                                    <option value="{{$shop->catagory}}">{{$shop->catagory}}</option>
                                                    <option value="">Sectioon Break</option>
                                                    @foreach ($catagories as $c)
                                                        <option value="{{ $c->catname }}">{{ $c->catname }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <input type="hidden" name="sellerid" value="{{ Auth::user()->id }}">





                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>



                                    </form>


                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Shop</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <h2>In this action delete the shop and all you added product also</h2>
          <br>
          <p>Are you sure to delete</p>
          <br>
          <a href="{{route('shop.destroy',$shop->id)}}" class="btn btn-danger" data-dismiss="modal">Delete</a>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

    @endif



    <script>
        const previewImage3 = (event) => {

            const imageFiles = event.target.files;

            const imageFilesLength = imageFiles.length;

            if (imageFilesLength > 0) {

                const imageSrc = URL.createObjectURL(imageFiles[0]);

                const imagePreviewElement = document.querySelector("#preview-selected-image3");

                imagePreviewElement.src = imageSrc;

                imagePreviewElement.style.display = "block";
            }
        };

        const previewImage4 = (event) => {

            const imageFiles = event.target.files;

            const imageFilesLength = imageFiles.length;

            if (imageFilesLength > 0) {

                const imageSrc = URL.createObjectURL(imageFiles[0]);

                const imagePreviewElement = document.querySelector("#preview-selected-image4");

                imagePreviewElement.src = imageSrc;

                imagePreviewElement.style.display = "block";
            }
        };
    </script>


</x-dashboard>
