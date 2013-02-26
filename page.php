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
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<script type="text/javascript">
function submitform()
{
  document.email.submit();
}
</script>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<div id="buttons">
					<div class="form_select" id="personal" >Personal</div>
					<div class="form_select" id="work" >Work</div>
					<div class="form_select" id="genera0l" >General</div>
					<div class="form_select" id="conflict" >Conflict</div>
				</div> <!-- buttons -->
			<div id="email_form" class="flipped_out">
				<form name="email" action="cb-comments-post.php" method="post" id="commentform">
					<div id="from">
						<input size="40" id="author" name="author" type="text" value="What&#39;s your name?" aria-required='true' onFocus="if(this.value == 'What\'s your name?'){this.value=''}" onblur="if(this.value == ''){this.value='What\'s your name?'}"/>
						<div class="guy"><img src="wp-content/themes/CheeseBurger/img/guy.png" height="40px"></div>
						<div class="girl"><img src="wp-content/themes/CheeseBurger/img/girl.png" height="40px"></div> 
					</div> <!-- /name -->
					<div id="email">
					<input size="40" id="email" name="email" type="text" value="Email" aria-required='true' onFocus="if(this.value == 'Email'){this.value=''}" onblur="if(this.value == ''){this.value='Email'}"/>
					</div> <!-- /email -->
					<div id="to">
						<p>&nbsp;You are writing to a:</p>
						<div class="guy"><img src="wp-content/themes/CheeseBurger/img/guy.png" height="40px"></div>
						<div class="girl"><img src="wp-content/themes/CheeseBurger/img/girl.png" height="40px"></div> 
					</div>
					<div id="comment">
						<textarea id="comment" name="comment" cols="42" rows="9" aria-required="true" value="" onFocus="if(this.value == 'What are you trying to say?'){this.value=''}" onblur="if(this.value == ''){this.value='What are you trying to say?'}">What are you trying to say?</textarea>
						<div id="tone">
							<div class="tone_button" id="bitchy">bitchy</div>
							<div class="tone_button" id="flat">flat</div> 
							<div class="tone_button" id="whatever">w / e</div> 
						</div> <!-- /tone -->
					</div> <!-- /comment -->
						<input type="hidden" name="sex_from" id="sex_from">
						<input type="hidden" name="sex_to" id="sex_to">
						<input type="hidden" name="tone" id="tone">
					<div id="submit"><BR />
						<a href="javascript: submitform()" class="css_btn_class">submit</a>
						<!-- <input name="submit" type="submit" id="submit" value="Post Comment"/> -->
						<input type='hidden' name='comment_post_ID' value='1' id='comment_post_ID' />
						<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
					</div> <!-- /submit -->
				</form>
			</div> <!-- form -->

<script>
jQuery(document).ready(function($){
	$('.form_select').on("click", function(event){


		if (typeof browser_is_ie !== 'undefined'){
			$(this).parent().parent().animate({
				height: 600
				}, 500, function() {
			    // Animation complete.
			});
			$(this).parent().animate({
			    top: '-=300'
			  }, 1000, function() {
			    // Animation complete.
			});
			$(this).parent().fadeOut(500);
			$('#email_form').slideDown(1000);
		}else{
			$(this).parent().fadeOut(500);
			$(this).parent().parent().animate({
				height: 600
				}, 500, function() {
			    // Animation complete.
			});
			$(this).parent().addClass('flipper');
			$('#email_form').addClass('flip_in');
		};
	});//onClick for button

	$('.guy, .girl').on("click", function(event){
		sex = $(this).attr('class');
		console.log($(this))
		$('input[name=sex_' + $(this).parent().attr('id') + ']').val(sex).change();
		$(this).css({'border': 'solid 2px grey', 'opacity':'1'});
		$(this).siblings('div').css({'border':'none','opacity': '0.4'});

	})//onClick for guy/girl

	$('input[name=tone]').change(function(){
	    console.log($(this).val());
	});

	$('#tone > div').on("click", function(event){
		tone = $(this).attr('id');
		$('input[name=tone]').val(tone).change();

	})//onClick for tone

});//document ready
</script>
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>