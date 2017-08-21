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
include_once "core/Site/Navbar.php";
include_once "core/Site/Modelos.php";
include_once "core/Site/Producto.php";
include_once "core/Site/Vehiculos.php";
include_once "core/Site/Agencias.php";
include_once "core/Site/Blog.php";
include_once "core/Site/Sitio.php";

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
    $app->get("/vehiculos/{modelo}", "ControlVehiculos:__invoke");

    // BLOG
    $app->get("/news", "ControlBlog:__invoke");
    //$app->get("/news/{agencia}/{detalle}", "ControlBlogDetails:__invoke");
    $app->get("/news/british-track-day", "ControlBlogDetailsBritishTrackDay:__invoke");
    $app->get("/news/jaguar-land-rover/sibarita-masters", "ControlBlogDetailsSibariaMasters:__invoke");
    $app->get("/news/jaguar/night-experience", "ControlBlogDetailsJaguarNight:__invoke");
    $app->get("/news/jaguar-land-rover/servicio-jaguar-land-rover", "ControlBlogDetailsServico:__invoke");
    $app->get("/news/jaguar-land-rover/save-the-date", "ControlBlogDetailsSaveTheDate:__invoke");
    $app->get("/news/jaguar/track-day", "ControlBlogDetailsTrackDay:__invoke");
    $app->get("/news/jaguar/compra-inteligente", "ControlBlogCompraInteligente:__invoke");

    // PRUEBA DE MANEJO
    $app->get("/agenda/prueba-de-manejo", "ControlTestDrive:__invoke");
    $app->get("/agenda/prueba-de-manejo/{producto}", "ControlTestDriveByModel:__invoke");

    // FINANCIAMIENTO
    $app->get("/financiamiento", "ControlFinancing:__invoke");
    $app->get("/financiamiento/{producto}", "ControlFinancingModel:__invoke");

    // CONCESIONARIAS
    $app->get("/agencia/jaguar/{agencia}", "ControlAgencieContact:__invoke");

    $app->get("/servicio", "ControlServicio:__invoke");
    $app->get("/refacciones", "ControlRefacciones:__invoke");
    //$app->get("/servicio/jaguar/guadalajara", "ControlServiceGdl:__invoke");
    //$app->get("/servicio/jaguar/country", "ControlServiceCountry:__invoke");
    
    $app->get("/aviso-de-privacidad", "ControlPrivacyNotice:__invoke");
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
        private $bases, $router, $curl, $template, $navbar, $modelo, $producto, $agencias, $blog, $sitio;
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
            // Navbar
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
            $this->sitio = new Sitio();
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
        **/
        public function getVehicles() {
            return $this->vehicles;
        }
        /**
         * @return  Site Navbar   With its related methods and performance.
        **/
        public function getNavbar() {
            return $this->navbar;
        }
        /**
         * @return  Site Models   With its related methods and performance.
        **/
        public function getModelo() {
            return $this->modelo;
        }
        /**
         * @return  Site Products   With its related methods and performance.
        **/
        public function getProducto() {
            return $this->producto;
        }
        /**
         * @return  Site Agencies   With its related methods and performance.
        **/
        public function getAgencias() {
            return $this->agencias;
        }
        /**
         * @return  Site Blog   With its related methods and performance.
        **/
        public function getBlog() {
            return $this->blog;
        }
        /**
         * @return  Site   With its related methods and performance.
        **/
        public function getSitio() {
            return $this->sitio;
        }
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            $banners = parent::getSitio()->getBanners();
            parent::getTemplate()->addToMasterConfigArray('banpa', $banners);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlVehiculos extends ControlMaster {
        public function __construct() {
            parent::__construct(
                array(
                    "title" => _LOC . " VEHICULOS",
                    "title_header" => _LOC . " VEHICULOS"
                ),
                array(),
                "vehiculos/_modelos.twig"
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            $modelo = parent::getRouter()->getArgs('modelo');
            $detalle = parent::getSitio()->getModeloDetails($modelo);
            parent::getTemplate()->addToMasterConfigArray('mdopa', $detalle);
            
            $modelo = $args["modelo"];
            $modelo = str_replace("-", " ", strtoupper($modelo));

            parent::getTemplate()->addToMasterConfigArray("title", "Modelo JAGUAR " . $modelo);
            parent::getTemplate()->addToMasterConfigArray("title_header", "Modelo JAGUAR " . $modelo);
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Modelo: JAGUAR " . $modelo,
                "Modelo: JAGUAR " . $modelo,
                "Modelo: JAGUAR " . $modelo,
                _HOST . ""
            );
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    
    
    // CONTROL NEWS
    class ControlBlog extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "News",
                    "title_header" => "News"
                ),
                array(),
                "blog/_blog.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: NEWS",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: NEWS",
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            // BLOG
            $news = parent::getBlog()->getBlogArray();
            parent::getTemplate()->addToMasterConfigArray('newpa', $news);
            //echo "<pre>", print_r($news), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlBlogDetailsBritishTrackDay extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "British Track Day 2017",
                    "title_header" => "British Track Day 2017"
                ),
                array(),
                "blog/british-track-day/_blog.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: NEWS British Track Day 2017",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: NEWS British Track Day 2017",
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            // BLOG
            //$news = parent::getBlog()->getBlogArray();
            //parent::getTemplate()->addToMasterConfigArray('newpa', $news);
            //echo "<pre>", print_r($news), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlBlogDetailsSibariaMasters extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "GIRA NACIONAL SIBARITA 2016",
                    "title_header" => "GIRA NACIONAL SIBARITA 2016"
                ),
                array(),
                "blog/sibarita_masters/_blog.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: NEWS GIRA NACIONAL SIBARITA 2016",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: NEWS GIRA NACIONAL SIBARITA 2016",
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            // BLOG
            //$news = parent::getBlog()->getBlogArray();
            //parent::getTemplate()->addToMasterConfigArray('newpa', $news);
            //echo "<pre>", print_r($news), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlBlogDetailsJaguarNight extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "JAGUAR NIGHT EXPERIENCE",
                    "title_header" => "JAGUAR NIGHT EXPERIENCE"
                ),
                array(),
                "blog/jguar_night/_blog.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: NEWS JAGUAR NIGHT EXPERIENCE",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: NEWS JAGUAR NIGHT EXPERIENCE",
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            // BLOG
            //$news = parent::getBlog()->getBlogArray();
            //parent::getTemplate()->addToMasterConfigArray('newpa', $news);
            //echo "<pre>", print_r($news), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlBlogDetailsServico extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "PAPÁ MERECE EL MEJOR REGALO",
                    "title_header" => "PAPÁ MERECE EL MEJOR REGALO"
                ),
                array(),
                "blog/servicio/_blog.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: NEWS PAPÁ MERECE EL MEJOR REGALO",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: NEWS PAPÁ MERECE EL MEJOR REGALO",
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            // BLOG
            //$news = parent::getBlog()->getBlogArray();
            //parent::getTemplate()->addToMasterConfigArray('newpa', $news);
            //echo "<pre>", print_r($news), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlBlogDetailsSaveTheDate extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "GIRA NACIONAL SIBARITA",
                    "title_header" => "GIRA NACIONAL SIBARITA"
                ),
                array(),
                "blog/save-the-date/_blog.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: NEWS GIRA NACIONAL SIBARITA",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: NEWS GIRA NACIONAL SIBARITA",
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            // BLOG
            //$news = parent::getBlog()->getBlogArray();
            //parent::getTemplate()->addToMasterConfigArray('newpa', $news);
            //echo "<pre>", print_r($news), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlBlogDetailsTrackDay extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "TRACK DAY",
                    "title_header" => "TRACK DAY"
                ),
                array(),
                "blog/track-day/_blog.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: NEWS TRACK DAY",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: NEWS TRACK DAY",
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            // BLOG
            //$news = parent::getBlog()->getBlogArray();
            //parent::getTemplate()->addToMasterConfigArray('newpa', $news);
            //echo "<pre>", print_r($news), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlBlogCompraInteligente extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Plan de Financiamiento Compra Inteligente",
                    "title_header" => "Plan de Financiamiento Compra Inteligente"
                ),
                array(),
                "blog/compra-inteligente/_blog.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: NEWS Plan de Financiamiento Compra Inteligente",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: NEWS Plan de Financiamiento Compra Inteligente",
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            // BLOG
            //$news = parent::getBlog()->getBlogArray();
            //parent::getTemplate()->addToMasterConfigArray('newpa', $news);
            //echo "<pre>", print_r($news), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    
    /*
    // CONTROL NEWS
    class ControlBlogDetails extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "News",
                    "title_header" => "News"
                ),
                array(),
                "blog/details/_details.twig"
            );
        }
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            //$producto = $args["producto"];
            //$producto = str_replace("-", " ", strtoupper($producto));

            //parent::getTemplate()->addToMasterConfigArray("title", "PRUEBA DE MANEJO - " . $producto);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }*/

    // CONTROL AGENCIAS CONTACTO
    class ControlAgencieContact extends ControlMaster {
        public function __construct() {
            parent::__construct(
                array(
                    "title" => "CONCESIONARIA",
                    "title_header" => "CONCESIONARIA"
                ),
                array(),
                "agencias/_agencias.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: CONCESIONARIA",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: CONCESIONARIA",
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
            
            $navbar = parent::getNavbar()->getNavbarArray();

            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            $agencia = parent::getRouter()->getArgs('agencia');
            $detalle = parent::getAgencias()->getAgencia($agencia);
            parent::getTemplate()->addToMasterConfigArray('agnpa', $detalle);

            $agencia = $args["agencia"];
            $agencia = str_replace("-", " ", strtoupper($agencia));

            parent::getTemplate()->addToMasterConfigArray("title", "CONCESIONARIA - JAGUAR " . $agencia);

            //echo print_r($args);

            //echo "<pre>", print_r($agencia), "</pre>";
            //echo "<pre>", print_r($navbar), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    // CONTROL AGENDA PRUEBA DE MANEJO
    class ControlTestDrive extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "PRUEBA DE MANEJO",
                    "title_header" => "PRUEBA DE MANEJO"
                ),
                array(),
                "test_drive/general/_test_drive.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: PRUEBA DE MANEJO",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: PRUEBA DE MANEJO",
                _HOST . "img/banner/prueba-manejo_1600x900.jpg"
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
            
            $navbar = parent::getNavbar()->getNavbarArray();
            //$producto = parent::getProducto()->getProductoArray();

            //parent::getTemplate()->addToMasterConfigArray('propa', $producto);
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);
            //echo "<pre>", print_r($producto), "</pre>";
            //echo "<pre>", print_r($navbar), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    // CONTROL AGENDA PRUEBA DE MANEJO POR MODELO
    class ControlTestDriveByModel extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "PRUEBA DE MANEJO",
                    "title_header" => "PRUEBA DE MANEJO"
                ),
                array(),
                "test_drive/_test_drive.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: PRUEBA DE MANEJO",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: PRUEBA DE MANEJO",
                _HOST . "img/banner/prueba-manejo_1600x900.jpg"
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
            
            $navbar = parent::getNavbar()->getNavbarArray();
            $producto = parent::getProducto()->getProductoArray();

            parent::getTemplate()->addToMasterConfigArray('propa', $producto);
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);
            //echo "<pre>", print_r($producto), "</pre>";
            //echo "<pre>", print_r($navbar), "</pre>";

            $producto = $args["producto"];
            $producto = str_replace("-", " ", strtoupper($producto));

            parent::getTemplate()->addToMasterConfigArray("title", "PRUEBA DE MANEJO - " . $producto);

            //echo print_r($args);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    // CONTROL FINANCIAMIENTO
    class ControlFinancing extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Financiamiento",
                    "title_header" => "Financiamiento"
                ),
                array(),
                "financiamiento/general/_financiamiento.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: FINANCIAMIENTO",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: FINANCIAMIENTO",
                _HOST . "img/financiamiento/financiamiento-jaguar-1600x575.jpg"
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    // CONTROL SERVICIO
    class ControlServicio extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Servicio",
                    "title_header" => "Servicio"
                ),
                array(),
                "servicio/_servicio.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: SERVICIO",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: SERVICIO",
                _HOST . "img/financiamiento/financiamiento-jaguar-1600x575.jpg"
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    // CONTROL REFACCIONES
    class ControlRefacciones extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Refacciones",
                    "title_header" => "Refacciones"
                ),
                array(),
                "refacciones/_refacciones.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: REFACCIONES",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: REFACCIONES",
                _HOST . "img/financiamiento/financiamiento-jaguar-1600x575.jpg"
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    // CONTROL FINANCIAMIENTO POR MODELO
    class ControlFinancingModel extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "FINANCIAMIENTO",
                    "title_header" => "FINANCIAMIENTO"
                ),
                array(),
                "financiamiento/_financiamiento.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: FINANCIAMIENTO",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: FINANCIAMIENTO",
                _HOST . "img/financiamiento/financiamiento-jaguar-1600x575.jpg"
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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            $producto = $args["producto"];
            $producto = str_replace("-", " ", $producto);

            parent::getTemplate()->addToMasterConfigArray("title", "FINANCIAMIENTO - " . $producto);

            //echo print_r($args);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    // CONTROL SERVICE
    class ControlServiceGdl extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "SERVICIO JAGUAR GUADALAJARA",
                    "title_header" => "SERVICIO JAGUAR GUADALAJARA"
                ),
                array(),
                "servicio/gdl/_servicio.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: SERVICIO JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: SERVICIO JAGUAR GUADALAJARA",
                _HOST . "img/banner/service-pack-1600x575.jpg"
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
            
            $navbar = parent::getNavbar()->getNavbarArray();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            $agencia = parent::getRouter()->getArgs('agencia');
            $detalle = parent::getAgencias()->getAgencia($agencia);
            parent::getTemplate()->addToMasterConfigArray('agnpa', $detalle);

            //echo "<pre>", print_r($agencia), "</pre>";
            //echo "<pre>", print_r($navbar), "</pre>";

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    class ControlServiceCountry extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "SERVICIO JAGUAR COUNTRY",
                    "title_header" => "SERVICIO JAGUAR COUNTRY"
                ),
                array(),
                "servicio/country/_servicio.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "JAGUAR GUADALAJARA: SERVICIO JAGUAR COUNTRY",
                "JAGUAR GUADALAJARA",
                "JAGUAR GUADALAJARA: SERVICIO JAGUAR COUNTRY",
                _HOST . "img/banner/service-pack-1600x575.jpg"
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
            
            $navbar = parent::getNavbar()->getNavbarArray();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);

            $agencia = parent::getRouter()->getArgs('agencia');
            $detalle = parent::getAgencias()->getAgencia($agencia);
            parent::getTemplate()->addToMasterConfigArray('agnpa', $detalle);

            //echo "<pre>", print_r($agencia), "</pre>";
            //echo "<pre>", print_r($navbar), "</pre>";

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
            
            $navbar = parent::getSitio()->getNavVehiculos();
            parent::getTemplate()->addToMasterConfigArray('navpa', $navbar);
            
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }