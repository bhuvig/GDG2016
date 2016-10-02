<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title>Pixlr - development manual</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="Description" content="Pixlr is a free online photo editor. Edit, adjust and filter your images. No registration jump right in!" />
  <meta name="Keywords" content="photo, photograph, picture, free, opacity, alpha, edit, editing, adjustments, online, flickr, facebook, photobucket, camera, digital, image, red-eye, fix, photoshop, gimp, photoshop" />
  <link rel="stylesheet" type="text/css" href="/_css/style.css" media="screen" />
  <script type="text/javascript" src="pixlr.js"></script>
  <script type="text/javascript">
    pixlr.settings.target = 'http://developer.pixlr.com/save_post_modal.php';
    pixlr.settings.exit = 'http://localhost/simple_gray_621/index.html';
    pixlr.settings.credentials = true;
    pixlr.settings.method = 'post';
    //pixlr.settings.image = 'http://localhost/simple_gray_621/walley.png';
  </script>
</head>
<body>

<h4>Click the image to edit</h4>
<br />


<b>Open image editor overlay</b><br />
<a href="javascript:pixlr.overlay.show({image:'http://localhost/simple_gray_621/walley.png', title:'Wall', service:'editor'});"><img src="http://localhost/simple_gray_621/walley.png" width="250" height="150" title="Edit in pixlr" style="border: solid;" /></a><br /><br />
<br /><br />




</body>
</html>
