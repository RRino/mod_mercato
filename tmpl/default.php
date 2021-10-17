<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_mercato
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

//echo 'Mod mercatino' . $test . '<br />' . $url;

?>

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>



<style>
.dadatalb {
    margin-top: 3px;
    padding: 5px;
}
</style>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">


            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-4">
                        <!-- Colonna vuota cerca -->
                        <h3 style="color:green"><?php //echo $categoria_desc ?></h3>

                    </div>
                    <div class="col-12 col-md-4">

                        <form name="form5" method="post" enctype="multipart/form-data"
                            class="form-control-sm needs-validation">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="text" id="form1" name="cerca" class="form-control"
                                        placeholder="Cerca nelle descrizione (tutti)" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-small">Cerca</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


            <br>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div style="border:solid 1px #ccc;padding:10px;border-radius:5px;">
                            <form name="form1" id="form1" method="post" enctype="multipart/form-data"
                                class="form-control-sm needs-validation">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-12 col-lg-2">

                                            <!--<div style="margin-left:15px;"> Visualizza </div>-->
                                            <!--<div class="btn" role="group" aria-label="Basic outlined example">
                                            <input type="submit" class="btn <?php //echo $classeButtonLista?>" name="invia" value="Lista">
                                            </div>-->

                                            <div class="btn" role="group" aria-label="Basic outlined example">
                                                <input type="submit" class="btn btn-primary" name="invia"
                                                    value="Visualizza">
                                            </div>
                                        </div>



                                        <div class="col-12 col-lg-6">
                                            <!-- datapicker ---------->
                                            <div class="container">
                                                <div class='col-12 col-sm-8'>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-6 col-md-10">


                                        <!-- -->
                                        <div class="form-check form-switch">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    value="tutti" id="flexRadioDefault1"
                                                    <?php echo $session->get('tutti')  ?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Tutti&nbsp;&nbsp;
                                                </label>
                                            </div>


                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" value="generico"
                                                    <?php echo $session->get('generico')  ?>>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Generico&nbsp;&nbsp;
                                                </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault3" value="trekking"
                                                    <?php echo $session->get('trekking')  ?>>
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Trekking&nbsp;&nbsp;
                                                </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault4" value="ciclismo"
                                                    <?php echo $session->get('ciclismo')  ?>>
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Ciclismo&nbsp;&nbsp;
                                                </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault5" value="arrampicata"
                                                    <?php echo $session->get('arrampicata')  ?>>
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Arrampicata &nbsp;&nbsp;&nbsp;&nbsp;
                                                </label>

                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault5" value="alpinismo"
                                                    <?php echo $session->get('alpinismo')  ?>>
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Alpinismo&nbsp;&nbsp;
                                                </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault5" value="sci"
                                                    <?php echo $session->get('sci')  ?>>
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Sci
                                                </label>
                                            </div>

                                            </div>
                                        </div>
                                        <!---->

                                    </div>
                                    <div class="col-6 col-md-6"></div>

                            </form>
                        </div>
                    </div>
                </div>
                <br>

                <!------- BLOCCHI -->
                <style>
                #tipogruppo {
                    font-size: 10px;
                    color: #333;
                }

                .card {
                    width: 250px;
                    height: 500px;
                    margin-bottom: 10px;
                }

                img.card-img-top {
                    height: 210px;
                    overflow: auto;
                    padding: 5px;
                }

                h6.card-title {
                    height: 80px;

                }

                .categor {
                    font-size: 8px;
                    color: gray;
                }
                </style>
                <br><?php echo $messaggio ?><br>
                <hr>
                <div class="container" style="border:solid 1p red">

                    <div class="row">

                        <?php 
                for ($e = 0; $e < $evn; $e++) { ?>
                        <div class="col">
                            <div class="card">
                                <!-- esclude lo slash / prima dell posizione cartella -->
                                <?php 
                                   if($eventi[$e]['fotodue'] != ''){
                                    $pathimage2 =  $eventi[$e]['fotodue'] ;
                                   }
                                   $pathimage =  $eventi[$e]['picture'] ;
                                 if ($pathimage != '') {
                                   if (substr($pathimage, 0, 1) == '/') {?>
                                 
                                     <button type="button" class="btn btn-link btn-sm" href="" data-bs-toggle="modal" data-bs-target="#image<?php echo $e; ?>">
                                        <img class="card-img-top" src="<?php  echo substr($pathimage, 1) ?>" alt="CAI Bologna">      
                                    </button>

                               <?php } else { ?>

                                    <button type="button" class="btn btn-link btn-sm" href="" data-bs-toggle="modal" data-bs-target="#image<?php echo $e; ?>">
                                       <img class="card-img-top" src="<?php echo substr($pathimage, 0) ?>" alt="CAI Bologna">      
                                    </button>

                               <?php }?>
                                <?php }else{ ?>
                                    <!-- NESSUNA IMMAGINE -->
                                  <img class="card-img-top" src="images/com_segnalamercato/no-image.jpg"
                                   alt ="CAI Bologna">

                                 <?php } ?>

                                    <!-- Modal image -->
                                    <div class="modal fade" id="image<?php echo $e; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Immagini</h5>
                                                </div>
                                                <div class="modal-body">
                                                <?php if($eventi[$e]['fotodue'] !=''){?>
                                                <img class="card-img-card" src="<?php echo  substr($eventi[$e]['fotodue'],0) ; ?>" alt="CAI Bologna">  
                                                <?php } ?>
                                                <img class="card-img-card" src="<?php echo substr($pathimage, 0) ?>" alt="CAI Bologna"> 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Chiudi</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Modal image- -->








                                <div class="card-body">
                                    <p class="card-title" style="color:#f0660c;font-weight:700">
                                        <?php echo $eventi[$e]['costo'].' <br>'; ?>
                                </p>
                                    <div>  
                                        <?php echo substr($eventi[$e]['description'],0,80).' ....'; ?>   
                                    </div>
  

                                    <div>
                                        <!-- Button trigger modal descrizione-->
                                        <?php if ($eventi[$e]['description'] !='' && $eventi[$e]['description'] !='Non definit') { ?>
                                        <button type="button" class="btn btn-link btn-sm" href="" data-bs-toggle="modal" data-bs-target="#contp<?php echo $e; ?>">
                                            Descrizione completa
                                        </button>
                                        <?php } ?>

                                    </div>
                                    <div>


                                    <!-- Modal descrizione -->
                                    <div class="modal fade" id="contp<?php echo $e; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Descrizione</h5>
                                                </div>
                                                <div class="modal-body">
                                                <?php echo '<strong>Marca </strong>'.$eventi[$e]['marca'].'<br><br>'; ?>
                                                    <?php echo $eventi[$e]['description']; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Chiudi</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Modal descrizione- -->


                                        <!-- Button trigger modal CONTATTI-->
                                        <button type="button" class="btn btn-link btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cont<?php echo $e; ?>">
                                            Contatti
                                        </button>
                                    </div>

                                    <!-- Modal contatti -->
                                    <div class="modal fade" id="cont<?php echo $e; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contatti</h5>

                                                </div>
                                                <div class="modal-body">
                                                <?php echo ' '.$eventi[$e]['title'].'<br><br>'; ?>
                                                    <?php echo ' '.$eventi[$e]['telefono'].'<br>'.' '.$eventi[$e]['tuaemail']; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Chiudi</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Modal contatti - -->


                                </div>

                                <div class="card-footer">

                    
                                </div>




                            </div>
                            <br>
                        </div>
                        <?php } ?>

                    </div>

                </div>

                <!-- /BLOCCHI -->


                <!---------- PAGINAZIONE -------------------------- -->
                <?php if ($paginazione > 0) { ?>
                <!-- esclude la paginazione nella ricerca per titolo -->
                <form name="form4" method="post" id="form4" enctype="multipart/form-data"
                    class="form-control-sm needs-validation">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <!--<li class="page-item"><button class="btn btn-link" name="paginazione" value="Next" type="submit">Previous</button></li>-->
                            <?php
                        $numpag = intval($evn/$maxPerPag);
                        $linkp = intval($evn_tot/$maxPerPag);
                          for ($np = 0;$np < $linkp ;$np++) { ?>
                            <li class="page-item"><button id="bt<?php echo $np+1 ?>" class="btn btn-link" type="submit"
                                    name="paginazione" value="<?php echo $np+1 ?>"><?php echo $np+1 ?></button>
                            </li>
                            <?php } ?>
                            <!--<li class="page-item"><button class="btn btn-link" name="paginazione" value="Next" type="submit">Next</button></li>-->
                        </ul>
                    </nav>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
document.getElementById("bt<?php echo $offset ?>").style.border = "1px solid #0000FF";;
</script>