<td class="sf_admin_text sf_admin_list_td_company">
  <?php echo $JobeetJob->getCompany() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_position">
  <?php echo link_to($JobeetJob->getPosition(), 'jobeet_job_edit', $JobeetJob) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $JobeetJob->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $JobeetJob->getUrl() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_activated">
  <?php echo get_partial('job/list_field_boolean', array('value' => $JobeetJob->getIsActivated())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $JobeetJob->getEmail() ?>
</td>
