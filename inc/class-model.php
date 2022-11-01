<?php
class ToplandCloudTagModel {

public $id;     // (int)
public $text;  	// текст (tinytext)
public $link;	// ссылка(tinytext)


/**
 * Run
 */
public function __construct(){

}



public function get($id){
	global $wpdb;

	$query = "SELECT * FROM `" . TOPLAND_CLOUDTAG_DB_TABLE_NAME . "` WHERE id = '" . $id . "' LIMIT 1";
	$row = $wpdb->get_row($query, 'OBJECT');

	$this->id 		= $id;
	$this->text 	= is_null($row->text)   ? '' : $row->text;
	$this->link  = is_null($row->link) ? '' : $row->link;

	return $this;
}

public function get_list(){
	global $wpdb;

	$query = "SELECT * FROM `" . TOPLAND_CLOUDTAG_DB_TABLE_NAME . "`";
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
		TOPLAND_CLOUDTAG_DB_TABLE_NAME,
				[
					'id' => $id
				]
			);
}

protected function add(){
	global $wpdb;

	$rows_affected = $wpdb->insert(
		TOPLAND_CLOUDTAG_DB_TABLE_NAME,
				[
					'text' 	=> $this->text,
					'link'   => $this->link,				
				]
			);
	return $rows_affected;
}

protected function edit(){
	global $wpdb;

	return 	$wpdb->update(
		TOPLAND_CLOUDTAG_DB_TABLE_NAME,
				[
					'text' 	=> $this->text,
					'link'   => $this->link,
				],
				[
					'id' => $this->id
				]
			);
}

}
