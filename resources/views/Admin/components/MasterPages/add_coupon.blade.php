
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">                                       
                <form class="" action="{{url('submit-coupon')}}" method="POST" enctype="multipart/form-data">                        
                @csrf 

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="product_id" required>
                            <option value="">Select Product Name</option>
                            @foreach($product as $r) 
                                <option value="{{$r->products_id}}">{{$r->product_name}}</option> 
                            @endforeach
                        </select>
                    </div>
                </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Coupon Name <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="copoun_name"  placeholder="Enter Coupon Name" required/>
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Coupon Code <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="copoun_code"  placeholder="Enter Coupon Code" required/>
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Amount</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="amount"/>
                        </div>
                    </div> 
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Amount Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="type">                                    
                                <option value="0">Fixed</option>
                                <option value="1">Percentage</option>                                     
                            </select>
                        </div>
                    </div>                  

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">From Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="from"/>
                        </div>
                    </div>  

                    

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">To Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="to"/>
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No. Of Coupon</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="no_of_uses"/>
                        </div>
                    </div>                      

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status">                                    
                                <option value="1">Active</option>
                                <option value="0">De-Active</option>                                     
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <div>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                            </button>
                           
                        </div>

                        <div class="any_message mt-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('alert-danger'))
                                <div class="alert alert-danger">
                                    {{ session()->get('alert-danger') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                                @if(session()->has('alert-success'))
                                <div class="alert alert-success">
                                    {{ session()->get('alert-success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end col -->


