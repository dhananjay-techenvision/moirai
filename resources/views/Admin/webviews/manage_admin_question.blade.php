@extends('layouts.master')

@section('title') User List @endsection
@section('css')

    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') @if($page_title)  {{$page_title}} @endif @endslot
         {{-- @slot('li_1') Tables  @endslot --}}
     @endcomponent

                    

     <div class="row">
        @if($flag == 1)
            @include('Admin.components/question/admin_view_question')
        @elseif($flag == 2) 
            @include('Admin.components/question/admin_add_question')
        @elseif($flag == 3) 
            @include('Admin.components/question/admin_edit_question')
        @elseif($flag == 4) 
            @include('Admin.components/question/admin_add_answer')
        @elseif($flag == 5) 
            @include('Admin.components/admin_view_test')
        @elseif($flag == 6) 
            @include('Admin.components/admin_add_test')
        @elseif($flag == 7) 
            @include('Admin.components/edit_test')
        @elseif($flag == 8) 
            @include('Admin.components/question/add_test_question')
        @elseif($flag == 9) 
            @include('Admin.components/question/select_question')
        @elseif($flag == 10) 
            @include('Admin.components/question/admin_add_test_two')
        @elseif($flag == 11) 
            @include('Admin.components/question/show_test_question')
        @elseif($flag == 12) 
            @include('Admin.components/question/view_test_question')
        @elseif($flag == 13) 
            @include('Admin.components/question/admin_edit_answer')
        @elseif($flag == 14) 
            @include('Admin.components/question/admin_edit_test_two')
    @endif
    </div>
                    <!-- end row -->

    @endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>

@endsection