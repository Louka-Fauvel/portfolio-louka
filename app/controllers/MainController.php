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
                "competences"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences2"=>"Travailler en mode projet (planifier les activités)",
                "competences3"=>"Mettre à disposition des utilisateurs un service informatique (Réaliser les tests d'intégration et d'acceptation d'un service)",
                "competences4"=>"Organiser son développement professionnel (mettre en place son environnement d'apprentissage personnel)",
                "compte-rendu"=>"Stage_Fime.pdf"],

            ["id"=>1, "img"=>"Altilog.webp", "titre"=>"Altilog : Agence de développement", "date"=>"Décembre 2021 - Février 2022",
                "semaines"=>"7 semaines", "lieu"=>"Caen, Normandie",
                "info"=>"Découverte et utilisation du Wlangage avec le logiciel WEBDEV 25 et WEBDEV 27 à travers différents projets de l'entreprise.",
                "titrelangage"=>"Langage informatique utilisé :", "infolangage"=>"Wlangage",
                "competences"=>"Gérer le patrimoine informatique (Exploiter des référentiels, normes et standards adoptés par le prestataire informatique, mettre en place et vérifier les niveaux d'habilitation associés à un service)",
                "competences2"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences3"=>"Développer la présence en ligne de l'organisation (participer à l'évolution d'un site web exploitant les données de l'organisation)",
                "competences4"=>"Organiser son développement professionnel (mettre en place son environnement d'apprentissage personnel)",
                "compte-rendu"=>"Stage_ALTILOG.pdf"],

            ["id"=>2, "img"=>"KNPLabs.jpg", "titre"=>"KNPLabs : Agence de développement", "date"=>"Mai - Juin 2021",
                "semaines"=>"5 semaines", "lieu"=>"Caen, Normandie",
                "info"=>"Approfondissement de mes connaissances sur Github, communication au sein d'une équipe avec des pull requests, 
                    utilisation des objets avec PHP et découverte du framework Symfony. Découverte du management d'une agence de développement.",
                "titrelangage"=>"Langages informatiques utilisés :", "infolangage"=>"HTML, PHP, CSS",
                "competences"=>"Organiser son développement professionnel (mettre en place son environnement d'apprentissage personnel)",
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

        $certifications = [
            ["id"=>0, "img"=>"certif_secnumacademie.png", "tailleimg"=>"large", "taillemodal"=>"fluid"],
            ["id"=>1, "img"=>"certif_toeic.png", "tailleimg"=>"small", "taillemodal"=>"centered big"],
            ["id"=>2, "img"=>"certif_html_css.png", "tailleimg"=>"large", "taillemodal"=>"fluid"],
            ["id"=>3, "img"=>"certif_javascript.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "fin"=>true],
            ["id"=>4, "img"=>"certif_app_android.png", "tailleimg"=>"large", "taillemodal"=>"fluid"],
            ["id"=>5, "img"=>"certif_sql.png", "tailleimg"=>"large", "taillemodal"=>"fluid"],
            ["id"=>6, "img"=>"certif_php_mysql.png", "tailleimg"=>"large", "taillemodal"=>"fluid"],
            ["id"=>7, "img"=>"certif_debut_react.png", "tailleimg"=>"large", "taillemodal"=>"fluid", "fin"=>true],
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
            ["id"=>5, "titre"=>"Padlet", "titreinfo"=>"", "route"=>"padlet", "tailleimg"=>"small", "img"=>"", "fin"=>true],
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
            $mail->setFrom('');
            $mail->addAddress('');     //Add a recipient
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
