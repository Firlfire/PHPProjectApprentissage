<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
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
        $__internal_de8df44611dc99c8e0dadb634547d1f64f2bbc63c4c743134d455c8af6f343d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8df44611dc99c8e0dadb634547d1f64f2bbc63c4c743134d455c8af6f343d3->enter($__internal_de8df44611dc99c8e0dadb634547d1f64f2bbc63c4c743134d455c8af6f343d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_261475ba37b7485866855e604293e2782c65d0da9576ad671e8e629509ce8499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261475ba37b7485866855e604293e2782c65d0da9576ad671e8e629509ce8499->enter($__internal_261475ba37b7485866855e604293e2782c65d0da9576ad671e8e629509ce8499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8df44611dc99c8e0dadb634547d1f64f2bbc63c4c743134d455c8af6f343d3->leave($__internal_de8df44611dc99c8e0dadb634547d1f64f2bbc63c4c743134d455c8af6f343d3_prof);

        
        $__internal_261475ba37b7485866855e604293e2782c65d0da9576ad671e8e629509ce8499->leave($__internal_261475ba37b7485866855e604293e2782c65d0da9576ad671e8e629509ce8499_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5941adfeb81841943b46cc8cad917df0612e6ef1e7546d93a06b94cb460da4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5941adfeb81841943b46cc8cad917df0612e6ef1e7546d93a06b94cb460da4d4->enter($__internal_5941adfeb81841943b46cc8cad917df0612e6ef1e7546d93a06b94cb460da4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_17528cd8b02324d151c337102ed886476465f8d231b0d8da1426683b76719f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17528cd8b02324d151c337102ed886476465f8d231b0d8da1426683b76719f3f->enter($__internal_17528cd8b02324d151c337102ed886476465f8d231b0d8da1426683b76719f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17528cd8b02324d151c337102ed886476465f8d231b0d8da1426683b76719f3f->leave($__internal_17528cd8b02324d151c337102ed886476465f8d231b0d8da1426683b76719f3f_prof);

        
        $__internal_5941adfeb81841943b46cc8cad917df0612e6ef1e7546d93a06b94cb460da4d4->leave($__internal_5941adfeb81841943b46cc8cad917df0612e6ef1e7546d93a06b94cb460da4d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65337d91134af03e469688458b7a8aaaeed16b24a21f0623b65f3493807a1cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65337d91134af03e469688458b7a8aaaeed16b24a21f0623b65f3493807a1cce->enter($__internal_65337d91134af03e469688458b7a8aaaeed16b24a21f0623b65f3493807a1cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e64eac32375ad50d45bb8415c540ee9fe97173884ad7ad08bfc78361d3558f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64eac32375ad50d45bb8415c540ee9fe97173884ad7ad08bfc78361d3558f65->enter($__internal_e64eac32375ad50d45bb8415c540ee9fe97173884ad7ad08bfc78361d3558f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e64eac32375ad50d45bb8415c540ee9fe97173884ad7ad08bfc78361d3558f65->leave($__internal_e64eac32375ad50d45bb8415c540ee9fe97173884ad7ad08bfc78361d3558f65_prof);

        
        $__internal_65337d91134af03e469688458b7a8aaaeed16b24a21f0623b65f3493807a1cce->leave($__internal_65337d91134af03e469688458b7a8aaaeed16b24a21f0623b65f3493807a1cce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4da14720a2934240aeda82d93ea231ab37706394696c1cc6ed0db5bd011ddca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da14720a2934240aeda82d93ea231ab37706394696c1cc6ed0db5bd011ddca2->enter($__internal_4da14720a2934240aeda82d93ea231ab37706394696c1cc6ed0db5bd011ddca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5bad9ee58e2ba4063782990986703c1c45fcbbf90333d1d8cae934776dc46c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bad9ee58e2ba4063782990986703c1c45fcbbf90333d1d8cae934776dc46c0->enter($__internal_d5bad9ee58e2ba4063782990986703c1c45fcbbf90333d1d8cae934776dc46c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5bad9ee58e2ba4063782990986703c1c45fcbbf90333d1d8cae934776dc46c0->leave($__internal_d5bad9ee58e2ba4063782990986703c1c45fcbbf90333d1d8cae934776dc46c0_prof);

        
        $__internal_4da14720a2934240aeda82d93ea231ab37706394696c1cc6ed0db5bd011ddca2->leave($__internal_4da14720a2934240aeda82d93ea231ab37706394696c1cc6ed0db5bd011ddca2_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
