<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
$Fuller = get_post_meta( get_the_ID(), 'meta-box-full', true );
$Reader = get_post_meta( get_the_ID(), 'meta-box-read', true );
?>
<script src="https://use.fontawesome.com/8a6818427c.js"></script>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
<?php
if ($Reader[0]  <> "") {
 ?>

<div style="border: 1px solid #d9cb9e; display: inline-block; padding: 5px; padding-top: 0px; padding-bottom: 15px;width: 98%; margin: 0 5px;">

<div class="settings" style="display: table;">
<div>Шрифт: </div>
<div class="minus"><i class="fa fa-minus-square-o" aria-hidden="true"></i></div>
<div class="plus"><i class="fa fa-plus-square-o" aria-hidden="true"></i></div>
<div class="withr" style="font-size: 13px;">С засечками</i></i></div>
<div class="nor" style="font-family: Lato, Arial, sans-serif; font-size: 13px;">Без засечек</i></i></div>
<select name="textc" class="textc">
	<option value="#d9cb9e">Золотой</option>
	<option value="#2a2c2b">Черный</option>
	<option value="#fff">Белый</option>
	<option value="#346736">Зеленый</option>
	<option value="#009688">Синий</option>
	<option value="#795548">Коричневый</option>
	<option value="#9a9a9a">Серый</option>
</select>
<div>   |    Ширина: </div>
<div class="minusw"><i class="fa fa-compress" aria-hidden="true"></i></i></div>
<div class="plusw"><i class="fa fa-arrows-h" aria-hidden="true"></i></i></div>
<div>   |    Фон: </div>
<select name="fon" class="fon">
	<option value="#2a2c2b">Черный</option>
	<option value="#fff">Белый</option>
	<option value="#346736">Зеленый</option>
	<option value="#009688">Синий</option>
	<option value="#795548">Коричневый</option>
	<option value="#9a9a9a">Серый</option>
	<option value="#d9cb9e">Золотой</option>
</select>
</div>
</div>
<br>
<style>
@media screen and (max-width: 750px) {
.entry-content {
margin: 0;
}
.content-area {
    width: 100%!important;
}
.site-main > article {
margin: 0 25px;
}
}
div.minus, div.plus, div.minusw, div.plusw {
cursor: pointer;
font-size: 30px;
    margin: 0 7px;
}
div.withr, div.nor {
cursor: pointer;
font-size: 20px;
    margin: 0 7px;
 border: 2px solid #d9cb9e;
    border-radius: 6px;
    line-height: 25px;
    padding: 0 5px;
}
div.minusw, div.plusw {
 border: 2px solid #d9cb9e;
    border-radius: 6px;
    font-size: 19px;
    padding: 2px;

}
.fon, .text {
    margin: 0 7px;
}
.settings{
    padding: 5px 15px;
margin: 0 auto;
}

.settings div, .settings select{
float:left;
height: 29px;
margin-top: 15px;
}
.content-area {
    width: 900px;
}
.fa {
    vertical-align: super;
}
.entry-content p {
    margin-bottom: 0;
}
</style>
<script>

jQuery( document ).ready(function() {
jQuery.cookie.defaults = { path: '/'};
var fontsize =  parseInt(jQuery.cookie('fontsizecoockie'));
  jQuery( '.entry-content p' ).css( "font-size", fontsize);
var widthsize =  parseInt(jQuery.cookie('fwidthsizecoockie'));
  jQuery( '.content-area' ).css( "width", widthsize );
var fontstyle =  jQuery.cookie('fontstylecoockie');
  jQuery( '.entry-content p' ).css( "font-family", fontstyle );
var singleValues =  jQuery.cookie('singleValuescoockie');
  jQuery( '.site' ).css( "background-color", singleValues );
  jQuery( 'body.custom-background' ).css( "background-color", singleValues );
var texter =  jQuery.cookie('textercoockie');
  jQuery( '.entry-content p' ).css( "color", texter );
  jQuery( 'h1' ).css( "color", texter );
  jQuery( 'h2' ).css( "color", texter );
  jQuery( 'h3' ).css( "color", texter );
  jQuery( 'h4' ).css( "color", texter );
  jQuery( 'li a' ).css( "color", texter );
});

jQuery( '.minus' ).click(function() {
var fontsize = parseInt(jQuery( '.entry-content p' ).css( "font-size"));
fontsize -=1;
jQuery.cookie('fontsizecoockie', fontsize, { expires: 365 });
  jQuery( '.entry-content p' ).css( "font-size", fontsize );
});
jQuery( '.plus' ).click(function() {
var fontsize = parseInt(jQuery( '.entry-content p' ).css( "font-size"));
fontsize +=1;
jQuery.cookie('fontsizecoockie', fontsize, { expires: 365 });
  jQuery( '.entry-content p' ).css( "font-size", fontsize );
});
jQuery( '.minusw' ).click(function() {
var widthsize = parseInt(jQuery( '.content-area' ).css( "width"));
widthsize -=50;
jQuery.cookie('fwidthsizecoockie', widthsize, { expires: 365 });
jQuery( '.content-area' ).css( "width", widthsize );
});
jQuery( '.plusw' ).click(function() {
var widthsize = parseInt(jQuery( '.content-area' ).css( "width"));
widthsize +=50;
jQuery.cookie('fwidthsizecoockie', widthsize, { expires: 365 });
jQuery( '.content-area' ).css( "width", widthsize );
});
jQuery( '.withr' ).click(function() {
var fontstyle="Merriweather, Georgia, serif"
jQuery.cookie('fontstylecoockie', fontstyle, { expires: 365 });
  jQuery( '.entry-content p' ).css( "font-family", fontstyle );
});
jQuery( '.nor' ).click(function() {
var fontstyle="'Lato','Arial',sans-serif"
jQuery.cookie('fontstylecoockie', fontstyle, { expires: 365 });
  jQuery( '.entry-content p' ).css( "font-family", fontstyle );
});
jQuery( '.fon' ).change(function(value) {
var singleValues = jQuery( ".fon" ).val();
jQuery.cookie('singleValuescoockie', singleValues, { expires: 365 });
  jQuery( '.site' ).css( "background-color", singleValues );
  jQuery( 'body.custom-background' ).css( "background-color", singleValues );

});
jQuery( '.textc' ).change(function(value) {
var texter = jQuery( ".textc" ).val();
jQuery.cookie('textercoockie', texter, { expires: 365 });
  jQuery( '.entry-content p' ).css( "color", texter );
  jQuery( 'h1' ).css( "color", texter );
  jQuery( 'h2' ).css( "color", texter );
  jQuery( 'h3' ).css( "color", texter );
  jQuery( 'h4' ).css( "color", texter );
  jQuery( 'li a' ).css( "color", texter );
});

</script>
<?php
}
 ?>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php
if ($Fuller[0]  <> "") {
 ?>
<style>
.content-area {
    margin: 0 auto;
    float: none;
}
header.entry-header {
    text-align: center;
}
.entry-content {
    float: none!important;
    width: 100%!important;
}
</style>

<?php
}
if ($Fuller[0]  <> true) {

 get_sidebar();
}
 ?>
<?php get_footer(); ?>
