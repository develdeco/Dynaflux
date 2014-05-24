<section class="latest-news col-md-4">
	<?php $this->loadView('news/block') ?>
</section>
<section class="news-detail col-md-8">
	<!--h2 class="news-title">noticias</h2-->
	<div id="news-images-list" class="news-images">
		<ul class="nav">
			<?php foreach($images as $image): ?>
			<li><a href="#"><img src="<?php echo public_url($image->getPath()) ?>" width="100" height="60" alt=""></a></li>
			<?php endforeach ?>
		</ul>
		<div class="buttons">
			<span class="prev"></span>
			<span class="next"></span>
		</div>
	</div>
	<div class="media">
  		<h4 class="title-content"><?php echo $news->getTitle() ?></h4>
	  	<div class="media-body"><?php echo $news->getContent() ?></div>
	</div>
</section>