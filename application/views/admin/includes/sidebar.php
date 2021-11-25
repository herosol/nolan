<div class="sidebar-menu fixed">
    <div class="sidebar-menu-inner ps-container ps-active-y">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="<?=site_url(ADMIN.'/dashboard')?>">
                    <img src="<?= base_url().SITE_IMAGES.'images/'.$adminsite_setting->site_logo ?>" width="120" alt="">
                </a>
            </div>
            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="opened <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/dashboard') ?>">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class=" <?= ($this->uri->segment(2) == 'sitecontent' || $this->uri->segment(2) == 'preferences') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="fa fa-pagelines  "></i>
                    <span class="title">Manage Pages</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'landing') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/landing') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li class="opened<?= $this->uri->segment('2') == 'testimonials' ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/testimonials') ?>">
                            <i class="fa fa-comments"></i>
                            <span class="title">Home's Phases</span>
                        </a>
                    </li>
                    <li class="opened <?= ($this->uri->segment(2) == 'faq') ? 'active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/faq') ?>">
                            <i class="fa fa-th-list"></i>
                            <span class="title">Home's FAQ's</span>
                        </a>
                    </li>
                    <li class="opened <?= ($this->uri->segment(2) == 'partners') ? 'active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/partners') ?>">
                            <i class="fa fa-th-list"></i>
                            <span class="title">Home's Team</span>
                        </a>
                    </li>
                    <li class="opened <?= ($this->uri->segment(2) == 'gallery') ? 'active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/gallery') ?>">
                            <i class="fa fa-th-list"></i>
                            <span class="title">Home's Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opened <?= ($this->uri->segment('2') == 'meta-info') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/meta-info') ?>">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span class="title">Site Meta</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'settings' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/settings') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Site Settings</span>
                </a>
            </li>
            <li class="opened">
                <a href="<?= site_url(ADMIN.'/settings/change') ?>">
                    <i class="fa fa-lock"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>