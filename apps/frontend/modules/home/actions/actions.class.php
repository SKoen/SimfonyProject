<?php

class homeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->setTemplate('index');
  }
}
