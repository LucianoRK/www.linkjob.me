<body>
    <a class="logo logo-light top-position">
        <div class="logo-img"></div>
    </a>
    <div class="navigation-fire navigation-icon-wrapper top-position">
        <div class="navigation-icon" id="navigation-icon">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
    <div class="panel-overlay-from-left">
        <div class="navigation-menu-img-wrapper">
            <div class="navigation-menu-img overlay overlay-dark-40">
                <div class="menu-img" data-bg="<?= base_url('/public/js/template/img/menu/menu-1.jpg'); ?>" data-ref="menu-1"></div>
                <div class="menu-img" data-bg="<?= base_url('/public/js/template/img/menu/menu-2.jpg'); ?>" data-ref="menu-2"></div>
            </div>
        </div>
    </div>
    <div class="panel-from-right">
        <nav class="navigation-menu">
            <div class="center-container-menu">
                <div class="center-block-menu">
                    <ul class="menu brackets">
                        <li>
                            <a class="menu-state navscroll" data-id="page-home" data-ref="menu-1" href="<?= base_url('/home'); ?>">Home</a>
                        </li>
                        <li>
                            <a class="menu-state navscroll" data-id="page-news" data-ref="menu-2" href="<?= base_url('/logar'); ?>">Logar</a>
                        </li>
                        <li>
                            <a class="menu-state navscroll" data-id="page-services" data-ref="menu-2" href="<?= base_url('/contratar'); ?>">Contratar</a>
                        </li>
                        <li>
                            <a class="menu-state navscroll" data-id="page-works" data-ref="menu-2" href="<?= base_url('/registro'); ?>">Cadastre-se</a>
                        </li>
                        <li>
                            <a class="menu-state navscroll" data-id="page-works" data-ref="menu-2" href="<?= base_url('/perfis'); ?>">Perfis</a>
                        </li>
                        <li>
                            <a class="menu-state navscroll" data-id="page-works" data-ref="menu-2" href="<?= base_url('/adicionar-perfil'); ?>">Novo Perfil</a>
                        </li>
                        <li>
                            <a class="menu-state navscroll" data-id="page-works" data-ref="menu-2" href="<?= base_url('/perfis-pendentes-aprovacao'); ?>">Aprovar Perfis</a>
                        </li>
                        <li>
                            <a class="menu-state navscroll" data-id="page-works" data-ref="menu-2" href="<?= base_url('/minha-conta'); ?>">Minha Conta</a>
                        </li>
                        <li>
                            <a class="menu-state navscroll" data-id="page-works" data-ref="menu-2" href="<?= base_url('/usuarios'); ?>">Usuários</a>
                        </li>
                        <li class="last">
                            <a class="menu-state navscroll" data-id="page-about" data-ref="menu-2" href="<?= base_url('/logout'); ?>">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>