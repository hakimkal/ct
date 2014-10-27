<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Cost Trackers Ltd | Construction Cost
						Control, Construction Quality Management & Real Estate
						Development Management in Nigeria' );
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

	 

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
    <!-- Meta Tags
================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="Costrackers Ltd Website">
    <meta name="keywords" content="costrackers cost trackers abuja nigeria leproghrammeen Le Proghrammeen" />
    <meta name="author" content="Le Proghrammeen Solutions">

    <!-- Site Title
================================================== -->
    
    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="<?php echo $this->Html->url('/');?>css/style.css">

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Favicon
================================================== -->
    <link rel="shortcut icon" href="<?php echo $this->Html->url('/img/');?>images/favicon.png" type="image/x-icon">

    <!-- Google Analytics
================================================== -->
</head>

<body>
	 
	



 <!-- ================================================== HEADER ================================================== -->
    <header>
<?php 
 if(!$this->Session->read('Auth.User.id')){
  echo $this->Element('public_header');
  }
  else{
  	
echo $this->Element('logged_in_menu');
  }
?>
    </header>
    <!-- ================================================== END HEADER ================================================== -->

 
   <?php echo $this->fetch('content');?>
   
   
 
    <!-- ================================================== BOTTOM FOOTER ================================================== -->
    <footer>
    <?php echo $this->Element('public_footer');?>
    </footer>
    
    
    <!-- ================================================== BOTTOM FOOTER ================================================== -->

    <!-- ================================================== TO TOP ================================================== -->
    <div class="to-top">
        <a href="#">
            <span class="icon-arrow-up"></span>
        </a>
    </div>
    <!-- ================================================== TO TOP ================================================== -->

    <!-- Javascript
================================================== -->
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery.dscountdown.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/easyResponsiveTabs.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery.knob.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/jquery.mapmarker.js"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/');?>js/custom.js"></script>

    <!-- End Document
================================================== -->
<?php 
if($_SERVER['SERVER_NAME'] == 'localhost'){
echo $this->element('sql_dump'); 
}

?>
</body>
</html>
    
