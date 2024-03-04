<?php
$pageTitle = "Look ".$lookNr;

$totalLooks = 6;
$prevPageNr = $lookNr <= 1 ? $totalLooks : ($lookNr - 1);
$prevPage = "/look/".$prevPageNr;
$nextPageNr = $lookNr >= $totalLooks ? 1 : ($lookNr + 1);
$nextPage = "/look/".$nextPageNr;
?>