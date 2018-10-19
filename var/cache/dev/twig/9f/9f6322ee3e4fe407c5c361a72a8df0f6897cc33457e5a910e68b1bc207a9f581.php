<?php

/* modulesUsed/activity_feed.html.twig */
class __TwigTemplate_a38a9128f6e8be8b88608e9901d1868942f1687c539b9454f497dbfec27aa436 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/activity_feed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/activity_feed.html.twig"));

        // line 1
        echo "<!-- Activity feed start -->
<div class=\"col-lg-6 col-md-12 col-sm-12 col-12\">
    <div class=\"card-box\">
        <div class=\"card-head\">
            <header>Activity Feed</header>
            <button id = \"feedMenu\"
                    class = \"mdl-button mdl-js-button mdl-button--icon pull-right\"
                    data-upgraded = \",MaterialButton\">
                <i class = \"material-icons\">more_vert</i>
            </button>
            <ul class = \"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                data-mdl-for = \"feedMenu\">
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action</li>
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action</li>
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else here</li>
            </ul>
        </div>
        <div class=\"card-body \">
            <ul class=\"feedBody\">
                <li class=\"active-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/std/std1.jpg"), "html", null, true);
        echo "\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblFileStyle\">File</span> Sarah Smith <small class=\"text-muted\">6 hours ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        hii John, I have upload doc related to task.
                    </p>

                </li>
                <li class=\"diactive-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/std/std2.jpg"), "html", null, true);
        echo "\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblTaskStyle\">Task </span> Jalpa Joshi<small class=\"text-muted\">5 hours
                            ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        Please do as specify. Let me know if you have any query.
                    </p>
                </li>
                <li class=\"diactive-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/std/std3.jpg"), "html", null, true);
        echo "\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblCommentStyle\">comment</span> Lina Smith<small class=\"text-muted\">6 hours ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        Hey, How are you??
                    </p>
                </li>
                <li class=\"active-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/std/std4.jpg"), "html", null, true);
        echo "\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblReplyStyle\">Reply</span> Jacob Ryan
                        <small class=\"text-muted\">7 hours ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        I am fine. You??
                    </p>
                </li>
                <li class=\"active-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/std/std5.jpg"), "html", null, true);
        echo "\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblFileStyle\">File</span> Sarah Smith <small class=\"text-muted\">6 hours ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        hii John, I have upload doc related to task.
                    </p>

                </li>
                <li class=\"diactive-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/std/std6.jpg"), "html", null, true);
        echo "\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblTaskStyle\">Task </span> Jalpa Joshi<small class=\"text-muted\">5 hours
                            ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        Please do as specify. Let me know if you have any query.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Activity feed end -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/activity_feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 86,  115 => 73,  99 => 60,  84 => 48,  68 => 35,  52 => 22,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Activity feed start -->
<div class=\"col-lg-6 col-md-12 col-sm-12 col-12\">
    <div class=\"card-box\">
        <div class=\"card-head\">
            <header>Activity Feed</header>
            <button id = \"feedMenu\"
                    class = \"mdl-button mdl-js-button mdl-button--icon pull-right\"
                    data-upgraded = \",MaterialButton\">
                <i class = \"material-icons\">more_vert</i>
            </button>
            <ul class = \"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                data-mdl-for = \"feedMenu\">
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action</li>
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action</li>
                <li class = \"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else here</li>
            </ul>
        </div>
        <div class=\"card-body \">
            <ul class=\"feedBody\">
                <li class=\"active-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"{{ asset('assets/img/std/std1.jpg') }}\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblFileStyle\">File</span> Sarah Smith <small class=\"text-muted\">6 hours ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        hii John, I have upload doc related to task.
                    </p>

                </li>
                <li class=\"diactive-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"{{ asset('assets/img/std/std2.jpg') }}\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblTaskStyle\">Task </span> Jalpa Joshi<small class=\"text-muted\">5 hours
                            ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        Please do as specify. Let me know if you have any query.
                    </p>
                </li>
                <li class=\"diactive-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"{{ asset('assets/img/std/std3.jpg') }}\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblCommentStyle\">comment</span> Lina Smith<small class=\"text-muted\">6 hours ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        Hey, How are you??
                    </p>
                </li>
                <li class=\"active-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"{{ asset('assets/img/std/std4.jpg') }}\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblReplyStyle\">Reply</span> Jacob Ryan
                        <small class=\"text-muted\">7 hours ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        I am fine. You??
                    </p>
                </li>
                <li class=\"active-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"{{ asset('assets/img/std/std5.jpg') }}\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblFileStyle\">File</span> Sarah Smith <small class=\"text-muted\">6 hours ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        hii John, I have upload doc related to task.
                    </p>

                </li>
                <li class=\"diactive-feed\">
                    <div class=\"feed-user-img\">
                        <img src=\"{{ asset('assets/img/std/std6.jpg') }}\" class=\"img-radius \"
                             alt=\"User-Profile-Image\">
                    </div>
                    <h6>
                        <span class=\"feedLblStyle lblTaskStyle\">Task </span> Jalpa Joshi<small class=\"text-muted\">5 hours
                            ago</small>
                    </h6>
                    <p class=\"m-b-15 m-t-15\">
                        Please do as specify. Let me know if you have any query.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Activity feed end -->", "modulesUsed/activity_feed.html.twig", "C:\\wamp64\\www\\rapmis\\app\\Resources\\views\\modulesUsed\\activity_feed.html.twig");
    }
}
