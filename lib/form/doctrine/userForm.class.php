<?php

/**
 * user form.
 *
 * @package    rutino-server
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userForm extends BaseuserForm
{
  public function configure()
  {
      parent::setUp();
      unset($this['created_at'], $this['updated_at']);
  }
}
