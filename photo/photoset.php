<?php
  $title = 'Photo';
  $page = 'photo';
  $nav = 'header';



  include_once('../flickr/controller.php');

?>
<?php include('../includes/_header.php');?>

<section class="line">
  <div class="gallery">

    <?php foreach ($photoSet['photoset']['photo'] as $photo){
    ?>
    <div class="unit image-grid">
      <div class="image-wrapper">
        <?php echo '<a href="'.$f->buildPhotoURL($photo,'large').'"><img src="'.$f->buildPhotoURL($photo).'"></a>';?>
      </div>
    </div>
    <?php } ?>

  </div>
</section>


<script type="text/javascript">
  function resizeImg(_this){
    var parentWidth = _this.parents('.image-wrapper').width();
    _this.parents('.image-wrapper').height(parentWidth*2/3);
  }

  $(document).ready(function(){
    var imgs = $('img');
    imgs.hide();
    $('img').load(function(){
      resizeImg($(this));
      $(this).fadeIn();
    });
    $(window).resize(function(){resizeImg($('img'))});
  });

</script>

<script type="text/javascript" src="/js/klass.min.js"></script>
<script type="text/javascript" src="/js/code.photoswipe.jquery-3.0.4.min.js"></script>


<script type="text/javascript">

  (function(window, $, PhotoSwipe){

    $(document).ready(function(){

      var options = {
        imageScaleMethod: 'fitNoUpscale'
      };
      $(".gallery a").photoSwipe(options);

    });
    $('.ps-toolbar-close').live('click',function(){
      resizeImg($('img'));
    });

  }(window, window.jQuery, window.Code.PhotoSwipe));

</script>


<?php include('../includes/_footer.php');?>