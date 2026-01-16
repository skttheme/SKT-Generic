<?php
//about theme info
add_action( 'admin_menu', 'skt_generic_abouttheme' );
function skt_generic_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-generic'), esc_html__('About Theme', 'skt-generic'), 'edit_theme_options', 'skt_generic_guide', 'skt_generic_mostrar_guide');   
} 
//guidline for about theme
function skt_generic_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-generic'); ?>
		   </div>
          <p><?php esc_html_e('SKT Generic is a simple, flexible, multipurpose theme developed using block patterns and editable using Gutenberg editor. This theme comes with 5 premade block patterns and can be used for minimal, corporate, business, architect, interior, portfolio and other types of photography industry usage.','skt-generic'); ?></p>
          <a href="<?php echo esc_url(SKT_GENERIC_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_GENERIC_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-generic'); ?></a> | 
				<a href="<?php echo esc_url(SKT_GENERIC_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-generic'); ?></a> | 
				<a href="<?php echo esc_url(SKT_GENERIC_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-generic'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_GENERIC_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>