<?php

require 'vendor/autoload.php';


// namespace
use Dompdf\Dompdf;


//  class initalize
$document = new Dompdf();


$html = "
<style>
table, th, td {
  border: 1px solid red;
}
</style>	

<table style='width:100%'>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>";


$document->loadhtml($html);


// set size

$document->setPaper('A4','landscape');


// render html to pdf
$document->render();


// output
$document->stream('codeclubhindi',array('Attachment'=>0));