<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-14-05</title>
    <link rel="stylesheet" href="style.css">
</head>
    <h1>array-laços</h1>
    <h2>impressão com echo</h2>
    <?php
    $var = array(1,2,3,4);
    ?>
        <?php
        $A1 = array("antônio", "luíz", "josé", "joão");
        echo"$A1[0]";
        echo"<br>";
        echo"$A1[1]";
        ?>

    <h2>impressão com for</h2>
        <?php
            for ($x=0; $x<=3; $x++){
                echo"na posição $x o valor é: $A1[$x]";
                echo"<br>";

            }

        ?>

    <h2>Impressão com foreach</h2>
    <?php
        foreach ($A1 as $dados)
        echo"$dados";
        echo"<br>";
    ?>

    <h2>impressão com print</h2>

    <?php
        print_r($var);

    ?>

    <h2>array multidimensional</h2>
    <?php
    $aluno = array ("Maria" =>
                        array ("idade" => "54",
                            "sexo" => "feminino",
                            "endereço" => "GBI"),
                    "José" =>
                        array ("idade" => "59",
                               "sexo" => "masculino",
                               "endereço" => "CNN")      
                    );

    print_r($aluno["Maria"] ["sexo"]);
    ?>

    <h2> Array implícito</h2>
    <?php
        $var[0] = "Messi";
        $var[1] = "Neymar";
        $var[2] = "Vini Jr";

        print_r($var);
    ?>

    <h2>Array associativo</h2>

    <?php $var = ['nome' => 'Jandy',
                  'endereço' => 'Malhada',
                  'sexo' => 'masculino'];

    print_r($var);
    ?>

    <h2>Arrau Multidimensional Para Impressão</h2>

    
    <?php
       $var = ['alunos' =>
                    [
                        [
                            'id' => '1',
                            'nome' => 'Jandilson',
                            'idade' => '18',
                            'cidade' => 'Malhada'
                        ],
                        [
                            'id' => '2',
                            'nome' => 'Marcelo',
                            'idade' => '21',
                            'cidade' => 'Carinhanha'
                        ],
                        [
                            'id' => '3',
                            'nome' => 'Danilo',
                            'idade' => '25',
                            'cidade' => 'Julião'   
                        ]
                    ]
                ];

                echo '<h2> array geral</h2>';
                print_r($var);
                echo '<br>';
                echo '<h2> array grupal</h2>';
                print_r($var['alunos'][0]);
                echo '<br>';
                echo '<h2> array esécifico</h2>';
                print_r($var['alunos'][0]['nome']);


    ?>

    <h2>Tabela de alunos</h2>

<table>
    <tr>
        <th>nome</th>
        <td>
        <?php
                print_r($var['alunos'][0]['nome']);
            ?>        </td>
        <td>
        <?php
                print_r($var['alunos'][1]['nome']);
            ?>        </td>
        <td>
        <?php
                print_r($var['alunos'][2]['nome']);
            ?>
        </td>
    </tr>
    <tr>
        <th>idade</th>
        <td>
        <?php
                print_r($var['alunos'][0]['idade']);
            ?>        </td>
        <td>
        <?php
                print_r($var['alunos'][1]['idade']);
            ?>        </td>
        <td>
        <?php
                print_r($var['alunos'][2]['idade']);
            ?>
        </td>
    </tr>
    <tr>
        <th>ID</th>
        <td>
        <?php
                print_r($var['alunos'][0]['id']);
            ?>        </td>
        <td>
        <?php
                print_r($var['alunos'][1]['id']);
            ?>        </td>
        <td>
        <?php
                print_r($var['alunos'][2]['id']);
            ?>
        </td>    
    </tr>

</table>

<h2>Tabela com for</h2>

<?php
    for ($i=0; $i<3; $i++)
    { ?>
        <tr>
            <td>
                <?php
                print_r($var['alunos'][$i]['nome']);
                ?>
            </td>
            <td>
                <?php
                print_r($var['alunos'][$i]['idade']);
                ?>
            </td>
            <td>
                <?php
                print_r($var['alunos'][$i]['id']);
                ?>
            </td>
        </tr>
        <?php
    };
?>

</body>
</html>