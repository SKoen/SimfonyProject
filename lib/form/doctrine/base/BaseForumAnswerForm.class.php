<?php

/**
 * ForumAnswer form base class.
 *
 * @method ForumAnswer getObject() Returns the current form's model object
 *
 * @package    ForumProject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseForumAnswerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'text'        => new sfWidgetFormTextarea(),
      'authorName'  => new sfWidgetFormInputText(),
      'question_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ForumQuestions'), 'add_empty' => false)),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'text'        => new sfValidatorString(array('max_length' => 1000)),
      'authorName'  => new sfValidatorInteger(),
      'question_Id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ForumQuestions'))),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('forum_answer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ForumAnswer';
  }

}
