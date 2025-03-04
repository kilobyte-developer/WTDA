<?php
// Load the XML file
$xml = simplexml_load_file("book.xml") or die("Error: Cannot load XML file.");

// Display elements and attributes
foreach ($xml->book as $book) {
    echo "Title: " . $book->title . "<br>";
    echo "Author: " . $book->author . "<br>";
    echo "Price: " . $book->price . "<br>";
    
    // Display attributes if any
    foreach ($book->attributes() as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<hr>";
}
?>
