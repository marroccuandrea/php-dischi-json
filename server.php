<?php
$json_string = file_get_contents('dischi.json');

$disc = json_decode($json_string);

// Se esiste aggiungo un nuovo album
if (isset($_POST['newAlbumTitle'])) {
    $new_item = [
        'title' => $_POST['newAlbumTitle'],
        'author' => $_POST['newAlbumAuthor'],
        'year' => $_POST['newAlbumYear'],
        'genre' => $_POST['newAlbumGenre'],
        'poster' => $_POST['newAlbumPoster']
    ];
    $disc[] = $new_item;
    file_put_contents('dischi.json', json_encode($disc));
}

// Se arriva in POST indexToDelete, elimino l'elemento all'indice e aggiorno i dati
if (isset($_POST['indexToDelete'])) {
    $indexToDelete = $_POST['indexToDelete'];
    array_splice($disc, $indexToDelete, 1);
    file_put_contents('dischi.json', json_encode($disc));
}


header('Content-Type: application/json');

echo json_encode($disc);
