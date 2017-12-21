<?php die(); ?><!doctype html>

<!--[if lt IE 7]><html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js"><!--<![endif]-->

	<head>
		<meta charset="UTF-8" />

				<meta http-equiv="X-UA-Compatible" content="IE=edge">

				<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

				<link rel="icon" href="http://35.196.242.183/wp-content/uploads/2017/12/2000px-Logo-ubuntu_cof-white_orange-hex.svg_.png">
		
		<link rel="pingback" href="https://www.hyperdroid.in/xmlrpc.php">
		
		<title>SSL Certification Using Let&#039;s Encrypt - Hyperdroid</title>

<!-- This site is optimized with the Yoast SEO plugin v6.0 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Let’s Encrypt is a free, automated, and open certificate authority that provides an easy way to obtain and install free TLS/SSL certificates"/>
<link rel="canonical" href="https://www.hyperdroid.in/ssl-certification-using-lets-encrypt/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="SSL Certification Using Let&#039;s Encrypt - Hyperdroid" />
<meta property="og:description" content="Let’s Encrypt is a free, automated, and open certificate authority that provides an easy way to obtain and install free TLS/SSL certificates" />
<meta property="og:url" content="https://www.hyperdroid.in/ssl-certification-using-lets-encrypt/" />
<meta property="og:site_name" content="Hyperdroid" />
<meta property="article:section" content="Web Hosting" />
<meta property="article:published_time" content="2017-12-20T00:57:50+00:00" />
<meta property="article:modified_time" content="2017-12-21T00:52:04+00:00" />
<meta property="og:updated_time" content="2017-12-21T00:52:04+00:00" />
<meta property="og:image" content="https://www.hyperdroid.in/wp-content/uploads/2017/12/le-logo-wide-1-1.png" />
<meta property="og:image:secure_url" content="https://www.hyperdroid.in/wp-content/uploads/2017/12/le-logo-wide-1-1.png" />
<meta property="og:image:width" content="2040" />
<meta property="og:image:height" content="1036" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Let’s Encrypt is a free, automated, and open certificate authority that provides an easy way to obtain and install free TLS/SSL certificates" />
<meta name="twitter:title" content="SSL Certification Using Let&#039;s Encrypt - Hyperdroid" />
<meta name="twitter:site" content="@TheDemon1253" />
<meta name="twitter:image" content="https://www.hyperdroid.in/wp-content/uploads/2017/12/le-logo-wide-1-1.png" />
<meta name="twitter:creator" content="@TheDemon1253" />
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.hyperdroid.in\/","name":"Hyperdroid","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.hyperdroid.in\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"Person","url":"https:\/\/www.hyperdroid.in\/ssl-certification-using-lets-encrypt\/","sameAs":["https:\/\/twitter.com\/TheDemon1253"],"@id":"#person","name":"Kartik Bhalla"}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Hyperdroid &raquo; Feed" href="https://www.hyperdroid.in/feed/" />
<link rel="alternate" type="application/rss+xml" title="Hyperdroid &raquo; Comments Feed" href="https://www.hyperdroid.in/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Hyperdroid &raquo; SSL Certification Using Let&#8217;s Encrypt Comments Feed" href="https://www.hyperdroid.in/ssl-certification-using-lets-encrypt/feed/" />

<!-- This site uses the Google Analytics by MonsterInsights plugin v 6.2.6 - https://www.monsterinsights.com/ -->
<!-- Normally you will find the Google Analytics tracking code here, but the webmaster disabled your user group. -->
<!-- / Google Analytics by MonsterInsights -->

		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.hyperdroid.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.1"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='dashicons-css'  href='https://www.hyperdroid.in/wp-includes/css/dashicons.min.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='https://www.hyperdroid.in/wp-includes/css/admin-bar.min.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='yoast-seo-adminbar-css'  href='https://www.hyperdroid.in/wp-content/plugins/wordpress-seo/css/dist/adminbar-600.min.css?ver=6.0' type='text/css' media='all' />
<link rel='stylesheet' id='BIGPIX-scroll-style-css'  href='https://www.hyperdroid.in/wp-content/themes/big-pix/library/css/jquery.mCustomScrollbar.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='BIGPIX-font-css'  href='https://www.hyperdroid.in/wp-content/themes/big-pix/css/font-awesome.min.css?ver=4.9.1' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='BIGPIX-ie-only-css'  href='https://www.hyperdroid.in/wp-content/themes/big-pix/library/css/ie.css?ver=4.9.1' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='BIGPIX-raleway-fonts-css'  href='https://www.hyperdroid.in/wp-content/themes/big-pix/fonts/fonts.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='BIGPIX-stylesheet-css'  href='https://www.hyperdroid.in/wp-content/themes/big-pix/library/css/style.min.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='BIGPIX-main-stylesheet-css'  href='https://www.hyperdroid.in/wp-content/themes/big-pix/style.css?ver=4.9.1' type='text/css' media='all' />
<script type='text/javascript' src='https://www.hyperdroid.in/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://www.hyperdroid.in/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://www.hyperdroid.in/wp-content/themes/big-pix/library/js/libs/modernizr.custom.min.js?ver=2.5.3'></script>
<link rel='https://api.w.org/' href='https://www.hyperdroid.in/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.hyperdroid.in/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.hyperdroid.in/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.1" />
<link rel='shortlink' href='https://www.hyperdroid.in/?p=201' />
<link rel="alternate" type="application/json+oembed" href="https://www.hyperdroid.in/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.hyperdroid.in/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F&#038;format=xml" />
  <style>
      .blog-list .item .hover-ovelay:hover{background: #0a0a0a!important;}
      body .pagination li a{color: #0a0a0a;}
      #main-navigation,.full-top-area,footer.footer[role="contentinfo"]{background: #0a0a0a; }
    </style>
         <style>
      .blog-list li .excerpt p,.blog-list .item a,.blog-list .item .date,.blog-list .item time,body .byline.blog,
      .entry-content p,body .byline.blog a,body .info p.author-desc, body .related ul li .related-info p,body .comment time a,body .comment_content p,footer.footer[role="contentinfo"] .wp-caption p.wp-caption-text{color:#4f4f4f;}
      body .pagination li:first-child{border-left: 2px solid #4f4f4f; }
      body .pagination li{border: 2px solid #4f4f4f;}
    </style>

           <style>
      .short-divider,body .pagination,body .divider-posted,.blue-btn, .comment-reply-link, #submit,#main-navigation .widget #wp-calendar caption, #main-navigation .wp-caption, #main-navigation button, html #main-navigation input[type="button"], #main-navigation input[type="reset"], #main-navigation input[type="submit"]
      ,.error404 .searchform input[type="submit"],.footer-widgets .widget #wp-calendar caption,.wp-caption,#main-navigation div#close{background:#ff2121; }
      .blog-list li .excerpt p a,.blog-list .item a[rel="author"],body .info p.author-desc a,body .related ul li a
      ,body .comment-reply-link,.blog-list .item h2:hover,#main-navigation .widgettitle,.social-icons a .fa:hover,footer.footer[role="contentinfo"] a:hover,.entry-content p a,#main-navigation a:hover,.no-menu-widgets p{color:#ff2121;}
      .entry-content blockquote{border-left: 3px solid #ff2121;}
    </style>

       <style>#main-navigation{top: 30px!important;}</style>
    <style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
	</head>

	<body class="post-template-default single single-post postid-201 single-format-standard logged-in admin-bar no-customize-support" >

		<div id="container">

			<header class="header" role="banner">
				<div id="inner-header" class="wrap cf">
										<p id="logo" class="h1"><a href="https://www.hyperdroid.in/" rel="nofollow" style="width:300px;margin:0 auto;display:block;"><img src="http://35.196.242.183/wp-content/uploads/2017/12/Untitled-1.png" alt="Hyperdroid" /></a></p>
					 					<div id="main-navigation">
			            <div id="close"><span class="fa fa-times"></span> Close</div>
			            <div class="clear"></div>
			            <!-- social icons -->
				        <div class="social-icons">
				                   <a href="https://twitter.com/TheDemon1253" class="social-tw" title="https://twitter.com/TheDemon1253" target="_blank"><i class="fa fa-twitter"></i></a>
             <a href="https://plus.google.com/+KartikBhalla" class="social-tw" title="https://plus.google.com/+KartikBhalla" target="_blank"><i class="fa fa-google-plus"></i></a>
             <a href="https://www.youtube.com/channel/UCS3TDkQidab81sW_pWbDjsg" class="social-tw" title="https://www.youtube.com/channel/UCS3TDkQidab81sW_pWbDjsg" target="_blank"><i class="fa fa-youtube"></i></a>
              <a href="mailto:kartikbhalla12@gmail.com" class="social-tw" title="kartikbhalla12@gmail.com" target="_blank"><i class="fa fa-envelope"></i> </i></a>
  	                	</div>
	                	<!-- social icons -->

			            
						<div id="search-3" class="widget widget_search"><form role="search" method="get" id="searchform" class="searchform" action="https://www.hyperdroid.in/">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form></div>		<div id="recent-posts-3" class="widget widget_recent_entries">		<h4 class="widgettitle">Recent Posts</h4>		<ul>
											<li>
					<a href="https://www.hyperdroid.in/ssl-certification-using-lets-encrypt/">SSL Certification Using Let&#8217;s Encrypt</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/">Ubuntu 17.10 Desktop Installation</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/hosting-multiple-websites-on-ubuntu/">Hosting Multiple Websites On Ubuntu</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/installing-wordpress-on-ubuntu/">Installing WordPress On Ubuntu</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/installing-h5ai-on-your-web-server/">Installing h5ai on Your Web Server</a>
									</li>
					</ul>
		</div><div id="recent-comments-3" class="widget widget_recent_comments"><h4 class="widgettitle">Recent Comments</h4><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link"><a href='https://www.hyperdroid.in/ssl-certification-using-lets-encrypt/' rel='external nofollow' class='url'>SSL Certification Using Let&#039;s Encrypt - Hyperdroid</a></span> on <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/#comment-11">Ubuntu 17.10 Desktop Installation</a></li><li class="recentcomments"><span class="comment-author-link">Sushant</span> on <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/#comment-10">Ubuntu 17.10 Desktop Installation</a></li><li class="recentcomments"><span class="comment-author-link">Jagrav</span> on <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/#comment-9">Ubuntu 17.10 Desktop Installation</a></li><li class="recentcomments"><span class="comment-author-link"><a href='http://akhilnarang.me' rel='external nofollow' class='url'>Akhil Narang</a></span> on <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/#comment-8">Ubuntu 17.10 Desktop Installation</a></li><li class="recentcomments"><span class="comment-author-link"><a href='http://www.hyperdroid.in' rel='external nofollow' class='url'>Kartik B.</a></span> on <a href="https://www.hyperdroid.in/installing-h5ai-on-your-web-server/#comment-5">Installing h5ai on Your Web Server</a></li></ul></div><div id="archives-3" class="widget widget_archive"><h4 class="widgettitle">Archives</h4>		<ul>
			<li><a href='https://www.hyperdroid.in/2017/12/'>December 2017</a></li>
		</ul>
		</div><div id="categories-3" class="widget widget_categories"><h4 class="widgettitle">Categories</h4>		<ul>
	<li class="cat-item cat-item-5"><a href="https://www.hyperdroid.in/category/linux-basics/" >Linux Basics</a>
</li>
	<li class="cat-item cat-item-3"><a href="https://www.hyperdroid.in/category/web-hosting/" >Web Hosting</a>
</li>
		</ul>
</div><div id="meta-3" class="widget widget_meta"><h4 class="widgettitle">Meta</h4>			<ul>
			<li><a rel="nofollow" href="https://www.hyperdroid.in/wp-admin/">Site Admin</a></li>			<li><a rel="nofollow" href="https://www.hyperdroid.in/wp-login.php?action=logout&#038;_wpnonce=4a9fa29ac1">Log out</a></li>
			<li><a href="https://www.hyperdroid.in/feed/">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="https://www.hyperdroid.in/comments/feed/">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>			</ul>
			</div>
												<div class="margin-bottom"></div>
        			</div>
					<div class="side-nav" id="push"><span class="fa fa-bars"></span></div>

				</div>

			</header>
			<div id="content">
				
				<div id="inner-content" class=" cf">

						
													<header class="article-header full-top-area" style="background-image:url('https://www.hyperdroid.in/wp-content/uploads/2017/12/le-logo-wide-1-1.png');background-size:cover;background-position:center;position:relative;">
						
						
								<div class="bg-overlay"></div>
								<div class="table">
									<div class="table-cell">
										<h1 class="entry-title single-title" itemprop="headline">SSL Certification Using Let&#8217;s Encrypt</h1>
										<div class="short-divider"></div>
										<a class="arrow fa fa-angle-down" href="#blog"></a>
									</div>
								</div>
							</header> 						
						<div id="blog" class="divider-posted">
						<p class="byline vcard blog">
		                    Posted on <time class="updated" datetime="2017-12-20" pubdate>December 20, 2017</time> by <span class="author"><a href="https://www.hyperdroid.in" title="Visit Kartik B.&#8217;s website" rel="author external">Kartik B.</a></span>		                    under <a href="https://www.hyperdroid.in/category/web-hosting/" rel="category tag">Web Hosting</a>                		</p>

                		</div>
						<div id="inner-content" class="wrap cf post-content-single">

													
							<article id="post-201" class="cf post-201 post type-post status-publish format-standard has-post-thumbnail hentry category-web-hosting" role="article">
								<section class="entry-content cf" itemprop="articleBody">
  
  <blockquote>
<p style="text-align: center; padding-left: 30px;"><span style="color: #000000;"><strong>Let’s Encrypt</strong> is a free, automated, and open certificate authority that provides an easy way to obtain and install <strong>free TLS/SSL certificates</strong>, thereby enabling encrypted <strong>HTTPS</strong> on web servers. It simplifies the process by providing a software client, <strong>Certbot</strong>, that attempts to automate most (if not all) of the required steps. In this tutorial, you will use <strong>Certbot</strong> to obtain a free SSL certificate for <strong>Apache2 on Ubuntu 17.10</strong> and set up your certificate to renew automatically.</span></p>
</blockquote>
<h2 id="prerequisites" style="text-align: center;"><strong><span style="color: #000000;">PREREQUISITES</span></strong></h2>
<p style="text-align: center;"><span style="color: #000000;">To follow this tutorial, you will need:</span></p>
<ul>
<li style="text-align: center;"><span style="color: #000000;">Ubuntu 17.10 server set up by following this <a style="color: #000000;" href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/">how to install Ubuntu 17.10</a> tutorial</span></li>
<li style="text-align: center;"><span style="color: #000000;">A fully registered domain name. We will use <strong><code style="font-size: 16px;">example123.ga</code></strong> as a domain in this tutorial.</span></li>
<li style="text-align: center;"><span style="color: #000000;">Both of the following DNS records set up for your server.</span></li>
<li style="text-align: center;"><span style="color: #000000;">An<strong> A record</strong> with <code style="font-size: 16px;"><span class="highlight">example123.ga</span></code> pointing to your server&#8217;s public IP address.</span></li>
<li style="text-align: center;"><span style="color: #000000;">An <strong>A record</strong> with <code style="font-size: 16px;">www.<span class="highlight">example123.ga</span></code> pointing to your server&#8217;s public IP address.</span></li>
<li style="text-align: center;"><span style="color: #000000;">Apache should be installed on the web server . You can follow <a style="background-color: #ffffff; color: #000000;" href="https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-16-04">How To Install LAMP on Ubuntu 17.10</a>.in case you haven&#8217;t.</span></li>
</ul>
<div style="text-align: center;" data-unique="step-1-—-installing-certbot"><span style="color: #000000;"> .</span></div>
<h2 id="step-1-—-installing-certbot" style="text-align: center;"><strong><span style="color: #000000;">STEP 1 — INSTALLING CERTBOT</span></strong></h2>
<p style="text-align: center;"><span style="color: #000000;">On Ubuntu systems, the Certbot team maintains a<strong> <a style="color: #000000;" href="https://help.ubuntu.com/community/PPA">PPA</a>.</strong> Once you add it to your list of repositories all you&#8217;ll need to do is apt-get the following packages.</span></p>
<pre style="text-align: center;"><span style="font-family: 'courier new', courier, monospace;">sudo apt-get install software-properties-common
sudo add-apt-repository ppa:certbot/certbot
</span></pre>
<p style="text-align: center;"><span style="color: #000000;">You&#8217;ll need to press <strong><code>ENTER</code> </strong>to accept. Then, update the package list to pick up the new repository&#8217;s package information.</span></p>
<pre style="text-align: center;"><span style="font-family: 'courier new', courier, monospace;">sudo apt-get update
</span></pre>
<p style="text-align: center;"><span style="color: #000000;">And finally, install <strong>Certbot&#8217;s Apache package</strong> with :</span></p>
<pre style="text-align: center;"><span style="font-family: 'courier new', courier, monospace;">sudo apt-get install python-certbot-apache</span></pre>
<h2 id="step-1-—-installing-certbot" style="text-align: center;"><strong><span style="color: #000000;">STEP 3 — RUNNING PLUGIN</span></strong></h2>
<p style="text-align: center;"><span style="color: #000000;">Certbot has a fairly solid beta-quality Apache plugin, which is supported on many platforms, and automates both obtaining and installing certs</span></p>
<pre style="text-align: center;"><span style="font-family: 'courier new', courier, monospace;">sudo certbot --apache
</span></pre>
<p style="text-align: center;"><span style="color: #000000;">Running this command will get you a certificate by filling the info like email id, domain, name, etc. as follows: </span></p>
<pre style="text-align: center;"><span style="font-family: 'courier new', courier, monospace;">Saving debug log to /var/log/letsencrypt/letsencrypt.log</span>
<span style="font-family: 'courier new', courier, monospace;">Plugins selected: Authenticator apache, Installer apache</span>
<span style="font-family: 'courier new', courier, monospace;">Enter email address (used for urgent renewal and security notices) (Enter 'c' to</span>
<span style="font-family: 'courier new', courier, monospace;">cancel): <strong>admin@hyperdroid.com</strong></span>
<span style="font-family: 'courier new', courier, monospace;">Starting new HTTPS connection (1): acme-v01.api.letsencrypt.org</span>

<span style="font-family: 'courier new', courier, monospace;">-------------------------------------------------------------------------------</span>
<span style="font-family: 'courier new', courier, monospace;">Please read the Terms of Service at</span>
<span style="font-family: 'courier new', courier, monospace;">https://letsencrypt.org/documents/LE-SA-v1.2-November-15-2017.pdf. You must</span>
<span style="font-family: 'courier new', courier, monospace;">agree in order to register with the ACME server at</span>
<span style="font-family: 'courier new', courier, monospace;">https://acme-v01.api.letsencrypt.org/directory</span>
<span style="font-family: 'courier new', courier, monospace;">-------------------------------------------------------------------------------</span>
<span style="font-family: 'courier new', courier, monospace;">(A)gree/(C)ancel:<strong> A</strong></span>

<span style="font-family: 'courier new', courier, monospace;">-------------------------------------------------------------------------------</span>
<span style="font-family: 'courier new', courier, monospace;">Would you be willing to share your email address with the Electronic Frontier</span>
<span style="font-family: 'courier new', courier, monospace;">Foundation, a founding partner of the Let's Encrypt project and the non-profit</span>
<span style="font-family: 'courier new', courier, monospace;">organization that develops Certbot? We'd like to send you email about EFF and</span>
<span style="font-family: 'courier new', courier, monospace;">our work to encrypt the web, protect its users and defend digital rights.</span>
<span style="font-family: 'courier new', courier, monospace;">-------------------------------------------------------------------------------</span>
<span style="font-family: 'courier new', courier, monospace;">(Y)es/(N)o:<strong> N</strong></span>
<span style="font-family: 'courier new', courier, monospace;">No names were found in your configuration files. Please enter in your domain</span>
<span style="font-family: 'courier new', courier, monospace;">name(s) (comma and/or space separated) (Enter 'c' to cancel): example123.ga </span>
<span style="font-family: 'courier new', courier, monospace;">Obtaining a new certificate</span>
<span style="font-family: 'courier new', courier, monospace;">Performing the following challenges:</span>
<span style="font-family: 'courier new', courier, monospace;">tls-sni-01 challenge for example123.ga</span>
<span style="font-family: 'courier new', courier, monospace;">Enabled Apache socache_shmcb module</span>
<span style="font-family: 'courier new', courier, monospace;">Enabled Apache ssl module</span>
<span style="font-family: 'courier new', courier, monospace;">Waiting for verification...</span>
<span style="font-family: 'courier new', courier, monospace;">Cleaning up challenges</span>
<span style="font-family: 'courier new', courier, monospace;">Created an SSL vhost at /etc/apache2/sites-available/000-default-le-ssl.conf</span>
<span style="font-family: 'courier new', courier, monospace;">Enabled Apache socache_shmcb module</span>
<span style="font-family: 'courier new', courier, monospace;">Enabled Apache ssl module</span>
<span style="font-family: 'courier new', courier, monospace;">Deploying Certificate for example123.ga to VirtualHost /etc/apache2/sites-available/000-default-le-ssl.conf</span>
<span style="font-family: 'courier new', courier, monospace;">Enabling available site: /etc/apache2/sites-available/000-default-le-ssl.conf</span>

<span style="font-family: 'courier new', courier, monospace;">Please choose whether or not to redirect HTTP traffic to HTTPS, removing HTTP access.</span>
<span style="font-family: 'courier new', courier, monospace;">-------------------------------------------------------------------------------</span>
<span style="font-family: 'courier new', courier, monospace;">1: No redirect - Make no further changes to the webserver configuration.</span>
<span style="font-family: 'courier new', courier, monospace;">2: Redirect - Make all requests redirect to secure HTTPS access. Choose this for</span>
<span style="font-family: 'courier new', courier, monospace;">new sites, or if you're confident your site works on HTTPS. You can undo this</span>
<span style="font-family: 'courier new', courier, monospace;">change by editing your web server's configuration.</span>
<span style="font-family: 'courier new', courier, monospace;">-------------------------------------------------------------------------------</span>
<span style="font-family: 'courier new', courier, monospace;">Select the appropriate number [1-2] then [enter] (press 'c' to cancel):<strong> 2</strong></span>
<span style="font-family: 'courier new', courier, monospace;">Enabled Apache rewrite module</span>
<span style="font-family: 'courier new', courier, monospace;">Redirecting vhost in /etc/apache2/sites-enabled/000-default.conf to ssl vhost in /etc/apache2/sites-available/000-default-le-ssl.conf</span>

<span style="font-family: 'courier new', courier, monospace;">-------------------------------------------------------------------------------</span>
<span style="font-family: 'courier new', courier, monospace;">Congratulations! You have successfully enabled https://example123.ga</span>

<span style="font-family: 'courier new', courier, monospace;">You should test your configuration at:</span>
<span style="font-family: 'courier new', courier, monospace;">https://www.ssllabs.com/ssltest/analyze.html?d=example123.ga</span>
<span style="font-family: 'courier new', courier, monospace;">-------------------------------------------------------------------------------</span>

<span style="font-family: 'courier new', courier, monospace;">IMPORTANT NOTES:</span>
<span style="font-family: 'courier new', courier, monospace;"> - Congratulations! Your certificate and chain have been saved at:</span>
<span style="font-family: 'courier new', courier, monospace;"> /etc/letsencrypt/live/example123.ga/fullchain.pem</span>
<span style="font-family: 'courier new', courier, monospace;"> Your key file has been saved at:</span>
<span style="font-family: 'courier new', courier, monospace;"> /etc/letsencrypt/live/example123.ga/privkey.pem</span>
<span style="font-family: 'courier new', courier, monospace;"> Your cert will expire on 2018-03-19. To obtain a new or tweaked</span>
<span style="font-family: 'courier new', courier, monospace;"> version of this certificate in the future, simply run certbot again</span>
<span style="font-family: 'courier new', courier, monospace;"> with the "certonly" option. To non-interactively renew *all* of</span>
<span style="font-family: 'courier new', courier, monospace;"> your certificates, run "certbot renew"</span>
<span style="font-family: 'courier new', courier, monospace;"> - If you like Certbot, please consider supporting our work by:</span>

<span style="font-family: 'courier new', courier, monospace;">Donating to ISRG / Let's Encrypt: https://letsencrypt.org/donate</span>
<span style="font-family: 'courier new', courier, monospace;"> Donating to EFF: https://eff.org/donate-le</span>

</pre>
<h2 id="step-1-—-installing-certbot" style="text-align: center;"><span style="color: #000000;"><span style="color: #000000;"><b>STEP 3 — VERIFYING </b></span></span></h2>
<p style="text-align: center;"><span style="color: #000000;">Open the webpage on the browser and you will notice that website redirects itself to <strong>https</strong> and shows<strong> secured</strong></span></p>
<h2><img class="alignnone size-medium" src="https://github.com/TheDemon12/hyperdroid-media/raw/master/ssl/0.png" width="1360" height="269" /></h2>
<h2 id="step-1-—-installing-certbot" style="text-align: center;"><strong><span style="color: #000000;">STEP 4 — AUTOMATING RENEWAL</span></strong></h2>
<p style="text-align: center;"><span style="color: #000000;">The Certbot packages on your system come with a cron job that will renew your certificates automatically before they expire. Since Let&#8217;s Encrypt certificates last for <strong>90 days</strong>, it&#8217;s highly advisable to take advantage of this feature. You can test automatic renewal for your certificates by running this command:</span></p>
<pre style="text-align: center;"><span style="font-family: 'courier new', courier, monospace;">sudo certbot renew --dry-run</span>
</pre>
</section> 
								
				                
				                <!-- next/prev posts area -->
								<div class="next-prev-post">
									<div class="prev">
										<span>PREVIOUS POST</span> &larr; <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/" rel="prev">Ubuntu 17.10 Desktop Installation</a>									</div>
									<div class="next">
																			</div>
									<div class="clear"></div>
								</div> <!-- next-prev-post -->

				                <footer class="article-footer ">
				                  <div class="avatar">
				                  	<img alt='' src='https://secure.gravatar.com/avatar/98767f2f56c91ee425e994ce6e737940?s=150&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/98767f2f56c91ee425e994ce6e737940?s=300&#038;d=identicon&#038;r=g 2x' class='avatar avatar-150 photo' height='150' width='150' />				                  </div>
				                  <div class="info">
					                  <p class="author"><span>Written by</span> Kartik B.</p>
					                  <p class="author-desc">  </p>
				                  </div>
				                  <div class="clear"></div>
				                </footer> 
				                				                    					                    <div class="related posts related-hide">
						                    <h3>Related Posts</h3>
						                    <ul> 
							                    							                    
						                            <li>
						                              <div class="related-image">
							                              <a href="https://www.hyperdroid.in/hosting-multiple-websites-on-ubuntu/" rel="bookmark" title="Hosting Multiple Websites On Ubuntu">
							                                							                                
							                                <img src="https://www.hyperdroid.in/wp-content/uploads/2017/12/Ubuntu-Wallpapers-12.jpg" class="attachment-BIGPIX-thumb-image-300by300 size-BIGPIX-thumb-image-300by300 wp-post-image" alt="" />							                              </a>
						                              </div>

						                              <div class="related-info">
						                                  <h3>Hosting Multiple Websites On Ubuntu</h3>
						                                  <p>The Apache web server is the most popular way of serving web content on the internet. It accounts for more than half of all active websites on the internet and is extremely powerful and flexible. These designations allow the administrator to use one server to host multiple domains or sites off of a single interface&#8230;  <a class="excerpt-read-more" href="https://www.hyperdroid.in/hosting-multiple-websites-on-ubuntu/" title="Read Hosting Multiple Websites On Ubuntu">Read more &raquo;</a></p>
						                                  <p class="byline vcard">
						                                      Posted on <time class="updated" datetime="2017-12-16" pubdate>December 16, 2017</time> by <a href="https://www.hyperdroid.in/author/thedemon12/" title="Posts by Kartik B." rel="author">Kartik B.</a>						                                    
						                                  </p>
						                              </div>
						                               
						                            </li>
							                    
							                    							                    
						                            <li>
						                              <div class="related-image">
							                              <a href="https://www.hyperdroid.in/installing-wordpress-on-ubuntu/" rel="bookmark" title="Installing WordPress On Ubuntu">
							                                							                                
							                                <img src="https://www.hyperdroid.in/wp-content/uploads/2017/12/featured-1.png" class="attachment-BIGPIX-thumb-image-300by300 size-BIGPIX-thumb-image-300by300 wp-post-image" alt="" />							                              </a>
						                              </div>

						                              <div class="related-info">
						                                  <h3>Installing WordPress On Ubuntu</h3>
						                                  <p>At this time, WordPress is the most popular CMS (content management system) on the internet. It allows you to easily set up flexible blogs and websites on top of a MySQL backend with PHP processing. WordPress has seen incredible adoption and is a great choice for getting a website up and running quickly. In this&#8230;  <a class="excerpt-read-more" href="https://www.hyperdroid.in/installing-wordpress-on-ubuntu/" title="Read Installing WordPress On Ubuntu">Read more &raquo;</a></p>
						                                  <p class="byline vcard">
						                                      Posted on <time class="updated" datetime="2017-12-6" pubdate>December 6, 2017</time> by <a href="https://www.hyperdroid.in/author/thedemon12/" title="Posts by Kartik B." rel="author">Kartik B.</a>						                                    
						                                  </p>
						                              </div>
						                               
						                            </li>
							                    
							                    							                    
						                            <li>
						                              <div class="related-image">
							                              <a href="https://www.hyperdroid.in/installing-h5ai-on-your-web-server/" rel="bookmark" title="Installing h5ai on Your Web Server">
							                                							                                
							                                <img src="https://www.hyperdroid.in/wp-content/uploads/2017/12/featured.png" class="attachment-BIGPIX-thumb-image-300by300 size-BIGPIX-thumb-image-300by300 wp-post-image" alt="" />							                              </a>
						                              </div>

						                              <div class="related-info">
						                                  <h3>Installing h5ai on Your Web Server</h3>
						                                  <p>h5ai is a modern file indexer for HTTP web servers with focus on your files. Directories are displayed in an appealing way and browsing them is enhanced by different views, a breadcrumb and a tree overview. PREREQUISITES Before you begin this guide, there are some important steps that you need to complete on your server&#8230;.  <a class="excerpt-read-more" href="https://www.hyperdroid.in/installing-h5ai-on-your-web-server/" title="Read Installing h5ai on Your Web Server">Read more &raquo;</a></p>
						                                  <p class="byline vcard">
						                                      Posted on <time class="updated" datetime="2017-12-2" pubdate>December 2, 2017</time> by <a href="https://www.hyperdroid.in/author/thedemon12/" title="Posts by Kartik B." rel="author">Kartik B.</a>						                                    
						                                  </p>
						                              </div>
						                               
						                            </li>
							                    
							                    							                    
						                            <li>
						                              <div class="related-image">
							                              <a href="https://www.hyperdroid.in/how-to-install-lamp-on-ubuntu/" rel="bookmark" title="How To Install LAMP (Apache2) on Ubuntu">
							                                							                                
							                                <img src="https://www.hyperdroid.in/wp-content/uploads/2017/12/featured.jpg" class="attachment-BIGPIX-thumb-image-300by300 size-BIGPIX-thumb-image-300by300 wp-post-image" alt="" />							                              </a>
						                              </div>

						                              <div class="related-info">
						                                  <h3>How To Install LAMP (Apache2) on Ubuntu</h3>
						                                  <p>This brief tutorial is going to show you steps to install LAMP on Ubuntu server 17.04 / 17.10 and older. LAMP is an acronym for Linux, Apache2, MySQL and PHP. It’s a combination of open software that are typically used to host and run dynamic websites and web applications. PREREQUISITES To setup web server on your own Linux computer,&#8230;  <a class="excerpt-read-more" href="https://www.hyperdroid.in/how-to-install-lamp-on-ubuntu/" title="Read How To Install LAMP (Apache2) on Ubuntu">Read more &raquo;</a></p>
						                                  <p class="byline vcard">
						                                      Posted on <time class="updated" datetime="2017-12-1" pubdate>December 1, 2017</time> by <a href="https://www.hyperdroid.in/author/thedemon12/" title="Posts by Kartik B." rel="author">Kartik B.</a>						                                    
						                                  </p>
						                              </div>
						                               
						                            </li>
							                    
							                    							                    <div class="clear"></div>
						                      </ul>

					                     </div>
				                                   

               				

  
  	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/ssl-certification-using-lets-encrypt/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="https://www.hyperdroid.in/wp-comments-post.php" method="post" id="commentform" class="comment-form">
				<p class="logged-in-as"><a href="https://www.hyperdroid.in/wp-admin/profile.php" aria-label="Logged in as Kartik B.. Edit your profile.">Logged in as Kartik B.</a>. <a href="https://www.hyperdroid.in/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F&amp;_wpnonce=4a9fa29ac1">Log out?</a></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='201' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="25df647647" /><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
			</form>
			</div><!-- #respond -->
	
         					</article> 						
						
					</div>
					

					<!--<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

	
		<div id="search-3" class="widget widget_search"><form role="search" method="get" id="searchform" class="searchform" action="https://www.hyperdroid.in/">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form></div>		<div id="recent-posts-3" class="widget widget_recent_entries">		<h4 class="widgettitle">Recent Posts</h4>		<ul>
											<li>
					<a href="https://www.hyperdroid.in/ssl-certification-using-lets-encrypt/">SSL Certification Using Let&#8217;s Encrypt</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/">Ubuntu 17.10 Desktop Installation</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/hosting-multiple-websites-on-ubuntu/">Hosting Multiple Websites On Ubuntu</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/installing-wordpress-on-ubuntu/">Installing WordPress On Ubuntu</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/installing-h5ai-on-your-web-server/">Installing h5ai on Your Web Server</a>
									</li>
					</ul>
		</div><div id="recent-comments-3" class="widget widget_recent_comments"><h4 class="widgettitle">Recent Comments</h4><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link"><a href='https://www.hyperdroid.in/ssl-certification-using-lets-encrypt/' rel='external nofollow' class='url'>SSL Certification Using Let&#039;s Encrypt - Hyperdroid</a></span> on <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/#comment-11">Ubuntu 17.10 Desktop Installation</a></li><li class="recentcomments"><span class="comment-author-link">Sushant</span> on <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/#comment-10">Ubuntu 17.10 Desktop Installation</a></li><li class="recentcomments"><span class="comment-author-link">Jagrav</span> on <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/#comment-9">Ubuntu 17.10 Desktop Installation</a></li><li class="recentcomments"><span class="comment-author-link"><a href='http://akhilnarang.me' rel='external nofollow' class='url'>Akhil Narang</a></span> on <a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/#comment-8">Ubuntu 17.10 Desktop Installation</a></li><li class="recentcomments"><span class="comment-author-link"><a href='http://www.hyperdroid.in' rel='external nofollow' class='url'>Kartik B.</a></span> on <a href="https://www.hyperdroid.in/installing-h5ai-on-your-web-server/#comment-5">Installing h5ai on Your Web Server</a></li></ul></div><div id="archives-3" class="widget widget_archive"><h4 class="widgettitle">Archives</h4>		<ul>
			<li><a href='https://www.hyperdroid.in/2017/12/'>December 2017</a></li>
		</ul>
		</div><div id="categories-3" class="widget widget_categories"><h4 class="widgettitle">Categories</h4>		<ul>
	<li class="cat-item cat-item-5"><a href="https://www.hyperdroid.in/category/linux-basics/" >Linux Basics</a>
</li>
	<li class="cat-item cat-item-3"><a href="https://www.hyperdroid.in/category/web-hosting/" >Web Hosting</a>
</li>
		</ul>
</div><div id="meta-3" class="widget widget_meta"><h4 class="widgettitle">Meta</h4>			<ul>
			<li><a rel="nofollow" href="https://www.hyperdroid.in/wp-admin/">Site Admin</a></li>			<li><a rel="nofollow" href="https://www.hyperdroid.in/wp-login.php?action=logout&#038;_wpnonce=4a9fa29ac1">Log out</a></li>
			<li><a href="https://www.hyperdroid.in/feed/">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="https://www.hyperdroid.in/comments/feed/">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>			</ul>
			</div>
	
</div>-->

				</div>

			</div>

			<footer class="footer" role="contentinfo">
									<div class="footer-widgets wrap">

						<div id="categories-6" class="widget widget_categories"><h4 class="widgettitle">Categories</h4>		<ul>
	<li class="cat-item cat-item-5"><a href="https://www.hyperdroid.in/category/linux-basics/" >Linux Basics</a>
</li>
	<li class="cat-item cat-item-3"><a href="https://www.hyperdroid.in/category/web-hosting/" >Web Hosting</a>
</li>
		</ul>
</div>		<div id="recent-posts-6" class="widget widget_recent_entries">		<h4 class="widgettitle">Recent Posts</h4>		<ul>
											<li>
					<a href="https://www.hyperdroid.in/ssl-certification-using-lets-encrypt/">SSL Certification Using Let&#8217;s Encrypt</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/ubuntu-17-10-desktop-installation/">Ubuntu 17.10 Desktop Installation</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/hosting-multiple-websites-on-ubuntu/">Hosting Multiple Websites On Ubuntu</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/installing-wordpress-on-ubuntu/">Installing WordPress On Ubuntu</a>
									</li>
											<li>
					<a href="https://www.hyperdroid.in/installing-h5ai-on-your-web-server/">Installing h5ai on Your Web Server</a>
									</li>
					</ul>
		</div>		
					<div class="clear"></div>
					</div>
								<div id="inner-footer" class="wrap cf">

					<div class="social-icons footer-social">
		           			       <a href="https://twitter.com/TheDemon1253" class="social-tw" title="https://twitter.com/TheDemon1253" target="_blank"><i class="fa fa-twitter"></i></a>
             <a href="https://plus.google.com/+KartikBhalla" class="social-tw" title="https://plus.google.com/+KartikBhalla" target="_blank"><i class="fa fa-google-plus"></i></a>
             <a href="https://www.youtube.com/channel/UCS3TDkQidab81sW_pWbDjsg" class="social-tw" title="https://www.youtube.com/channel/UCS3TDkQidab81sW_pWbDjsg" target="_blank"><i class="fa fa-youtube"></i></a>
              <a href="mailto:kartikbhalla12@gmail.com" class="social-tw" title="kartikbhalla12@gmail.com" target="_blank"><i class="fa fa-envelope"></i> </i></a>
                  	</div> <!-- social-icons-->

					<p class="source-org copyright">
						 &#169; 2017 Hyperdroid 
						
					</p>

				</div>

			</footer>

		</div>

		<script type='text/javascript' src='https://www.hyperdroid.in/wp-includes/js/admin-bar.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='https://www.hyperdroid.in/wp-includes/js/comment-reply.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='https://www.hyperdroid.in/wp-content/themes/big-pix/library/js/jquery.mCustomScrollbar.concat.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='https://www.hyperdroid.in/wp-content/themes/big-pix/library/js/scripts.js?ver=4.9.1'></script>
<script type='text/javascript' src='https://www.hyperdroid.in/wp-includes/js/wp-embed.min.js?ver=4.9.1'></script>
	<!--[if lte IE 8]>
		<script type="text/javascript">
			document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
		</script>
	<![endif]-->
	<!--[if gte IE 9]><!-->
		<script type="text/javascript">
			(function() {
				var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

						request = true;
		
				b[c] = b[c].replace( rcs, ' ' );
				// The customizer requires postMessage and CORS (if the site is cross domain)
				b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
			}());
		</script>
	<!--<![endif]-->
			<div id="wpadminbar" class="nojq nojs">
							<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://www.hyperdroid.in/wp-admin/about.php"><span class="ab-icon"></span><span class="screen-reader-text">About WordPress</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/about.php">About WordPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item" href="https://wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item" href="https://codex.wordpress.org/">Documentation</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://wordpress.org/support/">Support Forums</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item" href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://www.hyperdroid.in/wp-admin/">Hyperdroid</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/">Dashboard</a>		</li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu">
		<li id="wp-admin-bar-themes"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/themes.php">Themes</a>		</li>
		<li id="wp-admin-bar-widgets"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/widgets.php">Widgets</a>		</li>
		<li id="wp-admin-bar-menus"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/nav-menus.php">Menus</a>		</li>
		<li id="wp-admin-bar-background" class="hide-if-customize"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/themes.php?page=custom-background">Background</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/customize.php?url=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F">Customize</a>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/edit-comments.php"><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text">0 comments awaiting moderation</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://www.hyperdroid.in/wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/user-new.php">User</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-edit"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/post.php?post=201&#038;action=edit">Edit Post</a>		</li>
		<li id="wp-admin-bar-wpseo-menu" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://www.hyperdroid.in/wp-admin/admin.php?page=wpseo_dashboard"><div id="yoast-ab-icon" class="ab-item yoast-logo svg"><span class="screen-reader-text">SEO</span></div><div class="wpseo-score-icon adminbar-seo-score good"><span class="adminbar-seo-score-text screen-reader-text"></span></div></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-menu-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-configuration-wizard"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/admin.php?page=wpseo_configurator">Configuration Wizard</a>		</li>
		<li id="wp-admin-bar-wpseo-kwresearch" class="menupop"><div class="ab-item ab-empty-item" tabindex="0" aria-haspopup="true">Keyword Research</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-kwresearch-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-adwordsexternal"><a class="ab-item" href="https://adwords.google.com/keywordplanner" target="_blank">AdWords External</a>		</li>
		<li id="wp-admin-bar-wpseo-googleinsights"><a class="ab-item" href="https://www.google.com/trends/explore#q=SSL" target="_blank">Google Trends</a>		</li>
		<li id="wp-admin-bar-wpseo-wordtracker"><a class="ab-item" href="http://tools.seobook.com/keyword-tools/seobook/?keyword=SSL" target="_blank">SEO Book</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-wpseo-analysis" class="menupop"><div class="ab-item ab-empty-item" tabindex="0" aria-haspopup="true">Analyze this page</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-analysis-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-inlinks-ose"><a class="ab-item" href="//moz.com/researchtools/ose/links?site=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Check Inlinks (OSE)</a>		</li>
		<li id="wp-admin-bar-wpseo-kwdensity"><a class="ab-item" href="http://www.zippy.co.uk/keyworddensity/index.php?url=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F&#038;keyword=SSL" target="_blank">Check Keyword Density</a>		</li>
		<li id="wp-admin-bar-wpseo-cache"><a class="ab-item" href="//webcache.googleusercontent.com/search?strip=1&#038;q=cache:https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Check Google Cache</a>		</li>
		<li id="wp-admin-bar-wpseo-header"><a class="ab-item" href="//quixapp.com/headers/?r=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Check Headers</a>		</li>
		<li id="wp-admin-bar-wpseo-structureddata"><a class="ab-item" href="https://search.google.com/structured-data/testing-tool#url=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Google Structured Data Test</a>		</li>
		<li id="wp-admin-bar-wpseo-facebookdebug"><a class="ab-item" href="//developers.facebook.com/tools/debug/og/object?q=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Facebook Debugger</a>		</li>
		<li id="wp-admin-bar-wpseo-pinterestvalidator"><a class="ab-item" href="https://developers.pinterest.com/tools/url-debugger/?link=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Pinterest Rich Pins Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-htmlvalidation"><a class="ab-item" href="//validator.w3.org/check?uri=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">HTML Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-cssvalidation"><a class="ab-item" href="//jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">CSS Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-pagespeed"><a class="ab-item" href="//developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Google Page Speed Test</a>		</li>
		<li id="wp-admin-bar-wpseo-microsoftedge"><a class="ab-item" href="https://developer.microsoft.com/en-us/microsoft-edge/tools/staticscan/?url=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Microsoft Edge Site Scan</a>		</li>
		<li id="wp-admin-bar-wpseo-google-mobile-friendly"><a class="ab-item" href="https://www.google.com/webmasters/tools/mobile-friendly/?url=https%3A%2F%2Fwww.hyperdroid.in%2Fssl-certification-using-lets-encrypt%2F" target="_blank">Mobile-Friendly Test</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-wpseo-settings" class="menupop"><div class="ab-item ab-empty-item" tabindex="0" aria-haspopup="true">SEO Settings</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-settings-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-general"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/admin.php?page=wpseo_dashboard">Dashboard</a>		</li>
		<li id="wp-admin-bar-wpseo-search-console"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/admin.php?page=wpseo_search_console">Search Console</a>		</li>
		<li id="wp-admin-bar-wpseo-licenses"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/admin.php?page=wpseo_licenses">Premium</a>		</li></ul></div>		</li></ul></div>		</li>
		<li id="wp-admin-bar-itsec_admin_bar_menu" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://www.hyperdroid.in/wp-admin/admin.php?page=itsec">Security</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-itsec_admin_bar_menu-default" class="ab-submenu">
		<li id="wp-admin-bar-itsec_admin_bar_settings"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/admin.php?page=itsec">Settings</a>		</li>
		<li id="wp-admin-bar-itsec_admin_bar_security_check"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/admin.php?page=itsec&#038;module=security-check">Security Check</a>		</li>
		<li id="wp-admin-bar-itsec_admin_bar_logs"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/admin.php?page=itsec-logs">Logs</a>		</li></ul></div>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="https://www.hyperdroid.in/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search"/></form></div>		</li>
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="https://www.hyperdroid.in/wp-admin/profile.php">Howdy, <span class="display-name">Kartik B.</span><img alt='' src='https://secure.gravatar.com/avatar/98767f2f56c91ee425e994ce6e737940?s=26&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/98767f2f56c91ee425e994ce6e737940?s=52&#038;d=identicon&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="https://www.hyperdroid.in/wp-admin/profile.php"><img alt='' src='https://secure.gravatar.com/avatar/98767f2f56c91ee425e994ce6e737940?s=64&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/98767f2f56c91ee425e994ce6e737940?s=128&#038;d=identicon&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>Kartik B.</span><span class='username'>thedemon12</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="https://www.hyperdroid.in/wp-admin/profile.php">Edit My Profile</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item" href="https://www.hyperdroid.in/wp-login.php?action=logout&#038;_wpnonce=4a9fa29ac1">Log Out</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="https://www.hyperdroid.in/wp-login.php?action=logout&#038;_wpnonce=4a9fa29ac1">Log Out</a>
					</div>

			</body>

</html> <!-- end of site. what a ride! -->
<!-- Dynamic page generated in 0.093 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-12-21 20:20:00 -->
