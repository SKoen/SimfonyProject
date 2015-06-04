<?php

/**
 * question actions.
 *
 * @package    ForumProject
 * @subpackage question
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class questionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forum_questionss = Doctrine_Core::getTable('ForumQuestions')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
   $this->forum_answers = Doctrine_Core::getTable('ForumAnswer')
      ->createQuery('a')
      ->where('question_id=?',$request->getParameter('id'))
      ->orderBy('created_at desc')
      ->execute();

    $this->forum_questions = Doctrine_Core::getTable('ForumQuestions')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->forum_questions);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ForumQuestionsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ForumQuestionsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($forum_questions = Doctrine_Core::getTable('ForumQuestions')->find(array($request->getParameter('id'))), sprintf('Object forum_questions does not exist (%s).', $request->getParameter('id')));
    $this->form = new ForumQuestionsForm($forum_questions);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($forum_questions = Doctrine_Core::getTable('ForumQuestions')->find(array($request->getParameter('id'))), sprintf('Object forum_questions does not exist (%s).', $request->getParameter('id')));
    $this->form = new ForumQuestionsForm($forum_questions);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($forum_questions = Doctrine_Core::getTable('ForumQuestions')->find(array($request->getParameter('id'))), sprintf('Object forum_questions does not exist (%s).', $request->getParameter('id')));
    $forum_questions->delete();

    $this->redirect('question/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $forum_questions = $form->save();

      $this->redirect('question/edit?id='.$forum_questions->getId());
    }
  }
}
