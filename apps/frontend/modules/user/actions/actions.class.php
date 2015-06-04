<?php

/**
 * user actions.
 *
 * @package    ForumProject
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forum_userss = Doctrine_Core::getTable('ForumUsers')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->forum_users = Doctrine_Core::getTable('ForumUsers')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->forum_users);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ForumUsersForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ForumUsersForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($forum_users = Doctrine_Core::getTable('ForumUsers')->find(array($request->getParameter('id'))), sprintf('Object forum_users does not exist (%s).', $request->getParameter('id')));
    $this->form = new ForumUsersForm($forum_users);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($forum_users = Doctrine_Core::getTable('ForumUsers')->find(array($request->getParameter('id'))), sprintf('Object forum_users does not exist (%s).', $request->getParameter('id')));
    $this->form = new ForumUsersForm($forum_users);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($forum_users = Doctrine_Core::getTable('ForumUsers')->find(array($request->getParameter('id'))), sprintf('Object forum_users does not exist (%s).', $request->getParameter('id')));
    $forum_users->delete();

    $this->redirect('user/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $forum_users = $form->save();

      $this->redirect('user/edit?id='.$forum_users->getId());
    }
  }
}
