<script type="text/javascript" src="assets/js/instafeed.min.js"></script>
<script type="text/javascript">
	var feed = new Instafeed({
		get: 'user',
		userId: 300541964,
		accessToken: '187585002.bf2d849.8dffbb94e54c4444bca4aa8d397c6639',
		link: 'true',
		clientId: '4ae7dc8a8c064a3eba57b83bdad068d4',
		limit: '30'
	});
	feed.run();
</script>
<div id="instafeed">
</div>

<div class="container" id="about-guns" style="margin-bottom:-30px;">
	<div class="row about-guns">
		<div class="col-md-6">			
			<h2><?php echo $settings['desc'][0]['title'] ?></h2>
			<p><strong><?php echo $settings['desc'][0]['desc'] ?></strong></p>
		</div>
		<div class="col-md-6">
			<h2><?php echo $settings['desc'][1]['title'] ?></h2>
			<p><strong><?php echo $settings['desc'][1]['desc'] ?></strong></p>
		</div>
	</div>
</div>
