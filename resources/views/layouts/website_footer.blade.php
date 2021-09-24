
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

  <script src="{{ asset('js/config.js') }}"></script>
  <script src="{{ asset('js/util.js') }}"></script>  
  <script src="{{ asset('js/jquery.emojiarea.js') }}"></script>  
  <script src="{{ asset('js/emoji-picker.js') }}"></script>

  {{-- scroll animation  --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<!-- endbuild -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script>
  var carouselContainer = $('.carousel');
var slideInterval = 8000;

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

<script>
  $(document).ready(function(){   
     $('.likepost').click(function(){
      let user_id = $('#logged_user').val();
      let post_id = $(this).val();
      let btn_id = $(this).attr('id');
      // alert(btn_id);       
                     $.ajax({
                         url: "{{url('user-like-post')}}",
                         method: 'post',
                         data:{
                            "_token": "{{ csrf_token() }}",
                            'post_id': post_id,
                            "user_id" : user_id
                        },
                         success: function(response)
                         { 
                           console.log(response['result']);
                           $('.likes_count_' + post_id).html(response['result']);
                         }
                     });
     });
  });
</script>

<script>
  $(function() {
    // Initializes and creates emoji set from sprite sheet
    window.emojiPicker = new EmojiPicker({
      emojiable_selector: '[data-emojiable=true]',
      assetsPath: {!! json_encode(asset('img/')) !!},
      popupButtonClasses: 'fa fa-smile-o'
    });
    // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
    // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
    // It can be called as many times as necessary; previously converted input fields will not be converted again
    window.emojiPicker.discover();
  });
</script>
<script>
  // Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49610253-3', 'auto');
  ga('send', 'pageview');
</script>



<script> 
document.documentElement.style.setProperty('--animate-duration', '5s');
  $(document).ready(function(){
    $(".tab_title").click(function(){
      $(".sub_section_title").animate({
        right: '50px',
        opacity: '0.5',
      });
    });
  });
  </script>


