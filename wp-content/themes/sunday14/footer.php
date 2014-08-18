            <h2>Archive</h2>
            
            <div class="archive-container">

<?php $args = array( 'numberposts' => 1000, 'order'=> 'DESC', 'orderby' => 'date' ); $postslist = get_posts( $args ); foreach ($postslist as $post) :  setup_postdata($post); ?>
                <div class="archive-story">
                    <a class="archive-link" href="<?php the_permalink() ?>"></a>
                    <div class="archive-image" style="background-image: url('<?php $postimageurl = get_post_meta ( $post->ID, 'header', true ) ; if ( $postimageurl ) { echo $postimageurl; } else { echo '/media/header_default_2010.jpg'; } ?>');"></div>
                    <div class="archive-meta">
                        <div class="archive-headline"><?php the_title(); ?></div>
                        <div class="archive-subheadline"><?php echo get_post_meta ( $post->ID, 'strapline', true ) ; ?></div>
                    </div>
                </div>
<?php endforeach; ?>

        </aside>
        
        <footer class="footer">
            <a class="mark" href="http://thesundaybe.st"></a>
            <div class="copyright">&copy; 2008 - 2014 <span class="tsb">The Sunday Best</span> <span>|</span> <a href="https://twitter.com/mrsallee">Twitter</a> <span>|</span> <a href="http://instagram.com/mrsallee">Instagram</a> <span>|</span> <a href="https://www.facebook.com/TheSundayBest">Facebook</a> <span>|</span> <a href="http://thesundaybe.st/feed/">RSS</a></div>
        </footer>
    </body>
</html>