<?php
/**
 * The template for displaying image attachments.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Fabulous
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @copyright   Copyright (c) 2014, Symple Workz LLC
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div id="page-header">
				<h1><?php the_title(); ?></h1>
			</div><!-- .page-header -->
			<div id="img-attch-page">
				<?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
				<div id="img-attach-page-content">
					<?php the_content(); ?>
				</div><!-- #img-attach-page-content -->
			</div><!-- #img-attch-page -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer();?>