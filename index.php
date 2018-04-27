<?php 
$title='Home';
include "header.php"; 
?> 
<?php
$page="https://www.cinemagia.ro/program-cinema/bucuresti/";
$html= file_get_contents($page);

libxml_use_internal_errors( true);
$doc = new DOMDocument;
$doc->loadHTML( $html);
$xpath = new DOMXpath( $doc);

$entries = $xpath->query( '//div[@class="movie_details"]');

foreach ($entries as $entry) {
    echo "<br><span class='mtitle'>".$entry->firstChild->nodeValue."</span>";
    if (isset($_SESSION["username"]))
    	echo "<a class='buy' href='selectTicketNumber.php?movie=".$entry->firstChild->nodeValue."'>Buy tickets</a><br>"; 
}

 include "footer.php"; ?>