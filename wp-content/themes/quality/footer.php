<?php if ( is_active_sidebar( 'footer-widget-area' ) ): ?>
<!-- Footer Widget Secton -->
<div class="qua_footer_widget_area">	
	<div class="container">
		<div class="row">
		<?php dynamic_sidebar( 'footer-widget-area' ); ?>
		</div>	
	</div>	
</div>
<?php endif; ?>
<?php 
$quality_pro_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'quality_pro_options', array() ), $quality_pro_options ); ?>
<div class="qua_footer_area">
  <div class="container">
    <div class="col-md-12">
		<?php if($current_options['footer_copyright_text']!='') { ?>
		<?php echo $current_options['footer_copyright_text']; } ?>
	</div>	
  </div>
</div>
<!-- /Footer Widget Secton -->
<?php wp_footer(); ?>

</body>
</html>