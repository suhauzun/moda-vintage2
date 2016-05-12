<?php
// veri.php olarak kaydedin
$messages = array(
    'Alışveriş Yapabilir...',
    'Eşyalarınızı Satabilir...',
    'Reklam Verebilirsiniz...'
);

echo $messages[rand(0, count($messages) - 1)];
?>