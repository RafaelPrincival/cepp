<!DOCTYPE html>
<!--<! -- Trazer Resultados CEP, Rua, Bairro e Estado -->

<html lang="pt-br"> <!-- Declaração do Idioma  -->
    <head>
        <meta charset="UTF-8">
        <title> MEU CEP </title>
    <label> Insira o CEP: </label>
    <input type="text" name="cep"> 
    <input type="submit" value="Enviar"> <br />
    <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
    <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
    <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />

    <?php
    if (!empty($_POST['cep'])) {

        $cep = $_POST['cep'];

        $address = (get_address($cp));

        echo "<br><br>CEP Informado: $cep<br>";
        echo "Rua: $addres->logradoro<br>";
        echo "Bairro: $address->bairro<br>";
        echo "Estado: $adress->uf<br>";
    }

    function get_address($cep) {


        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws$cep/xml/";

        $xml = simplexml_load_file($url);
        return $xml;
    }
    ?>
</body>
</html>