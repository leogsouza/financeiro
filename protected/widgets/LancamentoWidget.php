<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LancamentoWidget
 *
 * @author Leonardo
 */
class LancamentoWidget extends CWidget
{
    const TIPO_LANCAMENTOS_FUTUROS =1;
    const TIPO_LANCAMENTOS_VENCIDOS = 2;   
    
    public $tipo;
    
    
    public $dados = array();
    
    public function init()
    {
        if($this->tipo == self::TIPO_LANCAMENTOS_FUTUROS) {
            $this->dados = $this->getLancamentosFuturos();
        } elseif( $this->tipo == self::TIPO_LANCAMENTOS_VENCIDOS) {
            $this->dados = $this->getLancamentosVencidos();
        }
    }
    
    public function run()
    {
        $this->render('lancamento');
    }
    
    private function getLancamentosFuturos()
    {
        
        $sqlLancamentos = "SELECT 
            'Hoje' AS periodo,
            (SELECT COUNT(id) FROM tbl_lancamento WHERE data_vencimento = CURDATE() AND STATUS = 0) AS quantidade,
            @receita := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 1 AND data_vencimento = CURDATE() AND STATUS = 0),0.00) AS receita,
            @despesa := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 0 AND data_vencimento = CURDATE() AND STATUS = 0),0.00) AS despesa,
            CAST((@receita-@despesa) AS DECIMAL(15,2)) AS saldo
        UNION
        SELECT 
            'Em 7 dias' AS periodo,
            (SELECT COUNT(id) FROM tbl_lancamento WHERE data_vencimento > CURDATE() AND data_vencimento <= ADDDATE(CURDATE(),7) AND STATUS = 0) AS quantidade,
            @receita := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 1 AND data_vencimento > CURDATE() AND data_vencimento <= ADDDATE(CURDATE(),7) AND STATUS = 0),0.00) AS receita,
            @despesa := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 0 AND data_vencimento > CURDATE() AND data_vencimento <= ADDDATE(CURDATE(),7) AND STATUS = 0),0.00) AS despesa,
            CAST((@receita-@despesa) AS DECIMAL(15,2)) AS saldo
        UNION
        SELECT 
            'Em 14 dias' AS periodo,
            (SELECT COUNT(id) FROM tbl_lancamento WHERE data_vencimento > ADDDATE(CURDATE(),7) AND data_vencimento <= ADDDATE(CURDATE(),14) AND STATUS = 0) AS quantidade,
            @receita := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 1 AND data_vencimento > ADDDATE(CURDATE(),7) AND data_vencimento <= ADDDATE(CURDATE(),14) AND STATUS = 0),0.00) AS receita,
            @despesa := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 0 AND data_vencimento > ADDDATE(CURDATE(),7) AND data_vencimento <= ADDDATE(CURDATE(),14) AND STATUS = 0),0.00) AS despesa,
            CAST((@receita-@despesa) AS DECIMAL(15,2)) AS saldo;";
        
        
        return Lancamento::model()->findAllBySql($sqlLancamentos);
    }
    private function getLancamentosVencidos()
    {
        
        $sqlLancamentos = "/* Query de lançamentos vencido até 7 dias*/
            SELECT 
                'Até 7 dias' AS periodo,
                (SELECT COUNT(id) FROM tbl_lancamento WHERE data_vencimento < CURDATE() AND data_vencimento >= SUBDATE(CURDATE(),7) AND STATUS = 0) AS quantidade,
                @receita := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 1 AND data_vencimento < CURDATE() AND data_vencimento >= SUBDATE(CURDATE(),7) AND STATUS = 0),0.00) AS receita,
                @despesa := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 0 AND data_vencimento < CURDATE() AND data_vencimento >= SUBDATE(CURDATE(),7) AND STATUS = 0),0.00) AS despesa,
                CAST((@receita-@despesa) AS DECIMAL(15,2)) AS saldo
            UNION
            /* Query de lançamentos vencido até 14 dias*/
            SELECT 
                'Até 14 dias' AS periodo,
                (SELECT COUNT(id) FROM tbl_lancamento WHERE data_vencimento < SUBDATE(CURDATE(),7) AND data_vencimento >= SUBDATE(CURDATE(),14) AND STATUS = 0) AS quantidade,
                @receita := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 1 AND data_vencimento < SUBDATE(CURDATE(),7) AND data_vencimento >= SUBDATE(CURDATE(),14) AND STATUS = 0),0.00) AS receita,
                @despesa := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 0 AND data_vencimento < SUBDATE(CURDATE(),7) AND data_vencimento >= SUBDATE(CURDATE(),14) AND STATUS = 0),0.00) AS despesa,
                CAST((@receita-@despesa) AS DECIMAL(15,2)) AS saldo
            UNION
            /* Query de lançamentos vencido ACIMA DE 14 dias*/
            SELECT 
                'Acima de dias' AS periodo,
                (SELECT COUNT(id) FROM tbl_lancamento WHERE data_vencimento < SUBDATE(CURDATE(),14) AND STATUS = 0) AS quantidade,
                @receita := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 1 AND data_vencimento < SUBDATE(CURDATE(),14) AND STATUS = 0),0.00) AS receita,
                @despesa := COALESCE((SELECT SUM(valor) FROM tbl_lancamento WHERE tipo = 0 AND data_vencimento < SUBDATE(CURDATE(),14) AND STATUS = 0),0.00) AS despesa,
                CAST((@receita-@despesa) AS DECIMAL(15,2)) AS saldo;";
        
        return Lancamento::model()->findAllBySql($sqlLancamentos);
    }
}
