<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title><?php wp_title('-','true','right'); ?><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="http://thesundaybe.st/wp-content/themes/sunday14/fonts.css"/>
        <link rel="stylesheet" type="text/css" href="http://thesundaybe.st/wp-content/themes/sunday14/style.css"/>
        <link rel="stylesheet" type="text/css" href="http://thesundaybe.st/wp-content/themes/sunday14/style-mobile.css"/>
        <link rel="stylesheet" type="text/css" href="http://thesundaybe.st/wp-content/themes/sunday14/gallery.css"/>
        <link rel="shortcut icon" href="http://thesundaybe.st/wp-content/themes/sunday/tsb-favicon.png"/>
        <link rel="stylesheet" href="http://thesundaybe.st/wp-content/themes/sunday14/swipebox.css" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://thesundaybe.st/js-global/swipebox/source/jquery.swipebox.js"></script>
        <script type="text/javascript" src="http://thesundaybe.st/wp-content/themes/sunday14/nav.js"></script>
        
        <script type="text/javascript">
            $(window).load(function() {
				$('.photo-frame a').css('background-image', function() {
					return 'url(' + this.href + ')';
				});
                $('a[href*=".png"], a[href*=".gif"], a[href*=".jpg"]').addClass('swipebox').attr('rel', 'group');
                $('.swipebox').swipebox();
                $('.photo-frame a img').each(function(){
                    if($(this).attr('title')) {
                        var imageCaption = $(this).attr('title') || '';
                        $(this).after('<div class="image-caption"><span>'+ imageCaption +'</span></div>');
                        $(this).attr('title','');
                    }
                    else {
                        
                    }
                });

                $(window).resize(function () {
                    $('html').css('font-size', '1vw');
                    stickyIni();
                });
                
                $('a[href*="<?php the_permalink(); ?>"]').addClass('current');
            });
        </script>
        
        <meta name="viewport" content="width=device-width">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:creator" content="MRSallee">
		<meta name="twitter:url" content="<?php the_permalink(); ?>">
		<meta name="twitter:title" content="<?php the_title(); ?>">
		<meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">
		<meta name="twitter:image" content="<?php $postimageurl = get_post_meta ( $post->ID, 'header', true ) ; if ( $postimageurl ) { echo $postimageurl; } else { echo '/media/header_default_2010.jpg'; } ?>">

		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:image" content="<?php $postimageurl = get_post_meta ( $post->ID, 'header', true ) ; if ( $postimageurl ) { echo $postimageurl; } else { echo '/media/header_default_2010.jpg'; } ?>"/>
		<meta property="og:site_name" content="The Sunday Best"/>
		<meta property="og:url" content="<?php the_permalink(); ?>"/>
		<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>"/>
		<meta property="og:type" content="blog"/>

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-25182620-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
        
        <link rel="prerender" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"/>
    </head>
    <body>