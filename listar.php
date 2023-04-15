<?php
    include('conexao.php');
    function listarConveniado(){
        $sql = 'SELECT * FROM cliente_conveniado ORDER BY id';
        $res = $GLOBALS['mysqli']->query($sql);

        if($res){
            echo '<table> <thead> <tr> <th>ID</th> <th style="width: 400px;">NOME</th> <th>DATA DE NASCIMENTO</th> <th>PLACA</th> </tr></thead> <tbody>';
            while($row = $res->fetch_assoc()){
                echo "<tr> 
                        <td>".$row['id']."</td>
                        <td>".$row['nome']."</td> 
                        <td>".$row['dt_nascimento']."</td> 
                        <td>".$row['placa_carro']."</td> 
                      </tr>"; 
            }
            echo '</tbody> </table>';
        }
    }

    function listarIndividual(){
        $sql = 'SELECT * FROM cliente_individual ORDER BY id';
        $res = $GLOBALS['mysqli']->query($sql);

        if($res){
            echo '<table> <thead> <tr> <th>ID</th> <th style="width: 400px;">NOME</th> <th>DATA DE NASCIMENTO</th> <th>PLACA</th> </tr></thead> <tbody>';
            while($row = $res->fetch_assoc()){
                echo "<tr> 
                        <td>".$row['id']."</td>
                        <td>".$row['nome']."</td> 
                        <td>".$row['dt_nascimento']."</td> 
                        <td>".$row['placa_carro']."</td> 
                      </tr>"; 
            }
            echo '</tbody> </table>';
        }
    }

    function listarMensal(){
        $sql = 'SELECT * FROM cliente_mensal ORDER BY id';
        $res = $GLOBALS['mysqli']->query($sql);

        if($res){
            echo '<table> <thead> <tr> <th>ID</th> <th style="width: 400px;">NOME</th> <th>DATA DE NASCIMENTO</th> <th>PLACA</th> </tr></thead> <tbody>';
            while($row = $res->fetch_assoc()){
                echo "<tr> 
                        <td>".$row['id']."</td>
                        <td>".$row['nome']."</td> 
                        <td>".$row['dt_nascimento']."</td> 
                        <td>".$row['placa_carro']."</td> 
                      </tr>"; 
            }
            echo '</tbody> </table>';
        }
    }
    
?>