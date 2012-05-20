<?php

/**
 * Account form base class.
 *
 * @method Account getObject() Returns the current form's model object
 *
 * @package    rutino-server
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAccountForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'global_id'       => new sfWidgetFormInputText(),
      'wallet_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Wallet'), 'add_empty' => false)),
      'account_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AccountType'), 'add_empty' => false)),
      'name'            => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormTextarea(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'global_id'       => new sfValidatorString(array('max_length' => 255)),
      'wallet_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Wallet'))),
      'account_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AccountType'))),
      'name'            => new sfValidatorString(array('max_length' => 255)),
      'description'     => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('account[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Account';
  }

}
