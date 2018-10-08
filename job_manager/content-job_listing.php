<?php
/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.27.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;
?>
<li <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_lat ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_long ); ?>">
	<a href="<?php the_job_permalink(); ?>">
		<div class="position">
			<h3><?php wpjm_the_job_title(); ?></h3>
			<div class="date"><?php the_job_publish_date(); ?></div>
		</div>
		<?php the_company_logo(); ?>
		<div class="location">
			<h4><?php esc_html_e('Location:', 'bears') ?></h4>
			<?php the_job_location( false ); ?>
		</div>
		<div class="company">
			<h4><?php esc_html_e('Company Name:', 'bears') ?></h4>
			<?php the_company_name( false ); ?>
		</div>
		<ul class="meta">
			<?php do_action( 'job_listing_meta_start' ); ?>

			<?php if ( get_option( 'job_manager_enable_types' ) ) { ?>
				<?php $types = wpjm_get_the_job_types(); ?>
				<?php if ( ! empty( $types ) ) : foreach ( $types as $type ) : ?>
					<li class="job-type <?php echo esc_attr( sanitize_title( $type->slug ) ); ?>"><?php echo esc_html( $type->name ); ?></li>
				<?php endforeach; endif; ?>
			<?php } ?>
			
			<?php do_action( 'job_listing_meta_end' ); ?>
		</ul>
	</a>
</li>
