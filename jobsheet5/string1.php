<?php
$loremIpsum = " Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Nobis corporis quam cum doloremque illum. Neque impedit repellendus, 
quidem pariatur, nemo voluptates quia totam quod ea aspernatur ab, iusto 
dolores cupiditate? ";
echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter: ".strlen($loremIpsum). "<br>";
echo "Panjang Kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>