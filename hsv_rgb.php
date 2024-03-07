<?php


include "cabecalho.php";

$hue = $_POST['hue'];
$saturacao = $_POST['saturacao'];
$valor = $_POST['valor'];

if($hue != '' and $saturacao != '' and $valor != ''){

if (($hue >= 0 or $hue < 360) and ($saturacao <= 0 or $saturacao <= 1) and ($valor <= 0 or $valor <= 1)) {
}else{

    print "
    <br>
    <div class='row'>
    <div class='col-md-1'></div>
    <div class='col-md-10'>
    <div class='alert alert-danger' role='alert'>
        Impossível converter os valores informados !
        </div>    
        <div class='col-md-1'></div>
     </div>
    </div>
    
    ";


}

}

?>


<div class='row'>
    <div class='col-md-1'></div>
    <div class='col-md-10'>
        <form name='conversao' id='conversao' method='post' action='<?= $_SERVER['PHP_SELF'] ?>'>

            <label style='font-size:25px;'>Hue(H)</label>
            <div class="input-group mb-3">
                <input type="text" class='form-control' name='hue' id='hue' value='<?= $hue ?>'>
                <span class="input-group-text">°</span>
            </div>

            <label style='font-size:25px;'>Saturation(S)</label>
            <div class="input-group mb-3">
                <input type="text" class='form-control' name='saturacao' id='saturacao' value='<?= $saturacao ?>'>
                <span class="input-group-text">%</span>
            </div>

            <label style='font-size:25px;'>Value(V)</label>
            <div class="input-group mb-3">
                <input type="text" class='form-control' name='valor' id='valor' value='<?= $valor ?>'>
                <span class="input-group-text">%</span>
            </div>

            <button type="submit" class='btn btn-success'>Converter</button>
            <button type="button" class='btn btn-danger' onclick='recarregar()'>Resetar</button>
        </form>
        <br>
        <h2>Result</h2>

        <label style='font-size:25px;'>Código HEX</label>
        <input type="text" class='form-control' value='<?= $hex_comp ?>' disabled>

        <label style='font-size:25px;'>Vermelho(R)</label>
        <input type="text" class='form-control' value='<?= $red ?>' disabled>

        <label style='font-size:25px;'>Verde(G)</label>
        <input type="text" class='form-control' value='<?= $green ?>' disabled>

        <label style='font-size:25px;'>Azul(B)</label>
        <input type='text' value="<?= $blue ?>" class='form-control' disabled>

        <label for="">Color Preview</label>
        <input type="color" class="form-control form-control-color" value="<?= $hex_comp ?>" disabled style='width:250px; height:250px;'>
    </div>
    <div class='col-md-1'></div>
</div>

<form name="limpa" id="limpa" method="post" action="<?= $_SERVER['php_self'] ?>">
</form>

</body>

</html>


<script>
    function recarregar() {

        document.limpa.submit();

    }
</script>