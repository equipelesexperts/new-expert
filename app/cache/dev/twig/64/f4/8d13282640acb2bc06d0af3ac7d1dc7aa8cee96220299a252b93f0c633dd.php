<?php

/* ExpertUserBundle:Default:signUp.html.twig */
class __TwigTemplate_64f48d13282640acb2bc06d0af3ac7d1dc7aa8cee96220299a252b93f0c633dd extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<form class=\"form-horizontal\"  action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("administration_user_add");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\" name=\"us\">
    <fieldset >
        <legend>S'inscrire</legend>
        <div class=\"container well\">
            <fieldset><legend></legend>
                
                
                <div class=\"form-group\">
                    <label  class=\"col-sm-2 col-md-4  control-label champObligatoire\">Login</label>
                    <div class=\"col-sm-10 col-md-4\">
                        
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label  class=\"col-sm-2 col-md-4  control-label champObligatoire\">Email</label>  
                    <div class=\"col-sm-10 col-md-4\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label  class=\"col-sm-2 col-md-4  control-label champObligatoire\">Mot de passe</label>
                    <div class=\"col-sm-10 col-md-4\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label  class=\"col-sm-2 col-md-4  control-label champObligatoire\">Confirm</label>  
                    <div class=\"col-sm-10 col-md-4\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                 ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'errors');
        echo "
                    </div>
                </div>
                            </fieldset>
        </div>    
                 <div class='hidden hide'> ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</div>
        <div class=\"form-group \">
            <div class=\"col-md-4 col-md-offset-5\">
                <input class=\" btn  btn-success \"  type=\"submit\" value=\"Enregistrer\">

                <a class=\"btn btn-default \" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("administration_acceuil_homepage");
        echo "\">
                    Annuler

                </a>
            </div>
        </div>
    </fieldset>
</form>
";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ExpertUserBundle:Default:signUp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 65,  141 => 64,  128 => 54,  120 => 49,  112 => 44,  106 => 41,  97 => 35,  91 => 32,  82 => 26,  73 => 20,  57 => 9,  51 => 7,  48 => 6,  41 => 3,  38 => 2,  11 => 1,);
    }
}
