<?php

/**
 * Currency
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    rutino-server
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Currency extends BaseCurrency
{
	public function postSave($event) {
		if (!$this->getGlobalId()){
			$this->setGlobalId("w_" . $this->getId());
			$this->save();
		}
		parent::postSave($event);
	}

}
