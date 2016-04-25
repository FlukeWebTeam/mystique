<?php
/**
 * @file
 * Template for flukestrap libby.
 *
 * Built for the Beha-Amprobe Product Pages
 * 
 * The flexbox wrapper is required, (.flexbox) because .libby-overview and 
 * .libby-overview-links switch places vertically on mobile devices,
 * and the alert boxes go above the carousel.  
 * Bootstrap framework does not natively support vertical
 * reordering, so we had to use flex. Styling found in P3-products.less
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 * title
 * header
 * slideshow
 * alert-panel
 * overview
 * overview-links
 * accessories
 * resources
 * related
 */
?>

<div class="panel-display libby clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="flukestrap-layouts-header panel-panel">
    <div class="panel-panel-inner">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="flexbox">

        <div class="col-xs-12 libby-title panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['title']; ?>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-sm-7 col-xs-12 libby-slideshow panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['slideshow']; ?>
          </div>
        </div>

        <div class="col-sm-5 col-xs-12 libby-alert-panel panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['alert-panel']; ?>
          </div>
        </div>

        <div class="col-sm-5 col-xs-12 libby-overview panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['overview']; ?>
          </div>
        </div>

        <div class="col-md-2 col-sm-1 pull-right hidden-xs" role="presentation">
        <?php 
        /**
         * This empty div is a shameful hack, it helps with the vertical  
         * re-ordering mentioned in the comment above.
         */
        ?> 
        </div>

        <div class="col-md-3 col-sm-4 pull-right col-xs-12 libby-overview-links panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['overview-links']; ?>
          </div>
        </div>

      </div><!-- /.flexbox -->
    </div><!-- /.row -->
  </div><!-- /.container -->
  
  <div class="gray-wrapper">
    <div class="container">
      <div class="row">

        <div class="col-md-8 libby-accessories panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['accessories']; ?>
          </div>
        </div>

        <div class="col-md-4 libby-resources panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['resources']; ?>
          </div>
        </div>
      </div><!-- /.row -->

      <div class="row">
        <div class="col-xs-12 libby-related panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['related']; ?>
          </div>
        </div>
      </div><!-- /.row -->

    </div><!-- /.container -->
  </div><!-- .gray-wrapper -->

</div><!-- /.libby -->