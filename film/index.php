<?php
  $title = 'Film';
  $page = 'film';
  $nav = 'header';

  include_once('../api/vimeo/controller.php');
  include('../includes/_header.php');

?>

<section class="line">
  <div class="gallery">

<!--    --><?php //print_r($videos); ?>

    <?php foreach ($videos as $video){
//    print_r($video).'<br><br>';
      ?>
      <div class="unit image-grid">
        <div class="image-wrapper">
          <a href="/film/film.php?id=<?php echo $video->id ?>"><img src="<?php echo $video->thumbnails->thumbnail[2]->_content;?>"></a>
          <h2><a href="/film/film.php?id=<?php echo $video->id ?>"><?php echo $video->title ?></a></h2>
        </div>
      </div>
      <?php } ?>

  </div>
</section>

<script type="text/javascript">
  function resizeImg(_this){
    var parentWidth = _this.parents('.image-wrapper').width();
    _this.parents('.image-wrapper').height(parentWidth/(16/11));
  }

    var imgs = $('img');
    imgs.load(function(){
      resizeImg($(this));
      $(this).fadeIn();
    });
    $(window).resize(function(){resizeImg($('img'))});

</script>

<?php include('../includes/_footer.php');?>