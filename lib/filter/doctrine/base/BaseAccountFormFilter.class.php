<?php

/**
 * Account filter form base class.
 *
 * @package    rutino-server
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAccountFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'global_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'wallet_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Wallet'), 'add_empty' => true)),
      'account_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AccountType'), 'add_empty' => true)),
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'     => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'global_id'       => new sfValidatorPass(array('required' => false)),
      'wallet_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Wallet'), 'column' => 'id')),
      'account_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AccountType'), 'column' => 'id')),
      'name'            => new sfValidatorPass(array('required' => false)),
      'description'     => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('account_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Account';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'global_id'       => 'Text',
      'wallet_id'       => 'ForeignKey',
      'account_type_id' => 'ForeignKey',
      'name'            => 'Text',
      'description'     => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
