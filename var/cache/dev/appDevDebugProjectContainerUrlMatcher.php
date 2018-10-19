<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // sandbox_homepage
        if ('/pdf' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'sandbox_homepage');
            }

            return array (  '_controller' => 'pdf\\sandboxBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sandbox_homepage',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            // chat_chat_default_index
            if ('/chat' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'chat_chat_default_index');
                }

                return array (  '_controller' => 'Chat\\ChatBundle\\Controller\\DefaultController::indexAction',  '_route' => 'chat_chat_default_index',);
            }

            if (0 === strpos($pathinfo, '/chef_department')) {
                // chef_department_index
                if ('/chef_department' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_chef_department_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'chef_department_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Chef_departmentController::indexAction',  '_route' => 'chef_department_index',);
                }
                not_chef_department_index:

                // chef_department_new
                if ('/chef_department/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_chef_department_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Chef_departmentController::newAction',  '_route' => 'chef_department_new',);
                }
                not_chef_department_new:

                // chef_department_show
                if (preg_match('#^/chef_department/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_chef_department_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chef_department_show')), array (  '_controller' => 'AppBundle\\Controller\\Chef_departmentController::showAction',));
                }
                not_chef_department_show:

                // chef_department_edit
                if (preg_match('#^/chef_department/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_chef_department_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chef_department_edit')), array (  '_controller' => 'AppBundle\\Controller\\Chef_departmentController::editAction',));
                }
                not_chef_department_edit:

                // chef_department_delete
                if (preg_match('#^/chef_department/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_chef_department_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chef_department_delete')), array (  '_controller' => 'AppBundle\\Controller\\Chef_departmentController::deleteAction',));
                }
                not_chef_department_delete:

            }

            elseif (0 === strpos($pathinfo, '/city')) {
                // city_index
                if ('/city' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_city_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'city_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CityController::indexAction',  '_route' => 'city_index',);
                }
                not_city_index:

                // city_school
                if (0 === strpos($pathinfo, '/city/school') && preg_match('#^/city/school/(?P<flo>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_city_school;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_school')), array (  '_controller' => 'AppBundle\\Controller\\CityController::schoolAction',));
                }
                not_city_school:

                // city_upload
                if ('/city/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_city_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CityController::uploadCitiesAction',  '_route' => 'city_upload',);
                }
                not_city_upload:

                // city_new
                if ('/city/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_city_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CityController::newAction',  '_route' => 'city_new',);
                }
                not_city_new:

                // city_show
                if (preg_match('#^/city/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_city_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_show')), array (  '_controller' => 'AppBundle\\Controller\\CityController::showAction',));
                }
                not_city_show:

                // city_edit
                if (preg_match('#^/city/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_city_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_edit')), array (  '_controller' => 'AppBundle\\Controller\\CityController::editAction',));
                }
                not_city_edit:

                // city_delete
                if (preg_match('#^/city/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_city_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_delete')), array (  '_controller' => 'AppBundle\\Controller\\CityController::deleteAction',));
                }
                not_city_delete:

            }

            elseif (0 === strpos($pathinfo, '/classes')) {
                // classes_index
                if ('/classes' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_classes_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'classes_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ClassesController::indexAction',  '_route' => 'classes_index',);
                }
                not_classes_index:

                // classes_upload
                if ('/classes/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_classes_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ClassesController::uploadMatieresAction',  '_route' => 'classes_upload',);
                }
                not_classes_upload:

                // classes_index1
                if (preg_match('#^/classes/(?P<flo>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_classes_index1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classes_index1')), array (  '_controller' => 'AppBundle\\Controller\\ClassesController::index1Action',));
                }
                not_classes_index1:

                if (0 === strpos($pathinfo, '/classes/new')) {
                    // classes_new
                    if ('/classes/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_classes_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ClassesController::newAction',  '_route' => 'classes_new',);
                    }
                    not_classes_new:

                    // classes_newid
                    if (preg_match('#^/classes/new/(?P<dev>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_classes_newid;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'classes_newid')), array (  '_controller' => 'AppBundle\\Controller\\ClassesController::newidAction',));
                    }
                    not_classes_newid:

                }

                // classes_show
                if (preg_match('#^/classes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_classes_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classes_show')), array (  '_controller' => 'AppBundle\\Controller\\ClassesController::showAction',));
                }
                not_classes_show:

                // classes_edit
                if (preg_match('#^/classes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_classes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classes_edit')), array (  '_controller' => 'AppBundle\\Controller\\ClassesController::editAction',));
                }
                not_classes_edit:

                // classes_delete
                if (preg_match('#^/classes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_classes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classes_delete')), array (  '_controller' => 'AppBundle\\Controller\\ClassesController::deleteAction',));
                }
                not_classes_delete:

            }

            elseif (0 === strpos($pathinfo, '/country')) {
                // country_index
                if ('/country' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_country_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'country_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CountryController::indexAction',  '_route' => 'country_index',);
                }
                not_country_index:

                // country_region
                if (0 === strpos($pathinfo, '/country/region') && preg_match('#^/country/region/(?P<flo>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_country_region;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_region')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::regionAction',));
                }
                not_country_region:

                // country_upload
                if ('/country/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_country_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CountryController::uploadCountryAction',  '_route' => 'country_upload',);
                }
                not_country_upload:

                // country_new
                if ('/country/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_country_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CountryController::newAction',  '_route' => 'country_new',);
                }
                not_country_new:

                // country_show
                if (preg_match('#^/country/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_country_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_show')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::showAction',));
                }
                not_country_show:

                // country_edit
                if (preg_match('#^/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_country_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_edit')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::editAction',));
                }
                not_country_edit:

                // country_delete
                if (preg_match('#^/country/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_country_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_delete')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::deleteAction',));
                }
                not_country_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/addresses')) {
            // addresses_index
            if ('/addresses' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_addresses_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'addresses_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AddressesController::indexAction',  '_route' => 'addresses_index',);
            }
            not_addresses_index:

            // addresses_upload
            if ('/addresses/upload' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_addresses_upload;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AddressesController::uploadAdressesAction',  '_route' => 'addresses_upload',);
            }
            not_addresses_upload:

            // addresses_new
            if ('/addresses/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_addresses_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AddressesController::newAction',  '_route' => 'addresses_new',);
            }
            not_addresses_new:

            // addresses_show
            if (preg_match('#^/addresses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_addresses_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addresses_show')), array (  '_controller' => 'AppBundle\\Controller\\AddressesController::showAction',));
            }
            not_addresses_show:

            // addresses_edit
            if (preg_match('#^/addresses/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_addresses_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addresses_edit')), array (  '_controller' => 'AppBundle\\Controller\\AddressesController::editAction',));
            }
            not_addresses_edit:

            // addresses_delete
            if (preg_match('#^/addresses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_addresses_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addresses_delete')), array (  '_controller' => 'AppBundle\\Controller\\AddressesController::deleteAction',));
            }
            not_addresses_delete:

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                if (0 === strpos($pathinfo, '/admin/core/get-')) {
                    // sonata_admin_retrieve_form_element
                    if ('/admin/core/get-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.action.retrieve_form_field_element',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.action.get_short_object_description',  '_format' => 'html',));
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.action.retrieve_autocomplete_items',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // sonata_admin_append_form_element
                if ('/admin/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.action.append_form_field_element',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_set_object_field_value
                if ('/admin/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.action.set_object_field_value',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ('/admin/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction',  '_route' => 'sonata_admin_search',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // event
            if ('/event' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eventAction',  '_route' => 'event',);
            }

            if (0 === strpos($pathinfo, '/events_extracurricular')) {
                // events_extracurricular_index
                if ('/events_extracurricular' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_events_extracurricular_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'events_extracurricular_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Events_extracurricularController::indexAction',  '_route' => 'events_extracurricular_index',);
                }
                not_events_extracurricular_index:

                // events_extracurricular_new
                if ('/events_extracurricular/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_events_extracurricular_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Events_extracurricularController::newAction',  '_route' => 'events_extracurricular_new',);
                }
                not_events_extracurricular_new:

                // events_extracurricular_show
                if (preg_match('#^/events_extracurricular/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_events_extracurricular_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_extracurricular_show')), array (  '_controller' => 'AppBundle\\Controller\\Events_extracurricularController::showAction',));
                }
                not_events_extracurricular_show:

                // events_extracurricular_edit
                if (preg_match('#^/events_extracurricular/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_events_extracurricular_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_extracurricular_edit')), array (  '_controller' => 'AppBundle\\Controller\\Events_extracurricularController::editAction',));
                }
                not_events_extracurricular_edit:

                // events_extracurricular_delete
                if (preg_match('#^/events_extracurricular/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_events_extracurricular_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_extracurricular_delete')), array (  '_controller' => 'AppBundle\\Controller\\Events_extracurricularController::deleteAction',));
                }
                not_events_extracurricular_delete:

            }

            elseif (0 === strpos($pathinfo, '/enseignants_titulaire')) {
                // enseignants_titulaire_index
                if ('/enseignants_titulaire' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_enseignants_titulaire_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'enseignants_titulaire_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Enseignants_titulaireController::indexAction',  '_route' => 'enseignants_titulaire_index',);
                }
                not_enseignants_titulaire_index:

                // enseignants_titulaire_new
                if ('/enseignants_titulaire/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_enseignants_titulaire_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Enseignants_titulaireController::newAction',  '_route' => 'enseignants_titulaire_new',);
                }
                not_enseignants_titulaire_new:

                // enseignants_titulaire_show
                if (preg_match('#^/enseignants_titulaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_enseignants_titulaire_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignants_titulaire_show')), array (  '_controller' => 'AppBundle\\Controller\\Enseignants_titulaireController::showAction',));
                }
                not_enseignants_titulaire_show:

                // enseignants_titulaire_edit
                if (preg_match('#^/enseignants_titulaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_enseignants_titulaire_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignants_titulaire_edit')), array (  '_controller' => 'AppBundle\\Controller\\Enseignants_titulaireController::editAction',));
                }
                not_enseignants_titulaire_edit:

                // enseignants_titulaire_delete
                if (preg_match('#^/enseignants_titulaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_enseignants_titulaire_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignants_titulaire_delete')), array (  '_controller' => 'AppBundle\\Controller\\Enseignants_titulaireController::deleteAction',));
                }
                not_enseignants_titulaire_delete:

            }

            elseif (0 === strpos($pathinfo, '/epreuves')) {
                // epreuves_index
                if ('/epreuves' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_epreuves_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'epreuves_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EpreuvesController::indexAction',  '_route' => 'epreuves_index',);
                }
                not_epreuves_index:

                // epreuves_new
                if ('/epreuves/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_epreuves_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EpreuvesController::newAction',  '_route' => 'epreuves_new',);
                }
                not_epreuves_new:

                // download
                if (0 === strpos($pathinfo, '/epreuves/subject') && preg_match('#^/epreuves/subject/(?P<id>[^/]++)/(?P<id1>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_download;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'download')), array (  '_controller' => 'AppBundle\\Controller\\EpreuvesController::downloadAction',));
                }
                not_download:

                // epreuves_show
                if (preg_match('#^/epreuves/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_epreuves_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'epreuves_show')), array (  '_controller' => 'AppBundle\\Controller\\EpreuvesController::showAction',));
                }
                not_epreuves_show:

                // epreuves_edit
                if (preg_match('#^/epreuves/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_epreuves_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'epreuves_edit')), array (  '_controller' => 'AppBundle\\Controller\\EpreuvesController::editAction',));
                }
                not_epreuves_edit:

                // epreuves_delete
                if (preg_match('#^/epreuves/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_epreuves_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'epreuves_delete')), array (  '_controller' => 'AppBundle\\Controller\\EpreuvesController::deleteAction',));
                }
                not_epreuves_delete:

            }

            elseif (0 === strpos($pathinfo, '/etablissements')) {
                // etablissements_index
                if ('/etablissements' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_etablissements_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'etablissements_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EtablissementsController::indexAction',  '_route' => 'etablissements_index',);
                }
                not_etablissements_index:

                // etablissements_upload
                if ('/etablissements/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_etablissements_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EtablissementsController::uploadEtablissementsAction',  '_route' => 'etablissements_upload',);
                }
                not_etablissements_upload:

                if (0 === strpos($pathinfo, '/etablissements/new')) {
                    // etablissements_new
                    if ('/etablissements/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_etablissements_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\EtablissementsController::newAction',  '_route' => 'etablissements_new',);
                    }
                    not_etablissements_new:

                    // etablissements_news
                    if (0 === strpos($pathinfo, '/etablissements/news') && preg_match('#^/etablissements/news/(?P<who>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_etablissements_news;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissements_news')), array (  '_controller' => 'AppBundle\\Controller\\EtablissementsController::newsAction',));
                    }
                    not_etablissements_news:

                }

                // etablissements_show
                if (preg_match('#^/etablissements/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_etablissements_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissements_show')), array (  '_controller' => 'AppBundle\\Controller\\EtablissementsController::showAction',));
                }
                not_etablissements_show:

                // etablissements_edit
                if (preg_match('#^/etablissements/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_etablissements_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissements_edit')), array (  '_controller' => 'AppBundle\\Controller\\EtablissementsController::editAction',));
                }
                not_etablissements_edit:

                // etablissements_delete
                if (preg_match('#^/etablissements/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_etablissements_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissements_delete')), array (  '_controller' => 'AppBundle\\Controller\\EtablissementsController::deleteAction',));
                }
                not_etablissements_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/n')) {
            // show_pop
            if ('/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::popupAction',  '_route' => 'show_pop',);
            }

            // note_repport
            if (0 === strpos($pathinfo, '/note_repport') && preg_match('#^/note_repport/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_repport')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::pdfAction',));
            }

            if (0 === strpos($pathinfo, '/notes')) {
                // notes_index
                if ('/notes' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_notes_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'notes_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NotesController::indexAction',  '_route' => 'notes_index',);
                }
                not_notes_index:

                // bulletin
                if ('/notes/bulletin' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_bulletin;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NotesController::bulletinAction',  '_route' => 'bulletin',);
                }
                not_bulletin:

                // notes_new
                if ('/notes/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_notes_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NotesController::newAction',  '_route' => 'notes_new',);
                }
                not_notes_new:

                // notes_show
                if (preg_match('#^/notes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_notes_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_show')), array (  '_controller' => 'AppBundle\\Controller\\NotesController::showAction',));
                }
                not_notes_show:

                // notes_edit
                if (preg_match('#^/notes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_notes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_edit')), array (  '_controller' => 'AppBundle\\Controller\\NotesController::editAction',));
                }
                not_notes_edit:

                // notes_delete
                if (preg_match('#^/notes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_notes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_delete')), array (  '_controller' => 'AppBundle\\Controller\\NotesController::deleteAction',));
                }
                not_notes_delete:

            }

            elseif (0 === strpos($pathinfo, '/niveau')) {
                // niveau_index
                if ('/niveau' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_niveau_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'niveau_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NiveauController::indexAction',  '_route' => 'niveau_index',);
                }
                not_niveau_index:

                // niveau_upload
                if ('/niveau/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_niveau_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NiveauController::uploadNiveauAction',  '_route' => 'niveau_upload',);
                }
                not_niveau_upload:

                // niveau_new
                if ('/niveau/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_niveau_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NiveauController::newAction',  '_route' => 'niveau_new',);
                }
                not_niveau_new:

                // niveau_show
                if (preg_match('#^/niveau/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_niveau_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveau_show')), array (  '_controller' => 'AppBundle\\Controller\\NiveauController::showAction',));
                }
                not_niveau_show:

                // niveau_edit
                if (preg_match('#^/niveau/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_niveau_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveau_edit')), array (  '_controller' => 'AppBundle\\Controller\\NiveauController::editAction',));
                }
                not_niveau_edit:

                // niveau_delete
                if (preg_match('#^/niveau/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_niveau_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveau_delete')), array (  '_controller' => 'AppBundle\\Controller\\NiveauController::deleteAction',));
                }
                not_niveau_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/t')) {
            // testons
            if ('/testons' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testonsAction',  '_route' => 'testons',);
            }

            if (0 === strpos($pathinfo, '/teacher')) {
                // teacher_index
                if ('/teacher' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_teacher_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'teacher_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TeacherController::indexAction',  '_route' => 'teacher_index',);
                }
                not_teacher_index:

                // teacher_new
                if ('/teacher/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_teacher_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TeacherController::newAction',  '_route' => 'teacher_new',);
                }
                not_teacher_new:

                // teacher_show
                if (preg_match('#^/teacher/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_teacher_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_show')), array (  '_controller' => 'AppBundle\\Controller\\TeacherController::showAction',));
                }
                not_teacher_show:

                // teacher_edit
                if (preg_match('#^/teacher/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_teacher_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_edit')), array (  '_controller' => 'AppBundle\\Controller\\TeacherController::editAction',));
                }
                not_teacher_edit:

                // teacher_delete
                if (preg_match('#^/teacher/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_teacher_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_delete')), array (  '_controller' => 'AppBundle\\Controller\\TeacherController::deleteAction',));
                }
                not_teacher_delete:

            }

            elseif (0 === strpos($pathinfo, '/type_etablissements')) {
                // type_etablissements_index
                if ('/type_etablissements' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_type_etablissements_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'type_etablissements_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Type_etablissementsController::indexAction',  '_route' => 'type_etablissements_index',);
                }
                not_type_etablissements_index:

                // type_etablissements_upload
                if ('/type_etablissements/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_type_etablissements_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Type_etablissementsController::uploadType_etablissementsAction',  '_route' => 'type_etablissements_upload',);
                }
                not_type_etablissements_upload:

                // type_etablissements_new
                if ('/type_etablissements/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_type_etablissements_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Type_etablissementsController::newAction',  '_route' => 'type_etablissements_new',);
                }
                not_type_etablissements_new:

                // type_etablissements_show
                if (preg_match('#^/type_etablissements/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_type_etablissements_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_etablissements_show')), array (  '_controller' => 'AppBundle\\Controller\\Type_etablissementsController::showAction',));
                }
                not_type_etablissements_show:

                // type_etablissements_edit
                if (preg_match('#^/type_etablissements/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_type_etablissements_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_etablissements_edit')), array (  '_controller' => 'AppBundle\\Controller\\Type_etablissementsController::editAction',));
                }
                not_type_etablissements_edit:

                // type_etablissements_delete
                if (preg_match('#^/type_etablissements/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_type_etablissements_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_etablissements_delete')), array (  '_controller' => 'AppBundle\\Controller\\Type_etablissementsController::deleteAction',));
                }
                not_type_etablissements_delete:

            }

        }

        // who_is_user
        if ('/who_is' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::who_isAction',  '_route' => 'who_is_user',);
        }

        if (0 === strpos($pathinfo, '/department')) {
            // department_index
            if ('/department' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_department_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'department_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::indexAction',  '_route' => 'department_index',);
            }
            not_department_index:

            // department_upload
            if ('/department/upload' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_department_upload;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::uploadDepartmentAction',  '_route' => 'department_upload',);
            }
            not_department_upload:

            // department_city
            if (preg_match('#^/department/(?P<flo>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_department_city;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'department_city')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::cityAction',));
            }
            not_department_city:

            // department_new
            if ('/department/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_department_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::newAction',  '_route' => 'department_new',);
            }
            not_department_new:

            // department_show
            if (preg_match('#^/department/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_department_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'department_show')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::showAction',));
            }
            not_department_show:

            // department_edit
            if (preg_match('#^/department/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_department_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'department_edit')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::editAction',));
            }
            not_department_edit:

            // department_delete
            if (preg_match('#^/department/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_department_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'department_delete')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::deleteAction',));
            }
            not_department_delete:

        }

        elseif (0 === strpos($pathinfo, '/facteurs_disciplinaires')) {
            // facteurs_disciplinaires_index
            if ('/facteurs_disciplinaires' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_facteurs_disciplinaires_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'facteurs_disciplinaires_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Facteurs_disciplinairesController::indexAction',  '_route' => 'facteurs_disciplinaires_index',);
            }
            not_facteurs_disciplinaires_index:

            // facteurs_disciplinaires_new
            if ('/facteurs_disciplinaires/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_facteurs_disciplinaires_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Facteurs_disciplinairesController::newAction',  '_route' => 'facteurs_disciplinaires_new',);
            }
            not_facteurs_disciplinaires_new:

            // facteurs_disciplinaires_show
            if (preg_match('#^/facteurs_disciplinaires/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_facteurs_disciplinaires_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facteurs_disciplinaires_show')), array (  '_controller' => 'AppBundle\\Controller\\Facteurs_disciplinairesController::showAction',));
            }
            not_facteurs_disciplinaires_show:

            // facteurs_disciplinaires_edit
            if (preg_match('#^/facteurs_disciplinaires/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_facteurs_disciplinaires_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facteurs_disciplinaires_edit')), array (  '_controller' => 'AppBundle\\Controller\\Facteurs_disciplinairesController::editAction',));
            }
            not_facteurs_disciplinaires_edit:

            // facteurs_disciplinaires_delete
            if (preg_match('#^/facteurs_disciplinaires/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_facteurs_disciplinaires_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facteurs_disciplinaires_delete')), array (  '_controller' => 'AppBundle\\Controller\\Facteurs_disciplinairesController::deleteAction',));
            }
            not_facteurs_disciplinaires_delete:

        }

        elseif (0 === strpos($pathinfo, '/fiche_parents')) {
            // fiche_parents_index
            if ('/fiche_parents' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fiche_parents_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fiche_parents_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Fiche_parentsController::indexAction',  '_route' => 'fiche_parents_index',);
            }
            not_fiche_parents_index:

            // fiche_parents_new
            if ('/fiche_parents/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fiche_parents_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Fiche_parentsController::newAction',  '_route' => 'fiche_parents_new',);
            }
            not_fiche_parents_new:

            // fiche_parents_show
            if (preg_match('#^/fiche_parents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fiche_parents_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_parents_show')), array (  '_controller' => 'AppBundle\\Controller\\Fiche_parentsController::showAction',));
            }
            not_fiche_parents_show:

            // fiche_parents_edit
            if (preg_match('#^/fiche_parents/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fiche_parents_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_parents_edit')), array (  '_controller' => 'AppBundle\\Controller\\Fiche_parentsController::editAction',));
            }
            not_fiche_parents_edit:

            // fiche_parents_delete
            if (preg_match('#^/fiche_parents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_fiche_parents_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_parents_delete')), array (  '_controller' => 'AppBundle\\Controller\\Fiche_parentsController::deleteAction',));
            }
            not_fiche_parents_delete:

        }

        elseif (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/matieres')) {
                // matieres_index
                if ('/matieres' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_matieres_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'matieres_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MatieresController::indexAction',  '_route' => 'matieres_index',);
                }
                not_matieres_index:

                // matieres_upload
                if ('/matieres/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_matieres_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MatieresController::uploadMatieresAction',  '_route' => 'matieres_upload',);
                }
                not_matieres_upload:

                // matieres_new
                if ('/matieres/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_matieres_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MatieresController::newAction',  '_route' => 'matieres_new',);
                }
                not_matieres_new:

                // matieres_show
                if (preg_match('#^/matieres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_matieres_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matieres_show')), array (  '_controller' => 'AppBundle\\Controller\\MatieresController::showAction',));
                }
                not_matieres_show:

                // matieres_edit
                if (preg_match('#^/matieres/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_matieres_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matieres_edit')), array (  '_controller' => 'AppBundle\\Controller\\MatieresController::editAction',));
                }
                not_matieres_edit:

                // matieres_delete
                if (preg_match('#^/matieres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_matieres_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matieres_delete')), array (  '_controller' => 'AppBundle\\Controller\\MatieresController::deleteAction',));
                }
                not_matieres_delete:

            }

            elseif (0 === strpos($pathinfo, '/media')) {
                // media_index
                if ('/media' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_media_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'media_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
                }
                not_media_index:

                // media_new
                if ('/media/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_media_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
                }
                not_media_new:

                // media_show
                if (preg_match('#^/media/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_media_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_show')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::showAction',));
                }
                not_media_show:

                // media_edit
                if (preg_match('#^/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_media_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_edit')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::editAction',));
                }
                not_media_edit:

                // media_delete
                if (preg_match('#^/media/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_media_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::deleteAction',));
                }
                not_media_delete:

            }

            elseif (0 === strpos($pathinfo, '/modules')) {
                // modules_index
                if ('/modules' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_modules_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'modules_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ModulesController::indexAction',  '_route' => 'modules_index',);
                }
                not_modules_index:

                // modules_new
                if ('/modules/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_modules_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ModulesController::newAction',  '_route' => 'modules_new',);
                }
                not_modules_new:

                // modules_show
                if (preg_match('#^/modules/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_modules_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modules_show')), array (  '_controller' => 'AppBundle\\Controller\\ModulesController::showAction',));
                }
                not_modules_show:

                // modules_edit
                if (preg_match('#^/modules/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_modules_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modules_edit')), array (  '_controller' => 'AppBundle\\Controller\\ModulesController::editAction',));
                }
                not_modules_edit:

                // modules_delete
                if (preg_match('#^/modules/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_modules_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modules_delete')), array (  '_controller' => 'AppBundle\\Controller\\ModulesController::deleteAction',));
                }
                not_modules_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/regions')) {
                // regions_index
                if ('/regions' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_regions_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'regions_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RegionsController::indexAction',  '_route' => 'regions_index',);
                }
                not_regions_index:

                // regions_upload
                if ('/regions/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_regions_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RegionsController::uploadRegionsAction',  '_route' => 'regions_upload',);
                }
                not_regions_upload:

                // regions_department
                if (preg_match('#^/regions/(?P<flo>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_regions_department;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'regions_department')), array (  '_controller' => 'AppBundle\\Controller\\RegionsController::departmentAction',));
                }
                not_regions_department:

                // regions_new
                if ('/regions/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_regions_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RegionsController::newAction',  '_route' => 'regions_new',);
                }
                not_regions_new:

                // regions_show
                if (preg_match('#^/regions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_regions_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'regions_show')), array (  '_controller' => 'AppBundle\\Controller\\RegionsController::showAction',));
                }
                not_regions_show:

                // regions_edit
                if (preg_match('#^/regions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_regions_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'regions_edit')), array (  '_controller' => 'AppBundle\\Controller\\RegionsController::editAction',));
                }
                not_regions_edit:

                // regions_delete
                if (preg_match('#^/regions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_regions_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'regions_delete')), array (  '_controller' => 'AppBundle\\Controller\\RegionsController::deleteAction',));
                }
                not_regions_delete:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/sectioneduc')) {
                // sectioneduc_index
                if ('/sectioneduc' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sectioneduc_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'sectioneduc_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SectionEducController::indexAction',  '_route' => 'sectioneduc_index',);
                }
                not_sectioneduc_index:

                // section_upload
                if ('/sectioneduc/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_section_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SectionEducController::uploadSyseducAction',  '_route' => 'section_upload',);
                }
                not_section_upload:

                // sectioneduc_new
                if ('/sectioneduc/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_sectioneduc_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SectionEducController::newAction',  '_route' => 'sectioneduc_new',);
                }
                not_sectioneduc_new:

                // sectioneduc_show
                if (preg_match('#^/sectioneduc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sectioneduc_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sectioneduc_show')), array (  '_controller' => 'AppBundle\\Controller\\SectionEducController::showAction',));
                }
                not_sectioneduc_show:

                // sectioneduc_edit
                if (preg_match('#^/sectioneduc/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_sectioneduc_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sectioneduc_edit')), array (  '_controller' => 'AppBundle\\Controller\\SectionEducController::editAction',));
                }
                not_sectioneduc_edit:

                // sectioneduc_delete
                if (preg_match('#^/sectioneduc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sectioneduc_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sectioneduc_delete')), array (  '_controller' => 'AppBundle\\Controller\\SectionEducController::deleteAction',));
                }
                not_sectioneduc_delete:

            }

            elseif (0 === strpos($pathinfo, '/staff')) {
                // staff_index
                if ('/staff' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_staff_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'staff_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StaffController::indexAction',  '_route' => 'staff_index',);
                }
                not_staff_index:

                // staff_upload
                if ('/staff/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_staff_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StaffController::uploadMatieresAction',  '_route' => 'staff_upload',);
                }
                not_staff_upload:

                // staff_new
                if ('/staff/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_staff_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StaffController::newAction',  '_route' => 'staff_new',);
                }
                not_staff_new:

                // staff_show
                if (preg_match('#^/staff/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_staff_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'staff_show')), array (  '_controller' => 'AppBundle\\Controller\\StaffController::showAction',));
                }
                not_staff_show:

                // staff_edit
                if (preg_match('#^/staff/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_staff_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'staff_edit')), array (  '_controller' => 'AppBundle\\Controller\\StaffController::editAction',));
                }
                not_staff_edit:

                // staff_delete
                if (preg_match('#^/staff/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_staff_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'staff_delete')), array (  '_controller' => 'AppBundle\\Controller\\StaffController::deleteAction',));
                }
                not_staff_delete:

            }

            elseif (0 === strpos($pathinfo, '/students')) {
                // students_index
                if ('/students' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_students_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'students_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StudentsController::indexAction',  '_route' => 'students_index',);
                }
                not_students_index:

                // students_index_class
                if (0 === strpos($pathinfo, '/students/class') && preg_match('#^/students/class/(?P<flo>[^/]++)/(?P<dev>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_students_index_class;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'students_index_class')), array (  '_controller' => 'AppBundle\\Controller\\StudentsController::index_classAction',));
                }
                not_students_index_class:

                // students_new
                if ('/students/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_students_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StudentsController::newAction',  '_route' => 'students_new',);
                }
                not_students_new:

                // students_show
                if (preg_match('#^/students/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_students_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'students_show')), array (  '_controller' => 'AppBundle\\Controller\\StudentsController::showAction',));
                }
                not_students_show:

                // students_edit
                if (preg_match('#^/students/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_students_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'students_edit')), array (  '_controller' => 'AppBundle\\Controller\\StudentsController::editAction',));
                }
                not_students_edit:

                // students_delete
                if (preg_match('#^/students/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_students_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'students_delete')), array (  '_controller' => 'AppBundle\\Controller\\StudentsController::deleteAction',));
                }
                not_students_delete:

            }

            elseif (0 === strpos($pathinfo, '/syseduc')) {
                // syseduc_index
                if ('/syseduc' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_syseduc_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'syseduc_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SysEducController::indexAction',  '_route' => 'syseduc_index',);
                }
                not_syseduc_index:

                // syseduc_upload
                if ('/syseduc/upload' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_syseduc_upload;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SysEducController::uploadSyseducAction',  '_route' => 'syseduc_upload',);
                }
                not_syseduc_upload:

                // syseduc_new
                if ('/syseduc/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_syseduc_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SysEducController::newAction',  '_route' => 'syseduc_new',);
                }
                not_syseduc_new:

                // syseduc_show
                if (preg_match('#^/syseduc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_syseduc_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'syseduc_show')), array (  '_controller' => 'AppBundle\\Controller\\SysEducController::showAction',));
                }
                not_syseduc_show:

                // syseduc_edit
                if (preg_match('#^/syseduc/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_syseduc_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'syseduc_edit')), array (  '_controller' => 'AppBundle\\Controller\\SysEducController::editAction',));
                }
                not_syseduc_edit:

                // syseduc_delete
                if (preg_match('#^/syseduc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_syseduc_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'syseduc_delete')), array (  '_controller' => 'AppBundle\\Controller\\SysEducController::deleteAction',));
                }
                not_syseduc_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
