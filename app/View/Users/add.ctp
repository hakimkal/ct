   <!--<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/');?>css/signup-css/demo1.css" />-->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/');?>css/signup-css/style2.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/');?>css/signup-css/animate-custom.css" />

<section>
    

    
        <div class="container">
            
            <!-- 1 -->
            <div class="row">
            <!--Right Side form section-->

                 <div class=" twelve columns car-box" id="form_right" >
					
                    
                    
                    
<section>				
                <div id="container_demo">
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        

                        <div id="login" class="animate form">
                           <?php echo $this->Form->create('User',array('action'=>'add','autocomplete'=>'on'))?>
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Email</label>
                                   
                                <?php echo $this->Form->email('email',array('required'=>true,'placeholder'=>'eg. staffemail@mail.com'));?>
                                </p>
                                 
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password </label>
                                    
                                <?php echo $this->Form->password('password',array('required'=>true,'placeholder'=>'eg. X8df!90EO'));?>
                                
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please Re-type password Again </label>
                                           <?php echo $this->Form->password('password_verify',array('required'=>true,'placeholder'=>'eg. X8df!90EO'));?>
                       
                                
                                </p>
                                
                                 <p> 
                                    <label for="firstname" class="firstname" data-icon="p">Firstname </label>
                                           <?php echo $this->Form->text('firstname',array('required'=>true,'placeholder'=>'eg. Joe'));?>
                       
                                
                                </p>
                                
                                
                         <p> 
                                    <label for="lastname" class="firstname" data-icon="p">Firstname </label>
                                           <?php echo $this->Form->text('lastname',array('required'=>true,'placeholder'=>'eg. Thomas'));?>
                       
                                
                                </p>
                                
                       
                                <p class="signin button"> 
									<input type="submit" value="Sign up"> 
								</p>
                                 
                           <?php echo $this->Form->end();?>
                        </div>
						
                    </div>
                </div>  
            </section>                    
                 
                    
                    
                    
                    	
				</div>
            <!--Right Side form section end -->

			


            </div>
            <!-- .1 -->



            
        </div>


        </div>
        </div>
    </section>
    
       
                   <br/> 
    <!-- ================================================== Home Listing ============================================== -->
<div style="clear:both;"></div>

    <!-- ================================================== TOP FOOTER ================================================== -->
   <?php echo $this->Element('section_contact');?>

    <!-- ================================================== TOP FOOTER ================================================== -->
    