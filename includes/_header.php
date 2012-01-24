<html>
<head>
  <title>Tyler Graf | <?php echo $title; ?></title>
  <meta name="description" content="Home">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  
  <link rel="stylesheet" type="text/css" href="/css/core.css">
  <link rel="stylesheet" type="text/css" href="/css/styles.css">

</head>
<body>
<div class="page page-skin-1 page-skin-ext-<?php echo $page; ?>">
  <div class="line">
    <header>
      <div class="page-header">
        <h1><a href="/">Tyler Graf</a></h1>

        <?php if ($page != 'home') echo '<h2>'.$page.'</h2>' ?>
      </div>
    </header>

    <nav class="nav page-nav-skin-<?php echo $nav; ?>">
      <div class="nav-init"><h2>stuff</h2></div>
      <div class="holder">
        <ul class="circles">
          <li class="menu-item film"><h2><i></i><span>film</span></h2><a href="/film"></a></li>
          <li class="menu-item photo "><h2><i></i><span>photo</span></h2><a href="/photo"></a></li>
          <li class="menu-item design "><h2><i></i><span>design</span></h2><a href="/design"></a></li>
          <li class="menu-item apps "><h2><i></i><span>apps</span></h2><a href="/apps"></a></li>
          <li class="menu-item blog "><h2><i></i><span>blog</span></h2><a href="/blog"></a></li>
        </ul>
      </div>
    </nav>
  </div>



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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

//    $(window).resize(centerNav());
    centerNav();
    $('.menu-item').click(function(e){
      e.preventDefault();
      window.location = $(this).find('a').attr('href');
    });
    $('.nav-init').click(function(){
      $('.circles').toggleClass('on');
      $(this).toggleClass('on');
      if($('.circles').hasClass('on')){
        setTimeout("$('.circles').css('z-index','10')",500);
      }
      else{
        $('.circles').css('z-index','-1');
      }
    });

//    init transitions
    $('.page-header h1').addClass('on');
    $('.nav-init').addClass('on');
  });
</script>