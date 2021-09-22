
<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
{{-- <script src="{{ URL::asset('Website/js/vendor/jquery-3.6.0.min.js')}}"></script> --}}
        <script src="{{ URL::asset('libs/jquery/jquery.min.js')}}"></script>


<!-- Bootstrap -->
  <script src="{{ URL::asset('Website/js/vendor/modernizr-3.6.0.min.js')}}"></script>
  <script src="{{ URL::asset('Website/js/vendor/bootstrap.bundle.min.js')}}"></script>
<!-- core -->
  <script src="{{ URL::asset('Website/js/plugins/slick.min.js')}}"></script>
  <script src="{{ URL::asset('Website/js/plugins/nice-select.min.js')}}"></script>
  <script src="{{ URL::asset('Website/js/plugins/plyr.min.js')}}"></script>
  <script src="{{ URL::asset('Website/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ URL::asset('Website/js/plugins/lightgallery-all.min.js')}}"></script>
  <script src="{{ URL::asset('Website/js/plugins/imagesloaded.pkgd.min.js')}}"></script>

  <script src="{{ URL::asset('Website/js/plugins/isotope.pkgd.min.js')}}"></script>
  <script src="{{ URL::asset('Website/js/main.js')}}"></script>

   <!-- Slick Slider JS -->
   <script src="{{ URL::asset('Website/js/plugins/slick.min.js')}}"></script>

  {{-- socialshare js --}}
  <script src="{{ asset('js/share.js') }}"></script>
<!-- endbuild -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script>
  var carouselContainer = $('.carousel');
var slideInterval = 3000;

function toggleCaption() {
    $('.carousel-caption').hide();
    var caption = carouselContainer.find('.active').find('.carousel-caption');
    caption.delay(500).toggle("slide", {direction:'right'});
}


carouselContainer.carousel({
    interval: slideInterval,
    cycle: true,
    pause: "hover"
}).on('slid.bs.carousel', function() {
    toggleCaption();
});
</script>