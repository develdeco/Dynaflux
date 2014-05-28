<section class="contact-list col-md-12">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="#map" data-toggle="tab"><?php echo $this->lang->line('OfficesTabTitle') ?></a>
		</li>
		<li>
			<a href="#contactenos" data-toggle="tab"><?php echo $this->lang->line('ContactTabTitle') ?></a>
		</li>
	</ul>
</section>
<section class="contact-detail col-md-12">
	<div class="contact-content">
		<div class="contact-tabs">
			<div class="tab-content">
				<div class="tab-pane" id="contactenos">
					<div class="row">
						<div class="col-md-4">
							<!-- Tab panes -->
							<div class="tab-content">
							  <div class="tab-pane active" id="oficinas">
							  	<ul class="nav">
							  		<?php foreach($contacts as $key => $contact): ?>
									<li class="office <?php echo $key ?>">
										<ul>
											<li class="nombre-contacto"><?php echo $contact->GetName() ?></li>
											<li class="email-contacto"><?php echo $contact->GetEmail() ?></li>
											<li class="telefono-contacto"><?php echo $contact->GetPhone() ?></li>
										</ul>
									</li>
									<?php endforeach ?>
								</ul>
							  </div>
							</div>
						</div>
						<div class="col-md-8">
							<form class="form-horizontal">
								<fieldset>
								<!-- Form Name -->
								<legend>Enviar Mensaje</legend>

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="name"><?php echo $this->lang->line('FormNameLabel') ?></label>  
									<div class="col-md-6">
										<input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">  
									</div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="email"><?php echo $this->lang->line('FormEmailLabel') ?></label>  
								  <div class="col-md-6">
								  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">  
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="subject"><?php echo $this->lang->line('FormSubjectLabel') ?></label>  
								  <div class="col-md-6">
								  <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md">  
								  </div>
								</div>

								<!-- Textarea -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="message"><?php echo $this->lang->line('FormContentLabel') ?></label>
								  <div class="col-md-4">                     
								    <textarea class="form-control" id="message" name="message"></textarea>
								  </div>
								</div>

								<!-- Button -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="send"></label>
								  <div class="col-md-4">
								    <button id="send" name="send" class="btn btn-primary"><?php echo $this->lang->line('FormSendButton') ?></button>
								  </div>
								</div>

								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-pane active" id="map">
					<div class="row">
						<div class="col-md-4">
							<!-- Tab panes -->
							<div class="tab-content">
							  <div class="tab-pane active" id="oficinas">
							  	<ul class="nav">
									<?php foreach($locations as $key => $location): ?>
									<li class="office <?php echo $key+1 ?>" data-lat="<?php echo $location->GetLatitude() ?>" data-lon="<?php echo $location->GetLongitude() ?>">
										<ul>
											<li class="office-title"><?php echo $location->GetName() ?></li>
											<li class="office-address"><?php echo $location->GetAddress() ?></li>
											<li class="office-phone"><?php echo $location->GetPhone() ?></li>
										</ul>
									</li>
									<?php endforeach ?>
								</ul>
							  </div>
							</div>
						</div>
						<div class="col-md-8">
							<div id="map_canvas"></div>
						</div>	
					</div>
				</div>	
			</div>	
		</div>
	</div>
</section>

<!-- JS -->
<script src="<?php echo Tools::PublicUrl('js/classes/MD5.js') ?>"></script>
<script src="<?php echo Tools::PublicUrl('js/classes/MapManager.js') ?>"></script>
<script src="<?php echo Tools::PublicUrl('js/contact.js') ?>"></script>