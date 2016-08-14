<?php

/* task/index.html.twig */
class __TwigTemplate_03bbb2840b444dd64db0b3892b04b5d80f33de54e5f2e67d18180d4d16d24fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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
        $__internal_d8d3d793f9beb7c4ea2a13c50b95f26bbb106b0799cce7a6a8a6addd4bf41e7a = $this->env->getExtension("native_profiler");
        $__internal_d8d3d793f9beb7c4ea2a13c50b95f26bbb106b0799cce7a6a8a6addd4bf41e7a->enter($__internal_d8d3d793f9beb7c4ea2a13c50b95f26bbb106b0799cce7a6a8a6addd4bf41e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d3d793f9beb7c4ea2a13c50b95f26bbb106b0799cce7a6a8a6addd4bf41e7a->leave($__internal_d8d3d793f9beb7c4ea2a13c50b95f26bbb106b0799cce7a6a8a6addd4bf41e7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_efe68270413e798f59aa51a6c94ccd6d21742e95c24ee4461e25cf4d7b067142 = $this->env->getExtension("native_profiler");
        $__internal_efe68270413e798f59aa51a6c94ccd6d21742e95c24ee4461e25cf4d7b067142->enter($__internal_efe68270413e798f59aa51a6c94ccd6d21742e95c24ee4461e25cf4d7b067142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ciudad list</h1>

<!-- testFilter.html.twig -->
<form method=\"get\" action=\".\">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" name=\"submit-filter\" value=\"filter\" />
</form>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "description", array()), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_efe68270413e798f59aa51a6c94ccd6d21742e95c24ee4461e25cf4d7b067142->leave($__internal_efe68270413e798f59aa51a6c94ccd6d21742e95c24ee4461e25cf4d7b067142_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  72 => 23,  68 => 22,  65 => 21,  61 => 20,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ciudad list</h1>*/
/* */
/* <!-- testFilter.html.twig -->*/
/* <form method="get" action=".">*/
/*     {{ form_rest(form) }}*/
/*     <input type="submit" name="submit-filter" value="filter" />*/
/* </form>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Descripcion</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for task in tasks %}*/
/*             <tr>*/
/*                 <td>{{ task.id }}</td>*/
/*                 <td>{{ task.description }}</td>*/
/*                 */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
