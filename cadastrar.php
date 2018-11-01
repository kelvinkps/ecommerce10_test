<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Cadastrar Fornecedor/Cliente</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #3 for " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"
    />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="assets/pages/css/login-3.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/pages/css/cadastrar.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
</head>
<!-- END HEAD -->

<body class=" login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.html">
            <img src="assets/pages/img/logo.gif" alt="" width="15%" /> </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <div class="tabbable-custom">
            <ul class="nav nav-tabs ">
                <li class="active">
                    <a href="#tab_1" data-toggle="tab" aria-expanded="true"> Cadastro Cliente </a>
                </li>
                <li class="">
                    <a href="#tab_2" data-toggle="tab" aria-expanded="false"> Cadastro Fornecedor </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <!-- BEGIN REGISTRATION FORM -->
                    <form class="register-form" method="post" id="cadastrar_cliente">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide" style="display: none;">
                                <button class="close" data-close="alert"></button> Por favor, preencha todos os campos em vermelho!
                            </div>
                            <div class="alert alert-success display-hide" style="display: none;">
                                <button class="close" data-close="alert"></button> Salvo com sucesso!
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="control-label">Nome <span class="required">*</span></label>
                                        <input type="text" id="nome_cliente" class="form-control" placeholder="Nome" name="nome_cliente" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">CPF <span class="required">*</span></label>
                                        <input type="text" id="cpf_cliente" class="form-control mask_cpf" placeholder="111.111.111-11" name="cpf_cliente" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Data de nascimento <span class="required">*</span></label>
                                        <input type="text" id="data_nascimento_cliente" class="form-control date-picker" placeholder="dd/mm/yyyy" name="data_nascimento_cliente"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Telefone <span class="required">*</span></label>
                                        <input type="text" id="telefone_cliente" class="form-control mask_telefone_fixo" placeholder="(11) 1111-1111" name="telefone_cliente"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Celular <span class="required">*</span></label>
                                        <input type="text" id="celular_cliente" class="form-control mask_phone" placeholder="(11) 11111-1111" name="celular_cliente" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Email <span class="required">*</span></label>
                                        <input type="text" id="email_cliente" class="form-control" placeholder="exemplo@exemplo.com.br" name="email_cliente" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">CEP <span class="required">*</span></label>
                                        <input type="text" id="cep_cliente" class="form-control" placeholder="11111-111" name="cep_cliente" value="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Endereço <span class="required">*</span></label>
                                        <input type="text" id="endereco_cliente" class="form-control" placeholder="Digite o seu endereço" name="endereco_cliente"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">Num <span class="required">*</span></label>
                                        <input type="text" id="num_cliente" class="form-control" placeholder="1" name="num_cliente" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">UF <span class="required">*</span></label>
                                        <select name="uf_cliente" id="uf_cliente" class="form-control">
                                            <option value="">(UF)</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">AL</option>
                                            <option value="AP">AP</option>
                                            <option value="AM">AM</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MT">MT</option>
                                            <option value="MS">MS</option>
                                            <option value="MG">MG</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PR">PR</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RS">RS</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SP">SP</option>
                                            <option value="SE">SE</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Município <span class="required">*</span></label>
                                        <input type="text" id="municipio_cliente" class="form-control" placeholder="Informe o munícipio" name="municipio_cliente"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Bairro <span class="required">*</span></label>
                                        <input type="text" id="bairro_cliente" class="form-control" placeholder="Informe o bairro" name="bairro_cliente" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Complemento</label>
                                        <input type="text" id="complemento_cliente" class="form-control" placeholder="Informe o complemento" name="complemento_cliente"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="senha-cliente-error">
                                        <label class="control-label">Senha <span class="required">*</span></label>
                                        <input type="password" id="senha_cliente" class="form-control" placeholder="Senha" name="senha_cliente" value="">
                                        <span class="help-block-error senhas_clientes_erradas hide" style="color:red;">Senhas não batem</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="confirmar-senha-cliente-error">
                                        <label class="control-label">Confire a senha <span class="required">*</span></label>
                                        <input type="password" id="confirmar_senha_cliente" class="form-control" placeholder="Confirme a senha" name="confirmar_senha_cliente" value="">
                                        <span class="help-block-error senhas_clientes_erradas hide" style="color:red;">Senhas não batem</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-block green-jungle">
                                        <i class="fa fa-check"></i> Salvar
                                    </button>


                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <a href="login.php" class="btn blue btn-block btn-outline ">
                                        <i class="fa fa-check"></i> Login
                                    </a>
                                </div>
                                <div class="col-md-3"></div>
                            </div>

                        </div>
                    </form>
                    <!-- END REGISTRATION FORM -->
                </div>
                <div class="tab-pane" id="tab_2">
                    <form class="register-form" method="post" id="cadastrar_fornecedor">
                        <div class="alert alert-danger display-hide" id="fornecedor-danger" style="display: none;">
                            <button class="close" data-close="alert"></button> Por favor, preencha todos os campos em vermelho!
                        </div>
                        <div class="alert alert-success display-hide" id="fornecedor-success" style="display: none;">
                            <button class="close" data-close="alert"></button> Salvo com sucesso!
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="control-label">Nome fantasia <span class="required">*</span></label>
                                    <input type="text" id="nome_fantasia" class="form-control" placeholder="Nome fantasia" name="nome_fantasia" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">CNPJ <span class="required">*</span></label>
                                    <input type="text" id="cnpj" class="form-control mask_cnpj" placeholder="11.111.111/1111-11" name="cnpj" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Site <span class="required">*</span></label>
                                    <input type="text" id="site" class="form-control" placeholder="www.exemplo.com.br" name="site" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Telefone <span class="required">*</span></label>
                                    <input type="text" id="telefone_fornecedor" class="form-control phone" placeholder="(11) 11111-1111" name="telefone_fornecedor"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Email <span class="required">*</span></label>
                                    <input type="text" id="email_fornecedor" class="form-control" placeholder="exemplo@exemplo.com.br" name="email_fornecedor" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">CEP <span class="required">*</span></label>
                                    <input type="text" id="cep_fornecedor" class="form-control" placeholder="11111-111" name="cep_fornecedor" value="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Endereço <span class="required">*</span></label>
                                    <input type="text" id="endereco_fornecedor" class="form-control" placeholder="Digite o seu endereço" name="endereco_fornecedor" value="">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="control-label">Num <span class="required">*</span></label>
                                    <input type="text" id="num_fornecedor" class="form-control" placeholder="1" name="num_fornecedor" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="control-label">UF <span class="required">*</span></label>
                                    <select name="uf_fornecedor" class="form-control" id="uf_fornecedor">
                                            <option value="">(UF)</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AP">AP</option>
                                            <option value="AM">AM</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MT">MT</option>
                                            <option value="MS">MS</option>
                                            <option value="MG">MG</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PR">PR</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RS">RS</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SP">SP</option>
                                            <option value="SE">SE</option>
                                            <option value="TO">TO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Município <span class="required">*</span></label>
                                    <input type="text" id="municipio_fornecedor" class="form-control" placeholder="Informe o munícipio" name="municipio_fornecedor" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Bairro <span class="required">*</span></label>
                                    <input type="text" id="bairro_fornecedor" class="form-control" placeholder="Informe o bairro" name="bairro_fornecedor" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Complemento</label>
                                    <input type="text" id="complemento_fornecedor" class="form-control" placeholder="Informe o complemento" name="complemento_fornecedor" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="senha-fornecedor-error">
                                        <label class="control-label">Senha <span class="required">*</span></label>
                                        <input type="password" id="senha_fornecedor" class="form-control" placeholder="Senha" name="senha_fornecedor" value="">
                                        <span class="help-block-error senhas_fornecedor_erradas hide" style="color:red;">Senhas não batem</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="confirmar-senha-fornecedor-error">
                                        <label class="control-label">Confire a senha <span class="required">*</span></label>
                                        <input type="password" id="confirmar_senha_fornecedor" class="form-control" placeholder="Confirme a senha" name="confirmar_senha_fornecedor" value="">
                                        <span class="help-block-error senhas_fornecedor_erradas hide" style="color:red;">Senhas não batem</span>
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block green-jungle" id-"teste">
                                    <i class="fa fa-check"></i> Salvar
                                </button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <a href="login.php" class="btn blue btn-block btn-outline ">
                                    <i class="fa fa-check"></i> Login
                                </a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- END LOGIN -->
    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/global/scripts/validar-documentos.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-validation/js/jquery.validate.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <!-- <script src="assets/pages/scripts/login.js" type="text/javascript"></script> -->
    <script src="assets/pages/scripts/input-mask.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/cadastrar-cliente.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/cadastrar-fornecedor.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function () {
            $('#clickmewow').click(function () {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>
</body>

</html>
