<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea04b0681df5be4f4372891dbf57cd265f736c45c771d50e480f083206011b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cd70b21fd0c8fd0c96b655271d67917a92ea21387041ddd2b89af02aba48393d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd70b21fd0c8fd0c96b655271d67917a92ea21387041ddd2b89af02aba48393d->enter($__internal_cd70b21fd0c8fd0c96b655271d67917a92ea21387041ddd2b89af02aba48393d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_21ac6978da28db564f6b1f80fd8a0f1be0fb0833861e48eca3124dd034c5c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ac6978da28db564f6b1f80fd8a0f1be0fb0833861e48eca3124dd034c5c7c9->enter($__internal_21ac6978da28db564f6b1f80fd8a0f1be0fb0833861e48eca3124dd034c5c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd70b21fd0c8fd0c96b655271d67917a92ea21387041ddd2b89af02aba48393d->leave($__internal_cd70b21fd0c8fd0c96b655271d67917a92ea21387041ddd2b89af02aba48393d_prof);

        
        $__internal_21ac6978da28db564f6b1f80fd8a0f1be0fb0833861e48eca3124dd034c5c7c9->leave($__internal_21ac6978da28db564f6b1f80fd8a0f1be0fb0833861e48eca3124dd034c5c7c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37abf5ea6c6774dd1134eba5196a04d8aae1b3e014acee64914631a967833313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37abf5ea6c6774dd1134eba5196a04d8aae1b3e014acee64914631a967833313->enter($__internal_37abf5ea6c6774dd1134eba5196a04d8aae1b3e014acee64914631a967833313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4bcd796f0647ff1378d02384b954b7ce216fdb6f0aeab9da5ef566896c5fac34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bcd796f0647ff1378d02384b954b7ce216fdb6f0aeab9da5ef566896c5fac34->enter($__internal_4bcd796f0647ff1378d02384b954b7ce216fdb6f0aeab9da5ef566896c5fac34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4bcd796f0647ff1378d02384b954b7ce216fdb6f0aeab9da5ef566896c5fac34->leave($__internal_4bcd796f0647ff1378d02384b954b7ce216fdb6f0aeab9da5ef566896c5fac34_prof);

        
        $__internal_37abf5ea6c6774dd1134eba5196a04d8aae1b3e014acee64914631a967833313->leave($__internal_37abf5ea6c6774dd1134eba5196a04d8aae1b3e014acee64914631a967833313_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2df9230bd6fbc027a423784d7a47aef1c8be7c3ef4275bc75e11dca39124cb6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df9230bd6fbc027a423784d7a47aef1c8be7c3ef4275bc75e11dca39124cb6d->enter($__internal_2df9230bd6fbc027a423784d7a47aef1c8be7c3ef4275bc75e11dca39124cb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fdec989d175ad86ca736a126759f7f096b4f680fe2587eeb364871a69e11bd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdec989d175ad86ca736a126759f7f096b4f680fe2587eeb364871a69e11bd60->enter($__internal_fdec989d175ad86ca736a126759f7f096b4f680fe2587eeb364871a69e11bd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fdec989d175ad86ca736a126759f7f096b4f680fe2587eeb364871a69e11bd60->leave($__internal_fdec989d175ad86ca736a126759f7f096b4f680fe2587eeb364871a69e11bd60_prof);

        
        $__internal_2df9230bd6fbc027a423784d7a47aef1c8be7c3ef4275bc75e11dca39124cb6d->leave($__internal_2df9230bd6fbc027a423784d7a47aef1c8be7c3ef4275bc75e11dca39124cb6d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb3da6a476046a4573b208d305b95bf3dfc6f180dafbe14b6ccf0d9d38b31d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3da6a476046a4573b208d305b95bf3dfc6f180dafbe14b6ccf0d9d38b31d11->enter($__internal_fb3da6a476046a4573b208d305b95bf3dfc6f180dafbe14b6ccf0d9d38b31d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3303017e62fd462e8269db78c13ea439949f4b9085ea30cad0c5af764f3d3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3303017e62fd462e8269db78c13ea439949f4b9085ea30cad0c5af764f3d3b0->enter($__internal_a3303017e62fd462e8269db78c13ea439949f4b9085ea30cad0c5af764f3d3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a3303017e62fd462e8269db78c13ea439949f4b9085ea30cad0c5af764f3d3b0->leave($__internal_a3303017e62fd462e8269db78c13ea439949f4b9085ea30cad0c5af764f3d3b0_prof);

        
        $__internal_fb3da6a476046a4573b208d305b95bf3dfc6f180dafbe14b6ccf0d9d38b31d11->leave($__internal_fb3da6a476046a4573b208d305b95bf3dfc6f180dafbe14b6ccf0d9d38b31d11_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
