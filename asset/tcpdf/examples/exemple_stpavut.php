<?php

require_once('../tcpdf.php');

$pdf = new TCPDF($orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false, $pdfa = false);

$pdf->AddPage();

$montext = '<h1>Bienvenue sur St Pavut</h1><br/><h2>Voici notre catalogue</h2><br/><p>Nos manifestations...</p>';

$pdf->SetFont('times','', 15, 'false');

$pdf->writeHTML($montext);

$manif = '<div style="text-align:center"><img src="images/logo_example.png" border="0" height="300" width="300" /></div>';

$pdf->writeHTML($manif);

$pdf->Output('stpavut.pdf');

?>