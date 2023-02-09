<x-dashboard>

<h3>create shop</h3>
<form class="forms-sample">
    <div class="form-group">
      <label for="exampleInputName1">Shop Name</label>
      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="shopDescription">Shop Description</label>
      <textarea class="form-control" id="shopDescription" rows="4"></textarea>
    </div>
      <div class="form-group">
        <label>Profile Photo</label>
        <input type="file" name="img[]" class="file-upload-default">
        <div class="input-group col-xs-12">
          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Profile Photo">
          <span class="input-group-append">
            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
          </span>
        </div>
      </div>

      <div class="form-group">
        <label>Cover Photo</label>
        <input type="file" name="img[]" class="file-upload-default">
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
            <select class="js-example-basic-multiple w-100" multiple="multiple">
              <option value="AL">Art</option>
              <option value="WY">Clothing</option>
              <option value="AM">Technology</option>
        </select>
      </div>

    <input type="hidden" value="{{ Auth::id() }}">





    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
  </form>

</x-dashboard>

