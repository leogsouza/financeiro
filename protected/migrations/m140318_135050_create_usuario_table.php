<?php
/**
 * Migration da criação da tabela de usuários
 * @author Leonardo Souza <leogsouza@gmail.com>
 */
class m140318_135050_create_usuario_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_usuario',array(
            'id' => 'pk',
            'nome' => 'varchar(45) not null',
            'email' => 'varchar(70) not null',
            'login' => 'varchar(20) not null',
            'senha' => 'varchar(80) not null',
            'data_cadastro' => 'datetime',
            'data_alteracao' => 'datetime',
        ),'ENGINE = InnoDB');
            
	}

	public function down()
	{
        $this->dropTable('tbl_usuario');
		echo "m140318_135050_create_usuario_table does not support migration down.\n";
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