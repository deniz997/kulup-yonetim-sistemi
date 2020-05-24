<?php use yii\helpers\Html;

$img_exist = false;
?>


<div class="d-flex mt-4 ml-5">
    <div class="card container-fluid ml-5 p-0 bg-gradient-dark mt-2 mb-n4 rounded-left border-0">
        <?php if ($img_exist) {
            echo Html::img('@web/img/conference.jpg', ['class' => 'card-img img-fluid rounded shadow-lg', 'style' => "opacity:40%; object-fit:cover; height:300px; width:100%"]);
        } else {
            echo Html::tag('div', '', ['class' => 'card-img shadow-lg', 'style' => 'object-fit:cover; height:100px; width:100%']);
        } ?>
        <div class="card-img-overlay d-flex flex-column py-0 justify-content-end">
            <h1 class="card-title font-weight-bold text-white <?php if (!$img_exist) {
                echo 'my-auto';
            } ?>">Vodafone Gezisi</h1>
        </div>
    </div>
</div>
<div class="d-block ml-4">
    <div class="d-flex bg-danger rounded-left ml-5 mt-n5 shadow-lg" style="height: 100px"></div>
</div>
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="card col-md-8">
            <div class="card-body row">
                <div class="col-7">
                    <h2 class="card-subtitle text-secondary mt-2">Etkinlik içeriği</h2>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dolor dolor,
                        dignissim
                        at
                        gravida in, faucibus id dui. Vestibulum eget leo ante. Morbi id urna turpis. Mauris in accumsan
                        magna.
                        Etiam
                        ultricies nibh sit amet enim varius, at finibus risus molestie. Donec in libero velit. Etiam ut
                        congue
                        leo.

                        Praesent mollis gravida lacinia. Donec urna velit, gravida in est et, tempor accumsan libero.
                        Donec
                        vel
                        dui
                        purus. Nunc laoreet mollis nisi non laoreet. Vestibulum ante ipsum primis in faucibus orci
                        luctus et
                        ultrices
                        posuere cubilia curae; Donec varius, justo vel placerat tristique, odio tellus molestie purus,
                        sed
                        vestibulum
                        erat dolor et massa. Integer egestas, ipsum sed condimentum porta, lectus nisl tristique sem,
                        nec
                        interdum massa
                        nisi quis nulla.</p>
                </div>
                <div class="col-5">
                    <h2 class="card-subtitle text-secondary mt-2">Katılımcılar</h2>
                    <hr>
                    <ul class="list-unstyled">
                        <li><h5><i class="fas fa-user-tie mr-3"></i>Deniz Mert Tecimer</h5></li>
                        <li><h5><i class="fas fa-user-tie mr-3"></i>Deniz Mert Tecimer</h5></li>
                        <li><h5><i class="fas fa-user-tie mr-3"></i>Deniz Mert Tecimer</h5></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 ml-md-auto mt-md-n5">
            <div class="card mb-2 mt-md-n5 order-0 bg-gray-100 mx-auto shadow-lg">
                <div class="card-body row justify-content-center">
                    <h1 class="text-dark font-weight-bold my-auto">22</h1>
                    <div class=" ml-1 my-auto">
                        <p class=" text-danger font-weight-bold my-auto" style="line-height: 90%;">Haz</p>
                        <p class="text-dark font-weight-bold my-auto" style="line-height: 90%;">2020</p>
                    </div>
                    <div class="container">
                        <hr class="my-2 mx-4">
                        <h2 class="text-dark font-weight-bold my-auto text-center">16:00</h2>
                    </div>
                </div>
            </div>
            <div class="card my-3 shadow-lg">
                <div class="card-body">
                    <p class="card-subtitle text-center text-dark font-weight-normal mb-0">Etkinlik yeri
                    <hr class="mx-3 my-2">
                    </p>
                    <h4 class="text-center text-dark font-weight-bold mt-0">YDYO Konferans Salonu</h4>
                </div>
            </div>

            <div class="card border-0 mt-3 shadow-lg">
                <a class="card-body stretched-link rounded bg-success text-white text-decoration-none" href="">
                    <div class="my-auto text-center">Etkinliğe katıl</div>
                </a>
            </div>

        </div>
    </div>
</div>