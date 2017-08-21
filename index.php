<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

/**
 *
 * [Initial V 1.0]
 *
**/

require_once "core/vendor/autoload.php";
include_once "core/environment/WaxConfigSet.php";

// Medigraf

include_once "core/Medigraf/Bases.php";
include_once "core/Medigraf/Router.php";
include_once "core/Medigraf/Curl.php";
include_once "core/Medigraf/Template.php";

// Site
/*include_once "core/Site/Navbar.php";
include_once "core/Site/Modelos.php";
include_once "core/Site/Producto.php";
include_once "core/Site/Vehiculos.php";
include_once "core/Site/Agencias.php";
include_once "core/Site/Blog.php";
include_once "core/Site/Sitio.php";*/

$container = new \Slim\Container();

$container["notFoundHandler"] = function($c) {
    return function($request, $response) use ($c) {
        return $c["response"]
            ->withStatus(404)
            ->withHeader("Content-Type", "text/html")
            ->write((new Control404())->getTemplate()->render());
    };
};

$app = new \Slim\App($container);

/*
 ###################################################################################################
    ROOM
 ###################################################################################################
*/
    $app->get("/", "ControlHome:__invoke");
    //$app->get("/aviso-de-privacidad", "ControlPrivacyNotice:__invoke");
    $app->run();

/**
 * CONTROL MASTER
 * 
 * This is the parent class for the general management of Slim routes.
 * This class provides methods needed to interact with the API
 * And to show the templates created by Twig.
 * This class will never be used directly by a route Slim,
 * But each Slim route will be handled by a child class class ControlMaster
 * 
 * @author 
 * @copyright 2017
**/
    abstract class ControlMaster {
        /**
         * @var Bases      $bases      new Bases()      instance
         * @var Router     $router     new Router()     instance
         * @var Curl       $curl       new Curl()       instance
         * @var Template   $template   new Template()   instance
        **/
        private $bases, $router, $curl, $template/*, $navbar, $modelo, $producto, $agencias, $blog, $sitio*/;
        /**
         * Constructor
         * 
         * This method is in charge to initialize the instances to the classes which will be used
         * The Template() instance has a default $masterConfigArray, $twigConfig which will be
         * merged with the received by constructor.
         * 
         * @param   array   $masterConfigArray  Elements to be used by the template
         * @param   array   $twigConfig         Twig configuration
         * @param   string  $name               The template to be rendered
        **/
        function __construct($masterConfigArray, $twigConfig, $name) {
            //BASES
            $this->bases   = new Bases();
            //ROUTER
            $this->router   = new Router();
            //CURL
            $this->curl     = new Curl(_HOST . "api/v1/");
            //TEMPLATE
            $this->template = new Template(
                "templates/twig/interfaz",
                $name,
                array_merge(
                    array(
                        "cache" => "cache",
                        "debug" => "true"
                    ),
                    $twigConfig
                ),
                array_merge(
                    $this->bases->getConstants(),
                    $masterConfigArray
                )
            );
            /*// Navbar
            $this->navbar = new Navbar();
            // MODELOS
            $this->modelo = new Modelos();
            // PRODUCTO
            $this->producto = new Producto();
            // AGENCIAS
            $this->agencias = new Agencias();
            // BLOG
            $this->blog = new Blog();
            //SITE
            $this->sitio = new Sitio();*/
        }
        /**
         * @return  Bases   With its related methods and performance.
        **/
        public function getBases() {
            return $this->bases;
        }
        /**
         * @return  Router   With its related methods and performance.
        **/
        public function getRouter() {
            return $this->router;
        }
        /**
         * @return  Curl   With its related methods and performance.
        **/
        public function getCurl() {
            return $this->curl;
        }
        /**
         * @return  Template   With its related methods and performance.
        **/
        public function getTemplate() {
            return $this->template;
        }
        /**
         * @return  Site Vehicles   With its related methods and performance.
        public function getVehicles() {
            return $this->vehicles;
        }
        **/
        /**
         * @return  Site Navbar   With its related methods and performance.
        public function getNavbar() {
            return $this->navbar;
        }
        **/
        /**
         * @return  Site Models   With its related methods and performance.
        public function getModelo() {
            return $this->modelo;
        }
        **/
        /**
         * @return  Site Products   With its related methods and performance.
        public function getProducto() {
            return $this->producto;
        }
        **/
        /**
         * @return  Site Agencies   With its related methods and performance.
        public function getAgencias() {
            return $this->agencias;
        }
        **/
        /**
         * @return  Site Blog   With its related methods and performance.
        public function getBlog() {
            return $this->blog;
        }
        **/
        /**
         * @return  Site   With its related methods and performance.
        public function getSitio() {
            return $this->sitio;
        }
        **/
        /**
         * This abstract method ensures that each child class will have an standar method
         * To be used like a handler of its related Slim route.
         * The declared arguments are wich a Slim handler method needs.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        abstract public function __invoke($request, $response, $args);
    }
    /**
     * CONTROL 404
    **/
    class Control404 extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "JAGUAR GUADALAJARA: Página no encontrada",
                    "title_header" => "JAGUAR GUADALAJARA: Página no encontrada"
                ),
                array(),
                "404/_404.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: Página no encontrada",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: Página no encontrada",
                _HOST . "img/logo/logo_jaguar.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
        }   
    }
    /**
     * CONTROL HOME
    **/
    class ControlHome extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => _LOC,
                    "title_header" => _LOC
                ),
                array(),
                "home/_home.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                _LOC,
                _LOC,
                _LOC,
                _HOST . "img/logo/logo_jaguar.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    // CONTROL PRIVACY NOTICE
    class ControlPrivacyNotice extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "AVISO DE PRIVACIDAD",
                    "title_header" => "AVISO DE PRIVACIDAD"
                ),
                array(),
                "privacidad/_privacidad.twig"
            );
            //Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "SEMINUEVOS PREMIUM: AVISO DE PRIVACIDAD", 
                "SEMINUEVOS PREMIUM", 
                "SEMINUEVOS PREMIUM: AVISO DE PRIVACIDAD",
                _HOST . "img/logo/logo_jaguar.png"
            );

        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());
            
            /*$navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);*/
            
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }