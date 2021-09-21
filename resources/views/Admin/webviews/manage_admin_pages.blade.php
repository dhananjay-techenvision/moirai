@extends('layouts.master')

@section('title') User List @endsection
@section('css')

    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') @if($page_title)  {{$page_title}} @endif @endslot
         {{-- @slot('li_1') Tables  @endslot --}}
     @endcomponent

     <div class="row">
        @if($flag == 1)
        @include('Admin.components/main_section_list')
    @elseif($flag == 2) 
        @include('Admin.components/add_main_section')
    @elseif($flag == 3) 
        @include('Admin.components/edit_main_section')
    @elseif($flag == 4) 
        @include('Admin.components/sub_section_list')
    @elseif($flag == 5) 
        @include('Admin.components/add_sub_section')
    @elseif($flag == 6) 
        @include('Admin.components/edit_sub_section')
    @elseif($flag == 7) 
        @include('Admin.components.MasterPages/what_is_section_list')
    @elseif($flag == 8) 
        @include('Admin.components.MasterPages/add_what_is_section')
    @elseif($flag == 9) 
        @include('Admin.components.MasterPages/edit_what_is_section')
    @elseif($flag == 10) 
        @include('Admin.components.MasterPages/footer_banner_list')
    @elseif($flag == 11) 
        @include('Admin.components.MasterPages/add_footer_banner')
    @elseif($flag == 12) 
        @include('Admin.components.MasterPages/edit_footer_banner')
    @elseif($flag == 13) 
        @include('Admin.components.MasterPages/footer_slider_list')
    @elseif($flag == 14) 
        @include('Admin.components.MasterPages/add_footer_slider')
    @elseif($flag == 15) 
        @include('Admin.components.MasterPages/edit_footer_slider')
    @endif
    </div>
                    <!-- end row -->

    @endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>

@endsection