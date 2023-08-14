<?php  
Class calculador{
  var $num1;
  var $num2;
  var $res;

  function __construct(){
    $this->num1="";
    $this->num2="";
  }
function sumar($num1,$num2){
  $this->res=$num1+$num2;
  return $this->res;
}
}


$sumar=new Calculador();

$res = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $res =$sumar->sumar($num1, $num2);
}

?> 
<html>
  <head>
    <title>Formulario</title>
  </head>
  <body>

    <form action="" method="POST">
    <label for="num1">Numero 1:</label>
        <input type="number" name="num1" required/><br><br> 
<label for="num2">Numero 2:</label>
        <input type="number" name="num2" required/><br><br>


<input type="submit" value="Resultado" />

<?php if($res !==null): ?>
  <p>El resultado es: <?php echo $res?></p>
  <?php endif;?>


    </form>
  </body>
</html>