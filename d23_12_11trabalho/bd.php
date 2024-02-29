<?php
function addGame($gameName, $developer, $publisher, $photo, $active){

    global $game;
    $game[] =
        [
            'gameName' => $gameName,
            'developer' => $developer,
            'publisher' => $publisher,
            'photo' => $photo,
            'active' => $active
        ];
    return $game;
};
$nomeJogo = 'Borderlands';
$desenvolvedora = 'Gearbox';
$distribuidora = '2Key';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
$nomeJogo = 'Brawlhalla';
$desenvolvedora = 'Blue Mammoth Games';
$distribuidora = 'Ubisoft';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
$nomeJogo = 'Super Chicken Jumper';
$desenvolvedora = 'Sewer Cat';
$distribuidora = 'Sewer Cat';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
$nomeJogo = 'Hollow Knight';
$desenvolvedora = 'Team Cherry';
$distribuidora = 'Team Cherry';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
$nomeJogo = 'Counter Strike 2';
$desenvolvedora = 'Valve';
$distribuidora = 'Valve';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
$nomeJogo = 'Street Fighter 6';
$desenvolvedora = 'CAPCOM';
$distribuidora = 'CAPCOM';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
// aaaaaaaaaaaaaaaaaaaaaaaaaaaa
$nomeJogo = 'Project Zomboid';
$desenvolvedora = 'The Indie Stone';
$distribuidora = 'The Indie Stone';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
$nomeJogo = 'Stardew Valley';
$desenvolvedora = 'ConcernedApe';
$distribuidora = 'ConcernedApe';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
$nomeJogo = 'Forza Horizon 5';
$desenvolvedora = 'Playground Games';
$distribuidora = 'Xbox Game Studios';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);
$nomeJogo = 'Dead Space';
$desenvolvedora = 'Motive';
$distribuidora = 'Electronic Arts';
$foto = $nomeJogo;
$ativo = 'A';
addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, $ativo);