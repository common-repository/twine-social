<div class="tab-pane" id="twine-tab-hubs">

	<div class="row-fluid">
		<div class="span12">
			<div class="twine-widget">
				<div class="twine-widget-title">
					My TwineSocial Hubs
				</div>
				<div class="twine-widget-content">

					<p>A <b>Hub</b> is a collection of one or more of your social media feeds. You can embed a hub on a page.</p>

					<table class="table table-striped table-hover">
					<thead>
						<TH style="width:90px;">&nbsp;</TH>
						<TH>Social Hub Name</TH>
						<TH>Status</TH>
						<TH>&nbsp;</TH>
						<TH>&nbsp;</TH>
					</thead>
					<tbody>
					<?php foreach ($twinesocial_appdata_json->campaigns as $campaign) { ?>
						<TR class="<?php echo $campaign->heldFeeds>0 ? "danger" : ""?>">
							<TD>
								<img class="img-thumbnail" src="<?php echo $campaign->thumbnail?>" style="margin-right:10px;">
							</TD>
							<TD>
								<?php echo $campaign->name?>
							</TD>
							<TD> <?php echo $campaign->status?></TD>
							<TD>
								<?php if ($campaign->heldFeeds>0) { ?>
									<i class="fa fa-exclamation"></i> One more more feeds are no longer collecting posts. <a target="_blank" href="https://<?php echo TWINE_CUSTOMER_URL?>/app/<?php echo $campaign->baseUrl?>/show">Fix it now.</a>
								<?php } ?>
								&nbsp;
							</TD>
							<TD><a target="_blank" class="btn btn-sm btn-primary" href="https://<?php echo TWINE_CUSTOMER_URL?>/app/<?php echo $campaign->baseUrl?>/design/index">Configure Hub</a></TD>
						</TR>
					<?php } ?>
					</tbody>
					</table>
					<a class="btn btn-sm btn-primary" target="_blank" href="https://<?php echo TWINE_CUSTOMER_URL?>/">Create New Hub</a>

				</div>
			</div>
		</div>
	</div>
</div>
