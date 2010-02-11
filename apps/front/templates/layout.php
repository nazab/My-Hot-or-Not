<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <script type="text/javascript">
        $("#header").corner("round top");
        $("#nav").corner("round bottom");
        $("#footer").corner("round");
        $("#content").corner("round");
    </script>
  </head>
  <body>
    <div id="header" class="center">
      <a href="<?php echo url_for('default/index');?>">
        <?php echo image_tag('mamou-assis.png', 'alt=logo id=logo') ?>
        <span id="title">My Hot or Not</span>
      </a>
    </div>
    <div id="nav" class="center">
        <ul class="center">
            <li><a href="<?php echo url_for('default/index');?>">Home</a></li>
            <li><a href="<?php echo url_for('contest/new');?>">Add your blog</a></li>
            <li><a href="http://blog.blogornot.net">Blog</a></li>
        </ul>
    </div>
    <div id="content" class="center">
        <?php echo $sf_content ?>
    </div>
    <div id="footer">
        <div class="center">
            Done by <a href="http://nazab.com">Nazab</a>
        </div>
    </div>
  </body>
</html>