<?php
/*
Template Name: Archives
*/
?>

		<?php get_header(); ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        			
			<div class="logo"><a href="http://thesundaybe.st/">The Sunday Best</a></div>
		
			<hr/>

			<?php $args = array( 'numberposts' => 1000, 'order'=> 'DESC', 'orderby' => 'date' ); $postslist = get_posts( $args ); foreach ($postslist as $post) :  setup_postdata($post); ?>

					<a class="archive-post" href="<?php the_permalink() ?>">
						<div class="archive-post-spade" style="background-image: url(<?php $postimageurl = get_post_meta ( $post->ID, 'header', true ) ; if ( $postimageurl ) { echo $postimageurl; } else { echo '/media/header_default_2010.jpg'; } ?>);"></div>
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</a>
								
				<?php endforeach; ?>

			<div class="about-author">
				<div class="author-pic"><img src="http://thesundaybe.st/wp-content/themes/sunday/author-pic.jpg"/></div>
				<div class="author-text"><strong>I'm Mark Ryan Sallee.</strong> I live and work in the San Francisco Bay Area, where motorcycles rule. Quality excites me. Follow me on <a href="http://twitter.com/mrsallee">Twitter</a>, <a href="http://instagram.com/mrsallee">Instagram</a> and <a href="http://www.linkedin.com/in/markryansallee">LinkedIn</a>.</div>
			</div>

			<p class="ending-mark"><a href="http://thesundaybe.st/"><img src="<?php bloginfo ( 'template_url' ) ; ?>/tsb-mark.png"/></a></p>

<?php wp_footer(); ?>

<?php endwhile; else: ?>

<p>It broke. Sorry.</p>

<?php endif; ?>

<?php get_footer(); ?>
