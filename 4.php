<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 19/04/2018
 * Time: 07:38 PM
 */

require_once "NicePrintClass.php";
use NicePrintClass\NicePrint;

$parm = array(
    'title' => "whmcs Lang parser"
);

NicePrint::htmlHead($parm);

require_once "2.php";
require_once "3.php";

global $_LANG , $_LANG2;

NicePrint::e("Whmcs Version 7.1.2" , "r");
NicePrint::br();
NicePrint::e("locale : " . $_LANG['locale'] , "s");
NicePrint::br();
NicePrint::e("Count " . $_LANG['locale'] . " : " . count($_LANG) ,"s");
NicePrint::hr();

NicePrint::e("Whmcs Version 7.4.2" , "g");
NicePrint::br();
NicePrint::e("locale : " . $_LANG2['locale'] , "s");
NicePrint::br();
NicePrint::e("Count " . $_LANG2['locale'] . " : " . count($_LANG2) ,"s");
NicePrint::hr();

$difcont = count($_LANG2) - count($_LANG);
NicePrint::hr();
NicePrint::e("difcont : $difcont" , "g");

NicePrint::DifArray($_LANG2,$_LANG);
echo "<pre style='text-align: left;direction: ltr'>";

echo"</pre>";

NicePrint::htmlFooter();