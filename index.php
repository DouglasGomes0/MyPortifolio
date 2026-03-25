<?php 
include('components/header.html');
include('includes/bootstrap_include.php');


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Douglas | Portifolio</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>

    <section id="home">
        <div class="banner">
            <div class="banner-left">
                <h1>Douglas Ribeiro,<br> Desenvolvedor fullstack</h1>
            </div>
            <div class="banner-right">
                <img src="#" alt="Minha foto">

                <div class="social-links">
                    <a class="btn-contato" href="#">LinkedIn</a>
                    <a class="btn-contato" href="#">GitHub</a>
                    <a class="btn-contato" href="#">Instagram</a>
                </div>
            </div>

        </div>
    </section>

    <div class="separator"></div>

    <section id="sobreMim">
        <div class="texto_sobre_mim">
            <h1>sobre mim</h1>
        </div>
        <div class="texto_sobre_mim">
            <p>Sou estudante de Desenvolvimento de Sistemas e curto bastante essa área de tecnologia. Já explorei um pouco de tudo: desenvolvimento web,
                aplicações desktop e mobile, além de ferramentas como Git, testes e até uns comandos no Linux.Gosto de colocar a mão na massa e
                transformar ideias em projetos de verdade, não só ficar na teoria. Sempre tô buscando aprender coisas novas e melhorar o jeito
                que eu programo, tanto no código quanto na organização.</p>
        </div>
    </section>

    <div class="separator"></div>

    <!-- sessão de projetos -->
    <section id="projetos">
        <div class="texto_projetos">
            <h1>projetos</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tasty Burger</h5>
                            <p class="card-text">Aplicação web para gestão de pedidos em hamburgueria, focada em organização, agilidade no atendimento e melhor experiência do usuário.</p>
                            <a href="#" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Projeto Mecânica</h5>
                            <p class="card-text">Aplicação Desktop para gestão de serviços de uma mecânica,focada na agilidade para funcionários</p>
                            <a href="#" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>