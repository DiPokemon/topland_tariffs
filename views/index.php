<div class="wrap">
	<h1 class="wp-heading-inline"><?= TOPLAND_TARIFFS_PLUGIN_NAME_RU ?></h1>

	<a href="<?= TOPLAND_TARIFFS_PLUGIN_ADMIN_URL . '&view=add' ?>" class="page-title-action">Добавить</a>

	<hr class="wp-header-end">

	<table width="100%" class="wp-list-table widefat fixed striped posts">
		<thead>
			<tr>
				<th width="100px">Ярлык</th>
				<th width="100px">Заголовок</th>			
				<th width="150px">Подзаголовок</th>
				<th width="50px">Цена</th>
				<th>Текст</th>
				<th></th>
			</tr>
		</thead>
		<tbody id="the-list">
		<?php
			$number = 0;
			foreach ( self::$model->get_list() as $item ): $number++; ?>
			<tr>
				<td><?= $item->slug ?></td>
				<td><?= $item->title ?></td>	
				<td><?= $item->subtitle ?></td>	
				<td><?= $item->price ?></td>
				<td><?= $item->text ?></td>
				<td class="edit_panel">
					<a href="<?= TOPLAND_TARIFFS_PLUGIN_ADMIN_URL . '&view=edit&data_id=' . $item->id ?>">Редактировать</a>
					|
					<a href="<?= TOPLAND_TARIFFS_PLUGIN_ADMIN_URL . '&action=delete&data_id=' . $item->id ?>">Удалить</a>
				</td>
			</tr>
		<?php endforeach ?>

		<?php if ($number < 1): ?>
			<tr>
				<th colspan="6"><center>Отсутствуют</center></th>
			</tr>
		<?php endif ?>
		</tbody>
	</table>

	<div class="tablenav bottom">
		<div class="tablenav-pages one-page"><span class="displaying-num"><?= $number ?> элемент(а/ов)</span></div>
		<br class="clear">
	</div>

</div>