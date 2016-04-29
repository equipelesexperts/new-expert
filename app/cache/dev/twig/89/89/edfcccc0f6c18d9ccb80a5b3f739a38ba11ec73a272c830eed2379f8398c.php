<?php

/* ExpertAcceuilBundle:Default:index.html.twig */
class __TwigTemplate_8989edfcccc0f6c18d9ccb80a5b3f739a38ba11ec73a272c830eed2379f8398c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'containte' => array($this, 'block_containte'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "     ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
     ";
        // line 7
        $this->displayBlock('containte', $context, $blocks);
    }

    public function block_containte($context, array $blocks = array())
    {
        // line 8
        echo "             ";
        $this->displayParentBlock("containte", $context, $blocks);
        echo "   

       <section id=\"features\" class=\"section\">
                <div class=\"container\">
                    <div class=\"section-header\">
                        <h1 class=\"section-title wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"100ms\">App Features</h1>
                        <h2 class=\"section-subtitle wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Who seeks after it and wants to have it</h2>
                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-settings\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Built-with Bootstrap 3.5.x</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"450ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-done-all\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Material Design</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"550ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-image-blur-linear\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Clean and Refreshing</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>            


                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"650ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-communication-business\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Ready for Business or App</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"750ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-favorite\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Crafted with Love</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"850ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-hardware-phonelink\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Fully Responsive Layout</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </section>

            <section id=\"why\" class=\"section\">
                <div class=\"container\">

                    <div class=\"row\">     

                        <div class=\"col-md-6 col-sm-6 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"img/features/img1.png\" alt=\"\">
                        </div>

                        <div class=\"col-md-6 col-sm-6 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"pull-left content\">
                                <h2>This is Why You Will <br> Love Pluto</h2>
                                <p>
                                    Material UI Bootstrap APP and Business Template orem ipsum <br>
                                    dolor sit amet, consectetur adipIusto quisquam idodit dolore inventore <br>
                                    eumetur adipIusto quisquam idodit dolore inventore eum'
                                    dolor sit amet, consectetur adipIusto quisquam idodit dolore inventore <br>
                                </p>
                                <ul class=\"list-item\">
                                    <li><i class=\"mdi-action-done\"></i>OffCanvas Menu</li>
                                    <li><i class=\"mdi-action-done\"></i>Based on Material design</li>
                                    <li><i class=\"mdi-action-done\"></i>Free to Use</li>
                                    <li><i class=\"mdi-action-done\"></i>Built-with Bootstrap 3.5.x</li>
                                    <li><i class=\"mdi-action-done\"></i>Refreshing Designß</li>
                                </ul>
                                <a href=\"javascript:void(0)\" class=\"btn btn-lg btn-primary\">Downoad Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id=\"main-features\" class=\"section main-feature-gray\">
                <div class=\"container\">

                    <div class=\"row\">   
                        <div class=\"col-md-8 col-sm-8 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"feature-item\">
                                <h3 class=\"title-small\">
                                    Sync with the app to analyze your fitness
                                </h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's 
                                    standard dummy text, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard 
                                    dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-4 col-sm-4 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"img/features/fet1.png\" class=\"img-responsive\" alt=\"\">
                        </div>  

                    </div>

                </div>
            </section>

            <section id=\"main-features\" class=\"section\">
                <div class=\"container\">


                    <div class=\"row\">   
                        <div class=\"col-md-4 col-sm-4 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"img/features/fet2.png\" class=\"img-responsive\" alt=\"\">
                        </div>    

                        <div class=\"col-md-8 col-sm-8 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"feature-item\">
                                <h3 class=\"title-small\">
                                    Set a goal and improve your lifestyle
                                </h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's 
                                    standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard 
                                    dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section id=\"main-features\" class=\"section main-feature-gray\">
                <div class=\"container\">

                    <div class=\"row\">   
                        <div class=\"col-md-8 col-sm-8 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"feature-item\">
                                <h3 class=\"title-small\">
                                    Start a Well-controlled Day!
                                </h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's 
                                    standard dummy text, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard 
                                    dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-4 col-sm-4 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"img/features/fet3.png\" class=\"img-responsive\" alt=\"\">
                        </div>  

                    </div>

                </div>
            </section>

            <section id=\"cta\">
                <div class=\"container\">
                    <div class=\"row text-center\">         
                        <h3 class=\"title-small wow bounce\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">Join Us Today and Change Yourself</h3>
                        <a href=\"javascript:void(0)\" class=\"btn btn-lg btn-border\">Sign Up</a>
                    </div>
                </div>
            </section>

            <section id=\"screenshot\" class=\"section\">
                <div class=\"container\">
                    <div class=\"section-header\">
                        <h1 class=\"section-title wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">Screenshots</h1>
                        <h2 class=\"section-subtitle wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Material UI Bootstrap APP and Business Template</h2>
                    </div>
                </div>
                <div class=\"row\" style=\"margin:0; padding:0;\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\" style=\"margin:0; padding:0;\">
                        <div class=\"portfolio\">
                            <figure class=\"effect-julia\">
                                <img src=\"img/portfolio/img1.jpg\" alt=\"\">
                                <figcaption>
                                    <div class=\"heading\">
                                        <h3>Screenshot 1</h3>
                                        <p>
                                            MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                                        </p>
                                    </div>
                                    <div class=\"icon\">
                                        <i class=\"mdi-content-add-circle-outline\"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\" style=\"margin:0; padding:0;\">
                        <div class=\"portfolio\">
                            <figure class=\"effect-julia\">
                                <img src=\"img/portfolio/img2.jpg\" alt=\"\">
                                <figcaption>
                                    <div class=\"heading\">
                                        <h3>Screenshot 2</h3>
                                        <p>
                                            MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                                        </p>
                                    </div>
                                    <div class=\"icon\">
                                        <i class=\"mdi-content-add-circle-outline\"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\" style=\"margin:0; padding:0;\">
                        <div class=\"portfolio\">
                            <figure class=\"effect-julia\">
                                <img src=\"img/portfolio/img3.jpg\" alt=\"\">
                                <figcaption>
                                    <div class=\"heading\">
                                        <h3>Screenshot 3</h3>
                                        <p>
                                            MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                                        </p>
                                    </div>
                                    <div class=\"icon\">
                                        <i class=\"mdi-content-add-circle-outline\"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\" style=\"margin:0; padding:0;\">
                        <div class=\"portfolio\">
                            <figure class=\"effect-julia\">
                                <img src=\"img/portfolio/img4.jpg\" alt=\"\">
                                <figcaption>
                                    <div class=\"heading\">
                                        <h3>Screenshot 4</h3>
                                        <p>
                                            MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                                        </p>
                                    </div>
                                    <div class=\"icon\">
                                        <i class=\"mdi-content-add-circle-outline\"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\" style=\"margin:0; padding:0;\">
                        <div class=\"portfolio\">
                            <figure class=\"effect-julia\">
                                <img src=\"img/portfolio/img5.jpg\" alt=\"\">
                                <figcaption>
                                    <div class=\"heading\">
                                        <h3>Screenshot 5</h3>
                                        <p>
                                            MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                                        </p>
                                    </div>
                                    <div class=\"icon\">
                                        <i class=\"mdi-content-add-circle-outline\"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\" style=\"margin:0; padding:0;\">
                        <div class=\"portfolio\">
                            <figure class=\"effect-julia\">
                                <img src=\"img/portfolio/img6.jpg\" alt=\"\">
                                <figcaption>
                                    <div class=\"heading\">
                                        <h3>Screenshot 6</h3>
                                        <p>
                                            MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                                        </p>
                                    </div>
                                    <div class=\"icon\">
                                        <i class=\"mdi-content-add-circle-outline\"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>


            <section id=\"other-features\">
                <div class=\"container\">
                    <div class=\"section-header\">
                        <h1 class=\"section-title wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">Other Features</h1>
                        <h2 class=\"section-subtitle wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Who seeks after it and wants to have it</h2>
                    </div> 
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">
                            <div class=\"features-content\">
                                <div class=\"icon hi-icon-effect-3b\">
                                    <i class=\"mdi-action-settings\"></i>
                                </div>
                                <h3>Customization</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-lock-outline\"></i>
                                </div>
                                <h3>Security</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"800ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-file-cloud-queue\"></i>
                                </div>
                                <h3>Cloud</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1000ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-social-person-outline\"></i>
                                </div>
                                <h3>Analtyics</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-grade\"></i>
                                </div>
                                <h3>Performance</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1400ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-content-flag\"></i>
                                </div>
                                <h3>Network</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1600ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-communication-messenger\"></i>
                                </div>
                                <h3>Support</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1800ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-settings-power\"></i>
                                </div>
                                <h3>Easy</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id=\"testimonial\" class=\"section\">
                <div class=\"container\">
                    <div class=\"section-header text-center wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">
                        <h1 class=\"section-title\">What People Says</h1>
                        <h2 class=\"section-subtitle\">Material UI Bootstrap APP and Business Template</h2>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-offset-2 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">
                            <div id=\"testimonial-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                                <!-- Indicators -->
                                <ol class=\"carousel-indicators\">
                                    <li data-target=\"#testimonial-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                    <li data-target=\"#testimonial-carousel\" data-slide-to=\"1\"></li>
                                    <li data-target=\"#testimonial-carousel\" data-slide-to=\"2\"></li>
                                </ol>
                                <div class=\"carousel-inner\">
                                    <div class=\"item active text-center\">               
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                        <div class=\"meta\">
                                            <p>Web excutive <span><a href=\"http://wingthemes.com/\">WingThemes</a></span></p>
                                        </div>
                                    </div>
                                    <div class=\"item text-center\">                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                        <div class=\"meta\">
                                            <p>Web excutive <span><a href=\"http://graygrids.com/\">GrayGrids</a></span></p>
                                        </div>
                                    </div>
                                    <div class=\"item text-center\">                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                        <div class=\"meta\">
                                            <p>Web excutive <span><a href=\"http://landingbow.com/\">LandinBow</a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id=\"counter\" class=\"section\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6 col-xs-12 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"counter-item\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-get-app\"></i>
                                </div>
                                <h3 class=\"timer\">39000</h3>
                                <hr>
                                <h5>
                                    Free Downloads
                                </h5>          
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                            <div class=\"counter-item\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-face-unlock\"></i>
                                </div>
                                <h3 class=\"timer\">1046</h3>
                                <hr>
                                <h5>
                                    Premium Users
                                </h5>          
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"700ms\">
                            <div class=\"counter-item\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-grade\"></i>
                                </div>
                                <h3 class=\"timer\">6345</h3>
                                <hr>
                                <h5>
                                    Five Start Reviews
                                </h5>          
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
                            <div class=\"counter-item\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-trending-up\"></i>
                                </div>
                                <h3 class=\"timer\">18325</h3>
                                <hr>
                                <h5>
                                    Active Installs
                                </h5>          
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id=\"clients\" class=\"section\">
                <div class=\"container\">

                    <div class=\"section-header text-center\">
                        <h1 class=\"section-title wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">Featured on</h1>
                        <h2 class=\"section-subtitle wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">Material UI Bootstrap APP and Business Template</h2>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"client-item-wrapper\">
                                <img src=\"img/clients/img1.png\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                            <div class=\"client-item-wrapper\">
                                <img src=\"img/clients/img2.png\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"700ms\">
                            <div class=\"client-item-wrapper\">
                                <img src=\"img/clients/img3.png\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
                            <div class=\"client-item-wrapper\">
                                <img src=\"img/clients/img4.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id=\"contact\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <h2 class=\"section-title\">That's Where We Are</h2>
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-6\">
                                    <div class=\"info\">
                                        <div class=\"icon\">
                                            <i class=\"mdi-maps-map\"></i>
                                        </div>
                                        <h4>Location</h4>
                                        <p>NSW, Sydney, Australia</p>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6\">
                                    <div class=\"info\">
                                        <div class=\"icon\">
                                            <i class=\"mdi-content-mail\"></i>
                                        </div>
                                        <h4>Email</h4>
                                        <p>office@graygrids.com</p>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                                <div class=\"col-md-6 col-sm-6\">
                                    <div class=\"info\">
                                        <div class=\"icon\">
                                            <i class=\"mdi-action-settings-phone\"></i>
                                        </div>
                                        <h4>Phone Number</h4>
                                        <p>0753 016 572</p>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6\">
                                    <div class=\"info\">
                                        <div class=\"icon\">
                                            <i class=\"mdi-action-thumb-up\"></i>
                                        </div>
                                        <h4>Social Media</h4>
                                        <p>@GrayGrids</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <h2 class=\"section-title\">Love to Hear From You</h2>

                            <!-- Start Contact Form -->
                            <form role=\"form\" id=\"contactForm\" class=\"contact-form\" data-toggle=\"validator\" class=\"shake\">
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <i class=\"mdi-action-account-box\"></i>
                                        <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Name\" required data-error=\"Please enter your name\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <i class=\"mdi-content-mail\"></i>
                                        <input type=\"email\" class=\"email form-control\" id=\"email\" placeholder=\"Email\" required data-error=\"Please enter your email\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"msg_subject\" class=\"form-control\" placeholder=\"Subject\" required data-error=\"Please enter your message subject\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <textarea id=\"message\" rows=\"7\" placeholder=\"Massage\" class=\"form-control\" required data-error=\"Write your message\"></textarea>
                                        <div class=\"help-block with-errors\"></div>
                                    </div>  
                                </div>

                                <button type=\"submit\" id=\"submit\" class=\"btn btn-primary\"></i> Send Message</button>
                                <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div> 
                                <div class=\"clearfix\"></div>   

                            </form>     
                            <!-- End Contact Form -->


                        </div>
                    </div>
                </div>
            </section> 
         ";
    }

    // line 669
    public function block_javascripts($context, array $blocks = array())
    {
        // line 670
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ExpertAcceuilBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 670,  728 => 669,  63 => 8,  57 => 7,  52 => 6,  49 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
