<?php

class categoryActions extends sfActions
{

	public function executeShow(sfWebRequest $request)
	{
		$this->category=$this->getRoute()->getObject();
		
		$this->pager = new sfPropelPager(
		'JobeetJob',
		sfConfig::get('app_max_jobs_on_category')
		);
		$this->pager->setCriteria($this->category->getActiveJobsCriteria());
		$this->pager->setPage($request->getParameter('page', 1));
		$this->pager->init();
	} 
}
