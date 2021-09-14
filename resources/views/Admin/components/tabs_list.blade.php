
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-tabs')}}" class="btn btn-info">Add Tabs</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Test Name</th>
                        <th>Status</th>                            
                        <th>Action</th>
                        <th>Share</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($tabs as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->tab_name}}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-tabs/'.$row->id)}}" class="btn btn-info mr-2">Edit</a>
                             @if($row->status == 1) <a href="{{url('update-tabs/'.$row->id.'/'.$deactive)}}" class="btn btn-danger">Deactive</a>@else <a href="{{url('update-tabs/'.$row->id.'/'.$active)}}" class="btn btn-info">Active</a>@endif </td>   
                        <td>
                            {!! Share::page(url('/view-tab/'. $row->id))->twitter()
                            ->linkedin()
                            ->telegram()
                            ->whatsapp()        
                            ->reddit(); !!}
                           </td>                                            
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>


 
 

<!-- end col -->
