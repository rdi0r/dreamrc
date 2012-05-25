<?php use_helper('I18N', 'Date') ?>
<?php include_partial('category/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editando la categoría %%name%%', array('%%name%%' => $JobeetCategory->getName()), 'messages') ?></h1>

  <?php include_partial('category/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('category/form_header', array('JobeetCategory' => $JobeetCategory, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('category/form', array('JobeetCategory' => $JobeetCategory, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('category/form_footer', array('JobeetCategory' => $JobeetCategory, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
