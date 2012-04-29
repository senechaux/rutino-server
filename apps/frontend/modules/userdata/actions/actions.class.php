<?php

/**
 * userdata actions.
 *
 * @package    rutino-server
 * @subpackage userdata
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userdataActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->userdatas = Doctrine_Core::getTable('userdata')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->userdata = Doctrine_Core::getTable('userdata')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->userdata);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new userdataForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new userdataForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($userdata = Doctrine_Core::getTable('userdata')->find(array($request->getParameter('id'))), sprintf('Object userdata does not exist (%s).', $request->getParameter('id')));
    $this->form = new userdataForm($userdata);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($userdata = Doctrine_Core::getTable('userdata')->find(array($request->getParameter('id'))), sprintf('Object userdata does not exist (%s).', $request->getParameter('id')));
    $this->form = new userdataForm($userdata);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($userdata = Doctrine_Core::getTable('userdata')->find(array($request->getParameter('id'))), sprintf('Object userdata does not exist (%s).', $request->getParameter('id')));
    $userdata->delete();

    $this->redirect('userdata/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $userdata = $form->save();

      $this->redirect('userdata/edit?id='.$userdata->getId());
    }
  }
}
