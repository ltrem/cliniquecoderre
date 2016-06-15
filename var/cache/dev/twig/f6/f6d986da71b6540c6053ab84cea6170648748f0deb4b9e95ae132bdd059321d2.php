<?php

/* base.html.twig */
class __TwigTemplate_cf614895dcc6fc5f22ae7facc2d57f4e830c51683678ac74d7ecf94b4637a9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a06e3e412b8b05c855238c87156ac1b5b389792b243f469550766704be54e47c = $this->env->getExtension("native_profiler");
        $__internal_a06e3e412b8b05c855238c87156ac1b5b389792b243f469550766704be54e47c->enter($__internal_a06e3e412b8b05c855238c87156ac1b5b389792b243f469550766704be54e47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a06e3e412b8b05c855238c87156ac1b5b389792b243f469550766704be54e47c->leave($__internal_a06e3e412b8b05c855238c87156ac1b5b389792b243f469550766704be54e47c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c6e5c44b7ab61138d238c6acbe33ee15fe4a7e0b3bf8e43c432e49edb18a2e6 = $this->env->getExtension("native_profiler");
        $__internal_3c6e5c44b7ab61138d238c6acbe33ee15fe4a7e0b3bf8e43c432e49edb18a2e6->enter($__internal_3c6e5c44b7ab61138d238c6acbe33ee15fe4a7e0b3bf8e43c432e49edb18a2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3c6e5c44b7ab61138d238c6acbe33ee15fe4a7e0b3bf8e43c432e49edb18a2e6->leave($__internal_3c6e5c44b7ab61138d238c6acbe33ee15fe4a7e0b3bf8e43c432e49edb18a2e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e298e7e7443c867d5327d8f01604260ae770eba8951a2e47a472dc7676a2f149 = $this->env->getExtension("native_profiler");
        $__internal_e298e7e7443c867d5327d8f01604260ae770eba8951a2e47a472dc7676a2f149->enter($__internal_e298e7e7443c867d5327d8f01604260ae770eba8951a2e47a472dc7676a2f149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e298e7e7443c867d5327d8f01604260ae770eba8951a2e47a472dc7676a2f149->leave($__internal_e298e7e7443c867d5327d8f01604260ae770eba8951a2e47a472dc7676a2f149_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcdd5a7ccb38c0b801ccc7f8756b51c5949db6cde9e2af8ccc94585288d9fe52 = $this->env->getExtension("native_profiler");
        $__internal_bcdd5a7ccb38c0b801ccc7f8756b51c5949db6cde9e2af8ccc94585288d9fe52->enter($__internal_bcdd5a7ccb38c0b801ccc7f8756b51c5949db6cde9e2af8ccc94585288d9fe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bcdd5a7ccb38c0b801ccc7f8756b51c5949db6cde9e2af8ccc94585288d9fe52->leave($__internal_bcdd5a7ccb38c0b801ccc7f8756b51c5949db6cde9e2af8ccc94585288d9fe52_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46d6b7a13f9b07f427dc318ab5d1f772cd57fccdb2d0a24b2f9e901f254f455c = $this->env->getExtension("native_profiler");
        $__internal_46d6b7a13f9b07f427dc318ab5d1f772cd57fccdb2d0a24b2f9e901f254f455c->enter($__internal_46d6b7a13f9b07f427dc318ab5d1f772cd57fccdb2d0a24b2f9e901f254f455c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_46d6b7a13f9b07f427dc318ab5d1f772cd57fccdb2d0a24b2f9e901f254f455c->leave($__internal_46d6b7a13f9b07f427dc318ab5d1f772cd57fccdb2d0a24b2f9e901f254f455c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
