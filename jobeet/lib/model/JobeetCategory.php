<?php // JobeetCategory

class JobeetCategory extends BaseJobeetCategory {
 public function __toString()
  {
   return $this->getName();
  }

public function getActiveJobs($max=10)
{

	$criteria = $this->getActiveJobsCriteria();
	$criteria->setLimit($max);

	return JobeetJobPeer::doSelect($criteria);
}
/*
public function getSlug()
{
  return Jobeet::slugify($this->getName());
}
*/
public function setName($name)
{
	parent::setName($name);
	$this->setSlug(Jobeet::slugify($name));
}
public function countActiveJobs()
{
  $criteria = $this->getActiveJobsCriteria();  

  return JobeetJobPeer::doCount($criteria);
}

public function getActiveJobsCriteria()
{
	$criteria= new Criteria();
	$criteria->add(JobeetJobPeer::CATEGORY_ID, $this->getId());
	
	return JobeetJobPeer::addActiveJobsCriteria($criteria);
}

}
