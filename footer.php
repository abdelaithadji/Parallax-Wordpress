<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Sixty
 * @since Twenty Sixty 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			

			<!--<div class="site-info">
				<?php //do_action( 'twentysixty_credits' ); ?>
				<a href="<?php //echo esc_url( __( 'http://wordpress.org/', 'twentysixty' ) ); ?>" title="<?php //esc_attr_e( 'Semantic Personal Publishing Platform', 'twentysixty' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixty' ), 'WordPress' ); ?></a>
			</div>-->
                        <div class="row">
                            <div class="col-lg-8"><h6 class="widget-title ts_sidebar_title">Lorem ipsum</h6>
                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. </p></div>
                            <div class="col-lg-4"><h6 class="widget-title ts_sidebar_title">Top viewed</h6>
                             <?php  //query_posts( $query_string . '&posts_per_page=1' );?>
                                 <?php 
       
        $args = array("post_type" => "post", "orderby" => "date", "order" => "DESC", "post_status" => "publish",/* "posts_per_page" => "2", */"category_name" => "liens-footer");
        query_posts($args);
       ?>
           <?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                                <div class="col-lg-3 col-md-6 col-sm-4 col-xs-12 costum-col-lg-3">
				<?php the_title(); ?>
                                </div>
			<?php endwhile; ?>

			<?php twentysixty_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
           
                            </div>
                        </div>
		</footer>
	</div>

	
</body>
</html>
