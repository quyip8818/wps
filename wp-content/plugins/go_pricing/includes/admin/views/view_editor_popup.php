<?php
/**
 * Editor popup view
 */


// Prevent direct call
if ( !defined( 'WPINC' ) ) die;
if ( !class_exists( 'GW_GoPricing' ) ) die;

// Get current user ID
$user_id = get_current_user_id(); 
 
?>

<div class="gwa-popup" data-help="<?php echo esc_attr( isset( $_COOKIE['go_pricing']['settings']['help'][$user_id] ) ? $_COOKIE['go_pricing']['settings']['help'][$user_id] : '' ); ?>">
<?php printf( '<style>.gwa-section span { background:%s; }</style>', !empty( $_POST['icon_color'] ) ? $_POST['icon_color'] : '#2aa1fa' ); ?>
	<div class="gwa-popup-inner">
		<div class="gwa-popup-header">
			<div class="gwa-popup-header-icon-code" style="background:<?php echo esc_attr( !empty( $_POST['icon_color'] ) ? $_POST['icon_color'] : '#2aa1fa' ); ?>;"><i class="<?php echo esc_attr ( !empty( $_POST['icon'] ) ? $_POST['icon'] : 'fa fa-cog' ); ?>"></i></div>
			<div class="gwa-popup-title"><?php echo !empty( $_POST['title'] ) ? $_POST['title'] : ''; ?><small><?php echo !empty( $_POST['subtitle'] ) ? $_POST['subtitle'] :  __( 'Content & Style Settings', 'go_pricing_textdomain' ); ?></small></div>
			<a href="#" title="Close" class="gwa-popup-close"></a>
		</div>
		<div class="gwa-popup-content-wrap">
			<div class="gwa-popup-content">	
				<div class="gwa-abox">
					<div class="gwa-abox-content-wrap">
						<div class="gwa-abox-content">
						<?php echo $content; ?>				
						</div>
					 </div>
				</div>
			</div>
		</div>
		<div class="gwa-popup-footer">
			<div class="gwa-popup-assets gwa-fl">
				<a href="#" data-action="insert-data" title="<?php esc_attr_e( 'Insert', 'go_pricing_textdomain'); ?>" class="gwa-btn-style1"><?php _e( 'Insert', 'go_pricing_textdomain'); ?></a>
			</div>
			<div class="gwa-popup-assets-center">
				<a href="#" data-action="delete-data" title="<?php esc_attr_e( 'Delete', 'go_pricing_textdomain'); ?>" class="gwa-btn-style3"><i class="fa fa-ban gwa-nomargin"></i></a><a href="#" data-action="clone-data" title="<?php esc_attr_e( 'Clone', 'go_pricing_textdomain'); ?>" class="gwa-btn-style2 gwa-ml10"><i class="fa fa-adjust gwa-nomargin"></i></a><a href="#" data-action="add-new-row" title="<?php esc_attr_e( 'Add Row', 'go_pricing_textdomain' ); ?>" class="gwa-btn-style1 gwa-ml10"><i class="fa fa-plus-circle"></i><?php _e( 'Add Row', 'go_pricing_textdomain' ); ?></a>
			</div>			
			<div class="gwa-popup-nav gwa-fr"><span class="gwa-btn-style4" title="<?php esc_attr_e( 'Previous', 'go_pricing_textdomain'); ?>"><i class="fa fa-chevron-circle-left gwa-mr0"></i><a href="#" data-action="prev"></a></span><span class="gwa-btn-style4 gwa-ml10" title="<?php esc_attr_e( 'Next', 'go_pricing_textdomain'); ?>"><i class="fa fa-chevron-circle-right gwa-mr0"></i><a href="#" data-action="next"></a></span></div>
		</div>		
	</div>	
</div>