<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php
$cts = get_post_custom_values("custom_headline");
if(count($cts)>0) $custom_title = $cts[0];
else $custom_title = get_the_title();
?>


				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?= $custom_title ?></h2>
					<?php } else { ?>	
						<h1 class="entry-title"><?= $custom_title ?></h1>
					<?php } ?>		


					<div class="entry-content">
						<?php the_content(); ?>

<!-- share stuff -->

<div class="social4i" style="height:39px;">
<div class="social4in" style="height:29px;float: right;">
<div class="socialicons s4twitter" style="float:left;margin-right: 10px;"><a href="http://twitter.com/share" data-url="<?php the_permalink() ?>" data-counturl="<?php the_permalink() ?>" data-text="<?php the_title() ?>" class="twitter-share-button" data-count="horizontal" data-via=""></a></div>
<div class="socialicons s4fblike" style="float:left;margin-right: 10px;">
<div id="fb-root"></div>
<p><fb:like href="<?php urlencode(the_permalink()) ?>" send="false" layout="button_count" width="100" height="21" show_faces="false" font=""></fb:like></div>
<div class="socialicons s4plusone" style="float:left;margin-right: 10px;"><g:plusone size="medium" href="<?php the_permalink() ?>" count="true"></g:plusone></div>
<div class="socialicons s4flattr" style="float:left;margin-right:10px"><a class="FlattrButton" style="display:none;" rev="flattr;button:compact;" href="http://getgreenshot.org/"></a>
<noscript><a href="http://flattr.com/thing/30384/Greenshot-a-free-and-open-source-screenshot-tool" target="_blank">
<img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript></div>
<div class="socialicons s4fbshare" style="position: relative;float:left;margin-right: 10px;">
<div class="s4ifbshare" ><a name="fb_share" type="button_count" share_url="<?php urlencode(the_permalink()) ?>" href="http://www.facebook.com/sharer.php"></a></div>
</div>
</div>
<div style="clear:both"></div>
</div>

<!-- share stuff end -->


						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
					
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

<br><br>

<!-- google adsense content block -->
<!--<script type="text/javascript">< ! - -
google_ad_client = "ca-pub-8484846442376136";
/* Banner */
google_ad_slot = "5542726919";
google_ad_width = 468;
google_ad_height = 60;
//- - >
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>-->

<script type="text/javascript"><!--
google_ad_client = "ca-pub-8484846442376136";
/* r2 */
google_ad_slot = "4657938197";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<!-- / google adsense content block -->


			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
