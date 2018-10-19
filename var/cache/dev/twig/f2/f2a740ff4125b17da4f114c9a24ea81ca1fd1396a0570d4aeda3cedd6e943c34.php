<?php

/* modulesUsed/carousel.html.twig */
class __TwigTemplate_de0fe222c3a9dd3cbbfe79fd80c71065ecfaf7d109ca7e8bbce76608981923fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/carousel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/carousel.html.twig"));

        // line 1
        echo "<div class=\"col-sm-4\">
    <div class=\"card card-box\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"owl-demo\" class=\"owl-carousel\">
                    <div class=\"item\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/GEO3.jpeg"), "html", null, true);
        echo "\" alt=\"The Last of us\">
                    </div>
                    <div class=\"item\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/GEO5.jpeg"), "html", null, true);
        echo "\" alt=\"GTA V\">
                    </div>
                    <div class=\"item\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/GEO6.jpeg"), "html", null, true);
        echo "\" alt=\"Mirror Edge\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  41 => 8,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-sm-4\">
    <div class=\"card card-box\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"owl-demo\" class=\"owl-carousel\">
                    <div class=\"item\"><img src=\"{{ asset('image/GEO3.jpeg') }}\" alt=\"The Last of us\">
                    </div>
                    <div class=\"item\"><img src=\"{{ asset('image/GEO5.jpeg') }}\" alt=\"GTA V\">
                    </div>
                    <div class=\"item\"><img src=\"{{ asset('image/GEO6.jpeg') }}\" alt=\"Mirror Edge\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "modulesUsed/carousel.html.twig", "C:\\wamp64\\www\\rapmis\\app\\Resources\\views\\modulesUsed\\carousel.html.twig");
    }
}
