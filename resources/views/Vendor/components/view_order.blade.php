
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-product')}}" class="btn btn-info">Add Product</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>                                               
                        <th class="product-name">Order Id</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th class="product-price">Amount</th>
                        <th class="product-quantity">Status</th>
                        <th class="product-subtotal">Shipping</th>
                        <th class="product-delete">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $item)
                    <tr>
                        <td>{{$item->order_id}}</td>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->amount}}</td>
                        <td>{{$item->payment_status}}</td>
                        <td>{{$item->shipping_charge}}</td>
                        <td></td>                                               
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
