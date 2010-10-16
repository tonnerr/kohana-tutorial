<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <meta name="description" content="<?php echo $meta_description ?>" />
  <meta name="KEYWORDS" content="<?php echo $meta_keywords ?>" />
  <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
</head>
<body>
  <div id="wrapper">
<?php echo View::factory('blocks/header_tpl')->render(); ?>
    <div id="main">
      <div id="content">
<?php echo $content ?>
      </div>
    </div>
<?php echo View::factory('blocks/footer_tpl')->render(); ?>
  </div>
</body>
</html>