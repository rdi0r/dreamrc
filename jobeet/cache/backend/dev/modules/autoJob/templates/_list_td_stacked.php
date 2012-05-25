<td colspan="6">
  <?php echo __('%%is_activated%%<small>%%jobeet_category%%</small> - %%company%% (<em>%%email%%</em> está buscando: %%position%% (%%location%%))', array('%%is_activated%%' => get_partial('job/list_field_boolean', array('value' => $JobeetJob->getIsActivated())), '%%jobeet_category%%' => $JobeetJob->getJobeetCategory(), '%%company%%' => $JobeetJob->getCompany(), '%%email%%' => $JobeetJob->getEmail(), '%%position%%' => link_to($JobeetJob->getPosition(), 'jobeet_job_edit', $JobeetJob), '%%location%%' => $JobeetJob->getLocation()), 'messages') ?>
</td>
