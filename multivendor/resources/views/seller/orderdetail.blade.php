<x-dashboard>
   <div class="container py-2">
      <div class="row">
         <div class="col">
            <button type="button" class="btn btn-secondary m-3">Back</button>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4">
            <div class="card mb-4">
               <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                     class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3">User name</h5>
                  <div class="d-flex justify-content-center mb-2">
                     {{-- <button type="button" class="btn btn-primary">Follow</button> --}}
                     {{-- <button type="button" class="btn btn-outline-primary ms-1">Message</button> --}}
                  </div>
                  <hr>
                  {{-- tracking number start --}}
                  <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title">Tracking Number</h4>
                           <p class="card-description">
                              Add tracking number
                           </p>
                           <form class="form-inline">
                              <label class="sr-only" for="inlineFormInputName2">Name</label>
                              <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Tracking . . . .">
                              <button type="submit" class="btn btn-primary mb-2 ml-5">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  {{-- tracking number end --}}
               </div>
            </div>
         </div>
         <!-- Getting backend data -->
         @foreach($orders as $order)
         <div class="col-lg-8">
            <div class="card mb-4">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12 grid-margin stretch-card">
                        <div class="card tale-bg">
                           <div class="card-people mt-auto">
                              <img src="{{ asset('uploads/'.$order->pimg) }}" alt="people" style="max-height: 310px">
                              <div class="weather-info">
                                 <div class="d-flex">
                                    <div>
                                       {{-- 
                                       <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>Stats @</h2>
                                       --}}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$order->name}}&nbsp{{$order->lastname}}</p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$order->email}}</p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$order->tel}}</p>
                     </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$order->addressl1}}<br>{{$order->addressl2}}<br>{{$order->addressl3}}</p>
                     </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Item Name</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$order->pname}}</p>
                     </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Quantity</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$order->oqun}}</p>
                     </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Total price</p>
                     </div>
                     <div class="col-sm-9">
                        <!-- Currency should be set in here -->
                        <p class="text-muted mb-0">{{number_format($order->oqun*$order->oprice, 2)}}</p>
                     </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Order Date</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$order->created_at}}</p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Payment Status</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$order->paymentstatus}}</p>
                     </div>
                  </div>
                  <hr>
               </div>
            </div>
            @endforeach
            <!-- End of getting backend data -->
         </div>
      </div>
   </div>
   </div>
   </div>
</x-dashboard>