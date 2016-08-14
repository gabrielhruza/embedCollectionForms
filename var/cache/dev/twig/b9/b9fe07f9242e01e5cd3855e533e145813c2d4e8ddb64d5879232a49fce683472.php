<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1bd06910b2f4265a620f69f9b41a042746c4b065dbe9188115306c8d99602546 extends Twig_Template
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
        $__internal_9ea5d6bfde882c9a5ee2284882be1ea8c2a42fbc3bc51c9908642a51052ccf83 = $this->env->getExtension("native_profiler");
        $__internal_9ea5d6bfde882c9a5ee2284882be1ea8c2a42fbc3bc51c9908642a51052ccf83->enter($__internal_9ea5d6bfde882c9a5ee2284882be1ea8c2a42fbc3bc51c9908642a51052ccf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea5d6bfde882c9a5ee2284882be1ea8c2a42fbc3bc51c9908642a51052ccf83->leave($__internal_9ea5d6bfde882c9a5ee2284882be1ea8c2a42fbc3bc51c9908642a51052ccf83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a2753878cdd766f918059189ed4539667708d0a71239671fc1dd5325fc8fdd1 = $this->env->getExtension("native_profiler");
        $__internal_0a2753878cdd766f918059189ed4539667708d0a71239671fc1dd5325fc8fdd1->enter($__internal_0a2753878cdd766f918059189ed4539667708d0a71239671fc1dd5325fc8fdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a2753878cdd766f918059189ed4539667708d0a71239671fc1dd5325fc8fdd1->leave($__internal_0a2753878cdd766f918059189ed4539667708d0a71239671fc1dd5325fc8fdd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_510042b7836be7484eb7667e7541f25ffb38d084f7c4618edb0ede36f1226447 = $this->env->getExtension("native_profiler");
        $__internal_510042b7836be7484eb7667e7541f25ffb38d084f7c4618edb0ede36f1226447->enter($__internal_510042b7836be7484eb7667e7541f25ffb38d084f7c4618edb0ede36f1226447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_510042b7836be7484eb7667e7541f25ffb38d084f7c4618edb0ede36f1226447->leave($__internal_510042b7836be7484eb7667e7541f25ffb38d084f7c4618edb0ede36f1226447_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8844a3bfa49bfe3e2876a868fa1e0fa5c240c4393353a24941da40d393c83df = $this->env->getExtension("native_profiler");
        $__internal_c8844a3bfa49bfe3e2876a868fa1e0fa5c240c4393353a24941da40d393c83df->enter($__internal_c8844a3bfa49bfe3e2876a868fa1e0fa5c240c4393353a24941da40d393c83df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8844a3bfa49bfe3e2876a868fa1e0fa5c240c4393353a24941da40d393c83df->leave($__internal_c8844a3bfa49bfe3e2876a868fa1e0fa5c240c4393353a24941da40d393c83df_prof);

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
