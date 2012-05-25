<?php
//public function __toString(){
	//return $this->getUrl();
//}

class JobeetAffiliate extends BaseJobeetAffiliate {

	/**
	 * Initializes internal state of JobeetAffiliate object.
	 * @see        parent::__construct()
	 */
	public function _toString()
	{
		return $this->getUrl();
	}
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // JobeetAffiliate
