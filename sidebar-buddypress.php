<?php
/**
 * The sidebar containing the BuddyPress widget area
 *
 * Displays on BP pages.
 *
 * If no active widgets are in this sidebar, nothing will show up in your sidebar.
 *
 * @ since Twenty Thirteen 1.1 and BuddyPress 1.9 beta 1
 */
if ( is_active_sidebar( 'bp-sidebar' ) ) : ?>
 
    <div id="buddypress-sidebar" class="column pull-right sidebar no-gutter " role="complementary">
        <div class="sidebar-inner">
            <div class="widget-area">
                <?php dynamic_sidebar( 'bp-sidebar' ); ?>
            </div><!-- .widget-area -->
        </div><!-- .sidebar-inner -->
    </div><!-- #tertiary -->
 
<?php endif; ?>