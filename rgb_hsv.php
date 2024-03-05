<?php


 include "cabecalho.php";


    if($_POST['hex'] != '' or ($_POST['red'] != '' and $_POST['green'] != '' and $_POST['blue'] != '')){


         if($_POST['hex'] != ''){

            $hex_formatado = substr($_POST['hex'], 1);
           
            $hex_split = str_split($hex_formatado);
            
            $red_bruto = $hex_split[0] . $hex_split[1];
            $green_bruto = $hex_split[2] . $hex_split[3];
            $blue_bruto = $hex_split[4] . $hex_split[5]; 
            $red = hexdec($red_bruto); 
            $green = hexdec($green_bruto); 
            $blue = hexdec($blue_bruto); 
            $hex_comp = $_POST['hex'];

         }else if($_POST['red'] != '' and $_POST['green'] != '' and $_POST['blue'] != ''){

            $red = $_POST['red'];
            $green = $_POST['green'];
            $blue = $_POST['blue'];
            
            $cores = array($_POST['red'], $_POST['green'], $_POST['blue']);

           $hex_comp = sprintf("#%02x%02x%02x", $cores[0], $cores[1], $cores[2]);
            

         }  


    }


?>
<div class='row'>
    <div class='col-md-1'></div>
    <div class='col-md-10'>
        <form name='conversao' id='conversao' method='post' action='<?= $_SERVER['PHP_SELF']?>'>
            <label style='font-size:25px;'>Código RGB/Hex Code:</label>
            <input type="text" class='form-control' name='hex' id='hex' Value='<?= strtoupper($hex_comp)    ?>'>
            <p style='text-align:center;margin-top:10px; font-size:20px;'>OU</p>
            <label style='font-size:25px;'>Cor Vermelha</label>
            <input type="text" class='form-control' name='red' id='red' value='<?= $red?>'>
            <label style='font-size:25px;'>Cor Verde</label>
            <input type="text" class='form-control' name='green' id='green' value='<?= $green?>'>
            <label style='font-size:25px;'>Cor Azul</label>
            <input type="text" class='form-control' name='blue' id='blue' value='<?= $blue?>'>
            <br>
            <button type="submit" class='btn btn-success'>Converter</button>
        </form>
        <br>
        <h2>Result</h2>
        <label>Hue</label>
        <input value="" class='form-control' disabled>


        <label>Saturarion</label>
        <input value="" class='form-control' disabled>


        <label>Value</label>
        <input value="" class='form-control' disabled>


        <label for="">Color Preview</label>
        <input type="color" class="form-control form-control-color" value="<?= $hex_comp?>" disabled style='width:250px; height:250px;'>


    </div>
    <div class='col-md-1'></div>
</div>




</body>
</html>