<?php use yii\helpers\Html;

$img_exist = true;
?>
<h2>Etkinliklerimiz</h2>
<hr class="mt-0">

<div class="card-deck mb-5">
    <div class="card shadow-lg">
        <?php if ($img_exist) {
            echo Html::img('@web/img/conference.jpg', ['class' => 'card-img-top img-fluid', 'style' => 'object-fit:cover; height:150px; width:100%']);
            echo '<div class="card-img-overlay d-flex justify-content-end py-3 px-3">
            <small>
                <div class="rounded px-2 py-1 mx-1" style=" background-color: #d79228;"><p class="my-0 text-white">
                        Konferans</p></div>
            </small>
            <small>
                <div class="rounded bg-danger px-2 py-1 mx-1"><p class="my-0 text-white">
                        Teknik Gezi</p></div>
            </small>

        </div>';
        } else {
            echo '<div class="card-header bg-gray-200 py-3 px-3">
            <div class="row justify-content-end">
            <small>
                <div class="rounded px-2 py-1 mx-1" style=" background-color: #d79228;"><p class="my-0 text-white">
                        Konferans</p></div>
            </small>
            <small>
                <div class="rounded bg-danger px-2 py-1 mx-1"><p class="my-0 text-white">
                        Teknik Gezi</p></div>
            </small>

        </div>
        </div>';
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
    <div class="card shadow-lg">
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
    <div class="card shadow-lg">
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
        <a class="card-footer bg-secondary stretched-link text-decoration-none" href="/events/event?id=1">
            <p class="card-text text-white d-flex">
                <small>Etkinliği gör</small>
                <i class="fas fa-arrow-right my-auto ml-auto"></i></p>
        </a>
    </div>
</div>
<div class="card-deck">
    <div class="card shadow-lg">
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
        <a class="card-footer bg-secondary stretched-link text-decoration-none" href="/events/event?id=1">
            <p class="card-text text-white d-flex">
                <small>Etkinliği gör</small>
                <i class="fas fa-arrow-right my-auto ml-auto"></i></p>
        </a>
    </div>
    <div class="card shadow-lg">
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
        <a class="card-footer bg-secondary stretched-link text-decoration-none" href="/events/event?id=1">
            <p class="card-text text-white d-flex">
                <small>Etkinliği gör</small>
                <i class="fas fa-arrow-right my-auto ml-auto"></i></p>
        </a>
    </div>
    <div class="card shadow-lg">
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
        <a class="card-footer bg-secondary stretched-link text-decoration-none" href="/events/event?id=1">
            <p class="card-text text-white d-flex">
                <small>Etkinliği gör</small>
                <i class="fas fa-arrow-right my-auto ml-auto"></i></p>
        </a>
    </div>
</div>
<!--'style' => 'object-fit:cover; height:100%; width:200px'-->