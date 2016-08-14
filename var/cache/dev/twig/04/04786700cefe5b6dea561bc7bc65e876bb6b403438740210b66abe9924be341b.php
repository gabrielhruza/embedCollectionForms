<?php

/* task/new.html.twig */
class __TwigTemplate_fc033d5bdba4cc93655eced0b5419ec167022ce240d35062878c62a3cfda7f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base.html.twig", "task/new.html.twig", 5);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb8d12f76453b3ba846b19b79ce82dc4ec002a09dd54df0d54e369d38882452e = $this->env->getExtension("native_profiler");
        $__internal_bb8d12f76453b3ba846b19b79ce82dc4ec002a09dd54df0d54e369d38882452e->enter($__internal_bb8d12f76453b3ba846b19b79ce82dc4ec002a09dd54df0d54e369d38882452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb8d12f76453b3ba846b19b79ce82dc4ec002a09dd54df0d54e369d38882452e->leave($__internal_bb8d12f76453b3ba846b19b79ce82dc4ec002a09dd54df0d54e369d38882452e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_abc3c2472deb38b6f2e036e19fa0bbfccc279ec9c942aa7946c3266766a4ee38 = $this->env->getExtension("native_profiler");
        $__internal_abc3c2472deb38b6f2e036e19fa0bbfccc279ec9c942aa7946c3266766a4ee38->enter($__internal_abc3c2472deb38b6f2e036e19fa0bbfccc279ec9c942aa7946c3266766a4ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "

    <h3>Tags</h3>
    <ul class=\"tags\" data-prototype=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
        ";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 16
            echo "        
            <li>";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "name", array()), 'row');
            echo "</li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
    <input type=\"submit\" value=\"Create\" />
";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_abc3c2472deb38b6f2e036e19fa0bbfccc279ec9c942aa7946c3266766a4ee38->leave($__internal_abc3c2472deb38b6f2e036e19fa0bbfccc279ec9c942aa7946c3266766a4ee38_prof);

    }

    public function getTemplateName()
    {
        return "task/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  72 => 20,  63 => 17,  60 => 16,  55 => 15,  51 => 13,  44 => 10,  40 => 8,  34 => 7,  11 => 5,);
    }
}
/* {# src/AppBundle/Resources/views/Task/new.html.twig #}*/
/* */
/* {# ... #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ form_start(form) }}*/
/*     {# render the task's only field: description #}*/
/*     {{ form_row(form.description) }}*/
/* */
/*     <h3>Tags</h3>*/
/*     <ul class="tags" data-prototype="{{ form_widget(form.tags.vars.prototype)|e }}">*/
/*         {# iterate over each existing tag and render its only field: name #}*/
/*         {% for tag in form.tags %}*/
/*         */
/*             <li>{{ form_row(tag.name) }}</li>*/
/* */
/*         {% endfor %}*/
/*     </ul>*/
/*     <input type="submit" value="Create" />*/
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* {# ... #}*/
/* */
