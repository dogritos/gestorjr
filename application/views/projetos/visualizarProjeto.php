<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Dados do Projeto</a></li>
            <li><a data-toggle="tab" href="#tab2">Ordens de Serviço</a></li>
            <li><a data-toggle="tab" href="#tab3">Desempenho</a></li>
            <div class="buttons">
                    <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'eCliente')){
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.base_url().'index.php/projetos/editar/'.$result->idProjetos.'"><i class="icon-pencil icon-white"></i> Editar</a>'; 
                    } ?>
                    
            </div>
        </ul>
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">

            <div class="accordion" id="collapse-group">
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Informações Gerais</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Nome</strong></td>
                                                    <td><?php echo $result->nome ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Cliente</strong></td>
                                                    <td><?php echo $result->cliente ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Data do Contrato</strong></td>
                                                    <td><?php echo date('d/m/Y',  strtotime($result->dataContrato)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Data do Entrega</strong></td>
                                                    <td><?php echo date('d/m/Y',  strtotime($result->dataEntrega)) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Informações do Cliente</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGTwo">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right"><strong>Nome</strong></td>
                                                    <td><?php echo $result->cliente ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Telefone</strong></td>
                                                    <td><?php echo ""//$result->telefone ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Celular</strong></td>
                                                    <td><?php echo ""//$result->celular ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Email</strong></td>
                                                    <td><?php echo ""//$result->email ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Equipe</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGThree">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="backgroud-color: #2D335B">
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Ocupação</th>
                                                    <th>Área</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo "<tr><td></td><td></td><td></td></tr>";
                                                /*/
                                                foreach ($resultAss as $r) {
                                                    echo '<tr>';
                                                    echo '<td>' . $r->nome . '</td>';
                                                    echo '<td>' . $r->telefone . '</td>';

                                                    echo '<td>';
                                                    if($this->permission->checkPermission($this->session->userdata('permissao'),'vOs')){
                                                        echo '<a href="' . base_url() . 'index.php/associados/visualizar/' . $r->idOs . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>'; 
                                                    }
                                                    echo  '</td>';
                                                    echo '</tr>';
                                                }    
                                                /**/
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



          
        </div>


    
        <!--Tab 2-->
        <div id="tab2" class="tab-pane" style="min-height: 300px">
            <?php if (!$results) { ?>
                
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Associado</th>
                                    <th>Data Final</th>
                                    <th>Descricao</th>
                                    <th>Defeito</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="6">Nenhum associado está vinculado ao projeto</td>
                                </tr>
                            </tbody>
                        </table>
                
                <?php } else { ?>


              

                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Associado</th>
                                    <th>Data Final</th>
                                    <th>Descricao</th>
                                    <th>Defeito</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                foreach ($results as $r) {
                    $dataInicial = date(('d/m/Y'), strtotime($r->dataInicial));
                    $dataFinal = date(('d/m/Y'), strtotime($r->dataFinal));
                    echo '<tr>';
                    echo '<td>' . $r->idOs . '</td>';
                    echo '<td>' . $dataInicial . '</td>';
                    echo '<td>' . $dataFinal . '</td>';
                    echo '<td>' . $r->descricaoProduto . '</td>';
                    echo '<td>' . $r->defeito . '</td>';

                    echo '<td>';
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'vOs')){
                        echo '<a href="' . base_url() . 'index.php/associados/visualizar/' . $r->idOs . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>'; 
                    }
                    echo  '</td>';
                    echo '</tr>';
                } ?>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
            

            <?php  } ?>

        </div>
            <!--Tab 3-->
        <!--
        <div id="tab3" class="tab-pane" style="min-height: 300px">
            <?php if (!$desempenho) { ?>
                
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Seleção</th>
                                    <th>trainee</th>
                                    <th>Associação</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="6">Nenhuma OS Cadastrada</td>
                                </tr>
                            </tbody>
                        </table>
                
                <?php } else { ?>


              

                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Seleção</th>
                                    <th>trainee</th>
                                    <th>Associação</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                    echo '<tr>';
                    echo '<td>' . $desempenho->responsavel_id . '</td>';
                    echo '<td>' . $desempenho->dpSelecao . '</td>';
                    echo '<td>' . $desempenho->dpTrainee . '</td>';
                    echo '<td>' . $desempenho->status . '</td>';
                    echo '<td>';
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'vOs')){
                        echo '<a href="' . base_url() . 'index.php/projetos/visualizar/' . $desempenho->idDesempenho . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>'; 
                    }
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'eOs')){
                        echo '<a href="' . base_url() . 'index.php/projetos/editar/' . $desempenho->idDesempenho . '" class="btn btn-info tip-top" title="Editar Desempenho"><i class="icon-pencil icon-white"></i></a>'; 
                    }
                    
                    echo  '</td>';
                    echo '</tr>';
                     ?>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
            

            <?php  } ?>

        </div>
        -->
    </div>
</div>