<?php

/**
 * Image filter form base class.
 *
 * @package    MyHON
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseImageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'url'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vote_sum'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vote_count' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vote_avg'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'url'        => new sfValidatorPass(array('required' => false)),
      'vote_sum'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'vote_count' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'vote_avg'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('image_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Image';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'url'        => 'Text',
      'vote_sum'   => 'Number',
      'vote_count' => 'Number',
      'vote_avg'   => 'Number',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
