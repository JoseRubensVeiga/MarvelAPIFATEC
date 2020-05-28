<?php

include_once('consulta.php');

$characters = getCharacters();

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado sobre "<?php echo $characterName; ?>"</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="btn-voltar-container">
      <a class="btn-voltar" href="index.php">
        <img src="https://logodownload.org/wp-content/uploads/2017/05/marvel-logo.png" >
      </a>
    </div>
    <?php foreach ($characters as $character): ?>
      <div class="character-description">
        <img src="<?php echo $character->thumbnail->path . '.' . $character->thumbnail->extension; ?>" >
        <div class="character-details">
            <h1 class="character-name"><?php echo $character->name; ?></h1>
            <p style="font-size: 20px; margin-top: 20px;"><?php echo $character->description; ?></p>

            <h2 style="margin: 10px 0;">HQ's</h2>
            <ul class="comics-list">
            <?php foreach($character->comics->items as $item): ?>
              <li> <?php echo $item->name; ?> </li>
            <?php endforeach; ?>
            </ul>
        </div>
      </div>
    <?php endforeach; ?>
    <?php if(count($characters) == 0): ?>
      <div class="no-results">
        <h1 >Desculpe, Stan Lee não criou esse personagem.</h1>
        <img src="https://conteudo.imguol.com.br/c/entretenimento/d6/2018/11/13/homenagem-feita-a-stan-lee-pelo-artista-brasileiro-spett-1542115280757_v2_956x500.jpg" />
        <a href="index.php">Voltar para pesquisa</a>
      </div>
    <?php endif; ?>

    <script src="./js/script.js"></script>
  </body>
</html>
