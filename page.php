<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<form name="input" action="html_form_action.asp" method="post">
				You are: <input type="text" name="firstname">
				<input type="radio" name="sex" value="male"> Male
				<input type="radio" name="sex" value="female"> Female<br /><br />
				You're writing this to: <input type="text" name="lastname">
				<input type="radio" name="to_sex" value="male"> Male
				<input type="radio" name="to_sex" value="female"> Female<br /><br />
				<textarea cols="60" rows="5" name="myname">What are you trying to say?</textarea><br /><br />
				What kind of tone are you going for? <input type="radio" name="tone" value="bitchy"> Bitchy 
				<input type="radio" name="tone" value="flat"> Flat <input type="radio" name="tone" value="friendly"> Friendly <br /><br />
				<input type="submit" value="Submit">

				</form>

				<?php //while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php //endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>