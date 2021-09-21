
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-sub-section')}}" class="btn btn-info">Add Sub Section</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive  text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Main Section</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($sub_section as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        @php
                            $main_section =  DB::table('main_section')->where('id',$row->main_section_id)->pluck('main_section')->first();
                        @endphp
                        <td>{{$main_section}}</td>   
                        <td>{{$row->title}}</td>      
                        <td class="text-justify">{{$row->description}}</td>               
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-sub-section/'.$row->id)}}" class="btn btn-info mr-2 mb-2">Edit</a>
                            <a href="{{url('delete-sub-section/'.$row->id)}}" class="btn btn-danger mr-2">Delete</a>
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
