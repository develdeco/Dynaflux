<ul class="news list-group">
	<?php foreach($newsList as $news): ?>
	<li class="list-group-item">
		<div class="news-title">
			<a href=""><?php echo $news->getTitle() ?></a>
		</div>
		<div class="news-date"><?php echo news_date_format($news->getDate()) ?></div>
	</li>
	<?php endforeach ?>
</ul>