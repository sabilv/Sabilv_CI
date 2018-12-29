    <!-- Page Header -->
    <!-- Photo by Chris Ried on Unsplash https://unsplash.com/photos/ieic5Tq8YMk-->
    <header class="masthead" style="background-image: url('<?php echo base_url('assets/img/chris-ried-512801-unsplash.jpg'); ?>');">
    <div class="overlayB"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h1>@sabilv</h1>
                
                <span class="subheading">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </span>
            </div>
        </div>
        </div>
    </div>
    </header>   

    <div class="container">
        <div class="row">
            <!-- Home Content -->
            <div class="col-lg-8">
                <!-- Section latest Blog entry 
                 TODO: call from database top 3 new Blog entry
                -->
                <section class="about" id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="text-center">Latest Blog Entry</h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 mx-auto text-justify">
                                <h4><b>Post 1</b></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas sed leo ut porttitor. Mauris facilisis nisl a elit tempor.</p>
                            </div>
                            <div class="col-sm-12 mx-auto text-justify">
                                <h4><b>Post 2</b></h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates consequatur veritatis sit reprehenderit, rem illo neque, quis amet facilis impedit, sint voluptas. Ad facilis quas atque eum molestiae accusamus odio.</p>
                            </div>
                            <div class="col-sm-12 mx-auto text-justify">
                                <h4><b>Post 3</b></h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates consequatur veritatis sit reprehenderit, rem illo neque, quis amet facilis impedit, sint voluptas. Ad facilis quas atque eum molestiae accusamus odio.</p>
                            </div>                
                        </div>           
                    </div>
                </section>
                <hr>
                <!-- end of section blog entry -->
                <!-- adv section 
                    this section use place holder image from
                    Photo by Justin Lim on Unsplash
                    https://unsplash.com/photos/JKjBsuKpatU
                -->
                <section class="adv" id="adv">                    
                    <div class="container">
                        <div class="row justify-content-center">
                        <div class="col-md-6 mx-auto text-center">
                            <img src="https://via.placeholder.com/350x150?text=advertise%20here@sabilv" class="img-fluid img-thumbnail" alt="Responsive image">
                        </div>
                        <div class="col-md-6 mx-auto text-center">
                            <img src="https://via.placeholder.com/350x150?text=advertise%20here@sabilv"  class="img-fluid img-thumbnail" alt="Responsive image">
                        </div>                  
                    </div>
                </section>
                <div class="text-right">
                <p style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
                          font-size: 10px;">this section is placehoder a for ad - for more info go to <a href="<?= base_url(); ?>Contact"">Contact</a></p>   
                </div>
                <hr>
                <!-- end of adv section-->
                 <!-- Section latest Info entry 
                 TODO: call from database top 3 new Info entry
                -->
                <section class="about" id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="text-center">Latest Info Entry</h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 mx-auto text-justify">
                                <h4><b>Info 1</b></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas sed leo ut porttitor. Mauris facilisis nisl a elit tempor.</p>
                            </div>
                            <div class="col-sm-12 mx-auto text-justify">
                                <h4><b>Info 2</b></h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates consequatur veritatis sit reprehenderit, rem illo neque, quis amet facilis impedit, sint voluptas. Ad facilis quas atque eum molestiae accusamus odio.</p>
                            </div>
                            <div class="col-sm-12 mx-auto text-justify">
                                <h4><b>Info 3</b></h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates consequatur veritatis sit reprehenderit, rem illo neque, quis amet facilis impedit, sint voluptas. Ad facilis quas atque eum molestiae accusamus odio.</p>
                            </div>                
                        </div>           
                    </div>
                </section>
                <!-- end of section Info entry -->               
            </div>
             <!-- end of Home Content -->
            <!-- Widget Content -->
            <div class="col-lg-4">
                <section class="widget" id="widget">
                    <div class="container">                     
                        <div class="text-center mt-3">
                            <p class="title" id="title">Today Weather</p>
                            <hr>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/n6d18106d87/jakarta/" data-label_1="JAKARTA" data-label_2="WEATHER" data-theme="pure" >JAKARTA WEATHER</a>
                            <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                            </script>
                        </div>
                        <div class="text-center">
                            <p class="title" id="title">Follow my <i class="fab fa-twitter"> twitter</i></p>
                            <hr>   
                                               
                        </div>
                    </div>
                 </section>
            </div>
            <!-- end of widget content -->
        </div>
    </div>





    