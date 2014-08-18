<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="hero-container">
            <div class="hero-top">
                <div class="hero-logo"><a href="http://thesundaybe.st">The Sunday Best</a></div>
                <div class="hero-divider">~</div>
            </div>
            
            <div class="hero-content">
                <div class="hero-meta">
                    <h1 class="hero-headline"><?php the_title(); ?></h1>
                    <div class="hero-subheadline"><?php echo get_post_meta ( $post->ID, 'strapline', true ) ; ?></div>
                </div>
            </div>
            
            <div class="hero-date">Published <?php the_date('F j, Y'); ?></div>
            
            <div class="hero-image" style="background-image: url('<?php $postimageurl = get_post_meta ( $post->ID, 'header', true ) ; if ( $postimageurl ) { echo $postimageurl; } else { echo '/media/header_default_2010.jpg'; } ?>');"></div>
        </div>
        
        <article class="content">
        	<?php the_content(); ?>
            
            <div class="byline">
                <div class="byline-divider">~</div>
                <div class="byline-content">
                    <div class="byline-image"></div>
                    <div class="byline-copy"><strong>I'm Mark Ryan Sallee.</strong> I live and work in the San Francisco Bay Area, where motorcycles rule. Quality excites me. Follow me on <a href="https://twitter.com/mrsallee">Twitter</a> and <a href="http://instagram.com/mrsallee">Instagram</a>.</div>
					<p class="authorship">by <a href="https://plus.google.com/101069123027070788845?rel=author">Mark Ryan Sallee</a></p>
				</div>
            </div>
        </article>

	<?php wp_footer(); ?>

	<?php global $post; $current_post = $post; for($i = 1; $i <= 1; $i++) : $post = get_previous_post(); setup_postdata($post); if (!empty( $post )): ?>
        <aside class="archive">
            <div class="previous-container">
                <a class="previous-link" href="<?php the_permalink() ?>"></a>
                <div class="previous-heading">Previously published</div>
                
                <div class="previous-content">
                    <div class="previous-meta">
                        <div class="previous-headline"><?php the_title(); ?></div>
                        <div class="previous-subheadline"><?php echo get_post_meta ( $post->ID, 'strapline', true ) ; ?></div>
                    </div>
                </div>
                
                <div class="previous-cta">Read now</div>
                <div class="previous-image" style="background-image: url('<?php $postimageurl = get_post_meta ( $post->ID, 'header', true ) ; if ( $postimageurl ) { echo $postimageurl; } else { echo '/media/header_default_2010.jpg'; } ?>');"></div>
            </div>
	<?php endif; endfor; $post = $current_post; ?>
<?php endwhile; else: ?>

			<p>It broke. Sorry.</p>

<?php endif; ?>

<?php get_footer(); ?>