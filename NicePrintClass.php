<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 19/04/2018
 * Time: 07:53 PM
 */

namespace NicePrintClass;

class NicePrint {
    const Auther = "Alireza Ahmadi <alireza@p30web.org>";

    public static function htmlHead($Parm){

        if(isset($Parm)){
            if(!is_array($Parm)){
                return false;
            }
        }

        $htmlv5 = "<!doctype html>";
        $htmlv5 .= '<html lang="Fa-Ir">';
        $htmlv5 .= '<head>';
        $htmlv5 .= '<meta charset="UTF-8">';
        $htmlv5 .= '<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">';
        $htmlv5 .= '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
        $htmlv5 .= '<style type="text/css">
    body {
        margin-bottom: 200px;
    }

    .line {
        width: auto;
        max-width: 100%;
        display: inline-block;
        padding: 5px;
        border-radius: 2px;
        box-sizing: border-box;
        font-size: 1.2rem;
        font-family: monospace;
        margin-bottom: 2px;
    }

    .s {
        background-color: #f7f7f7;
    }

    .b {
        background-color: #D8E9FF;
    }

    .r {
        color: #721c24;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
    }

    .g {
        color: #155724;
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
    }

    .y {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
    }

    .arrName, .arrMember {
        font-weight: bold;
        display: inline-block;
        background-color: #a4cedd;
        padding: 3px;
        border-radius: 5px;
        text-align: center;
        min-width: 30px;
    }

    .arrMember {
        background-color: #fff !important;
        margin: 3px 3px;
        padding: 3px 7px !important;
    }

    span.u {
        color: #ccc;
    }
    
    .hr-r {
        border: 1px solid red;
    }
    .hr-b {
        border:1px solid #646464;
    }

.line a {
    text-decoration: none;
} 

</style>';


        if (array_key_exists("title",$Parm)){
            $htmlv5 .= "<title> " . $Parm["title"] . "</title>";
        }else {
            $htmlv5 .= "<title>Sample Hrml File</title>";
        }

        $htmlv5 .= '</head>';
        $htmlv5 .= '<body>';

        echo $htmlv5;


    }

    public static function  htmlFooter($parm=""){
        $htmlv5 ="</body>";
        $htmlv5 .="</html>";
        echo $htmlv5;
    }

    public static function e($vlue,$colorClass) {
        if ($vlue == false) {
            echo "<span class='line {$colorClass}'>";
            var_dump($vlue);
            echo "</span>";
            return;
        }
        if (is_array($vlue)) {
            echo '<pre class="line ' . $colorClass . '">';
            print_r($vlue);
            echo "</pre>";
        } else {
            echo "<span class='line {$colorClass}'>" . $vlue . "</span>";
        }
    }

    public static function br() {
        echo "<br>";
    }
    public static function hr($ColorClass = "b") {
        echo "<hr class='hr-" . $ColorClass . "'>";
    }

    public static function DifArray($array1,$array2){

        $array_diff_key = array_diff_key($array1, $array2);
        NicePrint::e($array_diff_key , "s");
        NicePrint::br();
        NicePrint::e(count($array_diff_key) , "s");

    }
}