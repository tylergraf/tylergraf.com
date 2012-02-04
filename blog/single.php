<?php
  $title = 'Film';
  $page = 'film';
  $nav = 'header';



  include_once('../api/vimeo/controller.php');
  include('../includes/_header.php');

?>

<section class="line">
  <div class="mod mod-skin-film">
    <div class="mod-header"><h1><?php echo $film[0]->title ?></h1></div>
    <div class="mod-body">
      <div class="feature-film"><iframe src="http://player.vimeo.com/video/<?php echo $film[0]->id ?>?api=1" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
      <div class="media media-ext-right">
        <div class="media-block"><p class="film-plays">Plays: <?php echo $film[0]->number_of_plays ?></p></div>
        <div class="media-body"><p class="film-description"><?php echo $film[0]->description ?></p></div>
      </div>

    </div>
  </div>

</section>

<script type="text/javascript">
  function resizeIframe(_this){
    var pageWidth = $('.page').width();
    _this.width(pageWidth);
    _this.height(pageWidth/(16/9));
    
  }
  $(window).resize(function(){resizeIframe($('iframe'));});
  resizeIframe($('iframe'));
</script>


<?php include('../includes/_footer.php');?>