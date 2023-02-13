<x-dashboard>



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

        <form id="fileUploadForm" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
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
                              <input type="text" class="form-control" name="pprice" placeholder="$">
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
                            <label class="col-sm-3 col-form-label">Quantity</label>
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
                                    <input type="text" class="form-control" placeholder="" name="psubcat"/>
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
                                    <input type="radio" class="form-check-input" id="membershipRadios1" value="digital" name="dop" checked>
                                    Digital
                                    </label>
                                </div>
                                </div>
                                <div class="col-sm-5">
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="membershipRadios2" value="physical" name="dop">
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


                                            <input type="file" name="pimg[]" multiple class="file-upload-default" onchange="previewImage(event);">
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
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Product Video</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-group">


                                                {{-- <input type="file" name="pimg[]" multiple class="file-upload-default"> --}}
                                                <input type="file" name="file" id="inputFile" class="file-upload-default" @error('file') is-invalid @enderror">

                                                <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Video">
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
                                <div class="preview">
                                    <img id="preview-selected-image" class="img-fluid" />
                                </div>
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
                            {{-- <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="inputFile">File:</label>
                                    <input
                                        type="file"
                                        name="file"
                                        id="inputFile"
                                        class="form-control @error('file') is-invalid @enderror">

                                    @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}

                        <div class="form-group">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>

                        </form>
                    </div>
                    </div>
                </div>
            </div>

            <div class="st2">

            </div>
        </form>


    <style>
        .preview{
            width: 350px;
        }
    </style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    {{-- <script>
        $(function () {
            $(document).ready(function () {
                $('#fileUploadForm').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        console.log('File has uploaded');
                    }
                });
            });
        });
    </script> --}}

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
