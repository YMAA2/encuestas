<?php
    session_start();
    //var_dump($_GET);
    /* echo ("url completada: ".$_POST["url"]);*/
    if(isset($_GET["GENERAR"])){
        //echo ("url completada: ".$_GET["url"]);
    } 
    echo "YERA";
?>
<html>
    <form name="buscar" action="./index.php" method="GET">
        <label for="url">URL K1000</label>
        <input type="text" name="url" id="url">
        <br>
        <label for="url">URL K1000 COMPLETADA</label>
        <input type="text" name="url_done" id="url_done" value="<?php if(isset($_GET['url'])) echo $_GET['url'];?>">
        <br>
        <input type="submit" value="GENERAR" name="GENERAR">
    </form>
</html>
<?php
?>
