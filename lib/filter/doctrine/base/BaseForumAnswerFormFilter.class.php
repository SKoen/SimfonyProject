<?php

/**
 * ForumAnswer filter form base class.
 *
 * @package    ForumProject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseForumAnswerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'text'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'authorName'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'question_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ForumQuestions'), 'add_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'text'        => new sfValidatorPass(array('required' => false)),
      'authorName'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'question_Id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ForumQuestions'), 'column' => 'id')),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('forum_answer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ForumAnswer';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'text'        => 'Text',
      'authorName'  => 'Number',
      'question_Id' => 'ForeignKey',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
