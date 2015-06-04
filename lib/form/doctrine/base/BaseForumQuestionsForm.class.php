<?php

/**
 * ForumQuestions form base class.
 *
 * @method ForumQuestions getObject() Returns the current form's model object
 *
 * @package    ForumProject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseForumQuestionsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'text'        => new sfWidgetFormTextarea(),
      'author_Id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ForumUsers'), 'add_empty' => false)),
      'category_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ForumCategory'), 'add_empty' => false)),
      'title'       => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'text'        => new sfValidatorString(array('max_length' => 1000)),
      'author_Id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ForumUsers'))),
      'category_Id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ForumCategory'))),
      'title'       => new sfValidatorString(array('max_length' => 50)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('forum_questions[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ForumQuestions';
  }

}
