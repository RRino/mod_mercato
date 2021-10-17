<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_mercato
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Filesystem\Path;
use Joomla\CMS\Form\Form;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Filesystem\File;
use Joomla\CMS\Language\LanguageHelper;
use Joomla\CMS\Helper\ModuleHelper;
use MercatoNamespace\Module\Mercato\Site\Helper\MercatoHelper;
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 


<?php
$document = Factory::getDocument ();
$jinput = Factory::getApplication ()->input;
$conf = JFactory::getConfig();
$session = Factory::getSession (); 
$user = JFactory::getUser();
$session = Factory::getSession (); 

// TEST
//$test  = MercatoHelper::getText();
//$url = $params->get('domain');

$maxPerPag = 10;
$offset = 10;
$evn = 0;
$evn_tot = 0;
$log = 1;
$campo = '*';
$limit= '';
$stato = 1;


$generico = '';
$arrampicata = '';
$alpinismo = '';
$trekking='';
$sci='';
$ciclismo='';
$tutti= '';


$form1 = new JInput($jinput->get('pagine', '', 'array'));
$invia = $form1->post->get('invia', '', 'STRING');



$categoria = $form1->post->get('flexRadioDefault', '', 'STRING');
if($categoria !=''){
    $session->set('categoria',$categoria);
}


$categoria = $session->get('categoria');
if($categoria == null){
    $categoria = 'tutti';
}
if($categoria == 'generico'){
    $generico = '1';
    setradio($session,$categoria);
    $categoria_desc = "GENERICO";
}
if($categoria == 'trekking'){
    $trekking = '1';
    setradio($session,$categoria);
    $categoria_desc = "TREKKING";
}
if($categoria == 'arrampicata'){
    $arrampicatta = '1';
    setradio($session,$categoria);
    $categoria_desc = "ARRAMPICATA";
}
if($categoria == 'ciclismo'){
    $ciclismo= '1';
    setradio($session,$categoria);
    $categoria_desc = "CICLISMO";
}
if($categoria == 'sci'){
    $sci= '1';
    setradio($session,$categoria);
    $categoria_desc = "SCI";
}
if($categoria == 'alpinismo'){
    $alpinismo= '1';
    setradio($session,$categoria);
    $categoria_desc = "ALPINISMO";
}
if($categoria == 'tutti'){
    $tutti = '1';
    setradio($session,$categoria);
    $categoria_desc = "Generico - Trekking - Arramp
    icata - Ciclismo - Sci";
}




$eventi =  MercatoHelper::get_dati($campo, $stato,'', '0',$generico,$arrampicata,$alpinismo,$trekking,$sci,$ciclismo,$tutti);
$evn_tot = count($eventi);

$eventi =  MercatoHelper::get_dati($campo, $stato,$maxPerPag, '0',$generico,$arrampicata,$alpinismo,$trekking,$sci,$ciclismo,$tutti);
$evn = count($eventi);

$session->set('paginazione', 1);

$paginazione = 1;

if ($evn > 0) {
    $messaggio = '<span style="margin-left:18px;color:blue;">  Selezionato , Trovati: '.$evn_tot.' '.$categoria.'</span>';
} else {
    $messaggio = '<span style="margin-left:18px;color:red;"> Nussun elemento trovato </span>';
}



/********** PAGINAZIONE ************************** */
$form4 = new JInput($jinput->get('paginazione', '', 'array'));
$offset = $form1->post->get('paginazione', '', 'STRING');

$tutti = $session->get('tutti');



if ($offset !='' && $session->get('paginazione') == 1 ) {
// $eventi = EventiHelper::get_dati('*', '', '', '', '', $maxpag, ($offset-1)*$maxpag);
 $offseti = ($offset-1)*$maxPerPag;
 $eventi =  MercatoHelper::get_dati($campo, $stato , $maxPerPag, $offseti,$generico,$arrampicata,$alpinismo,$trekking,$sci,$ciclismo,$tutti);
 $evn = count($eventi);

}

$default = 'default';
/*********** CERCA TITOLO ************ */
$form5 = new JInput($jinput->get('titolo', '', 'array'));
$titolo = $form5->post->get('cerca', '', 'STRING');
if($titolo !=""){
    $eventi = MercatoHelper::get_descriz($titolo);
    $evn = count($eventi);
   
    $paginazione = 0;
    if ($evn < 1) {
        $messaggio = '<span style="margin-left:18px;color:red;"> Nussun riferimento trovato </span>';
    }else{
        $messaggio = '<span style="margin-left:18px;color:blue;"></span>';
    }
} else{
    $paginazione = 1;
}

require ModuleHelper::getLayoutPath('mod_mercato', $params->get('layout', $default));

// memorizza stato radio
function setradio($session,$radio){
    $session->set('tutti','');
     $session->set('generico','');
     $session->set('trekking','');
     $session->set('ciclismo','');
     $session->set('arrampicata','');
     $session->set('alpinismo','');
     $session->set('sci','');
     $session->set($radio,'checked');
  return 1;
 }