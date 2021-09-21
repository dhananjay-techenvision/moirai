
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-home-what-is-section')}}" class="btn btn-info">Add Content</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Name</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($what_is_section as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->title}}</td>   
                        <td> <img src="{{$row->image}}" alt="" width="80" height="80"> </td>                        
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-home-what-is-section/'.$row->id)}}" class="btn btn-info mr-2">Edit</a>
                            <a href="{{url('delete-home-what-is-section/'.$row->id)}}" class="btn btn-danger mr-2">Delete</a>
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
