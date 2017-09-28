<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comision_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ComisionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comision/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comision_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ComisionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comision/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comision_filtrar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ComisionController::filtrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comision/filtrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comision_show' => array (  0 =>   array (    0 => 'idcomision',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ComisionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcomision',    ),    1 =>     array (      0 => 'text',      1 => '/comision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comision_edit' => array (  0 =>   array (    0 => 'idcomision',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ComisionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcomision',    ),    2 =>     array (      0 => 'text',      1 => '/comision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comision_delete' => array (  0 =>   array (    0 => 'idcomision',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ComisionController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcomision',    ),    1 =>     array (      0 => 'text',      1 => '/comision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crearUsuarios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crearusuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'excel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::excelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/excel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HorarioController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horario/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HorarioController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horario/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_show' => array (  0 =>   array (    0 => 'idhorario',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HorarioController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idhorario',    ),    1 =>     array (      0 => 'text',      1 => '/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_edit' => array (  0 =>   array (    0 => 'idhorario',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HorarioController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idhorario',    ),    2 =>     array (      0 => 'text',      1 => '/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_delete' => array (  0 =>   array (    0 => 'idhorario',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HorarioController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idhorario',    ),    1 =>     array (      0 => 'text',      1 => '/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modulo1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ModuloController::modulo1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modulo1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modulo2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ModuloController::modulo2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modulo2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modulo3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ModuloController::modulo3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modulo3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultados' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ModuloController::resultadosEncAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resultados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RolController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rol/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RolController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rol/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_show' => array (  0 =>   array (    0 => 'idrol',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RolController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idrol',    ),    1 =>     array (      0 => 'text',      1 => '/rol',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_edit' => array (  0 =>   array (    0 => 'idrol',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RolController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idrol',    ),    2 =>     array (      0 => 'text',      1 => '/rol',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_delete' => array (  0 =>   array (    0 => 'idrol',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RolController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idrol',    ),    1 =>     array (      0 => 'text',      1 => '/rol',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'token_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TokenController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/token/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'token_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TokenController::createToken',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/token/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'token_delete' => array (  0 =>   array (    0 => 'idtoken',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TokenController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idtoken',    ),    1 =>     array (      0 => 'text',      1 => '/admin/token/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'iduser',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iduser',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'iduser',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iduser',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'iduser',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iduser',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
