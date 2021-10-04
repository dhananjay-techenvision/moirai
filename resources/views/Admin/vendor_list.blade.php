
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                {{-- <a href="add-college" class="btn btn-info">Add College</a> --}}
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Vendor Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Status</th>                            
                        <th>Action</th>                   
                    </tr>
                </thead>

                <tbody>
                    {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
                    <?php $i = 1; ?>
                    @foreach($Users as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->name}} {{$row->user_id}}</td>                          
                        <td>{{$row->phone}}</td>   
                        <td>{{$row->email}}</td>                            
                        <td>@if($row->status == 1) Active @else Pending To Approve @endif</td>
                        {{-- <td><a href="{{url('edit-college/'.$row->id)}}" class="btn btn-info mr-2">Edit</a><a href="{{url('delete-college/'.$row->id)}}" class="btn btn-danger">Delete</a></td>         
                         --}}
                       <td>
                       @php
                         $deactive = 0;
                         $active = 1;
                         @endphp
                         @if($row->status == 1) <a href="{{url('status-vendor/'.$row->id.'/'.$deactive)}}" class="btn btn-danger">DisApprove</a>@else <a href="{{url('status-vendor/'.$row->id.'/'.$active)}}" class="btn btn-info">Approve</a>@endif </td>   
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
