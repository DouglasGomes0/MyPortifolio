<?php 
include('components/header.html');
include('includes/bootstrap_include.php');
include('includes/SweetAlert2_include.php');

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
                <img src="media/foto_perfil.jpg" alt="Minha foto">

                <div class="social-links">
                    <a class="btn-contato" href="#">LinkedIn</a>
                    <a class="btn-contato" href="https://github.com/DouglasGomes0">GitHub</a>
                    <a class="btn-contato" href="https://www.instagram.com/dougrette">Instagram</a>
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
                que eu programo, tanto no código quanto na organização. <br> <br>
            Sou alguém bastante ativo no meu dia a dia, e mantenho uma rotina de trabalho pela manhã,
            estudo pela tarde, e a noite atividades físicas, além de estudos online. Aos fins de
            semana pratico meus hobbies, como jogar online com amigos, desenhar, codar mini-projetos, 
            e sair para comer com amigos <br> <br>

            <strong>Tecnologias que utilizo:</strong>
            <ul>
                <p>linguagens:</p>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Python</li>
                <li>SQL</li>
                <li>C#</li> <br>
                <p>ferramentas:</p>
                <li>Git</li>
                <li>GitHub</li>
                <li>Visual Studio Code</li>
                <li>Postman</li>
                <li>MySQL</li> <br>
                <p>testes de segurança:</p>
                <li>Burp Suite</li>
                <li>OWASP ZAP</li> <br>
                <p>frameworks, bibliotecas e ambientes:</p>
                <li>Node.js</li>
                <li>React</li>
                <li>Next.js</li>
                <li>Bootstrap</li>
                <li>tailwind</li>
                <li>.net</li>

                

            </ul>
            </p>
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
                        <img src="media/print_TastyBurger.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tasty Burger</h5>
                            <p class="card-text">Aplicação web para gestão de pedidos em hamburgueria, focada em organização, agilidade no atendimento e melhor experiência do usuário.</p>
                            <a href="https://tasty.squareweb.app/" class="btn btn-primary">ir</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img src="media/print_ProjetoMecanica.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Projeto Mecânica</h5>
                            <p class="card-text">Aplicação Desktop para gestão de serviços de uma mecânica,focada na agilidade para funcionários</p>
                            <a href="https://github.com/gustax07/Projeto_Mecanica" class="btn btn-primary">Ver no github</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MODAL -->
<div class="modal fade" id="contatoModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content bg-dark text-white">

      <!-- HEADER -->
      <div class="modal-header border-secondary">
        <h5 class="modal-title">Entre em contato</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- FORM -->
      <form id="form-contato" action="actions/email/enviar.php" method="POST">

        <!-- BODY -->
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control bg-dark text-white border-secondary" required>
          </div>

          <input type="text" name="website" style="display:none">

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control bg-dark text-white border-secondary" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Assunto</label>
            <input type="text" name="assunto" class="form-control bg-dark text-white border-secondary" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Mensagem</label>
            <textarea name="mensagem" class="form-control bg-dark text-white border-secondary" rows="4" required></textarea>
          </div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer border-secondary">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Fechar
          </button>

          <button type="submit" class="btn btn-danger">
            Enviar
          </button>
        </div>

      </form>

    </div>
  </div>
</div>
</body>

</html>