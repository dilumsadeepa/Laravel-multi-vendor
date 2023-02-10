
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

.shopjumbo{
      position: absolute;
      top: 30px;
      right: 24px;
}

.text-left{
    position: absolute;
      top: 30px;
      left: 24px;
}

/* .megaWrapper{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-content: center;
} */

.banner_wrapper{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}



.btn-grad {
            background-image: linear-gradient(to right, #B993D6 0%, #8CA6DB  51%, #B993D6  100%);
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
            background-position: right center; /* change the direction of the change here */
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

        <section class="content">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-3">

        <div class="card card-primary card-outline">
        <div class="card-body box-profile">
        <div class="text-center">
        <img class="profile-user-img img-fluid img-circle" src="{{ asset('uploads/'.$shop->shopprofile) }}" alt="User profile picture">
        </div>
        <h3 class="profile-username text-center">{{$shop->title}}</h3>

        <ul class="list-group list-group-unbordered mb-3">
        <li class="list-group-item">
        <b>Orders</b> <a class="float-right">{{$allorder}}</a>
        </li>
        <li class="list-group-item">
        <b>Pending Orders</b> <a class="float-right">{{$pending}}</a>
        </li>
        <li class="list-group-item">
        <b>No of Sell Items</b> <a class="float-right">{{$sell}}</a>
        </li>
        </ul>
        <a href="{{route('product.index')}}" class="btn btn-primary btn-block"><b>View Product</b></a>
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
            @php

                $cat = explode(",", $shop->catagory)

            @endphp

            @foreach($cat as $c)
                <span class="badge badge-info">{{$c}}</span>
            @endforeach
        </p>
        <hr>

        </div>

        </div>

        </div>

        <div class="col-md-9">
        <div class="card">
        <div class="card-header p-2">
        <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Overall</a></li>
        {{-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> --}}
        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Shop</a></li>
        </ul>
        </div>
        <div class="card-body">
        <div class="tab-content">
        <div class="active tab-pane" id="activity">


            <div class="container-fluid py-5 mx-auto">
                <div class="card py-4 px-4">


                    <div class="col-md-12 grid-margin stretch-card" >
                        <div class="card tale-bg">
                          <div class="card-people mt-auto" >
                            <img src="{{asset('uploads/'.$shop->banner)}}" style="max-height: 250px;" alt="people">
                            <div class="">
                              <div class="megaWrapper">
                                <div>
                                  {{-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>Stats @</h2> --}}
                                </div>
                                <div class="ml-2">

                                         <div class=" px-3 banner_wrapper">
                                            <div class="text-left">
                                                <div class="image-bg mr-3">
                                                    <img class="user-img fit-image" src="{{asset('uploads/'.$shop->shopprofile)}}">
                                                </div>
                                                <div class="">
                                                    <h2>{{$shop->title}}</h2>
                                                    <h6>10 ITEMS - 21 SALE - 8 COMMENTS</h6>
                                                    <span class="fa fa-star active"></span>
                                                    <span class="fa fa-star active"></span>
                                                    <span class="fa fa-star active"></span>
                                                    <span class="fa fa-star active"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>

                                            <div class="btn-grad weather-info" style="margin-left: 50px;">Manage Shop</div>
                                        </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="line"></div>

                      <div class="col-md-12">
                        <p>{{$shop->shopdis}}</p>
                      </div>

                    <div class="line"></div>
                    <h2 class="my-3">Recent Products</h2>
                    <div class="row d-flex justify-content-between px-3">
                        <div class="prod-bg text-center py-1"><img class="prod-pic" src="{{ URL::asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSnirWg1_QaKVUwkkeLwSt6gQap7n9Ylxayg&usqp=CAU') }}"></div>
                        <div class="prod-bg text-center py-1"><img class="prod-pic" src="https://cdn.shopify.com/s/files/1/0428/8063/0937/files/awards_b7b68527-48b8-43b2-8a75-945922f8c149.jpg?v=1613778469"></div>
                        <div class="prod-bg text-center py-1"><img class="prod-pic fat-img" src="https://cdn.shopify.com/s/files/1/0428/8063/0937/files/awards_b7b68527-48b8-43b2-8a75-945922f8c149.jpg?v=1613778469"></div>
                        <div class="prod-bg text-center py-1"><img class="prod-pic" src="https://cdn.shopify.com/s/files/1/0428/8063/0937/files/awards_b7b68527-48b8-43b2-8a75-945922f8c149.jpg?v=1613778469"></div>
                        <div class="more text-center pt-3">
                            <h1 class="mb-0 dk-none dk-sm-block"><strong>+6</strong></h1>
                            <h5>ITEMS</h5>
                        </div>
                    </div>
                </div>
            </div>





        </div>

        <div class="tab-pane" id="timeline">

        <div class="timeline timeline-inverse">


        </div>
        </div>

        <div class="tab-pane" id="settings">

            <form class="forms-sample" action="{{route('shop.update',$shop->id)}}" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputName1">Shop Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" value="{{$shop->title}}" placeholder="title">
                </div>
                <div class="form-group">
                  <label for="shopDescription">Shop Description</label>
                  <textarea class="form-control" id="shopDescription" rows="4" name="shopdis">{{$shop->shopdis}}</textarea>
                </div>
                  <div class="form-group">
                    <label>Profile Photo</label>
                    <input type="hidden" name="shopprofile" value="{{$shop->shopprofile}}">
                    <input type="file" name="imgpro" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Profile Photo">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
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
                    <label>File upload</label>
                    <input type="hidden" name="banner" value="{{$shop->banner}}">
                    <input type="file" name="imgban" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>

                    <div class="form-group mt-3" style="min-width: 100%">
                        <label>Shop Category</label>
                        <select class="js-example-basic-multiple form-control" multiple="multiple">
                            @foreach($cat as $ca)
                                <option value="{{$ca}}">{{$ca}}</option>
                            @endforeach
                            <hr>
                            @foreach($catagories as $c)
                                <option value="{{$c->catname}}"></option>
                            @endforeach

                    </select>
                  </div>

                <input type="hidden" value="{{ Auth::user()->id }}">





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


</x-dashboard>



