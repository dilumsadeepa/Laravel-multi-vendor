<x-dashboard>

<h3>create shop</h3>
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
    <br>
<form class="forms-sample" action="{{route('shop.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputName1">Shop Name</label>
      <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="shopDescription">Shop Description</label>
      <textarea class="form-control" name="shopdis" id="myeditorinstance" rows="4"></textarea>
    </div>
      <div class="form-group">
        <label>Profile Photo</label>
        <input type="file" name="shopprofile" class="file-upload-default" onchange="previewImage1(event);">
        <div class="input-group col-xs-12">
          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Profile Photo">
          <span class="input-group-append">
            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
          </span>
        </div>
      </div>


      <div class="form-group">
        <label>Cover Photo</label>
        <input type="file" name="banner" class="file-upload-default" onchange="previewImage2(event);">
        <div class="input-group col-xs-12">
          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Banner Image">
          <span class="input-group-append">
            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
          </span>
        </div>
      </div>


      {{-- <div class="form-group">
        <label>File upload</label>
        <input type="file" name="img[]" class="file-upload-default">
        <div class="input-group col-xs-12">
          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
          <span class="input-group-append">
            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
          </span>
        </div> --}}

        <div class="form-group mt-3">
            <label>Shop Category</label>
            <select class="js-example-basic-multiple w-100" name="catagory[]" multiple="multiple">
                @foreach($cat as $c)
                    <option value="{{$c->catname}}">{{$c->catname}}</option>
                @endforeach
        </select>
      </div>

    <input type="hidden" name="sellerid" value="{{Auth::user()->id}}">






    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
  </form>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
    <div class="preview">
        <img id="preview-selected-image1" class="img-fluid" />
    </div>
    <br>
    <div class="col-sm-4">
        <div class="preview">
            <img id="preview-selected-image2" class="img-fluid" />
        </div>
    </div>
</div>


<style>
    .preview{
        width: 350px;
    }
</style>


<script>
    const previewImage1 = (event) => {

        const imageFiles = event.target.files;

        const imageFilesLength = imageFiles.length;

        if (imageFilesLength > 0) {

            const imageSrc = URL.createObjectURL(imageFiles[0]);

            const imagePreviewElement = document.querySelector("#preview-selected-image1");

            imagePreviewElement.src = imageSrc;

            imagePreviewElement.style.display = "block";
        }
    };

    const previewImage2 = (event) => {

    const imageFiles = event.target.files;

    const imageFilesLength = imageFiles.length;

    if (imageFilesLength > 0) {

        const imageSrc = URL.createObjectURL(imageFiles[0]);

        const imagePreviewElement = document.querySelector("#preview-selected-image2");

        imagePreviewElement.src = imageSrc;

        imagePreviewElement.style.display = "block";
    }
    };

</script>

</x-dashboard>

