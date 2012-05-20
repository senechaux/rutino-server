<?php

/**
 * Project form base class.
 *
 * @package    rutino-server
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormBaseTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class BaseFormDoctrine extends sfFormDoctrine
{
  public function setup()
  {
  	unset(
      $this['global_id'], 
      $this['created_at'], 
      $this['updated_at']
    );
  }
}
