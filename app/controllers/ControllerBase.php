<?php
namespace controllers;

use Ubiquity\controllers\Controller;
use Ubiquity\utils\http\URequest;

/**
 * controllers$ControllerBase
 */
abstract class ControllerBase extends Controller {

	protected $headerView = "@activeTheme/main/vHeader.html";

	protected $footerView = "@activeTheme/main/vFooter.html";

	public function initialize() {
		if (! URequest::isAjax()) {
            $pageinfo = $_SERVER['PHP_SELF'];
			$this->loadView($this->headerView, ['pageinfo'=>$pageinfo]);
		}
	}

	public function finalize() {
		if (! URequest::isAjax()) {
			$this->loadView($this->footerView);
		}
	}
}

