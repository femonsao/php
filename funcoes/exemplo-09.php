<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados' =>array(
            //inicio: Diretor comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio: gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //termino: Gerente de Vendas 
                )
            ),
            //Termino: Diretor comercial
            //Inicio: Diretor Financeiro
                array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Inicio:Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de Conta a Pagar',
                        'subordinados'=>array(
                            //inicio:surpevisor de pagamentos
                            array(
                                'nome_cargo'=>'supervisoir de pagamentos'
                            )
                            //termino de supervisor de pagamentos 
                        )
                    ),
                    //Termino: Gerente contas a Pagar
                    //Inicio: Gerente de Compras
                        array(
                        'nome_cargo'=>'Gerente de compras',
                        'subordinados'=>array(
                            //inicio:Supervisor de Suprimentos
                            array(
                                'nome_cargo'=> 'Supervisor de Suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'Funcionario'
                                    )
                                )

                            )
                            //Termino:Supervisor de Suprimentos


                        )
                    )
                                
                )
             ),
                      
        )
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {
       
        $html .= '<li>';

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados'])&& count($cargo['subordinados'])>0){

            $html .= exibe($cargo['subordinados']);
        }

        $html .= '</li>';

    }

    $html .='</ul>';

    return $html;

}

echo exibe($hierarquia);

?>