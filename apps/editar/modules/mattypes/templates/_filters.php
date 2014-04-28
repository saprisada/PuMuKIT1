<!-- Filter -->
<div class="tv_admin_filters">
<?php echo form_remote_tag(array('update' => 'list_mattypes', 'url' => 'mattypes/list', 'script' => 'true' ), 'id=filter_mattypes') ?>
  <fieldset>
    <h2><?php echo __('Buscar')?></h2>

    <div class="form-row">
      <label for="name"><?php echo __('Name:')?></label>
      <div class="content">
        <?php echo input_tag('filters[name]', null) ?>
      </div>
    </div>
  </fieldset>

  <ul class="tv_admin_actions">
    <li>
      <?php echo button_to_remote('reset', array('before' => '$("filter_mattypes").reset();', 'update' => 'list_mattypes', 'url' => 'mattypes/list?filter=filter ', 'script' => 'true'), 'class=tv_admin_action_reset_filter') ?>
    </li>
    <li>
      <?php echo submit_tag('filter', 'name=filter class=tv_admin_action_filter') ?>
    </li>
  </ul>
</form>
</div>
