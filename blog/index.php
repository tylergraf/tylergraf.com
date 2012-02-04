<?php
  $title = 'Blog';
  $page = 'blog';
  $nav = 'header';

  include_once('../api/tumblr/controller.php');
  include('../includes/_header.php');

?>

<section class="line">
  <div class="blog-wrapper">

  <?php 
//      print_r($posts)
    for ($i = '0'; $i < $tCount; $i++) {
      $post = $posties[$i];
    ?>

      <div class="mod mod-skin-blog-post">
        <div class="mod-header">
<!--          <h2>--><?php //echo ($post['title'] ? $post['title'] : 'Reblog') ?><!--</h2>-->

            <?php
            if($post['type'] == 'text'){
              echo '<h2>'.$post['title'].'</h2>';
              echo '<p>'. date("n.j.Y", $post['timestamp']).'</p>';
            }
            elseif ($post['type'] == 'photo'){
              $photoCount = count($post['photos']);
              if ($photoCount > 1) {
                echo '<h2>Photoset</h2>';
                echo '<p>'. date("n.j.Y", $post['timestamp']).'</p>';

                for ($p = 0; $p < $photoCount; $p++) {
                  //                print_r($post['photos'][$p]['alt_sizes'][4]['url']);
                  echo '<div class="unit size1of2"><div class="photoset">';
                  echo '<img src="' . $post['photos'][$p]['alt_sizes'][1]['url'] . '">';
                  echo '</div></div>';
                }
              }
              else{
                echo '<img src="' . $post['photos'][0]['alt_sizes'][0]['url'] . '">';
              }

              echo $post['title'];

            }
            elseif ($post['type'] == 'quote'){
              echo '<h2>Quote</h2>';
            }


            ?>

        </div>
        <div class="mod-body">
          <?php
            if($post['type'] == 'text'){
              echo $post['body'];
            }
            elseif($post['type'] == 'quote'){
              echo '&ldquo;'.$post['text'].'&rdquo;';
              echo '<p>&mdash;'.$post['source'].'</p>';
            }
            elseif($post['type'] == 'link'){
              echo $post['description'];
            }
          ?>


          <p><?php echo ($post['body'] ? $post['body'] : $post['caption']) ?></p>
        </div>
        <div class="mod-footer">

          <?php
            $tags = $post['tags'];
            $tagsCount = count($tags);
            echo '<strong>TAGS: </strong>';
            for ($j = '0'; $j < $tagsCount; $j++) {
              echo '<span class="tag">'.($post['tags'][$j]).'</span>';
            }?>
          </div>
        </div>

        <?php } ?>


  </div>
</section>

<script type="text/javascript">
  function resizeImg(_this){
    var parentWidth = _this.width();
    _this.height(parentWidth*(2/3));
  }

    var imgs = $('.photoset img');
    imgs.load(function(){
      resizeImg($(this));
      $(this).fadeIn();
    });
    function resizeIframe(_this){
      var pageWidth = $('.blog-wrapper').width();
      _this.width(pageWidth);
      _this.height(pageWidth/(16/9));

    }
    $(window).resize(function(){resizeImg($('.photoset img'));resizeIframe($('iframe'));});
    resizeIframe($('iframe'));
</script>

<?php include('../includes/_footer.php');?>