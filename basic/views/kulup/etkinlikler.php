<?php use yii\helpers\Html; ?>
<div class="card shadow-lg" style="width: 18rem;">
    <?php echo Html::img('@web/img/conference.jpg', ['class' => 'card-img-top img-fluid', 'style' => 'object-fit:cover; height:150px; width:100%']) ?>
    <div class="card-body pb-0 px-0">
        <div class="row col-12">
            <div class="col-3 my-auto mr-3 mx-auto">
                <p class="text-danger font-weight-bold text-center mb-0">Haz</p>
                <p class="font-weight-bold text-center">22</p>
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

<!--'style' => 'object-fit:cover; height:100%; width:200px'-->