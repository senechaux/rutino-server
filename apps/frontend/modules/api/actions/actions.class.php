<?php

/**
 * api actions.
 *
 * @package    rutino-server
 * @subpackage api
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
 /**
  * Executes auth action
  *
  * @param sfRequest $request A request object
  */
  public function executeAuth(sfWebRequest $request)
  {
      $username = $this->getRequestParameter('username');
      $password = $this->getRequestParameter('password');

      $q = Doctrine_Query::create()
          ->select('u.id')
          ->from('user u')
          ->where('username=?', $username)
          ->addWhere('password=?', $password);

      $rowcount = $q->count();
      if($rowcount == 1){

      }else{
          header('WWW-Authenticate: Basic realm="El usuario o la clave no coinciden."');
          header('HTTP/1.0 401 Unauthorized');
          exit;
      }
  }
}