<?php
	$top_artist = Artist::top();
	$top_artist = count($top_artist) != 0? $top_artist[0] : null;
?>
<div class="pomegranate">
	<div>
		<?php if(is_null($top_artist)) { ?>
    	  <p class="padded">
			<span class="glyphicon glyphicon-music"></span> No Top Artist Available
		  </p>
		
		<?php } else {?>
		<p class="padded">
			<span class="glyphicon glyphicon-user"></span> Top artist
			<span class="pull-right text-right">
				<?php print (float)$top_artist->getAverage(); ?> / 10<br>
				<small><?php print (int)$top_artist->countRaters(); ?> rater<?php if ((int)$top_artist->countRaters() > 1) print 's'; ?></small>
			</span>
			<br>
			<div class="progress">
				<div class="progress-bar silver" role="progressbar" aria-valuenow="<?php print (int)($top_artist->getAverage() * 10); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php print (int)($top_artist->getAverage() * 10); ?>%"></div>
			</div>
			<p class="padded">
				<a href="<?php print $top_artist->getUrl(); ?>" data-toggle="tooltip" title="<?php print $top_artist; ?>"><?php print truncateTextByChars( $top_artist ); ?></a><br>
				<br>
			</p>
			<div class="row">
				<div class="col-md-12">
					<div class="image-cropper">
						<img src="./img/artists/<?php print $top_artist->getPicture(); ?>" width="100%" class="centered">
					</div>
				</div>
			</div>
		</p>
		<?php } ?>
	</div>
</div>