<script type="text/javascript">
    function navegar(teste){
        console.log(teste.nascimento.value);
        //alert("OK");
        //form.submit;  
    }
</script>

<form action="" method="POST">
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
</form>


<?php

    echo '<pre>';
    print_r($_REQUEST) ;
    echo '</pre>';

    if (($_REQUEST)) {
        foreach ($_REQUEST as $key => $value) {
            echo "Nome do campo: $key";
            echo "<br>";
            echo "Valor do campo: $value";
            echo "<hr>";
        }
    }


?>