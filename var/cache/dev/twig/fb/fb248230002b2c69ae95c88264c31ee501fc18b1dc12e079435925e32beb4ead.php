<?php

/* modulesUsed/quick_mail.html.twig */
class __TwigTemplate_f154d19a420405df61823b3fdc9af5671e95174bf63896c80593f3acede20675 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/quick_mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/quick_mail.html.twig"));

        // line 1
        echo "<div class=\"col-lg-6 col-md-12 col-sm-12 col-12\">
    <div class=\"card-box\">
        <div class=\"card-head\">
            <header>Quick Mail</header>
            <button id = \"demo_menu-lower-right\"
                    class = \"mdl-button mdl-js-button mdl-button--icon pull-right\"
                    data-upgraded = \",MaterialButton\">
                <i class = \"material-icons\">more_vert</i>
            </button>
            <ul class = \"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                data-mdl-for = \"demo_menu-lower-right\">
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action</li>
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action</li>
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else here</li>
            </ul>
        </div>
        <div class=\"card-body \">
            <div class=\"mail-list\">
                <div class=\"compose-mail\">
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"to\" class=\"\">To:</label>
                            <input type=\"text\" tabindex=\"1\" id=\"to\" class=\"form-control\">
                            <div class=\"compose-options\">
                                <a onclick=\"\$(this).hide(); \$('#cc').parent().removeClass('hidden'); \$('#cc').focus();\" href=\"javascript:;\">Cc</a>
                                <a onclick=\"\$(this).hide(); \$('#bcc').parent().removeClass('hidden'); \$('#bcc').focus();\" href=\"javascript:;\">Bcc</a>
                            </div>
                        </div>
                        <div class=\"form-group hidden\">
                            <label for=\"cc\" class=\"\">Cc:</label>
                            <input type=\"text\" tabindex=\"2\" id=\"cc\" class=\"form-control\">
                        </div>
                        <div class=\"form-group hidden\">
                            <label for=\"bcc\" class=\"\">Bcc:</label>
                            <input type=\"text\" tabindex=\"2\" id=\"bcc\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\" class=\"\">Subject:</label>
                            <input type=\"text\" tabindex=\"1\" id=\"subject\" class=\"form-control\">
                        </div>
                        <div>
                            <div id=\"summernote\"></div>
                            <input type=\"file\" class=\"default\" multiple>
                        </div>
                        <!--   <div class=\"btn-group margin-top-20 \">
                           <button class=\"btn btn-primary btn-sm margin-right-10\"><i class=\"fa fa-check\"></i> Send</button>
                          </div> -->
                        <div class=\"box-footer clearfix\">
                            <button type=\"button\" class=\"mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right\">Send <i class=\"fa fa-paper-plane-o\"></i></button>
                        </div>
                    </form>
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
        return "modulesUsed/quick_mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-6 col-md-12 col-sm-12 col-12\">
    <div class=\"card-box\">
        <div class=\"card-head\">
            <header>Quick Mail</header>
            <button id = \"demo_menu-lower-right\"
                    class = \"mdl-button mdl-js-button mdl-button--icon pull-right\"
                    data-upgraded = \",MaterialButton\">
                <i class = \"material-icons\">more_vert</i>
            </button>
            <ul class = \"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                data-mdl-for = \"demo_menu-lower-right\">
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action</li>
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action</li>
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else here</li>
            </ul>
        </div>
        <div class=\"card-body \">
            <div class=\"mail-list\">
                <div class=\"compose-mail\">
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"to\" class=\"\">To:</label>
                            <input type=\"text\" tabindex=\"1\" id=\"to\" class=\"form-control\">
                            <div class=\"compose-options\">
                                <a onclick=\"\$(this).hide(); \$('#cc').parent().removeClass('hidden'); \$('#cc').focus();\" href=\"javascript:;\">Cc</a>
                                <a onclick=\"\$(this).hide(); \$('#bcc').parent().removeClass('hidden'); \$('#bcc').focus();\" href=\"javascript:;\">Bcc</a>
                            </div>
                        </div>
                        <div class=\"form-group hidden\">
                            <label for=\"cc\" class=\"\">Cc:</label>
                            <input type=\"text\" tabindex=\"2\" id=\"cc\" class=\"form-control\">
                        </div>
                        <div class=\"form-group hidden\">
                            <label for=\"bcc\" class=\"\">Bcc:</label>
                            <input type=\"text\" tabindex=\"2\" id=\"bcc\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\" class=\"\">Subject:</label>
                            <input type=\"text\" tabindex=\"1\" id=\"subject\" class=\"form-control\">
                        </div>
                        <div>
                            <div id=\"summernote\"></div>
                            <input type=\"file\" class=\"default\" multiple>
                        </div>
                        <!--   <div class=\"btn-group margin-top-20 \">
                           <button class=\"btn btn-primary btn-sm margin-right-10\"><i class=\"fa fa-check\"></i> Send</button>
                          </div> -->
                        <div class=\"box-footer clearfix\">
                            <button type=\"button\" class=\"mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right\">Send <i class=\"fa fa-paper-plane-o\"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>", "modulesUsed/quick_mail.html.twig", "C:\\wamp64\\www\\rapmis\\app\\Resources\\views\\modulesUsed\\quick_mail.html.twig");
    }
}
