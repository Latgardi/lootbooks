<?php

use Illuminate\Support\Str;

ini_set('max_execution_time', '3000');
$requester = new \App\Lib\Requester\LitresRequester();
$genres = (array)$requester->getGenres();
$genres = json_encode($genres);
$genres = json_decode($genres, true);
foreach ($genres['genre'] as $genre) {
    $newGenre = new \App\Models\Genre();
    $newGenre->id = $genre['@attributes']['id'];
    $newGenre->title = $genre['@attributes']['title'];
    $newGenre->type = $genre['@attributes']['type'];
    $newGenre->token = Str::slug($genre['@attributes']['title'], '-');
    $newGenre->save();

    foreach ($genre['genre'] as $subGenre) {
        $newSubGenre = new \App\Models\Genre();
        $newSubGenre->id = $subGenre['@attributes']['id'];
        $newSubGenre->title = $subGenre['@attributes']['title'];
        $newSubGenre->type = $subGenre['@attributes']['type'];
        $newSubGenre->token = $subGenre['@attributes']['token'] ?? Str::slug($genre['@attributes']['title'], '-');;
        $newSubGenre->save();
    }
}
