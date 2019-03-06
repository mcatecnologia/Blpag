@extends('layouts._login')
@section('content')
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <span class="red">BL</span>
                                <span class="white" id="id-text2">PAG</span>
                            </h1>
                            <p class="white">Seja bem-vindo ao BL Pag</p>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">

                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="ace-icon fa fa-key green"></i>
                                            Faça seu login ou cadastre-se
                                        </h4>

                                        <div class="space-6"></div>

                                        <form keepUrl action="{{ route('login') }}" method="post">
                                            <fieldset>
                                                <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input type="text" class="form-control" placeholder="E-mail" name="user" />
                                                    <i class="ace-icon fa fa-user"></i>
                                                </span>
                                                </label>

                                                <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input type="password" class="form-control" placeholder="Password" name="passwd"/>
                                                    <i class="ace-icon fa fa-lock"></i>
                                                </span>
                                                </label>

                                                <div class="space"></div>

                                                <div id="alerts"></div>

                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <input type="checkbox" class="ace" name="rememberme" />
                                                        <span class="lbl">Lembrar-me</span>
                                                    </label>

                                                    <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">Login</span>
                                                    </button>
                                                </div>

                                                <div class="space-4"></div><br>
                                                <div align="center"> Dúvidas ? <b> 0800 008 0128 </b> ou <b>faleconosco@blpag.com.br</b></div>
                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>

                                        <!-- <div class="social-or-login center">
                                            <span class="bigger-110">Or Login Using</span>
                                        </div>

                                        <div class="space-6"></div>

                                        <div class="social-login center">
                                            <a class="btn btn-primary">
                                                <i class="ace-icon fa fa-facebook"></i>
                                            </a>

                                            <a class="btn btn-info">
                                                <i class="ace-icon fa fa-twitter"></i>
                                            </a>

                                            <a class="btn btn-danger">
                                                <i class="ace-icon fa fa-google-plus"></i>
                                            </a>
                                        </div> -->
                                    </div><!-- /.widget-main -->

                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="javascript:;" data-target="#forgot-box" class="forgot-password-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                Esqueci minha senha
                                            </a>
                                        </div>

                                        <div>
                                            <a href="javascript:;" data-target="#signup-box" class="user-signup-link">
                                                Quero Registrar
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->

                        </div><!-- /.position-relative -->
                        <div class="center">
                            <h4 class="white" id="id-company-text">&copy; BL BPO</h4>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container -->

@endsection
