<?php 

	include("phpqrcode/qrlib.php");
    if (isset($_SESSION['u_id'])):
        $user_first = $_SESSION['u_first'];
        $user_last = $_SESSION['u_last'];
        $user_email = $_SESSION['u_email'];
        $user_number = $_SESSION['u_number'];

    // how to build raw content - QRCode with detailed Business Card (VCard) 
    $tempDir = 'phpqrcode/temp/'; 

    // here our data 
    $name         = "$user_first $user_lang"; 
    $sortName     = "$user_lang;$user_first"; 
    $phone        = "$user_number"; 
    $phonePrivate = ""; 
    $phoneCell    = ""; 
    $orgName      = "CodeCrush"; 
    $email        = "$user_email"; 
    $website      = "www.codecrush.com";

    // if not used - leave blank! 
    $addressLabel     = ''; 
    $addressPobox     = ''; 
    $addressExt       = ''; 
    $addressStreet    = ''; 
    $addressTown      = ''; 
    $addressRegion    = ''; 
    $addressPostCode  = ''; 
    $addressCountry   = ''; 

    // we building raw data 
    $codeContents  = 'BEGIN:VCARD'."\n"; 
    $codeContents .= 'VERSION:2.1'."\n"; 
    $codeContents .= 'N:'.$sortName."\n"; 
    $codeContents .= 'FN:'.$name."\n"; 
    $codeContents .= 'ORG:'.$orgName."\n"; 

    $codeContents .= 'TEL;WORK;VOICE:'.$phone."\n"; 
    $codeContents .= 'TEL;HOME;VOICE:'.$phonePrivate."\n"; 
    $codeContents .= 'TEL;TYPE=cell:'.$phoneCell."\n"; 
    $codeContents .= 'URl;WORK:https://'.$website."\n"; 

    $codeContents .= 'ADR;TYPE=work;'. 
        'LABEL="'.$addressLabel.'":' 
        .$addressPobox.';' 
        .$addressExt.';' 
        .$addressStreet.';' 
        .$addressTown.';' 
        .$addressPostCode.';' 
        .$addressCountry 
    ."\n"; 

    $codeContents .= 'EMAIL:'.$email."\n"; 

    $codeContents .= 'END:VCARD'; 

    // generating 
    QRcode::png($codeContents, $tempDir.'026.png', QR_ECLEVEL_L, 3); 
    else:
        header("location:index.php?login?invalid");
endif;
    
?>