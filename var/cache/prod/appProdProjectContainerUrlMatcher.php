<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // admin
        if ('/admin' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
        }

        if (0 === strpos($pathinfo, '/admin/token')) {
            // token_index
            if ('/admin/token' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_token_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'token_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TokenController::indexAction',  '_route' => 'token_index',);
            }
            not_token_index:

            // token_new
            if ('/admin/token/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_token_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TokenController::createToken',  '_route' => 'token_new',);
            }
            not_token_new:

            // token_delete
            if (0 === strpos($pathinfo, '/admin/token/delete=') && preg_match('#^/admin/token/delete\\=(?P<idtoken>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_token_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'token_delete')), array (  '_controller' => 'AppBundle\\Controller\\TokenController::deleteAction',));
            }
            not_token_delete:

        }

        elseif (0 === strpos($pathinfo, '/comision')) {
            // comision_index
            if ('/comision' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_comision_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'comision_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ComisionController::indexAction',  '_route' => 'comision_index',);
            }
            not_comision_index:

            // comision_new
            if ('/comision/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_comision_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ComisionController::newAction',  '_route' => 'comision_new',);
            }
            not_comision_new:

            // comision_filtrar
            if ('/comision/filtrar' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_comision_filtrar;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ComisionController::filtrarAction',  '_route' => 'comision_filtrar',);
            }
            not_comision_filtrar:

            // comision_show
            if (preg_match('#^/comision/(?P<idcomision>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_comision_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comision_show')), array (  '_controller' => 'AppBundle\\Controller\\ComisionController::showAction',));
            }
            not_comision_show:

            // comision_edit
            if (preg_match('#^/comision/(?P<idcomision>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_comision_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comision_edit')), array (  '_controller' => 'AppBundle\\Controller\\ComisionController::editAction',));
            }
            not_comision_edit:

            // comision_delete
            if (preg_match('#^/comision/(?P<idcomision>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_comision_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comision_delete')), array (  '_controller' => 'AppBundle\\Controller\\ComisionController::deleteAction',));
            }
            not_comision_delete:

        }

        // crearUsuarios
        if ('/crearusuarios' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::registerAction',  '_route' => 'crearUsuarios',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // excel
        if ('/excel' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::excelAction',  '_route' => 'excel',);
        }

        if (0 === strpos($pathinfo, '/horario')) {
            // horario_index
            if ('/horario' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_horario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'horario_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HorarioController::indexAction',  '_route' => 'horario_index',);
            }
            not_horario_index:

            // horario_new
            if ('/horario/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_horario_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HorarioController::newAction',  '_route' => 'horario_new',);
            }
            not_horario_new:

            // horario_show
            if (preg_match('#^/horario/(?P<idhorario>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_horario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_show')), array (  '_controller' => 'AppBundle\\Controller\\HorarioController::showAction',));
            }
            not_horario_show:

            // horario_edit
            if (preg_match('#^/horario/(?P<idhorario>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_horario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_edit')), array (  '_controller' => 'AppBundle\\Controller\\HorarioController::editAction',));
            }
            not_horario_edit:

            // horario_delete
            if (preg_match('#^/horario/(?P<idhorario>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_horario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_delete')), array (  '_controller' => 'AppBundle\\Controller\\HorarioController::deleteAction',));
            }
            not_horario_delete:

        }

        elseif (0 === strpos($pathinfo, '/modulo')) {
            // modulo1
            if ('/modulo1' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ModuloController::modulo1Action',  '_route' => 'modulo1',);
            }

            // modulo2
            if ('/modulo2' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_modulo2;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ModuloController::modulo2Action',  '_route' => 'modulo2',);
            }
            not_modulo2:

            // modulo3
            if ('/modulo3' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ModuloController::modulo3Action',  '_route' => 'modulo3',);
            }

        }

        elseif (0 === strpos($pathinfo, '/r')) {
            // resultados
            if ('/resultados' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ModuloController::resultadosEncAction',  '_route' => 'resultados',);
            }

            // user_registration
            if ('/register' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
            }

            if (0 === strpos($pathinfo, '/rol')) {
                // rol_index
                if ('/rol' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_rol_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rol_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RolController::indexAction',  '_route' => 'rol_index',);
                }
                not_rol_index:

                // rol_new
                if ('/rol/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_rol_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RolController::newAction',  '_route' => 'rol_new',);
                }
                not_rol_new:

                // rol_show
                if (preg_match('#^/rol/(?P<idrol>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_rol_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_show')), array (  '_controller' => 'AppBundle\\Controller\\RolController::showAction',));
                }
                not_rol_show:

                // rol_edit
                if (preg_match('#^/rol/(?P<idrol>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_rol_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'AppBundle\\Controller\\RolController::editAction',));
                }
                not_rol_edit:

                // rol_delete
                if (preg_match('#^/rol/(?P<idrol>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_rol_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_delete')), array (  '_controller' => 'AppBundle\\Controller\\RolController::deleteAction',));
                }
                not_rol_delete:

            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ('/user' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ('/user/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<iduser>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
