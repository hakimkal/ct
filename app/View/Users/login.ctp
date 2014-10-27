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
                          
                            <?php echo $this->Form->create('User',array('action'=>'login','autocomplete'=>'on'));?>
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u"> Your email or username </label>
                                      <?php echo $this->Form->email('email',array('required'=>'required','id'=>'username','placeholder'=>'mymail@mail.com'))?>
                           
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                         <?php echo $this->Form->password('password',array('required'=>'required','id'=>'password','placeholder'=>'eg. X8df!90EO'))?>
                                </p>
                                 
                                <p class="login button"> 
                                    <input type="submit" value="Login"> 
								</p>
                               
                          <?php echo $this->Form->end();?>
                        </div>

                        <div id="register" class="animate form">
                            <form action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required type="text" placeholder="mysuperusername690">
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e"> Your email</label>
                                    <input id="emailsignup" name="emailsignup" required type="email" placeholder="mysupermail@mail.com"> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required type="password" placeholder="eg. X8df!90EO">
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required type="password" placeholder="eg. X8df!90EO">
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
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
    
    
    <!-- ================================================== Home Listing ============================================== -->
<div style="clear:both;"></div>

    <!-- ================================================== TOP FOOTER ================================================== -->
    <section>
        <div class="dark-promo">
            <div class="container">
                <div class="row">
                    <div class="promo dark">
                        <h1 data-appear-animation="flipInX">+234-9-782 0993</h1>
                        <h4 data-appear-animation="flipInX">Cost Trackers, Maitama,Abuja 
                            <br />
                            <b>Mon - Fri:</b> 9am - 5pm, <b>Sat:</b> OFF, <b>Sun:</b> OFF</h4>
                        <div class="button-wrap"> <a href="<?php echo $this->Html->url('/contact');?>" class="button dark medium" data-appear-animation="flipInX">CONTACT US</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================== TOP FOOTER ================================================== -->
    