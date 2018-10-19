<?php

/* teacher/index.html.twig */
class __TwigTemplate_b83556ffcff559beff4e3b19a85a2883d0e52fd6d18461852d0f1c9e0ed1cdaf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "teacher/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- start page content -->
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <div class=\"page-bar\">
                <div class=\"page-title-breadcrumb\">
                    <div class=\" pull-left\">
                        <div class=\"page-title\">Teachers List</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a class=\"parent-item\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>&nbsp;
                            <i class=\"fa fa-angle-right\"></i>
                        </li>
                        <li><a class=\"parent-item\" href=\"#\">Teachers</a>&nbsp;<i class=\"fa fa-angle-right\"></i>
                        </li>
                        <li class=\"active\">Teachers List</li>
                    </ol>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"tabbable-line\">
                        <!-- <ul class=\"nav nav-tabs\">
    <li class=\"active\">
    <a href=\"#tab1\" data-toggle=\"tab\"> List View </a>
    </li>
    <li>
    <a href=\"#tab2\" data-toggle=\"tab\"> Grid View </a>
    </li>
    </ul> -->
                        <ul class=\"nav customtab nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a href=\"#tab1\" class=\"nav-link active\"  data-toggle=\"tab\" >List View</a></li>
                            <li class=\"nav-item\"><a href=\"#tab2\" class=\"nav-link\" data-toggle=\"tab\">Grid View</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active fontawesome-demo\" id=\"tab1\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"card card-box\">
                                            <div class=\"card-head\">
                                                <header>All Teachers</header>
                                                <div class=\"tools\">
                                                    <a class=\"fa fa-repeat btn-color box-refresh\" href=\"javascript:;\"></a>
                                                    <a class=\"t-collapse btn-color fa fa-chevron-down\" href=\"javascript:;\"></a>
                                                    <a class=\"t-close btn-color fa fa-times\" href=\"javascript:;\"></a>
                                                </div>
                                            </div>
                                            <div class=\"card-body \">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6 col-sm-6 col-6\">

                                                        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_new");
        echo "\"> <div class=\"btn-group\">
                                                                <button id=\"addRow1\"  class=\"btn btn-info\">
                                                                    Add New Teacher<i class=\"fa fa-plus\"></i>
                                                                </button>
                                                            </div></a>

                                                    </div>
                                                    <div class=\"col-md-6 col-sm-6 col-6\">
                                                        <div class=\"btn-group pull-right\">
                                                            <a class=\"btn deepPink-bgcolor  btn-outline dropdown-toggle\" data-toggle=\"dropdown\">Tools
                                                                <i class=\"fa fa-angle-down\"></i>
                                                            </a>
                                                            <ul class=\"dropdown-menu pull-right\">
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <i class=\"fa fa-print\"></i> Print </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <i class=\"fa fa-file-pdf-o\"></i> Save as PDF </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <i class=\"fa fa-file-excel-o\"></i> Export to Excel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"table-scrollable\">
                                                    <table class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\" id=\"example4\">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Name </th>
                                                            <th> First Name </th>
                                                            <th> Phone </th>
                                                            <th> Gender </th>
                                                            <th>exempt subjects</th>
                                                            <th> Action </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) || array_key_exists("teachers", $context) ? $context["teachers"] : (function () { throw new Twig_Error_Runtime('Variable "teachers" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 98
            echo "
                                                            <tr class=\"odd gradeX\">
                                                                <td class=\"patient-img\">
                                                                    <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/prof/" . twig_get_attribute($this->env, $this->source, $context["teacher"], "filename", array()))), "html", null, true);
            echo "\" alt=\"\">
                                                                </td>
                                                                <td class=\"left\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "name", array()), "html", null, true);
            echo "</td>
                                                                <td class=\"left\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "prenom", array()), "html", null, true);
            echo "</td>
                                                                <td class=\"left\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "tel", array()), "html", null, true);
            echo "</td>
                                                                <td class=\"left\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "sexe", array()), "html", null, true);
            echo "</td>
                                                                <td class=\"left\">";
            // line 107
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["teacher"], "matieres", array()), "||"), "html", null, true);
            echo "</td>
                                                                <td>
                                                                    <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["teacher"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">
                                                                        <i class=\"fa fa-pencil\"></i>
                                                                    </a>
                                                                    <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_show", array("id" => twig_get_attribute($this->env, $this->source, $context["teacher"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\">
                                                                        <i class=\"fa fa-th-list\"></i>
                                                                    </a>
                                                                    <button class=\"btn btn-danger btn-xs\">
                                                                        <i class=\"fa fa-trash-o \"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- debut tab2 pour l'affichage en grid -->
                            <div class=\"tab-pane\" id=\"tab2\">
                                <div class=\"row\">
                                    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) || array_key_exists("teachers", $context) ? $context["teachers"] : (function () { throw new Twig_Error_Runtime('Variable "teachers" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 134
            echo "                                        <div class=\"col-md-4\">
                                            <div class=\"card card-box\">
                                                <div class=\"card-body no-padding \">
                                                    <div class=\"doctor-profile\">
                                                        <img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/prof/" . twig_get_attribute($this->env, $this->source, $context["teacher"], "filename", array()))), "html", null, true);
            echo "\" class=\"doctor-pic\" alt=\"\">
                                                        <div class=\"profile-usertitle\">
                                                            <div class=\"doctor-name\">";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "name", array()), "html", null, true);
            echo "</div>
                                                            <div class=\"name-center\"> ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "prenom", array()), "html", null, true);
            echo " </div>
                                                        </div>
                                                        <p>née le ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["teacher"], "anneeNais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "anneeNais", array()), "Y-m-d"), "html", null, true);
            }
            echo " à, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                        <div><p><i class=\"fa fa-phone\"></i><a href=\"tel:";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "tel", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "tel", array()), "html", null, true);
            echo "</a></p> </div>
                                                        <div><p><i class=\"material-icons f-left\">email</i> <a href=\"email:";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "email", array()), "html", null, true);
            echo "</a></p> </div>
                                                        <div class=\"profile-userbuttons\">
                                                            <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_show", array("id" => twig_get_attribute($this->env, $this->source, $context["teacher"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-circle deepPink-bgcolor btn-sm\">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "teacher/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 154,  267 => 147,  260 => 145,  254 => 144,  248 => 143,  243 => 141,  239 => 140,  234 => 138,  228 => 134,  224 => 133,  210 => 121,  195 => 112,  189 => 109,  184 => 107,  180 => 106,  176 => 105,  172 => 104,  168 => 103,  163 => 101,  158 => 98,  154 => 97,  108 => 54,  64 => 13,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <!-- start page content -->
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <div class=\"page-bar\">
                <div class=\"page-title-breadcrumb\">
                    <div class=\" pull-left\">
                        <div class=\"page-title\">Teachers List</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a class=\"parent-item\" href=\"{{ path('homepage') }}\">Home</a>&nbsp;
                            <i class=\"fa fa-angle-right\"></i>
                        </li>
                        <li><a class=\"parent-item\" href=\"#\">Teachers</a>&nbsp;<i class=\"fa fa-angle-right\"></i>
                        </li>
                        <li class=\"active\">Teachers List</li>
                    </ol>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"tabbable-line\">
                        <!-- <ul class=\"nav nav-tabs\">
    <li class=\"active\">
    <a href=\"#tab1\" data-toggle=\"tab\"> List View </a>
    </li>
    <li>
    <a href=\"#tab2\" data-toggle=\"tab\"> Grid View </a>
    </li>
    </ul> -->
                        <ul class=\"nav customtab nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a href=\"#tab1\" class=\"nav-link active\"  data-toggle=\"tab\" >List View</a></li>
                            <li class=\"nav-item\"><a href=\"#tab2\" class=\"nav-link\" data-toggle=\"tab\">Grid View</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active fontawesome-demo\" id=\"tab1\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"card card-box\">
                                            <div class=\"card-head\">
                                                <header>All Teachers</header>
                                                <div class=\"tools\">
                                                    <a class=\"fa fa-repeat btn-color box-refresh\" href=\"javascript:;\"></a>
                                                    <a class=\"t-collapse btn-color fa fa-chevron-down\" href=\"javascript:;\"></a>
                                                    <a class=\"t-close btn-color fa fa-times\" href=\"javascript:;\"></a>
                                                </div>
                                            </div>
                                            <div class=\"card-body \">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6 col-sm-6 col-6\">

                                                        <a href=\"{{ path('teacher_new') }}\"> <div class=\"btn-group\">
                                                                <button id=\"addRow1\"  class=\"btn btn-info\">
                                                                    Add New Teacher<i class=\"fa fa-plus\"></i>
                                                                </button>
                                                            </div></a>

                                                    </div>
                                                    <div class=\"col-md-6 col-sm-6 col-6\">
                                                        <div class=\"btn-group pull-right\">
                                                            <a class=\"btn deepPink-bgcolor  btn-outline dropdown-toggle\" data-toggle=\"dropdown\">Tools
                                                                <i class=\"fa fa-angle-down\"></i>
                                                            </a>
                                                            <ul class=\"dropdown-menu pull-right\">
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <i class=\"fa fa-print\"></i> Print </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <i class=\"fa fa-file-pdf-o\"></i> Save as PDF </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <i class=\"fa fa-file-excel-o\"></i> Export to Excel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"table-scrollable\">
                                                    <table class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\" id=\"example4\">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Name </th>
                                                            <th> First Name </th>
                                                            <th> Phone </th>
                                                            <th> Gender </th>
                                                            <th>exempt subjects</th>
                                                            <th> Action </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for teacher in teachers %}

                                                            <tr class=\"odd gradeX\">
                                                                <td class=\"patient-img\">
                                                                    <img src=\"{{ asset('uploads/prof/' ~ teacher.filename) }}\" alt=\"\">
                                                                </td>
                                                                <td class=\"left\">{{ teacher.name }}</td>
                                                                <td class=\"left\">{{ teacher.prenom }}</td>
                                                                <td class=\"left\">{{ teacher.tel }}</td>
                                                                <td class=\"left\">{{ teacher.sexe }}</td>
                                                                <td class=\"left\">{{ teacher.matieres|join('||') }}</td>
                                                                <td>
                                                                    <a href=\"{{ path('teacher_edit', { 'id': teacher.id }) }}\" class=\"btn btn-primary btn-xs\">
                                                                        <i class=\"fa fa-pencil\"></i>
                                                                    </a>
                                                                    <a href=\"{{ path('teacher_show', { 'id': teacher.id }) }}\" class=\"btn btn-info btn-xs\">
                                                                        <i class=\"fa fa-th-list\"></i>
                                                                    </a>
                                                                    <button class=\"btn btn-danger btn-xs\">
                                                                        <i class=\"fa fa-trash-o \"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- debut tab2 pour l'affichage en grid -->
                            <div class=\"tab-pane\" id=\"tab2\">
                                <div class=\"row\">
                                    {% for teacher in teachers %}
                                        <div class=\"col-md-4\">
                                            <div class=\"card card-box\">
                                                <div class=\"card-body no-padding \">
                                                    <div class=\"doctor-profile\">
                                                        <img src=\"{{ asset('uploads/prof/' ~ teacher.filename) }}\" class=\"doctor-pic\" alt=\"\">
                                                        <div class=\"profile-usertitle\">
                                                            <div class=\"doctor-name\">{{ teacher.name }}</div>
                                                            <div class=\"name-center\"> {{ teacher.prenom }} </div>
                                                        </div>
                                                        <p>née le {% if teacher.anneeNais %}{{ teacher.anneeNais|date('Y-m-d') }}{% endif %} à, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                        <div><p><i class=\"fa fa-phone\"></i><a href=\"tel:{{ teacher.tel }}\">{{ teacher.tel }}</a></p> </div>
                                                        <div><p><i class=\"material-icons f-left\">email</i> <a href=\"email:{{ teacher.email }}\">{{ teacher.email }}</a></p> </div>
                                                        <div class=\"profile-userbuttons\">
                                                            <a href=\"{{ path('teacher_show', { 'id': teacher.id }) }}\" class=\"btn btn-circle deepPink-bgcolor btn-sm\">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
{% endblock %}
", "teacher/index.html.twig", "C:\\wamp64\\www\\rapmis\\app\\Resources\\views\\teacher\\index.html.twig");
    }
}
