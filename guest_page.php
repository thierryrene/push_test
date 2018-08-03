<?php

$menuItems = [
  'home' => 'home',
  'o evento' => 'evento',
  'palestrantes' => 'palestrantes',
  'programação' => 'programacao',
  'ingressos' => 'ingressos',
  'faq' => 'faq',
  'contato' => 'contato'
];

?>

<!doctype html>
<html lang="en">
  
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="manifest" href="manifest.json">
    
     <link rel="icon" href="favicon.ico"> 

    <title>Push</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">

  </head>

  <body data-spy="scroll" data-target="#my-menu">

    <div class="second-section container-fluid" id="evento">
        
    <header class="masthead mb-auto">
            <div class="inner">
              <nav class="navbar navbar-expand-lg fixed-top navbar-light ">
                
                <button class="navbar-toggler bg-light bg-white" type="button" data-toggle="collapse" data-target="#my-menu">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse rounded" id="my-menu">
                  
                  <ul class="navbar-nav  ml-auto">
                      <?php foreach($menuItems as $item => $value) : ?>
                        <li class="nav-link my-nav-link text-uppercase" data-toggle="collapse" data-target=".navbar-collapse.show"><a  href="#<?php echo $value; ?>"><?php echo $item; ?></a></li>
                      <?php endforeach; ?>
                  </ul>
                  
                </div>
              </nav>
              
            </div>
          </header>

    <aside class="social-widgets d-none d-sm-block" align="center">
        
        <div>
            <a href="">
                <img src="img/social/1.webp" alt="">          
            </a>
        </div>
        
        <div>
            <a href="">
                <img src="img/social/2.webp" alt="">          
            </a>
        </div>
        
        <div>
            <a href="">
                <img src="img/social/3.webp" alt="">          
            </a>
        </div>
        
        <div>
            <a href="">
                <img src="img/social/4.webp" alt="">          
            </a>
        </div>
    
    </aside>
      
    </div>

    <!--<div class="third-section container-fluid" id="palestrantes">-->
      
    <!--  <div class="row text-center text-uppercase">-->
    <!--    <div class="col">-->
    <!--      <h2 class="title">palestrantes</h2>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--  <div class="palestrantes-container">-->
    <!--    <div class="row">-->
    <!--      <?php foreach ($participantes as $key => $item) : ?>-->
    <!--        <div class="col-6 col-sm-3">-->
    <!--          <div class="card card-custom-style">-->
    <!--            <div class="card-body text-center" style="">-->
    <!--              <img class="card-img-top img-fluid my-img-card" src="<?php echo $item['image']; ?>?text=Image cap" alt="Card image cap">-->
    <!--              <h6 class="card-subtitle mb-2 text-uppercase sofia-extra-light title-space "><?php echo $item['nome']; ?> <?php echo ($item['mediadora'] == 1 ? '<span class="sofia-bolder">- Mediadora</span>' : ''); ?></h6>-->
    <!--              <p class="card-text sofia-extra-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
    <!--              <br>-->
    <!--              <a href="#" class="card-link sofia-light"><?php echo $item['instagram']; ?></a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      <?php endforeach; ?>-->
    <!--    </div>-->
    <!--  </div>-->
      
    <!--</div>-->

    <!--<div class="fourth-section container-fluid" id="programacao">-->
        
    <!--    <div class="programacao-container">-->

    <!--      <div class="row">-->
    <!--        <div class="col-12 col-lg-12" align="center">-->
    <!--          <img src="img/programacao.webp" alt="" class="image-programacao img-fluid">-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="text-uppercase second-block-programacao" align="center" >-->
            
    <!--        <div class="row">-->
              
    <!--          <div class="col-12 col-sm-4 text-center">-->
    <!--            <p><span style="letter-spacing: 2px;">credenciamento</span> <span class="sofia-extra-light font-italic">8h00 - 9h30</span></p>-->
    <!--          </div>-->
              
    <!--          <div class="col-12 col-sm-4">-->
    <!--            <p><span style="letter-spacing: 2px;">almoço</span> <span class="sofia-extra-light font-italic">12h00 - 13h30</span></p>-->
    <!--          </div>-->
              
    <!--          <div class="col-12 col-sm-4">-->
    <!--            <p><span style="letter-spacing: 2px;">intervalo</span> <span class="sofia-extra-light font-italic">16h00 - 17h00</span></p>-->
    <!--          </div>-->
            
    <!--        </div>-->
            
    <!--      </div>-->

    <!--      <div class="third-block-programacao" align="center">-->
            
    <!--        <div class="row">-->
            
    <!--          <?php foreach ($talks as $key => $item) : ?>-->
  
    <!--            <div class="col-12 col-sm-4" class="talk-container text-left py-5">-->
                  
    <!--              <div class="text-left">-->
                    
    <!--                <span>-->
    <!--                  <img src="<?php echo $item['talk_img']; ?>" alt="<?php echo $item['nome']; ?>" width="80" class="mr-3">-->
    <!--                </span>-->
                    
    <!--                <span>-->
    <!--                  <?php echo $item['time']; ?>-->
    <!--                </span>-->
                  
    <!--              </div>-->
                  
    <!--              <br>-->
                  
    <!--              <div class="text-left" style="width: 90%; padding: 0px 0px 40px 0px;">-->
                    
    <!--                <div class="text-uppercase sofia-bolder text-left">-->
    <!--                  <?php echo $item['nome']; ?>-->
    <!--                </div>-->
                    
    <!--                <br>-->
                    
    <!--                <span class="sofia-bolder py-5">O que você irá aprender:</span>-->
                    
    <!--                <br>  -->
                    
    <!--                <span class="sofia-extra-light" style="padding: 20px 0px;">Lorem ipsum dolor sit amet, consectetur -->
    <!--                adipiscing elit. Proin nunc lacus, sagittis -->
    <!--                a blandit eleifend, varius id tortor. Ut -->
    <!--                laoreet convallis risus nec posuere. -->
    <!--                Quisque nisl erat, ullamcorper suscipit -->
    <!--                sollicitudin a, dignissim quis lectus. In-->
    <!--                vehicula lorem, at semper nulla congue..</span>-->
                    
    <!--                <br>-->
                    
    <!--                <span>-->
    <!--                  <a href="<?php echo $item['link']; ?>" style="color: #000;"><u>Saiba Mais</u></a>-->
    <!--                </span>-->
                    
    <!--              </div>-->
                  
    <!--            </div>-->
  
    <!--          <?php endforeach; ?>-->
              
    <!--        </div>-->

    <!--      </div>         -->

    <!--    </div>-->

    <!--    <div align="center" style="padding: 10px 0px 0px 0px;">-->
    <!--        <p class="lead">-->
    <!--          <span class="sofia-light">LET’S PARTY</span> 19h00 - 20h00-->
    <!--        </p>-->
    <!--      </div>-->

    <!--</div>-->
    
    <!--<div class="fifth-section container-fluid" id="ingressos">-->
      
    <!--  <div class="row text-center text-uppercase">-->
    <!--    <div class="col">-->
    <!--      <h2 class="title">ingressos</h2>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--  <div class="row" align="center">-->
    <!--    <div class="col-12 col-sm-12">-->
    <!--      <p class="text-center text-body ingressos-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsam odit mollitia, minus ad id laborum sed blanditiis, dicta harum laudantium aut voluptas reprehenderit unde, nobis molestiae laboriosam tempora recusandae!</p>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--  <div class="row text-center text-body ingressos-desc-2">-->
    <!--    <div class="col-12 col-sm-4 col-md-4">-->
    <!--      <span class="text-uppercase font-weight-bold">horário</span>-->
    <!--      <br>-->
    <!--      <span>8h às 20h</span>-->
    <!--    </div>-->
    <!--    <div class="col-12 col-sm-4 col-md-4">-->
    <!--      <span class="text-uppercase font-weight-bold">local</span>-->
    <!--      <br>-->
    <!--      <span>casa das caldeiras</span>-->
    <!--    </div>-->
    <!--    <div class="col-12 col-sm-4 col-md-4">-->
    <!--      <span class="text-uppercase font-weight-bold">data</span>-->
    <!--      <br>-->
    <!--      <span>Sábado, 10 de Novembro de 2018</span>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--  <div class="row ingressos-cta-btn" align="center">-->
    <!--    <div class="col-12 col-sm-12">-->
    <!--      <a href="#">-->
    <!--        <img src="img/comprar_ingresso.webp" alt="" width="300px">-->
    <!--      </a>-->
    <!--      <br>-->
    <!--    </div>-->
    <!--    <div class="col-12 col-sm-12">-->
    <!--      <span style="font-size: 12px; color: #000;">*Você será redirecionado ao site da Eventbrite</span>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--</div>-->

    <!--<div class="sixth-section container-fluid" id="faq">-->

    <!--  <div class="row text-center text-uppercase">-->
    <!--    <div class="col-12 col-md-12">-->
    <!--      <h2 class="title">f.a.q</h2>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--  <div class="row">-->
    <!--    <?php foreach ($faq as $item) : ?>-->
    <!--      <div class="col-12 col-md-12 text-center faq-container">-->
    <!--        <span class="question sofia-bolder text-uppercase" style="letter-spacing: 1.8px;"><?php echo $item['pergunta']; ?></span>-->
    <!--        <br>-->
    <!--        <span class="response sofia-extra-light"><?php echo $item['resposta']; ?></span>-->
    <!--      </div>-->
    <!--    <?php endforeach; ?>-->
    <!--  </div>-->

    <!--</div>-->

    <div class="seventh-section container-fluid" id="contato">

      <div class="row text-center text-uppercase">
        <div class="col">
          <h2 class="title">contato</h2>
        </div>
      </div>

      <div class="row justify-space-around">
        <div class="col-12 col-sm-12 col-md-6 text-center">

          <h3 class="instagram-title sofia-extra-light" style="font-size: 22px;">siga <u>@push</u> no instagram</h3>

          <img src="img/instagram_block.webp" class="img-fluid" alt="">

          <div class="newsletter-form">
            <h3 class="text-uppercase text-center sofia-bolder assine-news-title" style="letter-spacing: 4px;">assine nossa newsletter</h3>
            <p class="sofia-extra-light assine-news-desc">Receba em primeira mão as novidades sobre os nossos cursos e palestras</p>

            <form>
              <div class="row justify-content-center">
                <div class="col-7 col-sm-4">
                  <input type="text" class="form-control my-form-control" placeholder="insira seu email">
                </div>
                <div class="col-4 col-sm-2">
                  <button class="btn my-btn"><img src="img/enviar_btn.webp" alt="" style="width: 90px;"></button>
                </div>
              </div>
            </form>  

          </div>
          
        </div>
        <div class="col-12 col-sm-12 col-md-6 text-center">

          <h3 class="sofia-extra-light contato-desc">Ainda tem dúvidas? Entre em contato com a gente através do formulário:</h3>

          <form style="padding:50px 0px;">
            <div class="row justify-content-center">
              <div class="col-11 col-sm-8">
                <input type="text" class="form-control my-form-control" placeholder="Nome...">
              </div>              
              <br><br><br>
              <div class="col-11 col-sm-8">
                <input type="text" class="form-control my-form-control" placeholder="Email...">
              </div>
              <br><br><br>
              <div class="col-11 col-sm-8">
                <textarea name="" id="" style="margin-bottom: 20px;padding: 10px;width: 100%; height: 200px;" rows="15" class="my-form-control" placeholder="Mensagem..."></textarea>
              </div>
              <br><br><br>

              <div class="col-12">
                <button class="btn my-btn"><img src="img/enviar_btn.webp" alt="" style="width: 90px;"></button>
              </div>
            </div>
          </form> 
        </div>
      </div>

      <div class="row text-center text-uppercase font-weight-bold">
        <div class="col-12 col-md-12">
          <p style="letter-spacing: 4px; font-size: 28px;">follow us</p>
        </div>
      </div>

      <div class="row justify-content-center" style="padding: 20px 0px;">
        <div class="col-3 col-sm-1" align="center" >
          <img src="img/social/5.webp" alt="">
        </div>
        <div class="col-3 col-sm-1" align="center" >
          <img src="img/social/6.webp" alt="">
        </div>
        <div class="col-3 col-sm-1" align="center" >
          <img src="img/social/7.webp" alt="">
        </div>
        <div class="col-3 col-sm-1" align="center" >
          <img src="img/social/8.webp" alt="">
        </div>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-12 col-sm-3" style="padding-top: 20px;padding-bottom: 20px;">
          <p class="sofia-extra-light text-center">PUSH | <span class="sofia-light">Powered by</span> STEAL THE LOOK, 2018</p>
        </div>
      </div>

    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
    
  </body>
</html>
