<x-dashboard>


            {{-- content start --}}


            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

            <div class="row">
                @foreach($products as $p)

                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('uploads/'.$p->pimg)}}" alt="Card image">
                            <div class="card-body">
                            <h4 class="card-title">{{$p->pname}}</h4>
                            <p class="card-text">{{$p->title}}</p>
                            <p class="card-text">@php echo($p->pshort) @endphp</p>
                            <a href="{{route('product.show', $p->id)}}" class="btn btn-primary">See Product</a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
              {{-- <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Available Products</h4>
                  <p class="card-description">
                    List of <code>.Items</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Qnt</th>
                          <th>price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td>53275531</td>
                          <td>
                            <button type="button" class="btn btn-dark btn-icon-text">
                                Edit
                                <i class="ti-file btn-icon-append"></i>
                              </button>

                              <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-alert btn-icon-prepend"></i>
                                Delete
                              </button>
                          </td>

                        </tr>




                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
            </div>


            {{-- content end --}}
          </x-dashboard>
