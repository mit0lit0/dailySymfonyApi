<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_84de7fe9b3c459751d5423a8b4093ea66f6041ec2476cfac9c9878d680ef429f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34c8ff5b196716e5ac7af37c101972d111b41937582bb07dbf2d8a1b3a866e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c8ff5b196716e5ac7af37c101972d111b41937582bb07dbf2d8a1b3a866e65->enter($__internal_34c8ff5b196716e5ac7af37c101972d111b41937582bb07dbf2d8a1b3a866e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_693d2f16797abdc4b8f4f6fe5d4c895676e10858b7a6cb0620c04e013413bc30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693d2f16797abdc4b8f4f6fe5d4c895676e10858b7a6cb0620c04e013413bc30->enter($__internal_693d2f16797abdc4b8f4f6fe5d4c895676e10858b7a6cb0620c04e013413bc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_34c8ff5b196716e5ac7af37c101972d111b41937582bb07dbf2d8a1b3a866e65->leave($__internal_34c8ff5b196716e5ac7af37c101972d111b41937582bb07dbf2d8a1b3a866e65_prof);

        
        $__internal_693d2f16797abdc4b8f4f6fe5d4c895676e10858b7a6cb0620c04e013413bc30->leave($__internal_693d2f16797abdc4b8f4f6fe5d4c895676e10858b7a6cb0620c04e013413bc30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/xaviergaldeanofernandez/Documents/development/restApi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
