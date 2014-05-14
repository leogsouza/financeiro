<div class="table-responsive">
    <table class="table table-hover lancamentos">
    <tbody>

    <?php
        $total = count($this->dados);
        $i = 1;
        foreach($this->dados as $dado):
    ?>
        <tr>
            <td class="<?php echo $i < $total ? 'td-border-bottom' : ''?>"><?php echo $dado->periodo;?></td>
            <td class="<?php echo $i < $total ? 'td-border-bottom' : ''?>"><?php echo $dado->quantidade;?></td>
            <td class="<?php echo $i < $total ? 'td-border-bottom' : ''?>"><?php echo $dado->receita;?></td>
            <td class="<?php echo $i < $total ? 'td-border-bottom' : ''?>"><?php echo $dado->despesa;?></td>
            <td class="<?php echo $i < $total ? 'td-border-bottom' : ''?>"><?php echo $dado->saldo;?></td>
        </tr>

    <?php 
        $i++;
        endforeach; ?>
    </tbody>
    </table>
</div>