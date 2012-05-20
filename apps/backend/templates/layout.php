<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>

    <!--[if lte IE 7]>
    <?php echo stylesheet_tag('my_patches/patch_my_layout.css') ?>
    <![endif]-->
  </head>
  <body>
    <div class="page_margins">
      <div id="border-top">
        <div id="edge-tl"></div>
        <div id="edge-tr"></div>
      </div>
      <div class="page">
        <div id="header">
          <?php echo get_component('comps', 'topnav'); ?>
          <h1>Rutino</h1>
        </div>
        <?php /** / ?>
        <div id="nav">
           skiplink anchor: navigation 
          <a id="navigation" name="navigation"></a>
          <div class="hlist">
             main navigation: horizontal list 
            <?php echo get_component('comps', 'menu'); ?>
          </div>
        </div>
        <?php /**/ ?> 
        
        <div id="nav">
          <!-- skiplink anchor: navigation -->
          <a id="navigation" name="navigation"></a>
          <div class="hlistfg">
            <!-- main navigation: horizontal list -->
            <?php echo get_component('comps', 'fgmenu'); ?>
          </div>
        </div>
        <div id="main">
          <?php echo $sf_content ?>
        </div>
        <!-- begin: #footer -->
        <div id="footer">
          <?php echo get_component('comps', 'footer'); ?>
        </div>
      </div>
      <div id="border-bottom">
        <div id="edge-bl"></div>
        <div id="edge-br"></div>
      </div>
    </div>
  </body>
</html>
