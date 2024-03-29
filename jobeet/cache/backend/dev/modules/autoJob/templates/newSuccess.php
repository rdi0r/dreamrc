<?php use_helper('I18N', 'Date') ?>
<?php include_partial('job/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Creación de trabajos', array(), 'messages') ?></h1>

  <?php include_partial('job/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('job/form_header', array('JobeetJob' => $JobeetJob, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('job/form', array('JobeetJob' => $JobeetJob, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('job/form_footer', array('JobeetJob' => $JobeetJob, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
