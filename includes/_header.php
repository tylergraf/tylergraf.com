<html>
<head>
  <title>Tyler Graf | <?php echo $title; ?></title>
  <meta name="description" content="Home">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
  <link rel="icon" href="/css/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="/css/core.css">
  <link rel="stylesheet" type="text/css" href="/css/styles.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</head>
<body>
<div class="page page-skin-1 page-skin-ext-<?php echo $page; ?>">
  <div class="line">
    <header>
      <div class="page-header">
        <h1><a href="/">Tyler Graf</a></h1>

        <?php if ($page != 'home') echo '<h2><a href="/'.$page.'">'.$page.'</a></h2>' ?>
      </div>
    </header>

    <nav class="nav page-nav-skin-<?php echo $nav; ?>">
      <div class="nav-init"><h2>stuff</h2></div>
      <div class="holder">
        <ul class="circles">
          <li class="menu-item film"><h2><i></i><span>film</span></h2><a href="/film"></a></li>
          <li class="menu-item photo "><h2><i></i><span>photo</span></h2><a href="/photo"></a></li>
          <li class="menu-item design "><h2><i></i><span>design</span></h2><a href="/design"></a></li>
          <li class="menu-item about "><h2><i></i><span>about</span></h2><a href="/about"></a></li>
          <li class="menu-item blog "><h2><i></i><span>blog</span></h2><a href="/blog"></a></li>
        </ul>
      </div>
    </nav>
  </div>


