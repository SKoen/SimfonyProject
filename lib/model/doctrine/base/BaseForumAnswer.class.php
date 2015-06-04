<?php

/**
 * BaseForumAnswer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $text
 * @property integer $authorName
 * @property integer $question_Id
 * @property ForumQuestions $ForumQuestions
 * 
 * @method string         getText()           Returns the current record's "text" value
 * @method integer        getAuthorName()     Returns the current record's "authorName" value
 * @method integer        getQuestionId()     Returns the current record's "question_Id" value
 * @method ForumQuestions getForumQuestions() Returns the current record's "ForumQuestions" value
 * @method ForumAnswer    setText()           Sets the current record's "text" value
 * @method ForumAnswer    setAuthorName()     Sets the current record's "authorName" value
 * @method ForumAnswer    setQuestionId()     Sets the current record's "question_Id" value
 * @method ForumAnswer    setForumQuestions() Sets the current record's "ForumQuestions" value
 * 
 * @package    ForumProject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseForumAnswer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('forum_answer');
        $this->hasColumn('text', 'string', 1000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 1000,
             ));
        $this->hasColumn('authorName', 'integer', null, array(
            'type' => 'integer',
            'notnull' => true,
        ));
        $this->hasColumn('authorEmail', 'integer', null, array(
            'type' => 'integer',
            'notnull' => true,
        ));
        $this->hasColumn('question_Id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));

        $this->option('charset', 'utf8');
        $this->option('collate', 'utf8_unicode_ci');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ForumQuestions', array(
             'local' => 'question_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}