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

// SITIO
//include_once "core/Site/Sitio.php";

$container = new \Slim\Container();

$container["notFoundHandler"] = function($c) {
    return function($request, $response) use ($c) {
        return $c["response"]->withStatus(404)
                             ->withHeader("Content-Type", "text/html")
                             ->write((new Control404())->getTemplate()->render());
    };
};

$app = new \Slim\App($container);

/**
 * [ROOM]
**/

// HOME
$app->get("/", "ControlHome:__invoke");

/**
 * CONTROL MASTER
 * 
 * This is the parent class for the general management of Slim routes.
 * This class provides methods needed to interact with the API
 * And to show the templates created by Twig.
 * This class will never be used directly by a route Slim,
 * But each Slim route will be handled by a child class class ControlMaster
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
**/
    abstract class ControlMaster {
        /**
         * @var Bases      $bases      new Bases() instance
         * @var Router     $router     new Router() instance
         * @var Curl       $curl       new Curl() instance
         * @var Template   $template   new Template() instance
        **/
            private $bases, $router, $curl, $template/*, $sitio*/;        
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
                $this->bases    = new Bases();
                $this->router   = new Router();
                $this->curl     = new Curl("api/v1/");
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
                // SITIO
                //$this->sitio = new Sitio();
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
         * @return  Site   With its related methods and performance.
            public function getSitio() {
                return $this->sitio;
            }
        **/
    }
/**
 * CONTROL 404
 * 
 * This is a ControlMaster child class which is in charge to render a template
 * when a no recognized route by Slim, is invoked.
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
**/
    class Control404 extends ControlMaster {
        /**
         * This method just invokes the constuctor of the parent to intialize the instances.
        **/
            function __construct() {
                parent::__construct(
                    array(
                        "title" => _LOC . " | Página no encontrada"
                    ), 
                    array(), 
                    "404/_main.twig"
                );
                //Facebook Metatags
                /*parent::getTemplate()->makeFacebookTags(
                    _LOC . ": Página no encontrada.", 
                    _LOC,
                    _LOC,
                    _HOST . "img/logo/safe_walk.png"
                );*/
                //(Site Name)
                //(Name Default)
                //(Description)
                //(Site Logo)
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
                //parent::getRouter()->setRouteParams($request, $response, $args);
                //parent::lastUrl();
            }
    }
/**
 * CONTROL HOME
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
**/
    class ControlHome extends ControlMaster {
        /**
         * This method just invokes the constuctor of the parent to intialize the instances.
        **/
            function __construct() {
                parent::__construct(
                    array(
                        "title" => _LOC
                    ), 
                    array(), 
                    "_home/_main.twig"
                );
                //Facebook Metatags
                /*parent::getTemplate()->makeFacebookTags(
                    _LOC, 
                    _LOC,
                    _LOC,
                    _HOST . "img/logo/safe_walk.png"
                );*/
            }        
        /**
         * Just catches the Slim route and renders the related template.
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