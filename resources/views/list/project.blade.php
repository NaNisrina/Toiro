@extends('template')
@section('page_title', 'Project List')

@section('page_content')

    <section class="bg-dark">

        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <h1 class="my-5 text-center display-5 fw-bolder text-white mb-2">
                    Project List
                </h1>
                <h3 class="text-center display-7 text-white mb-2">
                    To-Do List For Projects
                </h3>
            </div>
        </div>

        <!-- Content -->
        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <!-- Title -->
                {{-- <h3 class="text-white text-center display-6 fw-bolder mb-2 animate__animated animate__zoomIn my-3">
                        Create Project
                    </h3> --}}

                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card-border-0">
                        <!-- Cardhead -->
                        <div class="card-header text-center">
                            <p class="text-white">
                                Go to other list:
                            </p>
                            <a href="{{ route('today.index') }}" class="btn btn-outline-light mx-2">
                                Today
                            </a>
                            <a href="{{ route('yesterday.index') }}" class="btn btn-outline-light mx-2">
                                Yesterday
                            </a>
                        </div>

                        <!-- Cardbody -->
                        <div class="card-body overflow-auto my-3" style="width: 100%;" align="center">

                            <div class="form-body my-3">
                                <div class="container">
                                    <div class="form-holder">
                                        <div class="form-content">

                                            <div class="form-items">

                                                <h3 class="text-white">Create New Project</h3>
                                                <p class="text-white">Fill in the data below.</p>

                                                <form class="requires-validation" novalidate>

                                                    <div class="col-md-12" style="width: 22rem;">
                                                        <div class="input-group mb-5">

                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="New to-do list name" required>

                                                            <button href="" class="btn btn-light">
                                                                <i class="fas fa-plus"></i>
                                                            </button>

                                                            <div class="valid-feedback">Name field is valid!</div>
                                                            <div class="invalid-feedback">Name field cannot be blank!
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- /Content -->

        <!-- List -->
        

    </section>

@endsection
