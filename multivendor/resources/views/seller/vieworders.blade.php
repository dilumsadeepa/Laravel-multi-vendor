<x-dashboard>
   <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Orders</h4>
            <p class="card-description">
               All <code>.Orders</code>
            </p>
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th>
                           User
                        </th>
                        <th>
                           User name
                        </th>
                        <th>
                           Payment Status
                        </th>
                        <th>
                           Amount
                        </th>
                        <th>
                           Order Date
                        </th>
                        <th>
                           Action
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        @foreach($orders as $order)
                        <td class="py-1">
                           <!-- User image is not set and can't set the image right now -->
                           <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>
                           {{$order->firstname}}
                        </td>
                        <td>
                           {{$order->paymentstatus}}  
                        </td>
                        <td>
                           <!-- Currency should be set in here -->
                           {{number_format($order->oqun*$order->oprice, 2)}}
                        </td>
                        <td>
                           {{$order->created_at}}  
                        </td>
                        <td>
                           <button type="button" class="btn btn-success btn-icon-text">
                                                                              
                           <a href="{{route('order.show', $order->id )}}" style="text-decoration: none;">
                            <i class="ti-file btn-icon-append"></i> View</a>
                           </button>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</x-dashboard>