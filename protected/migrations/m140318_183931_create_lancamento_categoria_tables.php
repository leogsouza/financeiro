<?php

class m140318_183931_create_lancamento_categoria_tables extends CDbMigration
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
        //cria a tabela Categoria
        $this->createTable('tbl_categoria',array(
           'id'  => 'pk',
            'nome' => 'varchar(45) not null',
            'lft' => 'integer default null',
            'rgt' => 'integer default null',
            'lvl' => 'integer default null',
            'data_cadastro' => 'datetime default null',
            'data_alteracao' => 'datetime default null', 
        ),'ENGINE = InnoDB');
        
        //cria a tabela de lançamentos
        $this->createTable('tbl_lancamento', array(
            'id'  => 'pk',
            'descricao' =>'string not null',
            'documento' => 'varchar(20) default null',
            'categoria_id' => 'integer default null',
            'tipo'=> 'integer default null',
            'status' => 'tinyint default null',
            'data_vencimento' => 'datetime default null',
            'data_pagamento' => 'datetime default null',
            'data_cadastro' => 'datetime default null',
            'data_alteracao' => 'datetime default null',
            'valor' => 'decimal(15,2) default null',
            'valor_pago' => 'decimal(15,2) default null',
            'usuario_id' => 'integer not null',
        ),'ENGINE = InnoDB');
        
        // relacionamentos de chaves estrangeiras
        // o campo tbl_lancamento.categoria_id é uma referencia ao campo tbl_categoria.id
        $this->addForeignKey('fk_lancamento_categoria', 'tbl_lancamento', 'categoria_id', 'tbl_categoria', 'id','CASCADE','RESTRICT');
        
        //o campo tbl_lancamento.usuario_id é uma referencia ao campo tbl_usuario.id
        $this->addForeignKey('fk_lancamento_usuario', 'tbl_lancamento', 'usuario_id', 'tbl_usuario', 'id', 'CASCADE', 'RESTRICT');
	}

	public function safeDown()
	{
        $this->truncateTable('tbl_lancamento');
        $this->truncateTable('tbl_categoria');
        $this->truncateTable('tbl_usuario');
        
        $this->dropTable('tbl_lancamento');
        $this->dropTable('tbl_categoria');
        $this->dropTable('tbl_usuario');
	}
	
}