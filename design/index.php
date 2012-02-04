<?php
  $title = 'Design';
  $page = 'design';
  $nav = 'header';

  include_once('../api/dribbble/controller.php');
  include('../includes/_header.php');

?>

<section class="line">
  <div class="gallery">
    <?php
//      print_r($shots);
      foreach ($shots as $shot){ ?>
        <div class="unit image-grid">
          <div class="image-wrapper">
            <?php echo '<img src="'.$shot['image_url'].'">'; ?>
            <h2><?php echo '<img src="'.$shot['title'].'">'; ?></h2>
          </div>
        </div>
    <?php } ?>

 </div>
</section>

<script type="text/javascript">
  function resizeImg(_this){
    var parentWidth = _this.parent().width();
    _this.parent().height(parentWidth*2/3);
  }

  $(document).ready(function(){
    var imgs = $('img');
    imgs.load(function(){
      resizeImg($(this));
      $(this).fadeIn();
    });
    $(window).resize(function(){resizeImg($('img'))});
  });

</script>

<?php include('../includes/_footer.php');?>