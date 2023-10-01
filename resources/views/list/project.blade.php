@extends('template')
@section('page_title', 'Project List')

@section('page_content')

    <section class="bg-dark">

        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <h1 class="my-5 text-center display-5 fw-bolder text-white mb-4">
                    Project List
                </h1>
                {{-- <h3 class="text-center display-7 text-white mb-2">
                    To-Do List For Projects
                </h3> --}}
            </div>
        </div>

        <!-- Content -->
        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <!-- Title -->
                {{-- <h3 class="text-white text-center display-6 fw-bolder mb-2 animate__animated animate__zoomIn my-3">
                        Create Project
                    </h3> --}}

                <div class="col-lg-12 body_card_project">
                    <!-- Card -->
                    <div class="card-border-0">
                        <!-- Cardhead -->
                        <div class="card-header text-center mt-5">
                            <h3 class="text-white">Create New Project</h3>
                            <p class="text-white">Fill in the data below.</p>

                            {{-- <p class="text-white display-7">
                                Other list:
                            </p> --}}
                            {{-- <a href="{{ route('home') }}" class="btn btn-outline-light mx-2">
                                Home
                            </a>
                            <a href="{{ route('today.index') }}" class="btn btn-outline-light mx-2">
                                Today
                            </a> --}}
                        </div>

                        <!-- Cardbody -->
                        <div class="card-body overflow-auto mb-5" style="width: 100%;" align="center">

                            <div class="form-body my-3">
                                <div class="container">
                                    <div class="form-holder">
                                        <div class="form-content">

                                            <div class="form-items">

                                                {{-- <h3 class="text-white">Create New Project</h3>
                                                <p class="text-white">Fill in the data below.</p> --}}

                                                <!-- Form -->
                                                <form class="requires-validation" novalidate>

                                                    <div class="row md-8" style="width: 22rem;">

                                                        <div class="input-group mb-3">

                                                            <div class="form-floating">
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="New to-do" id="New-todo" required>
                                                                <label for="New-todo">New To-Do</label>
                                                            </div>

                                                            <button class="btn btn-light">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                            {{-- <span class="input-group-text">
                                                            </span> --}}

                                                        </div>

                                                        <div class="input-group mb-3">

                                                            <div class="form-floating">
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="Search" id="Search" required>
                                                                <label for="Searh">Search</label>
                                                            </div>

                                                            <button class="btn btn-light">
                                                                <i class="fas fa-plus"></i>
                                                            </button>

                                                        </div>

                                                    </div>

                                                </form>
                                                <!-- /Form -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- /Card -->

                    <!-- Table -->

                    <!-- /Table -->

                </div>

            </div>

        </div>
        <!-- /Content -->

        <!-- List -->


    </section>

@endsection
