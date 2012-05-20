<?php

/**
 * api actions.
 *
 * @package    rutino-server
 * @subpackage api
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions {

    /**
     * Executes auth action
     *
     * @param sfRequest $request A request object
     */
    public function executeAuth(sfWebRequest $request) {
        $username = $this->getRequestParameter('username');
        $password = $this->getRequestParameter('password');

        $q = Doctrine_Query::create()
                ->select('u.id')
                ->from('User u')
                ->where('username=?', $username)
                ->addWhere('password=?', $password);

        $rowcount = $q->count();
        $this->authResponse = '';
        if ($rowcount == 1) {
            $this->authResponse = 'xyzzy';
            $respuesta = $this->getResponse();

            // Cabeceras HTTP
            $respuesta->setContentType('application/json');
            $respuesta->setHttpHeader('Content-Language', 'en');
            $respuesta->setStatusCode(200);
            $respuesta->addVaryHttpHeader('Accept-Language');
            $respuesta->addCacheControlHttpHeader('no-cache');
            $respuesta->setContent(json_encode($this->authResponse));
        } else {
            //header('WWW-Authenticate: Basic realm="El usuario o la clave no coinciden."');
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }
        
        $this->setLayout(false);
    }

    public function executeWalletlist(sfWebRequest $request) {
        //$username = $this->getRequestParameter('username');
        $username = "alex";

        $q = Doctrine_Query::create()
          ->select('w.*')
          ->from('Wallet w')
          ->innerJoin('w.User u')
          ->where('u.username=?', $username);
         
        $this->wallets = $q->fetchArray();

        $respuesta = $this->getResponse();

        // Cabeceras HTTP
        $respuesta->setContentType('application/json');
        $respuesta->setHttpHeader('Content-Language', 'en');
        $respuesta->setStatusCode(200);
        $respuesta->addVaryHttpHeader('Accept-Language');
        $respuesta->addCacheControlHttpHeader('no-cache');
        $respuesta->setContent(json_encode($this->wallets));

        echo json_encode($this->wallets);

        $this->setLayout(false);
    }

}
