
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-footer-banner')}}" class="btn btn-info">Add Banner</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive  text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Banner Title</th>
                        <th>Banner Image</th>
                        <th>Description</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($footer_banner as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->footer_banner_title}}</td>   
                        <td> <img src="{{$row->footer_banner_image}}" alt="" width="120" height="100"></td>
                        <td>{{$row->description}}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-footer-banner/'.$row->id)}}" class="btn btn-info mb-2">Edit</a>
                            <a href="{{url('delete-footer-banner/'.$row->id)}}" class="btn btn-danger mr-2">Delete</a>
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
