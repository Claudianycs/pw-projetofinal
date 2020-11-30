<?php $aluno = $data['aluno'];?>

<?php 
    $this->view('layouts/header');
?>
<div class="section" id="contact">
    <div class="cc-contact-information" style="background-image: url('images/staticmap.png');">
        <div class="container">
            <div class="cc-contact">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-0" data-aos="zoom-in">
                            <div class="h4 text-center title">Contato</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <form name="cadastro" action="http://localhost:8080/contact/alteraAluno"
                                            method="POST">
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label" for="nome">Nome</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-address-card"></i>
                                                            </div>
                                                        </div>
                                                        <input id="id" name="id" type="hidden"
                                                            value="<?=$aluno->idalunos;?>">
                                                        <input id="nome" name="nome" value="<?=$aluno->nome;?>"
                                                            placeholder="informe seu nome" type="text"
                                                            class="form-control" aria-describedby="nomeHelpBlock"
                                                            required="required">
                                                    </div>
                                                    <span id="nomeHelpBlock" class="form-text text-muted">Informe seu
                                                        nome completo</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="idade" class="col-4 col-form-label">Idade</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-bullseye"></i>
                                                            </div>
                                                        </div>
                                                        <input id="idade" name="idade" value="<?=$aluno->idade;?>"
                                                            placeholder="informe sua idade" type="text"
                                                            required="required" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-4">Sexo</label>
                                                <div class="col-8">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="radio" id="radio_0" type="radio"
                                                            class="custom-control-input" value="masc">
                                                        <label for="radio_0"
                                                            class="custom-control-label">Masculino</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="radio" id="radio_1" type="radio"
                                                            class="custom-control-input" value="fem">
                                                        <label for="radio_1"
                                                            class="custom-control-label">Feminino</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                    <button name="submit" type="submit"
                                                        class="btn btn-primary">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    $this->view('layouts/footer');
?>