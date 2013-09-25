<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        '_assetic_deecb50' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'deecb50',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/deecb50.js',    ),  ),),
        '_assetic_deecb50_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'deecb50',    'pos' => '0',    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/deecb50_jquery-ui-1.10.1_1.js',    ),  ),),
        '_assetic_deecb50_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'deecb50',    'pos' => '1',    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/deecb50_bootstrap_2.js',    ),  ),),
        '_assetic_deecb50_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'deecb50',    'pos' => '2',    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/deecb50_jquery.maskedinput_3.js',    ),  ),),
        '_assetic_deecb50_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'deecb50',    'pos' => '3',    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/deecb50_date_4.js',    ),  ),),
        '_assetic_1ea8096' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1ea8096',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/1ea8096.js',    ),  ),),
        '_assetic_1ea8096_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1ea8096',    'pos' => '0',    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/1ea8096_jquery.raty_1.js',    ),  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'myapp_utilisateur_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MyApp\\UtilisateurBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/login',    ),  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/login_check',    ),  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/logout',    ),  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/profile/',    ),  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/profile/edit',    ),  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/register/',    ),  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/register/check-email',    ),  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/register/confirm',    ),  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/register/confirmed',    ),  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/resetting/request',    ),  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/resetting/send-email',    ),  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/resetting/check-email',    ),  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/resetting/reset',    ),  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/change-password/change-password',    ),  ),),
        'myapp_choisir_langue' => array (  0 =>   array (    0 => 'langue',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::choisirLangueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'langue',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/choisir-langue',    ),  ),),
        'myapp_client_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::rechercherAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/client/rechercher',    ),  ),),
        'myapp_contrat_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::rechercherAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/contrat/rechercher',    ),  ),),
        'myapp_client_date' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::dateAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/client/date',    ),  ),),
        'myapp_client_lister' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/client/',    ),  ),),
        'client' => array (  0 =>   array (  ),  1 =>   array (    'page' => '1',    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/client/',    ),  ),),
        'client_paginated' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => 'e',      2 => '[^e]+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/client/pag',    ),  ),),
        'myapp_client_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/client/ajouter',    ),  ),),
        'myapp_client_note' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::noteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_client_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifier',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin/client',    ),  ),),
        'myapp_client_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin/client',    ),  ),),
        'myapp_production_ajouter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin/production',    ),  ),),
        'myapp_production_lister' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/production/',    ),  ),),
        'myapp_production_booke' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::bookeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/production/booke',    ),  ),),
        'myapp_production_termine' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::termineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/production/termine',    ),  ),),
        'myapp_production_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/production/modifier',    ),  ),),
        'myapp_production_comptabilite' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::comptabiliteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/production/comptabilite',    ),  ),),
        'myapp_comptabilite_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/comptabilite/ajouter',    ),  ),),
        'myapp_comptabilite_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin/comptabilite',    ),  ),),
        'myapp_comptabilite_lister' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/comptabilite/',    ),  ),),
        'myapp_comptabilite_voir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/comptabilite/bill',    ),  ),),
        'myapp_comptabilite_voirEssence' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::voirEssenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/comptabilite/bill/autre',    ),  ),),
        'myapp_satisfaction_ajouter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/satisfaction',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_satisfaction_remerciement' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::emailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/remerciement',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_satisfaction_equipe' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::equipeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/satisfaction_equipe',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_service_ajouter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::creerServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/services',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_service_supprimerService' => array (  0 =>   array (    0 => 'idd',    1 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::supprimerServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/services/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idd',    ),    3 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_estimation_voirClient' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\EstimationController::voirClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estimation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_estimation_suivant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\EstimationController::suivantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estimation/suivant',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_estimation_creerService' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::creerServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estimation/ajouter',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_contrat_ajouter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_contrat_supprimerService' => array (  0 =>   array (    0 => 'id',    1 => 'idd',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::supprimerServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idd',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/intranet/admin',    ),  ),),
        'myapp_contrat_lister' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/contrat/liste',    ),  ),),
        'myapp_contrat_listerEstimation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerEstimationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/contrat/liste-Estimation',    ),  ),),
        'myapp_contrat_listerAnnule' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerAnnuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/contrat/liste-Annule',    ),  ),),
        'myapp_contrat_voir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/contrat/voir',    ),  ),),
        'myapp_contrat_pdf' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/testpdf',    ),  ),),
        'myapp_production_start' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::startAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/start/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intranet/admin/production',    ),  ),),
        'myapp_production_stop' => array (  0 =>   array (    0 => 'id',    1 => 'test',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::stopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'test',    ),    1 =>     array (      0 => 'text',      1 => '/stop',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/intranet/admin/production',    ),  ),),
        'myapp_production_stat' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::statAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/production/stat',    ),  ),),
        'myapp_map_voir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::voirToutClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/map/voir',    ),  ),),
        'myapp_map_journey' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::journeyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/map/jour/',    ),  ),),
        'myapp_map_voirClient' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::voirClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/map/voir',    ),  ),),
        'myapp_message_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/message/liste',    ),  ),),
        'myapp_message_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/message/ajouter',    ),  ),),
        'myapp_rdv_lister' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/rendez-vous/liste',    ),  ),),
        'myapp_rdv_listerRdv' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerRdvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/rendez-vous/liste-RDV',    ),  ),),
        'myapp_rdv_listerRien' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerRienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/rendez-vous/liste-Rien',    ),  ),),
        'myapp_rdv_listerDone' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerDoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/rendez-vous/liste-Done',    ),  ),),
        'myapp_rdv_listerSeconde' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerSecondeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/rendez-vous/Second-service',    ),  ),),
        'myapp_rdv_listerAnnee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerAnneeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/rendez-vous/2013',    ),  ),),
        'myapp_client_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/mail/liste',    ),  ),),
        'myapp_clientContrat_voir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\ClientContratController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intranet/admin/contrat_client/voir',    ),  ),),
        'myapp_dashboard_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\ApBundle\\Controller\\DashboardController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet/admin/dashboard',    ),  ),),
        'fos_user_group_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/group/list',    ),  ),),
        'fos_user_group_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/group/new',    ),  ),),
        'fos_user_group_show' => array (  0 =>   array (    0 => 'groupname',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'groupname',    ),    1 =>     array (      0 => 'text',      1 => '/group',    ),  ),),
        'fos_user_group_edit' => array (  0 =>   array (    0 => 'groupname',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'groupname',    ),    2 =>     array (      0 => 'text',      1 => '/group',    ),  ),),
        'fos_user_group_delete' => array (  0 =>   array (    0 => 'groupname',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'groupname',    ),    2 =>     array (      0 => 'text',      1 => '/group',    ),  ),),
        'console' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/console/',    ),  ),),
        'console_exec' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'POST',    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/console',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
