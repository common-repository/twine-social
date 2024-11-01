<div class="tab-pane" id="twine-tab-shortcode">
	<div class="row-fluid">
		<div class="span12">
			<div class="twine-widget">
				<div class="twine-widget-content">

					<p>Generate a <a target="_blank" href="https://codex.wordpress.org/Shortcode">Wordpress Shortcode</a> according to different options given below, you can choose them according to your need and the shortcode gets updated run-time on selection. Now paste it anywhere you'd like your TwineSocial hub to appear, using the wordpress shortcode.</p>
					<p>The Shortcode is shown in a box at the end of this tab.</p>
					<h4>Choose Your Social Hub</h4>

					<div class="form-group">
						<?php
						if ($twinesocial_appdata) {
							$js = json_decode($twinesocial_appdata);
							if ($js->success) {
								echo '<select class="form-control" name="twinesocial_baseUrl" id="twinesocial_baseUrl">';
								foreach ($js->campaigns as $campaign) {
									echo '<option value="' . $campaign->baseUrl . '">' . $campaign->name . '</option>';
								}
								echo '</select>';
							} else {
								echo '<div class="alert alert-info">' . $js->message . '</div>';
							}
					} ?>

					</div>


					<?php if ($twinesocial_appdata) {
						$js = json_decode($twinesocial_appdata);
						if (isset($js->themes)) { ?>

						<HR>
						<h4>Choose a Theme</h4>

						<div class="row form-group twine-themes">

							<?php foreach ($js->themes as $key => $theme) { ?>
								<div class="col-xs-2 <?php echo $theme->name=="classic" ? " active" : ''?> <?php echo $theme->available ? "" : "locked"?>" data-theme="<?php echo $theme->name?>" style="height: 210px;">
									<img class="img-responsive" src="<?php echo $theme->thumbnail?>">
									<p><?php echo $theme->title?></p>
								</div>
							  <?php } ?>
						</div>
						<div class="alert alert-info upgrade-message hide">
							<i class="fa fa-lock"></i> <a target="_blank" href="https://customer.twinesocial.com/account/choosePlan" target="_blank">Upgrade to a Paid Plan</a> to unlock this theme!
						</div>
						<?php
						  }
						}
					?>



					<HR>
					<h4>Optional/Advanced Settings</h4>


					<?php if ($twinesocial_appdata) {
						$js = json_decode($twinesocial_appdata);
						if (isset($js->colors)) { ?>

						<div class="row form-group">
							<label class="col-xs-3">Color Scheme</label>
							<div class="col-xs-6">
								<select class="form-control" name="twinesocial_color" id="twinesocial_color">
								<?php foreach ($js->colors as $color) {
										echo '<option value="' . $color->name . '">' . $color->title . '</option>';
								} ?>

							</select>
							</div>
						</div>
						<?php
						  }
						}
					?>

					<div class="row form-group">
						<label class="col-xs-3">Show Collections</label>
						<div class="col-xs-6">
						<select class="form-control" name="twinesocial_collection" id="twinesocial_collection">
							<option value="0">Show All Items</option>

							<?php
							if ($twinesocial_appdata) {
								$js = json_decode($twinesocial_appdata);
								foreach ($js->campaigns as $campaign) {
									foreach ($campaign->collections as $collection) {
										if ($collection->name!="All") {
											echo '<option value="' . $collection->id . '">Only display posts from my "' . $collection->name . '" Collection</option>';
										}
									}
									break;
								  }
								}
							?>

						</select>
						</div>

					</div>



					<div class="row form-group">
						<label class="col-xs-3">Only Show</label>
						<div class="col-xs-6">
							<select class="form-control" name="twinesocial_pagesize" id="twinesocial_pagesize">
								<option value="1">1 post</option>
								<option value="5">5 posts</option>
								<option value="10">10 posts</option>
								<option selected value="20">20 posts (Recommended)</option>
								<option value="50">50 posts</option>
							</select>
						</div>
					</div>


					<div class="row form-group">
						<label class="col-xs-3">When scrolling to bottom of your hub</label>
						<div class="col-xs-6">
							<select class="form-control" name="twinesocial_scrolloptions" id="twinesocial_scrolloptions">
								<option value="fixed">Do nothing</option>
								<option selected value="autoload">Auto-load more posts</option>
								<option value="showbutton">Show a "Load More Posts" button</option>
							</select>
						</div>
					</div>


					<div class="row form-group">
						<label class="col-xs-3">Widget UI Language</label>
						<div class="col-xs-6">
							<select class="form-control" name="twinesocial_language" id="twinesocial_language">

							<?php
							if ($twinesocial_appdata) {
								$js = json_decode($twinesocial_appdata);
								if (isset($js->languages)) {

									foreach ($js->languages as $language) {
											echo '<option value="' . $language->culture . '">' . $language->name . '</option>';
									  }
								  }
								}
							?>

						</select>
						</div>
					</div>


					<div class="row form-group">
						<label class="col-xs-3">Site Navigation</label>
						<div class="col-xs-8">
							<input type="checkbox" value="1" name="twinesocial_page_nav" />&nbsp;Enable navigation tabstrip at the top of your hub.
						</div>
					</div>

					<h4>Your Wordpress Shortcode</h4>
					<p>Copy and paste this shortcode on any Wordpress Page or Post:</p>

					<pre id="embed-code">[twinesocial app="<?php echo json_decode($twinesocial_appdata)->campaigns[0]->baseUrl?>" scrolloptions="autoload"]</pre>

				</div>
			</div>
		</div>
	</div>
</div>
