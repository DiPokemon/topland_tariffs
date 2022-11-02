<?php
class ToplandTariffsModel {

public $id;     	// (int)
public $slug;   	// ярлык (tinytext)
public $title;   	// заголовок (tinytext)
public $subtitle;   // подзаголовок (tinytext)
public $price;   	// цена (tinytext)
public $text;  		// текст (tinytext)


/**
 * Run
 */
public function __construct(){

}



public function get($id){
	global $wpdb;

	$query = "SELECT * FROM `" . TOPLAND_TARIFFS_DB_TABLE_NAME . "` WHERE id = '" . $id . "' LIMIT 1";
	$row = $wpdb->get_row($query, 'OBJECT');

	$this->id 		= $id;
	$this->slug	= is_null($row->slug)   ? '' : $row->slug;
	$this->title	= is_null($row->title)   ? '' : $row->title;
	$this->subtitle	= is_null($row->subtitle)   ? '' : $row->subtitle;
	$this->price	= is_null($row->price)   ? '' : $row->price;
	$this->text 	= is_null($row->text)   ? '' : $row->text;

	return $this;
}

public function get_list(){
	global $wpdb;

	$query = "SELECT * FROM `" . TOPLAND_TARIFFS_DB_TABLE_NAME . "`";
	$list = $wpdb->get_results($query, 'OBJECT_K');

	if ( $list )
		return $list;
	else
		return [];
}

public function save(){
	global $wpdb;

	if (is_null($this->id))
		$this->add();
	else
		$this->edit();

	return $this;
}

public function delete($id){
	global $wpdb;

	return  $wpdb->delete(
		TOPLAND_TARIFFS_DB_TABLE_NAME,
				[
					'id' => $id
				]
			);
}

protected function add(){
	global $wpdb;

	$rows_affected = $wpdb->insert(
		TOPLAND_TARIFFS_DB_TABLE_NAME,
				[
					'slug'   => $this->slug,
					'title'   => $this->title,
					'subtitle'   => $this->subtitle,
					'price'   => $this->price,
					'text' 	=> $this->text,
									
				]
			);
	return $rows_affected;
}

protected function edit(){
	global $wpdb;

	return 	$wpdb->update(
		TOPLAND_TARIFFS_DB_TABLE_NAME,
				[
					'slug'   => $this->slug,
					'title'   => $this->title,
					'subtitle'   => $this->subtitle,
					'price'   => $this->price,
					'text' 	=> $this->text,
				],
				[
					'id' => $this->id
				]
			);
}

}
