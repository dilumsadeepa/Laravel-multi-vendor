<x-dashboard>



    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit product</h4>
                <form class="form-sample">
                  <p class="card-description">
                    Product info
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Title</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="{{$product->pname}}" name="pname">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="{{$product->pprice}}" name="pprice">
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
                            @foreach($shops as $sh)
                                @if($product->pshopid == $sh->id)
                                    <option value="{{$sh->id}}">{{$sh->title}}</option>
                                @endif
                            @endforeach
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
                          <input type="number" class="form-control" placeholder="" value="{{$product->pqun}}" name="pqun"/>
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
                            <option value="{{$product->pcatid}}">{{$product->pcatid}}</option>
                            @foreach($catagory as $c)
                                <option value="{{$c->catname}}">{{$c->catname}}</option>
                            @endforeach

                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sub Category</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" value="{{$product->psubcat}}" name="psubcat"/>
                          </div>
                        </div>
                      </div>

                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product</label>
                        <div class="col-sm-4">
                          <div class="form-check">
                            <label class="form-check-label">
                                @if($product->dop == "digital")
                                    <input type="radio" class="form-check-input" id="membershipRadios1" value="digital" name="dop" checked>
                                    Digital
                                @else
                                    <input type="radio" class="form-check-input" id="membershipRadios1" value="digital" name="dop">
                                    Digital
                                @endif
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <label class="form-check-label">
                                @if($product->dop == "physical")
                                    <input type="radio" class="form-check-input" id="membershipRadios2" value="physical" name="dop" checked>
                                    Physical product
                                @else
                                    <input type="radio" class="form-check-input" id="membershipRadios2" value="physical" name="dop">
                                    Physical product
                                @endif
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

                                    <input type="hidden" id="pimg" name="pimg" value="{{$product->pimg}}">

                                    {{-- <input type="file" name="pimg[]" multiple class="file-upload-default" onchange="previewImage(event);">
                                    <div class="input-group col-xs-12">
                                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                      <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                      </span>
                                    </div> --}}
                                  </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="preview">
                            <img id="preview-selected-image" class="img-fluid" />
                        </div>
                    </div>
                    <div class="row" id="row">

                    </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Discription</label>
                        <div class="col-sm-9">
                            <textarea id="myeditorinstance" name="pdis">{{$product->pdis}}</textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Short Discription</label>
                            <div class="col-sm-9">
                                <textarea id="myeditorinstance" name="pshort">{{$product->pshort}}</textarea>
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


<style>
    .preview{
        width: 350px;
    }
</style>


<script>

    const previewImage = (event) => {

        const imageFiles = event.target.files;

        const imageFilesLength = imageFiles.length;

        if (imageFilesLength > 0) {

            const imageSrc = URL.createObjectURL(imageFiles[0]);

            const imagePreviewElement = document.querySelector("#preview-selected-image");

            imagePreviewElement.src = imageSrc;

            imagePreviewElement.style.display = "block";
        }
    };
</script>


</x-dashboard>
