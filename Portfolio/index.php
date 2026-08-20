<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
    <link rel="icon" href="./img/icon.svg">
    <link rel="stylesheet" href="./style/css.css">
</head>
<body>
    <header>
        <ul class="nav_container">
            <li><a href="#top">Início</a></li>
            <li><a href="#hab">Habilidades</a></li>
            <li><a href="#proj">Projetos</a></li>
        </ul>
        <ul class="other_container">
            <li><button id="openModal">Contato<img src="./img/contact.svg" alt="seta"></button></li> <!--parte de contato com dialog no html, css e javascript-->
        </ul>
    </header>

    <dialog id="contact_modal">
        <div class="modal_container">
            <button id="closeModal"><img src="./img/close.svg" alt="fechar"></button>
            <div class="contact_container">
                <div class="contact_title">
                    <h2>Contato</h2>
                </div>
                <ul>
                    <li><img class="contact_icon" src="./img/email.svg" alt="email"><p>fabio@gmail.com</p></li>
                    <li><img class="contact_icon" src="./img/tel.svg" alt="telefone"><p>(99) 99999-9999</p></li>
                    <li><img class="contact_icon" src="./img/linkedin.svg" alt="linkedin"><p>linkedin.com/in/fabio</p></li>
                </ul>
            </div>
        </div>
    </dialog>

    <main>
        <div class="name_container">
            <h1>Fabio Eidi Yokomizo</h1>
            <div class="bar"></div>
        </div>

        <div class="intro_container">
            <p>Sou um programador iniciante de Front End com conhecimento em JavaScript e PHP. Tenho gosto de criar websites interativos e envolventes.</p>
        </div>
        <div class="text_container">
            <h2>O que estou buscando</h2>
            <p>  Atualmente, meu principal foco é o front-end, buscando criar websites modernos, responsivos e envolventes, que ofereçam uma excelente experiência ao usuário. Ao mesmo tempo, possuo conhecimentos em back-end, permitindo compreender o funcionamento completo das aplicações e colaborar em diferentes etapas do desenvolvimento.<br>  Estou em constante aprendizado, sempre buscando aprimorar minhas habilidades e acompanhar as novas tecnologias para entregar projetos de qualidade e agregar valor às equipes das quais fizer parte.</p>
        </div>
        <div class="bar"></div>

        <div class="title_container">
            <h2 id="hab">Habilidades</h2>
        </div>
        <div class="habText_container">
            <ul class="hab_column">
                <li>Linguagens de Programação: JavaScript, PHP;</li>
                <li>Banco de dados: SQL;</li>
                <li>Ferramentas: VS Code, MySQL, Figma.</li>
            </ul>
             <ul class="habLang_column">
                <li>Português</li>
                <p>Avançado</p>
                <div class="port_bar"></div>
                <li>Inglês</li>
                <p>Básico</p>
                <div class="complete_bar">
                    <div class="half_bar"></div>
                </div>
             </ul>
        </div>
        <div class="bar"></div>

        <div class="title_container">
            <h2 id="proj">Projetos</h2>
        </div>
        <div class="project_container">
        <?php
        include "database.php";
        $conn = conectarBancoDeDados();
        $result = buscarDadosDeProjetos($conn);

        if($result->num_rows > 0):
            while($projeto = $result->fetch_assoc()):
            ?>
            <ul>
                <li><?php echo htmlspecialchars($projeto['nome']); ?></li>
                <a class="access_button" href="<?php echo htmlspecialchars($projeto['link']); ?> " target="_blank">Acessar</a>
            </ul>
            <div class="desc_container">
                <img src="./img/seta.svg" alt="seta">
                <p><?php echo htmlspecialchars($projeto['descricao']); ?></p>
            </div>
        <?php
            endwhile;
        else:
        ?>
        <tr>
            <td colspan="6">Nenhum dado foi encontrado</td>
        </tr>
        <?php
            endif;
            $conn->close();
        ?>
        </div>
    </main>

    <footer>
        <p class="copyright">© 2026 Fabio Eidi Yokomizo. Todos os direitos reservados</p>
    </footer>
    
    <script src="./script/script.js"></script>
</body>
</html>