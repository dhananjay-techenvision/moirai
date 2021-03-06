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
        @include('Admin.components.MasterPages/view_product')
    @elseif($flag == 2) 
        @include('Admin.components.MasterPages/view_order')
    @elseif($flag == 3) 
        @include('Admin.components.MasterPages/view_order_details')
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