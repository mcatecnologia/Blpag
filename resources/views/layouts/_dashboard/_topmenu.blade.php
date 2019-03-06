<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    BLPAG
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

                @include('layouts._dashboard._task')
                @include('layouts._dashboard._messages')
                @include('layouts._dashboard._notifications')


                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="{{asset('lib/ace/images/avatars/user.jpg')}}" alt="Jason's Photo" />
                        <span class="user-info">
									<small>Seja Bem Vindo,</small>
									Jason
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-user"></i>
                                Meus Dados
                            </a>
                        </li>

                        <?php //if ($this->AuthorizedUser()->isAdmin()) : ?>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-building"></i>
                                Gerenciar Empresas
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-money"></i>
                                Minha Conta
                            </a>
                        </li>

                        <?php //endif; ?>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cogs"></i>
                                Configurações
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Sair
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        @include('layouts._dashboard._shortcut')

        <ul class="nav nav-list">
            <li class="active">
                <a href="#">
                    <i class="menu-icon fa fa-home"></i>
                    <span class="menu-text">Início</span>
                </a>

                <b class="arrow"></b>
            </li>
            @include('layouts._dashboard._usermenu')



        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>





