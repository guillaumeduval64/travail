<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/')) {
            // _welcome
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_welcome');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
            }

            // _assetic_deecb50
            if ($pathinfo === '/js/deecb50.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'deecb50',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_deecb50',);
            }

            // _assetic_deecb50_0
            if ($pathinfo === '/js/deecb50_jquery-ui-1.10.1_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'deecb50',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_deecb50_0',);
            }

            // _assetic_deecb50_1
            if ($pathinfo === '/js/deecb50_bootstrap_2.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'deecb50',  'pos' => '1',  '_format' => 'js',  '_route' => '_assetic_deecb50_1',);
            }

            // _assetic_deecb50_2
            if ($pathinfo === '/js/deecb50_jquery.maskedinput_3.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'deecb50',  'pos' => '2',  '_format' => 'js',  '_route' => '_assetic_deecb50_2',);
            }

            // _assetic_deecb50_3
            if ($pathinfo === '/js/deecb50_date_4.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'deecb50',  'pos' => '3',  '_format' => 'js',  '_route' => '_assetic_deecb50_3',);
            }

            // _assetic_1ea8096
            if ($pathinfo === '/js/1ea8096.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1ea8096',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1ea8096',);
            }

            // _assetic_1ea8096_0
            if ($pathinfo === '/js/1ea8096_jquery.raty_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1ea8096',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_1ea8096_0',);
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_search
                if ($pathinfo === '/_profiler/search') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
                }

                // _profiler_import
                if ($pathinfo === '/_profiler/import') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
                }

                // _profiler_redirect
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // myapp_utilisateur_default_index
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\UtilisateurBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'myapp_utilisateur_default_index'));
            }

            if (0 === strpos($pathinfo, '/intranet')) {
                // fos_user_security_login
                if ($pathinfo === '/intranet/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/intranet/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

                // fos_user_security_logout
                if ($pathinfo === '/intranet/logout') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }

                if (0 === strpos($pathinfo, '/intranet/profile')) {
                    // fos_user_profile_show
                    if (rtrim($pathinfo, '/') === '/intranet/profile') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_profile_show;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                    }
                    not_fos_user_profile_show:

                    // fos_user_profile_edit
                    if ($pathinfo === '/intranet/profile/edit') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                    }

                }

                if (0 === strpos($pathinfo, '/intranet/register')) {
                    // fos_user_registration_register
                    if (rtrim($pathinfo, '/') === '/intranet/register') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    }

                    // fos_user_registration_check_email
                    if ($pathinfo === '/intranet/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    // fos_user_registration_confirm
                    if (0 === strpos($pathinfo, '/intranet/register/confirm') && preg_match('#^/intranet/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/intranet/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

                if (0 === strpos($pathinfo, '/intranet/resetting')) {
                    // fos_user_resetting_request
                    if ($pathinfo === '/intranet/resetting/request') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_send_email
                    if ($pathinfo === '/intranet/resetting/send-email') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ($pathinfo === '/intranet/resetting/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    }
                    not_fos_user_resetting_check_email:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/intranet/resetting/reset') && preg_match('#^/intranet/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_resetting_reset;
                        }

                        return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
                    }
                    not_fos_user_resetting_reset:

                }

                // fos_user_change_password
                if ($pathinfo === '/intranet/change-password/change-password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

                // myapp_choisir_langue
                if (0 === strpos($pathinfo, '/intranet/choisir-langue') && preg_match('#^/intranet/choisir\\-langue/(?P<langue>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::choisirLangueAction',)), array('_route' => 'myapp_choisir_langue'));
                }

                // myapp_client_rechercher
                if ($pathinfo === '/intranet/client/rechercher') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_myapp_client_rechercher;
                    }

                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::rechercherAction',  '_route' => 'myapp_client_rechercher',);
                }
                not_myapp_client_rechercher:

                // myapp_contrat_rechercher
                if ($pathinfo === '/intranet/contrat/rechercher') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_myapp_contrat_rechercher;
                    }

                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::rechercherAction',  '_route' => 'myapp_contrat_rechercher',);
                }
                not_myapp_contrat_rechercher:

                // myapp_client_date
                if ($pathinfo === '/intranet/admin/client/date') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_myapp_client_date;
                    }

                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::dateAction',  '_route' => 'myapp_client_date',);
                }
                not_myapp_client_date:

                // myapp_client_lister
                if (rtrim($pathinfo, '/') === '/intranet/admin/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'myapp_client_lister');
                    }

                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',  '_route' => 'myapp_client_lister',);
                }

                // client
                if (rtrim($pathinfo, '/') === '/intranet/admin/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client');
                    }

                    return array (  'page' => '1',  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',  '_route' => 'client',);
                }

                // client_paginated
                if (0 === strpos($pathinfo, '/intranet/admin/client/pag') && preg_match('#^/intranet/admin/client/page(?P<page>[^e]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',)), array('_route' => 'client_paginated'));
                }

                // myapp_client_ajouter
                if ($pathinfo === '/intranet/admin/client/ajouter') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::ajouterAction',  '_route' => 'myapp_client_ajouter',);
                }

                // myapp_client_note
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/note$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::noteAction',)), array('_route' => 'myapp_client_note'));
                }

                // myapp_client_modifier
                if (0 === strpos($pathinfo, '/intranet/admin/client') && preg_match('#^/intranet/admin/client/(?P<id>[^/]+)/modifier$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::modifierAction',)), array('_route' => 'myapp_client_modifier'));
                }

                // myapp_client_supprimer
                if (0 === strpos($pathinfo, '/intranet/admin/client') && preg_match('#^/intranet/admin/client/(?P<id>[^/]+)/supprimer$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::supprimerAction',)), array('_route' => 'myapp_client_supprimer'));
                }

                // myapp_production_ajouter
                if (0 === strpos($pathinfo, '/intranet/admin/production') && preg_match('#^/intranet/admin/production/(?P<id>[^/]+)/ajouter$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::ajouterAction',)), array('_route' => 'myapp_production_ajouter'));
                }

                // myapp_production_lister
                if (rtrim($pathinfo, '/') === '/intranet/admin/production') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'myapp_production_lister');
                    }

                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::listerAction',  '_route' => 'myapp_production_lister',);
                }

                // myapp_production_booke
                if ($pathinfo === '/intranet/admin/production/booke') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::bookeAction',  '_route' => 'myapp_production_booke',);
                }

                // myapp_production_termine
                if ($pathinfo === '/intranet/admin/production/termine') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::termineAction',  '_route' => 'myapp_production_termine',);
                }

                // myapp_production_modifier
                if (0 === strpos($pathinfo, '/intranet/admin/production/modifier') && preg_match('#^/intranet/admin/production/modifier/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::modifierAction',)), array('_route' => 'myapp_production_modifier'));
                }

                // myapp_production_comptabilite
                if (0 === strpos($pathinfo, '/intranet/admin/production/comptabilite') && preg_match('#^/intranet/admin/production/comptabilite/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::comptabiliteAction',)), array('_route' => 'myapp_production_comptabilite'));
                }

                // myapp_comptabilite_ajouter
                if ($pathinfo === '/intranet/admin/comptabilite/ajouter') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::ajouterAction',  '_route' => 'myapp_comptabilite_ajouter',);
                }

                // myapp_comptabilite_supprimer
                if (0 === strpos($pathinfo, '/intranet/admin/comptabilite') && preg_match('#^/intranet/admin/comptabilite/(?P<id>[^/]+)/supprimer$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::supprimerAction',)), array('_route' => 'myapp_comptabilite_supprimer'));
                }

                // myapp_comptabilite_lister
                if (rtrim($pathinfo, '/') === '/intranet/admin/comptabilite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'myapp_comptabilite_lister');
                    }

                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::listerAction',  '_route' => 'myapp_comptabilite_lister',);
                }

                // myapp_comptabilite_voir
                if (0 === strpos($pathinfo, '/intranet/admin/comptabilite/bill') && preg_match('#^/intranet/admin/comptabilite/bill/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::voirAction',)), array('_route' => 'myapp_comptabilite_voir'));
                }

                // myapp_comptabilite_voirEssence
                if (0 === strpos($pathinfo, '/intranet/admin/comptabilite/bill/autre') && preg_match('#^/intranet/admin/comptabilite/bill/autre/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::voirEssenceAction',)), array('_route' => 'myapp_comptabilite_voirEssence'));
                }

                // myapp_satisfaction_ajouter
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/satisfaction$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::ajouterAction',)), array('_route' => 'myapp_satisfaction_ajouter'));
                }

                // myapp_satisfaction_remerciement
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/remerciement$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::emailAction',)), array('_route' => 'myapp_satisfaction_remerciement'));
                }

                // myapp_satisfaction_equipe
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/satisfaction_equipe$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::equipeAction',)), array('_route' => 'myapp_satisfaction_equipe'));
                }

                // myapp_service_ajouter
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/services$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::creerServiceAction',)), array('_route' => 'myapp_service_ajouter'));
                }

                // myapp_service_supprimerService
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<idd>[^/]+)/(?P<id>[^/]+)/services/supprimer$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::supprimerServiceAction',)), array('_route' => 'myapp_service_supprimerService'));
                }

                // myapp_estimation_voirClient
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/estimation$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\EstimationController::voirClientAction',)), array('_route' => 'myapp_estimation_voirClient'));
                }

                // myapp_estimation_suivant
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/estimation/suivant$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\EstimationController::suivantAction',)), array('_route' => 'myapp_estimation_suivant'));
                }

                // myapp_estimation_creerService
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/estimation/ajouter$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::creerServiceAction',)), array('_route' => 'myapp_estimation_creerService'));
                }

                // myapp_contrat_ajouter
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/contrat$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::ajouterAction',)), array('_route' => 'myapp_contrat_ajouter'));
                }

                // myapp_contrat_supprimerService
                if (0 === strpos($pathinfo, '/intranet/admin') && preg_match('#^/intranet/admin/(?P<id>[^/]+)/(?P<idd>[^/]+)/supprimer$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::supprimerServiceAction',)), array('_route' => 'myapp_contrat_supprimerService'));
                }

                // myapp_contrat_lister
                if ($pathinfo === '/intranet/admin/contrat/liste') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerAction',  '_route' => 'myapp_contrat_lister',);
                }

                // myapp_contrat_listerEstimation
                if ($pathinfo === '/intranet/admin/contrat/liste-Estimation') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerEstimationAction',  '_route' => 'myapp_contrat_listerEstimation',);
                }

                // myapp_contrat_listerAnnule
                if ($pathinfo === '/intranet/admin/contrat/liste-Annule') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerAnnuleAction',  '_route' => 'myapp_contrat_listerAnnule',);
                }

                // myapp_contrat_voir
                if (0 === strpos($pathinfo, '/intranet/admin/contrat/voir') && preg_match('#^/intranet/admin/contrat/voir/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::voirAction',)), array('_route' => 'myapp_contrat_voir'));
                }

                // myapp_contrat_pdf
                if ($pathinfo === '/intranet/testpdf') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::pdfAction',  '_route' => 'myapp_contrat_pdf',);
                }

                // myapp_production_start
                if (0 === strpos($pathinfo, '/intranet/admin/production') && preg_match('#^/intranet/admin/production/(?P<id>[^/]+)/start/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'myapp_production_start');
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::startAction',)), array('_route' => 'myapp_production_start'));
                }

                // myapp_production_stop
                if (0 === strpos($pathinfo, '/intranet/admin/production') && preg_match('#^/intranet/admin/production/(?P<id>[^/]+)/stop/(?P<test>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::stopAction',)), array('_route' => 'myapp_production_stop'));
                }

                // myapp_production_stat
                if (0 === strpos($pathinfo, '/intranet/admin/production/stat') && preg_match('#^/intranet/admin/production/stat/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::statAction',)), array('_route' => 'myapp_production_stat'));
                }

                // myapp_map_voir
                if ($pathinfo === '/intranet/admin/map/voir') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::voirToutClientAction',  '_route' => 'myapp_map_voir',);
                }

                // myapp_map_journey
                if (rtrim($pathinfo, '/') === '/intranet/admin/map/jour') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'myapp_map_journey');
                    }

                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::journeyAction',  '_route' => 'myapp_map_journey',);
                }

                // myapp_map_voirClient
                if (0 === strpos($pathinfo, '/intranet/admin/map/voir') && preg_match('#^/intranet/admin/map/voir/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::voirClientAction',)), array('_route' => 'myapp_map_voirClient'));
                }

                // myapp_message_liste
                if ($pathinfo === '/intranet/admin/message/liste') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::listerAction',  '_route' => 'myapp_message_liste',);
                }

                // myapp_message_ajouter
                if ($pathinfo === '/intranet/admin/message/ajouter') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::ajouterAction',  '_route' => 'myapp_message_ajouter',);
                }

                // myapp_rdv_lister
                if ($pathinfo === '/intranet/admin/rendez-vous/liste') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerAction',  '_route' => 'myapp_rdv_lister',);
                }

                // myapp_rdv_listerRdv
                if ($pathinfo === '/intranet/admin/rendez-vous/liste-RDV') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerRdvAction',  '_route' => 'myapp_rdv_listerRdv',);
                }

                // myapp_rdv_listerRien
                if ($pathinfo === '/intranet/admin/rendez-vous/liste-Rien') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerRienAction',  '_route' => 'myapp_rdv_listerRien',);
                }

                // myapp_rdv_listerDone
                if ($pathinfo === '/intranet/admin/rendez-vous/liste-Done') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerDoneAction',  '_route' => 'myapp_rdv_listerDone',);
                }

                // myapp_rdv_listerSeconde
                if ($pathinfo === '/intranet/admin/rendez-vous/Second-service') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerSecondeAction',  '_route' => 'myapp_rdv_listerSeconde',);
                }

                // myapp_rdv_listerAnnee
                if ($pathinfo === '/intranet/admin/rendez-vous/2013') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerAnneeAction',  '_route' => 'myapp_rdv_listerAnnee',);
                }

                // myapp_client_index
                if ($pathinfo === '/intranet/admin/mail/liste') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::indexAction',  '_route' => 'myapp_client_index',);
                }

                // myapp_clientContrat_voir
                if (0 === strpos($pathinfo, '/intranet/admin/contrat_client/voir') && preg_match('#^/intranet/admin/contrat_client/voir/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientContratController::voirAction',)), array('_route' => 'myapp_clientContrat_voir'));
                }

                // myapp_dashboard_principal
                if ($pathinfo === '/intranet/admin/dashboard') {
                    return array (  '_controller' => 'MyApp\\ApBundle\\Controller\\DashboardController::voirAction',  '_route' => 'myapp_dashboard_principal',);
                }

            }

            if (0 === strpos($pathinfo, '/group')) {
                // fos_user_group_list
                if ($pathinfo === '/group/list') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_group_list;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
                }
                not_fos_user_group_list:

                // fos_user_group_new
                if ($pathinfo === '/group/new') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
                }

                // fos_user_group_show
                if (preg_match('#^/group/(?P<groupname>[^/]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_group_show;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',)), array('_route' => 'fos_user_group_show'));
                }
                not_fos_user_group_show:

                // fos_user_group_edit
                if (preg_match('#^/group/(?P<groupname>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',)), array('_route' => 'fos_user_group_edit'));
                }

                // fos_user_group_delete
                if (preg_match('#^/group/(?P<groupname>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_group_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',)), array('_route' => 'fos_user_group_delete'));
                }
                not_fos_user_group_delete:

            }

            if (0 === strpos($pathinfo, '/')) {
                // console
                if (rtrim($pathinfo, '/') === '/console') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_console;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'console');
                    }

                    return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  '_route' => 'console',);
                }
                not_console:

                // console_exec
                if (0 === strpos($pathinfo, '/console') && preg_match('#^/console(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_console_exec;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',)), array('_route' => 'console_exec'));
                }
                not_console_exec:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
