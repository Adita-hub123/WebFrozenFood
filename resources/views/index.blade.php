@include ('templates.partials.header')  
<header class="masthead">
            <div class="container col-md-9 col-sm-12 content align-items-center justify-content-center text-center">
                <div class="align-items-center justify-content-center text-center">
                <div id="carouselExampleCaptions" class="carousel slide align-items-center" data-bs-ride="carousel">
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/vendor/food/food1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/vendor/food/food2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/vendor/food/food3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>    
                <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Frozen Food</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Frozen food adalah olahan makanan yang diolah setengah matang dengan dikemas dan dibekukan untuk diolah kembali dengan cara dipanaskan, digoreng dan dikukus.</p>
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <hr>
        <hr>
@include('templates.master')

@include ('templates.partials.footer')