<?php

function cc_theme_opts_page(){

	$theme_opts 		=		get_option('cc_opts');
?>

<div class="wrap">

	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">CodersClan Theme Settings</h3>
		</div><!-- panel-heading -->
	</div><!-- panel panel-success -->

	<div class="panel-body">

		<?php

			if(isset($_GET['status']) && $_GET['status'] == 1){ ?>
				<div class="alert alert-success">
					Settings have been updated.
				</div><!--  -->

				<?php
			}

		?>
		
		<form method="post" action="admin-post.php">

			<input name="action" type="hidden" value="cc_save_options">

			<?php wp_nonce_field('cc_options_verify'); ?>

			<h4>Logo</h4>

			<div class="input-group">
				<input type="text" class="form-control" placeholder="Logo Image" name="cc_inputLogoImg" value="<?php echo $theme_opts['logo_img']; ?>">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="button" id="cc_uploadLogoImgBtn">Upload</button>
				</span>
			</div><!-- input-group -->

			<h4>Social Icons</h4>

			<div class="form-group">
				<label>Twitter</label>
				<input type="text" class="form-control" name="cc_inputTwitter" value="<?php echo $theme_opts['twitter']; ?>">
			</div><!-- form-group -->

			<div class="form-group">
				<label>Facebook</label>
				<input type="text" class="form-control" name="cc_inputFacebook" value="<?php echo $theme_opts['facebook']; ?>">
			</div><!-- form-group -->

			<h4>Footer Text</h4>

			<div class="form-group">
				<label class="sr-only">Footer Text</label>
				<textarea class="form-control" name="cc_inputFooter"><?php echo stripslashes_deep($theme_opts['footer']);?></textarea>
			</div><!-- form-group -->

			<input type="submit" class="btn btn-primary" name="cc_submit" value="Update">

		</form>

	</div><!-- panel-body -->
</div><!-- wrap -->

<?php
}
?>