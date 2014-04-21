<?php

class m140403_003643_alter_categoria_table extends CDbMigration
{
	public function up()
	{
        $this->safeUp();
	}

	public function down()
	{
        $this->safeDown();
		//echo "m140318_183931_create_lancamento_categoria_tables does not support migration down.\n";
		//return false;
	}

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        $this->addColumn('tbl_categoria', 'root', 'integer NULL DEFAULT NULL AFTER `nome`');
        $this->addColumn('tbl_categoria','descricao','varchar(80) NULL DEFAULT NULL AFTER `nome`');
        $this->createIndex('lft', 'tbl_categoria', 'lft');
        $this->createIndex('rgt', 'tbl_categoria', 'rgt');
        $this->createIndex('lvl', 'tbl_categoria', 'lvl');
        $this->createIndex('root', 'tbl_categoria', 'root');
	}

	public function safeDown()
	{
        $this->dropIndex('lft', 'tbl_categoria');
        $this->dropIndex('rgt', 'tbl_categoria');
        $this->dropIndex('lvl', 'tbl_categoria');
        $this->dropIndex('root', 'tbl_categoria');
        $this->dropColumn('tbl_categoria', 'root');
        $this->dropColumn('tbl_categoria', 'descricao');
	}
	
}