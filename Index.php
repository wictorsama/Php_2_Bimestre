<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Wf noticia</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style type="text/css">	@import url("../../css/form.css"); </style>
        <?php
//includes
//include ("../../mysql/Conexao.php");
//include ("../../bean/pessoa.php");
        ?>
    </head>

    <body>

        <form id="form1" name="form1" method="post" action="">
            <table border="0" cellspacing="0" cellpadding="1">
                <tr>
                    <td><p><button class="w3-btn w3-blue w3-xsmall">Novo<i class="w3-margin-left glyphicon glyphicon-plus"></i></button></p>
                    <td><p><button class="w3-btn w3-blue w3-xsmall">Alterar<i class="w3-margin-left glyphicon glyphicon-pencil"></i></button></p>
                    <td><p><button class="w3-btn w3-blue w3-xsmall">Deletar<i class="w3-margin-left glyphicon glyphicon-trash"></i></button></p>
                    <td><p><button class="w3-btn w3-blue w3-xsmall">Busca<i class="w3-margin-left glyphicon glyphicon-search"></i></button></p>
                    <td><p><button class="w3-btn w3-blue w3-xsmall">Fechar<i class="w3-margin-left glyphicon glyphicon-remove"></i></button></p>

<!--      <td><input name="novo" id="novo" class="glyphicon glyphicon-plus"/></td>
      <td><input name="alterar" type="image" id="alterar" src="../Trabalho_2Bimestre/icons/pencil.png"/></td>
      <td><input name="deletar" type="image" id="deletar" src="../Trabalho_2Bimestre/icons/remove-button.png"/></td>
      <td><input name="busca" type="image" id="busca" src="../Trabalho_2Bimestre/icons/magnifier.png"/></td>
      <td><input name="fechar" type="image" id="fechar"  onClick="window.close()" src="../Trabalho_2Bimestre/icons/close.png"/></td>-->
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>

            <table border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                    <td width="55">Nome:</td>
                    <td><input name="nome" type="text" id="nome" size="80" /></td>
                </tr>
                <tr>
                    <td>Endereco:</td>
                    <td><input name="endereco" type="text" id="textfield2" size="80" /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input name="email" type="text" id="email" size="80" /></td>
                </tr>

                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone" id="textfield7" /></td>
                </tr>

                <tr>
                    <td>CPF:</td>
                    <td><input type="text" name="cpf" id="textfield9" /></td>
                </tr>

                <tr>
                    <td>Data Nascimento</td>
                    <td><input type="text" name="date_birth" id="textfield9" /></td>
                </tr>

                <tr>
                    <td> </td>
                    <td><p><button class="w3-btn w3-blue w3-xsmall">Cadastrar<i class="w3-margin-left glyphicon glyphicon-plus-sign"></i></button></p></td>
<!--                    <td><input type="submit" name="button" id="button" value="Cadastrar" /></td>-->
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
        </form>
    </body>
</html>