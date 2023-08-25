<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freepik</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header class="superior1">
        <div class="logo">
            <img src="img/1841784.png" alt="Logo Freepik" title="logo">
        </div>
        <nav class="search1">
            <i class="bi bi-columns-gap"></i>
         <select name="" id="">
            <?php 
             $photoNames = array(
                'foto1.jpg',
                'foto2.jpg',
                'foto3.jpg',
                'foto4.jpg',
                'foto5.jpg',
                'foto6.jpg',
                'foto7.jpg',
                'foto8.jpg',
                'foto9.jpg',
                'foto10.jpg',
                'foto11.jpg',
                'foto12.jpg',
                'foto13.jpg',
                'foto14.jpg',
                'foto15.jpg',
                'foto16.jpg',
                'foto17.jpg',
                'foto18.jpg',
                'foto19.jpg',
                'foto20.jpg',
                'foto21.jpg',
                'foto22.jpg',
                'foto23.jpg',
                'foto24.jpg',
                'foto25.jpg',
                'foto26.jpg',
                'foto27.jpg',
                'foto28.jpg',
                'foto29.jpg',
                'foto30.jpg',
            );
            foreach ($photoNames as $foto){ 
             ?>
            <option value="<?php print $foto ?>"><?php print $foto ?></option>
            <?php } ?>
         </select>
         <form action="" class="fform">
            <input type="text" name="" id="" placeholder="Pesquisar...">
            <input type="reset" value="X">
            <i class="bi bi-search"></i>
            <i class="bi bi-images"></i>
            <p>Search by image</p>
         </form>
        </nav><!--search1-->
    </header><!--superior1-->
    <header class="sub1">
        <nav class="subdosub">
        <i class="bi bi-sliders"></i> Filters
        <i class="bi bi-box-arrow-left"></i>
        </nav><!--subdosub-->
        <?php 
        $photoNames2 = array(
            'Praia', 'Montanha', 'Floresta', 'Cachoeira', 'Cidade',
            'Pôr do Sol', 'Lago', 'Neve', 'Jardim', 'Aurora'
        );
        foreach ($photoNames2 as $foto2){
        ?>
        <div class="list">
        <i class="bi bi-check-circle-fill"> <?php echo $foto2 ?></i>
        </div>
        <?php } ?>
    </header><!--sub1-->
    <header class="sl">
        <div>
        <i class="bi bi-images s">   Images <span>33.5m</span></i> 
        <i class="bi bi-archive">  Arquivos 55k</i>
        </div>
    </header>
    <section class="img-caleria">
            <?php 
    $folderPath = 'img/';
            $imagens = scandir($folderPath);

            foreach ($imagens as $img){
                if ($img != '.' && $img != '..'){
                    echo '<img src="'.$folderPath.'/'.$img.'" alt="'.$img.'" title="TwD">';
                }
            }
            ?>
    </section>
    <footer>
        <p>Criado por <a href="https://github.com/DevSozinho" title="meu git hub">DevSozinho</a> para estudo 25/08/2023 - não responsivo</p>
    </footer>
</body>
</html>