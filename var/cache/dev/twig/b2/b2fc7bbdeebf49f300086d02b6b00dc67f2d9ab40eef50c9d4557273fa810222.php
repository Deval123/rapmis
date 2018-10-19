<?php

/* default/index.html.twig */
class __TwigTemplate_469a69e27b6cef187dedd0ff65253ddeb51419c367b4376a219bf90baec69f29 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 2
        $context["compt"] = 0;
        // line 3
        $context["compt_class"] = 0;
        // line 4
        $context["percent"] = 0;
        // line 5
        $context["compt1"] = 0;
        // line 6
        $context["percent1"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "            <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    <div class=\"page-bar\">
                        <div class=\"page-title-breadcrumb\">
                            <div class=\" pull-left\">
                                <div class=\"page-title\">Dashboard</div>
                            </div>
                            <ol class=\"breadcrumb page-breadcrumb pull-right\">
                                <li><i class=\"fa fa-home\"></i>&nbsp;<a class=\"parent-item\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>&nbsp;<i class=\"fa fa-angle-right\"></i>
                                </li>
                                <li class=\"active\">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- start widget -->
                    <div class=\"state-overview\">
                        <div class=\"row\">
    ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "                            <div class=\"col-xl-3 col-md-6 col-12\">
                                <div class=\"info-box bg-b-green\">
                                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">group</i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Total Students</span>
                                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new Twig_Error_Runtime('Variable "students" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->source); })()), "user", array()), "etablissements", array()), "name", array()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "classes", array()), "etablissements", array()), "name", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->source); })()), "user", array()), "etablissements", array()), "name", array())))) {
                    // line 35
                    echo "                                                ";
                    $context["compt"] = ((isset($context["compt"]) || array_key_exists("compt", $context) ? $context["compt"] : (function () { throw new Twig_Error_Runtime('Variable "compt" does not exist.', 35, $this->source); })()) + 1);
                    // line 36
                    echo "                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
                                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "user", array()), "etablissements", array()), "name", array()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["class"], "etablissements", array()), "name", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "user", array()), "etablissements", array()), "name", array())))) {
                    // line 39
                    echo "                                            ";
                    $context["compt_class"] = ((isset($context["compt_class"]) || array_key_exists("compt_class", $context) ? $context["compt_class"] : (function () { throw new Twig_Error_Runtime('Variable "compt_class" does not exist.', 39, $this->source); })()) + 1);
                    // line 40
                    echo "                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                        ";
            if (((isset($context["compt_class"]) || array_key_exists("compt_class", $context) ? $context["compt_class"] : (function () { throw new Twig_Error_Runtime('Variable "compt_class" does not exist.', 41, $this->source); })()) == 0)) {
                // line 42
                echo "                                        ";
                $context["percent"] = (((isset($context["compt"]) || array_key_exists("compt", $context) ? $context["compt"] : (function () { throw new Twig_Error_Runtime('Variable "compt" does not exist.', 42, $this->source); })()) / 1) * 0);
                // line 43
                echo "                                            ";
            } else {
                // line 44
                echo "                                                ";
                $context["percent"] = (((isset($context["compt"]) || array_key_exists("compt", $context) ? $context["compt"] : (function () { throw new Twig_Error_Runtime('Variable "compt" does not exist.', 44, $this->source); })()) / ((isset($context["compt_class"]) || array_key_exists("compt_class", $context) ? $context["compt_class"] : (function () { throw new Twig_Error_Runtime('Variable "compt_class" does not exist.', 44, $this->source); })()) * 50)) * 100);
                // line 45
                echo "                                        ";
            }
            // line 46
            echo "                                        <span class=\"info-box-number\">";
            echo twig_escape_filter($this->env, (isset($context["compt"]) || array_key_exists("compt", $context) ? $context["compt"] : (function () { throw new Twig_Error_Runtime('Variable "compt" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "</span>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: ";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new Twig_Error_Runtime('Variable "percent" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "%\"></div>
                                        </div>
                                        <span class=\"progress-description\">
                                            ";
            // line 51
            echo twig_escape_filter($this->env, twig_round((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new Twig_Error_Runtime('Variable "percent" does not exist.', 51, $this->source); })()), 2, "floor"), "html", null, true);
            echo "% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                    <!-- /.info-box -->
                            </div>
        ";
        } else {
            // line 59
            echo "            <div class=\"col-xl-3 col-md-6 col-12\">
                <div class=\"info-box bg-b-green\">
                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">group</i></span>

                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Total Students</span>
                        <span class=\"info-box-number\">450</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 45%\"></div>
                        </div>
                        <span class=\"progress-description\">
                                            45% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        ";
        }
        // line 78
        echo "                            <!-- /.col -->
    ";
        // line 79
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 80
            echo "                            <div class=\"col-xl-3 col-md-6 col-12\">
                                <div class=\"info-box bg-b-yellow\">
                                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">person</i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">New Students</span>
                                        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new Twig_Error_Runtime('Variable "students" does not exist.', 85, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 85, $this->source); })()), "user", array()), "etablissements", array()), "name", array()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "classes", array()), "etablissements", array()), "name", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 85, $this->source); })()), "user", array()), "etablissements", array()), "name", array())))) {
                    // line 86
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["student"], "nouveau", array()) == true)) {
                        // line 87
                        echo "                                            ";
                        $context["compt1"] = ((isset($context["compt1"]) || array_key_exists("compt1", $context) ? $context["compt1"] : (function () { throw new Twig_Error_Runtime('Variable "compt1" does not exist.', 87, $this->source); })()) + 1);
                        // line 88
                        echo "                                            ";
                    }
                    // line 89
                    echo "                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                            ";
            if (((isset($context["compt_class"]) || array_key_exists("compt_class", $context) ? $context["compt_class"] : (function () { throw new Twig_Error_Runtime('Variable "compt_class" does not exist.', 90, $this->source); })()) == 0)) {
                // line 91
                echo "                                ";
                $context["percent1"] = (((isset($context["compt1"]) || array_key_exists("compt1", $context) ? $context["compt1"] : (function () { throw new Twig_Error_Runtime('Variable "compt1" does not exist.', 91, $this->source); })()) / 1) * 0);
                // line 92
                echo "                            ";
            } else {
                // line 93
                echo "                                        ";
                $context["percent1"] = (((isset($context["compt1"]) || array_key_exists("compt1", $context) ? $context["compt1"] : (function () { throw new Twig_Error_Runtime('Variable "compt1" does not exist.', 93, $this->source); })()) / ((isset($context["compt_class"]) || array_key_exists("compt_class", $context) ? $context["compt_class"] : (function () { throw new Twig_Error_Runtime('Variable "compt_class" does not exist.', 93, $this->source); })()) * 50)) * 100);
                // line 94
                echo "                                ";
            }
            // line 95
            echo "                                        <span class=\"info-box-number\">";
            echo twig_escape_filter($this->env, (isset($context["compt1"]) || array_key_exists("compt1", $context) ? $context["compt1"] : (function () { throw new Twig_Error_Runtime('Variable "compt1" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "</span>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: ";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new Twig_Error_Runtime('Variable "percent" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "%\"></div>
                                        </div>
                                        <span class=\"progress-description\">
\t\t\t\t\t\t                   ";
            // line 100
            echo twig_escape_filter($this->env, twig_round((isset($context["percent1"]) || array_key_exists("percent1", $context) ? $context["percent1"] : (function () { throw new Twig_Error_Runtime('Variable "percent1" does not exist.', 100, $this->source); })()), 2, "floor"), "html", null, true);
            echo "% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
        ";
        } else {
            // line 108
            echo "            <div class=\"col-xl-3 col-md-6 col-12\">
                <div class=\"info-box bg-b-yellow\">
                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">person</i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">New Students</span>
                        <span class=\"info-box-number\">155</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 40%\"></div>
                        </div>
                        <span class=\"progress-description\">
\t\t\t\t\t\t                   40% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        ";
        }
        // line 126
        echo "                            <!-- /.col -->

                            <div class=\"col-xl-3 col-md-6 col-12\">
                                <div class=\"info-box bg-b-blue\">
                                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">school</i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Total Course</span>
                                        <span class=\"info-box-number\">52</span>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: 85%\"></div>
                                        </div>
                                        <span class=\"progress-description\">
\t\t\t\t\t\t                    85% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class=\"col-xl-3 col-md-6 col-12\">
                                <div class=\"info-box bg-b-pink\">
                                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">monetization_on</i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Fees Collection</span>
                                        <span class=\"info-box-number\">13,921</span><span>\$</span>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: 50%\"></div>
                                        </div>
                                        <span class=\"progress-description\">
\t\t\t\t\t\t                    50% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- end widget -->
                    <!-- chart start -->
                    <div class=\"row\">
    ";
        // line 169
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 170
            echo "        ";
            $this->loadTemplate("modulesUsed/school_survey.html.twig", "default/index.html.twig", 170)->display($context);
            // line 171
            echo "        ";
            $this->loadTemplate("modulesUsed/school_survey1.html.twig", "default/index.html.twig", 171)->display($context);
            // line 172
            echo "
    ";
        } else {
            // line 174
            echo "        ";
            $this->loadTemplate("modulesUsed/rapmis.html.twig", "default/index.html.twig", 174)->display($context);
            // line 175
            echo "        ";
            $this->loadTemplate("modulesUsed/school_survey.html.twig", "default/index.html.twig", 175)->display($context);
            // line 176
            echo "        ";
            $this->loadTemplate("modulesUsed/carousel.html.twig", "default/index.html.twig", 176)->display($context);
            // line 177
            echo "    ";
        }
        // line 178
        echo "                    </div>
                    <!-- Chart end -->
                    <!-- start carousel images  or start course list -->
                    <div class=\"row\">
    ";
        // line 182
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 183
            echo "        ";
            $this->loadTemplate("modulesUsed/course_list.html.twig", "default/index.html.twig", 183)->display($context);
            // line 184
            echo "    ";
        } else {
            // line 185
            echo "        ";
            $this->loadTemplate("modulesUsed/carousel_image.html.twig", "default/index.html.twig", 185)->display($context);
            // line 186
            echo "    ";
        }
        // line 187
        echo "                    </div>
                    <!-- End carousel images or end start course  -->

                        <!-- Quick Mail and Activity feed start -->
                    <div class=\"row\">
                        <!-- Quick Mail start -->
                        ";
        // line 193
        echo twig_include($this->env, $context, "modulesUsed/quick_mail.html.twig");
        echo "
                        ";
        // line 195
        echo "                        <!-- Quick Mail end -->
                        <!-- Activity feed start -->
                        ";
        // line 197
        echo twig_include($this->env, $context, "modulesUsed/activity_feed.html.twig");
        echo "
                        ";
        // line 199
        echo "                        <!-- Activity feed end -->
                    </div>
                    <!-- Quick Mail and Activity feed end -->
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card-box\">
                                <div class=\"card-head\">
                ";
        // line 206
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 207
            echo "                    <header>Upload Subjet</header>
                ";
        } else {
            // line 209
            echo "                    <header>Download Subjet</header>

                ";
        }
        // line 212
        echo "                                    <button id = \"panel-button8\"
                                            class = \"mdl-button mdl-js-button mdl-button--icon pull-right\"
                                            data-upgraded = \",MaterialButton\">
                                        <i class = \"material-icons\">more_vert</i>
                                    </button>
                                    <ul class = \"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                                        data-mdl-for = \"panel-button8\">
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action</li>
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action</li>
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else here</li>
                                    </ul>
                                </div>
                                <div class=\"card-body \">
                                    <div class=\"table-responsive\">
                                        ";
        // line 226
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 227
            echo "                                            ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 227, $this->source); })()), 'form_start');
            echo "
                                            ";
            // line 228
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 228, $this->source); })()), 'widget');
            echo "
                                            <div class=\"box-footer clearfix\">
                                                <button type=\"submit\" class=\"mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right\">Create <i class=\"fa fa-paper-plane-o\"></i></button>
                                            </div>
                                            ";
            // line 232
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 232, $this->source); })()), 'form_end');
            echo "
                                            ";
            // line 234
            echo "                                        ";
        } else {
            // line 235
            echo "                                            <div class=\"clear\"></div>
                                            ";
            // line 236
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 236, $this->source); })()), 'form_start');
            echo "
                                            ";
            // line 237
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 237, $this->source); })()), 'widget');
            echo "
                                            <div class=\"box-footer clearfix\">
                                                <button type=\"submit\" class=\"mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right\">Go to <i class=\"fa fa-paper-plane-o\"></i></button>
                                            </div>
                                            ";
            // line 241
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 241, $this->source); })()), 'form_end');
            echo "
                                        ";
        }
        // line 243
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card-box\">
                                <div class=\"card-head\">
                                    <header>Todo List</header>
                                    <button id = \"panel-button\"
                                            class = \"mdl-button mdl-js-button mdl-button--icon pull-right\"
                                            data-upgraded = \",MaterialButton\">
                                        <i class = \"material-icons\">more_vert</i>
                                    </button>
                                    <ul class = \"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                                        data-mdl-for = \"panel-button\">
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action</li>
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action</li>
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else here</li>
                                    </ul>
                                </div>
                                <div class=\"card-body \">
                                    <ul class=\"to-do-list ui-sortable\" id=\"sortable-todo\">
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check1\">
                                                <label for=\"todo-check1\"></label>
                                            </div>
                                            <p class=\"todo-title\">Add fees details in system
                                            </p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check2\">
                                                <label for=\"todo-check2\"></label>
                                            </div>
                                            <p class=\"todo-title\">Announcement for holiday
                                            </p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check3\">
                                                <label for=\"todo-check3\"></label>
                                            </div>
                                            <p class=\"todo-title\">call bus driver</p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check4\">
                                                <label for=\"todo-check4\"></label>
                                            </div>
                                            <p class=\"todo-title\">School picnic</p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check5\">
                                                <label for=\"todo-check5\"></label>
                                            </div>
                                            <p class=\"todo-title\">Exam time table generate
                                            </p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start new student list -->
                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"card  card-box\">
                                <div class=\"card-head\">
                                    <header>New Student List</header>
                                    <div class=\"tools\">
                                        <a class=\"fa fa-repeat btn-color box-refresh\" href=\"javascript:;\"></a>
                                        <a class=\"t-collapse btn-color fa fa-chevron-down\" href=\"javascript:;\"></a>
                                        <a class=\"t-close btn-color fa fa-times\" href=\"javascript:;\"></a>
                                    </div>
                                </div>
                                <div class=\"card-body \">
                                    <div class=\"table-wrap\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table display product-overview mb-30\" id=\"support_table\">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Assigned Professor</th>
                                                    <th>Date Of Admit</th>
                                                    <th>Fees</th>
                                                    <th>Branch</th>
                                                    <th>Edit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Jens Brincker</td>
                                                    <td>Kenny Josh</td>
                                                    <td>27/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-success\">paid</span>
                                                    </td>
                                                    <td>Mechanical</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Mark Hay</td>
                                                    <td> Mark</td>
                                                    <td>26/05/2017</td>
                                                    <td>
                                                        <span class=\"label label-sm label-warning\">unpaid </span>
                                                    </td>
                                                    <td>Science</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Anthony Davie</td>
                                                    <td>Cinnabar</td>
                                                    <td>21/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-success \">paid</span>
                                                    </td>
                                                    <td>Commerce</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>David Perry</td>
                                                    <td>Felix </td>
                                                    <td>20/04/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-danger\">unpaid</span>
                                                    </td>
                                                    <td>Mechanical</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Anthony Davie</td>
                                                    <td>Beryl</td>
                                                    <td>24/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-success \">paid</span>
                                                    </td>
                                                    <td>M.B.A.</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Alan Gilchrist</td>
                                                    <td>Joshep</td>
                                                    <td>22/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-warning \">unpaid</span>
                                                    </td>
                                                    <td>Science</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Mark Hay</td>
                                                    <td>Jayesh</td>
                                                    <td>18/06/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-success \">paid</span>
                                                    </td>
                                                    <td>Commerce</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Sue Woodger</td>
                                                    <td>Sharma</td>
                                                    <td>17/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-danger\">unpaid</span>
                                                    </td>
                                                    <td>Mechanical</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end new student list -->
                </div>

            </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 243,  459 => 241,  452 => 237,  448 => 236,  445 => 235,  442 => 234,  438 => 232,  431 => 228,  426 => 227,  424 => 226,  408 => 212,  403 => 209,  399 => 207,  397 => 206,  388 => 199,  384 => 197,  380 => 195,  376 => 193,  368 => 187,  365 => 186,  362 => 185,  359 => 184,  356 => 183,  354 => 182,  348 => 178,  345 => 177,  342 => 176,  339 => 175,  336 => 174,  332 => 172,  329 => 171,  326 => 170,  324 => 169,  279 => 126,  259 => 108,  248 => 100,  242 => 97,  236 => 95,  233 => 94,  230 => 93,  227 => 92,  224 => 91,  221 => 90,  214 => 89,  211 => 88,  208 => 87,  205 => 86,  200 => 85,  193 => 80,  191 => 79,  188 => 78,  167 => 59,  156 => 51,  150 => 48,  144 => 46,  141 => 45,  138 => 44,  135 => 43,  132 => 42,  129 => 41,  122 => 40,  119 => 39,  114 => 38,  111 => 37,  104 => 36,  101 => 35,  96 => 34,  88 => 28,  86 => 27,  74 => 18,  64 => 10,  55 => 9,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% set compt = 0 %}
{% set compt_class = 0 %}
{% set percent = 0 %}
{% set compt1 = 0 %}
{% set percent1 = 0 %}


{% block body %}
            <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    <div class=\"page-bar\">
                        <div class=\"page-title-breadcrumb\">
                            <div class=\" pull-left\">
                                <div class=\"page-title\">Dashboard</div>
                            </div>
                            <ol class=\"breadcrumb page-breadcrumb pull-right\">
                                <li><i class=\"fa fa-home\"></i>&nbsp;<a class=\"parent-item\" href=\"{{ path('homepage') }}\">Home</a>&nbsp;<i class=\"fa fa-angle-right\"></i>
                                </li>
                                <li class=\"active\">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- start widget -->
                    <div class=\"state-overview\">
                        <div class=\"row\">
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <div class=\"col-xl-3 col-md-6 col-12\">
                                <div class=\"info-box bg-b-green\">
                                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">group</i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Total Students</span>
                                            {% for student in students if ((app.user.etablissements.name) and (student.classes.etablissements.name == app.user.etablissements.name  )) %}
                                                {% set compt = compt + 1 %}
                                            {% endfor %}

                                        {% for class in classes if ((app.user.etablissements.name) and (class.etablissements.name == app.user.etablissements.name  )) %}
                                            {% set compt_class = compt_class + 1 %}
                                        {% endfor %}
                                        {% if(compt_class == 0) %}
                                        {% set percent = (compt/1)*0 %}
                                            {% else %}
                                                {% set percent = (compt/(compt_class*50))*100 %}
                                        {% endif %}
                                        <span class=\"info-box-number\">{{ compt }}</span>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: {{ percent }}%\"></div>
                                        </div>
                                        <span class=\"progress-description\">
                                            {{ percent|round(2, 'floor')  }}% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                    <!-- /.info-box -->
                            </div>
        {% else %}
            <div class=\"col-xl-3 col-md-6 col-12\">
                <div class=\"info-box bg-b-green\">
                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">group</i></span>

                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Total Students</span>
                        <span class=\"info-box-number\">450</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 45%\"></div>
                        </div>
                        <span class=\"progress-description\">
                                            45% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        {% endif %}
                            <!-- /.col -->
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <div class=\"col-xl-3 col-md-6 col-12\">
                                <div class=\"info-box bg-b-yellow\">
                                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">person</i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">New Students</span>
                                        {% for student in students if ((app.user.etablissements.name) and (student.classes.etablissements.name == app.user.etablissements.name  )) %}
                                            {% if student.nouveau == true %}
                                            {% set compt1 = compt1 + 1 %}
                                            {% endif %}
                                        {% endfor %}
                            {% if (compt_class ==0) %}
                                {% set percent1 = (compt1/1)*0 %}
                            {% else %}
                                        {% set percent1 = (compt1/(compt_class*50))*100 %}
                                {% endif %}
                                        <span class=\"info-box-number\">{{ compt1 }}</span>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: {{ percent }}%\"></div>
                                        </div>
                                        <span class=\"progress-description\">
\t\t\t\t\t\t                   {{ percent1|round(2, 'floor')  }}% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
        {% else %}
            <div class=\"col-xl-3 col-md-6 col-12\">
                <div class=\"info-box bg-b-yellow\">
                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">person</i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">New Students</span>
                        <span class=\"info-box-number\">155</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 40%\"></div>
                        </div>
                        <span class=\"progress-description\">
\t\t\t\t\t\t                   40% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        {% endif %}
                            <!-- /.col -->

                            <div class=\"col-xl-3 col-md-6 col-12\">
                                <div class=\"info-box bg-b-blue\">
                                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">school</i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Total Course</span>
                                        <span class=\"info-box-number\">52</span>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: 85%\"></div>
                                        </div>
                                        <span class=\"progress-description\">
\t\t\t\t\t\t                    85% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class=\"col-xl-3 col-md-6 col-12\">
                                <div class=\"info-box bg-b-pink\">
                                    <span class=\"info-box-icon push-bottom\"><i class=\"material-icons\">monetization_on</i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Fees Collection</span>
                                        <span class=\"info-box-number\">13,921</span><span>\$</span>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: 50%\"></div>
                                        </div>
                                        <span class=\"progress-description\">
\t\t\t\t\t\t                    50% Increase in 28 Days
\t\t\t\t\t\t                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- end widget -->
                    <!-- chart start -->
                    <div class=\"row\">
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {% include 'modulesUsed/school_survey.html.twig' %}
        {% include 'modulesUsed/school_survey1.html.twig' %}

    {% else %}
        {% include 'modulesUsed/rapmis.html.twig' %}
        {% include 'modulesUsed/school_survey.html.twig' %}
        {% include 'modulesUsed/carousel.html.twig' %}
    {% endif %}
                    </div>
                    <!-- Chart end -->
                    <!-- start carousel images  or start course list -->
                    <div class=\"row\">
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {% include 'modulesUsed/course_list.html.twig' %}
    {% else %}
        {% include 'modulesUsed/carousel_image.html.twig' %}
    {% endif %}
                    </div>
                    <!-- End carousel images or end start course  -->

                        <!-- Quick Mail and Activity feed start -->
                    <div class=\"row\">
                        <!-- Quick Mail start -->
                        {{ include('modulesUsed/quick_mail.html.twig') }}
                        {#{% include 'modulesUsed/quick_mail.html.twig' %}#}
                        <!-- Quick Mail end -->
                        <!-- Activity feed start -->
                        {{ include('modulesUsed/activity_feed.html.twig') }}
                        {#{% include 'modulesUsed/activity_feed.html.twig' %}#}
                        <!-- Activity feed end -->
                    </div>
                    <!-- Quick Mail and Activity feed end -->
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card-box\">
                                <div class=\"card-head\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <header>Upload Subjet</header>
                {% else %}
                    <header>Download Subjet</header>

                {% endif %}
                                    <button id = \"panel-button8\"
                                            class = \"mdl-button mdl-js-button mdl-button--icon pull-right\"
                                            data-upgraded = \",MaterialButton\">
                                        <i class = \"material-icons\">more_vert</i>
                                    </button>
                                    <ul class = \"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                                        data-mdl-for = \"panel-button8\">
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action</li>
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action</li>
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else here</li>
                                    </ul>
                                </div>
                                <div class=\"card-body \">
                                    <div class=\"table-responsive\">
                                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                            {{ form_start(form) }}
                                            {{ form_widget(form) }}
                                            <div class=\"box-footer clearfix\">
                                                <button type=\"submit\" class=\"mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right\">Create <i class=\"fa fa-paper-plane-o\"></i></button>
                                            </div>
                                            {{ form_end(form) }}
                                            {#{{ render (controller('AppBundle:Epreuves:new')) }}#}
                                        {% else %}
                                            <div class=\"clear\"></div>
                                            {{ form_start(form1) }}
                                            {{ form_widget(form1) }}
                                            <div class=\"box-footer clearfix\">
                                                <button type=\"submit\" class=\"mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right\">Go to <i class=\"fa fa-paper-plane-o\"></i></button>
                                            </div>
                                            {{ form_end(form1) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card-box\">
                                <div class=\"card-head\">
                                    <header>Todo List</header>
                                    <button id = \"panel-button\"
                                            class = \"mdl-button mdl-js-button mdl-button--icon pull-right\"
                                            data-upgraded = \",MaterialButton\">
                                        <i class = \"material-icons\">more_vert</i>
                                    </button>
                                    <ul class = \"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                                        data-mdl-for = \"panel-button\">
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action</li>
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action</li>
                                        <li class = \"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else here</li>
                                    </ul>
                                </div>
                                <div class=\"card-body \">
                                    <ul class=\"to-do-list ui-sortable\" id=\"sortable-todo\">
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check1\">
                                                <label for=\"todo-check1\"></label>
                                            </div>
                                            <p class=\"todo-title\">Add fees details in system
                                            </p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check2\">
                                                <label for=\"todo-check2\"></label>
                                            </div>
                                            <p class=\"todo-title\">Announcement for holiday
                                            </p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check3\">
                                                <label for=\"todo-check3\"></label>
                                            </div>
                                            <p class=\"todo-title\">call bus driver</p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check4\">
                                                <label for=\"todo-check4\"></label>
                                            </div>
                                            <p class=\"todo-title\">School picnic</p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                        <li class=\"clearfix\">
                                            <div class=\"todo-check pull-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"todo-check5\">
                                                <label for=\"todo-check5\"></label>
                                            </div>
                                            <p class=\"todo-title\">Exam time table generate
                                            </p>
                                            <div class=\"todo-actionlist pull-right clearfix\">
                                                <a href=\"#\" class=\"todo-remove\"><i class=\"fa fa-times\"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start new student list -->
                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"card  card-box\">
                                <div class=\"card-head\">
                                    <header>New Student List</header>
                                    <div class=\"tools\">
                                        <a class=\"fa fa-repeat btn-color box-refresh\" href=\"javascript:;\"></a>
                                        <a class=\"t-collapse btn-color fa fa-chevron-down\" href=\"javascript:;\"></a>
                                        <a class=\"t-close btn-color fa fa-times\" href=\"javascript:;\"></a>
                                    </div>
                                </div>
                                <div class=\"card-body \">
                                    <div class=\"table-wrap\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table display product-overview mb-30\" id=\"support_table\">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Assigned Professor</th>
                                                    <th>Date Of Admit</th>
                                                    <th>Fees</th>
                                                    <th>Branch</th>
                                                    <th>Edit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Jens Brincker</td>
                                                    <td>Kenny Josh</td>
                                                    <td>27/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-success\">paid</span>
                                                    </td>
                                                    <td>Mechanical</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Mark Hay</td>
                                                    <td> Mark</td>
                                                    <td>26/05/2017</td>
                                                    <td>
                                                        <span class=\"label label-sm label-warning\">unpaid </span>
                                                    </td>
                                                    <td>Science</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Anthony Davie</td>
                                                    <td>Cinnabar</td>
                                                    <td>21/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-success \">paid</span>
                                                    </td>
                                                    <td>Commerce</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>David Perry</td>
                                                    <td>Felix </td>
                                                    <td>20/04/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-danger\">unpaid</span>
                                                    </td>
                                                    <td>Mechanical</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Anthony Davie</td>
                                                    <td>Beryl</td>
                                                    <td>24/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-success \">paid</span>
                                                    </td>
                                                    <td>M.B.A.</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Alan Gilchrist</td>
                                                    <td>Joshep</td>
                                                    <td>22/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-warning \">unpaid</span>
                                                    </td>
                                                    <td>Science</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Mark Hay</td>
                                                    <td>Jayesh</td>
                                                    <td>18/06/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-success \">paid</span>
                                                    </td>
                                                    <td>Commerce</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Sue Woodger</td>
                                                    <td>Sharma</td>
                                                    <td>17/05/2016</td>
                                                    <td>
                                                        <span class=\"label label-sm label-danger\">unpaid</span>
                                                    </td>
                                                    <td>Mechanical</td>
                                                    <td><a href=\"javascript:void(0)\" class=\"\" data-toggle=\"tooltip\" title=\"Edit\" ><i class=\"fa fa-check\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"fa fa-trash\"></i></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end new student list -->
                </div>

            </div>
{% endblock %}", "default/index.html.twig", "C:\\wamp64\\www\\rapmis\\app\\Resources\\views\\default\\index.html.twig");
    }
}
