<?php

class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {  		
  		$this->categories = JobeetCategoryPeer::getWithJobs();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->JobeetJob = $this->getRoute()->getObject();    
    //$this->forward404Unless($this->JobeetJob);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobeetJobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    //$this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobeetJobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    //$this->forward404Unless($JobeetJob = JobeetJobPeer::retrieveByPk($request->getParameter('id')), sprintf('Object JobeetJob does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($this->getRoute()->getObject());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    //$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    //$this->forward404Unless($JobeetJob = JobeetJobPeer::retrieveByPk($request->getParameter('id')), sprintf('Object JobeetJob does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($JobeetJob);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    ///$this->forward404Unless($JobeetJob = JobeetJobPeer::retrieveByPk($request->getParameter('id')), sprintf('Object JobeetJob does not exist (%s).', $request->getParameter('id')));
    $JobeetJob=$this-_>getRoute()->getObject();
    $JobeetJob->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
    $request->getParameter($form->getName()), 
    $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $JobeetJob = $form->save();

      $this->redirect($this->generateURL('job_show', $JobeetJob));
    }
  }
}
