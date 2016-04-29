<?php

/* ::base.html.twig */
class __TwigTemplate_a5ee803cd5956bb07d38d2a359535e6d7c9d6870c167b1ffee103e9b75ff3167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'containte' => array($this, 'block_containte'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
            <div class=\"map-area\">      
                <div class=\"map\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6853.31334931688!2d149.5710983929677!3d-33.43399308961885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x63680231a1016da2!2sWestern+Region+Academy+of+Sport!5e0!3m2!1sen!2sbd!4v1436826340086\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>

            <section id=\"footer\">
                <div class=\"container\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <h3>Products</h3>
                                <ul>
                                    <li><a href=\"http://wingthemes.com/\">WingThemes</a>
                                    </li>
                                    <li><a href=\"http://graygrids.com/\">Graygrids</a>
                                    </li>
                                    <li><a href=\"http://wpbean.com/\">WPBean</a>
                                    </li>
                                    <li><a href=\"http://landingbow.com/\">Landingbow</a>
                                    </li>
                                    <li><a href=\"http://freebiescircle.com/\">FreebiesCicle</a>
                                    </li>               
                                </ul>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <h3>FAQs</h3>
                                <ul>
                                    <li><a href=\"#\">Why choose us?</a>
                                    </li>
                                    <li><a href=\"#\">Where we are?</a>
                                    </li>
                                    <li><a href=\"#\">Fees</a>
                                    </li>
                                    <li><a href=\"#\">Guarantee</a>
                                    </li>
                                    <li><a href=\"#\">Discount</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <h3>About</h3>
                                <ul>
                                    <li><a href=\"#\">Career</a>
                                    </li>
                                    <li><a href=\"#\">Partners</a>
                                    </li>
                                    <li><a href=\"#\">Team</a>
                                    </li>
                                    <li><a href=\"#\">Clients</a>
                                    </li>
                                    <li><a href=\"#\">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <h3>Find us on</h3>
                                <a class=\"social\" href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"social\" href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"social\" href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a>
                            </div>
                        </div>
                    </div>  
                </div>      
                <!-- Go to Top Link -->
                <a href=\"#home\" class=\"btn btn-primary back-to-top\">
                    <i class=\" mdi-hardware-keyboard-arrow-up\"></i>
                </a>
            </section> 
            <section id=\"login\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <h2 class=\"section-title\">S'incrire</h2>

                            <form role=\"form\" id=\"contactForm\" class=\"contact-form\" data-toggle=\"validator\" class=\"shake\">
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <i class=\"mdi-action-account-box\"></i>
                                        <input type=\"text\" id=\"nom\" class=\"form-control\" placeholder=\"Nom\" required data-error=\"Entrez votre nom\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <i class=\"mdi-action-account-box\"></i>
                                        <input type=\"text\" id=\"prenom\" class=\"form-control\" placeholder=\"Prénom\" required data-error=\"Entrez votre prénom\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <i class=\"mdi-action-account-box\"></i>
                                        <input type=\"text\" id=\"telephone\" class=\"form-control\" placeholder=\"Téléphone\" data-error=\"Entrez votre prénom\">
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

                                <button type=\"button\" id=\"submit\" class=\"btn btn-primary\"></i>Enregister</button>
                                <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div> 
                                <div class=\"clearfix\"></div>   

                            </form>  

                        </div>
                        <div class=\"col-md-6 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <h2 class=\"section-title\">Login</h2>

                            <!-- Start Contact Form -->
                            <form role=\"form\" id=\"contactForm\" class=\"contact-form\" data-toggle=\"validator\" class=\"shake\">
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <i class=\"mdi-content-mail\"></i>
                                        <input type=\"email\" class=\"email form-control\" id=\"email\" placeholder=\"Email\" required data-error=\"Entrez votre email\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"controls\">
                                        <i class=\"mdi-action-account-box\"></i>
                                        <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"mot de pass\" required data-error=\"Entrez votre mot de pass\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                </div>
                                <button type=\"button\" id=\"submit\" class=\"btn btn-primary\"></i>Login</button>
                                <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div> 
                                <div class=\"clearfix\"></div>   

                            </form>     
                            <!-- End Contact Form -->


                        </div>
                    </div>
                </div>
            </section> 
            <section id=\"copyright\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"copyright-text\">
                                © Expert Lab's ";
        // line 220
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "now"), "Y"), "html", null, true);
        echo " All right reserved. Designed and Developed by 
                                <a href=\"javascript:void(0);\">
                                    Equipe les experts 
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>     
        </div>  

        ";
        // line 231
        $this->displayBlock('javascripts', $context, $blocks);
        // line 255
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "EXPERT";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/material.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/ripples.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "            <div class=\"navbar navbar-invers menu-wrap\">
                <div class=\"navbar-header text-center\">
                    <a class=\"navbar-brand logo-right\" href=\"javascript:void(0)\"><i class=\"mdi-image-timelapse\"></i>ExPert</a>
                </div>
                <ul class=\"nav navbar-nav main-navigation\">
                    <li class=\"active\"><a href=\"#home\">Accueil</a></li>
                    <li><a href=\"#features\">Presentation</a></li>
                    <li><a href=\"#why\">Pourquoi?</a></li>
                    <li><a href=\"#screenshot\">Screenshots</a></li>
                    <li><a href=\"#testimonial\">Testimonial</a></li>
                    <li><a href=\"#clients\">Contact</a></li>
                </ul>
                <button class=\"close-button\" id=\"close-button\">Fermé</button>
            </div>
            <div class=\"tahk\">
                <!--        <div class=\"content-wrap\">-->
                <header class=\"hero-area\" id=\"home\">

                    <div class=\"container\">
                        <div class=\"col-md-12\">

                            <div class=\"navbar navbar-inverse sticky-navigation navbar-fixed-top\" role=\"navigation\" data-spy=\"affix\" data-offset-top=\"200\">
                                <div class=\"container\">
                                    <div class=\"navbar-header\">
                                        <!--                  <a class=\"logo-left \" href=\"index.html\"><i class=\"mdi-image-timelapse\"></i>Pluto</a>-->
                                        <a href=\"#features\" class=\"hide contents btn btn-lg btn-border wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">S'inscrire</a>
                                        <a href=\"#login\" class=\"contents btn btn-lg btn-border wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Connexion</a>

                                    </div>
                                    <div class=\"navbar-right\">
                                        <button class=\"menu-icon\"  id=\"open-button\">
                                            <i class=\"mdi-navigation-menu\"></i>
                                        </button>             
                                    </div>
                                </div>
                            </div>
                        </div>        
                        <div class=\"contents text-right\">
                            <h1 class=\"wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">Expert Labs</h1>
                            <p class=\"wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Recherche - Experience - Aplcation - Confiance</p>
                            <a href=\"#why\" class=\"btn btn-lg btn-primary wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Download</a>
                            <div class=\"scrolle-auto\" style=\"position: fixed; top: 80%; left: 50%;\">
                                <a href=\"#copyright\" class=\"btn btn-primary back-to-down\">
                                    <i class=\" mdi-hardware-keyboard-arrow-down\" style=\"margin-top: 18px;\"></i>
                                </a>
                            </div>

                        </div>   
                </header>
                ";
        // line 68
        $this->displayBlock('containte', $context, $blocks);
        // line 70
        echo "            ";
    }

    // line 68
    public function block_containte($context, array $blocks = array())
    {
        // line 69
        echo "                ";
    }

    // line 231
    public function block_javascripts($context, array $blocks = array())
    {
        // line 232
        echo "            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/material.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/material.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/wow.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery.mmenu.min.all.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/count-to.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery.nav.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/smooth-on-scroll.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/smooth-scroll.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/form-validator.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/contact-form-script.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/main.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(document).ready(function () {
                    // This command is used to initialize some elements and make them work properly
                    \$.material.init();
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 247,  382 => 246,  378 => 245,  374 => 244,  370 => 243,  366 => 242,  362 => 241,  358 => 240,  354 => 239,  350 => 238,  346 => 237,  342 => 236,  338 => 235,  334 => 234,  330 => 233,  325 => 232,  322 => 231,  318 => 69,  315 => 68,  311 => 70,  309 => 68,  258 => 19,  255 => 18,  249 => 13,  245 => 12,  241 => 11,  237 => 10,  233 => 9,  228 => 8,  225 => 7,  219 => 6,  213 => 255,  211 => 231,  197 => 220,  46 => 71,  44 => 18,  37 => 15,  35 => 7,  31 => 6,  24 => 1,);
    }
}
