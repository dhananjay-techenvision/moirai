
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-coupon')}}" class="btn btn-info">Add Coupon</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive  text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Coupon Name</th>
                        <th>Product Name</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>From</th>
                        <th>To </th>
                        <th>No. of Usage</th> 
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1;  ?>
                    @foreach($coupon as $row)

                        @php
                            $product_name = DB::table('products')->where('products_id',$row->product_id)->pluck('product_name')->first();
                            if($row->type == 1){
                                $type = "Percentage";
                            }else{
                                $type = "Fixed";
                            }
                        @endphp
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->copoun_name}}</td>
                        <td>{{$product_name}}</td>
                        <td>{{$row->amount}}</td>
                        <td>{{$type}}</td>
                        <td>{{$row->from}}</td>  
                        <td>{{$row->to}}</td> 
                        <td>{{$row->no_of_uses}}</td>                             
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-coupon/'.$row->coupons_id)}}" class="btn btn-info mb-2">Edit</a>
                            {{-- <a href="{{url('delete-coupon/'.$row->id)}}" class="btn btn-danger mb-2">Delete</a> --}}
                            @if($row->status == 1) <a href="{{url('update-coupon/'.$row->coupons_id.'/'.$deactive)}}" class="btn btn-danger">Deactive</a>@else <a href="{{url('update-coupon/'.$row->coupons_id.'/'.$active)}}" class="btn btn-info">Active</a>@endif  
                        </td>                                               
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .dt-buttons
    {
        display:none!important;
    }
 </style>   
<!-- end col -->
