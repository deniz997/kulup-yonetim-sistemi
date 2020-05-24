<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 19.05.2020
 * Time: 00:02
 */

use yii\bootstrap4\Html;

$img_exist = true;
?>

<div class="row mb-n5">
    <div class="col-12 ">
        <div class="bg-danger rounded" style="height: 60px;"></div>
    </div>
</div>
<div class="row mx-2 mb-3">
    <div class="col-md-9 col-12">
        <div class="card shadow-lg mb-md-0 mb-3 ">
            <div class="card-body">
                <h5 class="card-title mb-3">Hakkımızda</h5>
                <hr class="mt-0">
                <p class="card-text">
                    Biz Türk-Alman Üniversitesinde faaliyetlerini sürdüren bir öğrenci kulübüyüz. Ağırlıklı olarak
                    Bilgisayar
                    Mühendisliği bölümü öğrencilerinden oluşuyoruz.

                    Kendi alanımızla sınırlı kalmadan olabildiğince farklı bölümlere ulaşmayı ve karşılıklı olarak
                    gelişmeyi
                    amaçlamaktayız.

                    Bu karşılıklı gelişmenin yeni fikirlerin desteklenmesi ve hayata geçirilmesi ile mümkün olduğuna
                    inanıyoruz.
                    Sizler de “yapacağım” diyerek vakit geçirmek yerine “yaptım” diyebilmek istiyorsanız, bizler
                    fikirlerinizi
                    desteklemek için buradayız.

                    Etrafımızın her geçen gün daha çok teknoloji ile donatıldığı dünyamızda bilgisayar bilimi artık her
                    yerde.
                    Bu nedenle çalışmalarımızı sadece bu alanla sınırlamıyor, “Multidisiplinerlik” kavramını
                    yaygınlaştırmak ve
                    bilgiye ulaşımı kolaylaştırmak , birbirinden öğrenmeyi teşvik etmek adına; projeler,
                    dersler(workshoplar)
                    yapıyor, çeşitli etkinlikler düzenliyoruz.</p>
                <h5 class="card-title">Faaliyet alanı</h5>
                <hr class="mt-0">
                <div class="row">
                    <small>
                        <div class="rounded bg-primary px-2 py-1 m-1"><p class="my-0 text-white">Mesleki</p></div>
                    </small>
                    <small>
                        <div class="rounded bg-success px-2 py-1 m-1"><p class="my-0 text-white">Bilimsel</p></div>
                    </small>
                    <small>
                        <div class="rounded bg-danger px-2 py-1 m-1"><p class="my-0 text-white">Kültürel</p></div>
                    </small>
                    <small>
                        <div class="rounded px-2 py-1 m-1" style="background-color: #7A43B6;"><p
                                    class="my-0 text-white">Sanatsal</p></div>
                    </small>
                    <small>
                        <div class="rounded px-2 py-1 m-1" style="background-color: #896A58;"><p
                                    class="my-0 text-white">Sportif</p></div>
                    </small>
                    <small>
                        <div class="rounded px-2 py-1 m-1" style="background-color: #d79228;"><p
                                    class="my-0 text-white">Sosyal</p></div>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-12">
        <div class="ml-lg-auto">
            <div class="card mb-3 bg-gray-100 mx-auto shadow-lg border-0">
                <?php
                if (true) {
                    echo '<a class="card-body stretched-link rounded bg-success text-white text-decoration-none" href="">
                    <div class="my-auto text-center">Üyelik isteği gönder</div>
                </a>';
                } else {
                    echo '<div class="card-body rounded bg-dark text-gray-400 text-decoration-none" href="">
                    <div class="my-auto text-center">İstek gönderildi</div>
                </div>';
                } ?>

            </div>
            <div class="card mb-3 bg-gray-100 mx-auto shadow-lg">
                <div class="card-body text-center">
                    <h1 class="text-dark font-weight-light mb-0">18</h1>
                    <h5 class="text-secondary font-weight-bold mt-0">Üye Sayısı</h5>
                </div>
            </div>
            <div class="card mb-3 bg-gray-100 mx-auto shadow-lg">
                <div class="card-body text-center">
                    <h1 class="text-dark font-weight-light mb-0">5</h1>
                    <h5 class="text-secondary font-weight-bold mt-0">Etkinlik Sayısı</h5>
                </div>
            </div>


        </div>

    </div>
</div>
<div class="row mx-3 shadow-lg">
    <div class="card col-12">
        <div class="card-body">
            <div class="row mx-1 my-0">
                <h5 class="my-auto">Güncel Etkinlikler</h5>
                <a class="text-decoration-none ml-auto mr-2 my-auto" href="/kulup/etkinlikler">Tümünü gör</a>
            </div>
            <hr>
            <div class="card-deck mb-5">
                <div class="card">
                    <?php
                    if ($img_exist) {
                        echo Html::img('@web/img/conference.jpg', ['class' => 'card-img-top img-fluid', 'style' => 'object-fit:cover; height:150px; width:100%']);
                    } ?>
                    <div class="card-body pb-0 px-0">
                        <div class="row col-12">
                            <div class="col-3 my-auto mr-3 mx-auto">
                                <h5 class="text-danger font-weight-bold text-center mb-0">Haz</h5>
                                <h5 class="font-weight-bold text-center">22</h5>
                            </div>
                            <div class="col-8">
                                <p class="card-text font-weight-bold mb-2">Vodafone Gezisi</p>
                                <small>
                                    <ul class="list-unstyled">
                                        <li class="row"><i class="fas fa-user-friends mt-1 mr-2"></i>
                                            <ul class="list-unstyled">
                                                <li>Deniz Mert Tecimer</li>
                                                <li>Deniz Mert Tecimer</li>
                                            </ul>
                                        </li>
                                        <li class="row"><i class="fas fa-map-marked-alt mr-2"></i>
                                            <p class="p-0 mb-0 col-10">YDYO Konferans Salonu</p></li>
                                    </ul>
                                </small>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="row ml-3 my-2">
                            <div class="col-2 my-auto">
                                <small class="my-auto">
                                    <?php echo Html::img('@web/img/infx_logo.jpg', ['class' => 'rounded-circle my-auto img-fluid']) ?>
                            </div>

                            <p class="text-left p-0 my-auto">Informatix Kulübü</p>
                        </div>
                        </small>

                    </div>
                    <a class="card-footer bg-secondary stretched-link text-decoration-none" href="/kulup/etkinlik">
                        <p class="card-text text-white d-flex">
                            <small>Etkinliği gör</small>
                            <i class="fas fa-arrow-right my-auto ml-auto"></i></p>
                    </a>
                </div>
                <div class="card">
                    <?php
                    if ($img_exist) {
                        echo Html::img('@web/img/conference.jpg', ['class' => 'card-img-top img-fluid', 'style' => 'object-fit:cover; height:150px; width:100%']);
                    } ?>
                    <div class="card-body pb-0 px-0">
                        <div class="row col-12">
                            <div class="col-3 my-auto mr-3 mx-auto">
                                <h5 class="text-danger font-weight-bold text-center mb-0">Haz</h5>
                                <h5 class="font-weight-bold text-center">22</h5>
                            </div>
                            <div class="col-8">
                                <p class="card-text font-weight-bold mb-2">Vodafone Gezisi</p>
                                <small>
                                    <ul class="list-unstyled">
                                        <li class="row"><i class="fas fa-user-friends mt-1 mr-2"></i>
                                            <ul class="list-unstyled">
                                                <li>Deniz Mert Tecimer</li>
                                                <li>Deniz Mert Tecimer</li>
                                            </ul>
                                        </li>
                                        <li class="row"><i class="fas fa-map-marked-alt mr-2"></i>
                                            <p class="p-0 mb-0 col-10">YDYO Konferans Salonu</p></li>
                                    </ul>
                                </small>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="row ml-3 my-2">
                            <div class="col-2 my-auto">
                                <small class="my-auto">
                                    <?php echo Html::img('@web/img/infx_logo.jpg', ['class' => 'rounded-circle my-auto img-fluid']) ?>
                            </div>

                            <p class="text-left p-0 my-auto">Informatix Kulübü</p>
                        </div>
                        </small>

                    </div>
                    <a class="card-footer bg-secondary stretched-link text-decoration-none" href="/kulup/etkinlik">
                        <p class="card-text text-white d-flex">
                            <small>Etkinliği gör</small>
                            <i class="fas fa-arrow-right my-auto ml-auto"></i></p>
                    </a>
                </div>
                <div class="card">
                    <?php
                    if ($img_exist) {
                        echo Html::img('@web/img/conference.jpg', ['class' => 'card-img-top img-fluid', 'style' => 'object-fit:cover; height:150px; width:100%']);
                    } ?>
                    <div class="card-body pb-0 px-0">
                        <div class="row col-12">
                            <div class="col-3 my-auto mr-3 mx-auto">
                                <h5 class="text-danger font-weight-bold text-center mb-0">Haz</h5>
                                <h5 class="font-weight-bold text-center">22</h5>
                            </div>
                            <div class="col-8">
                                <p class="card-text font-weight-bold mb-2">Vodafone Gezisi</p>
                                <small>
                                    <ul class="list-unstyled">
                                        <li class="row"><i class="fas fa-user-friends mt-1 mr-2"></i>
                                            <ul class="list-unstyled">
                                                <li>Deniz Mert Tecimer</li>
                                                <li>Deniz Mert Tecimer</li>
                                            </ul>
                                        </li>
                                        <li class="row"><i class="fas fa-map-marked-alt mr-2"></i>
                                            <p class="p-0 mb-0 col-10">YDYO Konferans Salonu</p></li>
                                    </ul>
                                </small>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="row ml-3 my-2">
                            <div class="col-2 my-auto">
                                <small class="my-auto">
                                    <?php echo Html::img('@web/img/infx_logo.jpg', ['class' => 'rounded-circle my-auto img-fluid']) ?>
                            </div>

                            <p class="text-left p-0 my-auto">Informatix Kulübü</p>
                        </div>
                        </small>

                    </div>
                    <a class="card-footer bg-secondary stretched-link text-decoration-none" href="/kulup/etkinlik">
                        <p class="card-text text-white d-flex">
                            <small>Etkinliği gör</small>
                            <i class="fas fa-arrow-right my-auto ml-auto"></i></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex my-auto mx-3">
    <i class="fab fa-instagram fa-lg"></i>
    <i class="fab fa-facebook-square fa-lg"></i>
    <i class="fab fa-linkedin fa-lg"></i>
    <i class="fas fa-link fa-lg"></i>
</div>
