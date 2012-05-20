<?php

/**
 * Wallet form.
 *
 * @package    rutino-server
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class WalletForm extends BaseWalletForm
{
  public function configure()
  {
  	unset(
      $this['global_id'], 
      $this['created_at'], 
      $this['updated_at']
    );
  }
}
