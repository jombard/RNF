<?php

$social_facebook = "socialfacebook";
$social_twitter = "socialtwitter";
$social_youtube = "socialyoutube";
$social_instagram = "socialinstagram";

if(isset($_POST["submit"])){ 
	$updated_facebook = $_POST[$social_facebook];
	update_option($social_facebook, $updated_facebook);

	$updated_twitter = $_POST[$social_twitter];
	update_option($social_twitter, $updated_twitter);

	$updated_youtube = $_POST[$social_youtube];
	update_option($social_youtube, $updated_youtube);

	$updated_instagram = $_POST[$social_instagram];
	update_option($social_instagram, $updated_instagram);

    echo '<div id="message" class="updated fade"><p>Options Updated</p></div>';
} else {
	$updated_facebook = get_option($social_facebook);
	$updated_twitter = get_option($social_twitter);
	$updated_youtube = get_option($social_youtube);
	$updated_instagram = get_option($social_instagram);
}

?>

<div class="wrap">
<h1>RNF Options</h1>

<form method="post" action=""> 
	<table class="form-table">
		<tbody>
			<tr>
				<th scope="row">
					<label for="social-facebook">Facebook Url</label>
				</th>
				<td><input type="text" id="social-facebook" name="socialfacebook" class="regular-text" value="<?php echo $updated_facebook ?>"></td>
			</tr>
			<tr>
				<th scope="row">
					<label for="social-twitter">Twitter Url</label>
				</th>
				<td><input type="text" id="social-twitter" name="socialtwitter" class="regular-text" value="<?php echo $updated_twitter ?>"></td>
			</tr>
			<tr>
				<th scope="row">
					<label for="social-youtube">Youtube Url</label>
				</th>
				<td><input type="text" id="social-youtube" name="socialyoutube" class="regular-text" value="<?php echo $updated_youtube ?>"></td>
			</tr>
			<tr>
				<th scope="row">
					<label for="social-instagram">Instagram Url</label>
				</th>
				<td><input type="text" id="social-instagram" name="socialinstagram" class="regular-text" value="<?php echo $updated_instagram ?>"></td>
			</tr>

			
		</tbody>
	</table>

    <p class="submit"><input type="submit" value="Save Changes" class="button button-primary" name="submit" /></p>

</form>

</div>

