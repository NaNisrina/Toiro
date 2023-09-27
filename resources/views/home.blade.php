@extends('template')
@section('page_title', 'Home')

@section('page_content')

    <!-- Content -->
    <section class="bg-dark">
        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <h1 class="my-5 text-center display-5 fw-bolder text-white mb-2">
                    Toiro
                </h1>
                <h3 class="text-center display-7 text-white mb-2">
                    To-Do List Of Tomorrow
                </h3>

            </div>

            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">

                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">

                            <h1 class="display-5 fw-bolder text-white mb-2">
                                Project
                            </h1>
                            <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize
                                responsive mobile-first
                                sites with Bootstrap, the world's most popular front-end open source
                                toolkit!</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-success btn-lg px-4 me-sm-3" href="/">Get
                                    Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="/">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                        <img class="img-fluid rounded-3 my-5" src="/img/loving.jpg" alt="..." />
                    </div>
                </div>
            </div>

            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                        <img class="img-fluid rounded-3 my-5" src="/img/hating.jpg" alt="..." />
                    </div>
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Today</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize
                                responsive mobile-first
                                sites with Bootstrap, the world's most popular front-end open source
                                toolkit!</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-success btn-lg px-4 me-sm-3" href="/">Get
                                    Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="/">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Yesterday</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize
                                responsive mobile-first
                                sites with Bootstrap, the world's most popular front-end open source
                                toolkit!</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-success btn-lg px-4 me-sm-3" href="/">Get
                                    Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="/">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                        <img class="img-fluid rounded-3 my-5" src="/img/making.jpg" alt="..." />
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
