<x-dashboard>

    @foreach ($shops as $s)
        <a href="{{route('shop.show', $s->id)}}" style="outline: none; text-decoration: none;">
            <div class="col-md-4">

                <div class="card card-widget widget-user shadow-lg">

                <div class="widget-user-header text-white" style="background: url('{{ asset('images/auth/lockscreen-bg.jpg') }}') center center no-repeat;">
                <h3 class="widget-user-username text-right" style="padding: 20px;">{{$s->title}}</h3>

                </div>
                <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('uploads/'.$s->shopprofile) }}" alt="User Avatar" width="200px">
                </div>
                <div class="card-footer">
                <div class="row">
                <div class="col-sm-4 border-right">
                <div class="description-block">
                <h5 class="description-header">3,200</h5>
                <span class="description-text">SALES</span>
                </div>

                </div>

                <div class="col-sm-4 border-right">
                <div class="description-block">
                <h5 class="description-header">13,000</h5>
                <span class="description-text">FOLLOWERS</span>
                </div>

                </div>

                <div class="col-sm-4">
                <div class="description-block">
                <h5 class="description-header">35</h5>
                <span class="description-text">PRODUCTS</span>
                </div>

                </div>

                </div>

                </div>
                </div>

            </div>
        </a>
    @endforeach

</x-dashboard>
