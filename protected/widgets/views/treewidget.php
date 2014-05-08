<!--
 /**
  * treewidget view file
  *
  * Date: 1/29/13
  * Time: 12:00 PM
  *
  * @author: Spiros Kabasakalis <kabasakalis@gmail.com>
  * @link http://iws.kabasakalis.gr/
  * @link http://www.reverbnation.com/spiroskabasakalis
  * @copyright Copyright &copy; Spiros Kabasakalis 2013
  * @license http://opensource.org/licenses/MIT  The MIT License (MIT)
  * @version 1.0.0
  */
  -->
  <div class="row">
<div class="col-md-12">
    
        <ul>
            <li>
                Se a árvore de categoria estiver vazia, 
                comece criando um ou mais nó raiz
            </li>
            <li>
                Clique com o botão direito do mouse em um nó para ver as 
                ações disponíveis.
            </li>
            <li>
                Mova os nós com clique e arraste. Você pode mover um nó que 
                não seja o nó raiz para uma posição de nó raiz e vice-versa.
            </li>
            <li>
                Nós raízes não podem ser reordenados. Suas posições são fixas
                por id.
            </li>
        </ul>
        
    
        <button id="reload" value="" class="btn btn-large">Atualizar</button>
        <button  id="add_root" type="button" value="" class="btn btn-large">Criar Nó Raiz</button>
    
    
        <!--The tree will be rendered in this div-->
        <div class="well" style="margin-top: 20px" class="row" id="<?php echo $this->jstree_container_ID;?>"></div>
    
</div>
</div>