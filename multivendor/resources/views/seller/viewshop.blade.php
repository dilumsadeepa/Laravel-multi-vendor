
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
        <h1>Seller Profile</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Seller Profile</li>
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
        <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/faces/face28.jpg') }}" alt="User profile picture">
        </div>
        <h3 class="profile-username text-center">Nina Mcintire</h3>
        <p class="text-muted text-center">Shop Category</p>
        <ul class="list-group list-group-unbordered mb-3">
        <li class="list-group-item">
        <b>Orders</b> <a class="float-right">1,322</a>
        </li>
        <li class="list-group-item">
        <b>Pending Orders</b> <a class="float-right">543</a>
        </li>
        <li class="list-group-item">
        <b>No of Sell Items</b> <a class="float-right">13,287</a>
        </li>
        </ul>
        <a href="#" class="btn btn-primary btn-block"><b>Create New Shop</b></a>
        </div>

        </div>


        <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">About Me</h3>
        </div>

        <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i> Education</strong>
        <p class="text-muted">
        B.S. in Computer Science from the University of Tennessee at Knoxville
        </p>
        <hr>
        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
        <p class="text-muted">Malibu, California</p>
        <hr>
        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
        <p class="text-muted">
        <span class="tag tag-danger">UI Design</span>
        <span class="tag tag-success">Coding</span>
        <span class="tag tag-info">Javascript</span>
        <span class="tag tag-warning">PHP</span>
        <span class="tag tag-primary">Node.js</span>
        </p>
        <hr>
        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
        </div>

        </div>

        </div>

        <div class="col-md-9">
        <div class="card">
        <div class="card-header p-2">
        <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
        </ul>
        </div>
        <div class="card-body">
        <div class="tab-content">
        <div class="active tab-pane" id="activity">


            <div class="container-fluid py-5 mx-auto">
                <div class="card py-4 px-4">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card tale-bg">
                          <div class="card-people mt-auto">
                            <img src="images/dashboard/people.svg" alt="people">
                            <div class="weather-info">
                              <div class="d-flex">
                                <div>
                                  {{-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>Stats @</h2> --}}
                                </div>

                                    <div class="row justify-content-start px-3">
                                        <div class="image-bg mr-3">
                                            <img class="user-img fit-image" src="">
                                        </div>
                                        <div class="text-left">
                                            <h2>Kiera Hill</h2>
                                            <h6>10 ITEMS - 21 SALE - 8 COMMENTS</h6>
                                            <span class="fa fa-star active"></span>
                                            <span class="fa fa-star active"></span>
                                            <span class="fa fa-star active"></span>
                                            <span class="fa fa-star active"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="btn btn-pink ml-auto">FOLLOW</div>
                                    </div>
                            
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    <div class="line"></div>
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

        <div class="time-label">
        <span class="bg-danger">
        10 Feb. 2014
        </span>
        </div>


        <div>
        <i class="fas fa-envelope bg-primary"></i>
        <div class="timeline-item">
        <span class="time"><i class="far fa-clock"></i> 12:05</span>
        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
        <div class="timeline-body">
        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
        weebly ning heekya handango imeem plugg dopplr jibjab, movity
        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
        quora plaxo ideeli hulu weebly balihoo...
        </div>
        <div class="timeline-footer">
        <a href="#" class="btn btn-primary btn-sm">Read more</a>
        <a href="#" class="btn btn-danger btn-sm">Delete</a>
        </div>
        </div>
        </div>


        <div>
        <i class="fas fa-user bg-info"></i>
        <div class="timeline-item">
        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
        </h3>
        </div>
        </div>


        <div>
        <i class="fas fa-comments bg-warning"></i>
        <div class="timeline-item">
        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
        <div class="timeline-body">
        Take me to your leader!
        Switzerland is small and neutral!
        We are more like Germany, ambitious and misunderstood!
        </div>
        <div class="timeline-footer">
        <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
        </div>
        </div>
        </div>


        <div class="time-label">
        <span class="bg-success">
        3 Jan. 2014
        </span>
        </div>


        <div>
        <i class="fas fa-camera bg-purple"></i>
        <div class="timeline-item">
        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
        <div class="timeline-body">
        <img src="https://placehold.it/150x100" alt="...">
        <img src="https://placehold.it/150x100" alt="...">
        <img src="https://placehold.it/150x100" alt="...">
        <img src="https://placehold.it/150x100" alt="...">
        </div>
        </div>
        </div>

        <div>
        <i class="far fa-clock bg-gray"></i>
        </div>
        </div>
        </div>

        <div class="tab-pane" id="settings">
        <form class="form-horizontal">
        <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="inputName" placeholder="Name">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName2" placeholder="Name">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
        <div class="col-sm-10">
        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
        </div>
        </div>
         <div class="form-group row">
        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
        </div>
        </div>
        <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
        <div class="checkbox">
        <label>
        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-danger">Submit</button>
        </div>
        </div>
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



