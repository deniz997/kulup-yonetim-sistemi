<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\web\View;

//DashboardLayout, kulüp sayfasının navigasyonunun sağlandığı ve public, private olacak şekilde kullanıcı
//tipine göre farklı tabların gösterildiği bir layouttur. Responsive'dir.


/* @var $this View */
/* @var $content string */ // $content bu layout'un içine gelecek view'ı tutan bir değişkendir.


//TODO Kulup objesini dashboard layout'a al
$this->beginContent('@app/views/layouts/main.php'); ?>

    <div class="d-flex">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <li class="nav-item">
                <a class="sidebar-brand container" href="/kulup/profile?id=1">
                    <!--                    TODO: $kulup->kulupId ile kulup profiline gönder-->
                    <div>
                        <!--                        TODO: $kulup->logo ile kulup logo foto url al-->
                        <?php echo Html::img('@web/img/infx_logo.jpg', ['class' => 'rounded-circle shadow-lg w-50 img-fluid']) ?>
                    </div>
                    <!--                    TODO: $kulup->name ile kulüp adını al-->
                    <div class="sidebar-brand-text d-sm-none d-md-block mt-3">Informatix <br> Kulübü</div>
                </a>

            </li>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!--            TODO: Gerekli linklerin yerleştirilmesi ve gerekli objeler ile çalışması-->
            <!-- Nav Item - Events -->
            <li class="nav-item active">
                <a class="nav-link" href="/events/index">
                    <i class="far fa-calendar-alt"></i>
                    <span>Etkinlikler</span></a>
            </li>

            <!-- Nav Item - Statistics -->
            <li class="nav-item active">
                <a class="nav-link" href="/kulup/istatistikler">
                    <i class="fas fa-chart-line"></i>
                    <span>İstatistikler</span></a>  <!--TODO-->
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php
            //Handles the dashboard configurations to show and hide some links and operations based on user type
            if (!Yii::$app->user->isGuest) {
                echo '<!-- Heading -->
            <div class="sidebar-heading">
                Kulüp Yönetimi
            </div>

            <!-- Nav Item - Yönetim Kurulu Collapse Menu -->
            <!--            TODO: Gerekli linklerin yerleştirilmesi ve gerekli objeler ile çalışması-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users-cog"></i>
                    <span>Yönetim Kurulu</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Yönetim Kurulu İşlemleri</h6>
                        <a class="collapse-item" href="#">YK İşlem 1</a> <!--TODO-->
                        <a class="collapse-item" href="#">YK İşlem 2</a> <!--TODO-->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Denetim Kurulu Collapse Menu -->
            <!--            TODO: Gerekli linklerin yerleştirilmesi ve gerekli objeler ile çalışması-->
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
                        <a class="collapse-item" href="#">DK İşlem 1</a> <!--TODO-->
                        <a class="collapse-item" href="#">DK İşlem 2</a> <!--TODO-->
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Etkinlik Yönetimi
            </div>

            <!-- Nav Item - Etkinlik Yönetimi Collapse Menu -->
            <!--            TODO: Gerekli linklerin yerleştirilmesi ve gerekli objeler ile çalışması-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-archive"></i>
                    <span>Etkinlikleri Yönet</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Etkinlik İşlemleri:</h6>
                        <a class="collapse-item" href="#">Yeni oluştur</a> <!--TODO-->
                        <a class="collapse-item" href="#">Düzenle/kaldır</a> <!--TODO-->
                        <a class="collapse-item" href="#">Sonuç Bildirimi</a> <!--TODO-->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Üyeler -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-users"></i>
                    <span>Üyeler</span></a> <!--TODO-->
            </li>';
            } ?>
        </ul>
        <!-- End of Sidebar -->


        <div class="container my-4">

            <?= Alert::widget() ?>
            <?php echo $content ?>
        </div>
    </div>

<?php $this->endContent(); ?>