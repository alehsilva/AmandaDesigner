<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amanda Designer</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="imagem/favicon.png">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" href="estilo.css" media="screen and (min-width: 480px)" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">

    <script type="text/javascript">
        $(window).scroll(function(){ // função para pegar o movimento do scroll (barra de rolagem)
              var top = $(window).scrollTop(); // aqui vc pega a posição da página
                  if(top){ // verifica a posição da página
                      $(".topo").stop().animate({ opacity: 0.7 }, 800); // aqui vc aplica o fade no menu
                  }else{
                      $(".topo").stop().animate({ opacity: 1.0 }, 800); // aqui vc tira o fade no menu
                    }

                    if(top < 120){ // verifica a posição da página
                      $(".blocosDeUnhas").stop().animate({ opacity: 1  }, 800); // aqui vc aplica o fade no menu
                    }else{
                          $(".blocosDeUnhas").stop().animate({ opacity: 0.4}, 800); // aqui vc tira o fade no menu
                    }


                  if(top < 50){ // verifica a posição da página
                    $(".centraliza").stop().animate({ opacity: 0.4  }, 800); // aqui vc aplica o fade no menu
                  }else{
                        $(".centraliza").stop().animate({ opacity: 1}, 800); // aqui vc tira o fade no menu
                  }
                  });
    </script>
  </head>
  <body>
    <main>
      <header>
        <div class="centraliza-topo">
          <div class="topo">
              <img  class="logotipo" src="imagem/logotipo.png" alt="Logitipo Amanda Designer">

              <div class="redes-sociais"></div>
              <div class="redes-sociais"><a target="_blank" href="https://www.instagram.com/amandac.designer/"><img class="corrige-img" src="imagem/instagram.png" alt="Instagram"></a></div>
              <div class="redes-sociais"><a target="_blank" href="https://www.facebook.com/amandac.designer/"><img class="corrige-img" src="imagem/facebook.png" alt="Facebook"></a></div>

              <div class="menu">
                <ul>
                  <a href="#"><li>Inicio</li></a>
                  <a href="#" onclick="window.open('https://calendar.google.com/calendar/r/month?cid=YW1hbmRhY2Fyb2xpbmVkZXNpZ25lckBnbWFpbC5jb20', 'Agenda', 'status=NO, toolbar=NO, location=NO, directores=NO, resisable=NO, top=150, left=500, width=840, height=500');"><li>Agenda</li></a>
                  <a href="#"><li>Contato</li></a>
                </ul>
              </div>
          </div>
        </div>
      </header>
      <div class="fundo-conteudo">
        <div class="galeria-conteudo">
          <iframe frameborder="0" allowtransparency="yes" src="recebe-galeria.php" width="100%" height="800px" name="galeria"></iframe>
        </div>
      </div>
        <div class="fundo-meioDoSite">
            <div class="centraliza">
              <blockquote cite="Amanda Caroline">
              <div class="quem-sou-eu">
                <h1><b>Quem Somos?</b></h1>
                <p>  Sou forte. Meio doce e meio ácida. Em alguns dias acho que sou fraca.
                  E boba. Preciso de um lugar onde enfiar a cara pra esconder as lágrimas.
                  Aí penso que não sou tão forte assim e começo a olhar pra mim. Sou forte sim, mas também choro.
                  Sou gente. Sou humana. Sou manhosa. Sou assim. Quero que as coisas aconteçam já, logo, de uma vez.
                  Quero que meus erros não me impeçam de continuar olhando para a frente. E quero continuar errando.
                  </p>
                  <cite>Amanda Caroline</cite>
              </div>
              </blockquote>
              <div class="parceiros">
                  <h1>Seja um Parceiro!</h1>
                  <form name="parceiro" class="formulario-parceiro">
                    <fieldset>
                    <legend>Informações</legend>
                    <label for="nome">Organização</label>
                    <input type="text" name="nome"/>
                    <br/><br/>
                    <label for="email">Email</label>
                    <input type="email" name="email"/>
                    <br/><br/>
                    <label for="resumo">Nos conte do seu projeto</label>
                    <br/>
                    <textarea name="resumo" rows="4" cols="60"></textarea>
                    <br/><br/>
                    <input class="botao" type="submit" value="Demonstrar interesse"/>
                  </form>

                  </fieldset>
              </div>
            <h1 class="titulo-anuncie">Vale a pena conferir!</h1>
            <div class="recomendamos">Recomendamos</div>
            <div class="anuncie">
             <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                <div class="anuncie-rolagem">
                  <a target=" _blank" href="https://kellyesmaltes.com.br"><img src="imagem/kellyesmaltes.jpeg" alt="Kelly Esmaltes"></a>
                  <a target=" _blank" href="https://kellyesmaltes.com.br"><img src="imagem/kellyesmaltes.jpeg" alt="Kelly Esmaltes"></a>
                  <a target=" _blank" href="https://kellyesmaltes.com.br"><img src="imagem/kellyesmaltes.jpeg" alt="Kelly Esmaltes"></a>
                  <a target=" _blank" href="https://kellyesmaltes.com.br"><img src="imagem/kellyesmaltes.jpeg" alt="Kelly Esmaltes"></a>
                  <img src="" alt="">
              </div>
          </marquee>
          </div>

            </div>
          </div>

          <footer>
            <div class="rodape">
              <div class="centraliza">
                 <img src="imagem/logo-branco.png" alt="Amanda Designer">
                 <h2>Obrigado pela visita!</h2>
                 <h4>&copy Todos os direitos reservados para Amanda Designer - 2019</h4>
               </div>
            </div>
          </footer>
    </main>
  </body>
</html>
