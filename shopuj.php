<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-hu" lang="hu-hu">

<head>

<title>Power Balance</title>

<link href="shop.css" rel="stylesheet" type="text/css" />

</head>

<body>


<table id="fotabla" align="center" border="0">

<tr>
<td valign="top" colspan="3" height="20px">

<?php

error_reporting(0);



  if (isset($_POST['submit']))  {
      
/*  $fek_fek = $_POST['fek_fek'];
  $fek_fek_M = $_POST['fek_fek_M'];
  $fek_fek_L = $_POST['fek_fek_L'];
  $fek_fek_XL = $_POST['fek_fek_XL']; */
  $fek_feh = $_POST['fek_feh'];
  $fek_feh_M = $_POST['fek_feh_M'];
  $fek_feh_L = $_POST['fek_feh_L'];
  $fek_feh_XL = $_POST['fek_feh_XL'];
/*  $fek_sar = $_POST['fek_sar'];
  $fek_sar_M = $_POST['fek_sar_M'];
  $fek_sar_L = $_POST['fek_sar_L'];
  $fek_sar_XL = $_POST['fek_sar_XL']; */
  $kek_feh = $_POST['kek_feh'];
  $kek_feh_M = $_POST['kek_feh_M'];
  $kek_feh_L = $_POST['kek_feh_L'];
  $kek_feh_XL = $_POST['kek_feh_XL'];
/*  $teg_feh = $_POST['teg_feh'];
  $teg_feh_M = $_POST['teg_feh_M'];
  $teg_feh_L = $_POST['teg_feh_L'];
  $teg_feh_XL = $_POST['teg_feh_XL']; */
  $cle_feh = $_POST['cle_feh'];
  $cle_feh_M = $_POST['cle_feh_M'];
  $cle_feh_L = $_POST['cle_feh_L'];
  $cle_feh_XL = $_POST['cle_feh_XL'];
/*  $cle_pin = $_POST['cle_pin'];
  $cle_pin_M = $_POST['cle_pin_M'];
  $cle_pin_L = $_POST['cle_pin_L'];
  $cle_pin_XL = $_POST['cle_pin_XL'];
  $gre_feh = $_POST['gre_feh'];
  $gre_feh_M = $_POST['gre_feh_M'];
  $gre_feh_L = $_POST['gre_feh_L'];
  $gre_feh_XL = $_POST['gre_feh_XL'];
  $grey_feh = $_POST['grey_feh'];
  $grey_feh_M = $_POST['grey_feh_M'];
  $grey_feh_L = $_POST['grey_feh_L'];
  $grey_feh_XL = $_POST['grey_feh_XL'];
  $ora_feh = $_POST['ora_feh'];
  $ora_feh_M = $_POST['ora_feh_M'];
  $ora_feh_L = $_POST['ora_feh_L'];
  $ora_feh_XL = $_POST['ora_feh_XL']; */
  $pin_feh = $_POST['pin_feh'];
  $pin_feh_M = $_POST['pin_feh_M'];
  $pin_feh_L = $_POST['pin_feh_L'];
  $pin_feh_XL = $_POST['pin_feh_XL'];
  $red_feh = $_POST['red_feh'];
  $red_feh_M = $_POST['red_feh_M'];
  $red_feh_L = $_POST['red_feh_L'];
  $red_feh_XL = $_POST['red_feh_XL'];
/*  $whi_fek = $_POST['whi_fek'];
  $whi_fek_M = $_POST['whi_fek_M'];
  $whi_fek_L = $_POST['whi_fek_L'];
  $whi_fek_XL = $_POST['whi_fek_XL']; */
  $whi_feh = $_POST['whi_feh'];
  $whi_feh_M = $_POST['whi_feh_M'];
  $whi_feh_L = $_POST['whi_feh_L'];
  $whi_feh_XL = $_POST['whi_feh_XL'];
/*  $whi_gre = $_POST['whi_gre'];
  $whi_gre_M = $_POST['whi_gre_M'];
  $whi_gre_L = $_POST['whi_gre_L'];
  $whi_gre_XL = $_POST['whi_gre_XL']; */
  $yel_fek = $_POST['yel_fek'];
  $yel_fek_M = $_POST['yel_fek_M'];
  $yel_fek_L = $_POST['yel_fek_L'];
  $yel_fek_XL = $_POST['yel_fek_XL'];
  $nev = $_POST['nev'];
  $email = $_POST['email'];
  $telefonszam = $_POST['telefonszam'];
  $ar = '4500';
  $to = 'buvoskarkoto@gmail.com';
  $msg = '';
  $subject = 'B�v�s kark�t� rendel�s';
  $output_form = false;

  

    
    if ((empty($nev)) && (empty($email)) && (empty($telefonszam))) {
        echo '<div class="hiba�zi">A n�v, az email �s a telefonsz�m megad�sa k�telez� !!!</div>';
        $output_form = true;
    }
    if ((!empty($nev)) && (empty($email)) && (empty($telefonszam))) {
        echo '<div class="hiba�zi">Az email �s a telefonsz�m megad�sa k�telez� !!!</div>';
        $output_form = true;
    }
    if ((!empty($nev)) && (!empty($email)) && (empty($telefonszam))) {
        echo '<div class="hiba�zi">A telefonsz�m megad�sa k�telez� !!!</div>';
        $output_form = true;
    }    
    if ((empty($nev)) && (!empty($email)) && (!empty($telefonszam))) {
        echo '<div class="hiba�zi">A n�v megad�sa k�telez� !!!</div>';
        $output_form = true;
    }
    if ((!empty($nev)) && (empty($email)) && (!empty($telefonszam))) {
        echo '<div class="hiba�zi">Az email megad�sa k�telez� !!!</div>';
        $output_form = true;
    }
    if ((empty($nev)) && (!empty($email)) && (empty($telefonszam))) {
        echo '<div class="hiba�zi">A n�v �s a telefonsz�m megad�sa k�telez� !!!</div>';
        $output_form = true;
    }
    if ((empty($nev)) && (empty($email)) && (!empty($telefonszam))) {
        echo '<div class="hiba�zi">A n�v �s az email megad�sa k�telez� !!!</div>';
        $output_form = true;
    }
  }
    
  else {
    $output_form = true;
  }
  
  
    if ((!empty($nev)) && (!empty($email)) && (!empty($telefonszam))) {
    
         
        
/*   if ( $fek_fek >= "1" ) {
    $msg = "Fekete sz�n, fekete bet�vel: $fek_fek darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $fek_fek_M >= "1" ) {
    $msg .= "Fekete sz�n, fekete bet�vel: $fek_fek_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $fek_fek_L >= "1" ) {
    $msg .= "Fekete sz�n, fekete bet�vel: $fek_fek_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $fek_fek_XL >= "1" ) {
    $msg .= "Fekete sz�n, fekete bet�vel: $fek_fek_XL darabot szeretn�k, XL m�retben.\n"; 
  }
 */
                                                                                         
  if ( $fek_feh >= "1" ) {
    $msg .= "Fekete sz�n, feh�r bet�vel: $fek_feh darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $fek_feh_M >= "1" ) {
    $msg .= "Fekete sz�n, feh�r bet�vel: $fek_feh_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $fek_feh_L >= "1" ) {
    $msg .= "Fekete sz�n, feh�r bet�vel: $fek_feh_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $fek_feh_XL >= "1" ) {
    $msg .= "Fekete sz�n, feh�r bet�vel: $fek_feh_XL darabot szeretn�k, XL m�retben.\n"; 
  }
/*  if ( $fek_sar >= "1" ) {
    $msg .= "Fekete sz�n, s�rga bet�vel: $fek_sar darabot szeretn�k, S m�retben .\n"; 
  }
  if ( $fek_sar_M >= "1" ) {
    $msg .= "Fekete sz�n, s�rga bet�vel: $fek_sar_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $fek_sar_L >= "1" ) {
    $msg .= "Fekete sz�n, s�rga bet�vel: $fek_sar_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $fek_sar_XL >= "1" ) {
    $msg .= "Fekete sz�n, s�rga bet�vel: $fek_sar_XL darabot szeretn�k, XL m�retben.\n"; 
  }
*/  
  if ( $kek_feh >= "1") {
    $msg .= "K�k sz�n, feh�r bet�vel: $kek_feh darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $kek_feh_M >= "1") {
    $msg .= "K�k sz�n, feh�r bet�vel: $kek_feh_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $kek_feh_L >= "1") {
    $msg .= "K�k sz�n, feh�r bet�vel: $kek_feh_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $kek_feh_XL >= "1") {
    $msg .= "K�k sz�n, feh�r bet�vel: $kek_feh_XL darabot szeretn�k, XL m�retben.\n"; 
  }
/*  if ( $teg_feh >= "1") {
    $msg .= "T�gla sz�n, feh�r bet�vel: $teg_feh darabot szeretn�k, S m�retben.\n";
  }
  if ( $teg_feh_M >= "1") {
    $msg .= "T�gla sz�n, feh�r bet�vel: $teg_feh_M darabot szeretn�k, M m�retben.\n";
  }
  if ( $teg_feh_L >= "1") {
    $msg .= "T�gla sz�n, feh�r bet�vel: $teg_feh_L darabot szeretn�k, L m�retben.\n";
  }  
  if ( $teg_feh_XL >= "1") {
    $msg .= "T�gla sz�n, feh�r bet�vel: $teg_feh_XL darabot szeretn�k, XL m�retben.\n";
  }
*/      
  if ( $cle_feh >= "1") {
    $msg .= "Tiszta sz�n, feh�r bet�vel: $cle_feh darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $cle_feh_M >= "1") {
    $msg .= "Tiszta sz�n, feh�r bet�vel: $cle_feh_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $cle_feh_L >= "1") {
    $msg .= "Tiszta sz�n, feh�r bet�vel: $cle_feh_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $cle_feh_XL >= "1") {
    $msg .= "Tiszta sz�n, feh�r bet�vel: $cle_feh_XL darabot szeretn�k, XL m�retben.\n"; 
  }
/*  if ( $cle_pin >= "1") {    
    $msg .= "Tiszta sz�n, r�zsasz�n bet�vel: $cle_pin darabot szeretn�k, S m�retben.\n";
  }
  if ( $cle_pin_M >= "1") {    
    $msg .= "Tiszta sz�n, r�zsasz�n bet�vel: $cle_pin_M darabot szeretn�k, M m�retben.\n";
  }
  if ( $cle_pin_L >= "1") {    
    $msg .= "Tiszta sz�n, r�zsasz�n bet�vel: $cle_pin_L darabot szeretn�k, L m�retben.\n";
  }
  if ( $cle_pin_XL >= "1") {    
    $msg .= "Tiszta sz�n, r�zsasz�n bet�vel: $cle_pin_XL darabot szeretn�k, XL m�retben.\n";
  }
  if ( $gre_feh >= "1") {    
    $msg .= "Z�ld sz�n, feh�r bet�vel: $gre_feh darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $gre_feh_M >= "1") {    
    $msg .= "Z�ld sz�n, feh�r bet�vel: $gre_feh_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $gre_feh_L >= "1") {    
    $msg .= "Z�ld sz�n, feh�r bet�vel: $gre_feh_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $gre_feh_XL >= "1") {    
    $msg .= "Z�ld sz�n, feh�r bet�vel: $gre_feh_XL darabot szeretn�k, XL m�retben.\n"; 
  }
  if ( $gre_feh >= "1") {
    $msg .= "Sz�rke sz�n, feh�r bet�vel: $grey_feh darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $gre_feh_M >= "1") {
    $msg .= "Sz�rke sz�n, feh�r bet�vel: $grey_feh_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $gre_feh_L >= "1") {
    $msg .= "Sz�rke sz�n, feh�r bet�vel: $grey_feh_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $gre_feh_XL >= "1") {
    $msg .= "Sz�rke sz�n, feh�r bet�vel: $grey_feh_XL darabot szeretn�k, XL m�retben.\n"; 
  }
  if ( $ora_feh >= "1") {    
    $msg .= "Narancs sz�n, feh�r bet�vel: $ora_feh darabot szeretn�k, S m�retben.\n";
  }
  if ( $ora_feh_M >= "1") {    
    $msg .= "Narancs sz�n, feh�r bet�vel: $ora_feh_M darabot szeretn�k, M m�retben.\n";
  }
  if ( $ora_feh_L >= "1") {    
    $msg .= "Narancs sz�n, feh�r bet�vel: $ora_feh_L darabot szeretn�k, L m�retben.\n";
  }
  if ( $ora_feh_XL >= "1") {    
    $msg .= "Narancs sz�n, feh�r bet�vel: $ora_feh_XL darabot szeretn�k, XL m�retben.\n";
  }
*/  
  if ( $pin_feh >= "1") {    
    $msg .= "R�zsasz�n, feh�r bet�vel: $pin_feh darabot szeretn�k, S m�retben .\n"; 
  }
  if ( $pin_feh_M >= "1") {    
    $msg .= "R�zsasz�n, feh�r bet�vel: $pin_feh_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $pin_feh_L >= "1") {    
    $msg .= "R�zsasz�n, feh�r bet�vel: $pin_feh_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $pin_feh_XL >= "1") {    
    $msg .= "R�zsasz�n, feh�r bet�vel: $pin_feh_XL darabot szeretn�k, XL m�retben.\n"; 
  }
  if ( $red_feh >= "1") {    
    $msg .= "Piros sz�n, feh�r bet�vel: $red_feh darabot szeretn�k, S m�retben.\n";
  }
  if ( $red_feh_M >= "1") {    
    $msg .= "Piros sz�n, feh�r bet�vel: $red_feh_M darabot szeretn�k, M m�retben.\n";
  }
  if ( $red_feh_L >= "1") {    
    $msg .= "Piros sz�n, feh�r bet�vel: $red_feh_L darabot szeretn�k, L m�retben.\n";
  }
  if ( $red_feh_XL >= "1") {    
    $msg .= "Piros sz�n, feh�r bet�vel: $red_feh_XL darabot szeretn�k, XL m�retben.\n";
  }
/*  if ( $whi_fek >= "1") {    
    $msg .= "Feh�r sz�n, fekete bet�vel: $whi_fek darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $whi_fek_M >= "1") {    
    $msg .= "Feh�r sz�n, fekete bet�vel: $whi_fek_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $whi_fek_L >= "1") {    
    $msg .= "Feh�r sz�n, fekete bet�vel: $whi_fek_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $whi_fek_XL >= "1") {    
    $msg .= "Feh�r sz�n, fekete bet�vel: $whi_fek_XL darabot szeretn�k, XL m�retben.\n"; 
  }
*/  
  if ( $whi_feh >= "1") {    
    $msg .= "Feh�r sz�n, feh�r bet�vel: $whi_feh darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $whi_feh_M >= "1") {    
    $msg .= "Feh�r sz�n, feh�r bet�vel: $whi_feh_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $whi_feh_L >= "1") {    
    $msg .= "Feh�r sz�n, feh�r bet�vel: $whi_feh_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $whi_feh_XL >= "1") {    
    $msg .= "Feh�r sz�n, feh�r bet�vel: $whi_feh_XL darabot szeretn�k, XL m�retben.\n"; 
  }
/*  if ( $whi_gre >= "1") {    
    $msg .= "Feh�r sz�n, z�ld bet�vel: $whi_gre darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $whi_gre_M >= "1") {    
    $msg .= "Feh�r sz�n, z�ld bet�vel: $whi_gre_M darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $whi_gre_L >= "1") {    
    $msg .= "Feh�r sz�n, z�ld bet�vel: $whi_gre_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $whi_gre_XL >= "1") {    
    $msg .= "Feh�r sz�n, z�ld bet�vel: $whi_gre_XL darabot szeretn�k, XL m�retben.\n"; 
  }
*/  
  if ( $yel_fek >= "1") {    
    $msg .= "S�rga sz�n, fekete bet�vel: $yel_fek darabot szeretn�k, S m�retben.\n"; 
  }
  if ( $yel_fek_M >= "1") {    
    $msg .= "S�rga sz�n, fekete bet�vel: $yel_fek_L darabot szeretn�k, M m�retben.\n"; 
  }
  if ( $yel_fek_L >= "1") {    
    $msg .= "S�rga sz�n, fekete bet�vel: $yel_fek_L darabot szeretn�k, L m�retben.\n"; 
  }
  if ( $yel_fek_XL >= "1") {    
    $msg .= "S�rga sz�n, fekete bet�vel: $yel_fek_XL darabot szeretn�k, XL m�retben.\n \n"; 
  }


      
    $msg .= "Nevem: $nev\n"
    . "E-mail c�mem: $email\n"
    . "Telefonsz�mom: $telefonszam\n";
    
    $temp_msg = file_get_contents('log.txt');
    
    $temp_msg.= '***************************************************' . "\n\n$msg\n" . '*********************************************************';
    
    file_put_contents('log.txt', $temp_msg);

    mail($to, $subject, $msg, 'From:' . $email); 
    
    
  echo '<table id="fotabla" align="center" border="0">';
  echo '<tr><td class="cim" align="center" height="">';
  echo 'A rendel�s�t megkaptuk, k�sz�nj�k. Hamarosan felvessz�k �nnel a kapcsolatot.<br />';
  echo '<br /><br />';
  echo '<b>�n a k�vetkez� t�teleket rendelte :</b><br /><br />';

/*    if ( $fek_fek >= "1" ) {
  echo 'Fekete sz�n, fekete bet�vel: ' . $fek_fek . ' darab ' . ' S m�retben ' . ' = ' . ($ar * $fek_fek) . ' Ft ' . '<br />'; }

    if ( $fek_fek_M >= "1" ) {
  echo 'Fekete sz�n, fekete bet�vel: ' . $fek_fek_M . ' darab ' . ' M m�retben ' . ' = ' . ($ar * $fek_fek_M) . ' Ft ' . '<br />'; }  

     if ( $fek_fek_L >= "1" ) {
  echo 'Fekete sz�n, fekete bet�vel: ' . $fek_fek_L . ' darab ' . ' L m�retben ' . ' = ' . ($ar * $fek_fek_L) . ' Ft ' . '<br />'; }

    if ( $fek_fek_XL >= "1" ) {
  echo 'Fekete sz�n, fekete bet�vel: ' . $fek_fek_XL . ' darab ' . ' XL m�retben ' . ' = ' . ($ar * $fek_fek_XL) . ' Ft ' . '<br />'; }
*/
    if ( $fek_feh >= "1") {
  echo 'Fekete sz�n, feh�r bet�vel: ' . $fek_feh . ' darab' . ' S m�retben ' . ' = ' . ($ar * $fek_feh) . ' Ft ' . '<br />'; }

    if ( $fek_feh_M >= "1") {
  echo 'Fekete sz�n, feh�r bet�vel: ' . $fek_feh_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $fek_feh_M) . ' Ft ' . '<br />'; }

    if ( $fek_feh_L >= "1") {
  echo 'Fekete sz�n, feh�r bet�vel: ' . $fek_feh_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $fek_feh_L) . ' Ft ' . '<br />'; }

    if ( $fek_feh_XL >= "1") {
  echo 'Fekete sz�n, feh�r bet�vel: ' . $fek_feh_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $fek_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $fek_sar >= "1" ) {
  echo 'Fekete sz�n, s�rga bet�vel: ' . $fek_sar . ' darab' . ' S m�retben ' . ' = ' . ($ar * $fek_sar) . ' Ft ' . '<br />'; }

    if ( $fek_sar_M >= "1" ) {                                  
  echo 'Fekete sz�n, s�rga bet�vel: ' . $fek_sar . ' darab' . ' M m�retben ' . ' = ' . ($ar * $fek_sar_M) . ' Ft ' . '<br />'; }

    if ( $fek_sar_L >= "1" ) {
  echo 'Fekete sz�n, s�rga bet�vel: ' . $fek_sar_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $fek_sar_L) . ' Ft ' . '<br />'; }

    if ( $fek_sar_XL >= "1" ) {
  echo 'Fekete sz�n, s�rga bet�vel: ' . $fek_sar_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $fek_sar_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $kek_feh >= "1") {
  echo 'K�k sz�n, feh�r bet�vel: ' . $kek_feh . ' darab' . ' S m�retben ' . ' = ' . ($ar * $kek_feh) . ' Ft ' . '<br />'; }

    if ( $kek_feh_M >= "1") {
  echo 'K�k sz�n, feh�r bet�vel: ' . $kek_feh_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $kek_feh_M) . ' Ft ' . '<br />'; }

    if ( $kek_feh_L >= "1") {
  echo 'K�k sz�n, feh�r bet�vel: ' . $kek_feh_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $kek_feh_L) . ' Ft ' . '<br />'; }

    if ( $kek_feh_XL >= "1") {
  echo 'K�k sz�n, feh�r bet�vel: ' . $kek_feh_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $kek_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $teg_feh >= "1") {
  echo 'T�gla sz�n, feh�r bet�vel: ' . $teg_feh . ' darab' . ' S m�retben ' . ' = ' . ($ar * $teg_feh) . ' Ft ' . '<br />'; }

    if ( $teg_feh_M >= "1") {
  echo 'T�gla sz�n, feh�r bet�vel: ' . $teg_feh_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $teg_feh_M) . ' Ft ' . '<br />'; }

    if ( $teg_feh_L >= "1") {
  echo 'T�gla sz�n, feh�r bet�vel: ' . $teg_feh_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $teg_feh_L) . ' Ft ' . '<br />'; }

    if ( $teg_feh_XL >= "1") {
  echo 'T�gla sz�n, feh�r bet�vel: ' . $teg_feh_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $teg_feh_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $cle_feh >= "1") {
  echo 'Tiszta sz�n, feh�r bet�vel: ' . $cle_feh . ' darab' . ' S m�rtben ' . ' = ' . ($ar * $cle_feh) . ' Ft ' . '<br />'; }

    if ( $cle_feh_M >= "1") {
  echo 'Tiszta sz�n, feh�r bet�vel: ' . $cle_feh_M . ' darab' . ' M m�rtben ' . ' = ' . ($ar * $cle_feh_M) . ' Ft ' . '<br />'; }

    if ( $cle_feh_L >= "1") {
  echo 'Tiszta sz�n, feh�r bet�vel: ' . $cle_feh_L . ' darab' . ' L m�rtben ' . ' = ' . ($ar * $cle_feh_L) . ' Ft ' . '<br />'; }

    if ( $cle_feh_XL >= "1") {
  echo 'Tiszta sz�n, feh�r bet�vel: ' . $cle_feh_XL . ' darab' . ' XL m�rtben ' . ' = ' . ($ar * $cle_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $cle_pin >= "1") {
  echo 'Tiszta sz�n, r�zsasz�n bet�vel: ' . $cle_pin . ' darab' . ' S m�retben ' . ' = ' . ($ar * $cle_pin) . ' Ft ' . '<br />'; }

    if ( $cle_pin_M >= "1") {
  echo 'Tiszta sz�n, r�zsasz�n bet�vel: ' . $cle_pin_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $cle_pin_M) . ' Ft ' . '<br />'; }

    if ( $cle_pin_L >= "1") {
  echo 'Tiszta sz�n, r�zsasz�n bet�vel: ' . $cle_pin_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $cle_pin_L) . ' Ft ' . '<br />'; }

    if ( $cle_pin_XL >= "1") {
  echo 'Tiszta sz�n, r�zsasz�n bet�vel: ' . $cle_pin_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $cle_pin_XL) . ' Ft ' . '<br />'; }
  
    if ( $gre_feh >= "1") {
  echo 'Z�ld sz�n, feh�r bet�vel: ' . $gre_feh . ' darab' . ' S m�retben ' . ' = ' . ($ar * $gre_feh) . ' Ft ' . '<br />'; }

    if ( $gre_feh_M >= "1") {
  echo 'Z�ld sz�n, feh�r bet�vel: ' . $gre_feh_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $gre_feh_M) . ' Ft ' . '<br />'; }

    if ( $gre_feh_L >= "1") {
  echo 'Z�ld sz�n, feh�r bet�vel: ' . $gre_feh_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $gre_feh_L) . ' Ft ' . '<br />'; }

    if ( $gre_feh_XL >= "1") {
  echo 'Z�ld sz�n, feh�r bet�vel: ' . $gre_feh_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $gre_feh_XL) . ' Ft ' . '<br />'; }
  
    if ( $grey_feh >= "1") { 
  echo 'Sz�rke sz�n, feh�r bet�vel: ' . $grey_feh . ' darab' . ' S m�retben ' . ' = ' . ($ar * $grey_feh) . ' Ft ' . '<br />'; }

    if ( $grey_feh_M >= "1") { 
  echo 'Sz�rke sz�n, feh�r bet�vel: ' . $grey_feh_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $grey_feh_M) . ' Ft ' . '<br />'; }

    if ( $grey_feh_L >= "1") { 
  echo 'Sz�rke sz�n, feh�r bet�vel: ' . $grey_feh_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $grey_feh_L) . ' Ft ' . '<br />'; }

    if ( $grey_feh_XL >= "1") { 
  echo 'Sz�rke sz�n, feh�r bet�vel: ' . $grey_feh_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $grey_feh_XL) . ' Ft ' . '<br />'; }
  
    if ( $ora_feh >= "1") {
  echo 'Narancs sz�n, feh�r bet�vel: ' . $ora_feh . ' darab' . ' S m�retben ' . ' = ' . ($ar * $ora_feh) . ' Ft ' . '<br />'; }

    if ( $ora_feh_M >= "1") {
  echo 'Narancs sz�n, feh�r bet�vel: ' . $ora_feh_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $ora_feh_M) . ' Ft ' . '<br />'; }

    if ( $ora_feh_L >= "1") {
  echo 'Narancs sz�n, feh�r bet�vel: ' . $ora_feh_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $ora_feh_L) . ' Ft ' . '<br />'; }

    if ( $ora_feh_XL >= "1") {
  echo 'Narancs sz�n, feh�r bet�vel: ' . $ora_feh_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $ora_feh_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $pin_feh >= "1") {
  echo 'R�zsasz�n, feh�r bet�vel: ' . $pin_feh . ' darab' . ' S m�retben ' . ' = ' . ($ar * $pin_feh) . ' Ft ' . '<br />'; }

    if ( $pin_feh_M >= "1") {
  echo 'R�zsasz�n, feh�r bet�vel: ' . $pin_feh_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $pin_feh_M) . ' Ft ' . '<br />'; }

    if ( $pin_feh_L >= "1") {
  echo 'R�zsasz�n, feh�r bet�vel: ' . $pin_feh_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $pin_feh_L) . ' Ft ' . '<br />'; }

    if ( $pin_feh_XL >= "1") {
  echo 'R�zsasz�n, feh�r bet�vel: ' . $pin_feh_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $pin_feh_XL) . ' Ft ' . '<br />'; }
  
    if ( $red_feh >= "1") {
  echo 'Piros sz�n, feh�r bet�vel: ' . $red_feh . ' darab' . ' S m�retben ' . ' = ' . ($ar * $red_feh) . ' Ft ' . '<br />'; }

    if ( $red_feh_M >= "1") {
  echo 'Piros sz�n, feh�r bet�vel: ' . $red_feh_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $red_feh_M) . ' Ft ' . '<br />'; }

    if ( $red_feh_L >= "1") {
  echo 'Piros sz�n, feh�r bet�vel: ' . $red_feh_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $red_feh_L) . ' Ft ' . '<br />'; }

    if ( $red_feh_XL >= "1") {
  echo 'Piros sz�n, feh�r bet�vel: ' . $red_feh_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $red_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $whi_fek >= "1") {
  echo 'Feh�r sz�n, fekete bet�vel: ' . $whi_fek . ' darab' . ' S m�retben ' . ' = ' . ($ar * $whi_fek) . ' Ft ' . '<br />'; }

    if ( $whi_fek_M >= "1") {
  echo 'Feh�r sz�n, fekete bet�vel: ' . $whi_fek_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $whi_fek_M) . ' Ft ' . '<br />'; }

    if ( $whi_fek_L >= "1") {
  echo 'Feh�r sz�n, fekete bet�vel: ' . $whi_fek_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $whi_fek_L) . ' Ft ' . '<br />'; }

    if ( $whi_fek_XL >= "1") {
  echo 'Feh�r sz�n, fekete bet�vel: ' . $whi_fek_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $whi_fek_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $whi_feh >= "1") {
  echo 'Feh�r sz�n, feh�r bet�vel: ' . $whi_feh . ' darab' . ' S m�retben ' .  ' = ' . ($ar * $whi_feh) . ' Ft ' . '<br />'; }

    if ( $whi_feh_M >= "1") {
  echo 'Feh�r sz�n, feh�r bet�vel: ' . $whi_feh_M . ' darab' . ' M m�retben ' .  ' = ' . ($ar * $whi_feh_M) . ' Ft ' . '<br />'; }

    if ( $whi_feh_L >= "1") {
  echo 'Feh�r sz�n, feh�r bet�vel: ' . $whi_feh_L . ' darab' . ' L m�retben ' .  ' = ' . ($ar * $whi_feh_L) . ' Ft ' . '<br />'; }

    if ( $whi_feh_XL >= "1") {
  echo 'Feh�r sz�n, feh�r bet�vel: ' . $whi_feh_XL . ' darab' . ' XL m�retben ' .  ' = ' . ($ar * $whi_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $whi_gre >= "1") {
  echo 'Feh�r sz�n, z�ld bet�vel: ' . $whi_gre . ' darab' . ' S m�retben ' . ' = ' . ($ar * $whi_gre) . ' Ft ' . '<br />'; }

    if ( $whi_gre_M >= "1") {
  echo 'Feh�r sz�n, z�ld bet�vel: ' . $whi_gre_M . ' darab' . ' M m�retben ' . ' = ' . ($ar * $whi_gre_M) . ' Ft ' . '<br />'; }

    if ( $whi_gre_L >= "1") {
  echo 'Feh�r sz�n, z�ld bet�vel: ' . $whi_gre_L . ' darab' . ' L m�retben ' . ' = ' . ($ar * $whi_gre_L) . ' Ft ' . '<br />'; }

    if ( $whi_gre_XL >= "1") {
  echo 'Feh�r sz�n, z�ld bet�vel: ' . $whi_gre_XL . ' darab' . ' XL m�retben ' . ' = ' . ($ar * $whi_gre_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $yel_fek >= "1") {
  echo 'S�rga sz�n, fekete bet�vel: ' . $yel_fek . ' darab' . ' S m�retben ' .  ' = ' . ($ar * $yel_fek) . ' Ft ' . '<br />' ; }

    if ( $yel_fek_M >= "1") {
  echo 'S�rga sz�n, fekete bet�vel: ' . $yel_fek_M . ' darab' . ' M m�retben ' .  ' = ' . ($ar * $yel_fek_M) . ' Ft ' . '<br />' ; }

    if ( $yel_fek_L >= "1") {
  echo 'S�rga sz�n, fekete bet�vel: ' . $yel_fek_L . ' darab' . ' L m�retben ' .  ' = ' . ($ar * $yel_fek_L) . ' Ft ' . '<br />' ; }

    if ( $yel_fek_XL >= "1") {
  echo 'S�rga sz�n, fekete bet�vel: ' . $yel_fek_XL . ' darab' . ' XL m�retben ' .  ' = ' . ($ar * $yel_fek_XL) . ' Ft ' . '<br />' ; }
  
  echo '<br /><br />';
  echo 'A rendel�s �rt�ke �sszesen: ' . ( ($ar * $fek_fek) + ($ar * $fek_fek_M) + ($ar * $fek_fek_L) + ($ar * $fek_fek_XL) +
    ($ar * $fek_feh) + ($ar * $fek_feh_M) + ($ar * $fek_feh_L) + ($ar * $fek_feh_XL) + ($ar * $fek_sar) + ($ar * $fek_sar_M) + 
    ($ar * $fek_sar_L) + ($ar * $fek_sar_XL) + ($ar * $kek_feh) + ($ar * $kek_feh_M) + ($ar * $kek_feh_L) + ($ar * $kek_feh_XL) + 
    ($ar * $teg_feh) + ($ar * $teg_feh_M) + ($ar * $teg_feh_L) + ($ar * $teg_feh_XL) + ($ar * $cle_feh) + ($ar * $cle_feh_M) +
    ($ar * $cle_feh_L) + ($ar * $cle_feh_XL) + ($ar * $cle_pin) + ($ar * $cle_pin_M) + ($ar * $cle_pin_L) + ($ar * $cle_pin_XL) + 
    ($ar * $gre_feh) + ($ar * $gre_feh_M) + ($ar * $gre_feh_L) + ($ar * $gre_feh_XL) + ($ar * $grey_feh) + ($ar * $grey_feh_M) +
    ($ar * $grey_feh_L) + ($ar * $grey_feh_XL) + ($ar * $ora_feh) + ($ar * $ora_feh_M) + ($ar * $ora_feh_L) + ($ar * $ora_feh_XL) + 
    ($ar * $pin_feh) + ($ar * $pin_feh_M) + ($ar * $pin_feh_L) + ($ar * $pin_feh_XL) + ($ar * $red_feh) + ($ar * $red_feh_M) +
    ($ar * $red_feh_L) + ($ar * $red_feh_XL) + ($ar * $red_feh) + ($ar * $red_feh_M) + ($ar * $red_feh_L) + ($ar * $red_feh_XL) + 
    ($ar * $whi_fek) + ($ar * $whi_fek_M) + ($ar * $whi_fek_L) + ($ar * $whi_fek_XL) + ($ar * $whi_feh) + ($ar * $whi_feh_M) + 
    ($ar * $whi_feh_L) + ($ar * $whi_feh_XL) + ($ar * $whi_gre) + ($ar * $whi_gre_M) + ($ar * $whi_gre_L) + ($ar * $whi_gre_XL) + 
    ($ar * $yel_fek) + ($ar * $yel_fek_M) + ($ar * $yel_fek_L) + ($ar * $yel_fek_XL) ) . ' Ft ' . '<br />';
  
  echo '<br /><br />';
  echo '<b>Adataim:</b><br /><br />';
  echo '<b>Nevem:</b> ' . $nev . '<br />';
  echo '<b>E-mail c�mem:</b> ' . $email . '<br />';
  echo '<b>Telefonsz�mom:</b> ' . $telefonszam . '<br />';
  echo '</td>';
  echo '</tr>';
  echo '</table>';

    }

  if ($output_form) {

?>


</td>
</tr>

<tr>
<td class="cim" valign="top" height="40px" colspan="3">

<marquee behavior=alternate  scrollAmount=3>Power Balance rendel�s: - Egys�ges �r: 4500 Ft / db</marquee>

</td>
</tr>

<tr>
<td class="fek_feh" valign="top" width="220px" height="150px">


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


M�ret: S (17,5 cm)
<select for="fek_feh" name="fek_feh">
    <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="fek_feh" name="fek_feh" value="'.$i.'"';
            if (isset($_POST['fek_feh']))
        if($_POST["fek_feh"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: M (19 cm)
<select for="fek_feh_M" name="fek_feh_M">
    <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="fek_feh_M" name="fek_feh_M" value="'.$i.'"';
            if (isset($_POST['fek_feh_M']))
        if($_POST["fek_feh_M"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: L (20,5 cm)
<select for="fek_feh_L" name="fek_feh_L">
    <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="fek_feh_L" name="fek_feh_L" value="'.$i.'"';
            if (isset($_POST['fek_feh_L']))
        if($_POST["fek_feh_L"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: XL (22 cm)
<select for="fek_feh_XL" name="fek_feh_XL">
    <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="fek_feh_XL" name="fek_feh_XL" value="'.$i.'"';
            if (isset($_POST['fek_feh_XL']))
        if($_POST["fek_feh_XL"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db </option>';
        }
    ?>
</select>

</td>

<td class="kek_feh" valign="top" width="220px" height="150px">

M�ret: S (17,5 cm)
<select for="kek_feh" name="kek_feh">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="kek_feh" name="kek_feh" value="'.$i.'"';
            if (isset($_POST['kek_feh']))
        if($_POST["kek_feh"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
     ?>
</select>

<br />

M�ret: S (19 cm)
<select for="kek_feh_M" name="kek_feh_M">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="kek_feh_M" name="kek_feh_M" value="'.$i.'"';
            if (isset($_POST['kek_feh_M']))
        if($_POST["kek_feh_M"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
     ?>
</select>

<br />

M�ret: L (20,5 cm)
<select for="kek_feh_L" name="kek_feh_L">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="kek_feh_L" name="kek_feh_L" value="'.$i.'"';
            if (isset($_POST['kek_feh_L']))
        if($_POST["kek_feh_L"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
     ?>
</select>

<br />

M�ret: XL (22 cm)
<select for="kek_feh_XL" name="kek_feh_XL">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="kek_feh_XL" name="kek_feh_XL" value="'.$i.'"';
            if (isset($_POST['kek_feh_XL']))
        if($_POST["kek_feh_XL"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
     ?>
</select>

</td>


<td class="cle_feh" valign="top" width="220px" height="150px">

M�ret: S (17,5 cm)
<select for="cle_feh" name="cle_feh">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="cle_feh" name="cle_feh" value="'.$i.'"';
            if (isset($_POST['cle_feh']))
        if($_POST["cle_feh"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: M (19 cm)
<select for="cle_feh_M" name="cle_feh_M">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="cle_feh_M" name="cle_feh_M" value="'.$i.'"';
            if (isset($_POST['cle_feh_M']))
        if($_POST["cle_feh_M"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: L (20,5 cm)
<select for="cle_feh_L" name="cle_feh_L">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="cle_feh_L" name="cle_feh_L" value="'.$i.'"';
            if (isset($_POST['cle_feh_L']))
        if($_POST["cle_feh_L"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: XL (22 cm)
<select for="cle_feh_XL" name="cle_feh_XL">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="cle_feh_XL" name="cle_feh_XL" value="'.$i.'"';
            if (isset($_POST['cle_feh_XL']))
        if($_POST["cle_feh_XL"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

</td>
</tr>

<tr>

<td class="pin_feh" valign="top" width="220px" height="150px">

M�ret: S (17,5 cm)
<select for="pin_feh" name="pin_feh">
    <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="pin_feh" name="pin_feh" value="'.$i.'"';
            if (isset($_POST['pin_feh']))
        if($_POST["pin_feh"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: M (19 cm)
<select for="pin_feh_M" name="pin_feh_M">
    <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="pin_feh_M" name="pin_feh_M" value="'.$i.'"';
            if (isset($_POST['pin_feh_M']))
        if($_POST["pin_feh_M"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: L (20,5 cm)
<select for="pin_feh_L" name="pin_feh_L">
    <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="pin_feh_L" name="pin_feh_L" value="'.$i.'"';
            if (isset($_POST['pin_feh_L']))
        if($_POST["pin_feh_L"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: XL (22 cm)
<select for="pin_feh_XL" name="pin_feh_XL">
    <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="pin_feh_XL" name="pin_feh_XL" value="'.$i.'"';
            if (isset($_POST['pin_feh_XL']))
        if($_POST["pin_feh_XL"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

</td>

<td class="red_feh" valign="top" width="220px" height="150px">

M�ret: S (17,5 cm)
<select for="red_feh" name="red_feh">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="red_feh" name="red_feh" value="'.$i.'"';
            if (isset($_POST['red_feh']))
        if($_POST["red_feh"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: M (19 cm)
<select for="red_feh_M" name="red_feh_M">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="red_feh_M" name="red_feh_M" value="'.$i.'"';
            if (isset($_POST['red_feh_M']))
        if($_POST["red_feh_M"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: L (20,5 cm)
<select for="red_feh_L" name="red_feh_L">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="red_feh_L" name="red_feh_L" value="'.$i.'"';
            if (isset($_POST['red_feh_L']))
        if($_POST["red_feh_L"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: XL (22 cm)
<select for="red_feh_XL" name="red_feh_XL">
     <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="red_feh_XL" name="red_feh_XL" value="'.$i.'"';
            if (isset($_POST['red_feh_XL']))
        if($_POST["red_feh_XL"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

</td>


<td class="whi_feh" valign="top" width="220px" height="150px">

M�ret: S (17,5 cm)
<select for="whi_feh" name="whi_feh">
      <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="whi_feh" name="whi_feh" value="'.$i.'"';
            if (isset($_POST['whi_feh']))
        if($_POST["whi_feh"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: M (19 cm)
<select for="whi_feh_M" name="whi_feh_M">
      <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="whi_feh_M" name="whi_feh_M" value="'.$i.'"';
            if (isset($_POST['whi_feh_M']))
        if($_POST["whi_feh_M"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: L (20,5 cm)
<select for="whi_feh_L" name="whi_feh_L">
      <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="whi_feh_L" name="whi_feh_L" value="'.$i.'"';
            if (isset($_POST['whi_feh_L']))
        if($_POST["whi_feh_L"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: XL (22 cm)
<select for="whi_feh_XL" name="whi_feh_XL">
      <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="whi_feh_XL" name="whi_feh_XL" value="'.$i.'"';
            if (isset($_POST['whi_feh_XL']))
        if($_POST["whi_feh_XL"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

</td>
</tr>


<tr>

<td>&nbsp</td>

<td class="yel_fek" valign="top" width="220px" height="150px">

M�ret: S (17,5 cm)
<select for="yel_fek" name="yel_fek">
       <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="yel_fek" name="yel_fek" value="'.$i.'"';
            if (isset($_POST['yel_fek']))
        if($_POST["yel_fek"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: M (19 cm)
<select for="yel_fek_M" name="yel_fek_M">
       <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="yel_fek_M" name="yel_fek_M" value="'.$i.'"';
            if (isset($_POST['yel_fek_M']))
        if($_POST["yel_fek_M"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: L (20,5 cm)
<select for="yel_fek_L" name="yel_fek_L">
       <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="yel_fek_L" name="yel_fek_L" value="'.$i.'"';
            if (isset($_POST['yel_fek_L']))
        if($_POST["yel_fek_L"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

<br />

M�ret: XL (22 cm)
<select for="yel_fek_XL" name="yel_fek_XL">
       <?php
        for($i=0;$i<=10;$i++){
            echo '<option id="yel_fek_XL" name="yel_fek_XL" value="'.$i.'"';
            if (isset($_POST['yel_fek_XL']))
        if($_POST["yel_fek_XL"] == $i){
            echo 'selected="selected"';           
            }
            echo '>'.$i.' db</option>';
        }
    ?>
</select>

</td>
<td>&nbsp</td>
</tr>

<tr>
<td align="right" height="">

    <label for="nev" class="nev">N�v:</label>
    </td>
    <td align="left" colspan="2">
    <input type="text" id="nev" name="nev" size="50" value="<?php if (isset($_POST['nev'])) echo $nev;?>"/><br />
    </td></tr>
    <tr><td align="right">
    <label for="email" class="email">E-mail c�m:</label>
    </td>
    <td align="left" colspan="2">
    <input type="text" id="email" name="email" size="50" value="<?php if (isset($_POST['fek_fek'])) echo $email?>"/><br />
    </td></tr>
    <tr><td align="right" >
    <label for="telefonszam" class="telefonszam">Telefonsz�m:</label>
    </td><td align="left" colspan="2">
    <input type="text" id="telefonszam" name="telefonszam" size="50" value="<?php if (isset($_POST['fek_fek'])) echo $telefonszam?>"/>
</td>
</tr>

<tr>
<td class="submit" colspan="3" valign="top" height="">	<br />
	<input type="submit" value="Rendel�s felad�s" name="submit" />
  </form>

<?php 
}
?>
  
</td>
</tr>


</table>


<div class="footer">



<ul >
<li>
<a href="tesztek.html">PB Tesztek</a>
&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;
</li>
<li>
<a href="contact.html">Jogi nyilatkozat</a>
&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;
</li>
<li>
Oldal k�sz�t�: <a href="http://www.geminiwebdesign.hu" target="blank">Gemini Web Design</a>
</li>
</ul>


</div>
</body>

</html>




