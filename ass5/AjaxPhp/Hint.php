
<?php
// Array with names
$a[] = "Asmita";
$a[] = "Bela";
$a[] = "Chetan";
$a[] = "Dipti";
$a[] = "Esha";
$a[] = "Fariyal";
$a[] = "Ganesh";
$a[] = "Harshu";
$a[] = "sushma";
$a[] = "Joya";
$a[] = "Komal";
$a[] = "Lata";
$a[] = "Neha";
$a[] = "omkar";
$a[] = "Puja";
$a[] = "Amruta";
$a[] = "Raj";
$a[] = "Chaitrali";
$a[] = "Dipali";
$a[] = "Erika";
$a[] = "sneha";
$a[] = "Supriya";
$a[] = "Trupti";
$a[] = "Usha";
$a[] = "Vaishali";
$a[] = "Lara";
$a[] = "priya";
$a[] = "mona";
$a[] = "vrushali";
$a[] = "mrunal";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
