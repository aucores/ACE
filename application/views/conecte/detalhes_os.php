<link rel="stylesheet" href="<?php echo base_url()?>assets/trumbowyg/ui/trumbowyg.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/trumbowyg/trumbowyg.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/trumbowyg/langs/pt_br.js"></script>

<style>
.ui-datepicker{
    z-index: 9999 !important;
}
.trumbowyg-box {
    margin-top: 0;
    margin-bottom: 0;
}
</style>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Detalhes OS</h5>
            </div>
            <div class="widget-content nopadding">


                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes da OS</a></li>
                        <li id="tabProdutos"><a href="#tab2" data-toggle="tab">Produtos</a></li>
                        <li id="tabServicos"><a href="#tab3" data-toggle="tab">Serviços</a></li>
                        <li id="tabAnexos"><a href="#tab4" data-toggle="tab">Anexos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divCadastrarOs">
                            
                                    
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        
                                        
                                        <div class="span6" style="margin-left: 0">
                                            <h3>#Protocolo: <?php echo $result->idOs ?></h3>
                                            <input id="valorTotal" type="hidden" name="valorTotal" value=""  />
                                        </div>
                                        <div class="span6">
                                            <label for="tecnico">Vendedor / Responsável</label>
                                            <input disabled="disabled" id="tecnico" class="span12" type="text" name="tecnico" value="<?php echo $result->nome ?>"  />

                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span3">
                                            <label for="status">Status<span class="required"></span></label>
                                            <input disabled="disabled" type="text" name="status" id="status" value="<?php echo $result->status;?>">
                                            
                                        </div>
                                        <div class="span3">
                                            <label for="dataInicial">Data Inicial<span class="required">*</span></label>
                                            <input id="dataInicial" disabled="disabled" class="span12 datepicker" type="text" name="dataInicial" value="<?php echo date('d/m/Y', strtotime($result->dataInicial)); ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="dataFinal">Data Final</label>
                                            <input id="dataFinal" disabled="disabled" class="span12 datepicker" type="text" name="dataFinal" value="<?php echo date('d/m/Y', strtotime($result->dataFinal)); ?>"  />
                                        </div>


                                    </div>
                                    
                            </div>


                        <!--Produtos-->
                        <div class="tab-pane" id="tab2">
                            
                            <div class="span12" id="divProdutos" style="margin-left: 0">
                                <table class="table table-bordered" id="tblProdutos">
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Quantidade</th>
                                            <th>Sub-total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total = 0;
                                        foreach ($produtos as $p) {
                                            
                                            $total = $total + $p->subTotal;
                                            echo '<tr>';
                                            echo '<td>'.$p->descricao.'</td>';
                                            echo '<td>'.$p->quantidade.'</td>';
                                            echo '<td>R$ '.number_format($p->subTotal, 2, ',', '.').'</td>';
                                            echo '</tr>';
                                        }?>
                                       
                                        <tr>
                                            <td colspan="2" style="text-align: right"><strong>Total:</strong></td>
                                            <td><strong>R$ <?php echo number_format($total, 2, ',', '.');?><input type="hidden" id="total-venda" value="<?php echo number_format($total, 2); ?>"></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!--Serviços-->
                        <div class="tab-pane" id="tab3">
                            <div class="span12" style="padding: 1%; margin-left: 0">
                                
                                <div class="span12" id="divServicos" style="margin-left: 0">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Serviço</th>
                                                <th>Sub-total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $total = 0;
                                            foreach ($servicos as $s) {
                                                $preco = $s->preco;
                                                $total = $total + $preco;
                                                echo '<tr>';
                                                echo '<td>'.$s->nome.'</td>';
                                                echo '<td>R$ '.number_format($s->preco, 2, ',', '.').'</td>';
                                                echo '</tr>';
                                            }?>

                                        <tr>
                                            <td colspan="1" style="text-align: right"><strong>Total:</strong></td>
                                            <td><strong>R$ <?php echo number_format($total, 2, ',', '.');?><input type="hidden" id="total-servico" value="<?php echo number_format($total, 2); ?>"></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        </div>
                


                    </div>

                </div>


.

        </div>

    </div>
</div>
</div>




 

<!-- Modal Faturar-->
<div id="modal-faturar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="formFaturar" action="<?php echo current_url() ?>" method="post">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h3 id="myModalLabel">Faturar Venda</h3>
</div>
<div class="modal-body">
    
    <div class="span12 alert alert-info" style="margin-left: 0"> Obrigatório o preenchimento dos campos com asterisco.</div>
    <div class="span12" style="margin-left: 0"> 
      <label for="descricao">Descrição</label>
      <input class="span12" id="descricao" type="text" name="descricao" value="Fatura de Venda - #<?php echo $result->idOs; ?> "  />
      
    </div>  
    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="cliente">Cliente*</label>
        <input class="span12" id="cliente" type="text" name="cliente" value="<?php echo $result->nomeCliente ?>" />
        <input type="hidden" name="clientes_id" id="clientes_id" value="<?php echo $result->clientes_id ?>">
        <input type="hidden" name="os_id" id="os_id" value="<?php echo $result->idOs; ?>">
      </div>
      
      
    </div>
    <div class="span12" style="margin-left: 0"> 
      <div class="span4" style="margin-left: 0">  
        <label for="valor">Valor*</label>
        <input type="hidden" id="tipo" name="tipo" value="receita" /> 
        <input class="span12 money" id="valor" type="text" name="valor" value="<?php echo number_format($total, 2); ?> "  />
      </div>
      <div class="span4" >
        <label for="vencimento">Data Vencimento*</label>
        <input class="span12 datepicker" id="vencimento" type="text" name="vencimento"  />
      </div>
      
    </div>
    
    <div class="span12" style="margin-left: 0"> 
      <div class="span4" style="margin-left: 0">
        <label for="recebido">Recebido?</label>
        &nbsp &nbsp &nbsp &nbsp <input  id="recebido" type="checkbox" name="recebido" value="1" /> 
      </div>
      <div id="divRecebimento" class="span8" style=" display: none">
        <div class="span6">
          <label for="recebimento">Data Recebimento</label>
          <input class="span12 datepicker" id="recebimento" type="text" name="recebimento" /> 
        </div>
        <div class="span6">
          <label for="formaPgto">Forma Pgto</label>
          <select name="formaPgto" id="formaPgto" class="span12">
            <option value="Dinheiro">Dinheiro</option>
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Cheque">Cheque</option>
            <option value="Boleto">Boleto</option>
            <option value="Depósito">Depósito</option>
            <option value="Débito">Débito</option>        
          </select> 
      </div>
      
    </div>
    
    
    </div>
</div>
<div class="modal-footer">
  <button class="btn" data-dismiss="modal" aria-hidden="true" id="btn-cancelar-faturar">Cancelar</button>
  <button class="btn btn-primary">Faturar</button>
</div>
</form>
</div>

<script type="text/javascript">
$(document).ready(function(){
                  $('.editor').trumbowyg({
                                         lang: 'pt_br'
                                         });
                  });

</script>


