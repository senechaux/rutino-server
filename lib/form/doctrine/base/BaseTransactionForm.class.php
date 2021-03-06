<?php

/**
 * Transaction form base class.
 *
 * @method Transaction getObject() Returns the current form's model object
 *
 * @package    rutino-server
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTransactionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'global_id'   => new sfWidgetFormInputText(),
      'account_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => false)),
      'currency_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => false)),
      'name'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'amount'      => new sfWidgetFormInputText(),
      'date'        => new sfWidgetFormDateTime(),
      'latitude'    => new sfWidgetFormInputText(),
      'longitude'   => new sfWidgetFormInputText(),
      'picture'     => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'global_id'   => new sfValidatorString(array('max_length' => 255)),
      'account_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Account'))),
      'currency_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'))),
      'name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'amount'      => new sfValidatorNumber(),
      'date'        => new sfValidatorDateTime(),
      'latitude'    => new sfValidatorNumber(array('required' => false)),
      'longitude'   => new sfValidatorNumber(array('required' => false)),
      'picture'     => new sfValidatorString(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('transaction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Transaction';
  }

}
