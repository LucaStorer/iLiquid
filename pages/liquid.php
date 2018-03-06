<?php

include('../includes/head.php');

$rs_result = selectreq( "liquid" );

?>

<div class="content">
    <div class="container-fluid">


        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Catalogo dei liquidi

                            <a class="pull-right" data-toggle="modal" data-target="#ModalNewLiquid" href="#">Nuovo <i class="material-icons ">library_add</i></a>
                        </h4>
                        <p class="category">Gestisci i tuoi liquidi per e-Sig</p>

                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <?php
                while ( $row = $rs_result->fetch_assoc() ) {
                    ?>




                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="purple">
                                <i class="material-icons">opacity</i>
                            </div>
                            <div>
                                <h6> <b><?  echo $row["NAME"]; ?> - <?  echo $row["NICOTINE_MG"]; ?> mg </b>


                                    <li class="dropdown close pull-right">


                                        <a class="dropdown-toggle" aria-expanded="true" href="#" data-toggle="dropdown">
                                            <i class="material-icons">more_vert</i>
                                            <!-- <span class="notification">5</span> -->
                                            <!-- <p class="hidden-lg hidden-md">Notifications</p> -->
                                            <div class="ripple-container"></div></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">Modifica</a>
                                                </li>
                                                <li>
                                                    <a href="#">elimina</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <?php
                                        $originalDate = $row["DATE"];
                                        $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>

                                        <!--TODO: Aggiungere controllo se favorito o no-->
                                        <a class="pull-right" href="#"> <i class="material-icons ">favorite_border</i></a>
                                    </h6>
                                    <p class="category"><b><?  echo $newDate; ?> </b></p>
                                </div>
                                <div class="card-content">

                                    <h2 class="title"><?  echo $row["TOTAL_ML"]; ?>
                                        <small>ml</small>
                                    </h2>
                                    <h4> <b> Base Neutra </b> </h4>
                                    <h3 class="title"><?  echo $row["BASE_ML_1"]; ?> ml -
                                        <small><?  echo $row["BASE_MG_1"]; ?> mg</small>
                                    </h3>

                                    <h4> <b> Base Nicotina </b></h4>
                                    <h3 class="title"><?  echo $row["BASE_ML_2"]; ?> ml -
                                        <small><?  echo $row["BASE_MG_2"]; ?> mg</small>
                                    </h3>

                                    <h4><b>  Aroma </b></h4>
                                    <h3 class="title"><?  echo $row["PERC_AROMA"]; ?>% -
                                        <small><?  echo $row["AROMA_ML"]; ?> ml</small>
                                    </h3>
                                </div>

                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">note</i>
                                        <a><?  echo $row["NOTE"]; ?></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <?php
                    };
                    ?>


                </div>
            </div>
<!----------------------------------------------------------->
<?php

include('modaliquid.php');

?>





        </div>
    </div>

    <?php

    include('../includes/footer.php');

    ?>
