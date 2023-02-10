<x-dashboard>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
    </script>

        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add product</h4>
                    <form class="form-sample">
                      <p class="card-description">
                        Product info
                      </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product Title</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="pname">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product Price</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="pprice">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Shop</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="pshopid">
                                @foreach($shops as $s)
                                    <option value="{{$s->id}}">{{$s->title}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Quentity</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" placeholder="" name="pqun"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="pcatid">
                                @foreach($catagory as $c)
                                    <option value="{{$c->id}}">{{$c->catname}}</option>
                                @endforeach

                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" id="membershipRadios1" value="digital" name="dop" checked>
                                  Digital
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" id="membershipRadios2" value="hysical" name="dop">
                                  Physical product
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description">
                        info
                      </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product Image</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <div class="form-group">


                                        <input type="file" name="pimg" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                          <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                          </span>
                                        </div>
                                      </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">

                          </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Discription</label>
                            <div class="col-sm-9">
                                <textarea id="myeditorinstance" name="pdis">Hello, World!</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Short Discription</label>
                                <div class="col-sm-9">
                                    <textarea id="myeditorinstance" name="pshort">Hello, World!</textarea>
                                </div>
                              </div>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>

                    </form>
                  </div>
                </div>
              </div>

            </form>


</x-dashboard>
