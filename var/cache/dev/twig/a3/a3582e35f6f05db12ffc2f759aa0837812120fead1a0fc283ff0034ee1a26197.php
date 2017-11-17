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
        $__internal_b8be96c56b56aabbd435e8fd9d6b0e36612b0dd11b4a499af6fed80782a89956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8be96c56b56aabbd435e8fd9d6b0e36612b0dd11b4a499af6fed80782a89956->enter($__internal_b8be96c56b56aabbd435e8fd9d6b0e36612b0dd11b4a499af6fed80782a89956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_81879a7e2248515dfd687d9dfab2a63a2cd83c7af86ae4f724819afced9b4698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81879a7e2248515dfd687d9dfab2a63a2cd83c7af86ae4f724819afced9b4698->enter($__internal_81879a7e2248515dfd687d9dfab2a63a2cd83c7af86ae4f724819afced9b4698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b8be96c56b56aabbd435e8fd9d6b0e36612b0dd11b4a499af6fed80782a89956->leave($__internal_b8be96c56b56aabbd435e8fd9d6b0e36612b0dd11b4a499af6fed80782a89956_prof);

        
        $__internal_81879a7e2248515dfd687d9dfab2a63a2cd83c7af86ae4f724819afced9b4698->leave($__internal_81879a7e2248515dfd687d9dfab2a63a2cd83c7af86ae4f724819afced9b4698_prof);

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
", "@Twig/Exception/exception.json.twig", "/Users/xaviergaldeanofernandez/Documents/development/dailySymfonyApi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
