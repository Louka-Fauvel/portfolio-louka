<?php
namespace controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Ubiquity\attributes\items\router\Post;
 use Ubiquity\attributes\items\router\Route;

//require 'app/mail/testmail.php';

 /**
  * Controller MainController
  */
class MainController extends \controllers\ControllerBase{

    #[Route("_default", name: "index.home")]
	public function index(){
        $this->loadView('MainController/index.html');
	}

	#[Route(path: "/a_propos",name: "main.a_propos")]
	public function A_propos(){

		$this->loadView('MainController/A_propos.html');

	}


	#[Route(path: "/parcours",name: "main.parcours")]
	public function Parcours(){
		$experiences = [
            ["id"=>0, "img"=>"Fime_logo.png", "titre"=>"Fime : Agence spécialisée dans la sécurisation des moyens de paiements",
                "date"=>"Décembre 2022 - Février 2023",
                "semaines"=>"7 semaines", "lieu"=>"Caen, Normandie",
                "info"=>"Collaboration à plusieurs projets avec Angular et Python. Réalisation de tests d'intégration avec Pipeline.",
                "titrelangage"=>"Langages informatiques utilisés :", "infolangage"=>"Angular, Python",
                "competences"=>[
                    "text"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution",
                    "sous-texts"=>[
                        [
                            "text"=>"traiter des demandes concernant les applications",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-2/myDocuments/bloc1-support/a_1-2#stage-chez-fime",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences2"=>[
                    "text"=>"Travailler en mode projet",
                    "sous-texts"=>[
                        [
                            "text"=>"planifier les activités",
                            "lien"=>"",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences3"=>[
                    "text"=>"Mettre à disposition des utilisateurs un service informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"réaliser les tests d'intégration et d'acceptation d'un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#stage-chez-fime",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences4"=>[
                    "text"=>"Organiser son développement professionnel",
                    "sous-texts"=>[
                        [
                            "text"=>"mettre en place son environnement d'apprentissage personnel",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-6/myDocuments/bloc1-support/a_1-6#stage-chez-fime",
                            "fin"=>true,
                        ],
                    ],
                ],
                "compte-rendu"=>"Stage_Fime.pdf"],

            ["id"=>1, "img"=>"Altilog.webp", "titre"=>"Altilog : Agence de développement", "date"=>"Décembre 2021 - Février 2022",
                "semaines"=>"7 semaines", "lieu"=>"Caen, Normandie",
                "info"=>"Découverte et utilisation du Wlangage avec le logiciel WEBDEV 25 et WEBDEV 27 à travers différents projets de l'entreprise.",
                "titrelangage"=>"Langage informatique utilisé :", "infolangage"=>"Wlangage",
                "competences"=>[
                    "text"=>"Gérer le patrimoine informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#stage-chez-altilog",
                        ],
                        [
                            "text"=>"mettre en place et vérifier les niveaux d'habilitation associés à un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#stage-chez-altilog-1",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences2"=>[
                    "text"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution",
                    "sous-texts"=>[
                        [
                            "text"=>"traiter des demandes concernant les applications",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-2/myDocuments/bloc1-support/a_1-2#stage-chez-altilog",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences3"=>[
                    "text"=>"Développer la présence en ligne de l'organisation",
                    "sous-texts"=>[
                        [
                            "text"=>"participer à l'évolution d'un site web exploitant les données de l'organisation",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-3/myDocuments/bloc1-support/a_1-3#stage-chez-altilog",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences4"=>[
                    "text"=>"Organiser son développement professionnel",
                    "sous-texts"=>[
                        [
                            "text"=>"mettre en place son environnement d'apprentissage personnel",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-6/myDocuments/bloc1-support/a_1-6#stage-chez-altilog",
                            "fin"=>true,
                        ],
                    ],
                ],
                "compte-rendu"=>"Stage_ALTILOG.pdf"],

            ["id"=>2, "img"=>"KNPLabs.jpg", "titre"=>"KNPLabs : Agence de développement", "date"=>"Mai - Juin 2021",
                "semaines"=>"5 semaines", "lieu"=>"Caen, Normandie",
                "info"=>"Approfondissement de mes connaissances sur Github, communication au sein d'une équipe avec des pull requests, 
                    utilisation des objets avec PHP et découverte du framework Symfony. Découverte du management d'une agence de développement.",
                "titrelangage"=>"Langages informatiques utilisés :", "infolangage"=>"HTML, PHP, CSS",
                "competences"=>[
                    "text"=>"Organiser son développement professionnel",
                    "sous-texts"=>[
                        [
                            "text"=>"mettre en place son environnement d'apprentissage personnel",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#stage-chez-fime",
                            "fin"=>true,
                        ],
                    ],
                ],
                "compte-rendu"=>"Stage_KNPLabs.pdf"],

            ["id"=>3, "img"=>"Erasmus.png", "titre"=>"ERASMUS + : Institut Lemonnier", "date"=>"Octobre 2019",
                "semaines"=>"1 semaine", "lieu"=>"Falkenberg, Suède",
                "info"=>"Conception et construction d'un véhicule à énergie innovante. Travail en pluridisciplinarité entre mécanique et mathématiques. 
                    Voyage jusqu’en Suède pour rejoindre les autres élèves en mobilité professionnelle. 
                    Contribution à un « congrès de spécialistes » sur ce sujet pour la première fois.",
                "titrelangage"=>"Langue de travail :", "infolangage"=>"Anglais"],

            ["id"=>4, "img"=>"Erasmus.png", "titre"=>"ERASMUS + : Institut Lemonnier", "date"=>"Mars 2019",
                "semaines"=>"1 semaine", "lieu"=>"Caen, Normandie",
                    "info"=>"Conception et construction d'un véhicule à énergie innovante. Travail en pluridisciplinarité entre mécanique et mathématiques. 
                        Accueil des élèves venant d'Espagne et de Suède. Compte-rendu du projet en réalisant un film.",
                "titrelangage"=>"Langue de travail :", "infolangage"=>"Anglais",
                "titreoutil"=>"Outil :", "infooutil"=>"Adobe Premiere"],

            ["id"=>5, "img"=>"Corlet.png", "titre"=>"Corlet : Agence de communication", "date"=>"Janvier 2017",
                "semaines"=>"1 semaine", "lieu"=>"Caen, Normandie",
                "info"=>"Observation du travail d'un graphiste. Utilisation des outils du graphiste pour créer des images.",
                "titreoutil"=>"Outil :", "infooutil"=>"Adobe Photoshop", "fin"=>true],
        ];

        $formations = [
            ["id"=>0, "img"=>"SupAvenir.png", "titre"=>"BTS SIO - CaenSup Sainte-Ursule", "date"=>"2020 - 2023",
                "lieu"=>"Caen, Normandie", "info"=>"",
                "langageoutil"=>"Langages et outils :", "infolangue"=>"HTML/CSS, PHP, Framework (Bootstrap, Ubiquity), Python, SQL, Javascript, JAVA, Flutter Dart",
                "titreconcept"=>"Concepts :", "infoconcepts"=>"Algorithmique, POO, méthode Merise"],

            ["id"=>1, "img"=>"Lemonnier.jpg", "titre"=>"Terminale STI2D SIN, section Euro - Institut Lemonnier", "date"=>"2018 - 2021",
                "lieu"=>"Caen, Normandie", "info"=>"",
                "langageoutil"=>"Langages et outils :", "infolangue"=>"Arduino, Labview",
                "titreconcept"=>"", "infoconcepts"=>"", "fin"=>true],
        ];

        $tableauCertifFormats = [
            ["id"=>0, "img"=>"certifications.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Les certifications", "position"=>"top left"],
            ["id"=>2, "img"=>"formations.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Les formations", "position"=>"top right", "fin"=>true],
        ];

        $certifications = [
            ["id"=>0, "img"=>"certif_secnumacademie.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Attestation de suivi SecNum Académie", "position"=>"top left"],
            ["id"=>1, "img"=>"certif_toeic.png", "tailleimg"=>"small", "taillemodal"=>"centered big", "nom"=>"Certificat TOEIC Listening and Reading Test", "position"=>"top center"],
            ["id"=>2, "img"=>"certif_html_css.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat HTML5 et CSS3", "position"=>"top center"],
            ["id"=>3, "img"=>"certif_javascript.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat JavaScript", "position"=>"top right", "fin"=>true],
            ["id"=>4, "img"=>"certif_app_android.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat application Android", "position"=>"top left"],
            ["id"=>5, "img"=>"certif_sql.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat SQL", "position"=>"top center"],
            ["id"=>6, "img"=>"certif_php_mysql.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat PHP et MySQL", "position"=>"top center"],
            ["id"=>7, "img"=>"certif_debut_react.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat React", "position"=>"top right", "fin"=>true],
            ["id"=>8, "img"=>"certif_symfony5.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat Symfony 5", "position"=>"top left"],
            ["id"=>9, "img"=>"certif_javascript_web.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat JavaScript web", "position"=>"top center"],
            ["id"=>10, "img"=>"certif_angular.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat Angular", "position"=>"top center"],
            ["id"=>11, "img"=>"certif_springboot.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat Spring Boot", "position"=>"top right", "fin"=>true],
            ["id"=>12, "img"=>"certif_owasp.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "nom"=>"Certificat OWASP", "position"=>"top center", "fin"=>true],
        ];

        $veilles = [
            ["id"=>0, "img"=>"logo_usedesign.png", "tailleimg"=>"small", "lien"=>"https://www.use.design/category/insights-fr/",
                "titre"=>"UX et UI design, les deux faces de l’interface utilisateur", "date"=>"19 novembre 2022", "lieu"=>"",
                "infos"=>[
                    ["p"=>[
                        [
                            "a"=>[
                                "href"=>"https://www.use.design/ux-ui-avec-use-design-agence-designer-paris/",
                                "text"=>"UX et UI design, les deux faces de l’interface utilisateur"
                            ]
                        ]
                    ]],
                    ["p"=>[
                        ["text"=>"Quelles sont les différences entre designer UX et designer UI ?"],
                    ]],
                    ["p"=>[
                        ["text"=>"Ce sont deux disciplines complémentaires qui ont pour objectif de répondre aux attentes des utilisateurs."],
                    ]],
                    ["p"=>[
                        ["text"=>"UX : expérience utilisateur (user Experience Design)"],
                    ]],
                    ["p"=>[
                        ["text"=>"UI : interface utilisateur"],
                    ]],
                    ["p"=>[
                        ["text"=>"Le "],
                        ["gras"=>"UX designer"],
                        [
                            "text"=>" analyse les besoins, les retours des utilisateurs ainsi que la finalité du produit 
                            pour créer l’architecture de l’interface. Si c’est pour un site commercial, 
                            le designer UX doit mettre en place une stratégie pour inciter les utilisateurs 
                            à acheter les produits et à les fidéliser."
                        ],
                    ]],
                    ["p"=>[
                        ["text"=>"Le "],
                        ["gras"=>"UI designer"],
                        [
                            "text"=>" se concentre sur l’aspect esthétique de l’application, du logiciel ou site web… 
                            Il veille à ce que le produit soit responsive, c'est-à-dire qu’il s’adapte au format mobile. 
                            Il est parfois en charge de la charte graphique de l’interface, du logo… 
                            Il doit rendre l'interface attractive."
                        ],
                    ]],
                    ["p"=>[
                        ["text"=>"Lequel est le plus important ?"],
                    ]],
                    ["p"=>[
                        ["text"=>"Les deux."],
                    ]],
                    ["p"=>[
                        ["text"=>"Certains concepteurs sont à la fois UX et UI designer."],
                    ]],
                ]
            ],

            ["id"=>1, "img"=>"logo_usedesign.png", "tailleimg"=>"small", "lien"=>"https://www.use.design/category/insights-fr/",
                "titre"=>"Innovations UI / design", "date"=>"30 octobre 2022", "lieu"=>"",
                "infos"=>[
                    ["p"=>[
                        [
                            "a"=>[
                                "href"=>"https://www.use.design/lagence-de-design-digital-et-le-design-numerique/",
                                "text"=>"L’agence de design digital et le design numérique"
                            ]
                        ]
                    ]],
                    ["p"=>[
                        ["gras"=>"Le design digital : un métier à plusieurs facettes"],
                    ]],
                    ["ul"=>[
                        [
                            "li"=>[
                                ["text"=>"Le design graphique qui ne touche qu’au graphisme d’un outil digital."],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Le UX design qui s’attache à rendre l’expérience utilisateur 
                                    d’un site web, d’un logiciel en ligne ou d’une application mobile mémorable afin 
                                    de transformer ses utilisateurs en clients fidèles."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Le UI design qui a pour but de rendre l'esthétique d’un outil digital 
                                    agréable, efficace et adaptée à tout support numérique."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Le design thinking qui a pour objectif de tirer le maximum du potentiel 
                                    créatif des collaborateurs en utilisant les différentes techniques du design."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Le design sprint qui vise à repenser des produits et services ou en créer 
                                    de nouveaux en concevant des prototypes en à peine 5 jours."
                                ],
                            ]
                        ],
                    ]],
                    ["p"=>[
                        ["gras"=>"Les outils du design numérique"],
                    ]],
                    ["ul"=>[
                        [
                            "li"=>[
                                ["text"=>"Procreate : une application de graphisme digital pour iPad."],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Myfonts : un site internet proposant des polices de caractères 
                                    téléchargeables sous format digital."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Clip Studio paint : des applications logicielles de peinture numérique."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Adobe Creative Cloud tools : applications et outils de design graphique 
                                    et de retouche photo notamment."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Adobe Photoshop : application de retouche photo et de design digital."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Adobe Illustrator : logiciel de design graphique."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Wacom tools : tablettes et outils de design graphique."
                                ],
                            ]
                        ],
                    ]],
                    ["p"=>[
                        ["gras"=>"Pas de design numérique efficace sans marketing digital…"],
                    ]],
                    ["ul"=>[
                        [
                            "li"=>[
                                [
                                    "text"=>"Wishpond : est une plateforme qui permet de gérer les stratégies 
                                    marketing sans avoir besoin d’un autre outil."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Google Ads : est un outil de publicité en ligne qui facilite 
                                    la recherche de services proposés par des vendeurs."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Mail pro : aide à créer des mails professionnels pour les entreprises."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Hootsuite : est un outil qui permet de gérer la vue en même temps sur 
                                    tous les réseaux sociaux connectés à l’utilisateur."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Google Analytics : permet de faire une évaluation de la performance d’un site."
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"…"
                                ],
                            ]
                        ],
                    ]],
                    ["p"=>[
                        ["gras"=>"Le design thinking"],
                    ]],
                    ["p"=>[
                        [
                            "text"=>"Peut être traduit par \"esprit design\". C’est une méthode/concept d’innovation 
                            du travail pour tirer au maximum le potentiel créatif des collaborateurs tout en 
                            utilisant des outils du design comme :"
                        ],
                    ]],
                    ["ul"=>[
                        [
                            "li"=>[
                                [
                                    "text"=>"La carte de l’empathie"
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Le parcours utilisateur"
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Les espoirs et les craintes"
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Les vignettes d’idées"
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Le scénario la grille de priorisation"
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"La déclaration des besoins"
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Les hypothèses et questions"
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"La grille de retours"
                                ],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "text"=>"Aujourd’hui, demain et après-demain"
                                ],
                            ]
                        ],
                    ]],
                    ["p"=>[
                        [
                            "text"=>"Le webdesign peut prendre différentes formes et suis différents courants 
                            esthétiques comme dans le graphisme. 
                            Il est donc important de se tenir à jour des modes en matière de design si l’on veut créer 
                            des interfaces web ou mobiles."
                        ]
                    ]],
                ]
            ],

            ["id"=>2, "img"=>"logo_fomantic.png", "tailleimg"=>"tiny", "lien"=>"https://fomantic-ui.com/", "titre"=>"Nouveautés chez Fomantic-UI 2.9.0",
                "date"=>"23 octobre 2022", "lieu"=>"",
                "infos"=>[
                    ["p"=>[
                        [
                            "text"=>"Fomantic-UI est un framework UI qui facilite la création de sites responsives et esthétiques. 
                            Voici les dernières évolutions sur Fomantic-UI. En effet, une toute nouvelle version vient de sortir le 9 octobre 2022. 
                            Je vais vous présenter les 5 points d’évolutions qui me paraissent les plus intéressants."
                        ]
                    ]],
                    ["ul"=>[
                        [
                            "li"=>[
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/modules/flyout.html",
                                        "text"=>"Flyout"
                                    ]
                                ],
                                ["text"=>" : est un nouveau composant UI. Il est la fusion entre le composant du "],
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/modules/modal.html",
                                        "text"=>"Modal"
                                    ]
                                ],
                                ["text"=>" et du "],
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/modules/sidebar.html",
                                        "text"=>"Sidebar"
                                    ]
                                ],
                                ["text"=>". Il permet de faire afficher un contenu à partir du bord de la page superposé à la page."],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/elements/input.html",
                                        "text"=>"Input"
                                    ]
                                ],
                                ["text"=>" : supporte enfin le "],
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/elements/input.html#file-input",
                                        "text"=>"File input"
                                    ]
                                ],
                                ["text"=>" qui permet d'ajouter un ou plusieurs fichiers dans l'input."],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/modules/calendar.html",
                                        "text"=>"Calendar"
                                    ]
                                ],
                                [
                                    "text"=>" : est un champ input qui permet de sélectionner une date. 
                                    Il peut désormais entièrement modifier le format de la date avec les ",
                                ],
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/modules/calendar.html#custom-format",
                                        "text"=>"tokens"
                                    ],
                                ],
                                ["text"=>"."],
                            ]
                        ],
                        [
                            "li"=>[
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/collections/table.html",
                                        "text"=>"Table"
                                    ]
                                ],
                                ["text"=>" : est maintenant capable de "],
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/collections/table.html#scrolling",
                                        "text"=>"défiler à la verticale et à l’horizontale"
                                    ]
                                ],
                                ["text"=>" et elle peut aussi "],
                                [
                                    "a"=>[
                                        "href"=>"https://fomantic-ui.com/collections/table.html#stuck",
                                        "text"=>"bloquer"
                                    ]
                                ],
                                ["text"=>" des colonnes qui ne sont pas soumises au défilement horizontal."],
                            ]
                        ],
                    ]],
                    ["p"=>[
                        [
                            "text"=>"Fomantic-UI est un outil très utile pour la mise en page de site et application. 
                            Il a été créé par la communauté des utilisateurs de Semantic-UI. 
                            Ce dernier n’étant plus mis à jour, la communauté a décidé de poursuivre ce framework 
                            en éditant de nouvelles versions régulièrement. 
                            Je vous tiendrai au courant des prochaines évolutions."
                        ],
                    ]],
                    ["p"=>[
                        ["text"=>"Pour retrouver l’ensemble des nouvelles fonctionnalités cliquez "],
                        [
                            "a"=>[
                                "href"=>"https://fomantic-ui.com/introduction/new.html",
                                "text"=>"ici"
                            ]
                        ],
                        ["text"=>"."],
                    ]],
                ],
                "fin"=>true],
            ["id"=>4, "img"=>"logo_anssi.png", "tailleimg"=>"tiny", "lien"=>"https://www.ssi.gouv.fr/", "titre"=>"ANSSI",
                "date"=>"", "lieu"=>"",
                "infos"=>[
                    ["objectif"=>"Se maintenir informé en matière de cybersécurité."]
                ]
            ],
            ["id"=>5, "img"=>"logo_cnil.png", "tailleimg"=>"small", "lien"=>"https://www.cnil.fr/", "titre"=>"CNIL",
                "date"=>"", "lieu"=>"",
                "infos"=>[
                    ["objectif"=>"Se maintenir informé en matière de traitement des données."]
                ]
            ],
            ["id"=>6, "img"=>"symfony-logo.svg", "tailleimg"=>"medium", "lien"=>"https://symfony.com/", "titre"=>"Symfony",
                "date"=>"", "lieu"=>"",
                "infos"=>[
                    ["objectif"=>"Alerte Google pour se maintenir informé."]
                ]
            ],
            ["id"=>7, "img"=>"flutter-logo.png", "tailleimg"=>"tiny", "lien"=>"https://flutter.dev/", "titre"=>"Flutter",
                "date"=>"", "lieu"=>"",
                "infos"=>[
                    ["objectif"=>"Alerte Google pour se maintenir informé."]
                ]
            ],
            ["id"=>8, "img"=>"cropped-logo.png", "tailleimg"=>"tiny", "lien"=>"https://www.pierre-giraud.com/", "titre"=>"Pierre-Giraud",
                "date"=>"", "lieu"=>"",
                "infos"=>[
                    ["objectif"=>"Toutes vos ressources sur le développement web. Apprenez à coder en HTML, CSS, JavaScript, Python, PHP…"]
                ]
            ],
            ["id"=>9, "img"=>"E_mds.jpg", "tailleimg"=>"tiny", "lien"=>"https://www.youtube.com/channel/UCbHpuqhSjm3eYbqJQTlvJvg", "titre"=>"E mds",
                "date"=>"", "lieu"=>"",
                "infos"=>[
                    ["objectif"=>"APPRENDRE À PROGRAMMER de débutant au niveau BTS SIO."]
                ]
            ],
            ["id"=>10, "img"=>"Hacktoberfest2021.png", "tailleimg"=>"small", "lien"=>"https://hacktoberfest.com/", "titre"=>"Hacktoberfest 2021",
                "date"=>"Octobre 2021", "lieu"=>"KNPLabs, Caen, Normandie",
                "infos"=>[
                    ["objectif"=>"Participation à une journée de valorisation des projets open source sur github."]
                ]
            ],
            ["id"=>11, "img"=>"Hacktoberfest2019.png", "tailleimg"=>"small", "lien"=>"https://hacktoberfest.com/", "titre"=>"Hacktoberfest 2019",
                "date"=>"Octobre 2019", "lieu"=>"KNPLabs, Le DÔME, Caen, Normandie",
                "infos"=>[
                    ["objectif"=>"Participation à une journée de valorisation des projets open source sur github."]
                ],
                "fin"=>true],
        ];

		$this->loadView('MainController/Parcours.html', ['experiences'=>$experiences, 'formations'=>$formations, 'tableauCertifFormats'=>$tableauCertifFormats, 'certifications'=>$certifications, 'veilles'=>$veilles]);

	}


	#[Route(path: "/projets",name: "main.projets")]
	public function Projets(){

        $Annee1slamprojets = [
            ["id"=>0, "titre"=>"Siteperso", "titreinfo"=>"", "route"=>"siteperso", "tailleimg"=>"large", "img"=>"siteperso.png"],
            ["id"=>1, "titre"=>"Refonte-Site-Artiste", "titreinfo"=>"", "route"=>"refonte-site-artiste", "tailleimg"=>"large", "img"=>"Refonte-Site-Artiste.png"],
            ["id"=>2, "titre"=>"KeePass", "titreinfo"=>"", "route"=>"keepass", "tailleimg"=>"small", "img"=>"keepass_logo.png"],
            ["id"=>3, "titre"=>"CRM", "titreinfo"=>"", "route"=>"crm", "tailleimg"=>"medium", "img"=>"agilecrm.png"],
            ["id"=>4, "titre"=>"WebPOO", "titreinfo"=>"", "route"=>"webpoo", "tailleimg"=>"large", "img"=>"WebPOO.png", "fin"=>true],
        ];

        $Annee2slamprojets = [
            ["id"=>0, "titre"=>"Siteperso2", "titreinfo"=>"", "route"=>"siteperso2", "tailleimg"=>"large", "img"=>"siteperso2.png"],
            ["id"=>1, "titre"=>"SpAnimals", "titreinfo"=>"", "route"=>"spanimals", "tailleimg"=>"large", "img"=>"spanimals.png"],
            ["id"=>2, "titre"=>"Proxmox-admin", "titreinfo"=>"", "route"=>"proxmox-admin", "tailleimg"=>"large", "img"=>"proxmox-admin.jpg"],
            ["id"=>3, "titre"=>"Multi-timer", "titreinfo"=>"", "route"=>"multi-timer", "tailleimg"=>"small", "img"=>"multi-timer.jpg"],
            ["id"=>4, "titre"=>"E-music", "titreinfo"=>"", "route"=>"e-music", "tailleimg"=>"large", "img"=>"e-music.png"],
            ["id"=>5, "titre"=>"PlanitPoker", "titreinfo"=>"", "route"=>"planitpoker", "tailleimg"=>"medium", "img"=>"planitpoker_logo.png", "fin"=>true],
        ];

        $Annee1bloc1projets = [
            ["id"=>0, "titre"=>"Procédure LAMP", "route"=>"Procedure_LAMP.pdf", "tailleimg"=>"large", "img"=>"proc-lamp.png"],
            ["id"=>1, "titre"=>"Procédure HTTP", "route"=>"Procedure_HTTP.pdf", "tailleimg"=>"large", "img"=>"proc-http.png", "fin"=>true],
        ];

        $Annee2bloc1projets = [
            ["id"=>0, "titre"=>"TP Initiation Docker", "route"=>"TP_Initiation_Docker.pdf", "tailleimg"=>"large", "img"=>"proc-docker-ini.png"],
            ["id"=>1, "titre"=>"TP 1 Docker", "route"=>"Exploitation_de_Docker_sous_Linux_(1_sur_2).pdf", "tailleimg"=>"large", "img"=>"proc-docker-tp1.png"],
            ["id"=>2, "titre"=>"TP 2 Docker", "route"=>"Exploitation_de_Docker_sous_Linux_(2_sur_2).pdf", "tailleimg"=>"large", "img"=>"proc-docker-tp2.png", "fin"=>true],
        ];
		
		$this->loadView('MainController/Projets.html', ['Annee1slamprojets'=>$Annee1slamprojets, 'Annee2slamprojets'=>$Annee2slamprojets, 'Annee1bloc1projets'=>$Annee1bloc1projets, 'Annee2bloc1projets'=>$Annee2bloc1projets]);

	}

    function sendmail($name, $emailclient, $message) {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {

            $messageBody ="<a>$emailclient</a> <p>$name</p><br> <p>$message</p>";

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'ssl0.ovh.net';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '';                     //SMTP username
            $mail->Password   = '';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('');         //Email qui envoie
            $mail->addAddress('');      //Email qui reçoit
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Portfolio-Contact';
            $mail->Body    = $messageBody;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            //echo 'Message has been sent';
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

	#[Route(path: "/contact",name: "main.contact")]
	public function Contact(){

        if(isset($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
            if(!empty($_POST['g-recaptcha-response'])) {

                $name = $_POST['name'];
                $emailclient = $_POST['email'];
                $message = $_POST['message'];
                $this->sendmail($name, $emailclient, $message);
                $_POST=[];
                $visible= "visible";
                $reponseMessage= "Votre message a bien été envoyé.";
                $color= "success";

            } else {

                $_POST=[];
                $visible= "visible";
                $reponseMessage= "Vous devez remplir toutes les conditions.";
                $color= "error";

            }
        } else {

            $visible= "hidden";
            $reponseMessage= "Vous devez remplir toutes les conditions.";
            $color= "error";

        }

		$this->loadView('MainController/Contact.html', ['visible'=>$visible, 'reponseMessage'=>$reponseMessage, 'color'=>$color]);

	}

}
