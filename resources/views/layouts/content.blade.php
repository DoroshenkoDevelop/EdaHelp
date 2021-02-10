@section('content')
<main class="container border-right border-left border-dark">
    <main class="text-center">
        <h1 class="display-2 mt-5 text-comfortaa">
            Мир кулинарного искусства
        </h1>
        <p class="cuprum h4">
            Портал не только с классическими, но и с самыми интересными и оригинальными рецептами от шеф-поваров.
        </p>
        <p class="cuprum h5">
            На нашем сайте вы найдете огромное количество фоторецептов с пошаговым и детальным описанием процесса приготовления.
        <p/>
    </main>

    <main class="container">
        <div class="row mt-5">
            <div class="">
                <p class="cuprum h2">ПОПУЛЯРНЫЕ РЕЦЕПТЫ</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="text-decoration-none" href="" >
                    <img src="../image/Smyzi.jpg " class="img-fluid"><p class="cuprum text-dark"><b>Рулька в соусе BBQ</b></p>
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="text-decoration-none" href="">
                    <img src="../image/Smyzi.jpg " class="img-fluid"><p class="cuprum text-dark"><b>Рулька в соусе BBQ</b></p>
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="text-decoration-none" href="">
                    <img src="../image/Smyzi.jpg " class="img-fluid"><p class="cuprum text-dark"><b>Рулька в соусе BBQ</b></p>
                </a>
            </div>
        </div>
    </main>
    <main class="container">
        <div class="row">
            <div class="col">
                <p class="cuprum h2">ТОП ШЕФ РЕЦЕПТОВ</p>
                <div class="carousel slide" id="mySlider" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <img src="/image/trout_images/trout.JPG" class="img-fluid d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/image/shank_images/shank.jpg" class="img-fluid d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/image/shrimp_mousse/_71A5736.jpg" class="img-fluid d-block w-100">
                        </div>
                    </div>
                    <a href="#mySlider" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a href="#mySlider" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <main class="container">
        <div class="row">
            <div class="">
                <p class="cuprum h2">СЕЗОННЫЕ РЕЦЕПТЫ</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="text-decoration-none" href="">
                    <img src="../image/Smyzi.jpg " class="img-fluid"><p class="cuprum text-dark"><b>Рулька в соусе BBQ</b></p>
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="text-decoration-none" href="">
                    <img src="../image/Smyzi.jpg " class="img-fluid"><p class="cuprum text-dark"><b>Рулька в соусе BBQ</b></p>
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="text-decoration-none" href="">
                    <img src="../image/Smyzi.jpg " class="img-fluid">
                </a><p class="cuprum text-dark"><b>Рулька в соусе BBQ</b></p>

            </div>

        </div>
    </main>
    <main class="container">
        <div class="row">
            <article class="">
                <p class="cuprum h2">НОВЫЕ РЕЦЕПТЫ</p>
            </article>
            <article class="col-sm-12 col-md-3">
                <a class="text-decoration-none" href="reciept_page/mussels_page.html">
                    <img src="/image/mussels_images/unnamed.jpg" class="img-fluid card-img"><p class="cuprum text-dark"><b>Голубые мидии в прованском стиле</b></p></a>
                </a>

            </article>

            <article class="col-sm-12 col-md-3">
                <a class="text-decoration-none" href="">
                    <img src="/image/trout_images/trout.JPG" class="img-fluid card-img"><p class="cuprum text-dark"><b>Форель с гранолой и овощным рататуем</b></p></a>
                </a>
            </article>
            <article class="col-sm-12 col-md-3">
                <a class="text-decoration-none" href="">
                    <img src="/image/shank_images/shank.jpg" class="img-fluid card-img"><p class="cuprum text-dark"><b>Рулька в соусе BBQ</b></p></a>
                </a>
            </article>
            <article class="col-sm-12 col-md-3">
                <a class="text-decoration-none" href="">
                    <img src="/image/shank_images/shank.jpg" class="img-fluid card-img"><p class="cuprum text-dark"><b>Рулька в соусе BBQ</b></p></a>
                </a>
            </article>

        </div>
    </main>
</main>
@show
