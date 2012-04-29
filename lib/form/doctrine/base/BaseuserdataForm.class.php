<?php

/**
 * userdata form base class.
 *
 * @method userdata getObject() Returns the current form's model object
 *
 * @package    rutino-server
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseuserdataForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('user'), 'add_empty' => false)),
      'information' => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('user'))),
      'information' => new sfValidatorString(array('max_length' => 4000)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('userdata[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'userdata';
  }

}
