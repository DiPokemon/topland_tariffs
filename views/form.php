<?php

$mode = $_GET['view']; // $mode = add / edit
$form_title = ($mode == 'add' ? 'Добавление' : 'Редактирование');
$form_action = TOPLAND_TARIFFS_PLUGIN_ADMIN_URL . '&action=add';

if ($mode == 'edit')
	$form_action = TOPLAND_TARIFFS_PLUGIN_ADMIN_URL . '&action=edit';

?>

<div class="wrap">
	<h1 class="wp-heading-inline"><?= $form_title ?> тарифа</h1>
	<a href="<?= TOPLAND_CLOUDTAG_PLUGIN_ADMIN_URL ?>" class="page-title-action">← Назад</a>

	<form method="post" action="<?= $form_action ?>" novalidate="novalidate">
		<?php if ($mode == 'edit'): ?>
			<input type="hidden" name="data_id" value="<?= self::$model->id ?>" >
		<?php endif ?>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="slug">Ярлык</label>
					</th>
					<td>
						<input name="data_slug" type="text" id="slug" value="<?= self::$model->slug ?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="title">Заголовок</label>
					</th>
					<td>
						<input name="data_title" type="text" id="title" value="<?= self::$model->title?>" class="regular-text">
					</td>
				</tr>	
				<tr>
					<th scope="row">
						<label for="subtitle">Подзаголовок</label>
					</th>
					<td>
						<input name="data_subtitle" type="text" id="subtitle" value="<?= self::$model->subtitle?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="price">Цена</label>
					</th>
					<td>
						<input name="data_price" type="text" id="price" value="<?= self::$model->price?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="text">Текст</label>
					</th>
					<td>
						<textarea name="data_text" type="text" id="text" value="<?= self::$model->text?>" class="regular-text"></textarea>
					</td>
				</tr>		
			</tbody>
		</table>
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="Сохранить изменения">
		</p>
	</form>

</div>