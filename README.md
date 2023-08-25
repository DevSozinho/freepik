# Copia do site freepik
### feito com o objetivo de estudo 
##### **não esta responsivo**

### Visu:
![visu](Captura%20de%20tela%20de%202023-08-25%2017-24-54.png)

## HTML/PHP
```
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
```

## CSS
```
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
html,body{
    height: 100%;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: normal;
}


header.superior1{
    width: initial;
    height: auto;
    display: flex;
    align-items: center;
    border-bottom: 1px solid #cfd9e0;
}
header.superior1 > .logo > img{
    width: 196px;
    cursor: pointer;
}
header.superior1 > .logo{
    margin: 7px 15px;
}
header.superior1 > .search1{
    width: 82%;
    background-color: #e2e8ec;
    height: 50px;
    border-radius: 8px;
    border: 1px solid #cfd9e0;
}
header > .search1 > select{
    border: none;
    background-color: transparent;
    margin-left: 15px;
    border-right: 1px solid #cfd9e0;
    cursor: pointer;
}
header > .search1 > i{
    margin-left: 20px;
    cursor: pointer;
}
header > .search1{
    display: flex;
    align-items: center;
}
header.superior1 input[type="text"]{
    background-color: transparent;
    border: none;
    width: 743px;
    color: #a2a9ad;
    transition: 0.2s;
    padding: 15px;
    height: 100%;
    outline: none;
}
header.superior1 input[type="text"]:focus{
    color: #333333;
}
form > input[type="reset"]{
    width: 30px;
    height: 30px;
    border: none;
    background-color: #bac8d3;
    border-radius: 8px;
    color: #FFFFFF;
    transition: 0.3s;
    margin-right: 10px;
    cursor: pointer;
}
form > input[type="reset"]:hover{
    background-color: #a2a9ad;
}
.fform i[class*="search"]{
    margin-right: 10px;
    cursor: pointer;
}
.fform i[class*="image"]{
    border-left: 1px solid #cfd9e0;
    padding: 15px;
    cursor: pointer;
}
.fform{
    display: flex;
    align-items: center;
}
.fform p{
    font-size: 13px;
    margin-left: 10px;
    cursor: pointer;
}
.sub1{
    width: initial;
    height: 50px;
    display: flex;
    align-items: center;
    border-bottom: 1px solid #cfd9e0;
    cursor: pointer;
}
.sub1 i{
    margin: 20px;
}
.subdosub{
    width: auto;
    padding: 4px;
    border-right: 1px solid #cfd9e0;
}
.list i{
    text-align: center;
    border: 1px solid #cfd9e0;
    padding: 6px;
    font-size: 13px;
    border-radius: 10px;
    color: #374957;
}
.sl{
   display: flex;
   align-items: center;
   justify-content: center;
   height: 80px;
}
.sl div{
    margin: 22px;
    cursor: pointer;
}
.sl div i[class*="s"]{
    margin-right: 44px;
    color: #1d262d;
    border-bottom: 3px solid #1d262d;
}
.sl div i[class*="s"] span{
    color: #bac8d3;
}
.sl div i[class*="archi"]{
    color: #7e96a9;
}
.img-caleria{
    display: inline-block;
    flex-wrap: wrap;
}
.img-caleria img{
    width: 433px;
    margin: 10px;
}
footer{
    border: 1px solid #a2a9ad;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
}
```

### NOTAS
```
    Se quiser deixar responsivo para colocar em seu github fique a vontade e se quiser fazer um fork tb.
```