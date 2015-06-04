<?php

/**
 * answer actions.
 *
 * @package    ForumProject
 * @subpackage answer
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class answerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forum_answers = Doctrine_Core::getTable('ForumAnswer')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->forum_answer = Doctrine_Core::getTable('ForumAnswer')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->forum_answer);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ForumAnswerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ForumAnswerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($forum_answer = Doctrine_Core::getTable('ForumAnswer')->find(array($request->getParameter('id'))), sprintf('Object forum_answer does not exist (%s).', $request->getParameter('id')));
    $this->form = new ForumAnswerForm($forum_answer);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($forum_answer = Doctrine_Core::getTable('ForumAnswer')->find(array($request->getParameter('id'))), sprintf('Object forum_answer does not exist (%s).', $request->getParameter('id')));
    $this->form = new ForumAnswerForm($forum_answer);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($forum_answer = Doctrine_Core::getTable('ForumAnswer')->find(array($request->getParameter('id'))), sprintf('Object forum_answer does not exist (%s).', $request->getParameter('id')));
    $forum_answer->delete();

    $this->redirect('answer/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $forum_answer = $form->save();

      $this->redirect('answer/edit?id='.$forum_answer->getId());
    }
  }
}
