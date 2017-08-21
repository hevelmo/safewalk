<?php
/**
 * Sitio
 */
class Sitio
{
    /**
     * Sitio
     */
    // Banner
    private $banner, $nav_vehiculos, $nav_servicios, $nav_agencias, $modelosArray, $blog_list, $blog, $blog_detaills, $agencias;
    function __construct() {
    	$this->banner = array(
    		array(
    			'id' => '1',
    			'key' => 'british-season',
    			'name' => 'BRITISH SEASON',
    			'on_video' => array(
    				'class' => 'video'
    			),
    			'pictures' => array(
    				'650' => 'banner_BS-jaguar_650x277.jpg',
    				'900' => 'banner_BS-jaguar_900x586.jpg',
    				'1600' => 'banner_BS-jaguar_1600x900.jpg'
    			),
    			'text_main' => array(
    				'title' => 'BRITISH SEASON'
    			),
    			'subtitle' => array(
    				'text_sub' => array(
    					'subtitle' => 'BONOS HASTA DE $50,000.'
    				)
    			),
    			'links' => array(
    				'primary' => array(
    					'int' => 'host',
    					'href' => 'files/British-jaguar.pdf',
    					'target' => '_blank',
    					'title' => 'MÁS INFORMACIÓN'
    				),
    				'secondary' => array(
    				)
    			),
    			'video_player' => array(
    				'title' => 'VideoWebXFBritish.mp4',
    				'formato' => array(
    					'mp4' => array(
    						'1080' => 'hd720p/VideoWebXFBritish.mp4',
    						'360' => 'mobilehi/VideoWebXFBritish.mp4',
    						'480' => 'web/VideoWebXFBritish.mp4',
    						'720' => 'hd720p/VideoWebXFBritish.mp4',
    						'src' => 'hd720p/VideoWebXFBritish.mp4'
    					),
    					'web' => array(
    						'1080' => 'hd720p/VideoWebXFBritish.webm',
    						'360' => 'mobilehi/VideoWebXFBritish.webm',
    						'480' => 'webm/VideoWebXFBritish.webm',
    						'720' => 'hd720p/VideoWebXFBritish.webm',
    						'src' => 'hd720p/VideoWebXFBritish.webm'	
    					)
    				),
    				'pictures' => array(
    					'650' => 'banner_BS-jaguar_650x277.jpg',
    					'900' => 'banner_BS-jaguar_900x586.jpg',
    					'1600' => 'banner_jaguarxf-1600x900.jpg'
    				)
    			)
    		),
    		array(
    			'id' => '2',
    			'key' => 'verano-el-verano-jaguar',
    			'name' => 'Vive el Verano de tu vida en Jaguar',
    			'pictures' => array(
    				'650' => 'banner_jaguar_promo_f_pace_650x277.jpg',
    				'900' => 'banner_jaguar_promo_f_pace_900x586.jpg',
    				'1600' => 'banner_jaguar_promo_f_pace_1600x900.jpg'
    			),
    			'text_main' => array(
    				'title' => 'HASTA UN 20% DE DESCUENTO'
    			),
    			'subtitle' => array(
    				'text_sub' => array(
    					'subtitle' => 'EN UNIDADES NUEVAS.'
    				)
    			),
    			'links' => array(
    				'primary' => array(
    					'ext' => 'server',
    					'href' => 'http://seminuevospremium.com.mx/cero-kilometros',
    					'target' => '_blank',
    					'title' => 'CONÓCELOS'
    				),
    				'secondary' => array(
    				)
    			)
    		),
    		array(
    			'id' => '3',
    			'key' => 'plan-de-financiamiento',
    			'name' => 'Plan de Financiamiento Compra Inteligente',
    			'pictures' => array(
    				'650' => 'banner_comprainteligente-jaguar_650x277.jpg',
    				'900' => 'banner_comprainteligente-jaguar_900x586.jpg',
    				'1600' => 'banner_comprainteligente-jaguar_1600x900.jpg'
    			),
    			'text_main' => array(
    				'title' => 'PLAN DE FINANCIAMIENTO'
    			),
    			'subtitle' => array(
    				'text_sub' => array(
    					'subtitle' => 'COMPRA INTELIGENTE.'
    				)
    			),
    			'links' => array(
    				'primary' => array(
    					'int' => 'host',
    					'href' => 'news/jaguar/compra-inteligente',
    					'title' => 'MÁS INFORMACIÓN'
    				),
    				'secondary' => array(
    				)
    			)
    		),
    		array(
    			'id' => '4',
    			'key' => 'jaguar-fpace',
    			'name' => 'JAGUAR F-PACE',
    			'pictures' => array(
    				'650' => 'banner_jaguar-FPace_650x277.jpg',
    				'900' => 'banner_jaguar-FPace_900x586.jpg',
    				'1600' => 'banner_jaguar-FPace_1600x900.jpg'
    			),
    			'text_main' => array(
    				'title' => 'JAGUAR F-PACE'
    			),
    			'subtitle' => array(
    				'text_sub' => array(
    					'subtitle' => 'TIPO DE CAMBIO PREFERENCIAL DE $16.50.'
    				)
    			),
    			'links' => array(
    				'primary' => array(
	    				'int' => 'host',
	    				'href' => 'files/INCENTIVO_F-PACE_PREMIO_GDL-baja.pdf',
	    				'title' => 'MÁS INFORMACIÓN'
    				),
    				'secondary' => array(
    				)
    			)
    		),
    		array(
    			'id' => '5',
    			'key' => 'jaguar-xf',
    			'name' => 'JAGUAR XF',
    			'on_video' => array(
    				'class' => 'video'
    			),
    			'pictures' => array(
    				'650' => 'banner_jaguarxf-650x277.jpg',
    				'900' => 'banner_jaguarxf-900x586.jpg',
    				'1600' => 'banner_jaguarxf-1600x900.jpg'
    			),
    			'text_main' => array(
    				'title' => 'JAGUAR XF'
    			),
    			'subtitle' => array(
    				'text_sub' => array(
    					'subtitle' => 'FUSIONA EL ESTILO DE UN DEPORTIVO CON EL LUJO.'
    				)
    			),
    			'links' => array(
    				'primary' => array(
    					'int' => 'host',
    					'href' => 'vehiculos/xf',
    					'title' => 'MÁS INFORMACIÓN'
    				),
    				'secondary' => array(
    				)
    			),
    			'video_player' => array(
    				'title' => 'L462 EMO CAROUSEL 160916 selected_1.mp4',
    				'formato' => array(
    					'mp4' => array(
    						'1080' => 'hd720p/jaguarxf.webm',
    						'360' => 'mobilehi/jaguarxf.webm',
    						'480' => 'webm/jaguarxf.webm',
    						'720' => 'hd720p/jaguarxf.webm',
    						'src' => 'hd720p/jaguarxf.webm'
    					),
    					'web' => array(
    						'1080' => 'hd720p/jaguarxf.webm',
    						'360' => 'mobilehi/jaguarxf.webm',
    						'480' => 'webm/jaguarxf.webm',
    						'720' => 'hd720p/jaguarxf.webm',
    						'src' => 'hd720p/jaguarxf.webm'	
    					)
    				)
    			),
    			'pictures' => array(
    				'650' => 'banner_jaguarxf-400x345.jpg',
					'900' => 'banner_jaguarxf-900x586.jpg',
					'1600' => 'banner_jaguarxf-1600x900.jpg'
    			)
    		),
    		array(
    			'id' => '6',
    			'key' => 'jaguar-xe',
    			'name' => 'JAGUAR XE',
    			'pictures' => array(
    				'650' => 'banner_jaguar-XE_650x277.jpg',
    				'900' => 'banner_jaguar-XE_900x586.jpg',
    				'1600' => 'banner_jaguar-XE_1600x900.jpg'
    			),
    			'text_main' => array(
    				'title' => 'JAGUAR XE'
    			),
    			'subtitle' => array(
    				'text_sub' => array(
    					'subtitle' => 'DESDE $4,618 MENSUALES Ó 48 MESES SIN INTERESES.'
    				)
    			),
    			'links' => array(
    				'primary' => array(
    					'int' => 'host',
    					'href' => 'files/INCENTIVO_XE_GDL-baja.pdf',
    					'title' => 'MÁS INFORMACIÓN'
    				),
    				'secondary' => array(
    				)
    			)
    		),
    		array(
    			'id' => '7',
    			'key' => 'jaguar-ftype',
    			'name' => 'JAGUAR F-TYPE',
    			'pictures' => array(
    				'650' => 'banner_ftype_650x277.jpg',
                    '900' => 'banner_ftype_900x586.jpg',
                    '1600' => 'banner_ftype_1600x900.jpg'
    			),
    			'text_main' => array(
    				'title' => 'JAGUAR <br> F-TYPE'
    			),
    			'subtitle' => array(
    				'text_sub' => array(
    					'subtitle' => 'PARA EL TRABAJO. PARA LA AVENTURA.'
    				)
    			),
    			'links' => array(
    				'primary' => array(
    					'int' => 'host',
    					'href' => 'vehiculos/f-type',
    					'title' => 'EXPLORAR'
    				),
    				'secondary' => array(
    				)
    			)
    		),
    		array(
    			'id' => '8',
    			'key' => 'f-pace',
    			'name' => 'F-PACE',
    			'pictures' => array(
    				'650' => 'banner_jaguarFPace_650x277.jpg',
    				'900' => 'banner_jaguarFPace_900x586.jpg',
    				'1600' => 'banner_jaguarFPace_1600x900.jpg'
    			),
    			'text_main' => array(
    				'title' => 'F-PACE'
    			),
    			'subtitle' => array(
    				'text_sub' => array(
    					'subtitle' => 'GANA DOS PREMIOS EN <br> WORLD CAR AWARDS 2017.'
    				)
    			),
    			'links' => array(
    				'primary' => array(
    					'ext' => 'server',
    					'href' => 'http://media.jaguarlandrover.com/news/2017/04/jaguar-f-pace-voted-2017-best-and-most-beautiful-car-world?q=&start=0&brand=corporate',
    					'target' => '_blank',
    					'title' => 'MÁS INFORMACIÓN'
    				),
    				'secondary' => array(
    				)
    			)
    		)
    	);
		$this->nav_vehiculos = array(
            array(
                'key' => 'xe',
                'id' => '1',
                'name' => 'XE',
                'thumb' => 'thumb-xe.png',
                'url_interna' => array(
                    'url_target' => 'vehiculos/xe'
                ),
                /*
                'url_externa' => array(
                    'url_target' => 'http://www.jaguar-mexico.com/jaguar-range/xe/index.html'
                ),
                'target' => '_blank'
                */
                'target' => '_self'
            ),
            array(
                'key' => 'xf',
                'id' => '2',
                'name' => 'XF',
                'thumb' => 'thumb-xf-2011.png',
                'url_interna' => array(
                    'url_target' => 'vehiculos/xf'
                ),
                'target' => '_self'
            ),/*
            array(
                'key' => 'xj',
                'id' => '3',
                'name' => 'XJ',
                'thumb' => 'thumb-xj-2011.png',
                'url_interna' => array(
                    'url_target' => 'vehiculos/xj'
                ),
                'target' => '_self'
            ),*/
            array(
                'key' => 'f-pace',
                'id' => '4',
                'name' => 'F-PACE',
                'thumb' => 'thumb-f-pace.png',
                'url_interna' => array(
                    'url_target' => 'vehiculos/f-pace'
                ),
                /*
                'url_externa' => array(
                    'url_target' => 'http://www.jaguar-mexico.com/jaguar-range/f-pace/index.html'
                ),
                'target' => '_blank'
                */
                'target' => '_self'
            ),
            array(
                'key' => 'f-type',
                'id' => '5',
                'name' => 'F-Type',
                'thumb' => 'thumb-ftype.png',
                'url_interna' => array(
                    'url_target' => 'vehiculos/f-type'
                ),
                'target' => '_self'
            )
		);
		$this->nav_servicios = array(
		);
		$this->nav_agencias = array(
		);
		$this->modelosArray = array(
            'xe' => array(
                'key' => 'xe',
                'id' => '1',
                'name' => 'JAGUAR XE',
                'total' => '3',
                'banner' => array(
                    array(
                        'id' => '1',
                        'alt' => 'JAGUAR XE Un nuevo concepto de sedán deportivo',
                        'sliders' => array(
                            '650' => 'banner_XE1_650x277.jpg',
                            '900' => 'banner_XE1_900x586.jpg',
                            '1600' => 'banner_XE1_1600x900.jpg'
                        ),
                        'titulo' => 'JAGUAR XE ',
                        'subtitle' => 'Un nuevo concepto de sedán deportivo'
                    ),
                    array(
                        'id' => '2',
                        'alt' => 'JAGUAR XE GOBIERNA LAS CARRETERAS',
                        'sliders' => array(
                            '650' => 'banner_XE2_650x277.jpg',
                            '900' => 'banner_XE2_900x586.jpg',
                            '1600' => 'banner_XE2_1600x900.jpg'
                        ),
                        'titulo' => 'JAGUAR XE',
                        'subtitle' => 'GOBIERNA LAS CARRETERAS'
                    ),
                    array(
                        'id' => '3',
                        'alt' => 'GARANTÍA JAGUAR VELAMOS POR SU TRANQUILIDAD',
                        'sliders' => array(
                            '650' => 'banner_XE3_650x277.jpg',
                            '900' => 'banner_XE3_900x586.jpg',
                            '1600' => 'banner_XE3_900x586.jpg'
                        ),
                        'titulo' => 'GARANTÍA JAGUAR',
                        'subtitle' => 'VELAMOS POR SU TRANQUILIDAD'
                    )
                ),
                'details' => array(
                    'jaguar' => array(
                        'no_select' => array(
                            'sub_model' => 'EL XE LO CAMBIA TODO',
                            'primary' => '',
                            'parrafos' => array(
                                array(
                                    'p' => 'El sedán deportivo más avanzado, eficiente y refinado jamás fabricado por Jaguar.'
                                ),
                                array(
                                    'p' => 'Es el primero de una nueva generación de vehículos construidos sobre la base de la innovadora arquitectura de aluminio avanzada de Jaguar. Esta estructura, fabricada en aluminio ligero, no sólo crea una carrocería increíblemente robusta, sino que contribuye a lograr el ansiado equilibrio entre potencia y control; entre refinamiento y belleza.'
                                ),
                                array(
                                    'p' => 'El XE trae consigo las últimas innovaciones, tecnologías y técnicas de diseño. Está repleto de sistemas que asisten al conductor y que mejoran la experiencia al volante. El XE reescribe las reglas. El XE es una llamada de atención a los demás vehículos de su clase.'
                                )
                            ),
                            'image_holder' => 'jaguar-xe/previews/XE-1440x960.jpg',
                            'version' => array(
                                'row' => array(
                                    array(
                                        'class_team' => 'col-md-3 col-sm-6',
                                        'id' => '1',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/xe/xe-models/index.html',
                                        'target' => '_blank',
                                        'img' => 'jaguar-xe/previews/X260_SIDEPROFILE_RED_device_desktop_Shadow_tcm135-152498_desktop_460x160.png',
                                        'alt' => 'El XE Pure es absolutamente Jaguar. Equipado con rines Turbine de 17" y 10 radios, el XE Pure está disponible con los nuevos motores 2.0 de gasolina. El interior del XE Pure puede elegirse entre tres combinaciones de colores. El acabado Gloss Black está presendiéste en el salpicadero, las puertas delanteras y la consola central.',
                                        'title' => 'XE PURE'
                                    ),
                                    array(
                                        'class_team' => 'col-md-3 col-sm-6',
                                        'id' => '2',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/xe/xe-models/xe-prestige.html',
                                        'target' => '_blank',
                                        'img' => 'jaguar-xe/previews/XE_Pure_Dark_Sapphire_17Turbine_Front_3_4_LHD-420x180_tcm135-118530_desktop_420x1803860.png',
                                        'alt' => 'Para sumar aún más lujo, el XE Prestige acoge en su interior un espacio contemporáneo magistralmente realizado con los mejores materiales.',
                                        'title' => 'XE PRESTIGE'
                                    ),
                                    array(
                                        'class_team' => 'col-md-3 col-sm-6',
                                        'id' => '3',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/xe/xe-models/xe-r-sport.html',
                                        'target' => '_blank',
                                        'img' => 'jaguar-xe/previews/XE_RSport_Glacier_White_19Star_Front_3_4_LHD-420x180_tcm135-118629_desktop_420x1803860.png',
                                        'alt' => 'Las mejoras del exterior del XE R-Sport incluyen una rejilla negra con contorno en Noble Chrome, defensa frontal deportivo con secciones en Noble Chrome, estribos laterales en color de la carrocería, spoiler trasero, branquias laterales en acabado Noble Chrome con inscripción «R-Sport» y rines de aleación Star de 18" y cinco radios. El habitáculo refleja el temperamento dinámico del XE R-Sport, con asientos deportivos especiales en colores inspirados en los coches de carreras con inscripción «R-Sport» en los embellecedores de los estribos delanteros y el volante. El acabado interior Luxtec se complementa con inserciones Technical Mesh. Los asientos totalmente tapizados en piel son opcionales. Disponible con motores XE de gasolina.',
                                        'title' => 'XE R-SPORT'
                                    ),
                                    array(
                                        'class_team' => 'col-md-3 col-sm-6',
                                        'id' => '4',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/xe/xe-models/xe-s.html',
                                        'target' => '_blank',
                                        'img' => 'jaguar-xe/previews/XE_S_Quartzite_20Propellor_Front_3_4_LHD-420x180_tcm135-118657_desktop_420x1803860.png',
                                        'alt' => 'Este es el sedán deportivo XE definitivo, con toda emoción, la potencia y las prestaciones del F-TYPE gracias a su increíble motor 3.0 V6 gasolina de 340 HP. Su carrocería sugiere su extraordinaria potencia. El diseño exterior incluye paragolpes frontal «S» con inserciones Gloss Black, estribos laterales en dos tonos, faldón trasero Gloss Black y un spoiler esculpido que redefine la línea del maletero. Con una magnífica gama de colores interiores y una selección de materiales de la más alta calidad, el XE S es un vehículo sencillamente sublime. Los rines de aleación de 18" de serie pueden reemplazarse por rines opcionales de 19" y 20".',
                                        'title' => 'XE S'
                                    )
                                )
                            ),
                            'actions' => array(
                                'catalogo' => array(
                                /*
                                    'class_action' => 'col-md-3 col-sm-6',
                                    'href' => 'jaguar-xf/catalogo-xf.pdf',
                                    'title' => 'Catálogo-xf.pdf',
                                    'title_light' => 'Descarga',
                                    'title_strong' => 'CATÁLOGO'
                                */
                                ),
                                'ficha_tecnica' => array(
                                /*
                                    'class_action' => 'col-md-3 col-sm-6',
                                    'href' => 'jaguar-xf/FICHA_TECNICA_JAGUAR_XF_2016.pdf',
                                    'title' => 'Ficha-Técnica-xf.pdf',
                                    'title_light' => 'Descarga',
                                    'title_strong' => 'FICHA TECNICA'
                                */
                                ),
                                'testdrive' => array(
                                    'class_action' => 'col-md-4 col-md-offset-2 col-sm-6',
                                    'href' => 'agenda/prueba-de-manejo/xe',
                                    'title_light' => 'Agendar',
                                    'title_strong' => 'PRUEBA DE MANEJO'
                                ),
                                'financing' => array(
                                    'class_action' => 'col-md-4 col-sm-6',
                                    'href' => 'financiamiento/xe',
                                    'title_light' => 'PIDE TU',
                                    'title_strong' => 'COTIZACIÓN'
                                )
                            )
                        )
                    )
                )
            ),
            'xf' => array(
                'key' => 'xf',
                'id' => '2',
                'name' => 'Jaguar XF',
                'total' => '2',
                'banner' => array(
                    array(
                        'id' => '1',
                        'alt' => 'JAGUAR XF ESTILO, PRESTACIONES, CONFORT.',
                        'sliders' => array(
                            '650' => 'banner_xf_650x277.jpg',
                            '900' => 'banner_xf_900x586.jpg',
                            '1600' => 'banner_xf_1600x900.jpg'
                        ),
                        'titulo' => 'JAGUAR XF',
                        'subtitle' => 'ESTILO, PRESTACIONES, CONFORT'
                    ),
                    array(
                        'id' => '2',
                        'alt' => 'JAGUAR XF INTERIORES CONFORT, LUJO Y CREDENCIALES DEPORTIVAS DE INTERIORES.',
                        'sliders' => array(
                            '650' => 'JAG_XF_INT_650x277.jpg',
                            '900' => 'JAG_XF_INT_900x586.jpg',
                            '1600' => 'JAG_XF_INT_1600x900.jpg'
                        ),
                        'title' => 'XF INTERIORES',
                        'subtitle' => 'CONFORT, LUJO Y CREDENCIALES DEPORTIVAS DE INTERIORES.'
                    )
                ),
                'details' => array(
                    'jaguar' => array(
                        'no_select' => array(
                            'sub_model' => 'UN ESTILO CONTEMPORÁNEO Y PROGRESIVO',
                            'primary' => '',
                            'parrafos' => array(
                                array(
                                    'p' => 'El nuevo XF posee una línea firme y atlética. Su temperamento enérgico queda plasmado gracias a su diseño de curvas equilibradas a la perfección. La imponente rejilla vertical y la elevación del capó allí donde se aloja el motor son un anticipo visual de su potencia. Un único y elegante arco recorre la carrocería de principio a fin, culminando en los faros traseros LED envolventes con gráficos inspirados en el F-TYPE.'
                                )
                            ),
                            'image_holder' => 'jaguar-xf/previews/XF-1440x960.jpg',
                            'version' => array(
                                'row' => array(
                                    array(
                                        'class_team' => 'col-md-3 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/xf/models/index.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-xf/previews/X260_SIDEPROFILE_AMMONITE_device_desktop_Shadow_tcm135-152494_desktop_460x160.png',
                                        'alt' => 'XF R-SPORT',
                                        'title' => 'XF R-SPORT'
                                    ),
                                    array(
                                        'class_team' => 'col-md-3 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/xf/models/index.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-xf/previews/X260_SIDEPROFILE_GLACIERWHITE_device_desktop_Shadow_tcm135-152496_desktop_460x160.png',
                                        'alt' => 'XF S',
                                        'title' => 'XF S'
                                    ),
                                    array(
                                        'class_team' => 'col-md-3 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/xf/models/index.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-xf/previews/X260_SIDEPROFILE_RED_device_desktop_Shadow_tcm135-152498_desktop_460x160.png',
                                        'alt' => 'XF PURE',
                                        'title' => 'XF PURE'
                                    ),
                                    array(
                                        'class_team' => 'col-md-3 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/xf/models/index.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-xf/previews/X260_SIDEPROFILE_BLKBRY_device_desktop_Shadow_tcm135-152502_desktop_460x160.png',
                                        'alt' => 'XF PRESTIGE',
                                        'title' => 'XF PRESTIGE'
                                    )
                                )
                            ),
                            'actions' => array(
                                'catalogo' => array(
                                    'class_action' => 'col-md-3 col-sm-6',
                                    'href' => 'jaguar-xf/catalogo-xf.pdf',
                                    'title' => 'Catálogo-xf.pdf',
                                    'title_light' => 'Descarga',
                                    'title_strong' => 'CATÁLOGO'
                                ),
                                'ficha_tecnica' => array(
                                    'class_action' => 'col-md-3 col-sm-6',
                                    'href' => 'jaguar-xf/FICHA_TECNICA_JAGUAR_XF_2016.pdf',
                                    'title' => 'Ficha-Técnica-xf.pdf',
                                    'title_light' => 'Descarga',
                                    'title_strong' => 'FICHA TECNICA'
                                ),
                                'testdrive' => array(
                                    'class_action' => 'col-md-3 col-sm-6',
                                    'href' => 'agenda/prueba-de-manejo/xf',
                                    'title_light' => 'Agendar',
                                    'title_strong' => 'PRUEBA DE MANEJO'
                                ),
                                'financing' => array(
                                    'class_action' => 'col-md-3 col-sm-6',
                                    'href' => 'financiamiento/xf',
                                    'title_light' => 'PIDE TU',
                                    'title_strong' => 'COTIZACIÓN'
                                )
                            )
                        )
                    )
                )
            ),
            'f-pace' => array(
                'key' => 'f-pace',
                'id' => '3',
                'name' => 'Jaguar F-Pace',
                'total' => '2',
                'banner' => array(
                    array(
                        'id' => '1',
                        'alt' => 'Combina una conducción deportiva y una belleza espectacular',
                        'sliders' => array(
                            '650' => 'banner_fpace1_650x277.jpg',
                            '900' => 'banner_fpace1_900x586.jpg',
                            '1600' => 'banner_fpace1_1600x900.jpg'
                        ),
                        'titulo' => 'EL NUEVO <br> F-PACE ',
                        'subtitle' => 'Combina una conducción deportiva y una belleza espectacular'
                    ),
                    array(
                        'id' => '2',
                        'alt' => 'FUNCIONALIDAD Y ESPACIO',
                        'sliders' => array(
                            '650' => 'banner_fpace2_650x277.jpg',
                            '900' => 'banner_fpace2_900x586.jpg',
                            '1600' => 'banner_fpace2_1600x900.jpg'
                        ),
                        'titulo' => 'JAGUAR F-PACE',
                        'subtitulo' => 'FUNCIONALIDAD Y ESPACIO'
                    )
                ),
                'details' => array(
                    'jaguar' => array(
                        'no_select' => array(
                            'sub_model' => 'ADN DEPORTIVO',
                            'primary' => '',
                            'parrafos' => array(
                                array(
                                    'p' => 'Inspirado en el F-TYPE, el nuevo Jaguar F-PACE es un SUV de altas prestaciones con el ADN de un deportivo. Desde el capó prominente hasta los poderosos flancos traseros, su potente imagen lo diferencia del resto y consigue que no pase desapercibido en carretera. El F-PACE reinventa la energía, la robustez y la pureza de formas del F-TYPE.'
                                )
                            ),
                            'image_holder' => 'jaguar-f-pace/previews/FPace-1440x960.jpg',
                            'version' => array(
                                'row' => array(
                                    'first' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-pace/models/index.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-pace/previews/SP-17MY_FPACE_JT2-PRESTIGE_MEN_LIGHTWEIGHTSPOKE-WHEELS-device_desktop-460x160_tcm135-186286_desktop_460x1605e1f.png',
                                        'alt' => 'Un nivel superior de lujo con un magnífico interior con tapicería en piel.',
                                        'title' => 'F-PACE PRESTIGE'
                                    ),
                                    'second' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-pace/models/index.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-pace/previews/SP-17MY_FPACE_JT3-RSPORT_CAH_BIONIC-WHEELS-device_desktop-460x160_tcm135-186282_desktop_460x1605e1f.png',
                                        'alt' => 'XF R-SPORT',
                                        'title' => 'F-PACE R-SPORT'
                                    ),
                                    'third' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-pace/models/index.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-pace/previews/SP-17MY_FPACE_JT4FE-FIRSTEDITION_JHK_c54p-desktop-460x160_tcm135-186283_desktop_460x1607b30.png',
                                        'alt' => 'XF R-SPORT',
                                        'title' => 'F-PACE S'
                                    )
                                )
                            ),
                            'actions' => array(
                                'catalogo' => array(
                                /*
                                    'class_action' => 'col-md-3 col-sm-6',
                                    'href' => 'jaguar-xf/catalogo-xf.pdf',
                                    'title' => 'Catálogo-xf.pdf',
                                    'title_light' => 'Descarga',
                                    'title_strong' => 'CATÁLOGO'
                                */
                                ),
                                'ficha_tecnica' => array(
                                /*
                                    'class_action' => 'col-md-3 col-sm-6',
                                    'href' => 'jaguar-xf/FICHA_TECNICA_JAGUAR_XF_2016.pdf',
                                    'title' => 'Ficha-Técnica-xf.pdf',
                                    'title_light' => 'Descarga',
                                    'title_strong' => 'FICHA TECNICA'
                                */
                                ),
                                'testdrive' => array(
                                    'class_action' => 'col-md-4 col-md-offset-2 col-sm-6',
                                    'href' => 'agenda/prueba-de-manejo/f-pace',
                                    'title_light' => 'Agendar',
                                    'title_strong' => 'PRUEBA DE MANEJO'
                                ),
                                'financing' => array(
                                    'class_action' => 'col-md-4 col-sm-6',
                                    'href' => 'financiamiento/f-pace',
                                    'title_light' => 'PIDE TU',
                                    'title_strong' => 'COTIZACIÓN'
                                )
                            )
                        )
                    )
                )
            ),
            'f-type' => array(
                'kye' => 'f-type',
                'id' => '4',
                'name' => 'Jaguar F-TYPE',
                'total' => '2',
                'banner' => array(
                    array(
                        'id' => '1',
                        'alt' => 'PURO AUTOMÓVIL DEPORTIVO JAGUAR',
                        'sliders' => array(
                            '650' => 'JAG_SEL_FTYPE_COUPE_650x277.jpg',
                            '900' => 'JAG_SEL_FTYPE_COUPE_900x586.jpg',
                            '1600' => 'JAG_SEL_FTYPE_COUPE_1600x900.jpg'
                        ),
                        'titulo' => 'F-TYPE COUPÉ',
                        'subtitulo' => 'PURO AUTOMÓVIL DEPORTIVO JAGUAR',
                    ),
                    array(
                        'id' => '2',
                        'alt' => 'PURO PLACER AL VOLANTE',
                        'sliders' => array(
                            '650' => 'JAG_SEL_FTYPE_CONV_650x277.jpg',
                            '900' => 'JAG_SEL_FTYPE_CONV_900x586.jpg',
                            '1600' => 'JAG_SEL_FTYPE_CONV_1600x900.jpg'
                        ),
                        'titulo' => 'F-TYPE CONVERTIBLE',
                        'subtitulo' => 'PURO PLACER AL VOLANTE',
                    )
                ),
                'details' => array(
                    'jaguar' => array(
                        'select' => array(
                            'image_holder' => array(
                                'convertible' => array(
                                    'imagen' => 'select_f_type_conv.png',
                                    'url_target' => 'f-type-convertible',
                                    'title' => 'F-TYPE CONVERTIBLE'
                                ),
                                'coupe' => array(
                                    'imagen' => 'select_f_type_coupe.png',
                                    'url_target' => 'f-type-coupe',
                                    'title' => 'F-TYPE COUPÉ'
                                )
                            )
                        )
                    )
                )
            ),
            'f-type-convertible' => array(
                'key' => 'convertible',
                'id' => '1',
                'name' => 'F-TYPE CONVERTIBLE',
                'total' => '2',
                'banner' => array(
                    array(
                        'id' => '1',
                        'alt' => 'PURO PLACER AL VOLANTE',
                        'sliders' => array(
                            '650' => 'JAG_FTYPE_CONV_EXT_650x277.jpg',
                            '900' => 'JAG_FTYPE_CONV_EXT_900x586.jpg',
                            '1600' => 'JAG_FTYPE_CONV_EXT_1600x575.jpg'
                        ),
                        'titulo' => 'F-TYPE CONVERTIBLE',
                        'subtitle' => 'PURO PLACER AL VOLANTE'
                    ),
                    array(
                        'id' => '2',
                        'alt' => 'LA QUINTA ESENCIA DEL TEMPERAMENTO BRITÁNICO.',
                        'sliders' => array(
                            '650' => 'JAG_FTYPE_CONV_INT_650x277.jpg',
                            '900' => 'JAG_FTYPE_CONV_INT_900x586.jpg',
                            '1600' => 'JAG_FTYPE_CONV_INT_1600x575.jpg'
                        ),
                        'titulo' => 'F-TYPE CONVERTIBLE INTERIORES',
                        'subtitle' => 'LA QUINTA ESENCIA DEL TEMPERAMENTO BRITÁNICO.'
                    )
                ),
                'details' => array(
                    'jaguar' => array(
                        'no_select' => array(
                            'sub_model' => 'CONVERTIBLE',
                            'primary' => '',
                            'parrafos' => array(
                                array(
                                    'p' => 'El F-TYPE es un deportivo pura sangre Jaguar capaz de disparar las pulsaciones.'
                                ),
                                array(
                                    'p' => 'La fluidez y espectacularidad de sus prestaciones se une a una respuesta inmediata, una conducción ágil y precisa junto con el refinamiento y la funcionalidad necesarios para la vida diaria.'
                                )
                            ),
                            'image_holder' => 'jaguar-f-type-conv/previews/JAG_PREV_FTYPE_CONV_1440x960.jpg',
                            'version' => array(
                                'row' => array(
                                    'first' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-type/f-type-models/f-type.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-type-conv/previews/F_TYPE_CONVERTIBLE_PEL_VELA_STANDARD16MY_2560X1120-device_desktop-420x180_tcm135-136502_desktop_420x180.png',
                                        'alt' => 'El F-TYPE es un deportivo purasangre Jaguar capaz de disparar las pulsaciones. ',
                                        'title' => 'F-TYPE CONVERTIBLE'
                                    ),
                                    'second' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-type/f-type-models/f-type-s.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-type-conv/previews/F_TYPE_CONVERTIBLE_16MY_2560X1120_S_AWD_ITRED-device_desktop-420x180_tcm135-140104_desktop_420x180.png',
                                        'alt' => 'Una conducción que seduce, un diseño cautivador y más potencia.',
                                        'title' => 'F-TYPE S CONVERTIBLE'
                                    ),
                                    'third' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-type/f-type-models/f-type-s-convertible-awd.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-type-conv/previews/F_TYPE_CONVERTIBLE_16MY_2560X1120_S_AWD_ITRED-device_desktop-420x180_tcm135-140104_desktop_420x180.png',
                                        'alt' => 'El F-TYPE V8 S combina prestaciones con un aplomo impecable y ofrece una formidable sensación de confianza al volante en todas las situaciones.',
                                        'title' => 'F-TYPE V8 S CONVERTIBLE'
                                    )
                                )
                            ),
                            'actions' => array(
                                'return' => array(
                                    'class_action' => 'col-md-3',
                                    'href' => 'vehiculos/f-type',
                                    'ico' => '<i class="fa fa-arrow-left"></i>',
                                    'return' => 'REGRESAR'
                                ),
                                'catalogo' => array(
                                ),
                                'ficha_tecnica' => array(
                                    'class_action' => 'col-md-3',
                                    'href' => 'f-type/convertible/FICHA_TECNICA_JAGUAR_F-TYPE_CONVERTIBLE_2016.pdf',
                                    'title' => 'Ficha-Técnica-F-Type.pdf',
                                    'title_light' => 'DESCARGAR',
                                    'title_strong' => 'FICHA TECNICA'
                                ),
                                'testdrive' => array(
                                    'class_action' => 'col-md-3',
                                    'href' => 'agenda/prueba-de-manejo/f-type/convertible',
                                    'title_light' => 'AGENDAR',
                                    'title_strong' => 'PRUEBA DE MANEJO'
                                ),
                                'financing' => array(
                                    'class_action' => 'col-md-3',
                                    'href' => 'financiamiento/f-type/convertible',
                                    'title_light' => 'PIDE TU',
                                    'title_strong' => 'COTIZACIÓN'
                                )
                            )
                        )
                    )
                )
            ),
            'f-type-coupe' => array(
                'key' => 'coupe',
                'id' => '2',
                'name' => 'F-TYPE COUPÉ',
                'total' => '2',
                'banner' => array(
                    array(
                        'id' => '1',
                        'alt' => 'PURO AUTOMÓVIL DEPORTIVO JAGUAR',
                        'sliders' => array(
                            '650' => 'JAG_FTYPE_COUPE_EXT_650x277.jpg',
                            '900' => 'JAG_FTYPE_COUPE_EXT_900x586.jpg',
                            '1600' => 'JAG_FTYPE_COUPE_EXT_1600x900.jpg'
                        ),
                        'titulo' => 'F-TYPE COUPÉ',
                        'subtitle' => 'PURO AUTOMÓVIL DEPORTIVO JAGUAR'
                    ),
                    array(
                        'id' => '2',
                        'alt' => 'PODEROSAS FORMAS Y BELLAS PROPORCIONES.',
                        'sliders' => array(
                            '650' => 'JAG_FTYPE_COUPE_INT_650x277.jpg',
                            '900' => 'JAG_FTYPE_COUPE_INT_900x586.jpg',
                            '1600' => 'JAG_FTYPE_COUPE_INT_1600x900.jpg'
                        ),
                        'titulo' => 'F-TYPE COUPÉ INTERIORES',
                        'subtitle' => 'PODEROSAS FORMAS Y BELLAS PROPORCIONES.'
                    )
                ),
                'details' => array(
                    'jaguar' => array(
                        'no_select' => array(
                            'sub_model' => 'COUPÉ',
                            'primary' => '',
                            'parrafos' => array(
                                array(
                                    'p' => 'UN DEPORTIVO GENUINAMENTE JAGUAR'
                                ),
                                array(
                                    'p' => 'El F-TYPE es potente, ágil y elegante: un auténtico deportivo Jaguar diseñado para ofrecer unas prestaciones soberbias y una respuesta instantánea; el último descendiente de un linaje excepcional.'
                                )
                            ),
                            'image_holder' => 'jaguar-f-type-coupe/previews/JAG_PREV_FTYPE_COUPE_1440x960.jpg',
                            'version' => array(
                                'row' => array(
                                    'first' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-type/f-type-models/f-type-coupe.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-type-coupe/previews/F-Type_Coupe_ST1_UltimateBlack_Vela_LHD-device_desktop-420x180_tcm135-47096_desktop_420x180.png',
                                        'alt' => 'Un deportivo genuinamente Jaguar. El F-TYPE Coupé combina unas prestaciones electrizantes, una respuesta instantánea y una conducción ágil y precisa, junto con el refinamiento y la funcionalidad de un maletero con una capacidad de hasta 407 litros.',
                                        'title' => 'F-TYPE COUPÉ'
                                    ),
                                    'second' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-type/f-type-models/f-type-s-coupe.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-type-coupe/previews/F-Type_Coupe_ST2_RhodiumSilver_UPDATED_PROPELLER_LHD-device_desktop-420x180_tcm135-68842_desktop_420x180.png',
                                        'alt' => 'Una conducción que atrapa y conecta y un diseño impresionante.',
                                        'title' => 'F-TYPE S COUPÉ'
                                    ),
                                    'third' => array(
                                        'class_team' => 'col-md-4 col-sm-6',
                                        'url' => 'http://www.jaguar-mexico.com/jaguar-range/f-type/f-type-models/f-type-r-coupe.html',
                                        'target' => '_target',
                                        'img' => 'jaguar-f-type-coupe/previews/F-Type_Coupe_ST4_POLARIS_WHITE_UPDATED_GYRODINE_LHD-device_desktop-420x180_tcm135-68843_desktop_420x180.png',
                                        'alt' => 'El deportivo por excelencia: F-TYPE V8 R. El increíble motor Jaguar 5.0 V8 Sobrealimentado de 550 HP y 680 Nm de par, ofrece unas prestaciones en estado puro y 100% aprovechables.',
                                        'title' => 'F-TYPE V8 R COUPÉ'
                                    )
                                )
                            ),
                            'actions' => array(
                                'return' => array(
                                    'class_action' => 'col-md-3',
                                    'href' => 'vehiculos/f-type',
                                    'ico' => '<i class="fa fa-arrow-left"></i>',
                                    'return' => 'REGRESAR'
                                ),
                                'ficha_tecnica' => array(
                                    'class_action' => 'col-md-3',
                                    'href' => 'f-type/coupe/FICHA_TECNICA_JAGUAR_F-TYPE_CONVERTIBLE_2016.pdf',
                                    'title' => 'FICHA_TECNICA_JAGUAR_F-TYPE_COUPE_2016.pdf',
                                    'title_light' => 'DESCARGAR',
                                    'title_strong' => 'FICHA TECNICA'
                                ),
                                'testdrive' => array(
                                    'class_action' => 'col-md-3',
                                    'href' => 'agenda/prueba-de-manejo/f-type/coupe',
                                    'title_light' => 'AGENDAR',
                                    'title_strong' => 'PRUEBA DE MANEJO'
                                ),
                                'financing' => array(
                                    'class_action' => 'col-md-3',
                                    'href' => 'financiamiento/f-type/coupe',
                                    'title_light' => 'PIDE TU',
                                    'title_strong' => 'COTIZACIÓN'
                                )
                            )
                        )
                    )
                )
            )
		);
		$this->blog_list = array(
		);
		$this->blog = array(
		);
		$this->blog_detaills = array(
		);
		$this->agencias = array(
		);
    }
    // BANNERS
	public function getBanners() {
		return $this->banner;
	}
	// MENU VEHICULOS
	public function getNavVehiculos() {
		return $this->nav_vehiculos;
	}
	// MENU SERVICIOS
	public function getNavServicios() {
		return $this->nav_servicios;
	}
	// MENU AGENCIAS
	public function getNavAgencias() {
		return $this->nav_agencias;
	}
    // MODELOS
    public function getModelos() {
        return $this->modelosArray;
    }
    // MODELOS DETAILS
    public function getModeloDetails($key) {
        /*
        $modelo = array();
        $condition = false;
        for ($idx = 0; $idx < count($this->modelosArray) && $condition == false;  $idx++) {
            $condition = ($key == $this->modelosArray[$idx]['key']);
            if ( $condition == true ) {
                $modelo = $this->modelosArray[$idx];
            }
        }
        return $modelo;
        */
        $models = array();
        if (array_key_exists($key, $this->modelosArray)) {
            $models = $this->modelosArray[$key];
            //echo "<pre>", print_r($models), "</pre>";
        }
        return $models;
    }
	// BLOG LIST
	public function getBlogList() {
		return $this->blog_list;
	}
	// BLOG DETAILS
	public function getBlogDetails($key) {
		$new = array();
		$condition = false;
		for ($idx = 0; $idx < count($this->blog_list) && $condition == false;  $idx++) {
			$condition = ($key == $this->blog_list[$idx]['key']);
			if ( $condition == true ) {
				$new = $this->blog_list[$idx];
			}
		}
		return $new;
	}
    // AGENCIAS
    public function getAgencias() {
        return $this->agencias;
    }
    // AGENCIAS DETAILS
    public function getAgenciasDetails($key) {
        $agencie = array();
        $condition = false;
        for ($idx = 0; $idx < count($this->agencias) && $condition == false;  $idx++) {
            $condition = ($key == $this->agencias[$idx]['key']);
            if ( $condition == true ) {
                $agencie = $this->agencias[$idx];
            }
        }
        return $agencie;
    }
}