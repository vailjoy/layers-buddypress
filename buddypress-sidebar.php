<?php
/**
 * Template Name: BuddyPress Sidebar
 * The template for displaying a BuddyPress page with a right sidebar
 *
 * @package Layers
 * @since Layers 1.0.4
 */

get_header(); ?>
<?php do_action( 'layers_before_buddypress_content' ); ?>
<section id="post-<?php the_ID(); ?>" <?php post_class( 'content-main clearfix' ); ?>>
    <div class="row">
        <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
                <article class="pull-left column span-8">
                    <?php global $post, $layers_post_meta_to_display, $layers_page_title_shown; ?>
						<?php if( !isset( $layers_page_title_shown ) ) { ?>
							<header class="section-title large">
								<?php if( 'post' == get_post_type() ) { ?>
									<?php layers_post_meta( get_the_ID(), array( 'date' ) , 'h5', 'meta-info' ); ?>
								<?php } // if post ?>
								<h1 class="heading"><?php the_title(); ?></h1> 
                                <?php do_action( 'layers_after_buddypress_title' ); ?>
							</header>
                            <?php do_action( 'layers_after_buddypress_header' ); ?>
						<?php } ?>
                      
                
							<?php the_content(); ?>
                            
                            <?php wp_link_pages( array(
                                'link_before'   => '<span>',
                                'link_after'    => '</span>',
                                'before'        => '<p class="inner-post-pagination">' . __('<span>Pages:</span>', 'ocmx'),
                                'after'     => '</p>'
                            )); ?>
                
                      

                </article>
            <?php endwhile; // while has_post(); ?>
        <?php endif; // if has_post() ?>  
        <?php get_sidebar('buddypress'); ?>   
    </div>
   
</section>
<?php do_action( 'layers_after_buddypress_content' ); ?>

<?php get_footer(); ?>