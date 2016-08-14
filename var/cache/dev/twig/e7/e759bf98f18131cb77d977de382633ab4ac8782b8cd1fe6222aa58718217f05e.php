<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9b08b62c448caa4480ff178c79b5cd8b9fca1178590c3e325b74cbf7407761e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a87153eac5dfc9af665f8edf1fbc387e4b683f758fa76d52c1baeff1c7c580eb = $this->env->getExtension("native_profiler");
        $__internal_a87153eac5dfc9af665f8edf1fbc387e4b683f758fa76d52c1baeff1c7c580eb->enter($__internal_a87153eac5dfc9af665f8edf1fbc387e4b683f758fa76d52c1baeff1c7c580eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a87153eac5dfc9af665f8edf1fbc387e4b683f758fa76d52c1baeff1c7c580eb->leave($__internal_a87153eac5dfc9af665f8edf1fbc387e4b683f758fa76d52c1baeff1c7c580eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fee6d634b70d5fcf6e465b34ff9b02b952ff74011722823b97b51395d43ecd52 = $this->env->getExtension("native_profiler");
        $__internal_fee6d634b70d5fcf6e465b34ff9b02b952ff74011722823b97b51395d43ecd52->enter($__internal_fee6d634b70d5fcf6e465b34ff9b02b952ff74011722823b97b51395d43ecd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fee6d634b70d5fcf6e465b34ff9b02b952ff74011722823b97b51395d43ecd52->leave($__internal_fee6d634b70d5fcf6e465b34ff9b02b952ff74011722823b97b51395d43ecd52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb544f0a60b679f7628900038cc4d98cb83cafe60170f92eb6fa1756f25af31 = $this->env->getExtension("native_profiler");
        $__internal_2cb544f0a60b679f7628900038cc4d98cb83cafe60170f92eb6fa1756f25af31->enter($__internal_2cb544f0a60b679f7628900038cc4d98cb83cafe60170f92eb6fa1756f25af31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2cb544f0a60b679f7628900038cc4d98cb83cafe60170f92eb6fa1756f25af31->leave($__internal_2cb544f0a60b679f7628900038cc4d98cb83cafe60170f92eb6fa1756f25af31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4551c3b35b0c8a73ec0172b8c82dea6464109382b81143f735737788a5a3a6a = $this->env->getExtension("native_profiler");
        $__internal_a4551c3b35b0c8a73ec0172b8c82dea6464109382b81143f735737788a5a3a6a->enter($__internal_a4551c3b35b0c8a73ec0172b8c82dea6464109382b81143f735737788a5a3a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a4551c3b35b0c8a73ec0172b8c82dea6464109382b81143f735737788a5a3a6a->leave($__internal_a4551c3b35b0c8a73ec0172b8c82dea6464109382b81143f735737788a5a3a6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
