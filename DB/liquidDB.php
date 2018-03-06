<?php
include('connparam.php');

session_start();

// data insert code starts here.
if(isset($_POST['insertcliente']))
{

  $nome = $_POST['nome'];
  $riferimento = $_POST['riferimento'];
  $indirizzo = $_POST['indirizzo'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $piva = $_POST['piva'];
  $tipo = $_POST['tipo'];
  $categoria = $_POST['categoria'];
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO clienti (NOME, RIFERIMENTO,INDIRIZZO,EMAIL,TELEFONO,P_IVA, TIPO_CLIENTE,CATEGORIA)
  VALUES ('$nome','$riferimento', '$indirizzo', '$email', '$telefono', '$piva', '$tipo', '$categoria')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

    include ('logDB.php');
    $LogDB = new LogDB();
    $LogDB->InsertLog($_SESSION['login'],"CLIENTI","INSERT",$sql,"","SUCCESS");

    ?>

    <script>

    //  alert('Cliente aggiunto con Successo');
    window.location='../Mypages/clienti.php'
    </script>
    <?php
  } else {
    ?>
    <script>
    alert('Errore inserimento Cliente');
    window.location='../Mypages/clienti.php'
    </script>
    <?php
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}else{
  ?>
  <script>
  //   alert('altro bottone...');
  // window.location='../Mypages/clienti.php'
  </script>
  <?php

}

//-------------------------------------------------------------------------------------

// data insert code starts here.
if(isset($_POST['updatecliente']))
{

  $idrecord =  $_POST['idrecord'];
  $nome = $_POST['nome'];
  $riferimento = $_POST['riferimento'];
  $indirizzo = $_POST['indirizzo'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $piva = $_POST['piva'];
  $tipo = $_POST['tipo'];
  $categoria = $_POST['categoria'];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "UPDATE clienti SET NOME='$nome', RIFERIMENTO='$riferimento', INDIRIZZO='$indirizzo', EMAIL='$email', TELEFONO='$telefono', P_IVA='$piva', TIPO_CLIENTE='$tipo', CATEGORIA='$categoria' WHERE ID = $idrecord";

  if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    include ('logDB.php');
    $LogDB = new LogDB();
    $LogDB->InsertLog($_SESSION['login'],"CLIENTI","UPDATE",$sql,"","SUCCESS");
    ?>
    <script>
    //  alert('Cliente modificato con Successo');
    window.location='../Mypages/clienti.php'
    </script>
    <?php
  } else {
    ?>
    <script>
    alert('Errore modifica Cliente');
    alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
    window.location='../Mypages/clienti.php'
    </script>
    <?php
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}else{
  ?>
  <script>
  //   alert('altro bottone...');
  //   window.location='../Mypages/clienti.php'
  </script>
  <?php

}

//-------------------------------------------------------------------------------------

// data insert code starts here.
if(isset($_POST['deletecliente']))
{

  $idrecord =  $_POST['idrecord'];


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //   $sql = "DELETE FROM $tablename WHERE ID_CLIENTE = $id";
  $sql = "UPDATE clienti SET `DELETE` = 1 WHERE ID = $idrecord";



  if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    include ('logDB.php');
    $LogDB = new LogDB();
    $LogDB->InsertLog($_SESSION['login'],"CLIENTI","DELETE",$sql,"","SUCCESS");
    ?>
    <script>
    //  alert('Cliente eliminato');
    window.location='../Mypages/clienti.php'
    </script>
    <?php
  } else {
    ?>
    <script>
    alert('Errore eliminazione');
    alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
    window.location='../Mypages/clienti.php'
    </script>
    <?php
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}

?>
