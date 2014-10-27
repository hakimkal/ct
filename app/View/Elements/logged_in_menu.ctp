   <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">

                    <!-- notification -->
                    <div class="notification">
                        <p>Hello, <?php echo $this->Session->read('Auth.User.firstname');?></p>
                    </div>
                    <!-- .notification -->

                    <!-- call us -->
                   <div class="call-us">
                        
                           <a href="<?php echo $this->Html->url('/logout');?>" class="  medium light " style="color:#fff;">
                        <span class="icon-plus"></span>Logout</a>
                    </div>
                    <!-- .call us -->

                   
                </div>
            </div>
        </div>
        <!-- .top bar -->

        <!-- navigation and logo -->
        <div class="navigation clearfix">
            <div class="container">
                <div class="row">

                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo $this->Html->url('/login');?>">
                            <img src="<?php echo $this->Html->url('/img/')?>images/logo.png" title="Cost Trackers" alt="Cost Trackers Logo" />
                        </a>
                    </div>
                    <!-- .logo -->

                    <!-- navigation -->
                    <nav>

                        <!-- navigation wrap -->
                        <div class="main-nav">

                            <!-- navigation search -->
                            <div class="nav-search">
                                <form method="post" action="#">
                                    <fieldset>
                                        <span class="icon-search"></span>
                                        <input type="text" value="Type term and hit enter..." onfocus="if(this.value=='Type term and hit enter...'){this.value=''}" onblur="if(this.value==''){this.value='Type term and hit enter...'}" />
                                    </fieldset>
                                </form>
                            </div>
                            <!-- .navigation search -->

                            <!-- main navigation -->
                            <ul class="main-navigation">


                                <!-- home -->
                                <li><a href="index.html" class="active">Home</a> 
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home v1</a> 
                                            <li><a href="index-1.html">Home v2</a>
                                            </li>
                                            <li><a href="index-2.html">Home v3</a>
                                            </li>

                                            <li><a href="index-3.html">Headers</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index-4.html">Header v1</a>
                                                    </li>
                                                    <li><a href="index-5.html">Header v2</a>
                                                    </li>
                                                    <li><a href="index-6.html">Header v3</a>
                                                    </li>
                                                    <li><a href="index-7.html">Header v4</a>
                                                    </li>
                                                    <li><a href="index-8.html">Header v5</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li><a href="index-8.html">Footers</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index-9.html#footer-1">Footer v1</a>
                                                    </li>
                                                    <li><a href="index-10.html#footer-2">Footer v2</a>
                                                    </li>
                                                    <li><a href="index-11.html#footer-3">Footer v3</a>
                                                    </li>

                                                </ul>
                                            </li>

                                    </ul>
                                    </li>
                                    <!-- .home -->

                                    <!-- pages -->
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="testimonials.html">Testimonials</a> 
                                            </li>
                                            <li><a href="faq.html">FAQ</a> 
                                            </li>
                                            <li><a href="full-width.html">Full Width</a> 
                                            </li>
                                            <li><a href="sidebar-left.html">Sidebar Left</a> 
                                            </li>
                                            <li><a href="sidebar-right.html">Sidebar Right</a> 
                                            </li>
                                            <li><a href="under-construction.html">Under Construction</a> 
                                            </li>
                                            <li><a href="404.html">404 Error</a> 
                                            </li>
                                            <li><a href="#">About</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About v1</a> 
                                                    </li>
                                                    <li><a href="about-1.html">About v2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="services.html">Services v1</a> 
                                                    </li>
                                                    <li><a href="services-1.html">Services v2</a> 
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- .pages -->

                                    <!-- blog -->
                                    <li><a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Blog Posts</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog v1</a> 
                                                    </li>
                                                    <li><a href="blog-1.html">Blog v2</a> 
                                                    </li>
                                                    <li><a href="blog-2.html">Blog v3</a> 
                                                    </li>
                                                    <li><a href="blog-3.html">Blog v4</a> 
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-single.html">Blog Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- .blog -->

                                    <!-- Homes -->
                                    <li><a href="#">Homes</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Home Listing</a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-listing.html">Home Listing v1</a> 
                                                    </li>
                                                    <li><a href="home-listing-1.html">Home Listing v2</a> 
                                                    </li>
                                                    <li><a href="home-listing-2.html">Home Listing v3</a> 
                                                    </li>
                                                    <li><a href="home-listing-3.html">Home Listing v4</a> 
                                                    </li>
                                                    <li><a href="home-listing-4.html">Home Listing v5</a> 
                                                    </li>
                                                    <li><a href="home-listing-5.html">Home Listing v6</a> 
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Single</a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-single.html">Home Single v1</a> 
                                                    </li>
                                                    <li><a href="home-single-1.html">Home Single v2</a> 
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </li>
                                    <!-- .Homes -->


                                    <!-- elements -->
                                    <li><a href="#">Elements</a>
                                        <ul class="sub-menu">
                                            <li><a href="animations.html">Animations</a> 
                                            </li>
                                            <li><a href="buttons.html">Buttons</a> 
                                            </li>
                                            <li><a href="form.html">Forms</a> 
                                            </li>
                                            <li><a href="grid.html">Grid</a> 
                                            </li>
                                            <li><a href="lightbox-modal.html">Lightboxes &amp; Modal</a> 
                                            </li>
                                            <li><a href="lists.html">Lists</a> 
                                            </li>
                                            <li><a href="notifications.html">Notifications</a> 
                                            </li>
                                            <li><a href="pagination.html">Pagination</a> 
                                            </li>
                                            <li><a href="price-boxes.html">Price Boxes</a> 
                                            </li>
                                            <li><a href="progress-bars.html">Progress Bars</a> 
                                            </li>
                                            <li><a href="promo-boxes.html">Promo Boxes</a> 
                                            </li>
                                            <li><a href="tabs.html">Tabs</a> 
                                            </li>
                                            <li><a href="typography.html">Typography</a> 
                                            </li>
                                            <li><a href="icons.html">Icons</a> 
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- .elements -->

                                    <!-- contact -->
                                    <li><a href="#">Contact</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact.html">Contact v1</a> 
                                            </li>
                                            <li><a href="contact-2.html">Contact v2</a> 
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- .contact -->

                            </ul>
                            <!-- .main navigation -->

                        </div>
                        <!-- .navigation wrap -->

                    </nav>
                    <!-- .navigation -->

                </div>
            </div>
        </div>
        <!-- .navigation and logo -->
