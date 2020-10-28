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
  $subject = 'Bûvös karkötõ rendelés';
  $output_form = false;

  

    
    if ((empty($nev)) && (empty($email)) && (empty($telefonszam))) {
        echo '<div class="hibaüzi">A név, az email és a telefonszám megadása kötelezõ !!!</div>';
        $output_form = true;
    }
    if ((!empty($nev)) && (empty($email)) && (empty($telefonszam))) {
        echo '<div class="hibaüzi">Az email és a telefonszám megadása kötelezõ !!!</div>';
        $output_form = true;
    }
    if ((!empty($nev)) && (!empty($email)) && (empty($telefonszam))) {
        echo '<div class="hibaüzi">A telefonszám megadása kötelezõ !!!</div>';
        $output_form = true;
    }    
    if ((empty($nev)) && (!empty($email)) && (!empty($telefonszam))) {
        echo '<div class="hibaüzi">A név megadása kötelezõ !!!</div>';
        $output_form = true;
    }
    if ((!empty($nev)) && (empty($email)) && (!empty($telefonszam))) {
        echo '<div class="hibaüzi">Az email megadása kötelezõ !!!</div>';
        $output_form = true;
    }
    if ((empty($nev)) && (!empty($email)) && (empty($telefonszam))) {
        echo '<div class="hibaüzi">A név és a telefonszám megadása kötelezõ !!!</div>';
        $output_form = true;
    }
    if ((empty($nev)) && (empty($email)) && (!empty($telefonszam))) {
        echo '<div class="hibaüzi">A név és az email megadása kötelezõ !!!</div>';
        $output_form = true;
    }
  }
    
  else {
    $output_form = true;
  }
  
  
    if ((!empty($nev)) && (!empty($email)) && (!empty($telefonszam))) {
    
         
        
/*   if ( $fek_fek >= "1" ) {
    $msg = "Fekete szín, fekete betüvel: $fek_fek darabot szeretnék, S méretben.\n"; 
  }
  if ( $fek_fek_M >= "1" ) {
    $msg .= "Fekete szín, fekete betüvel: $fek_fek_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $fek_fek_L >= "1" ) {
    $msg .= "Fekete szín, fekete betüvel: $fek_fek_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $fek_fek_XL >= "1" ) {
    $msg .= "Fekete szín, fekete betüvel: $fek_fek_XL darabot szeretnék, XL méretben.\n"; 
  }
 */
                                                                                         
  if ( $fek_feh >= "1" ) {
    $msg .= "Fekete szín, fehér betüvel: $fek_feh darabot szeretnék, S méretben.\n"; 
  }
  if ( $fek_feh_M >= "1" ) {
    $msg .= "Fekete szín, fehér betüvel: $fek_feh_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $fek_feh_L >= "1" ) {
    $msg .= "Fekete szín, fehér betüvel: $fek_feh_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $fek_feh_XL >= "1" ) {
    $msg .= "Fekete szín, fehér betüvel: $fek_feh_XL darabot szeretnék, XL méretben.\n"; 
  }
/*  if ( $fek_sar >= "1" ) {
    $msg .= "Fekete szín, sárga betüvel: $fek_sar darabot szeretnék, S méretben .\n"; 
  }
  if ( $fek_sar_M >= "1" ) {
    $msg .= "Fekete szín, sárga betüvel: $fek_sar_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $fek_sar_L >= "1" ) {
    $msg .= "Fekete szín, sárga betüvel: $fek_sar_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $fek_sar_XL >= "1" ) {
    $msg .= "Fekete szín, sárga betüvel: $fek_sar_XL darabot szeretnék, XL méretben.\n"; 
  }
*/  
  if ( $kek_feh >= "1") {
    $msg .= "Kék szín, fehér betüvel: $kek_feh darabot szeretnék, S méretben.\n"; 
  }
  if ( $kek_feh_M >= "1") {
    $msg .= "Kék szín, fehér betüvel: $kek_feh_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $kek_feh_L >= "1") {
    $msg .= "Kék szín, fehér betüvel: $kek_feh_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $kek_feh_XL >= "1") {
    $msg .= "Kék szín, fehér betüvel: $kek_feh_XL darabot szeretnék, XL méretben.\n"; 
  }
/*  if ( $teg_feh >= "1") {
    $msg .= "Tégla szín, fehér betüvel: $teg_feh darabot szeretnék, S méretben.\n";
  }
  if ( $teg_feh_M >= "1") {
    $msg .= "Tégla szín, fehér betüvel: $teg_feh_M darabot szeretnék, M méretben.\n";
  }
  if ( $teg_feh_L >= "1") {
    $msg .= "Tégla szín, fehér betüvel: $teg_feh_L darabot szeretnék, L méretben.\n";
  }  
  if ( $teg_feh_XL >= "1") {
    $msg .= "Tégla szín, fehér betüvel: $teg_feh_XL darabot szeretnék, XL méretben.\n";
  }
*/      
  if ( $cle_feh >= "1") {
    $msg .= "Tiszta szín, fehér betüvel: $cle_feh darabot szeretnék, S méretben.\n"; 
  }
  if ( $cle_feh_M >= "1") {
    $msg .= "Tiszta szín, fehér betüvel: $cle_feh_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $cle_feh_L >= "1") {
    $msg .= "Tiszta szín, fehér betüvel: $cle_feh_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $cle_feh_XL >= "1") {
    $msg .= "Tiszta szín, fehér betüvel: $cle_feh_XL darabot szeretnék, XL méretben.\n"; 
  }
/*  if ( $cle_pin >= "1") {    
    $msg .= "Tiszta szín, rózsaszín betüvel: $cle_pin darabot szeretnék, S méretben.\n";
  }
  if ( $cle_pin_M >= "1") {    
    $msg .= "Tiszta szín, rózsaszín betüvel: $cle_pin_M darabot szeretnék, M méretben.\n";
  }
  if ( $cle_pin_L >= "1") {    
    $msg .= "Tiszta szín, rózsaszín betüvel: $cle_pin_L darabot szeretnék, L méretben.\n";
  }
  if ( $cle_pin_XL >= "1") {    
    $msg .= "Tiszta szín, rózsaszín betüvel: $cle_pin_XL darabot szeretnék, XL méretben.\n";
  }
  if ( $gre_feh >= "1") {    
    $msg .= "Zöld szín, fehér betüvel: $gre_feh darabot szeretnék, S méretben.\n"; 
  }
  if ( $gre_feh_M >= "1") {    
    $msg .= "Zöld szín, fehér betüvel: $gre_feh_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $gre_feh_L >= "1") {    
    $msg .= "Zöld szín, fehér betüvel: $gre_feh_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $gre_feh_XL >= "1") {    
    $msg .= "Zöld szín, fehér betüvel: $gre_feh_XL darabot szeretnék, XL méretben.\n"; 
  }
  if ( $gre_feh >= "1") {
    $msg .= "Szürke szín, fehér betüvel: $grey_feh darabot szeretnék, S méretben.\n"; 
  }
  if ( $gre_feh_M >= "1") {
    $msg .= "Szürke szín, fehér betüvel: $grey_feh_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $gre_feh_L >= "1") {
    $msg .= "Szürke szín, fehér betüvel: $grey_feh_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $gre_feh_XL >= "1") {
    $msg .= "Szürke szín, fehér betüvel: $grey_feh_XL darabot szeretnék, XL méretben.\n"; 
  }
  if ( $ora_feh >= "1") {    
    $msg .= "Narancs szín, fehér betüvel: $ora_feh darabot szeretnék, S méretben.\n";
  }
  if ( $ora_feh_M >= "1") {    
    $msg .= "Narancs szín, fehér betüvel: $ora_feh_M darabot szeretnék, M méretben.\n";
  }
  if ( $ora_feh_L >= "1") {    
    $msg .= "Narancs szín, fehér betüvel: $ora_feh_L darabot szeretnék, L méretben.\n";
  }
  if ( $ora_feh_XL >= "1") {    
    $msg .= "Narancs szín, fehér betüvel: $ora_feh_XL darabot szeretnék, XL méretben.\n";
  }
*/  
  if ( $pin_feh >= "1") {    
    $msg .= "Rózsaszín, fehér betüvel: $pin_feh darabot szeretnék, S méretben .\n"; 
  }
  if ( $pin_feh_M >= "1") {    
    $msg .= "Rózsaszín, fehér betüvel: $pin_feh_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $pin_feh_L >= "1") {    
    $msg .= "Rózsaszín, fehér betüvel: $pin_feh_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $pin_feh_XL >= "1") {    
    $msg .= "Rózsaszín, fehér betüvel: $pin_feh_XL darabot szeretnék, XL méretben.\n"; 
  }
  if ( $red_feh >= "1") {    
    $msg .= "Piros szín, fehér betüvel: $red_feh darabot szeretnék, S méretben.\n";
  }
  if ( $red_feh_M >= "1") {    
    $msg .= "Piros szín, fehér betüvel: $red_feh_M darabot szeretnék, M méretben.\n";
  }
  if ( $red_feh_L >= "1") {    
    $msg .= "Piros szín, fehér betüvel: $red_feh_L darabot szeretnék, L méretben.\n";
  }
  if ( $red_feh_XL >= "1") {    
    $msg .= "Piros szín, fehér betüvel: $red_feh_XL darabot szeretnék, XL méretben.\n";
  }
/*  if ( $whi_fek >= "1") {    
    $msg .= "Fehér szín, fekete betüvel: $whi_fek darabot szeretnék, S méretben.\n"; 
  }
  if ( $whi_fek_M >= "1") {    
    $msg .= "Fehér szín, fekete betüvel: $whi_fek_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $whi_fek_L >= "1") {    
    $msg .= "Fehér szín, fekete betüvel: $whi_fek_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $whi_fek_XL >= "1") {    
    $msg .= "Fehér szín, fekete betüvel: $whi_fek_XL darabot szeretnék, XL méretben.\n"; 
  }
*/  
  if ( $whi_feh >= "1") {    
    $msg .= "Fehér szín, fehér betüvel: $whi_feh darabot szeretnék, S méretben.\n"; 
  }
  if ( $whi_feh_M >= "1") {    
    $msg .= "Fehér szín, fehér betüvel: $whi_feh_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $whi_feh_L >= "1") {    
    $msg .= "Fehér szín, fehér betüvel: $whi_feh_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $whi_feh_XL >= "1") {    
    $msg .= "Fehér szín, fehér betüvel: $whi_feh_XL darabot szeretnék, XL méretben.\n"; 
  }
/*  if ( $whi_gre >= "1") {    
    $msg .= "Fehér szín, zöld betüvel: $whi_gre darabot szeretnék, S méretben.\n"; 
  }
  if ( $whi_gre_M >= "1") {    
    $msg .= "Fehér szín, zöld betüvel: $whi_gre_M darabot szeretnék, M méretben.\n"; 
  }
  if ( $whi_gre_L >= "1") {    
    $msg .= "Fehér szín, zöld betüvel: $whi_gre_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $whi_gre_XL >= "1") {    
    $msg .= "Fehér szín, zöld betüvel: $whi_gre_XL darabot szeretnék, XL méretben.\n"; 
  }
*/  
  if ( $yel_fek >= "1") {    
    $msg .= "Sárga szín, fekete betüvel: $yel_fek darabot szeretnék, S méretben.\n"; 
  }
  if ( $yel_fek_M >= "1") {    
    $msg .= "Sárga szín, fekete betüvel: $yel_fek_L darabot szeretnék, M méretben.\n"; 
  }
  if ( $yel_fek_L >= "1") {    
    $msg .= "Sárga szín, fekete betüvel: $yel_fek_L darabot szeretnék, L méretben.\n"; 
  }
  if ( $yel_fek_XL >= "1") {    
    $msg .= "Sárga szín, fekete betüvel: $yel_fek_XL darabot szeretnék, XL méretben.\n \n"; 
  }


      
    $msg .= "Nevem: $nev\n"
    . "E-mail címem: $email\n"
    . "Telefonszámom: $telefonszam\n";
    
    $temp_msg = file_get_contents('log.txt');
    
    $temp_msg.= '***************************************************' . "\n\n$msg\n" . '*********************************************************';
    
    file_put_contents('log.txt', $temp_msg);

    mail($to, $subject, $msg, 'From:' . $email); 
    
    
  echo '<table id="fotabla" align="center" border="0">';
  echo '<tr><td class="cim" align="center" height="">';
  echo 'A rendelését megkaptuk, köszönjük. Hamarosan felvesszük önnel a kapcsolatot.<br />';
  echo '<br /><br />';
  echo '<b>Ön a következõ tételeket rendelte :</b><br /><br />';

/*    if ( $fek_fek >= "1" ) {
  echo 'Fekete szín, fekete betüvel: ' . $fek_fek . ' darab ' . ' S méretben ' . ' = ' . ($ar * $fek_fek) . ' Ft ' . '<br />'; }

    if ( $fek_fek_M >= "1" ) {
  echo 'Fekete szín, fekete betüvel: ' . $fek_fek_M . ' darab ' . ' M méretben ' . ' = ' . ($ar * $fek_fek_M) . ' Ft ' . '<br />'; }  

     if ( $fek_fek_L >= "1" ) {
  echo 'Fekete szín, fekete betüvel: ' . $fek_fek_L . ' darab ' . ' L méretben ' . ' = ' . ($ar * $fek_fek_L) . ' Ft ' . '<br />'; }

    if ( $fek_fek_XL >= "1" ) {
  echo 'Fekete szín, fekete betüvel: ' . $fek_fek_XL . ' darab ' . ' XL méretben ' . ' = ' . ($ar * $fek_fek_XL) . ' Ft ' . '<br />'; }
*/
    if ( $fek_feh >= "1") {
  echo 'Fekete szín, fehér betüvel: ' . $fek_feh . ' darab' . ' S méretben ' . ' = ' . ($ar * $fek_feh) . ' Ft ' . '<br />'; }

    if ( $fek_feh_M >= "1") {
  echo 'Fekete szín, fehér betüvel: ' . $fek_feh_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $fek_feh_M) . ' Ft ' . '<br />'; }

    if ( $fek_feh_L >= "1") {
  echo 'Fekete szín, fehér betüvel: ' . $fek_feh_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $fek_feh_L) . ' Ft ' . '<br />'; }

    if ( $fek_feh_XL >= "1") {
  echo 'Fekete szín, fehér betüvel: ' . $fek_feh_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $fek_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $fek_sar >= "1" ) {
  echo 'Fekete szín, sárga betüvel: ' . $fek_sar . ' darab' . ' S méretben ' . ' = ' . ($ar * $fek_sar) . ' Ft ' . '<br />'; }

    if ( $fek_sar_M >= "1" ) {                                  
  echo 'Fekete szín, sárga betüvel: ' . $fek_sar . ' darab' . ' M méretben ' . ' = ' . ($ar * $fek_sar_M) . ' Ft ' . '<br />'; }

    if ( $fek_sar_L >= "1" ) {
  echo 'Fekete szín, sárga betüvel: ' . $fek_sar_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $fek_sar_L) . ' Ft ' . '<br />'; }

    if ( $fek_sar_XL >= "1" ) {
  echo 'Fekete szín, sárga betüvel: ' . $fek_sar_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $fek_sar_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $kek_feh >= "1") {
  echo 'Kék szín, fehér betüvel: ' . $kek_feh . ' darab' . ' S méretben ' . ' = ' . ($ar * $kek_feh) . ' Ft ' . '<br />'; }

    if ( $kek_feh_M >= "1") {
  echo 'Kék szín, fehér betüvel: ' . $kek_feh_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $kek_feh_M) . ' Ft ' . '<br />'; }

    if ( $kek_feh_L >= "1") {
  echo 'Kék szín, fehér betüvel: ' . $kek_feh_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $kek_feh_L) . ' Ft ' . '<br />'; }

    if ( $kek_feh_XL >= "1") {
  echo 'Kék szín, fehér betüvel: ' . $kek_feh_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $kek_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $teg_feh >= "1") {
  echo 'Tégla szín, fehér betüvel: ' . $teg_feh . ' darab' . ' S méretben ' . ' = ' . ($ar * $teg_feh) . ' Ft ' . '<br />'; }

    if ( $teg_feh_M >= "1") {
  echo 'Tégla szín, fehér betüvel: ' . $teg_feh_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $teg_feh_M) . ' Ft ' . '<br />'; }

    if ( $teg_feh_L >= "1") {
  echo 'Tégla szín, fehér betüvel: ' . $teg_feh_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $teg_feh_L) . ' Ft ' . '<br />'; }

    if ( $teg_feh_XL >= "1") {
  echo 'Tégla szín, fehér betüvel: ' . $teg_feh_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $teg_feh_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $cle_feh >= "1") {
  echo 'Tiszta szín, fehér betüvel: ' . $cle_feh . ' darab' . ' S mértben ' . ' = ' . ($ar * $cle_feh) . ' Ft ' . '<br />'; }

    if ( $cle_feh_M >= "1") {
  echo 'Tiszta szín, fehér betüvel: ' . $cle_feh_M . ' darab' . ' M mértben ' . ' = ' . ($ar * $cle_feh_M) . ' Ft ' . '<br />'; }

    if ( $cle_feh_L >= "1") {
  echo 'Tiszta szín, fehér betüvel: ' . $cle_feh_L . ' darab' . ' L mértben ' . ' = ' . ($ar * $cle_feh_L) . ' Ft ' . '<br />'; }

    if ( $cle_feh_XL >= "1") {
  echo 'Tiszta szín, fehér betüvel: ' . $cle_feh_XL . ' darab' . ' XL mértben ' . ' = ' . ($ar * $cle_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $cle_pin >= "1") {
  echo 'Tiszta szín, rózsaszín betüvel: ' . $cle_pin . ' darab' . ' S méretben ' . ' = ' . ($ar * $cle_pin) . ' Ft ' . '<br />'; }

    if ( $cle_pin_M >= "1") {
  echo 'Tiszta szín, rózsaszín betüvel: ' . $cle_pin_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $cle_pin_M) . ' Ft ' . '<br />'; }

    if ( $cle_pin_L >= "1") {
  echo 'Tiszta szín, rózsaszín betüvel: ' . $cle_pin_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $cle_pin_L) . ' Ft ' . '<br />'; }

    if ( $cle_pin_XL >= "1") {
  echo 'Tiszta szín, rózsaszín betüvel: ' . $cle_pin_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $cle_pin_XL) . ' Ft ' . '<br />'; }
  
    if ( $gre_feh >= "1") {
  echo 'Zöld szín, fehér betüvel: ' . $gre_feh . ' darab' . ' S méretben ' . ' = ' . ($ar * $gre_feh) . ' Ft ' . '<br />'; }

    if ( $gre_feh_M >= "1") {
  echo 'Zöld szín, fehér betüvel: ' . $gre_feh_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $gre_feh_M) . ' Ft ' . '<br />'; }

    if ( $gre_feh_L >= "1") {
  echo 'Zöld szín, fehér betüvel: ' . $gre_feh_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $gre_feh_L) . ' Ft ' . '<br />'; }

    if ( $gre_feh_XL >= "1") {
  echo 'Zöld szín, fehér betüvel: ' . $gre_feh_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $gre_feh_XL) . ' Ft ' . '<br />'; }
  
    if ( $grey_feh >= "1") { 
  echo 'Szürke szín, fehér betüvel: ' . $grey_feh . ' darab' . ' S méretben ' . ' = ' . ($ar * $grey_feh) . ' Ft ' . '<br />'; }

    if ( $grey_feh_M >= "1") { 
  echo 'Szürke szín, fehér betüvel: ' . $grey_feh_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $grey_feh_M) . ' Ft ' . '<br />'; }

    if ( $grey_feh_L >= "1") { 
  echo 'Szürke szín, fehér betüvel: ' . $grey_feh_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $grey_feh_L) . ' Ft ' . '<br />'; }

    if ( $grey_feh_XL >= "1") { 
  echo 'Szürke szín, fehér betüvel: ' . $grey_feh_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $grey_feh_XL) . ' Ft ' . '<br />'; }
  
    if ( $ora_feh >= "1") {
  echo 'Narancs szín, fehér betüvel: ' . $ora_feh . ' darab' . ' S méretben ' . ' = ' . ($ar * $ora_feh) . ' Ft ' . '<br />'; }

    if ( $ora_feh_M >= "1") {
  echo 'Narancs szín, fehér betüvel: ' . $ora_feh_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $ora_feh_M) . ' Ft ' . '<br />'; }

    if ( $ora_feh_L >= "1") {
  echo 'Narancs szín, fehér betüvel: ' . $ora_feh_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $ora_feh_L) . ' Ft ' . '<br />'; }

    if ( $ora_feh_XL >= "1") {
  echo 'Narancs szín, fehér betüvel: ' . $ora_feh_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $ora_feh_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $pin_feh >= "1") {
  echo 'Rózsaszín, fehér betüvel: ' . $pin_feh . ' darab' . ' S méretben ' . ' = ' . ($ar * $pin_feh) . ' Ft ' . '<br />'; }

    if ( $pin_feh_M >= "1") {
  echo 'Rózsaszín, fehér betüvel: ' . $pin_feh_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $pin_feh_M) . ' Ft ' . '<br />'; }

    if ( $pin_feh_L >= "1") {
  echo 'Rózsaszín, fehér betüvel: ' . $pin_feh_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $pin_feh_L) . ' Ft ' . '<br />'; }

    if ( $pin_feh_XL >= "1") {
  echo 'Rózsaszín, fehér betüvel: ' . $pin_feh_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $pin_feh_XL) . ' Ft ' . '<br />'; }
  
    if ( $red_feh >= "1") {
  echo 'Piros szín, fehér betüvel: ' . $red_feh . ' darab' . ' S méretben ' . ' = ' . ($ar * $red_feh) . ' Ft ' . '<br />'; }

    if ( $red_feh_M >= "1") {
  echo 'Piros szín, fehér betüvel: ' . $red_feh_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $red_feh_M) . ' Ft ' . '<br />'; }

    if ( $red_feh_L >= "1") {
  echo 'Piros szín, fehér betüvel: ' . $red_feh_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $red_feh_L) . ' Ft ' . '<br />'; }

    if ( $red_feh_XL >= "1") {
  echo 'Piros szín, fehér betüvel: ' . $red_feh_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $red_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $whi_fek >= "1") {
  echo 'Fehér szín, fekete betüvel: ' . $whi_fek . ' darab' . ' S méretben ' . ' = ' . ($ar * $whi_fek) . ' Ft ' . '<br />'; }

    if ( $whi_fek_M >= "1") {
  echo 'Fehér szín, fekete betüvel: ' . $whi_fek_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $whi_fek_M) . ' Ft ' . '<br />'; }

    if ( $whi_fek_L >= "1") {
  echo 'Fehér szín, fekete betüvel: ' . $whi_fek_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $whi_fek_L) . ' Ft ' . '<br />'; }

    if ( $whi_fek_XL >= "1") {
  echo 'Fehér szín, fekete betüvel: ' . $whi_fek_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $whi_fek_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $whi_feh >= "1") {
  echo 'Fehér szín, fehér betüvel: ' . $whi_feh . ' darab' . ' S méretben ' .  ' = ' . ($ar * $whi_feh) . ' Ft ' . '<br />'; }

    if ( $whi_feh_M >= "1") {
  echo 'Fehér szín, fehér betüvel: ' . $whi_feh_M . ' darab' . ' M méretben ' .  ' = ' . ($ar * $whi_feh_M) . ' Ft ' . '<br />'; }

    if ( $whi_feh_L >= "1") {
  echo 'Fehér szín, fehér betüvel: ' . $whi_feh_L . ' darab' . ' L méretben ' .  ' = ' . ($ar * $whi_feh_L) . ' Ft ' . '<br />'; }

    if ( $whi_feh_XL >= "1") {
  echo 'Fehér szín, fehér betüvel: ' . $whi_feh_XL . ' darab' . ' XL méretben ' .  ' = ' . ($ar * $whi_feh_XL) . ' Ft ' . '<br />'; }
  
/*    if ( $whi_gre >= "1") {
  echo 'Fehér szín, zöld betüvel: ' . $whi_gre . ' darab' . ' S méretben ' . ' = ' . ($ar * $whi_gre) . ' Ft ' . '<br />'; }

    if ( $whi_gre_M >= "1") {
  echo 'Fehér szín, zöld betüvel: ' . $whi_gre_M . ' darab' . ' M méretben ' . ' = ' . ($ar * $whi_gre_M) . ' Ft ' . '<br />'; }

    if ( $whi_gre_L >= "1") {
  echo 'Fehér szín, zöld betüvel: ' . $whi_gre_L . ' darab' . ' L méretben ' . ' = ' . ($ar * $whi_gre_L) . ' Ft ' . '<br />'; }

    if ( $whi_gre_XL >= "1") {
  echo 'Fehér szín, zöld betüvel: ' . $whi_gre_XL . ' darab' . ' XL méretben ' . ' = ' . ($ar * $whi_gre_XL) . ' Ft ' . '<br />'; }
*/  
    if ( $yel_fek >= "1") {
  echo 'Sárga szín, fekete betüvel: ' . $yel_fek . ' darab' . ' S méretben ' .  ' = ' . ($ar * $yel_fek) . ' Ft ' . '<br />' ; }

    if ( $yel_fek_M >= "1") {
  echo 'Sárga szín, fekete betüvel: ' . $yel_fek_M . ' darab' . ' M méretben ' .  ' = ' . ($ar * $yel_fek_M) . ' Ft ' . '<br />' ; }

    if ( $yel_fek_L >= "1") {
  echo 'Sárga szín, fekete betüvel: ' . $yel_fek_L . ' darab' . ' L méretben ' .  ' = ' . ($ar * $yel_fek_L) . ' Ft ' . '<br />' ; }

    if ( $yel_fek_XL >= "1") {
  echo 'Sárga szín, fekete betüvel: ' . $yel_fek_XL . ' darab' . ' XL méretben ' .  ' = ' . ($ar * $yel_fek_XL) . ' Ft ' . '<br />' ; }
  
  echo '<br /><br />';
  echo 'A rendelés értéke összesen: ' . ( ($ar * $fek_fek) + ($ar * $fek_fek_M) + ($ar * $fek_fek_L) + ($ar * $fek_fek_XL) +
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
  echo '<b>E-mail címem:</b> ' . $email . '<br />';
  echo '<b>Telefonszámom:</b> ' . $telefonszam . '<br />';
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

<marquee behavior=alternate  scrollAmount=3>Power Balance rendelés: - Egységes ár: 4500 Ft / db</marquee>

</td>
</tr>

<tr>
<td class="fek_feh" valign="top" width="220px" height="150px">


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


Méret: S (17,5 cm)
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

Méret: M (19 cm)
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

Méret: L (20,5 cm)
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

Méret: XL (22 cm)
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

Méret: S (17,5 cm)
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

Méret: S (19 cm)
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

Méret: L (20,5 cm)
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

Méret: XL (22 cm)
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

Méret: S (17,5 cm)
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

Méret: M (19 cm)
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

Méret: L (20,5 cm)
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

Méret: XL (22 cm)
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

Méret: S (17,5 cm)
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

Méret: M (19 cm)
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

Méret: L (20,5 cm)
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

Méret: XL (22 cm)
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

Méret: S (17,5 cm)
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

Méret: M (19 cm)
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

Méret: L (20,5 cm)
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

Méret: XL (22 cm)
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

Méret: S (17,5 cm)
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

Méret: M (19 cm)
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

Méret: L (20,5 cm)
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

Méret: XL (22 cm)
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

Méret: S (17,5 cm)
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

Méret: M (19 cm)
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

Méret: L (20,5 cm)
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

Méret: XL (22 cm)
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

    <label for="nev" class="nev">Név:</label>
    </td>
    <td align="left" colspan="2">
    <input type="text" id="nev" name="nev" size="50" value="<?php if (isset($_POST['nev'])) echo $nev;?>"/><br />
    </td></tr>
    <tr><td align="right">
    <label for="email" class="email">E-mail cím:</label>
    </td>
    <td align="left" colspan="2">
    <input type="text" id="email" name="email" size="50" value="<?php if (isset($_POST['fek_fek'])) echo $email?>"/><br />
    </td></tr>
    <tr><td align="right" >
    <label for="telefonszam" class="telefonszam">Telefonszám:</label>
    </td><td align="left" colspan="2">
    <input type="text" id="telefonszam" name="telefonszam" size="50" value="<?php if (isset($_POST['fek_fek'])) echo $telefonszam?>"/>
</td>
</tr>

<tr>
<td class="submit" colspan="3" valign="top" height="">	<br />
	<input type="submit" value="Rendelés feladás" name="submit" />
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
Oldal készítõ: <a href="http://www.geminiwebdesign.hu" target="blank">Gemini Web Design</a>
</li>
</ul>


</div>
</body>

</html>




