<?
$_SESSION["ID_CPC"] = '';
$_SESSION["ID_CPC"] = '';
$_SESSION["USUARIONOME"] = '';
$_SESSION["PAGINA"] ='';
?>

    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-center">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Login</h3>Por Favor, Entre suas credenciais para acesso ao sistema</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="index.php" method="POST"  id="loginForm" novalidate>
                        <div class="form-group">
                            <label class="control-label" for="username">Usuário</label>
                            <input type="text" placeholder="Cód Usuário" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            <span class="help-block small">Seu codigo de usuario</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Senha</label>
                            <input type="password" title="Sua senha" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Utilize senhas fortes</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password"></label>
                            <select name="sistema" class="form-control">
                                                    <option value="1">SAPI</option>
                                                    <option value="2">Laudos</option>
                                                    <option value="3">Financeiro</option>
                                                    <option value="4">Contabilidade</option>
                                                    <option value="5">Patrimônio</option>
                                                    <option value="6">Laboratório</option>
                                                    <option value="7">Estoque</option>
                                                </select>
                            <span class="help-block small">Escolha o sistema</span>
                        </div>
                        <div>
                            <button class="btn btn-primary">Entrar</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
