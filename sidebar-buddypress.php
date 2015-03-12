<?php
/**
 * The sidebar containing the BuddyPress widget area
 *
 * Displays on BP pages.
 *
 * If no active widgets are in this sidebar, nothing will show up in your sidebar.
 *
 * @ since BuddyPress for Layers 1.0.1 and BuddyPress 1.9 beta 1
 */
if ( is_active_sidebar( 'bp-sidebar' ) ) : ?>
 
    <div id="buddypress-sidebar" class="column pull-right sidebar no-gutter span-4" role="complementary">
                <?php dynamic_sidebar( 'bp-sidebar' ); ?>
    </div><!-- #tertiary -->
 
<?php endif; ?>