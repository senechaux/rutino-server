<?php

/**
 * auth actions.
 *
 * @package    rutino-server
 * @subpackage auth
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class authActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
		$username = $this->getRequestParameter('username');
        $password = $this->getRequestParameter('password');

        $q = Doctrine_Query::create()
                ->select('u.id')
                ->from('sfGuardUser u')
                ->where('username=?', $username);
                //->addWhere('password=?', $password);

        $users = $q->fetchArray();
        $this->authResponse = '';
        if (count($users) > 0) {
        	//echo $users[0]["id"];
            $serializer = sfResourceSerializer::getInstance('json');
		    $this->getResponse()->setContentType($serializer->getContentType());
		    $this->output = $users[0]["id"];
        } else {
            //header('WWW-Authenticate: Basic realm="El usuario o la clave no coinciden."');
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }
        
        $this->setLayout(false);
  }
}
