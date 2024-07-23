<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CGE Notes</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon1.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">CGE Notes</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projeto</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">CGE Notes</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">É a <span style="color: blue;">CGE Notes</span> no controle das suas anotações!</h2>
                    <a class="btn btn-primary" href="#about">Ler mais...</a>
                </div>
            </div>
        </div>
    </header>
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Como Surgiu a CGE Notes?</h2>
                    <p class="text-white-50">
                        A CGE Notes foi criada para ajudar as pessoas a organizarem seus pensamentos e lembretes de maneira fácil e eficiente.
                        Com um sistema intuitivo e acessível, qualquer pessoa pode usar a CGE Notes para anotar ideias, tarefas e compromissos importantes.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/img5.png" alt="..." />
        </div>
    </section>
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/img1.jpg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Sistema</h4>
                        <p class="text-black-50 mb-0">Nosso sistema é novo no mercado, porém já somos bastante destacados, sendo um dos melhores sistemas de gestão de lembretes e anotações.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/img2.png" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Objetivo</h4>
                                <p class="mb-0 text-white-50">Nosso objetivo é ajudar você a organizar suas anotações e lembretes de forma eficiente, mantendo tudo em um só lugar e acessível em qualquer momento.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/img3.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Facilidade</h4>
                                <p class="mb-0 text-white-50">Nosso sistema é fácil de usar, e nossa equipe de suporte está sempre disponível para ajudar com qualquer dúvida que você possa ter.</p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Inscreva-se para receber novidades!</h2>
                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Digite seu email" aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                            <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Enviar</button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">Email válido.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email inválido.</div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2 text-white">
                                <div class="fw-bolder">Inscrição com sucesso!</div>
                                <br />
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Erro ao enviar mensagem!</div></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Endereço</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Rua New York, Orlando FL</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">cgenotes@support.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Celular</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">(31) 9876-0008</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5"></div></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
