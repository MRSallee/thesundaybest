<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title><?php wp_title('-','true','right'); ?><?php bloginfo('name'); ?></title>
		
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

		<link rel="stylesheet" media="screen and (min-aspect-ratio: 1/1)" href="<?php bloginfo('template_url'); ?>/gallery-style.css" type="text/css"/>
		<link rel="stylesheet" media="screen and (max-aspect-ratio: 1/1)" href="<?php bloginfo('template_url'); ?>/gallery-style-portrait.css" type="text/css"/>
        <link rel="stylesheet" media="screen and (min-aspect-ratio: 1/1)" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css"/>
        <link rel="stylesheet" media="screen and (max-aspect-ratio: 1/1)" href="<?php bloginfo('template_url'); ?>/style-portrait.css" type="text/css"/>
        <link rel="stylesheet" media="screen and (max-width: 480px)" href="<?php bloginfo('template_url'); ?>/style-phone.css" type="text/css"/>
        <link rel="stylesheet" media="screen and (max-device-width: 320px) and (orientation: portrait)" href="<?php bloginfo('template_url'); ?>/style-phone.css" type="text/css"/>
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/tsb-favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/tsb-touch-114.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/tsb-touch-144.png"/>

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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">

            $(window).load(function(){
                        $(function() {
                            causeRepaintsOn = $("html");
                            $(window).resize(function() {
                                causeRepaintsOn.css("z-index", 10);
                            });
                        });            
                        $( ".multi-pages" ).clone().replaceAll( ".end-divider > hr" );
            });
			
			$(document).ready(function () {
				$('.photo-frame a').css('background-image', function() {
					return 'url(' + this.href + ')';
				});
			});

			$(document).ready(function () {
				$('a[href*=".png"], a[href*=".gif"], a[href*=".jpg"]').addClass('swipebox').attr('rel', 'group');
                
                $('.photo-frame a img').each(function(){
                    var imageCaption = $(this).attr('title');
                    $(this).after('\<div class=\"image-caption\"><span>'+ imageCaption +'</span></div>');
                    $(this).attr('title','');
                });
			});

			jQuery(function($) {
				$(".swipebox").swipebox();
			});

		</script>
        <script src="http://thesundaybe.st/js-global/swipebox/source/jquery.swipebox.js"></script>
        <link rel="stylesheet" href="http://thesundaybe.st/js-global/swipebox/source/swipebox.css" type="text/css"/>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=233465403356739";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<div class="grid">
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
            <div class="gridItem"></div>
        </div>
        