<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3d0c933cf3f16c68c308e84e4dd784fa58d7c8e0a43a44712199a7d91c004a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fc509dfc308ba855b0e7026b03fb3a5b4b05b954b29aae2af3ccdd110ffaaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc509dfc308ba855b0e7026b03fb3a5b4b05b954b29aae2af3ccdd110ffaaa2->enter($__internal_7fc509dfc308ba855b0e7026b03fb3a5b4b05b954b29aae2af3ccdd110ffaaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_02858f28e36235d913ffd3b222ec8dee2fcdfee06b5936c0421493deeb0b7d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02858f28e36235d913ffd3b222ec8dee2fcdfee06b5936c0421493deeb0b7d2f->enter($__internal_02858f28e36235d913ffd3b222ec8dee2fcdfee06b5936c0421493deeb0b7d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc509dfc308ba855b0e7026b03fb3a5b4b05b954b29aae2af3ccdd110ffaaa2->leave($__internal_7fc509dfc308ba855b0e7026b03fb3a5b4b05b954b29aae2af3ccdd110ffaaa2_prof);

        
        $__internal_02858f28e36235d913ffd3b222ec8dee2fcdfee06b5936c0421493deeb0b7d2f->leave($__internal_02858f28e36235d913ffd3b222ec8dee2fcdfee06b5936c0421493deeb0b7d2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_547aad254e02bdb1e8311c724ab471fe6ddd13be30af8acb61649e1d8a76ff52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547aad254e02bdb1e8311c724ab471fe6ddd13be30af8acb61649e1d8a76ff52->enter($__internal_547aad254e02bdb1e8311c724ab471fe6ddd13be30af8acb61649e1d8a76ff52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d50716578a8e0013d7ba7fee0fb02852649f8b721d5023aa901522602ebe4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d50716578a8e0013d7ba7fee0fb02852649f8b721d5023aa901522602ebe4dd->enter($__internal_8d50716578a8e0013d7ba7fee0fb02852649f8b721d5023aa901522602ebe4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8d50716578a8e0013d7ba7fee0fb02852649f8b721d5023aa901522602ebe4dd->leave($__internal_8d50716578a8e0013d7ba7fee0fb02852649f8b721d5023aa901522602ebe4dd_prof);

        
        $__internal_547aad254e02bdb1e8311c724ab471fe6ddd13be30af8acb61649e1d8a76ff52->leave($__internal_547aad254e02bdb1e8311c724ab471fe6ddd13be30af8acb61649e1d8a76ff52_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
