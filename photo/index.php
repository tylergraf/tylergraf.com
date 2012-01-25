<?php
  $title = 'Photo';
  $page = 'photo';
  $nav = 'header';

  include_once('../flickr/controller.php');

  
?>
<?php include('../includes/_header.php');?>

<section class="line">
  <div class="gallery">

    <?php foreach ($photoSets['photoset'] as $photo){
    ?>
    <div class="unit image-grid">
      <div class="image-wrapper">
        <?php echo '<a href="/photo/photoset.php?id='.$photo['id'].'"><img src="http://farm'.$photo["farm"].'.static.flickr.com/'.$photo["server"].'/'.$photo["primary"].'_'.$photo["secret"].'_m.jpg"></a>';?>
        <h2><?php echo '<a href="/photo/photoset.php?id='.$photo['id'].'">'.$photo['title'].'</a>';?></h2>
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
    imgs.parent().hide();
    imgs.load(function(){
      resizeImg($(this));
      $(this).parent().fadeIn();
    });
    $(window).resize(function(){resizeImg($('img'))});
  });

</script>

<?php include('../includes/_footer.php');?>