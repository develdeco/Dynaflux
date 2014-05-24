<!-- Nav tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#map" data-toggle="tab"><?php $this->lang->line('offices') ?></a></li>
	<li><a href="#contactenos" data-toggle="tab"><?php $this->lang->line('contact') ?></a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane active" id="oficinas">
		<section class="contact-list col-md-4">
		  	<ul class="nav">
		  		<?php foreach($locations as $key => $location): ?>
				<li class="office <?php echo $key+1 ?>" data-lat="<?php echo $location->getLatitude() ?>" data-lon="<?php echo $location->getLongitude() ?>">
					<ul>
						<li class="office-title"><?php echo $location->getName() ?></li>
						<li class="office-address"><?php echo $location->getAddress() ?></li>
						<li class="office-phone"><?php echo $location->getPhone() ?></li>
					</ul>
				</li>
				<?php endforeach ?>
			</ul>
		</section>
		<section class="contact-detail col-md-8">
			<div class="contact-content">
				<div id="map_canvas"></div>
			</div>
		</section>
	</div>
</div>

<div class="tab-content">
	<div class="tab-pane" id="contactenos">
		<section class="contact-detail col-md-12">
			<form class="form-horizontal">
				<fieldset>
				<!-- Form Name -->
				<legend>Enviar Mensaje</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="name">Nombre</label>  
				  <div class="col-md-6">
				  <input id="name" name="name" type="text" placeholder="Tu nombre" class="form-control input-md" required="">  
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="email">Email</label>  
				  <div class="col-md-6">
				  <input id="email" name="email" type="text" placeholder="Correo electronico" class="form-control input-md" required="">  
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="subject">Asunto</label>  
				  <div class="col-md-6">
				  <input id="subject" name="subject" type="text" placeholder="Asunto" class="form-control input-md">  
				  </div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="message">Mensaje</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="message" name="message"></textarea>
				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="send"></label>
				  <div class="col-md-4">
				    <button id="send" name="send" class="btn btn-primary">Enviar</button>
				  </div>
				</div>

				</fieldset>
			</form>
		</section>
	</div>
</div>	

<!-- JS -->
<script src="<?php echo public_url('js/classes/MD5.js') ?>"></script>
<script src="<?php echo public_url('js/classes/MapManager.js') ?>"></script>
<script src="<?php echo public_url('js/contact.js') ?>"></script>