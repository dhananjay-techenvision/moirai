
<!-- JS here -->
<script src="{{ URL::asset('Ecommerce/js/vendor/jquery-3.5.0.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/popper.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/jquery.countdown.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/swiper-bundle.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/jarallax.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/slick.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/wow.min.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/nav-tool.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/plugins.js')}}"></script>
<script src="{{ URL::asset('Ecommerce/js/main.js')}}"></script>


<script>
    $('#myTabContent div:first').addClass('active');
</script>

<!-- Fetch Attribute data  -->
<script>
    function fetch_attributes(attribute_id){
    //   alert(attribute_id);
      $.ajax({
            type: "post",
            data:{  "_token": "{{ csrf_token() }}", attribute_id:attribute_id},
            url:"{{ url('product-attribute-detail') }}",
            success : function(data){
                // alert(data.attributes.price);
            //  window.location.reload(true);
            $('#product_price_attribute').text(data.attributes.price);
            $('#attribute_id_detail_page').val(data.attributes.id);
            }
        });
      
    }
    </script>

</body>