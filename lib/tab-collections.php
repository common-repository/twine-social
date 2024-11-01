<div class="tab-pane" id="twine-tab-collections">
	<div class="row-fluid">
	<div class="span12">

			<!-- start callout -->
			<div class="callout callout-info">
				<H4>About Collections</H4>
				<p>TwineSocial has a extremely powerful and flexible <b>Collections</b> feature. Collections can be individually displayed throughout your Wordpress Site. A collection could be:</p>
				<ul>
					<li>All posts that contain the hashtag #superbowl</li>
					<li>All Tweets from @brettfavre</li>
					<li>All Videos with at least 25 Views</li>
					<li>All Facebook Posts containing the phrase "great service" or "awesome"</li>
				</ul>
			</div>
			<!-- end callout -->


			<div class="twine-widget">
				<div class="twine-widget-title">
					My Collections
				</div>
				<div class="twine-widget-content">
					<table class="table table-striped table-hover">
					<thead>
						<TH>Social Hub Name</TH>
						<TH>Collection Name</TH>
						<TH>&nbsp;</TH>
					</thead>
					<tbody>
					<?php foreach ($twinesocial_appdata_json->campaigns as $campaign) { ?>
					<?php foreach ($campaign->collections as $collection) { ?>
						<TR>
							<TD> <?php echo $campaign->name?></TD>
							<TD> <?php echo $collection->name?></TD>
							<TD><a target="_blank" class="btn btn-sm btn-default" href="https:<?php echo TWINE_CUSTOMER_URL?>/app/<?php echo $campaign->baseUrl?>/collection/index">Edit Collection</a></TD>
						</TR>
					<?php } ?>
					<?php } ?>
					</tbody>
					</table>
					<a target="_blank" id="btn-collection" class="btn btn-primary btn-sm" href="https:<?php echo TWINE_CUSTOMER_URL?>/app/<?php echo $twinesocial_appdata_json->campaigns[0]->baseUrl?>/collection/index">Add New Collection</a>
				</div>
			</div>
		</div>
	</div>
</div>
