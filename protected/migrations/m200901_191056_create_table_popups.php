<?php

class m200901_191056_create_table_popups extends CDbMigration
{
	private $tableName = 'popups';

	public function up()
	{
		$this->createTable($this->tableName, array(
			'pu_id' => 'pk',
			'name' => 'varchar(255)',
			'text' => 'text',
			'show' => 'bool DEFAULT 0',
			'counter' => 'int DEFAULT 0',
		));
	}

	public function down()
	{
		$this->dropTable($this->tableName);
		// echo "m200901_191056_create_table_popups does not support migration down.\n";
		// return false;
	}
}
