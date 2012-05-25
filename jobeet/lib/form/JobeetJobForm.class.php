<?php

class JobeetJobForm extends BaseJobeetJobForm
{
  public function configure()
  {
  	unset(
  	$this['created_at'], $this['updated_at'],
  	$this['expires_at'], $this['is_activated']
  	);
  	
  	$this->validatorSchema['email']=new sfValidatorAnd(array(
  	$this->validatorSchema['email'],
  	new sfValidatorEmail()
  	));
  	
  	$this->widgetSchema['type']=new sfWidgetFormChoice(array
  	('choices'=>JobeetJobPeer::$types,
  	'expanded'=>false,
  	));
  	$this->ValidatorSchema['type']= new sfValidatorChoice(array(
  	'choices'=>array_keys(JobeetJobPeer::$types),
  	));
  	$this->widgetSchema['logo']= new sfWidgetFormInputFile(
  	array('label'=>'Logo empresa',
  	));
  	$this-> widgetSchema->setLabels(array(
  	'category_id'=>'Categoria',
  	'is_public'=>'Publico?',
  	'how_to_apply'=>'Como aplicar?',
  	));
  	$this->validatorSchema['logo']=new sfValidatorFile(array('required'=>false,
  	'path'=>sfConfig::get('sf_upload_dir').'/jobs',
  	'mime_types'=>'web_images'));
  	$this->widgetSchema->setHelp('is_public',
  	'Esto es para indicar que se vea en la seccion publica o son son en la de paga');
  	$this->widgetSchema->setHelp('logo', 'Suba la imagen de su empresa con dimension 200x180px');
  	
  }
}
