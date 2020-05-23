<?php

use app\widgets\Alert;
use yii\helpers\Html;


$this->beginContent('@app/views/layouts/main.php'); ?>

    <div class="d-flex">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <li class="nav-item">
                <a class="sidebar-brand container" href="index.html">
                    <div>
                        <?php echo Html::img('@web/img/infx_logo.jpg', ['class' => 'rounded-circle w-50 img-fluid']) ?>
                    </div>
                    <div class="sidebar-brand-text d-sm-none d-md-block mt-3">Informatix <br> Kulübü</div>
                </a>

            </li>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Events -->
            <li class="nav-item active">
                <a class="nav-link" href="kulup/etkinlikler">
                    <i class="far fa-calendar-alt"></i>
                    <span>Etkinlikler</span></a>
            </li>

            <!-- Nav Item - Events -->
            <li class="nav-item active">
                <a class="nav-link" href="kulup/istatistikler">
                    <i class="fas fa-chart-line"></i>
                    <span>İstatistikler</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kulüp Yönetimi
            </div>

            <!-- Nav Item - Management Team Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users-cog"></i>
                    <span>Yönetim Kurulu</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Yönetim Kurulu İşlemleri</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                   aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-tasks"></i>
                    <span>Denetim Kurulu</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Denetim Kurulu İşlemleri:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Etkinlik Yönetimi
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-archive"></i>
                    <span>Etkinlikleri Yönet</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Etkinlik İşlemleri:</h6>
                        <a class="collapse-item" href="login.html">Yeni oluştur</a>
                        <a class="collapse-item" href="register.html">Düzenle/kaldır</a>
                        <a class="collapse-item" href="forgot-password.html">Sonuç Bildirimi</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-users"></i>
                    <span>Üyeler</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link" href="tables.html">-->
            <!--                    <i class="fas fa-fw fa-table"></i>-->
            <!--                    <span>Tables</span></a>-->
            <!--            </li>-->

            <!-- Divider -->
            <!--            <hr class="sidebar-divider d-none d-md-block">-->

            <!-- Sidebar Toggler (Sidebar) -->
            <!--            <div class="text-center d-none d-md-inline">-->
            <!--                <button class="rounded-circle border-0" id="sidebarToggle"></button>-->
            <!--            </div>-->

        </ul>
        <!-- End of Sidebar -->


        <div class="container my-4">

            <?= Alert::widget() ?>

            <?php echo $content ?>
        </div>
    </div>

<?php $this->endContent('@app/views/layouts/main.php'); ?>