<?php
namespace mail;

use Ubiquity\mailer\MailerManager;

 /**
  * Mailer InformationMail
  */
class InformationMail extends \Ubiquity\mailer\AbstractMail {

	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\mailer\AbstractMail::bodyText()
	 */
	public function bodyText():string {
		return 'Message text';
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\mailer\AbstractMail::initialize()
	 */
	protected function initialize(){
		$this->subject = 'Cadeau';
		$this->from(MailerManager::loadConfig()['from']??'****');
		$this->to(MailerManager::loadConfig()['to']??'*****');
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\mailer\AbstractMail::body()
	 */
	public function body():string {
		return '<h1>Message body</h1>';
	}
}
