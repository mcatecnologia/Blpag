<li class="">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-briefcase"></i>
        <span class="menu-text">Devedores</span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">

        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Pesquisar Devedores
            </a>
        </li>

        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Novo Devedor
            </a>
        </li>

        <b class="arrow"></b>

        <li class="">

            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>
                Contratos
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        'Pesquisar Contratos
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Novo Contrato
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul>
</li>

<?php //if ($this->layout()->module_tasks) : ?>
<li class="">
    <a href="#" >
        <i class="menu-icon fa fa-calendar"></i>
        <span class="menu-text">
                Tarefas
            </span>

        <span class="badge badge-transparent tooltip-error" title="" data-original-title="2 Important Events">
                <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
            </span>
    </a>
</li>
<?php //endif; ?>

<li class="">
    <a href="#" >
        <i class="menu-icon fa fa-bar-chart-o"></i>
        <span class="menu-text">
            Relatórios
        </span>

    </a>
</li>

<li class="">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-file"></i>
        <span class="menu-text">
            Importar
        </span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">

        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Importar Devedores
            </a>
        </li>

        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Últimas importações
            </a>
        </li>

        <b class="arrow"></b>

    </ul>
</li>

<li class="">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-building"></i>
        <span class="menu-text">
            Empresa
        </span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">

        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Meu Cadastro
            </a>
        </li>

        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Usuários
            </a>
        </li>

        <?php //if ($this->AuthorizedUser()->isAdmin()) : ?>
        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Gerenciar Empresas
            </a>
        </li>
        <?php //endif; ?>

        <b class="arrow"></b>

    </ul>
</li>

<li class="">
    <a href="#" >
        <i class="menu-icon fa fa-ambulance"></i>
        <span class="menu-text">
            Suporte
        </span>

    </a>
</li>

<li class="">
    <a href="#" >
        <i class="menu-icon fa fa-barcode"></i>
        <span class="menu-text">
            Boleto
        </span>

    </a>
</li>

