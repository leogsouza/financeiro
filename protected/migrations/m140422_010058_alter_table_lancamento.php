<?php

class m140422_010058_alter_table_lancamento extends CDbMigration
{
	public function up()
	{
        $this->alterColumn('tbl_lancamento', 'data_vencimento', 'DATE');
        $this->alterColumn('tbl_lancamento', 'data_pagamento', 'DATE');
	}

	public function down()
	{
		echo "m140422_010058_alter_table_lancamento does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}