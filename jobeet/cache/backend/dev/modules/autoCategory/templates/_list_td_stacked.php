<td colspan="2">
  <?php echo __('%%name%% - %%slug%%', array('%%name%%' => link_to($JobeetCategory->getName(), 'jobeet_category_edit', $JobeetCategory), '%%slug%%' => $JobeetCategory->getSlug()), 'messages') ?>
</td>
