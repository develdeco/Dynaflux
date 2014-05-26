<section class='accordion col-md-4'>
	<ul class="nav navbar-nav" id="equipment">
        <li class="products-item first-level panel">
        	<a href="#products" data-toggle="collapse" data-parent="#equipment" class="collapsed">maquinarias</a>
        	<ul id="products" class="nav collapse">
        		<li class="product1-item second-level panel">
        			<a href="#product1" data-toggle="collapse" data-parent="#products" class="collapsed">product 1</a>
        			<ul class="nav collapse" id="product1">
        				<li class="product1 third-level panel">
        					<a href="#product1-1-sub" data-toggle="collapse" data-parent="#product1" class="collapsed">lorem</a>
        					<ul class="nav collapse" id="product1-1-sub">
        						<li><a href="#">sub</a></li>
        						<li><a href="#">sub</a></li>
        						<li><a href="#">sub</a></li>
        						<li><a href="#">sub</a></li>
        					</ul>
        				</li>
        				<li class="product1 third-level panel">
        					<a href="#product1-2-sub" data-toggle="collapse" data-parent="#product1" class="collapsed">lorem</a>
        					<ul class="nav collapse" id="product1-2-sub">
        						<li><a href="#">sub</a></li>
        						<li><a href="#">sub</a></li>
        						<li><a href="#">sub</a></li>
        						<li><a href="#">sub</a></li>
        					</ul>
        				</li>
        			</ul>
        		</li>
        		<li class="product2-item second-level panel">
        			<a href="#product2" data-toggle="collapse" data-parent="#products" class="collapsed">product 2</a>
        			<ul class="nav collapse" id="product2">
        				<li><a href="#">lorem</a></li>
        				<li><a href="#">lorem</a></li>
        			</ul>
        		</li>
        		<li class="product3-item second-level panel">
        			<a href="#product3" data-toggle="collapse" data-parent="#products" class="collapsed">product 3</a>
        			<ul class="nav collapse" id="product3">
        				<li><a href="#">lorem</a></li>
        				<li><a href="#">lorem</a></li>
        				<li><a href="#">lorem</a></li>
        			</ul>
        		</li>
        		<li class="product4-item second-level panel">
        			<a href="#product4" data-toggle="collapse" data-parent="#products" class="collapsed">product 4</a>
        			<ul class="nav collapse" id="product4">
        				<li><a href="#">lorem</a></li>
        				<li><a href="#">lorem</a></li>
        				<li><a href="#">lorem</a></li>
        				<li><a href="#">lorem</a></li>
        			</ul>
        		</li>
        	</ul>
        </li>
    </ul>
</section>
<section class="equipment col-md-8">
	<h2 class="equipment-title">maquinarias generales</h2>
	<ul class="nav navbar-nav">
        <?php foreach($category as $categoryItem): ?>
		<li class="product">
			<div class="product-image"><a href="#"><img src="img/temp/equipo1.jpg" alt=""></a></div>
			<div class="product-name"><a href="#"><?php  ?></a></div>
		</li>
        <?php endforeach ?>
	</ul>
</section>