{{-- @extends('layouts.website') --}}

{{-- @include('layouts.website_head') --}}

<body>

    {{-- @include('layouts.website_nav') --}}
    @if($flag == 1)
        @include('Admin.components.MasterPages/view_product')
    @elseif($flag == 2) 
        @include('Website.Ecommerce.Components/product_listing')
    @elseif($flag == 3) 
        @include('Website.Ecommerce.Components/product_details')
    @endif
   {{-- @include('layouts.website_footer_sticky') --}}
</body>