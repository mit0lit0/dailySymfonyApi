<?php

/* base.html.twig */
class __TwigTemplate_8af8b9cf232aea6797fa60fdf1d643e6c40ccb80c32076afc5129c48ea55e93d extends Twig_Template
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
        $__internal_b0538d53e131f694dc2b20adc88f7cde59ef492ae0db0001a69b1a6491b59d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0538d53e131f694dc2b20adc88f7cde59ef492ae0db0001a69b1a6491b59d6c->enter($__internal_b0538d53e131f694dc2b20adc88f7cde59ef492ae0db0001a69b1a6491b59d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f4a4db940d4735b9a284b408c6136da8544067be5aed50b6d7170f080a36e307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a4db940d4735b9a284b408c6136da8544067be5aed50b6d7170f080a36e307->enter($__internal_f4a4db940d4735b9a284b408c6136da8544067be5aed50b6d7170f080a36e307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_b0538d53e131f694dc2b20adc88f7cde59ef492ae0db0001a69b1a6491b59d6c->leave($__internal_b0538d53e131f694dc2b20adc88f7cde59ef492ae0db0001a69b1a6491b59d6c_prof);

        
        $__internal_f4a4db940d4735b9a284b408c6136da8544067be5aed50b6d7170f080a36e307->leave($__internal_f4a4db940d4735b9a284b408c6136da8544067be5aed50b6d7170f080a36e307_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82ba9aa6ba60060a9801d21c21f8987f34b732b5969ce9c9ea06d8c7b446ef29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ba9aa6ba60060a9801d21c21f8987f34b732b5969ce9c9ea06d8c7b446ef29->enter($__internal_82ba9aa6ba60060a9801d21c21f8987f34b732b5969ce9c9ea06d8c7b446ef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7668893cf2fff4b13de0fb34877ed179ab074bffabfa6d06c8ac2a0647a2ceac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7668893cf2fff4b13de0fb34877ed179ab074bffabfa6d06c8ac2a0647a2ceac->enter($__internal_7668893cf2fff4b13de0fb34877ed179ab074bffabfa6d06c8ac2a0647a2ceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7668893cf2fff4b13de0fb34877ed179ab074bffabfa6d06c8ac2a0647a2ceac->leave($__internal_7668893cf2fff4b13de0fb34877ed179ab074bffabfa6d06c8ac2a0647a2ceac_prof);

        
        $__internal_82ba9aa6ba60060a9801d21c21f8987f34b732b5969ce9c9ea06d8c7b446ef29->leave($__internal_82ba9aa6ba60060a9801d21c21f8987f34b732b5969ce9c9ea06d8c7b446ef29_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_822b96a0c4c476cd269c2897645449548261988e550b89577f924ca189fd80db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822b96a0c4c476cd269c2897645449548261988e550b89577f924ca189fd80db->enter($__internal_822b96a0c4c476cd269c2897645449548261988e550b89577f924ca189fd80db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cd8364be245b115e61f24d962887ad9d0454a46761311e4dd6501e22065e4789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8364be245b115e61f24d962887ad9d0454a46761311e4dd6501e22065e4789->enter($__internal_cd8364be245b115e61f24d962887ad9d0454a46761311e4dd6501e22065e4789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd8364be245b115e61f24d962887ad9d0454a46761311e4dd6501e22065e4789->leave($__internal_cd8364be245b115e61f24d962887ad9d0454a46761311e4dd6501e22065e4789_prof);

        
        $__internal_822b96a0c4c476cd269c2897645449548261988e550b89577f924ca189fd80db->leave($__internal_822b96a0c4c476cd269c2897645449548261988e550b89577f924ca189fd80db_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d70fec57e1d267a6d1964042236651ad58c9f218b457972875c433d31ecd9fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70fec57e1d267a6d1964042236651ad58c9f218b457972875c433d31ecd9fa8->enter($__internal_d70fec57e1d267a6d1964042236651ad58c9f218b457972875c433d31ecd9fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_672795c07cbfd44b90f066c030be078f821e95128b7dd1fffbdcd2327c9fe2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672795c07cbfd44b90f066c030be078f821e95128b7dd1fffbdcd2327c9fe2d0->enter($__internal_672795c07cbfd44b90f066c030be078f821e95128b7dd1fffbdcd2327c9fe2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_672795c07cbfd44b90f066c030be078f821e95128b7dd1fffbdcd2327c9fe2d0->leave($__internal_672795c07cbfd44b90f066c030be078f821e95128b7dd1fffbdcd2327c9fe2d0_prof);

        
        $__internal_d70fec57e1d267a6d1964042236651ad58c9f218b457972875c433d31ecd9fa8->leave($__internal_d70fec57e1d267a6d1964042236651ad58c9f218b457972875c433d31ecd9fa8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc22eba77a2bd653c7e3d7321bfe5fd587694f3bb457d0f46290423e29cb3bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc22eba77a2bd653c7e3d7321bfe5fd587694f3bb457d0f46290423e29cb3bad->enter($__internal_dc22eba77a2bd653c7e3d7321bfe5fd587694f3bb457d0f46290423e29cb3bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e67e8a8867b0133ed4c01da4f9d12f21aaae3340d6f694714adbf87315a68af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67e8a8867b0133ed4c01da4f9d12f21aaae3340d6f694714adbf87315a68af0->enter($__internal_e67e8a8867b0133ed4c01da4f9d12f21aaae3340d6f694714adbf87315a68af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e67e8a8867b0133ed4c01da4f9d12f21aaae3340d6f694714adbf87315a68af0->leave($__internal_e67e8a8867b0133ed4c01da4f9d12f21aaae3340d6f694714adbf87315a68af0_prof);

        
        $__internal_dc22eba77a2bd653c7e3d7321bfe5fd587694f3bb457d0f46290423e29cb3bad->leave($__internal_dc22eba77a2bd653c7e3d7321bfe5fd587694f3bb457d0f46290423e29cb3bad_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/xaviergaldeanofernandez/Documents/development/restApi/app/Resources/views/base.html.twig");
    }
}
