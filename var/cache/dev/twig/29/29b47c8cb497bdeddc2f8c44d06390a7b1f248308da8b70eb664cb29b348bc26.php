<?php

/* base.html.twig */
class __TwigTemplate_d5546ca52575ffa6b471e0572653deaadfe268183a6a5baeaae626b85c670431 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'name' => array($this, 'block_name'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta name=\"description\" content=\"Responsive Admin Template\" />
    <meta name=\"author\" content=\"RapMis\" />
    <title>RapMis | HABITECH SOLUTIONS & SERVICES</title>
    <!-- google font -->
    <!-- icons -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/material-design-icons/material-icon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- full calendar -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--bootstrap -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/summernote/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Material Design Lite CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/material/material.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/material_style.css"), "html", null, true);
        echo "\">
    <!-- inbox style -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/pages/inbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- data tables -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Theme Styles -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme/light/theme_style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"rt_style_components\" type=\"text/css\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme/light/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme/light/theme-color.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Owl Carousel Assets -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 58
        echo "</head>
<!-- END HEAD -->
<body class=\"page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo\">
<div class=\"page-wrapper\">
    <!-- start header -->
    <div class=\"page-header navbar navbar-fixed-top\">
        <div class=\"page-header-inner \">
            <!-- logo start -->
            <div class=\"page-logo\">
                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                    <span class=\"logo-icon material-icons fa-rotate-45\">school</span>
                    <span class=\"logo-default\" >RAPMIS</span> </a>
            </div>
            <!-- logo end -->
            <ul class=\"nav navbar-nav navbar-left in\">
                <li><a href=\"#\" class=\"menu-toggler sidebar-toggler\"><i class=\"icon-menu\"></i></a></li>
            </ul>
            <form class=\"search-form-opened\" action=\"#\" method=\"GET\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"query\">

                    <span class=\"input-group-btn\">
                          <a href=\"javascript:;\" class=\"btn submit\">
                             <i class=\"icon-magnifier\"></i>
                           </a>
                        </span>
                </div>
            </form>

            <!-- start mobile menu -->
            <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->


            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li><a href=\"javascript:;\" class=\"fullscreen-btn\"><i class=\"fa fa-arrows-alt\"></i></a></li>
                    <!-- start language menu -->
                    <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"fullscreen-btn\"><i class=\"\">
                            </i>HABITECH SOLUTIONS <strong>&</strong> SERVICES</a></li>

                    <li class=\"dropdown language-switch\">

                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/flags/gb.png"), "html", null, true);
        echo "\" class=\"position-left\" alt=\"\"> English <span class=\"fa fa-angle-down\"></span>
                        </a>

                        <ul class=\"dropdown-menu\">
                            <li>
                                <a class=\"deutsch\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/flags/de.png"), "html", null, true);
        echo "\" alt=\"\"> Français</a>
                            </li>
                            <li>
                                <a class=\"english\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/flags/gb.png"), "html", null, true);
        echo "\" alt=\"\"> English</a>
                            </li>


                        </ul>
                    </li>



           <!-- end language menu -->
                    <!-- start notification dropdown -->
                    ";
        // line 124
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 125
            echo "                    <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"badge headerBadgeColor1\"> 6 </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3><span class=\"bold\">Notifications</span></h3>
                                <span class=\"notification-label purple-bgcolor\">New 6</span>
                            </li>
                            <li>
                                <ul class=\"dropdown-menu-list small-slimscroll-style\" data-handle-color=\"#637283\">
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">just now</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle deepPink-bgcolor\"><i class=\"fa fa-check\"></i></span> Congratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">3 mins</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle purple-bgcolor\"><i class=\"fa fa-user o\"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">7 mins</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle blue-bgcolor\"><i class=\"fa fa-comments-o\"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">12 mins</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle pink\"><i class=\"fa fa-heart\"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">15 mins</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle yellow\"><i class=\"fa fa-warning\"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">10 hrs</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle red\"><i class=\"fa fa-times\"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"dropdown-menu-footer\">
                                    <a href=\"javascript:void(0)\"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->

                    <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"badge headerBadgeColor2\"> 2 </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3><span class=\"bold\">Messages</span></h3>
                                <span class=\"notification-label cyan-bgcolor\">New 2</span>
                            </li>
                            <li>
                                <ul class=\"dropdown-menu-list small-slimscroll-style\" data-handle-color=\"#637283\">
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof2.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> Sarah Smith </span>
                                                \t<span class=\"time\">Just Now </span>
                                                </span>
                                            <span class=\"message\"> Jatin I found you on LinkedIn... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof3.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> John Deo </span>
                                                \t<span class=\"time\">16 mins </span>
                                                </span>
                                            <span class=\"message\"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof1.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> Rajesh </span>
                                                \t<span class=\"time\">2 hrs </span>
                                                </span>
                                            <span class=\"message\"> pls take a print of attachments. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof8.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> Lina Smith </span>
                                                \t<span class=\"time\">40 mins </span>
                                                </span>
                                            <span class=\"message\"> Apply for Ortho Surgeon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof5.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> Jacob Ryan </span>
                                                \t<span class=\"time\">46 mins </span>
                                                </span>
                                            <span class=\"message\"> Request for leave application. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"dropdown-menu-footer\">
                                    <a href=\"#\"> All Messages </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->








                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <img alt=\"\" class=\"img-circle \" src=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/user/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 278, $this->source); })()), "user", array()), "photoProfile", array()), "filename", array()))), "html", null, true);
            echo "\" />
                            <span class=\"username username-hide-on-mobile\"> ";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 279, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                            <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            ";
            // line 283
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 284
                echo "                                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
                echo "\">
                                        Logged in as ";
                // line 285
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 285, $this->source); })()), "user", array()), "username", array()), "html", null, true);
                echo "
                                    </a>
                                </li>
                            ";
            } else {
                // line 289
                echo "                                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 291
            echo "                            <li>
                                <a href=\"user_profile.html\">
                                    <i class=\"icon-user\"></i> Profile </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-settings\"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-directions\"></i> Help
                                </a>
                            </li>
                            <li class=\"divider\"> </li>
                            <li>
                                <a href=\"lock_screen.html\">
                                    <i class=\"icon-lock\"></i> Lock
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 312
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                                    <i class=\"icon-logout\"></i> ";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo " </a>
                            </li>
                        </ul>
                    </li>
                    ";
        } else {
            // line 318
            echo "                        <li class=\"dropdown dropdown-user\">
                            <a href=\"";
            // line 319
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" class=\"hLink dropdown-toggle\"
                               data-hover=\"dropdown\" data-close-others=\"true\">Connexion</a>
                        </li>

                    ";
        }
        // line 324
        echo "
                    <!-- end manage user dropdown -->
                    <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                        <a id=\"headerSettingButton\" class=\"mdl-button mdl-js-button mdl-button--icon pull-right\" data-upgraded=\",MaterialButton\">
                            <i class=\"material-icons\">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>



    <!-- end header -->
    <!-- start color quick setting -->
    <div class=\"quick-setting-main\">
        <button class=\"control-sidebar-btn btn\" data-toggle=\"control-sidebar\"><i class=\"fa fa-cog fa-spin\"></i></button>
        <div class=\"quick-setting display-none\">
            <ul id=\"themecolors\" >
                <li><p class=\"selector-title\">Main Layouts</p></li>
                <li class=\"complete\"><div class=\"theme-color layout-theme\">
                        <a href=\"#\" data-theme=\"light\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"dark\">
                            <span class=\"head\"></span><span class=\"cont\"></span></a>
                    </div></li>
                <li><p class=\"selector-title\">Sidebar Color</p></li>
                <li class=\"complete\"><div class=\"theme-color sidebar-theme\">
                        <a href=\"#\" data-theme=\"white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"indigo\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                    </div></li>
                <li><p class=\"selector-title\">Header Brand color</p></li>
                <li class=\"theme-option\"><div class=\"theme-color logo-theme\">
                        <a href=\"#\" data-theme=\"logo-white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-indigo\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                    </div></li>
                <li><p class=\"selector-title\">Header color</p></li>
                <li class=\"theme-option\"><div class=\"theme-color header-theme\">
                        <a href=\"#\" data-theme=\"header-white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-indigo\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                    </div></li>
            </ul>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class=\"page-container\">
        <!-- start sidebar menu -->
        <div class=\"sidebar-container\">
            <div class=\"sidemenu-container navbar-collapse collapse fixed-menu\">
                <div id=\"remove-scroll\" class=\"left-sidemenu\">
                    <ul class=\"sidemenu  page-header-fixed slimscroll-style\" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                        <li class=\"sidebar-toggler-wrapper hide\">
                            <div class=\"sidebar-toggler\">
                                <span></span>
                            </div>
                        </li>

                        ";
        // line 398
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 399
            echo "                        <li class=\"sidebar-user-panel\">
                            <div class=\"user-panel\">
                                ";
            // line 401
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 401, $this->source); })()), "user", array()), "photoProfile", array()), "filename", array())) {
                // line 402
                echo "                                <div class=\"pull-left image\">
                                    <img src=\"";
                // line 403
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/user/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 403, $this->source); })()), "user", array()), "photoProfile", array()), "filename", array()))), "html", null, true);
                echo "\" class=\"img-circle user-img-circle\" alt=\"User Image\" />
                                </div>
                            ";
            } else {
                // line 406
                echo "                                <div class=\"pull-left image\">
                                <img src=\"";
                // line 407
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/user/devalere.png"), "html", null, true);
                echo "\" class=\"img-circle user-img-circle\" alt=\"User Image\" />
                                </div>
                                    ";
            }
            // line 410
            echo "                                <div class=\"pull-left info\">
                                    <p> ";
            // line 411
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 411, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                                    <a href=\"#\"><i class=\"fa fa-circle user-online\"></i><span class=\"txtOnline\"> Online</span></a>
                                </div>
                            </div>
                        </li>
                        ";
        }
        // line 417
        echo "                        <li class=\"nav-item start active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <i class=\"material-icons\">dashboard</i>
                                <span class=\"title\">Dashboard</span>
                                <span class=\"selected\"></span>
                                <span class=\"arrow open\"></span>
                            </a>
                            <ul class=\"sub-menu\">

                                ";
        // line 426
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 427
            echo "                                    <li class=\"nav-item active\">
                                        <a href=\"";
            // line 428
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("country_index");
            echo "\" class=\"nav-link \">
                                            <span class=\"title\">Country</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item \">
                                        <a href=\"";
            // line 433
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etablissements_index");
            echo "\" class=\"nav-link \">
                                            <span class=\"title\">School Management</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                ";
        }
        // line 439
        echo "
                                <li class=\"nav-item \">
                                    <a href=\"";
        // line 441
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_new");
        echo "\" class=\"nav-link \">
                                        <span class=\"title\">Upload File</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>

                                <li class=\"nav-item \">
                                    <a href=\"";
        // line 448
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes_index");
        echo "\" class=\"nav-link \">
                                        <span class=\"title\">List  Of Classes</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 456
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event");
        echo "\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">event</i>
                                <span class=\"title\">Event Management</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">person</i>
                                <span class=\"title\">Professors</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 466
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_index");
        echo "\" class=\"nav-link \"> <span class=\"title\">All Professors</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 470
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_new");
        echo "\" class=\"nav-link \"> <span class=\"title\">Add Professor</span>
                                    </a>
                                </li>
                                ";
        // line 473
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 474
            echo "                                <li class=\"nav-item\">
                                    <a href=\"";
            // line 475
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignants_titulaire_index");
            echo "\" class=\"nav-link \"> <span class=\"title\">Titular  Professor </span>
                                    </a>
                                </li>

                                ";
        }
        // line 480
        echo "
                                <li class=\"nav-item\">
                                    <a href=\"professor_profile.html\" class=\"nav-link \"> <span class=\"title\">About Professor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"><i class=\"material-icons\">group</i>
                                <span class=\"title\">Students</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 492
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students_index");
        echo "\" class=\"nav-link \"> <span class=\"title\">All Students</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 496
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students_new");
        echo "\" class=\"nav-link \"> <span class=\"title\">Add Student</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 500
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notes_new");
        echo "\" class=\"nav-link \"> <span class=\"title\">Add Student Note</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">school</i>
                                <span class=\"title\">Courses</span> <span class=\"arrow\"></span>
                                <span class=\"label label-rouded label-menu label-success\">new</span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 512
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matieres_index");
        echo "\" class=\"nav-link \"> <span class=\"title\">All Courses</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 516
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matieres_new");
        echo "\" class=\"nav-link \"> <span class=\"title\">Add Course</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 520
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("niveau_index");
        echo "\" class=\"nav-link \"> <span class=\"title\">All Level</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 524
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("niveau_new");
        echo "\" class=\"nav-link \"> <span class=\"title\">Add Level</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">local_library</i>
                                <span class=\"title\">Disciplined</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 535
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facteurs_disciplinaires_new");
        echo "\" class=\"nav-link \"> <span class=\"title\">Add Disciplinary Note</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"nav-link \"> <span class=\"title\">Disciplinary Note</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">business</i>
                                <span class=\"title\">Departments</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 551
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_department_index");
        echo "\" class=\"nav-link \"> <span class=\"title\">All Departments</span>
                                    </a>
                                </li>
                                ";
        // line 554
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 555
            echo "                                <li class=\"nav-item\">
                                    <a href=\"";
            // line 556
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_department_new");
            echo "\" class=\"nav-link \"> <span class=\"title\">Add Department</span>
                                    </a>
                                </li>
                                ";
        }
        // line 560
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">face</i>
                                <span class=\"title\">Staff</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 568
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("staff_index");
        echo "\" class=\"nav-link \"> <span class=\"title\">All Staff</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 572
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("staff_new");
        echo "\" class=\"nav-link \"> <span class=\"title\">Add Staff</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">airline_seat_individual_suite</i>
                                <span class=\"title\">Holiday</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"all_holidays.html\" class=\"nav-link \"> <span class=\"title\">All Holiday</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_holiday.html\" class=\"nav-link \"> <span class=\"title\">Add Holiday</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_holiday_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">Add Holiday Bootstrap</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_holiday.html\" class=\"nav-link \"> <span class=\"title\">Edit Holiday</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"##\" class=\"nav-link \"> <span class=\"title\">Holiday Calendar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">monetization_on</i>
                                <span class=\"title\">Extra school event</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"###\" class=\"nav-link \"> <span class=\"title\">Fees Collection</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"##\" class=\"nav-link \"> <span class=\"title\">Add Fees </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"##\" class=\"nav-link \"> <span class=\"title\">Add Fees Bootstrap</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"##\" class=\"nav-link \"> <span class=\"title\">Fee Receipt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <i class=\"material-icons\">email</i>
                                <span class=\"title\">About Us</span>
                                <span class=\"arrow\"></span>
                                <span class=\"label label-rouded label-menu label-danger\">new</span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"email_inbox.html\" class=\"nav-link \">
                                        <span class=\"title\">Inbox</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"email_view.html\" class=\"nav-link \">
                                        <span class=\"title\">View Mail</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"email_compose.html\" class=\"nav-link \">
                                        <span class=\"title\">Compose Mail</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->
        <!-- start page content -->


                ";
        // line 662
        $this->displayBlock('body', $context, $blocks);
        // line 683
        echo "

<!-- end page content -->
<!-- start chat sidebar -->
<div class=\"chat-sidebar-container\" data-close-on-body-click=\"false\">
    <div class=\"chat-sidebar\">
        <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\">
                <a href=\"#quick_sidebar_tab_1\" class=\"nav-link active tab-icon\"  data-toggle=\"tab\"> <i class=\"material-icons\">chat</i>Chat
                    <span class=\"badge badge-danger\">4</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#quick_sidebar_tab_3\" class=\"nav-link tab-icon\"  data-toggle=\"tab\"> <i class=\"material-icons\">settings</i> Settings
                </a>
            </li>
        </ul>
        <div class=\"tab-content\">
            <!-- Start Doctor Chat -->
            <div class=\"tab-pane active chat-sidebar-chat in active show\" role=\"tabpanel\" id=\"quick_sidebar_tab_1\">
                <div class=\"chat-sidebar-list\">
                    <div class=\"chat-sidebar-chat-users slimscroll-style\" data-rail-color=\"#ddd\" data-wrapper-class=\"chat-sidebar-list\">
                        <div class=\"chat-header\"><h5 class=\"list-heading\">Online</h5></div>
                        <ul class=\"media-list list-items\">
                            <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof3.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"online dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">John Deo</h5>
                                    <div class=\"media-heading-sub\">Spine Surgeon</div>
                                </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-status\">
                                    <span class=\"badge badge-success\">5</span>
                                </div> <img class=\"media-object\" src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof1.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"busy dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Rajesh</h5>
                                    <div class=\"media-heading-sub\">Director</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof5.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"away dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Jacob Ryan</h5>
                                    <div class=\"media-heading-sub\">Ortho Surgeon</div>
                                </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-status\">
                                    <span class=\"badge badge-danger\">8</span>
                                </div> <img class=\"media-object\" src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof4.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"online dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Kehn Anderson</h5>
                                    <div class=\"media-heading-sub\">CEO</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof2.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"busy dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Sarah Smith</h5>
                                    <div class=\"media-heading-sub\">Anaesthetics</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof7.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"online dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Vlad Cardella</h5>
                                    <div class=\"media-heading-sub\">Cardiologist</div>
                                </div>
                            </li>
                        </ul>
                        <div class=\"chat-header\"><h5 class=\"list-heading\">Offline</h5></div>
                        <ul class=\"media-list list-items\">
                            <li class=\"media\">
                                <div class=\"media-status\">
                                    <span class=\"badge badge-warning\">4</span>
                                </div> <img class=\"media-object\" src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof6.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"offline dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Jennifer Maklen</h5>
                                    <div class=\"media-heading-sub\">Nurse</div>
                                    <div class=\"media-heading-small\">Last seen 01:20 AM</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof8.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"offline dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Lina Smith</h5>
                                    <div class=\"media-heading-sub\">Ortho Surgeon</div>
                                    <div class=\"media-heading-small\">Last seen 11:14 PM</div>
                                </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-status\">
                                    <span class=\"badge badge-success\">9</span>
                                </div> <img class=\"media-object\" src=\"";
        // line 780
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof9.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"offline dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Jeff Adam</h5>
                                    <div class=\"media-heading-sub\">Compounder</div>
                                    <div class=\"media-heading-small\">Last seen 3:31 PM</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof10.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"offline dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Anjelina Cardella</h5>
                                    <div class=\"media-heading-sub\">Physiotherapist</div>
                                    <div class=\"media-heading-small\">Last seen 7:45 PM</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"chat-sidebar-item\">
                    <div class=\"chat-sidebar-chat-user\">
                        <div class=\"page-quick-sidemenu\">
                            <a href=\"javascript:;\" class=\"chat-sidebar-back-to-list\">
                                <i class=\"fa fa-angle-double-left\"></i>Back
                            </a>
                        </div>
                        <div class=\"chat-sidebar-chat-user-messages\">
                            <div class=\"post out\">
                                <img class=\"avatar\" alt=\"\" src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/prof/devalere.png"), "html", null, true);
        echo "\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">devalere</a> <span class=\"datetime\">9:10</span>
                                    <span class=\"body-out\"> could you send me menu icons ? </span>
                                </div>
                            </div>
                            <div class=\"post in\">
                                <img class=\"avatar\" alt=\"\" src=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof5.jpg"), "html", null, true);
        echo "\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">Jacob Ryan</a> <span class=\"datetime\">9:10</span>
                                    <span class=\"body\"> please give me 10 minutes. </span>
                                </div>
                            </div>
                            <div class=\"post out\">
                                <img class=\"avatar\" alt=\"\" src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/prof/devalere.png"), "html", null, true);
        echo "\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">devalere</a> <span class=\"datetime\">9:11</span>
                                    <span class=\"body-out\"> ok fine :) </span>
                                </div>
                            </div>
                            <div class=\"post in\">
                                <img class=\"avatar\" alt=\"\" src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof5.jpg"), "html", null, true);
        echo "\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">Jacob Ryan</a> <span class=\"datetime\">9:22</span>
                                    <span class=\"body\">Sorry for
\t\t\t\t\t\t\t\t\t\t\t\t\tthe delay. i sent mail to you. let me know if it is ok or not.</span>
                                </div>
                            </div>
                            <div class=\"post out\">
                                <img class=\"avatar\" alt=\"\" src=\"";
        // line 837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/prof/devalere.png"), "html", null, true);
        echo "\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">devalere</a> <span class=\"datetime\">9:26</span>
                                    <span class=\"body-out\"> it is perfect! :) </span>
                                </div>
                            </div>
                            <div class=\"post out\">
                                <img class=\"avatar\" alt=\"\" src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/prof/devalere.png"), "html", null, true);
        echo "\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">devalere</a> <span class=\"datetime\">9:26</span>
                                    <span class=\"body-out\"> Great! Thanks. </span>
                                </div>
                            </div>
                            <div class=\"post in\">
                                <img class=\"avatar\" alt=\"\" src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prof/prof5.jpg"), "html", null, true);
        echo "\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">Jacob Ryan</a> <span class=\"datetime\">9:27</span>
                                    <span class=\"body\"> it is my pleasure :) </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat-sidebar-chat-user-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                <div class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn deepPink-bgcolor\">
                                        <i class=\"fa fa-arrow-right\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Doctor Chat -->
            <!-- Start Setting Panel -->
            <div class=\"tab-pane chat-sidebar-settings\" role=\"tabpanel\" id=\"quick_sidebar_tab_3\">
                <div class=\"chat-sidebar-settings-list slimscroll-style\">
                    <div class=\"chat-header\"><h5 class=\"list-heading\">Layout Settings</h5></div>
                    <div class=\"chatpane inner-content \">
                        <div class=\"settings-list\">
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Sidebar Position</div>
                                <div class=\"setting-set\">
                                    <select class=\"sidebar-pos-option form-control input-inline input-sm input-small \">
                                        <option value=\"left\" selected=\"selected\">Left</option>
                                        <option value=\"right\">Right</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Header</div>
                                <div class=\"setting-set\">
                                    <select class=\"page-header-option form-control input-inline input-sm input-small \">
                                        <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                        <option value=\"default\">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Sidebar Menu </div>
                                <div class=\"setting-set\">
                                    <select class=\"sidebar-menu-option form-control input-inline input-sm input-small \">
                                        <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                        <option value=\"hover\">Hover</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Footer</div>
                                <div class=\"setting-set\">
                                    <select class=\"page-footer-option form-control input-inline input-sm input-small \">
                                        <option value=\"fixed\">Fixed</option>
                                        <option value=\"default\" selected=\"selected\">Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat-header\"><h5 class=\"list-heading\">Account Settings</h5></div>
                        <div class=\"settings-list\">
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Notifications</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-1\">
                                            <input type = \"checkbox\" id = \"switch-1\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Show Online</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-7\">
                                            <input type = \"checkbox\" id = \"switch-7\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Status</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-2\">
                                            <input type = \"checkbox\" id = \"switch-2\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">2 Steps Verification</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-3\">
                                            <input type = \"checkbox\" id = \"switch-3\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat-header\"><h5 class=\"list-heading\">General Settings</h5></div>
                        <div class=\"settings-list\">
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Location</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-4\">
                                            <input type = \"checkbox\" id = \"switch-4\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Save Histry</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-5\">
                                            <input type = \"checkbox\" id = \"switch-5\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Auto Updates</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-6\">
                                            <input type = \"checkbox\" id = \"switch-6\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end chat sidebar -->
</div>
<!-- end page container -->
<!-- start footer -->
<div class=\"page-footer\">
    <div class=\"page-footer-inner\">&copy; Copyright ";
        // line 1016
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " RapMis By
        <a href=\"https://##########.com/\" target=\"_top\" class=\"makerCss\">HABITECH SOLUTIONS <strong>&</strong> SERVICES</a>
    </div>
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>
<!-- end footer -->
</div>
<!-- start js include path -->

";
        // line 1030
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1031
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/popper/popper.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1032
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-blockui/jquery.blockui.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1033
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1034
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\" ></script>
<!-- bootstrap -->
<script src=\"";
        // line 1036
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1037
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1038
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1039
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/sparkline/sparkline-data.js"), "html", null, true);
        echo "\" ></script>
<!-- Common js-->
<script src=\"";
        // line 1041
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1042
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/layout.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1043
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-color.js"), "html", null, true);
        echo "\" ></script>

<!-- material -->
<script src=\"";
        // line 1046
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/material/material.min.js"), "html", null, true);
        echo "\"></script>
<!-- chart js -->
<script src=\"";
        // line 1048
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1049
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/chart-js/utils.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1050
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/chart/chartjs/home-data.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1051
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/chart/chartjs/home-data2.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1052
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/chart/chartjs/home-data3.js"), "html", null, true);
        echo "\" ></script>
<!-- data tables -->
<script src=\"";
        // line 1054
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1055
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1056
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/table/table_data.js"), "html", null, true);
        echo "\" ></script>
<!-- dropzone -->
<link href=\"";
        // line 1058
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/dropzone/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<!-- Date Time item CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 1060
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css"), "html", null, true);
        echo "\" />
<!-- calendar -->
<script src=\"";
        // line 1062
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/moment/moment.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1063
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1064
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/calendar/calendar.min.js"), "html", null, true);
        echo "\" ></script>
<!-- summernote -->
<script src=\"";
        // line 1066
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/summernote/summernote.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/summernote/summernote-data.js"), "html", null, true);
        echo "\" ></script>
<!-- owl carousel -->
<script src=\"";
        // line 1069
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1070
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/owl-carousel/owl_data.js"), "html", null, true);
        echo "\"></script>
<!-- end js include path -->

";
        // line 1073
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1074
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        echo "        ";
        // line 41
        echo "
        <style>
            #owl-demo .item img {
                display: block;
                width: 100%;
                height: auto;
            }
            #owl-demo2 .item {
                margin: 3px;
            }
            .jumbotron {
                max-width: 700px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 662
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 663
        echo "                    <div class=\"container theme-showcase\" role=\"main\">
                    <div class=\"jumbotron\">
                        ";
        // line 665
        $this->displayBlock('name', $context, $blocks);
        // line 667
        echo "
                        ";
        // line 668
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 668, $this->source); })()), "request", array()), "hasPreviousSession", array())) {
            // line 669
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 669, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 670
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 671
                    echo "                                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo " alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                        ";
                    // line 672
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 675
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 676
            echo "                        ";
        }
        // line 677
        echo "
                        ";
        // line 678
        $this->displayBlock('content', $context, $blocks);
        // line 680
        echo "                    </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 665
    public function block_name($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        // line 666
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 678
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 679
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1073
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1594 => 1073,  1584 => 679,  1575 => 678,  1565 => 666,  1556 => 665,  1544 => 680,  1542 => 678,  1539 => 677,  1536 => 676,  1530 => 675,  1521 => 672,  1514 => 671,  1509 => 670,  1504 => 669,  1502 => 668,  1499 => 667,  1497 => 665,  1493 => 663,  1484 => 662,  1458 => 41,  1456 => 39,  1447 => 38,  1434 => 1074,  1432 => 1073,  1426 => 1070,  1422 => 1069,  1417 => 1067,  1413 => 1066,  1408 => 1064,  1404 => 1063,  1400 => 1062,  1395 => 1060,  1390 => 1058,  1385 => 1056,  1381 => 1055,  1377 => 1054,  1372 => 1052,  1368 => 1051,  1364 => 1050,  1360 => 1049,  1356 => 1048,  1351 => 1046,  1345 => 1043,  1341 => 1042,  1337 => 1041,  1332 => 1039,  1328 => 1038,  1324 => 1037,  1320 => 1036,  1315 => 1034,  1311 => 1033,  1307 => 1032,  1303 => 1031,  1298 => 1030,  1284 => 1016,  1116 => 851,  1106 => 844,  1096 => 837,  1085 => 829,  1075 => 822,  1065 => 815,  1055 => 808,  1032 => 788,  1021 => 780,  1007 => 769,  996 => 761,  980 => 748,  970 => 741,  960 => 734,  947 => 724,  937 => 717,  924 => 707,  898 => 683,  896 => 662,  803 => 572,  796 => 568,  786 => 560,  779 => 556,  776 => 555,  774 => 554,  768 => 551,  749 => 535,  735 => 524,  728 => 520,  721 => 516,  714 => 512,  699 => 500,  692 => 496,  685 => 492,  671 => 480,  663 => 475,  660 => 474,  658 => 473,  652 => 470,  645 => 466,  632 => 456,  621 => 448,  611 => 441,  607 => 439,  598 => 433,  590 => 428,  587 => 427,  585 => 426,  574 => 417,  565 => 411,  562 => 410,  556 => 407,  553 => 406,  547 => 403,  544 => 402,  542 => 401,  538 => 399,  536 => 398,  460 => 324,  452 => 319,  449 => 318,  441 => 313,  437 => 312,  414 => 291,  406 => 289,  399 => 285,  394 => 284,  392 => 283,  385 => 279,  381 => 278,  351 => 251,  337 => 240,  323 => 229,  309 => 218,  295 => 207,  211 => 125,  209 => 124,  195 => 113,  189 => 110,  181 => 105,  172 => 99,  137 => 67,  126 => 58,  124 => 38,  120 => 37,  116 => 36,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  90 => 28,  85 => 26,  80 => 24,  76 => 23,  71 => 21,  67 => 20,  62 => 18,  57 => 16,  53 => 15,  49 => 14,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta name=\"description\" content=\"Responsive Admin Template\" />
    <meta name=\"author\" content=\"RapMis\" />
    <title>RapMis | HABITECH SOLUTIONS & SERVICES</title>
    <!-- google font -->
    <!-- icons -->
    <link href=\"{{ asset('assets/fonts/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/fonts/material-design-icons/material-icon.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- full calendar -->
    <link href=\"{{ asset('assets/plugins/fullcalendar/fullcalendar.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!--bootstrap -->
    <link href=\"{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/plugins/summernote/summernote.css') }}\" rel=\"stylesheet\">
    <!-- Material Design Lite CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/material/material.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/material_style.css') }}\">
    <!-- inbox style -->
    <link href=\"{{ asset('assets/css/pages/inbox.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- data tables -->
    <link href=\"{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Theme Styles -->
    <link href=\"{{ asset('assets/css/theme/light/theme_style.css') }}\" rel=\"stylesheet\" id=\"rt_style_components\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/plugins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/theme/light/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/responsive.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/theme/light/theme-color.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Owl Carousel Assets -->
    <link href=\"{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/owl-carousel/owl.theme.css') }}\" rel=\"stylesheet\">
    {% block stylesheets %}
        {#<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
           <link rel=\"stylesheet\" href=\"{{ asset('ajax.googleapis.com/ajax/libs/bootflat.min.css') }}\">#}

        <style>
            #owl-demo .item img {
                display: block;
                width: 100%;
                height: auto;
            }
            #owl-demo2 .item {
                margin: 3px;
            }
            .jumbotron {
                max-width: 700px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    {% endblock %}
</head>
<!-- END HEAD -->
<body class=\"page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo\">
<div class=\"page-wrapper\">
    <!-- start header -->
    <div class=\"page-header navbar navbar-fixed-top\">
        <div class=\"page-header-inner \">
            <!-- logo start -->
            <div class=\"page-logo\">
                <a href=\"{{ path('homepage') }}\">
                    <span class=\"logo-icon material-icons fa-rotate-45\">school</span>
                    <span class=\"logo-default\" >RAPMIS</span> </a>
            </div>
            <!-- logo end -->
            <ul class=\"nav navbar-nav navbar-left in\">
                <li><a href=\"#\" class=\"menu-toggler sidebar-toggler\"><i class=\"icon-menu\"></i></a></li>
            </ul>
            <form class=\"search-form-opened\" action=\"#\" method=\"GET\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"query\">

                    <span class=\"input-group-btn\">
                          <a href=\"javascript:;\" class=\"btn submit\">
                             <i class=\"icon-magnifier\"></i>
                           </a>
                        </span>
                </div>
            </form>

            <!-- start mobile menu -->
            <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->


            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li><a href=\"javascript:;\" class=\"fullscreen-btn\"><i class=\"fa fa-arrows-alt\"></i></a></li>
                    <!-- start language menu -->
                    <li><a href=\"{{ path('homepage') }}\" class=\"fullscreen-btn\"><i class=\"\">
                            </i>HABITECH SOLUTIONS <strong>&</strong> SERVICES</a></li>

                    <li class=\"dropdown language-switch\">

                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img src=\"{{ asset('assets/img/flags/gb.png') }}\" class=\"position-left\" alt=\"\"> English <span class=\"fa fa-angle-down\"></span>
                        </a>

                        <ul class=\"dropdown-menu\">
                            <li>
                                <a class=\"deutsch\"><img src=\"{{ asset('assets/img/flags/de.png') }}\" alt=\"\"> Français</a>
                            </li>
                            <li>
                                <a class=\"english\"><img src=\"{{ asset('assets/img/flags/gb.png') }}\" alt=\"\"> English</a>
                            </li>


                        </ul>
                    </li>



           <!-- end language menu -->
                    <!-- start notification dropdown -->
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"badge headerBadgeColor1\"> 6 </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3><span class=\"bold\">Notifications</span></h3>
                                <span class=\"notification-label purple-bgcolor\">New 6</span>
                            </li>
                            <li>
                                <ul class=\"dropdown-menu-list small-slimscroll-style\" data-handle-color=\"#637283\">
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">just now</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle deepPink-bgcolor\"><i class=\"fa fa-check\"></i></span> Congratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">3 mins</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle purple-bgcolor\"><i class=\"fa fa-user o\"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">7 mins</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle blue-bgcolor\"><i class=\"fa fa-comments-o\"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">12 mins</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle pink\"><i class=\"fa fa-heart\"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">15 mins</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle yellow\"><i class=\"fa fa-warning\"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">10 hrs</span>
                                            <span class=\"details\">
                                                <span class=\"notification-icon circle red\"><i class=\"fa fa-times\"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"dropdown-menu-footer\">
                                    <a href=\"javascript:void(0)\"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->

                    <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"badge headerBadgeColor2\"> 2 </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3><span class=\"bold\">Messages</span></h3>
                                <span class=\"notification-label cyan-bgcolor\">New 2</span>
                            </li>
                            <li>
                                <ul class=\"dropdown-menu-list small-slimscroll-style\" data-handle-color=\"#637283\">
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"{{ asset('assets/img/prof/prof2.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> Sarah Smith </span>
                                                \t<span class=\"time\">Just Now </span>
                                                </span>
                                            <span class=\"message\"> Jatin I found you on LinkedIn... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"{{ asset('assets/img/prof/prof3.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> John Deo </span>
                                                \t<span class=\"time\">16 mins </span>
                                                </span>
                                            <span class=\"message\"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"{{ asset('assets/img/prof/prof1.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> Rajesh </span>
                                                \t<span class=\"time\">2 hrs </span>
                                                </span>
                                            <span class=\"message\"> pls take a print of attachments. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"{{ asset('assets/img/prof/prof8.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> Lina Smith </span>
                                                \t<span class=\"time\">40 mins </span>
                                                </span>
                                            <span class=\"message\"> Apply for Ortho Surgeon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                                <span class=\"photo\">
                                                \t<img src=\"{{ asset('assets/img/prof/prof5.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                            <span class=\"subject\">
                                                \t<span class=\"from\"> Jacob Ryan </span>
                                                \t<span class=\"time\">46 mins </span>
                                                </span>
                                            <span class=\"message\"> Request for leave application. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"dropdown-menu-footer\">
                                    <a href=\"#\"> All Messages </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->








                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <img alt=\"\" class=\"img-circle \" src=\"{{ asset( 'uploads/user/'~ app.user.photoProfile.filename) }}\" />
                            <span class=\"username username-hide-on-mobile\"> {{ app.user.username }} </span>
                            <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <li><a href=\"{{ path('fos_user_profile_edit') }}\">
                                        Logged in as {{ app.user.username }}
                                    </a>
                                </li>
                            {% else %}
                                <li><a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>
                            {% endif %}
                            <li>
                                <a href=\"user_profile.html\">
                                    <i class=\"icon-user\"></i> Profile </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-settings\"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-directions\"></i> Help
                                </a>
                            </li>
                            <li class=\"divider\"> </li>
                            <li>
                                <a href=\"lock_screen.html\">
                                    <i class=\"icon-lock\"></i> Lock
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    <i class=\"icon-logout\"></i> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }} </a>
                            </li>
                        </ul>
                    </li>
                    {% else %}
                        <li class=\"dropdown dropdown-user\">
                            <a href=\"{{ path('fos_user_security_login') }}\" class=\"hLink dropdown-toggle\"
                               data-hover=\"dropdown\" data-close-others=\"true\">Connexion</a>
                        </li>

                    {% endif %}

                    <!-- end manage user dropdown -->
                    <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                        <a id=\"headerSettingButton\" class=\"mdl-button mdl-js-button mdl-button--icon pull-right\" data-upgraded=\",MaterialButton\">
                            <i class=\"material-icons\">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>



    <!-- end header -->
    <!-- start color quick setting -->
    <div class=\"quick-setting-main\">
        <button class=\"control-sidebar-btn btn\" data-toggle=\"control-sidebar\"><i class=\"fa fa-cog fa-spin\"></i></button>
        <div class=\"quick-setting display-none\">
            <ul id=\"themecolors\" >
                <li><p class=\"selector-title\">Main Layouts</p></li>
                <li class=\"complete\"><div class=\"theme-color layout-theme\">
                        <a href=\"#\" data-theme=\"light\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"dark\">
                            <span class=\"head\"></span><span class=\"cont\"></span></a>
                    </div></li>
                <li><p class=\"selector-title\">Sidebar Color</p></li>
                <li class=\"complete\"><div class=\"theme-color sidebar-theme\">
                        <a href=\"#\" data-theme=\"white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"indigo\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                    </div></li>
                <li><p class=\"selector-title\">Header Brand color</p></li>
                <li class=\"theme-option\"><div class=\"theme-color logo-theme\">
                        <a href=\"#\" data-theme=\"logo-white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-indigo\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"logo-red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                    </div></li>
                <li><p class=\"selector-title\">Header color</p></li>
                <li class=\"theme-option\"><div class=\"theme-color header-theme\">
                        <a href=\"#\" data-theme=\"header-white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-indigo\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                        <a href=\"#\" data-theme=\"header-red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                    </div></li>
            </ul>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class=\"page-container\">
        <!-- start sidebar menu -->
        <div class=\"sidebar-container\">
            <div class=\"sidemenu-container navbar-collapse collapse fixed-menu\">
                <div id=\"remove-scroll\" class=\"left-sidemenu\">
                    <ul class=\"sidemenu  page-header-fixed slimscroll-style\" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                        <li class=\"sidebar-toggler-wrapper hide\">
                            <div class=\"sidebar-toggler\">
                                <span></span>
                            </div>
                        </li>

                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"sidebar-user-panel\">
                            <div class=\"user-panel\">
                                {% if app.user.photoProfile.filename %}
                                <div class=\"pull-left image\">
                                    <img src=\"{{ asset( 'uploads/user/'~ app.user.photoProfile.filename) }}\" class=\"img-circle user-img-circle\" alt=\"User Image\" />
                                </div>
                            {% else %}
                                <div class=\"pull-left image\">
                                <img src=\"{{ asset( 'uploads/user/devalere.png' ) }}\" class=\"img-circle user-img-circle\" alt=\"User Image\" />
                                </div>
                                    {% endif %}
                                <div class=\"pull-left info\">
                                    <p> {{ app.user.username }}</p>
                                    <a href=\"#\"><i class=\"fa fa-circle user-online\"></i><span class=\"txtOnline\"> Online</span></a>
                                </div>
                            </div>
                        </li>
                        {% endif %}
                        <li class=\"nav-item start active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <i class=\"material-icons\">dashboard</i>
                                <span class=\"title\">Dashboard</span>
                                <span class=\"selected\"></span>
                                <span class=\"arrow open\"></span>
                            </a>
                            <ul class=\"sub-menu\">

                                {% if(is_granted('ROLE_ADMIN')) %}
                                    <li class=\"nav-item active\">
                                        <a href=\"{{ path('country_index') }}\" class=\"nav-link \">
                                            <span class=\"title\">Country</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item \">
                                        <a href=\"{{ path('etablissements_index') }}\" class=\"nav-link \">
                                            <span class=\"title\">School Management</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                {% endif %}

                                <li class=\"nav-item \">
                                    <a href=\"{{ path('media_new') }}\" class=\"nav-link \">
                                        <span class=\"title\">Upload File</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>

                                <li class=\"nav-item \">
                                    <a href=\"{{ path('classes_index') }}\" class=\"nav-link \">
                                        <span class=\"title\">List  Of Classes</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('event') }}\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">event</i>
                                <span class=\"title\">Event Management</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">person</i>
                                <span class=\"title\">Professors</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('teacher_index') }}\" class=\"nav-link \"> <span class=\"title\">All Professors</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('teacher_new') }}\" class=\"nav-link \"> <span class=\"title\">Add Professor</span>
                                    </a>
                                </li>
                                {% if(is_granted('ROLE_ADMIN')) %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('enseignants_titulaire_index') }}\" class=\"nav-link \"> <span class=\"title\">Titular  Professor </span>
                                    </a>
                                </li>

                                {% endif %}

                                <li class=\"nav-item\">
                                    <a href=\"professor_profile.html\" class=\"nav-link \"> <span class=\"title\">About Professor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"><i class=\"material-icons\">group</i>
                                <span class=\"title\">Students</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('students_index') }}\" class=\"nav-link \"> <span class=\"title\">All Students</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('students_new') }}\" class=\"nav-link \"> <span class=\"title\">Add Student</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('notes_new') }}\" class=\"nav-link \"> <span class=\"title\">Add Student Note</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">school</i>
                                <span class=\"title\">Courses</span> <span class=\"arrow\"></span>
                                <span class=\"label label-rouded label-menu label-success\">new</span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('matieres_index') }}\" class=\"nav-link \"> <span class=\"title\">All Courses</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('matieres_new') }}\" class=\"nav-link \"> <span class=\"title\">Add Course</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('niveau_index') }}\" class=\"nav-link \"> <span class=\"title\">All Level</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('niveau_new') }}\" class=\"nav-link \"> <span class=\"title\">Add Level</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">local_library</i>
                                <span class=\"title\">Disciplined</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('facteurs_disciplinaires_new') }}\" class=\"nav-link \"> <span class=\"title\">Add Disciplinary Note</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"nav-link \"> <span class=\"title\">Disciplinary Note</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">business</i>
                                <span class=\"title\">Departments</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('chef_department_index') }}\" class=\"nav-link \"> <span class=\"title\">All Departments</span>
                                    </a>
                                </li>
                                {% if(is_granted('ROLE_ADMIN')) %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('chef_department_new') }}\" class=\"nav-link \"> <span class=\"title\">Add Department</span>
                                    </a>
                                </li>
                                {% endif %}
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">face</i>
                                <span class=\"title\">Staff</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('staff_index') }}\" class=\"nav-link \"> <span class=\"title\">All Staff</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('staff_new') }}\" class=\"nav-link \"> <span class=\"title\">Add Staff</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">airline_seat_individual_suite</i>
                                <span class=\"title\">Holiday</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"all_holidays.html\" class=\"nav-link \"> <span class=\"title\">All Holiday</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_holiday.html\" class=\"nav-link \"> <span class=\"title\">Add Holiday</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_holiday_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">Add Holiday Bootstrap</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_holiday.html\" class=\"nav-link \"> <span class=\"title\">Edit Holiday</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"##\" class=\"nav-link \"> <span class=\"title\">Holiday Calendar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">monetization_on</i>
                                <span class=\"title\">Extra school event</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"###\" class=\"nav-link \"> <span class=\"title\">Fees Collection</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"##\" class=\"nav-link \"> <span class=\"title\">Add Fees </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"##\" class=\"nav-link \"> <span class=\"title\">Add Fees Bootstrap</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"##\" class=\"nav-link \"> <span class=\"title\">Fee Receipt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <i class=\"material-icons\">email</i>
                                <span class=\"title\">About Us</span>
                                <span class=\"arrow\"></span>
                                <span class=\"label label-rouded label-menu label-danger\">new</span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"email_inbox.html\" class=\"nav-link \">
                                        <span class=\"title\">Inbox</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"email_view.html\" class=\"nav-link \">
                                        <span class=\"title\">View Mail</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"email_compose.html\" class=\"nav-link \">
                                        <span class=\"title\">Compose Mail</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->
        <!-- start page content -->


                {% block body %}
                    <div class=\"container theme-showcase\" role=\"main\">
                    <div class=\"jumbotron\">
                        {% block name %}
                        {% endblock name %}

                        {% if app.request.hasPreviousSession %}
                            {% for type, messages in app.session.flashbag.all() %}
                                {% for message in messages %}
                                    <div class=\"flash-{{ type }} alert-{{ type }}\">
                                        {{ message }}
                                    </div>
                                {% endfor %}
                            {% endfor %}
                        {% endif %}

                        {% block content %}
                        {% endblock content %}
                    </div>
                    </div>
                {% endblock %}


<!-- end page content -->
<!-- start chat sidebar -->
<div class=\"chat-sidebar-container\" data-close-on-body-click=\"false\">
    <div class=\"chat-sidebar\">
        <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\">
                <a href=\"#quick_sidebar_tab_1\" class=\"nav-link active tab-icon\"  data-toggle=\"tab\"> <i class=\"material-icons\">chat</i>Chat
                    <span class=\"badge badge-danger\">4</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#quick_sidebar_tab_3\" class=\"nav-link tab-icon\"  data-toggle=\"tab\"> <i class=\"material-icons\">settings</i> Settings
                </a>
            </li>
        </ul>
        <div class=\"tab-content\">
            <!-- Start Doctor Chat -->
            <div class=\"tab-pane active chat-sidebar-chat in active show\" role=\"tabpanel\" id=\"quick_sidebar_tab_1\">
                <div class=\"chat-sidebar-list\">
                    <div class=\"chat-sidebar-chat-users slimscroll-style\" data-rail-color=\"#ddd\" data-wrapper-class=\"chat-sidebar-list\">
                        <div class=\"chat-header\"><h5 class=\"list-heading\">Online</h5></div>
                        <ul class=\"media-list list-items\">
                            <li class=\"media\"><img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof3.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"online dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">John Deo</h5>
                                    <div class=\"media-heading-sub\">Spine Surgeon</div>
                                </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-status\">
                                    <span class=\"badge badge-success\">5</span>
                                </div> <img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof1.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"busy dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Rajesh</h5>
                                    <div class=\"media-heading-sub\">Director</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof5.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"away dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Jacob Ryan</h5>
                                    <div class=\"media-heading-sub\">Ortho Surgeon</div>
                                </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-status\">
                                    <span class=\"badge badge-danger\">8</span>
                                </div> <img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof4.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"online dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Kehn Anderson</h5>
                                    <div class=\"media-heading-sub\">CEO</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof2.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"busy dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Sarah Smith</h5>
                                    <div class=\"media-heading-sub\">Anaesthetics</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof7.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"online dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Vlad Cardella</h5>
                                    <div class=\"media-heading-sub\">Cardiologist</div>
                                </div>
                            </li>
                        </ul>
                        <div class=\"chat-header\"><h5 class=\"list-heading\">Offline</h5></div>
                        <ul class=\"media-list list-items\">
                            <li class=\"media\">
                                <div class=\"media-status\">
                                    <span class=\"badge badge-warning\">4</span>
                                </div> <img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof6.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"offline dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Jennifer Maklen</h5>
                                    <div class=\"media-heading-sub\">Nurse</div>
                                    <div class=\"media-heading-small\">Last seen 01:20 AM</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof8.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"offline dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Lina Smith</h5>
                                    <div class=\"media-heading-sub\">Ortho Surgeon</div>
                                    <div class=\"media-heading-small\">Last seen 11:14 PM</div>
                                </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-status\">
                                    <span class=\"badge badge-success\">9</span>
                                </div> <img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof9.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"offline dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Jeff Adam</h5>
                                    <div class=\"media-heading-sub\">Compounder</div>
                                    <div class=\"media-heading-small\">Last seen 3:31 PM</div>
                                </div>
                            </li>
                            <li class=\"media\"><img class=\"media-object\" src=\"{{ asset('assets/img/prof/prof10.jpg') }}\" width=\"35\" height=\"35\" alt=\"...\">
                                <i class=\"offline dot\"></i>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Anjelina Cardella</h5>
                                    <div class=\"media-heading-sub\">Physiotherapist</div>
                                    <div class=\"media-heading-small\">Last seen 7:45 PM</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"chat-sidebar-item\">
                    <div class=\"chat-sidebar-chat-user\">
                        <div class=\"page-quick-sidemenu\">
                            <a href=\"javascript:;\" class=\"chat-sidebar-back-to-list\">
                                <i class=\"fa fa-angle-double-left\"></i>Back
                            </a>
                        </div>
                        <div class=\"chat-sidebar-chat-user-messages\">
                            <div class=\"post out\">
                                <img class=\"avatar\" alt=\"\" src=\"{{ asset('uploads/prof/devalere.png') }}\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">devalere</a> <span class=\"datetime\">9:10</span>
                                    <span class=\"body-out\"> could you send me menu icons ? </span>
                                </div>
                            </div>
                            <div class=\"post in\">
                                <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/img/prof/prof5.jpg') }}\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">Jacob Ryan</a> <span class=\"datetime\">9:10</span>
                                    <span class=\"body\"> please give me 10 minutes. </span>
                                </div>
                            </div>
                            <div class=\"post out\">
                                <img class=\"avatar\" alt=\"\" src=\"{{ asset('uploads/prof/devalere.png') }}\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">devalere</a> <span class=\"datetime\">9:11</span>
                                    <span class=\"body-out\"> ok fine :) </span>
                                </div>
                            </div>
                            <div class=\"post in\">
                                <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/img/prof/prof5.jpg') }}\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">Jacob Ryan</a> <span class=\"datetime\">9:22</span>
                                    <span class=\"body\">Sorry for
\t\t\t\t\t\t\t\t\t\t\t\t\tthe delay. i sent mail to you. let me know if it is ok or not.</span>
                                </div>
                            </div>
                            <div class=\"post out\">
                                <img class=\"avatar\" alt=\"\" src=\"{{ asset('uploads/prof/devalere.png') }}\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">devalere</a> <span class=\"datetime\">9:26</span>
                                    <span class=\"body-out\"> it is perfect! :) </span>
                                </div>
                            </div>
                            <div class=\"post out\">
                                <img class=\"avatar\" alt=\"\" src=\"{{ asset('uploads/prof/devalere.png') }}\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">devalere</a> <span class=\"datetime\">9:26</span>
                                    <span class=\"body-out\"> Great! Thanks. </span>
                                </div>
                            </div>
                            <div class=\"post in\">
                                <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/img/prof/prof5.jpg') }}\" />
                                <div class=\"message\">
                                    <span class=\"arrow\"></span> <a href=\"javascript:;\" class=\"name\">Jacob Ryan</a> <span class=\"datetime\">9:27</span>
                                    <span class=\"body\"> it is my pleasure :) </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat-sidebar-chat-user-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                <div class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn deepPink-bgcolor\">
                                        <i class=\"fa fa-arrow-right\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Doctor Chat -->
            <!-- Start Setting Panel -->
            <div class=\"tab-pane chat-sidebar-settings\" role=\"tabpanel\" id=\"quick_sidebar_tab_3\">
                <div class=\"chat-sidebar-settings-list slimscroll-style\">
                    <div class=\"chat-header\"><h5 class=\"list-heading\">Layout Settings</h5></div>
                    <div class=\"chatpane inner-content \">
                        <div class=\"settings-list\">
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Sidebar Position</div>
                                <div class=\"setting-set\">
                                    <select class=\"sidebar-pos-option form-control input-inline input-sm input-small \">
                                        <option value=\"left\" selected=\"selected\">Left</option>
                                        <option value=\"right\">Right</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Header</div>
                                <div class=\"setting-set\">
                                    <select class=\"page-header-option form-control input-inline input-sm input-small \">
                                        <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                        <option value=\"default\">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Sidebar Menu </div>
                                <div class=\"setting-set\">
                                    <select class=\"sidebar-menu-option form-control input-inline input-sm input-small \">
                                        <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                        <option value=\"hover\">Hover</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Footer</div>
                                <div class=\"setting-set\">
                                    <select class=\"page-footer-option form-control input-inline input-sm input-small \">
                                        <option value=\"fixed\">Fixed</option>
                                        <option value=\"default\" selected=\"selected\">Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat-header\"><h5 class=\"list-heading\">Account Settings</h5></div>
                        <div class=\"settings-list\">
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Notifications</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-1\">
                                            <input type = \"checkbox\" id = \"switch-1\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Show Online</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-7\">
                                            <input type = \"checkbox\" id = \"switch-7\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Status</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-2\">
                                            <input type = \"checkbox\" id = \"switch-2\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">2 Steps Verification</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-3\">
                                            <input type = \"checkbox\" id = \"switch-3\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat-header\"><h5 class=\"list-heading\">General Settings</h5></div>
                        <div class=\"settings-list\">
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Location</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-4\">
                                            <input type = \"checkbox\" id = \"switch-4\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Save Histry</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-5\">
                                            <input type = \"checkbox\" id = \"switch-5\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"setting-item\">
                                <div class=\"setting-text\">Auto Updates</div>
                                <div class=\"setting-set\">
                                    <div class=\"switch\">
                                        <label class = \"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                               for = \"switch-6\">
                                            <input type = \"checkbox\" id = \"switch-6\"
                                                   class = \"mdl-switch__input\" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end chat sidebar -->
</div>
<!-- end page container -->
<!-- start footer -->
<div class=\"page-footer\">
    <div class=\"page-footer-inner\">&copy; Copyright {{ \"now\"|date('Y') }} RapMis By
        <a href=\"https://##########.com/\" target=\"_top\" class=\"makerCss\">HABITECH SOLUTIONS <strong>&</strong> SERVICES</a>
    </div>
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>
<!-- end footer -->
</div>
<!-- start js include path -->

{#
<script src=\"{{ asset('jquery-3.2.1.min.js') }}\" ></script>
#}
<script src=\"{{ asset('assets/plugins/jquery/jquery.min.js') }}\" ></script>
<script src=\"{{ asset('assets/plugins/popper/popper.js') }}\" ></script>
<script src=\"{{ asset('assets/plugins/jquery-blockui/jquery.blockui.min.js') }}\" ></script>
<script src=\"{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}\"></script>
<script src=\"{{ asset('js/app.js') }}\" ></script>
<!-- bootstrap -->
<script src=\"{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}\" ></script>
<script src=\"{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\" ></script>
<script src=\"{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}\" ></script>
<script src=\"{{ asset('assets/js/pages/sparkline/sparkline-data.js') }}\" ></script>
<!-- Common js-->
<script src=\"{{ asset('assets/js/app.js') }}\" ></script>
<script src=\"{{ asset('assets/js/layout.js') }}\" ></script>
<script src=\"{{ asset('assets/js/theme-color.js') }}\" ></script>

<!-- material -->
<script src=\"{{ asset('assets/plugins/material/material.min.js') }}\"></script>
<!-- chart js -->
<script src=\"{{ asset('assets/plugins/chart-js/Chart.bundle.js') }}\" ></script>
<script src=\"{{ asset('assets/plugins/chart-js/utils.js') }}\" ></script>
<script src=\"{{ asset('assets/js/pages/chart/chartjs/home-data.js') }}\" ></script>
<script src=\"{{ asset('assets/js/pages/chart/chartjs/home-data2.js') }}\" ></script>
<script src=\"{{ asset('assets/js/pages/chart/chartjs/home-data3.js') }}\" ></script>
<!-- data tables -->
<script src=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}\" ></script>
<script src=\"{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}\" ></script>
<script src=\"{{ asset('assets/js/pages/table/table_data.js') }}\" ></script>
<!-- dropzone -->
<link href=\"{{ asset('assets/plugins/dropzone/dropzone.css') }}\" rel=\"stylesheet\" media=\"screen\">
<!-- Date Time item CSS -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css') }}\" />
<!-- calendar -->
<script src=\"{{ asset('assets/plugins/moment/moment.min.js') }}\" ></script>
<script src=\"{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}\" ></script>
<script src=\"{{ asset('assets/js/pages/calendar/calendar.min.js') }}\" ></script>
<!-- summernote -->
<script src=\"{{ asset('assets/plugins/summernote/summernote.js') }}\" ></script>
<script src=\"{{ asset('assets/js/pages/summernote/summernote-data.js') }}\" ></script>
<!-- owl carousel -->
<script src=\"{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}\"></script>
<script src=\"{{ asset('assets/js/pages/owl-carousel/owl_data.js') }}\"></script>
<!-- end js include path -->

{% block javascripts %}{% endblock %}
</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\rapmis\\app\\Resources\\views\\base.html.twig");
    }
}
