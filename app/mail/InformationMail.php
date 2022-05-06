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
		$this->subject = 'Message title';
		$this->from(MailerManager::loadConfig()['from']??'from@organization');
		$this->to(MailerManager::loadConfig()['to']??'louka.fauvel@sts-sio-caen.info');
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
