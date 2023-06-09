<?php
    //Template name: Home
?>
<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="hero">
        <div class="container">
            <div class="text" id="text-pd">
                <div class="title">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_flame.png" alt="" class="icon">Evolua sua carreira de programação
                </div>
                <h1>Dê start na sua jornada profissional e faça sua carreira evoluir na programação</h1>
                <p>Trilha de conhecimento completa, focada em atender as diferentes demandas do mercado.</p>
                <a href="#preco"><button class="btn">Start sua carreira agora</button></a>
            </div>
        </div>
    </section>
    
    <!--
    <section class="trilha">
        <div class="container">
            <div class="top">
                <div class="text">
                    <div class="title">Trilha de Carreira</div>
                    <h2>Além das aulas, aqui você terá acesso a conteúdos extras focados na conquista da sua vaga como programador.</h2>
                </div>
                <p>Nossa preocupação é com a sua evolução como profissional completo, com habilidades interpessoais, comunicação e gerenciamento de projetos, para que você possa alcançar o sucesso em sua carreira de programação.</p>
            </div>
            <div class="content">
                <ul data-aos="fade-right">
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_understanding.svg" alt="">
                        </div>
                        <div class="text">
                            <h5>Fase 1: Compreensão</h5>
                            <p>Entenda o funcionamento da área de programação, descubra suas ramificações e encontre a melhor maneira de se encaixar.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_organization.svg" alt="">
                        </div>
                        <div class="text">
                            <h5>Fase 2: Organização</h5>
                            <p>Aprenda a organizar suas ferramentas e aumentar suas chances de ser visto por recrutadores e grandes empresas com Github e LinkedIn.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_execution.svg" alt="">
                        </div>
                        <div class="text">
                            <h5>Fase 3: Execução</h5>
                            <p>Coloque em prática todo o conhecimento adquirido durante o treinamento e receba dicas sobre como selecionar as melhores vagas.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon active">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_selection.svg" alt="">
                        </div>
                        <div class="text">
                            <h5>Fase 4: Seleção</h5>
                            <p>Conheça o processo de testes técnicos e entrevistas para a seleção final e conquiste sua carreira na programação.</p>
                        </div>
                    </li>
                </ul>
                <div class="image">
                    <button class="play" data-aos="fade-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/trail_man.jpg" alt="" class="img">
                        <div class="player">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_play.svg" alt="">
                            <p>Assista o vídeo para entender como funciona</p>
                        </div>
                    </button>
                    <div class="modal">
                        <span class="modal-fechar">&times;</span>
                        <iframe class="modal-video" src="https://www.youtube.com/embed/YIM6WyjkCrg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="box" data-aos="fade-up">
                        <h2>+300</h2>
                        <p>Alunos no mercado de trabalho</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <section class="estrutura">
        <div class="container">
            <div class="content">
                <div class="top">
                    <div class="title">Avance na sua carreira</div>
                    <h2>Estrutura criada para você iniciar e avançar profissionalmente</h2>
                </div>
                <div class="items">
                    <div class="items-top" data-aos="fade-right">
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_infinite.svg" alt="">
                                <p>Acesso vitalício</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_update.svg" alt="">
                                <p>Atualizações<br>constantes</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_classes.svg" alt="">
                                <p>Aulas e lives<br>gravadas</p>
                            </li>
                        </ul>
                    </div>
                    <div class="items-bottom" data-aos="fade-left">
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_mentorships.svg" alt="">
                                <p>Mentorias</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_projects.svg" alt="">
                                <p>Projetos práticos</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_certification.svg" alt="">
                                <p>Certificação</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="whatsapp">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_whatsapp.svg" alt="">
                    <p><a href="https://api.whatsapp.com/send?phone=5585992364455&text=Ol%C3%A1%2C%20tenho%20d%C3%BAvida%20sobre" target="_blank">Você tem  alguma dúvida?</a> Fale com a nossa equipe pelo Whatsapp</p>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() ?>/img/structure-man.webp" alt="">
            </div>
        </div>
    </section>

    <section class="praQuem">
        <div class="container">
            <div class="top">
                <div class="title">Esse curso é para você?</div>
                <h2>Pra quem é esse curso?</h2>
            </div>
            <div class="bottom">
                <ul>
                    <li data-aos="fade-right">
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_professional.svg" alt=""></div>
                        <p>Se você é um profissional de qualquer área que deseja explorar novas oportunidades de carreira, a programação pode ser a escolha certa. Mesmo sem experiência prévia em programação, você pode migrar para esta área e desfrutar de mais liberdade, realização e retorno financeiro.</p>
                    </li>
                    <li data-aos="zoom-in">
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_initial.svg" alt=""></div>
                        <p>Se você é iniciante ou já fez alguns cursos de programação, mas ainda não se sente preparado para executar projetos completos e está inseguro em relação ao mercado de trabalho, você está no lugar certo.</p>
                    </li>
                    <li data-aos="fade-left">
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_work.svg" alt=""></div>
                        <p>Se você já trabalha como programador e deseja se especializar ainda mais para impulsionar sua carreira e aumentar seus salários, a Devboost é a escolha certa para você.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mercado">
        <div class="container">
            <div class="top">
                <div class="text">
                    <div class="title"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_rocket.png" alt="">Mercado em alta</div>
                    <h2>Entre na área mais promissora da atualidade, que está em constante expansão com novas oportunidades surgindo a cada dia.</h2>
                    <a href="#preco"><button class="btn">Garantir minha vaga</button></a>
                </div>
                <p>Se você procura por uma carreira promissora e cheia de oportunidades, junte-se a um dos nichos mais aquecidos do mercado, com possibilidades surgindo a todo momento. E para isso a Devboost oferece um ambiente de aprendizado imersivo, orientado por especialistas no assunto, para prepará-lo para essas oportunidades. Venha fazer parte da Devboost e comece sua jornada para se tornar um programador de destaque.</p>
            </div>
            <div class="bottom">
                <div class="text">
                    <p>Ganhe ótimos salários trabalhando como dev</p>
                    <p class="aviso">* valores com base no site glassdoor.com.br</p>
                </div>
                <div class="items">
                    <div class="card jr" data-aos="fade-right">
                        <div class="niveis">
                            <h3>Junior</h3>
                            <p>Iniciante na área, até 1 ano de experiência</p>
                        </div>
                        <div class="salario">2-4k</div>
                    </div>
                    <div class="card pl" data-aos="fade-up">
                        <div class="niveis">
                            <h3>Pleno</h3>
                            <p>Atua há algum tempo no mercado</p>
                        </div>
                        <div class="salario">6-8k</div>
                    </div>
                    <div class="card sr" data-aos="fade-left">
                        <div class="niveis">
                            <h3>Sênior</h3>
                            <p>Profissional com muita experiência</p>
                        </div>
                        <div class="salario">8-12k</div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>

    <section class="metodologia">
        <div class="container">
            <div class="content-left">
                <div class="title">Metodologia</div>
                <h2>Aprendemos melhor fazendo</h2>
                <p>A Devboost adota uma metodologia de aprendizado altamente prática e voltada para ação.</p>
                <a href="#preco"><button class="btn">Quero iniciar a jornada</button></a>
            </div>
            <div class="content-right">
                <ul data-aos="fade-left">
                    <li>
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_learn.svg" alt=""></div>
                        <div class="text">
                            <h5>Aprenda</h5>
                            <p>No primeiro pilar, Aprenda, os alunos terão acesso a uma ampla variedade de conteúdos em vídeo e dicas de leitura.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_convenient.svg" alt=""></div>
                        <div class="text">
                            <h5>Pratique</h5>
                            <p>No segundo pilar, Pratique com Desafios, os alunos serão desafiados a aplicar seus conhecimentos em projetos práticos e desafios reais.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_understand.svg" alt=""></div>
                        <div class="text">
                            <h5>Compreenda</h5>
                            <p>No terceiro pilar, Compreenda, os alunos terão a oportunidade de explorar os conceitos mais complexos que só são possíveis com a prática e desenvolver uma compreensão mais profunda de como as coisas funcionam.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_explain.svg" alt=""></div>
                        <div class="text">
                            <h5>Explique</h5>
                            <p>Finalmente, no quarto pilar, Explique, os alunos serão incentivados a compartilhar seus conhecimentos e ajudar os outros a aprender.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="depoimentos">
        <div class="container">
            <div class="top">
                <div class="title">Depoimentos</div>
                <h2>O que falam nossos alunos</h2>
            </div>
            <div class="items">
                <div class="card d1" data-aos="fade-right">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_quotes.svg" alt="" class="icon">
                    <p>"Eu estava um pouco insegura no início, mas a Devboost me surpreendeu com sua abordagem prática. As aulas são muito bem explicadas e com muita dinâmica, e está me ajudando a dominar a programação. Está sendo uma experiência incrível!"</p>
                    <h5>Alice Bennett</h5>
                    <p>Desenvolvedora Front-end pleno | <span>Lenovo</span></span></p>
                </div>
                <div class="card d2" data-aos="fade-up">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_quotes.svg" alt="" class="icon">
                    <p>"Eu sempre tive interesse em programação, mas não sabia por onde começar. Foi então que conheci a Devboost e me matriculei no treinamento deles. Achei as aulas muito didáticas e os professores super atenciosos, só tenho a agradecer a vocês"</p>
                    <h5>Leandro Junior</h5>
                    <p>Tech lead | <span>Alelo</span></p>
                </div>
                <div class="card d3" data-aos="fade-left">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_quotes.svg" alt="" class="icon">
                    <p>"A Devboost é simplesmente incrível! Eu já tinha um pouco de conhecimento em programação, mas sentia a necessidade de melhorar em alguns pontos e conhecer novas bibliotecas e frameworks"</p>
                    <h5>Marcos Sousa</h5>
                    <p>UI/UX e Desenvolvedor Front-end sênior | <span>Stone</span></p>
                </div>
                
            </div>
        </div>
    </section>
    
    <section class="grade">
        <div class="container">
            <div class="content-left">
                <div class="text">
                    <div class="title">Grade</div>
                    <h2>Explore os módulos do Treinamento</h2>
                    <p>Nosso treinamento possui módulos completos e aprofundados sobre programação. São mais de 150 aulas repletas de conteúdo de qualidade, ministradas por especialistas no assunto.</p>
                </div>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_community.svg" alt="">
                        <h6>Comunidade</h6>
                        <p>Tire suas dúvidas com os professores e também com outros alunos experientes.</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_lifetime.svg" alt="">
                        <h6>Acesso vitalício</h6>
                        <p>Tenha acesso a todas as atualizações e não pague nada a mais por isso.</p>
                    </li>
                </ul>
            </div>
            <div class="content-right">
                <details>
                    <summary>
                        <h5>Módulo 01 - Comece por aqui</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>Acesso a comunidade do Discord</li>
                        <li>Canais de dúvidas</li>
                        <li>Figma para Desenvolvedores</li>
                    </ul>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 02 - Html</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>HTML -  Aula 01 - O que é HTML</li>
                        <li>HTML -  Aula 02 - Anatomia das Tags</li>
                        <li>HTML -  Aula 03 - Estrutura Básica do HTML e Primeiro Arquivo</li>
                        <li>HTML -  Aula 04 - Aninhamento de Tags</li>
                        <li>HTML -  Aula 05 - Comentários HTML</li>
                        <li>HTML -  Aula 06 - Hierarquia de Títulos</li>
                        <li>HTML -  Aula 07 - Tags de Texto</li>
                        <li>HTML -  Aula 08 - Imagens</li>
                        <li>HTML -  Aula 09 - Listas</li>
                        <li>HTML -  Aula 10 - Links</li>
                        <li>HTML -  Aula 11 -  Tabelas</li>
                        <li>HTML -  Aula 12 - Tabelas pt. 2</li>
                        <li>HTML -  Aula 13 - Div</li>
                        <li>HTML -  Aula 14 - Formulários</li>
                        <li>HTML -  Aula 15 - Formulários pt.2</li>
                        <li>HTML -  Aula 16 - Semântica do HTML</li>
                    </ul>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 03 - Css</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>CSS - Aula 01 - Introdução ao CSS</li>
                        <li>CSS - Aula 02 - Estilizando seus arquivos HTML</li>
                        <li>CSS - Aula 03 - Seletores Pt.1</li>
                        <li>CSS - Aula 04 - Seletores Pt.2</li>
                        <li>CSS - Aula 05 - Cores</li>
                        <li>CSS - Aula 06 - Background</li>
                        <li>CSS - Aula 07 - Margin e Padding</li>
                        <li>CSS - Aula 08 - Personalização de Fonts</li>
                        <li>CSS - Aula 09 - Bordas</li>
                        <li>CSS - Aula 10 - Sombras</li>
                        <li>CSS - Aula 11 - Position</li>
                        <li>CSS - Aula 12 - flexbox</li>
                        <li>CSS - Aula 13 - Pseudo-Classes</li>
                        <li>CSS - Aula 14 - Pseudo-Elemento</li>
                        <li>CSS - Aula 15 - Transitions</li>
                    </ul>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 04 - JavaScript</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>JS - Aula 01 - Introdução</li>
                        <li>JS - Aula 02 - Arquivos Internos e Externos</li>
                        <li>JS - Aula 03 - Saídas JS</li>
                        <li>JS - Aula 04 - Comentários</li>
                        <li>JS - Aula 05 - Declarações</li>
                        <li>JS - Aula 06 - Declaração de variáveis</li>
                        <li>JS - Aula 07 - Operadores JS</li>
                        <li>JS - Aula 08 - Funções</li>
                        <li>JS - Aula 09 - Objetos JS</li>
                        <li>JS - Aula 10 - Eventos</li>
                        <li>JS - Aula 11 - Condicionais</li>
                        <li>JS - Aula 12 - Arrays</li>
                        <li>JS - Aula 13 - Métodos Array</li>
                        <li>JS - Aula 14 - Métodos e Funções Arrays</li>
                        <li>JS - Aula 15 - Classes</li>
                    </ul>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 05 - Sass</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>Aula 01 - Introdução ao Sass</li>
                        <li>Aula 02 - Instalação do Sass</li>
                        <li>Aula 03 - Import</li>
                        <li>Aula 04 - Variables</li>
                        <li>Aula 05 - Encadeamentos</li>
                        <li>Aula 06 - Mixins</li>
                        <li>Aula 07 - Mixins pt.2</li>
                    </ul>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 06 - Projeto Nubank</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>Aula 00 - Apresentação do Projeto</li>
                        <li>Aula 01 - Criação do ambiente</li>
                        <li>Aula 02 - Resets, Variables, Grid e Fonts</li>
                        <li>Aula 03 - Exportando nossos assets</li>
                        <li>Aula 04 - Buttons</li>
                        <li>Aula 05 - Components</li>
                        <li>Aula 06 - Favicon</li>
                        <li>Aula 07 - Header</li>
                        <li>Aula 08 - Hero</li>
                        <li>Aula 09 - Benefícios</li>
                        <li>Aula 10 - Ultravioleta</li>
                        <li>Aula 11 - Pix</li>
                        <li>Aula 12 - Depoimentos</li>
                        <li>Aula 13 - App</li>
                        <li>Aula 14 - Footer</li>
                        <li>Aula 15 - Header Responsivo</li>
                        <li>Aula 16 - Hero Responsivo</li>
                        <li>Aula 17 - Benefícios Responsivo</li>
                        <li>Aula 18 -  Ultravioleta Responsivo</li>
                        <li>Aula 19 - Pix Responsivo</li>
                        <li>Aula 20 - Depoimentos Responsivo</li>
                        <li>Aula 21 - App Responsivo</li>
                        <li>Aula 22 - Footer Responsivo</li>
                        <li>Aula 23 - Animações com keyframes</li>
                        <li>Aula 24 - Aos Animate</li>
                    </ul>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 05 - Bootstrap</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>Aula 00 - Introdução ao Bootstrap</li>
                        <li>Aula 01 - Instalação do Bootstrap</li>
                        <li>Aula 02 - Container</li>
                        <li>Aula 03 - Grids (Row, Col)</li>
                        <li>Aula 04 - Fontes/Tipografias</li>
                        <li>Aula 05 - Cores</li>
                        <li>Aula 06 - Tabelas</li>
                        <li>Aula 07 - Imagens</li>
                        <li>Aula 08 - Alertas</li>
                        <li>Aula 09 - Botões</li>
                        <li>Aula 10 - Alinhamentos</li>
                        <li>Aula 11 - Progress bar</li>
                        <li>Aula 12 - Spinner border</li>
                        <li>Aula 13 - Paginação</li>
                        <li>Aula 14 - List Group</li>
                        <li>Aula 15 - Card</li>
                        <li>Aula 16 - Dropdown</li>
                        <li>Aula 17 - Collapse</li>
                        <li>Aula 18 - Nav</li>
                        <li>Aula 19 - Nav com Dropdown</li>
                        <li>Aula 20 - Nav Tab com Navegação</li>
                        <li>Aula 21 - Navbar</li>
                        <li>Aula 22 - Navbar com Menu Sandwich</li>
                        <li>Aula 23 - Campo de pesquisa</li>
                        <li>Aula 24 - Modal</li>
                        <li>Aula 25 - Offcanvas</li>
                        <li>Aula 26 - Border</li>
                        <li>Aula 27 - Float</li>
                        <li>Aula 28 - Largura, Altura, Margin auto</li>
                        <li>Aula 29 - Margin, Padding</li>
                        <li>Aula 30 - Shadow</li>
                    </ul>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 07 - Wordpress</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p data-aos="fade-in">Em breve - Módulo em gravação</p>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 08 - ReactJs</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>Aula 01 - Introdução ao React</li>
                        <li>Aula 02 - Preparando o ambiente</li>
                        <li>Aula 03 - Estrutura de pasta com o vite</li>
                        <li>Aula 04 - Primeiro Componente</li>
                        <li>Aula 05 - Propriedades</li>
                        <li>Aula 06 - Estados</li>
                        <li>Aula 07 - TypeScript</li>
                        <li>Aula 08 - Introdução ao Projeto</li>
                        <li>Aula 09 - Criando estilos Globais com Styled Components</li>
                        <li>Aula 10 - Header .Pt1</li>
                        <li>Aula 11 - Header .Pt2</li>
                        <li>Aula 12 - Header .Pt3</li>
                        <li>Aula 13 - Header .Pt4</li>
                        <li>Aula 14 - Cards</li>
                        <li>Aula 15 - Animações no Card</li>
                        <li>Aula 16 - Transactions .Pt1</li>
                        <li>Aula 17 - Transactions .Pt2</li>
                        <li>Aula 18 - Trabalhando com graficos no react</li>
                        <li>Aula 19 - Usando apis fakes com Mirage JS</li>
                        <li>Aula 20 - O que são contextos no ReactJS e como aplicá-los no nosso projeto?</li>
                        <li>Aula 21 - Realizando ajustes e finalizando nossa aplicação</li>
                    </ul>
                </details>

                <details>
                    <summary>
                        <h5>Módulo 09 - NextJs</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p data-aos="fade-in">Em breve - Módulo em gravação</p>
                </details>

                <details>
                    <summary>
                        <h5>Módulo extra - Challenges</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <ul data-aos="fade-in">
                        <li>Introdução para os Challenges</li>
                        <li>Challenge 01 - Header de site (47 min)</li>
                        <li>Challenge 02 - Tela de Dashboard (2 h)</li>
                        <li>Challenge 03 - Landing Page completa c/ responsividade (5 h)</li>
                        <li>Challenge 04 - Tela de Login em ReactJS/Tailwind com tema Light/Dark (60 min)</li>
                    </ul>
                </details>
            </div>
        </div>
    </section>

    <section  class="pratica">
        <div class="container">
            <div class="swiper-container">
                <div class="top">
                    <div class="text">
                        <div class="title">Prática</div>
                        <h2>Crie projetos reais</h2>
                    </div>
                    <div class="arrows">
                        <div class="icon swiper-button-prev">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_left.svg" alt="">
                        </div>
                        <div class="icon swiper-button-next">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_right.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide nubank" data-aos="fade-right">
                        <img src="<?php echo get_template_directory_uri() ?>/img/project-nubank.webp" alt="">
                    </div>
                    <div class="swiper-slide challenge02" data-aos="fade-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/project-challenge02.webp" alt="">
                    </div>
                    <div class="swiper-slide challenge01" data-aos="fade-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/project-challenge01.webp" alt="">
                    </div>
                    <div class="swiper-slide nubank" data-aos="fade-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/project-challenge03.webp" alt="">
                    </div>
                    <div class="swiper-slide challenge04" data-aos="fade-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/project-challenge04.webp" alt="">
                    </div>
                </div>
                
            </div>
            <div class="line"></div>
        </div>
    </section>

    <section class="tecnologias">
        <div class="top">
            <div class="title">Tecnologias</div>
            <h2>Tecnologias que ensinamos no treinamento</h2>
        </div>
        <div class="logos-top marquee-left" data-aos="fade-right">
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/html.svg" alt=""></div>
                <div class="text">
                    <h5>Html</h5>
                    <p>HTML é uma linguagem de marcação para páginas web</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/css.svg" alt=""></div>
                <div class="text">
                    <h5>Css</h5>
                    <p>Cascading Style Sheets é uma linguagem de folha de estilo</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/js.svg" alt=""></div>
                <div class="text">
                    <h5>Java Script</h5>
                    <p>JavaScript é uma linguagem de programação que impulsiona a web</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/sass.svg" alt=""></div>
                <div class="text">
                    <h5>Sass</h5>
                    <p>Sass é uma linguagem de folha de estilos para CSS</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/bootstrap.svg" alt=""></div>
                <div class="text">
                    <h5>Bootstrap</h5>
                    <p>Bootstrap é um framework front-end para desenvolvimento web</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/npm.svg" alt=""></div>
                <div class="text">
                    <h5>Npm</h5>
                    <p>É um gerenciador de pacotes para a linguagem JavaScript</p>
                </div>
            </div>
        </div>
        <div class="logos-bottom marquee-right" data-aos="fade-left">
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/reactjs.svg" alt=""></div>
                <div class="text">
                    <h5>Git & Github</h5>
                    <p>HTML é uma linguagem de marcação para páginas web</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/meterial.svg" alt=""></div>
                <div class="text">
                    <h5>Material UI</h5>
                    <p>Cascading Style Sheets é uma linguagem de folha de estilo</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/reactjs.svg" alt=""></div>
                <div class="text">
                    <h5>ReactJs</h5>
                    <p>JavaScript é uma linguagem de programação que impulsiona a web.</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/typescript.svg" alt=""></div>
                <div class="text">
                    <h5>TypeScript</h5>
                    <p>TypeScript é uma linguagem de programação tipada e compilada</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/tailwind.svg" alt=""></div>
                <div class="text">
                    <h5>Tailwind css</h5>
                    <p>Uma estrutura CSS voltada para o utilitário para criar interfaces de usuário personalizadas</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/node.svg" alt=""></div>
                <div class="text">
                    <h5>Node.Js</h5>
                    <p>Um ambiente de tempo de execução JavaScript do lado do servidor</p>
                </div>
            </div>
        </div>
        <a href="#preco"><button class="btn">Quero aprender agora</button></a>
    </section>

    <div class="gratuito">
        <div class="container">
            <div class="content">
                <div class="text" data-aos="fade-right">
                    <div class="title"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_flame.png" alt="">Conteúdo gratuito</div>
                    <h2>Confira os conteúdos gratuitos que produzimos diariamente!</h2>
                    <p>Criamos conteúdos diariamente no Youtube e Instagram com projetos práticos e dicas valiosas para impulsionar sua carreira, além de tirar as dúvidas dos nossos seguidores com o objetivo de ajudá-los a se tornarem programadores de destaque.</p>
                    <div class="social">
                        <a href="https://www.youtube.com/@dev_boost" target="_blank" class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_youtube.svg" alt="">
                        </a>
                        <a href="https://www.instagram.com/dev_boost" target="_blank" class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_instagram.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="image" data-aos="fade-left">
                    <img src="<?php echo get_template_directory_uri() ?>/img/devices.webp" alt="">
                </div>
            </div>
            <div class="line"></div>
        </div>
    </div>

    <div class="empresas">
        <div class="container">
            <div class="top">
                <div class="title">Alunos DevBoost</div>
                <h2>Onde trabalham os alunos  que estudaram na DevBoost</h2>
            </div>
            <div class="bottom">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logos/meta.webp" alt="">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logos/dot.webp" alt="">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logos/toro.webp" alt="">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logos/inter.webp" alt="">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logos/madero.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    
    <section class="preco" id="preco">
        <div class="container">
            <div class="content-preco">
                <div class="content-left" data-aos="fade-up">
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_security.svg" alt="">
                        <h5>7 dias de garantia</h5>
                        <p>Você tem 7 dias para experimentar nosso curso com total garantia.</p>
                    </div>
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_pricelifetime.svg" alt="">
                        <h5>Acesso vitalício</h5>
                        <p>Tenha acesso ilimitado ao curso para sempre. Aprenda no seu tempo, no seu ritmo.</p>
                    </div>
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_priceupdate.svg" alt="">
                        <h5>Receba atualizações</h5>
                        <p>Compre agora e tenha acesso a todas as atualizações do curso gratuitamente, para sempre estar atualizado com o mercado.</p>
                    </div>
                </div>
                <div class="content-right">
                    <div class="vagas">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_ray.svg" alt="">
                        <p>Vagas abertas!</p>
                    </div>
                    <h2>Dê o primeiro passo e evolua sua carreira na programação</h2>
                    <div class="box-preco" data-aos="flip-left">
                        <p>Apenas</p>
                        <div class="numeros">
                            <div class="real">R$</div>
                            <div class="valor">297<span>,00</span></div>
                        </div>
                        <p>Ou 12x de R$ 28,82</p>
                    </div>
                    <button class="btn" id="js-form">Fazer minha matrícula</button>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="content-left">
                <div class="text">
                    <div class="title">Faq</div>
                    <h2>Perguntas Frequentes</h2>
                    <p>Ainda está com alguma dúvida? Chama nossa equipe no WhatsApp!</p>
                    <a href="https://api.whatsapp.com/send?phone=5585992364455&text=Ol%C3%A1%2C%20tenho%20d%C3%BAvida%20sobre" target="_blank"><button class="btn"><i class="fa-brands fa-whatsapp fa-lg"></i>Whatsapp</button></a>
                </div>
            </div>
            <div class="content-right">
                <details>
                    <summary>
                        <h5>Preciso ter conhecimentos prévios em programação para participar?</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p>O programa é adequado para iniciantes em programação e para aqueles que desejam aprimorar suas habilidades em desenvolvimento web.</p>
                </details>

                <details>
                    <summary>
                        <h5>Qual é a duração do programa DevBoost?</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p>O programa tem acesso vitalício, porém você só terá suporte durante o primeiro ano (Tempo esperado para a conclusão do seu treinamento).</p>
                </details>

                <details>
                    <summary>
                        <h5>O programa de treinamento oferece certificação?</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p>Sim, ao concluir o programa com sucesso, você receberá uma certificação emitida pela DevBoost.</p>
                </details>

                <details>
                    <summary>
                        <h5>Terei suporte durante o programa de treinamento?</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p>Você terá acesso a um suporte técnico especializado durante os primeiros 12 meses e poderá contar com a ajuda da comunidade de alunos e principalmente dos instrutores.</p>
                </details>

                <details>
                    <summary>
                        <h5>Estarei preparado para o mercado de trabalho após o treinamento?</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p>O programa foi projetado para prepará-lo para o mercado de trabalho em desenvolvimento web, fornecendo todas as habilidades necessárias para se destacar em uma carreira na área.</p>
                </details>

                <details>
                    <summary>
                        <h5>Quais são as opções de pagamento disponíveis?</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p>O DevBoost oferece diversas opções de pagamento para maior comodidade dos alunos. Você pode optar por pagar em até 12 vezes no cartão de crédito, ou se preferir pode efetuar seu pagamento à vista via PIX ou boleto bancário.</p>
                </details>

                <details>
                    <summary>
                        <h5>Qual o prazo de garantia?</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                    </summary>
                    <p>Temos o compromisso com nossos alunos e oferecemos 7 dias corridos de garantia, a partir da data e pagamento da assinatura, para a desistência e devolução integral do valor pago pelo aluno.</p>
                </details>
                
            </div>
        </div>
    </section>

    <div class="formulario">
        <div class="overlay">
            <div class="card">
                <div class="close js-overlay-form">
                    <i class="fa-sharp fa-solid fa-xmark"></i>
                </div>
                <h2>Vamos começar</h2>
                <p>Informe seus dados abaixo para prosseguir:</p>
                <form method="POST" onsubmit="redirecionar(event)">
                    <input type="text" name="name" id="name" placeholder="Nome" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="tel" name="phone" id="phone" placeholder="WhatsApp" required>
                    <button class="btn" type="submit">Continue</button>
                </form>
            </div>
        </div>
    </div>

    <?php endwhile; else: endif; ?>

<?php get_footer() ?>