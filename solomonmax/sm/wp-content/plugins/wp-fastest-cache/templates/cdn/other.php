<div id="wpfc-modal-other" style="top: 10.5px; left: 226px; position: absolute; padding: 6px; height: auto; width: 560px; z-index: 10001;">
	<div style="height: 100%; width: 100%; background: none repeat scroll 0% 0% rgb(0, 0, 0); position: absolute; top: 0px; left: 0px; z-index: -1; opacity: 0.5; border-radius: 8px;">
	</div>
	<div style="z-index: 600; border-radius: 3px;">
		<div style="font-family:Verdana,Geneva,Arial,Helvetica,sans-serif;font-size:12px;background: none repeat scroll 0px 0px rgb(255, 161, 0); z-index: 1000; position: relative; padding: 2px; border-bottom: 1px solid rgb(194, 122, 0); height: 35px; border-radius: 3px 3px 0px 0px;">
			<table width="100%" height="100%">
				<tbody>
					<tr>
						<td valign="middle" style="vertical-align: middle; font-weight: bold; color: rgb(255, 255, 255); text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5); padding-left: 10px; font-size: 13px; cursor: move;">CDN Settings</td>
						<td width="20" align="center" style="vertical-align: middle;"></td>
						<td width="20" align="center" style="vertical-align: middle; font-family: Arial,Helvetica,sans-serif; color: rgb(170, 170, 170); cursor: default;">
							<div title="Close Window" class="close-wiz"></div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="window-content-wrapper" style="padding: 8px;">
			<div style="z-index: 1000; height: auto; position: relative; display: inline-block; width: 100%;" class="window-content">


				<div id="wpfc-wizard-other" class="wpfc-cdn-pages-container">
					<div wpfc-cdn-page="1" class="wiz-cont">
						<h1>Let's Get Started</h1>		
						<p>Hi! If you don't have a <strong>MaxCDN</strong> account, you can create one. If you already have, please continue...</p>
						<div class="wiz-input-cont" style="text-align:center;">
							<a href="http://tracking.maxcdn.com/c/149801/3982/378" target="_blank">
								<button class="wpfc-green-button">Create a MaxCDN Account</button>
							</a>
					    </div>
					    <p class="wpfc-bottom-note" style="margin-bottom:-10px;"><a target="_blank" href="https://www.maxcdn.com/one/tutorial/implementing-cdn-on-wordpress-with-wp-fastest-cache/">Note: Please read How to Integrate MaxCDN into WP Fastest Cache</a></p>
					</div>
					<div wpfc-cdn-page="2" class="wiz-cont" style="display:none">
						<h1>Enter CDN Url</h1>		
						<p>Please enter your <strong>CDN Url</strong> below to deliver your contents via CDN.</p>
						<div class="wiz-input-cont">
							<label class="mc-input-label" for="cdn-url" style="padding-right: 12px;">CDN Url:</label><input type="text" name="" value="" class="api-key" id="cdn-url">
					    	<div id="cdn-url-loading"></div>
					    	<label class="wiz-error-msg"></label>
					    </div>
					    <div class="wiz-input-cont">
							<label class="mc-input-label" for="origin-url">Origin Url:</label><input type="text" name="" value="" class="api-key" id="origin-url">
					    </div>
					</div>
					<div wpfc-cdn-page="3" class="wiz-cont" style="display:none">
						<h1>File Types</h1>		
						<p>Specify the file types within the to host with the CDN.</p>
						
						<?php include WPFC_MAIN_PATH."templates/cdn/file_types.php"; ?>
					</div>
					<div wpfc-cdn-page="4" class="wiz-cont" style="display:none">
						<h1>Ready to Go!</h1>
						<p>You're all set! Click the finish button below and that's it.</p>
					</div>
					<div wpfc-cdn-page="5" class="wiz-cont" style="display:none">
						<h1>Integration Ready!</h1>
						<p>Your static contents will be delivered via CDN.</p>
					</div>


					<img class="wiz-bg-img" src="data:image/png;base64,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"/>
				</div>
			</div>
		</div>
		<?php include WPFC_MAIN_PATH."templates/buttons.html"; ?>
	</div>
</div>



