
<script type="text/javascript">
  $(document).ready(function(){
    var navElement = $('.page-nav-skin-home');
    navElement.fadeIn('500');

    function centerNav(){
      var winHeight = $(window).height();
      var winWidth = $(window).width();
      var navHeight = navElement.find('.nav-init').height();
      navElement.css({'top':(winHeight - navHeight) / 2, 'left': (winWidth - navHeight) / 2});
    }

    $(window).resize(function(){centerNav()});
    centerNav();
    $('.menu-item').click(function(e){
      e.preventDefault();
      window.location = $(this).find('a').attr('href');
    });


    var _nav = $('.nav-init');
    var _circles = $('.circles');


    function menuDeAnimate() {
      _nav.addClass('on');
      _circles.addClass('on');
      setTimeout("$('.circles').css('z-index','1')", 500);
      _nav.animate({
        'margin-left': '0',
        'margin-top': '0',
        'width': '150px',
        'height': '150px'
      }, 500);
      _nav.find('h2').animate({
        'padding-top': '60px'
      }, 500);

    }

    function menuAnimate() {
      _circles.removeClass('on');
      _nav.removeClass('on');
      _circles.css('z-index', '-1');
      _nav.animate({
        'margin-left': '-25px',
        'margin-top': '-25px',
        'width': '200px',
        'height': '200px'
      }, 500);
      _nav.find('h2').animate({
        'padding-top': '85px'
      }, 500);

    }

    _nav.toggle(
      function() {
        menuDeAnimate();
      },
      function() {
        menuAnimate();
      }
    );

//    init transitions
    $('.page-header h1').addClass('on');
    menuAnimate();

  });
</script>
</div>
</body>
</html>