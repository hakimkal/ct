<?php $this->Html->addCrumb('Join Us','/register');?>
<div id="main" class="site-main container_16">
	<div class="inner">

		<div class="register_form">
			<div class="reg_header">
				<br />
				<p class="form_heading">GOTNI Registration Form</p>
				 
				<?php
				if ($this->Facebook->registration ()) {
					echo $this->Facebook->registration ( array (
							'fields' => 'name,gender,location,email',
							'width' => 600,
							'redirect-uri' => 'http://localhost/process_facebook_registration' 
					) );
				} else {
					echo $this->Facebook->login ();
				}
				?>
				
	 
	
	
		
	 
			</div>




			<div class="clear"></div>

		</div>
	</div>
</div>