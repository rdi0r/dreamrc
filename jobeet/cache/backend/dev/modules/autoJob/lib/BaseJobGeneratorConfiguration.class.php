<?php

/**
 * job module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage job
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseJobGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%is_activated%%<small>%%jobeet_category%%</small> - %%company%% (<em>%%email%%</em> está buscando: %%=position%% (%%location%%))';
  }

  public function getListLayout()
  {
    return 'stacked';
  }

  public function getListTitle()
  {
    return 'Administracion de trabajos';
  }

  public function getEditTitle()
  {
    return 'Editando el trabajo %%company%% que esta buscando un %%position%%';
  }

  public function getNewTitle()
  {
    return 'Creación de trabajos';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'company',  1 => 'position',  2 => 'location',  3 => 'url',  4 => 'is_activated',  5 => 'email',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'category_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'company' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'logo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'url' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'position' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'location' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'how_to_apply' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'token' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'is_public' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'label' => 'Público',  'help' => 'Publicarlo en los sitios',),
      'is_activated' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'label' => 'Activo?',  'help' => 'Lo deja como activo o no',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'expires_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'JobeetJobForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'JobeetJobFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfPropelPager';
  }

  public function getPagerMaxPerPage()
  {
    return 10;
  }

  public function getDefaultSort()
  {
    return array('expires_at', 'desc');
  }

  public function getPeerMethod()
  {
    return 'doSelect';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}
