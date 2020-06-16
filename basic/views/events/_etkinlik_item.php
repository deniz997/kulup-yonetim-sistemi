<?php use yii\helpers\Html;

/* @var $model app\models\Etkinlik */
$img_exist = $model->getEtkinlikFotos()->one() != null;
//ListView'daki her bir item'in nasıl görüneceğidir.

?>
<div class="card mx-md-3 mx-0 p-0">
    <?php
    //Etkinliğin resmi varsa bu kısım
    if ($img_exist) {
        echo Html::img('@web' . $model->getEtkinlikFotos()->one()->foto_url, ['class' => 'card-img-top img-fluid', 'style' => 'object-fit:cover; height:150px; width:100%']);
        echo '<div class="card-img-overlay d-flex justify-content-end py-3 px-3">
             <!-- Etkinlik etiketleri static olarak ekleniyor, TODO: dinamik olmalılar-->
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
        //Etkinliğin resmi yoksa bu kısım
        echo '<i class="far fa-calendar-alt bg-secondary fa-7x card-img-top text-center pt-3 text-white" style="opacity:25%;height: 150px; width: 100%"></i>';
        echo '<div class="card-img-overlay d-flex justify-content-end py-3 px-3">
             <!-- Etkinlik etiketleri static olarak ekleniyor, TODO: dinamik olmalılar-->
            <small>
                <div class="rounded px-2 py-1 mx-1" style=" background-color: #d79228;"><p class="my-0 text-white">
                        Konferans</p></div>
            </small>
            <small>
                <div class="rounded bg-danger px-2 py-1 mx-1"><p class="my-0 text-white">
                        Teknik Gezi</p></div>
            </small>

        </div>';
    } ?>

    <div class="card-body py-auto px-0">
        <div class="row col-12 h-100">
            <div class="col-4 mr-3 my-auto mx-auto">
                <!--                TODO: Tarih ve saatin bağlanması lazım, tasarım bozulmadan!!!
                                    TODO: Ayların gösterimi Array olarak kaydedilmeli karşılaştırma ile alınmalı-->
                <h5 class="text-danger font-weight-bold text-center mb-0">Haz</h5>
                <h5 class="font-weight-bold text-center">22</h5>
            </div>
            <div class="col-8 my-auto">
                <p class="card-text font-weight-bold mb-2"><?php echo $model->adi ?></p>
                <small>
                    <ul class="list-unstyled mb-0">
                        <?php
                        //Eğer etkinliğin katılımcısı varsa, teker teker ekle
                        if ($model->getKatilimciEtkinliks()->one() != null) {
                            echo '<li class="row"><i class="fas fa-user-friends mt-1 mr-2"></i>
                            <ul class="list-unstyled">';
                            foreach ($model->getKatilimciEtkinliks()->orderBy('id')->all() as $katilimci) {
                                echo '<li>' . $katilimci->katilimci_isim . '</li>';
                            }
                            echo '</ul>
                        </li>';
                        } ?>

                        <li class="row"><i class="fas fa-map-marked-alt mr-2"></i>
                            <p class="p-0 mb-0 col-10"><?php echo $model->ortam ?></p></li>
                    </ul>
                </small>
            </div>
        </div>
    </div>
    <div class="card-footer p-0 bg-white">
        <small class="my-auto">
            <div class="row ml-3 my-2">
                <!--                TODO: Kulüp profiline link gelecek, etkinliği gör stretched-link engelliyor.-->
                <div class="col-2 my-auto">
                    <!--                    Her kulübün logosu olmak zorunda, yoksa default bir şey gelecek-->
                    <?php echo Html::img('@web/' . $model->getKulup()->logo, ['class' => 'rounded-circle my-auto img-fluid']) ?>
                </div>

                <p class="text-left p-0 my-auto"><?php echo $model->getKulup()->name ?></p>
            </div>
        </small>
        <a class="stretched-link text-decoration-none" href="/events/event?id=<?php echo $model->id ?>">
            <div class="card-footer bg-secondary">
                <p class="card-text text-white d-flex">
                    <small>Etkinliği gör</small>
                    <i class="fas fa-arrow-right my-auto ml-auto"></i></p>
            </div>
        </a>

    </div>
</div>
