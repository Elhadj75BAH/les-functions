# les-functions

<?php
function writeSecretSentence(string $animal, string $element): string
{
    return $result = "$animal s'incline face à $element.";
}
 
echo writeSecretSentence('<p>le lion', 'la lune</p>');

?>
