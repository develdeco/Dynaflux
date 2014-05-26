<section class='slider'>
	<ul class="bxslider">
		<?php foreach($slider as $slideItem): ?>
		<li>
			<span><?php echo $slideItem->getTitle() ?></span>
			<img src="<?php echo public_url($slideItem->getLargeImage()) ?>" />
		</li>
		<?php endforeach ?>
	</ul>
	<div id="bx-pager">
		<?php foreach($slider as $key => $slideItem): ?>
		<a data-slide-index="<?php echo $key ?>" href="#">
			<img src="<?php echo public_url($slideItem->getSmallImage()) ?>" />
			<span class="pager-text"><?php echo $slideItem->getTitle() ?></span>
		</a>
		<?php endforeach ?>
	</div>
	<div class="buttons">
		<a class="prev"></a>
		<a class="next"></a>
	</div>
</section>
<section class="information-blocks clearfix">
	<article class="block col-md-3">
		<div class="block-image"><img src="img/sim1.png" alt=""></div>
		<div class="block-title">Lorem ipsum dolor sit ame</div>
		<div class="block-description">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
		</div>
		<div class="block-button">
			<button class="btn btn-default">mas</button>
		</div>
	</article>
	<article class="block col-md-3">
		<div class="block-image"><img src="img/sim2.png" alt=""></div>
		<div class="block-title">tempor incididunt ut labore e</div>
		<div class="block-description">
			<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
		</div>
		<div class="block-button">
			<button class="btn btn-default">mas</button>
		</div>
	</article>
	<article class="block col-md-3">
		<div class="block-image"><img src="img/sim3.png" alt=""></div>
		<div class="block-title">quis nostrud exercitatio</div>
		<div class="block-description">
			<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
		</div>
		<div class="block-button">
			<button class="btn btn-default">mas</button>
		</div>
	</article>
	<article class="block col-md-3">
		<div class="block-image"><img src="img/sim4.png" alt=""></div>
		<div class="block-title">consequat. Duis aute irure</div>
		<div class="block-description">
			<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
		</div>
		<div class="block-button">
			<button class="btn btn-default">mas</button>
		</div>
	</article>
</section>
<section class="projects-finished col-md-3">
	<h2><?php echo $this->lang->line('projects_block_title') ?></h2>
	<ul class="bxslider-projects">
		<?php foreach($projects as $project): ?>
		<li>
			<div class="project-title"><?php echo $project->getName() ?></div>
			<div class="project-body"><?php echo $project->getDescription() ?></div>
		</li>
		<?php endforeach ?>
	</ul>
</section>
<section class="featured-products col-md-6">
	<h2><?php echo $this->lang->line('products_block_title') ?></h2>
	<div class="row">
		<ul class="products">
			<?php foreach($products as $product): ?>
			<li class="col-md-6">
				<div class="products-image">
					<a href="<?php echo href($product->getId_product(), 'product') ?>">
						<img src="<?php echo public_url($product->getImage()) ?>" alt="<?php echo $product->getTitle() ?>">
					</a>
				</div>
				<div class="product-title"><?php echo $product->getTitle() ?></div>
			</li>
			<?php endforeach ?>			
		</ul>
	</div>
</section>
<section class="latest-news col-md-3">
	<h2><?php $this->lang->line('news_block_title') ?></h2>
	<?php $this->loadView('news/block') ?>
</section>