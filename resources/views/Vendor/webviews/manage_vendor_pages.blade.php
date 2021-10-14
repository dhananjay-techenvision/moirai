@extends('layouts.vendorMaster')

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
            @include('Vendor.components.vendordashboard')
        @elseif($flag == 2) 
            @include('Vendor.components.view_product')
        @elseif($flag == 3) 
            @include('Vendor.components.add_product')
        @elseif($flag == 4) 
            @include('Vendor.components.edit_product')
        @elseif($flag == 5) 
            @include('Vendor.components.view_product_attribute')
        @elseif($flag == 6) 
            @include('Vendor.components.add_product_attribute')
        @elseif($flag == 7) 
            @include('Vendor.components.edit_product_attribute')
        @elseif($flag == 8) 
            @include('Vendor.components.view_product_images')
        @elseif($flag == 9) 
            @include('Vendor.components.add_product_images')
        @elseif($flag == 10) 
            @include('Vendor.components.edit_product_images')
        @elseif($flag == 11) 
            @include('Vendor.components.view_order')
        @elseif($flag == 12) 
            @include('Vendor.components.view_order_details')
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