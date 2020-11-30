<div class="cc-contact-information" style="background-image: url('images/bg.jpg');">
    <div class="container">
        <div class="cc-contact">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-0" data-aos="zoom-in">
                        <div class="h4 text-center title">Contato</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">

                                    <form name="cadastro" action="http://localhost:8080/contact/adicionaAluno"
                                        method="POST">
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label" for="nome">Nome:</label>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <input id="nome" name="nome" placeholder="informe seu nome completo"
                                                        type="text" class="form-control"
                                                        aria-describedby="nomeHelpBlock" required="required">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="idade" class="col-3 col-form-label">Idade</label>
                                            <div class="col-12">
                                                <div class="input-group">

                                                    <input id="idade" name="idade" placeholder="informe sua idade"
                                                        type="text" required="required" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-4">Sexo:</label>
                                            <div class="col-8">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="radio" id="radio_0" type="radio"
                                                        class="custom-control-input" value="masc">
                                                    <label for="radio_0" class="custom-control-label">Masculino</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="radio" id="radio_1" type="radio"
                                                        class="custom-control-input" value="fem">
                                                    <label for="radio_1" class="custom-control-label">Feminino</label>
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