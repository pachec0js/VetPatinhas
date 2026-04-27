<!-- Rodapé -->
<footer>
    <div class="container-fluid rodape">
        <div class="row">
            <div class="col-md-2 section1">
                <div class="img-footer">
                    <img src="./img/logoFooterVetPatinhas.png" alt="">
                </div>
                <div class="help">
                    <h5>Alguma dúvida?</h5>
                    <a href="faq.php" class="link">
                        <div class="faqs"><i class="bi bi-arrow-right"></i><span>FAQs</span></div>
                    </a>
                    <div class="phone"><i class="bi bi-telephone"></i><span>4002-8922</span></div>
                    <div class="email"><i class="bi bi-envelope-paper"></i><span>contato@vetpatinhas.com</span>
                    </div>
                </div>
            </div>

            <div class="col-md-2 footerItens">
                <div class="footer2">
                    <h5>Serviços</h5>
                    <dl>
                        <a href="resultservico.php?cardservicos=1">Castração</a>
                        <a href="resultexlab.php?cardexameslab=3">Dermatologia</a>
                        <a href="resultservico.php?cardservicos=10">Fisioterapia</a>
                        <a href="resultservico.php?cardservicos=18">Infectologia</a>
                    </dl>
                </div>
            </div>
            <div class="col-md-2 footerItens">
                <div class="footer3">
                    <dl>
                        <h5 class="espacinho">.</h5>
                        <a href="resultservico.php?cardservicos=7">Odontologia</a>
                        <a href="resultservico.php?cardservicos=15">Ortopedia</a>
                        <a href="resultservico.php?cardservicos=5">UTI</a>
                        <a href="resultservico.php?cardservicos=0">Vacinas</a>
                    </dl>
                    <a href="agendamento.php" class="agendamentos">
                        <h5 class="agendamentosfooter">Agendamentos</h5>
                    </a>
                </div>
            </div>

            <div class="col-md-1 footerItens">
                <div class="footer4">
                    <h5>Exames</h5>
                    <dl>
                        <a href="examesimg.php">De imagem</a>
                        <a href="exameslab.php">Laboratoriais</a>
                        <a href="../resultadoExames.php">Resultados</a>
                    </dl>
                    <a href="agendamento.php" class="agendamentosrespons">
                        <h5>Agendamentos</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer5">
                    <?php if (!isset($_SESSION['usuario']) && !isset($_SESSION['medico'])) {
                        echo '
                        <div class="inputsfooters">
                        <a href="login.php"><button class="footerLogin">Login</button></a>
                        <a href="cadastro.php"><button class="footerCadastro">Cadastrar-se</button></a>
                        </div>';
                    } else {
                        echo '';
                    }
                    ?>
                    <hr>
                    <div class="location">
                        <h5>Nossa localização</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14619.535982463407!2d-46.5583366!3d-23.6443251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5cec46ebe475%3A0x8d2c14858d37a05e!2sEscola%20Senai%20Armando%20de%20Arruda%20Pereira!5e0!3m2!1spt-BR!2sbr!4v1730933340096!5m2!1spt-BR!2sbr"
                            width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section2">
            <div class="col-md-4 line2">

                <a href="" class="redeSocial"><i class="bi bi-instagram"></i></a>
                <a href="" class="redeSocial"><i class="bi bi-facebook"></i></a>
                <a href="" class="redeSocial"><i class="bi bi-twitter-x"></i></a>
                <div class="footerspace">
                    <a class="sobrenosFooter" href="sobreNos.php">Sobre nós</a>
                    <a class="sobrenosFooter" href="contato.php">Contato</a>
                </div>

                <p class="termos">
                    © 2024 | Vet Patinhas & privacidade | Termos & Condições</p>
            </div>
            <div class="col-md-1 line2">
                <img class="patasFooter" src="../img/patasFooter.png" alt="">
            </div>

            <div class="col-md-6 line2">
                <h5>Feita com muito <i class="bi bi-heart-fill"></i></h5>
                <p class="texto-rodape">A Vet Patinhas se dedica a garantir a saúde e o bem-estar dos animais,
                    oferecendo atendimento de qualidade
                    e carinho. Nossa equipe apaixonada trabalha com excelência em prevenção e tratamento, promovendo
                    uma vida
                    saudável e feliz para os pets. Aqui, cada animal é tratado como parte da família, com todo o
                    cuidado que
                    merece!</p>
                <p class="termosrespons">
                    © 2024 | Vet Patinhas & privacidade | Termos & Condições</p>
            </div>
        </div>
    </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>