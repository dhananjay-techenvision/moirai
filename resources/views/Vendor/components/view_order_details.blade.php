
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
              
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>                                               
                        <th class="product-name">Order Id</th>
                        <th class="product-price">Product</th>
                        <th class="product-quantity">Details</th>
                        <th class="product-subtotal">Price</th>
                        <th class="product-delete">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $item)
                        @php
                            $product = DB::table('products')->where('products_id' , $item->prod_id)->first();
                            $price = DB::table('product_attributes')->where('products_id' , $item->prod_id)->pluck('price')->first();
                            // dd($product_name);
                        @endphp
                        <tr>
                            <td>{{$item->order_id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->long_description}}</td>
                            <td>{{$price}}</td>
                            <td>{{$item->quantity}}</td>                                                                                              
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
