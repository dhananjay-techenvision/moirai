@extends('layouts.website')

@include('layouts.website_head')

<body>

    @include('layouts.website_nav')

    @if($flag == 1)
    @include('Website/vendor_approve')
    @elseif($flag == 2) 
    @include('Website/vendor_info')
    @endif
    @include('layouts.website_footer_sticky')
</body>