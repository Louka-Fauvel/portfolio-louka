<?php
namespace controllers;
use Ubiquity\attributes\items\router\Post;
 use Ubiquity\attributes\items\router\Route;

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
            ["id"=>0, "img"=>"Altilog.webp", "titre"=>"Altilog : Agence de développement", "date"=>"Décembre - Février 2022",
                "semaines"=>"7 semaines", "lieu"=>"Caen, Normandie",
                "info"=>"Découverte et utilisation du Wlangage avec le logiciel WEBDEV 25 et WEBDEV 27 à travers différents projets de l'entreprise.",
                "titrelangage"=>"Langage informatique utilisé :", "infolangage"=>"Wlangage",
                "competences"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences2"=>"Travailler en mode projet (analyser les objectifs et les modalités de l'organisation d'un projet, planifier les activités, évaluer les indicateurs de suivi d'un projet et analyser les écarts)",
                "competences3"=>"Organiser son développement professionnel (mettre en place son environnement d'apprentissage personnel)",
                "compte-rendu"=>"Stage_ALTILOG.pdf"],

            ["id"=>1, "img"=>"KNPLabs.jpg", "titre"=>"KNPLabs : Agence de développement", "date"=>"Mai - Juin 2021",
                "semaines"=>"5 semaines", "lieu"=>"Caen, Normandie",
                "info"=>"Approfondissement de mes connaissances sur Github, communication au sein d'une équipe avec des pull requests, 
                    utilisation des objets avec PHP et découverte du framework Symfony. Découverte du management d'une agence de développement.",
                "titrelangage"=>"Langages informatiques utilisés :", "infolangage"=>"HTML, PHP, CSS",
                "competences"=>"Organiser son développement professionnel (mettre en place son environnement d'apprentissage personnel)",
                "compte-rendu"=>"Stage_KNPLabs.pdf"],

            ["id"=>2, "img"=>"Erasmus.png", "titre"=>"ERASMUS + : Institut Lemonnier", "date"=>"Octobre 2019",
                "semaines"=>"1 semaine", "lieu"=>"Falkenberg, Suède",
                "info"=>"Conception et construction d'un véhicule à énergie innovante. Travail en pluridisciplinarité entre mécanique et mathématiques. 
                    Voyage jusqu’en Suède pour rejoindre les autres élèves en mobilité professionnelle. 
                    Contribution à un « congrès de spécialistes » sur ce sujet pour la première fois.",
                "titrelangage"=>"Langue de travail :", "infolangage"=>"Anglais"],

            ["id"=>3, "img"=>"Erasmus.png", "titre"=>"ERASMUS + : Institut Lemonnier", "date"=>"Mars 2019",
                "semaines"=>"1 semaine", "lieu"=>"Caen, Normandie",
                    "info"=>"Conception et construction d'un véhicule à énergie innovante. Travail en pluridisciplinarité entre mécanique et mathématiques. 
                        Accueil des élèves venant d'Espagne et de Suède. Compte-rendu du projet en réalisant un film.",
                "titrelangage"=>"Langue de travail :", "infolangage"=>"Anglais",
                "titreoutil"=>"Outil :", "infooutil"=>"Adobe Premiere"],

            ["id"=>4, "img"=>"Corlet.png", "titre"=>"Corlet : Agence de communication", "date"=>"Janvier 2017",
                "semaines"=>"1 semaine", "lieu"=>"Caen, Normandie",
                "info"=>"Observation du travail d'un graphiste. Utilisation des outils du graphiste pour créer des images.",
                "titreoutil"=>"Outil :", "infooutil"=>"Adobe Photoshop", "fin"=>true],
        ];

        $formations = [
            ["id"=>0, "img"=>"SupAvenir.png", "titre"=>"BTS SIO - CaenSup Sainte-Ursule", "date"=>"2020 - 2022",
                "lieu"=>"Caen, Normandie", "info"=>"",
                "langageoutil"=>"Langages et outils :", "infolangue"=>"HTML/CSS, PHP, Framework (Bootstrap, Ubiquity), Python, SQL, Javascript, JAVA, Flutter Dart",
                "titreconcept"=>"Concepts :", "infoconcepts"=>"Algorithmique, POO, méthode Merise"],

            ["id"=>1, "img"=>"Lemonnier.jpg", "titre"=>"Terminale STI2D SIN, section Euro - Institut Lemonnier", "date"=>"2018 - 2021",
                "lieu"=>"Caen, Normandie", "info"=>"",
                "langageoutil"=>"Langages et outils :", "infolangue"=>"Arduino, Labview",
                "titreconcept"=>"", "infoconcepts"=>"", "fin"=>true],
        ];

        $certifications = [
            ["id"=>0, "img"=>"certif_secnumacademie.png"],
            ["id"=>1, "img"=>"certif_html_css.png"],
            ["id"=>2, "img"=>"certif_javascript.png"],
            ["id"=>3, "img"=>"certif_app_android.png"],
            ["id"=>4, "img"=>"certif_sql.png", "fin"=>true],
        ];

        $veilles = [
            ["id"=>0, "img"=>"Hacktoberfest2021.png", "tailleimg"=>"small", "lien"=>"https://hacktoberfest.digitalocean.com/", "titre"=>"Hacktoberfest 2021", "date"=>"Octobre 2021",
                "lieu"=>"KNPLabs, Caen, Normandie", "info"=>"Participation à une journée de valorisation des projets open source sur github."],
            ["id"=>1, "img"=>"Hacktoberfest2019.png", "tailleimg"=>"small", "lien"=>"https://hacktoberfest.digitalocean.com/", "titre"=>"Hacktoberfest 2019", "date"=>"Octobre 2019",
                "lieu"=>"KNPLabs, Le DÔME, Caen, Normandie", "info"=>"Participation à une journée de valorisation des projets open source sur github."],
            ["id"=>2, "img"=>"logo_anssi.png", "tailleimg"=>"tiny", "lien"=>"https://www.ssi.gouv.fr/", "titre"=>"ANSSI", "date"=>"",
                "lieu"=>"", "info"=>"Se maintenir informé en matière de cybersécurité."],
            ["id"=>3, "img"=>"logo_cnil.png", "tailleimg"=>"small", "lien"=>"https://www.cnil.fr/", "titre"=>"CNIL", "date"=>"",
                "lieu"=>"", "info"=>"Se maintenir informé en matière de traitement des données."],
            ["id"=>4, "img"=>"symfony-logo.svg", "tailleimg"=>"medium", "lien"=>"https://symfony.com/", "titre"=>"Symfony", "date"=>"",
                "lieu"=>"", "info"=>"Alerte Google pour se maintenir informé."],
            ["id"=>5, "img"=>"flutter-logo.png", "tailleimg"=>"tiny", "lien"=>"https://flutter.dev/", "titre"=>"Flutter", "date"=>"",
                "lieu"=>"", "info"=>"Alerte Google pour se maintenir informé."],
            ["id"=>6, "img"=>"cropped-logo.png", "tailleimg"=>"tiny", "lien"=>"https://www.pierre-giraud.com/", "titre"=>"Pierre-Giraud", "date"=>"",
                "lieu"=>"", "info"=>"Toutes vos ressources sur le développement web. Apprenez à coder en HTML, CSS, JavaScript, Python, PHP…"],
            ["id"=>7, "img"=>"E_mds.jpg", "tailleimg"=>"tiny", "lien"=>"https://www.youtube.com/channel/UCbHpuqhSjm3eYbqJQTlvJvg", "titre"=>"E mds", "date"=>"",
                "lieu"=>"", "info"=>"APPRENDRE À PROGRAMMER de débutant au niveau BTS SIO", "fin"=>true],
        ];

		$this->loadView('MainController/Parcours.html', ['experiences'=>$experiences, 'formations'=>$formations, 'certifications'=>$certifications, 'veilles'=>$veilles]);

	}


	#[Route(path: "/projets",name: "main.projets")]
	public function Projets(){

        $Annee1slamprojets = [
            ["id"=>0, "titre"=>"siteperso2", "titreinfo"=>"(1ère version du portfolio)", "route"=>"siteperso2", "tailleimg"=>"large", "img"=>"siteperso2.png"],
            ["id"=>1, "titre"=>"Refonte-Site-Artiste", "titreinfo"=>"", "route"=>"refonte-site-artiste", "tailleimg"=>"large", "img"=>"Refonte-Site-Artiste.png"],
            ["id"=>2, "titre"=>"CRM", "titreinfo"=>"", "route"=>"crm", "tailleimg"=>"medium", "img"=>"agilecrm.png"],
            ["id"=>3, "titre"=>"WebPOO", "titreinfo"=>"", "route"=>"webpoo", "tailleimg"=>"large", "img"=>"WebPOO.png", "fin"=>true],
        ];

        $Annee2slamprojets = [
            ["id"=>0, "titre"=>"Portfolio", "titreinfo"=>"(2ème version du portfolio)", "route"=>"portfolio", "tailleimg"=>"large", "img"=>"Portfolio_accueil.png"],
            ["id"=>1, "titre"=>"SpAnimals", "titreinfo"=>"", "route"=>"spanimals", "tailleimg"=>"large", "img"=>"spanimals.png"],
            ["id"=>2, "titre"=>"proxmox-admin", "titreinfo"=>"", "route"=>"proxmox-admin", "tailleimg"=>"large", "img"=>"proxmox-admin.jpg"],
            ["id"=>3, "titre"=>"multi-timer", "titreinfo"=>"", "route"=>"multi-timer", "tailleimg"=>"small", "img"=>"multi-timer.jpg", "fin"=>true],
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


	#[Route(path: "/contact",name: "main.contact")]
	public function Contact(){
		//{{path('main.contactvalide')}}
        //var_dump($_POST['g-recaptcha-response']);
		$this->loadView('MainController/Contact.html');

	}


	#[Post(path: "/contactvalide",name: "main.contactvalide")]
	public function ContactValide(){
		
	}

}
