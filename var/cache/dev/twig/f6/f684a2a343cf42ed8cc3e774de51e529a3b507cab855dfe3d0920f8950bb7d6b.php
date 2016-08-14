<?php

/* base.html.twig */
class __TwigTemplate_18abdc370731d6e6e8ab3c16f7deeda7472dc7ff30fa6e20a10f9e050be4ad13 extends Twig_Template
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
        $__internal_a2fed4c2698096a60dd1b3c866be431aeb839e1510e994196688647ed5cbc2e8 = $this->env->getExtension("native_profiler");
        $__internal_a2fed4c2698096a60dd1b3c866be431aeb839e1510e994196688647ed5cbc2e8->enter($__internal_a2fed4c2698096a60dd1b3c866be431aeb839e1510e994196688647ed5cbc2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 81
        echo "    </body>
</html>
";
        
        $__internal_a2fed4c2698096a60dd1b3c866be431aeb839e1510e994196688647ed5cbc2e8->leave($__internal_a2fed4c2698096a60dd1b3c866be431aeb839e1510e994196688647ed5cbc2e8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1229dca79a2003b5aec84e94fa6e1afb5776c3a26f9f7876e7228087c410a8ca = $this->env->getExtension("native_profiler");
        $__internal_1229dca79a2003b5aec84e94fa6e1afb5776c3a26f9f7876e7228087c410a8ca->enter($__internal_1229dca79a2003b5aec84e94fa6e1afb5776c3a26f9f7876e7228087c410a8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1229dca79a2003b5aec84e94fa6e1afb5776c3a26f9f7876e7228087c410a8ca->leave($__internal_1229dca79a2003b5aec84e94fa6e1afb5776c3a26f9f7876e7228087c410a8ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7ee387acfcb299ba2e139fb0076ffb4416858a684d33e1dbbbe8fb23ceb59e2 = $this->env->getExtension("native_profiler");
        $__internal_c7ee387acfcb299ba2e139fb0076ffb4416858a684d33e1dbbbe8fb23ceb59e2->enter($__internal_c7ee387acfcb299ba2e139fb0076ffb4416858a684d33e1dbbbe8fb23ceb59e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7ee387acfcb299ba2e139fb0076ffb4416858a684d33e1dbbbe8fb23ceb59e2->leave($__internal_c7ee387acfcb299ba2e139fb0076ffb4416858a684d33e1dbbbe8fb23ceb59e2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98806199ffd1c6a352629d540fc68c96d67a6e78ed05d524bc0079e26bbe0dbd = $this->env->getExtension("native_profiler");
        $__internal_98806199ffd1c6a352629d540fc68c96d67a6e78ed05d524bc0079e26bbe0dbd->enter($__internal_98806199ffd1c6a352629d540fc68c96d67a6e78ed05d524bc0079e26bbe0dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_98806199ffd1c6a352629d540fc68c96d67a6e78ed05d524bc0079e26bbe0dbd->leave($__internal_98806199ffd1c6a352629d540fc68c96d67a6e78ed05d524bc0079e26bbe0dbd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_224c5b547789b209919bc735db8e6658be7308f2391bd4e1e84efe8670636ff3 = $this->env->getExtension("native_profiler");
        $__internal_224c5b547789b209919bc735db8e6658be7308f2391bd4e1e84efe8670636ff3->enter($__internal_224c5b547789b209919bc735db8e6658be7308f2391bd4e1e84efe8670636ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery-2.2.3.js"), "html", null, true);
        echo "\"></script>
        <script>
            var \$collectionHolder;

            // setup an \"add a tag\" link
            var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Add a tag</a>');
            var \$newLinkLi = \$('<li></li>').append(\$addTagLink);

            jQuery(document).ready(function() {
                // Get the ul that holds the collection of tags
                \$collectionHolder = \$('ul.tags');

                // add a delete link to all of the existing tag form li elements
                \$collectionHolder.find('li').each(function() {
                    addTagFormDeleteLink(\$(this));
                });

                // add the \"add a tag\" anchor and li to the tags ul
                \$collectionHolder.append(\$newLinkLi);

                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

                \$addTagLink.on('click', function(e) {
                    // prevent the link from creating a \"#\" on the URL
                    e.preventDefault();

                    // add a new tag form (see next code block)
                    addTagForm(\$collectionHolder, \$newLinkLi);
                });

                function addTagForm(\$collectionHolder, \$newLinkLi) {
                // Get the data-prototype explained earlier
                var prototype = \$collectionHolder.data('prototype');

                // get the new index
                var index = \$collectionHolder.data('index');

                // Replace '__name__' in the prototype's HTML to
                // instead be a number based on how many items we have
                var newForm = prototype.replace(/__name__/g, index);

                // increase the index with one for the next item
                \$collectionHolder.data('index', index + 1);

                // Display the form in the page in an li, before the \"Add a tag\" link li
                var \$newFormLi = \$('<li></li>').append(newForm);
                \$newLinkLi.before(\$newFormLi);
                 // add a delete link to the new form
                addTagFormDeleteLink(\$newFormLi);
                }

                function addTagFormDeleteLink(\$tagFormLi) {
                var \$removeFormA = \$('<a href=\"#\">delete this tag</a>');
                \$tagFormLi.append(\$removeFormA);

                \$removeFormA.on('click', function(e) {
                    // prevent the link from creating a \"#\" on the URL
                    e.preventDefault();

                    // remove the li for the tag form
                    \$tagFormLi.remove();
                });
                }

            });
        </script>
        ";
        
        $__internal_224c5b547789b209919bc735db8e6658be7308f2391bd4e1e84efe8670636ff3->leave($__internal_224c5b547789b209919bc735db8e6658be7308f2391bd4e1e84efe8670636ff3_prof);

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
        return array (  99 => 12,  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 81,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block javascripts %}*/
/*         <script src="{{ asset('bundles/app/js/jquery-2.2.3.js') }}"></script>*/
/*         <script>*/
/*             var $collectionHolder;*/
/* */
/*             // setup an "add a tag" link*/
/*             var $addTagLink = $('<a href="#" class="add_tag_link">Add a tag</a>');*/
/*             var $newLinkLi = $('<li></li>').append($addTagLink);*/
/* */
/*             jQuery(document).ready(function() {*/
/*                 // Get the ul that holds the collection of tags*/
/*                 $collectionHolder = $('ul.tags');*/
/* */
/*                 // add a delete link to all of the existing tag form li elements*/
/*                 $collectionHolder.find('li').each(function() {*/
/*                     addTagFormDeleteLink($(this));*/
/*                 });*/
/* */
/*                 // add the "add a tag" anchor and li to the tags ul*/
/*                 $collectionHolder.append($newLinkLi);*/
/* */
/*                 // count the current form inputs we have (e.g. 2), use that as the new*/
/*                 // index when inserting a new item (e.g. 2)*/
/*                 $collectionHolder.data('index', $collectionHolder.find(':input').length);*/
/* */
/*                 $addTagLink.on('click', function(e) {*/
/*                     // prevent the link from creating a "#" on the URL*/
/*                     e.preventDefault();*/
/* */
/*                     // add a new tag form (see next code block)*/
/*                     addTagForm($collectionHolder, $newLinkLi);*/
/*                 });*/
/* */
/*                 function addTagForm($collectionHolder, $newLinkLi) {*/
/*                 // Get the data-prototype explained earlier*/
/*                 var prototype = $collectionHolder.data('prototype');*/
/* */
/*                 // get the new index*/
/*                 var index = $collectionHolder.data('index');*/
/* */
/*                 // Replace '__name__' in the prototype's HTML to*/
/*                 // instead be a number based on how many items we have*/
/*                 var newForm = prototype.replace(/__name__/g, index);*/
/* */
/*                 // increase the index with one for the next item*/
/*                 $collectionHolder.data('index', index + 1);*/
/* */
/*                 // Display the form in the page in an li, before the "Add a tag" link li*/
/*                 var $newFormLi = $('<li></li>').append(newForm);*/
/*                 $newLinkLi.before($newFormLi);*/
/*                  // add a delete link to the new form*/
/*                 addTagFormDeleteLink($newFormLi);*/
/*                 }*/
/* */
/*                 function addTagFormDeleteLink($tagFormLi) {*/
/*                 var $removeFormA = $('<a href="#">delete this tag</a>');*/
/*                 $tagFormLi.append($removeFormA);*/
/* */
/*                 $removeFormA.on('click', function(e) {*/
/*                     // prevent the link from creating a "#" on the URL*/
/*                     e.preventDefault();*/
/* */
/*                     // remove the li for the tag form*/
/*                     $tagFormLi.remove();*/
/*                 });*/
/*                 }*/
/* */
/*             });*/
/*         </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
