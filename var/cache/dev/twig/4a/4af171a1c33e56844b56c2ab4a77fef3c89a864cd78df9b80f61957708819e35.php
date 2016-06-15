<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_92672ab678f08c327d5c67b6b6b36fe12d8a9658e3596dc20fa39769e8c25a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ac766c8aa8719b8cafceff4225cb87044f30fd59ffeefd46ca31e66febd4cae = $this->env->getExtension("native_profiler");
        $__internal_8ac766c8aa8719b8cafceff4225cb87044f30fd59ffeefd46ca31e66febd4cae->enter($__internal_8ac766c8aa8719b8cafceff4225cb87044f30fd59ffeefd46ca31e66febd4cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac766c8aa8719b8cafceff4225cb87044f30fd59ffeefd46ca31e66febd4cae->leave($__internal_8ac766c8aa8719b8cafceff4225cb87044f30fd59ffeefd46ca31e66febd4cae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2bfbf0098d738460508caf9c6067676fc91de140830c3ee8b12c365fead92ae = $this->env->getExtension("native_profiler");
        $__internal_b2bfbf0098d738460508caf9c6067676fc91de140830c3ee8b12c365fead92ae->enter($__internal_b2bfbf0098d738460508caf9c6067676fc91de140830c3ee8b12c365fead92ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2bfbf0098d738460508caf9c6067676fc91de140830c3ee8b12c365fead92ae->leave($__internal_b2bfbf0098d738460508caf9c6067676fc91de140830c3ee8b12c365fead92ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29d1aadb2da10eee426e90ded0a3bb45322f7fd95cb0514593497217790d51cb = $this->env->getExtension("native_profiler");
        $__internal_29d1aadb2da10eee426e90ded0a3bb45322f7fd95cb0514593497217790d51cb->enter($__internal_29d1aadb2da10eee426e90ded0a3bb45322f7fd95cb0514593497217790d51cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_29d1aadb2da10eee426e90ded0a3bb45322f7fd95cb0514593497217790d51cb->leave($__internal_29d1aadb2da10eee426e90ded0a3bb45322f7fd95cb0514593497217790d51cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f401c8bb0233214e50f01b71afb3a29a003976153005eb669a33020731abc31f = $this->env->getExtension("native_profiler");
        $__internal_f401c8bb0233214e50f01b71afb3a29a003976153005eb669a33020731abc31f->enter($__internal_f401c8bb0233214e50f01b71afb3a29a003976153005eb669a33020731abc31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f401c8bb0233214e50f01b71afb3a29a003976153005eb669a33020731abc31f->leave($__internal_f401c8bb0233214e50f01b71afb3a29a003976153005eb669a33020731abc31f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
