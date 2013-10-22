
		<?php get_header(); ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
			<div class="header">
					
				<div class="logo"><a href="http://thesundaybe.st/">The Sunday Best</a></div>
		
				<hr/>
		
				<h1><?php the_title(); ?></h1>
				<div class="header-strap"><?php echo get_post_meta ( $post->ID, 'strapline', true ) ; ?></div>
				<div class="header-banner" style="background-image: url(<?php $postimageurl = get_post_meta ( $post->ID, 'header', true ) ; if ( $postimageurl ) { echo $postimageurl; } else { echo '/media/header_default_2010.jpg'; } ?>);"></div>
			
			</div>

			<?php the_content(); ?>
			
			<div class="end-divider"><hr/></div>
			
			<p class="authorship">by <a href="https://plus.google.com/101069123027070788845?rel=author">Mark Ryan Sallee</a></p>

			<div class="about-author">
				<div class="author-pic"><img src="http://thesundaybe.st/wp-content/themes/sunday/author-pic.jpg"/></div>
				<div class="author-text"><strong>I'm Mark Ryan Sallee.</strong> I live and work in the San Francisco Bay Area, where motorcycles rule. Quality excites me. Follow me on <a href="http://twitter.com/mrsallee">Twitter</a>, <a href="http://instagram.com/mrsallee">Instagram</a> and <a href="http://www.linkedin.com/in/markryansallee">LinkedIn</a>.</div>
			</div>

			<div class="share-bar">

				<!--<a class="share-button share-facebook" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>">Share</a>-->
				<a class="share-button share-facebook" href="https://www.facebook.com/TheSundayBest">Like</a><!--
				--><a class="share-button share-twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>">Tweet</a><!--
				--><a class="share-button share-reddit" href="http://www.reddit.com/submit" onclick="window.location = 'http://www.reddit.com/submit?url=<?php the_permalink(); ?>' + encodeURIComponent(window.location); return false">Submit</a><!--
				--><a class="share-button share-pinterest" href="http://pinterest.com/pin/find/?url=<?php the_permalink(); ?>">Pin it</a><!--
				--><a class="share-button share-google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">+1</a><!--
				--><a class="share-button share-rss" href="http://thesundaybe.st/feed/">RSS</a>

			</div>

			<p class="ending-mark"><a href="http://thesundaybe.st/"><img src="<?php bloginfo ( 'template_url' ) ; ?>/tsb-mark.png"/></a></p>

			<?php wp_footer(); ?>

			<!-- archives -->
			
			<div class="archives">

				<div class="keep-reading">Keep reading!</div>
				
				<hr/>

				<?php global $post; $current_post = $post; for($i = 1; $i <= 3; $i++) : $post = get_previous_post(); setup_postdata($post); if (!empty( $post )): ?>

					<a class="archive-post" href="<?php the_permalink() ?>">
						<div class="archive-post-spade" style="background-image: url(<?php $postimageurl = get_post_meta ( $post->ID, 'header', true ) ; if ( $postimageurl ) { echo $postimageurl; } else { echo '/media/header_default_2010.jpg'; } ?>);"></div>
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</a>

				<?php endif; endfor; $post = $current_post; ?>

				<a class="full-archive" href="/archive/">Archive &rsaquo;</a>
				
			</div>

			<!-- end archives -->

			<?php endwhile; else: ?>

				<p>It broke. Sorry.</p>

			<?php endif; ?>

		<?php get_footer(); ?>
