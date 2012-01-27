
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
    function menuAnimate(){
      $('.circles').toggleClass('on');
      $('.nav-init').toggleClass('on');
      if($('.circles').hasClass('on')){
        setTimeout("$('.circles').css('z-index','1')",500);
      }
      else{
        $('.circles').css('z-index','-1');
      }
    }
    $('.nav-init').click(function(){menuAnimate()});
    $('.menu-item').click(function(){menuAnimate()});

//    init transitions
    $('.page-header h1').addClass('on');
    $('.nav-init').addClass('on');
  });
</script>
</div>
</body>
</html>