<?php
namespace controllers;
use Ubiquity\attributes\items\router\Route;
 /**
  * Controller ProjectController
  */
class ProjectController extends \controllers\ControllerBase{

	public function index(){
		
	}


	#[Route(path: "projets/info/{name}",name: "project.info")]
	public function Info($name){

        $infos = [
            ["route"=>"siteperso", "titre"=>"Siteperso", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"siteperso.png",
                "objectif"=>"Réaliser un site personnel de présentation à partir de nos connaissances.",
                "liencontenu"=>"https://app-louka-fauvel.herokuapp.com/",
                "liengithub"=>"https://github.com/Louka-Fauvel/siteperso",
                //"lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/siteperso",
                "langages"=>"HTML, CSS, PHP", "outils"=>"Font Awesome, Adobe Photoshop, Serveur XAMPP",
                "competences"=>[
                    "text"=>"Organiser son développement professionnel",
                    "sous-texts"=>[
                        [
                            "text"=>"gérer son identité numérique",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-6/myDocuments/bloc1-support/a_1-6#siteperso",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"Octobre 2020"
            ],

            ["route"=>"refonte-site-artiste", "titre"=>"Refonte-Site-Artiste", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"Refonte-Site-Artiste.png",
                "objectif"=>"Améliorer le site professionnel de Michèle Ratel.",
                "liengithub"=>"https://github.com/Louka-Fauvel/Refonte-Site-Artiste",
                //"lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/refonte",
                "themes"=>"NatureSpace", "pluggins"=>"WPForms Lite - Envira Gallery", "outils"=>"Wordpress",
                "competences"=>[
                    "text"=>"Gérer le patrimoine informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#refonte-site-artiste",
                        ],
                        [
                            "text"=>"mettre en place et vérifier les niveaux d'habilitation associés à un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#refonte-site-artiste-1",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences2"=>[
                    "text"=>"Développer la présence en ligne de l'organisation",
                    "sous-texts"=>[
                        [
                            "text"=>"participer à l'évolution d'un site web exploitant les données de l'organisation",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-3/myDocuments/bloc1-support/a_1-3#refonte-site-artiste",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences3"=>[
                    "text"=>"Travailler en mode projet",
                    "sous-texts"=>[
                        [
                            "text"=>"analyser les objectifs et les modalités de l'organisation d'un projet",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-3/myDocuments/bloc1-support/a_1-3#refonte-site-artiste",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences4"=>[
                    "text"=>"Mettre à disposition des utilisateurs un service informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"accompagner les utilisateurs dans la mise en place d'un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#refonte-site-artiste",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"décembre 2020"
            ],

            ["route"=>"keepass", "titre"=>"KeePass", "titreinfo"=>"", "tailleimg"=>"medium", "img"=>"keepass_logo.png", "video"=>"https://www.youtube.com/embed/pJ5LMMZXM0s",
                "objectif"=>"Réaliser un tuto vidéo sur KeePass",
                "outils"=>"Adobe Premiere Pro",
                "competences"=>[
                    "text"=>"Mettre à disposition des utilisateurs un service informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"accompagner les utilisateurs dans la mise en place d'un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#keepass",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"Janvier 2021"
            ],

            ["route"=>"crm", "titre"=>"CRM", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"agilecrm.png",
                "objectif"=>"Proposer à une cliente un logiciel pour l'aider à gérer son activité.",
                "liencontenu"=>"/assets/doc/Documentation_Client.pdf",
                //"lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/artisan",
                "outils"=>"Agile CRM",
                "competences"=>[
                    "text"=>"Gérer le patrimoine informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"recenser et identifier les ressources numériques",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#crm",
                        ],
                        [
                            "text"=>"exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#refonte-site-artiste",
                        ],
                        [
                            "text"=>"mettre en place et vérifier les niveaux d'habilitation associés à un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#crm-2",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences2"=>[
                    "text"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution",
                    "sous-texts"=>[
                        [
                            "text"=>"traiter des demandes concernant les applications",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-2/myDocuments/bloc1-support/a_1-2#crm",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences3"=>[
                    "text"=>"Travailler en mode projet",
                    "sous-texts"=>[
                        [
                            "text"=>"analyser les objectifs et les modalités de l'organisation d'un projet",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-4/myDocuments/bloc1-support/a_1-4#crm",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences4"=>[
                    "text"=>"Mettre à disposition des utilisateurs un service informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"déployer un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#crm",
                        ],
                        [
                            "text"=>"accompagner les utilisateurs dans la mise en place d'un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#crm-1",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"janvier - février 2021"
            ],

            ["route"=>"webpoo", "titre"=>"WebPOO", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"WebPOO.png", "video"=>"https://www.youtube.com/embed/LMfGrRpgTtk",
                "objectif"=>"Réaliser un réseau social pour des étudiants",
                "liengithub"=>"https://github.com/Louka-Fauvel/WebPOO",
                "langages"=>"HTML, PHP, CSS", "outils"=>"Bootstrap, Serveur XAMPP, Adobe Premiere Pro",
                "competences"=>[
                    "text"=>"Mettre à disposition des utilisateurs un service informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"déployer un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#webpoo",
                        ],
                        [
                            "text"=>"accompagner les utilisateurs dans la mise en place d'un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#webpoo-1",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"Avril - Mai 2021"
            ],


            ["route"=>"siteperso2", "titre"=>"Siteperso2", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"siteperso2.png",
                "objectif"=>"Réaliser un site personnel en utilisant des nouvelles connaissances.",
                "liengithub"=>"https://github.com/Louka-Fauvel/siteperso2",
                "langages"=>"HTML, PHP, CSS", "outils"=>"Bootstrap, Serveur XAMPP",
                "competences"=>[
                    "text"=>"Organiser son développement professionnel",
                    "sous-texts"=>[
                        [
                            "text"=>"gérer son identité professionnelle",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-6/myDocuments/bloc1-support/a_1-6#siteperso2",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"Septembre - Novembre 2021"
            ],

            ["route"=>"spanimals", "titre"=>"SpAnimals", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"spanimals.png",
                "objectif"=>"Créer une application Web pour refuge animalier.",
                "liengithub"=>"https://github.com/Louka-Fauvel/SpAnimals",
                //"lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/spa",
                "langages"=>"HTML, Java", "outils"=>"Spring-boot, VueJS",
                "competences"=>"",
                "date"=>"Octobre - Novembre 2021"
            ],

            ["route"=>"proxmox-admin", "titre"=>"Proxmox-admin", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"proxmox-admin.jpg",
                "objectif"=>"Le projet Proxmox-admin est une application qui permet la gestion simplifiée et à distance de serveurs, groupes et VMs proxmox.",
                //"liencontenu"=>"http://vm-1.sts-sio-caen.info/",
                "liengithub"=>"https://github.com/Nathannicolle/proxmox-admin",
                //"lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/proxmox",
                "langages"=>"HTML, PHP, CSS, JavaScript", "outils"=>"Ubiquity, Semantic UI",
                "competences"=>[
                    "text"=>"Gérer le patrimoine informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"mettre en place et vérifier les niveaux d'habilitation associés à un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#proxmox-admin",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences2"=>[
                    "text"=>"Travailler en mode projet",
                    "sous-texts"=>[
                        [
                            "text"=>"planifier les activités",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-4/myDocuments/bloc1-support/a_1-4#proxmox-admin",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences3"=>[
                    "text"=>"Mettre à disposition des utilisateurs un service informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"déployer un service",
                            "lien"=>"",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"Décembre 2021 - Mars 2022"
            ],

            ["route"=>"multi-timer", "titre"=>"Multi-timer", "titreinfo"=>"", "tailleimg"=>"medium", "img"=>"multi-timer.jpg",
                "objectif"=>"Créer une application mobile multi-timer.",
                //"liencontenu"=>"http://vm-1-flutter.sts-sio-caen.info/",
                "liengithub"=>"https://github.com/Nathannicolle/multi-timer",
                //"lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/timers",
                "langages"=>"Dart", "outils"=>"Flutter Dart",
                "competences"=>[
                    "text"=>"Travailler en mode projet",
                    "sous-texts"=>[
                        [
                            "text"=>"planifier les activités",
                            "lien"=>"",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"Avril - Juin 2022"
            ],

            ["route"=>"e-music", "titre"=>"E-music", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"e-music.png",
                "objectif"=>"Créer une application pour une école de musique.",
                "liencontenu"=>"http://srv2-vm-2100.sts-sio-caen.info/e-music/",
                "liengithub"=>"https://github.com/PaulG0/E-Music",
                "lienconsigne"=>"",
                "langages"=>"HTML, Java", "outils"=>"Spring-boot, VueJS, Fomantic UI",
                "competences"=>[
                    "text"=>"Gérer le patrimoine informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"mettre en place et vérifier les niveaux d'habilitation associés à un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-1/myDocuments/bloc1-support/a_1-1#e-music",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences2"=>[
                    "text"=>"Travailler en mode projet",
                    "sous-texts"=>[
                        [
                            "text"=>"planifier les activités",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-4/myDocuments/bloc1-support/a_1-4#e-music",
                            "fin"=>true,
                        ],
                    ],
                ],
                "competences3"=>[
                    "text"=>"Mettre à disposition des utilisateurs un service informatique",
                    "sous-texts"=>[
                        [
                            "text"=>"accompagner les utilisateurs dans la mise en place d'un service",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-5/myDocuments/bloc1-support/a_1-5#e-music-1",
                        ],
                        [
                            "text"=>"déployer un service",
                            "lien"=>"",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"Septembre - Décembre 2022"
            ],

            ["route"=>"planitpoker", "titre"=>"PlanitPoker", "titreinfo"=>"", "tailleimg"=>"medium", "img"=>"planitpoker_logo.png",
                "objectif"=>"Créer un PlanitPoker, un outil pour estimer les tâches d'un projet d'une équipe à l'aide de carte à jouer.",
                "liencontenu"=>"",
                "liengithub"=>"https://github.com/supavenir/planitPoker-LaJavanaise",
                "lienconsigne"=>"",
                "langages"=>"Javascript, PHP", "outils"=>"Ubiquity, Next.js, Ant Design",
                "competences"=>[
                    "text"=>"Travailler en mode projet",
                    "sous-texts"=>[
                        [
                            "text"=>"analyser les objectifs et les modalités d'organisation d'un projet",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-4/myDocuments/bloc1-support/a_1-4#planitpoker",
                        ],
                        [
                            "text"=>"planifier les activités",
                            "lien"=>"https://github.com/Louka-Fauvel/sio-skills/tree/a_1-4/myDocuments/bloc1-support/a_1-4#planitpoker-1",
                            "fin"=>true,
                        ],
                    ],
                ],
                "date"=>"Mars - Juin 2023"
            ],
        ];

        foreach ($infos as $info) {
            if ($name == $info["route"]) {

                $this->loadView('ProjectController/Info.html', ["info"=>$info]);
                break;

            }

        }

	}

}
