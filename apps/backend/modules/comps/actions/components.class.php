<?php

/**
 * components actions.
 *
 * @package    rutino-server
 * @subpackage components
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class compsComponents extends sfComponents
{

  public function executeHeader() {
    $this->View_aUrlHome = '@homepage';
  }

  public function executeFooter() {
    
  }

  public function executeMenu() {
  }

  public function executeFgmenu() {
  }

  public function executeTopnav() {
  }
}
