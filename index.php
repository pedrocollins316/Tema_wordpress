
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https: //fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap " rel=" stylesheet ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Template -  Danki</title>
</head>
<body>


    <section class="topo">
        <div class="center">

            <header>
                <div class="logo"> <!-- logo -->
                   <img src="img/logo.png" alt="Logo">
                </div>
            </header>
            <ul class="menu-desktop">
               <li><a  href="#">HOME</a></li>
               <li><a  href="#">SOBRE</a></li>
               <li><a  href="#">CONTATOS</a></li>
            </ul>
            <div class="clear"></div>
            <br> 
            <br>
            <div class="w50  time-descricao">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                <a href="https://www.youtube.com/watch?v=TfUIorfpVbM" target="black">Ver demostração</a>
            </div> <!-- w50 -->
            <div class="w50 time-imagem">
                <img src="img/equipe.png" />
            </div><!-- w50 -->
            <div class="clear"></div>
        </div><!-- center -->
    </section><!-- topo -->

    <section class="clientes-slider">
        <div class="center">

        </div><!-- center -->
    </section>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>    
<script type="text/javascript">
    $('.container-slider').slick({
    dots: true,
    arrows:false,
    infinite: true,
    centerMode: true,
    CenterPadding:0,
    speed:1000,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover:false
    });
</script>
</body>
</html>

