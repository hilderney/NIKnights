<script>
	function showonlyone(thechosenone) {
		$('.dropdownItensPodcast').each(function(index) {
			if ($(this).attr("id") == thechosenone) {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
					$(this).hide();	
				}
				else {
					$(this).addClass('selected');
					$(this).show();
				}
			}
			else {
				$(this).removeClass('selected');
				$(this).hide();
			}
		});
	}

	function SelectAll(id) {
		document.getElementById(id).focus();
		document.getElementById(id).select();
	}
</script>
<div class="playerNI">
	<div id="powerpress-sec">
		<?php echo $episode_content; ?>
		<div class="content-powerpress-links">
			<div class="playerSecondControls">
				<div class="playerNIbutton">
					<a download="" class="download" id="mp3Podcast" href="<?php $EpisodeData = powerpress_get_enclosure_data(get_the_ID(), 'podcast');$MediaURL = powerpress_add_flag_to_redirect_url($EpisodeData['url'], 'p');echo $MediaURL; ?>" target="_blank">
						<span class="player-text">MP3</span>
					</a>
				</div>

				<!-- <div class="playerNIbutton">
					<a title="Baixe o episódio zipado" class="zip" href="<?php// $url = $MediaURL; $parts = parse_url($url); $file_name = basename($parts['path']); $newname = str_replace(array(".mp3"), ".zip", $file_name); rename($filename, $newname); echo 'TRACKER BLBURRY + URL PASTA ZIP'; echo $newname; ?>" target="_blank">
						<span class="player-text">BAIXAR ZIP</span>
					</a>
				</div class="playerNIbutton"> -->

				<div class="playerNIbutton">
					<!-- <a class="assinar" id="assinarPodcast" href="javascript:showonlyone('btn_assinarPodcast');" > -->
						<a class="assinar" id="assinarPodcast" target="blank" href="http://nerdignorante.com.br/feed/podcast/" >
						<span class="player-text">FEED RSS</span>
					</a>
				</div>

				<div class="playerNIbutton">
					<a class="compartilhar" id="compartilharPodcast" href="javascript:showonlyone('btn_compartilharPodcast');">
						<span class="player-text">COMPARTILHAR</span>
					</a>
				</div>

				<!-- <div class="playerNIbutton">
					<a class="incorporar" id="incorporarPodcast" href="javascript:showonlyone('btn_incorporarPodcast');">
						<span class="player-text">INCORPORAR</span>
					</a>
				</div> -->
			</div>

			<div class="playerFeedOptions dropdownItensPodcast" id="btn_assinarPodcast">
				<span>
					<a href="LINK PARA PÁGINA IOS" target="_blank">
						<span class="player-text">iPhone</span>
					</a>
				</span>
				<span>
					<a href="LINK PARA PÁGINA ANDROID" target="_blank">
						<span class="player-text">Android</span>
					</a>
				</span>
				<span>
					<a href="LINK PARA PÁGINA WINDOWS PHONE" target="_blank">
						<span class="player-text">Windows Phone</span>
					</a>
				</span>
				<span>
					<a href="<?php echo site_url(); ?>/feed/podcast/" target="_blank"><span class="player-text">Feed Rss</span>
					</a>
				</span>
			</div>

			<div class="playerShareOptions dropdownItensPodcast" id="btn_compartilharPodcast">
				<span>
					<a onClick="window.open('http://www.facebook.com/sharer.php?s=100&p[url]=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=580,height=325');" href="javascript: void(0)">
						<span class="player-text">Facebook</span>
					</a>
				</span>

				<span>
					<a onclick="javascript:window.open('http://twitter.com/share?text=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&url=<?php echo urlencode(get_permalink());?>&via=USUÁRIO-TWITTER','','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600'); return false;" href="javascript: void(0)">
						<span class="player-text">Twitter</span>
					</a>
				</span>

				<span>
					<input type="text" id="txtfld" onClick="SelectAll('txtfld');" style="width:200px" value="<?php echo the_permalink(); ?>" />
				</span>
			</div>
		</div>
	</div>
</div>