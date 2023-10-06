@extends('template')
@section('page_title', 'Project List')

@section('page_content')

    <section class="body_card_project">

        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <h1 class="my-3 text-center display-5 fw-bolder text-white mb-4">
                    Project List
                </h1>
                {{-- <h3 class="text-center display-7 text-white mb-2">
                    To-Do List For Projects
                </h3> --}}
            </div>
        </div>

        <!-- Content -->
        {{-- <div class="container container_center px-5"> --}}

        <div class="justify-content-center">

            <!-- Title -->
            {{-- <h3 class="text-white text-center display-6 fw-bolder mb-2 animate__animated animate__zoomIn my-3">
                        Create Project
                    </h3> --}}

            <div class="py-3 bg-dark">
                <!-- Card -->
                <div class="card-border-0">
                    <!-- Cardhead -->
                    <div class="card-header mt-5 text-end">
                        {{-- <h3 class="text-white">Create New Project</h3> --}}
                        {{-- <p class="me-3 text-white">Create New List</p> --}}

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
                    <div class="card-body overflow-auto mb-2" style="width: 100%;">

                        <div class="form-body mb-3">
                            <div class="container">
                                <div class="form-holder">
                                    <div class="form-content">

                                        <div class="form-items">

                                            {{-- <h3 class="text-white">Create New Project</h3>
                                                <p class="text-white">Fill in the data below.</p> --}}

                                            <!-- Form -->
                                            {{-- <form class="requires-validation" novalidate> --}}
                                            <!-- Search -->
                                            <div class="row md-8 mb-3">

                                                <div class="input-group mb-3">

                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="key"
                                                            name="Search" placeholder="Search" aria-label="Search"
                                                            aria-describedby="button-addon2">
                                                        <label for="Search">Search</label>
                                                    </div>
                                                    <button class="btn btn-outline-danger" type="button" id="button-addon2"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        id="button-create">
                                                        <i class="fas fa-plus"></i>
                                                        Create
                                                    </button>

                                                    {{-- <div class="form-floating">
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="Search" id="Search" aria-label="Search" aria-describedby="basic-addon2">
                                                                <label for="Search">Search</label>
                                                            </div>

                                                                <div class="input-group-append">
                                                                  <button class="btn btn-outline-secondary" type="button">
                                                                    Button
                                                                    <i class="fas fa-plus"></i>
                                                                    </button>
                                                                </div> --}}

                                                </div>
                                                @includeIf('list.modal')

                                            </div>
                                            <!-- /Search -->

                                            {{-- </form> --}}
                                            <!-- /Form -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /Card -->

                {{-- Api From Js --}}
                <div class="container">
                    <div class="accordion row" id="accordionExample"> </div>
                </div>
                @includeIf('list.detail_project')
                {{-- Api From Js --}}


            </div>

        </div>

        </div>
        <!-- /Content -->

        <!-- List -->

    </section>

    <script>
        // event
        $("#key").on("keyup", function() {
            let key = $(this).val();
            console.log(key);
            $.ajax({
                type: "GET",
                url: "{{ route('project.data') }}",
                data: {
                    "key": key,
                },
                datatype: "json",

                success: function(response) {

                    // $('#container-list').html("");
                    // console.log(response)

                    let accordion_list = $('#accordionExample');
                    let template_accordion = ""

                    // if
                    if (response.length != 0) {
                        response.forEach(e => {
                            template_accordion +=

                                `

                            <!-- Table -->
                            <!-- Card -->
                            <!-- Loop Accordion -->
                                <!-- Accordion -->
                                <div class="col-lg-4">
                                        <div class="accordion mb-3" id="accordion${e.id_project}" style="max-width: 26rem;">

                                            <div class="accordion-item">

                                                <h2 class="accordion-header" id="heading${e.id_project}">
                                                    <button class="accordion-button collapsed ${ e.status == 0 ? 'bg-white' : 'bg-danger-subtle' }"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse${e.id_project}" aria-expanded="true"
                                                        aria-controls="collapse${e.id_project}">

                                                        <div class="row">
                                                            <div class="col-12 overflow-hidden">
                                                                <h5 class="card-title title_list">
                                                                    ${e.title}
                                                                </h5>
                                                                <div class="card-text d-block description_list">
                                                                    ${e.description}
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </button>
                                                </h2>

                                                <div id="collapse${e.id_project}" class="accordion-collapse collapse"
                                                    aria-labelledby="heading${e.id_project}"
                                                    data-bs-parent="#accordion${e.id_project}">

                                                    <div class="accordion-body bg-danger-subtle">
                                                        <ul class="list-group text-white">

                                                            <!-- Accordion Action -->
                                                            <li class="list-group-item">

                                                                <div class="row">

                                                                    <div class="col-9">
                                                                        Action
                                                                    </div>

                                                                    <div class="col-3 text-end ps-0">
                                                                        <div class="btn-group" role="group" aria-label="Basic example">

                                                                            <a href="#" class="btn btn-outline-success btn-sm"
                                                                                onclick="status(${e.id_project})">
                                                                                <i class="fas fa-check"></i>
                                                                            </a>

                                                                            <a href="#" class="btn btn-outline-warning btn-sm"
                                                                                data-bs-toggle="modal" data-bs-target="#task-project-modal"
                                                                                onclick="show(${e.id_project})">
                                                                                <i class="fas fa-repeat"></i>
                                                                            </a>

                                                                            <a href="#" class="btn btn-outline-danger btn-sm"
                                                                                onclick="remove(${e.id_project})">
                                                                                <i class="fas fa-xmark"></i>
                                                                            </a>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>

                                                            <!-- Accordion Items -->
                                                            <li class="list-group-item">
                                                                <input type="checkbox">
                                                                An item
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <!-- /Accordion -->
                            <!-- Loop Accordion -->
                            <!-- /Card-->
                            <!-- /Table -->

                            `

                        })

                        accordion_list.html(template_accordion);

                    } else if (response.length == 0) {

                        $('#accordionExample').html(
                            `
                            <div class="alert alert-danger text-center">
                                <h5>Not found</h5>
                            </div>
                        `);
                    } else {
                        // dataProject();
                    }
                }
            });
        });

        // accordion loop
        function dataProject() {
            // $.ajax('/api/test')


            $.ajax({
                type: "GET",
                url: "{{ route('project.data') }}",
                datatype: "json",

                success: function(response) {

                    // $('#container-list').html("");
                    // console.log(response)

                    let accordion_list = $('#accordionExample');
                    let template_accordion = ""

                    // if
                    if (response.length != 0) {
                        response.forEach(e => {
                            template_accordion +=

                                `

                            <!-- Table -->
                            <!-- Card -->
                            <!-- Loop Accordion -->
                                <!-- Accordion -->
                                <div class="col-lg-4">
                                        <div class="accordion mb-3" id="accordion${e.id_project}" style="max-width: 26rem;">

                                            <div class="accordion-item">

                                                <h2 class="accordion-header" id="heading${e.id_project}">
                                                    <button class="accordion-button collapsed ${ e.status == 0 ? 'bg-white' : 'bg-danger-subtle' }"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse${e.id_project}" aria-expanded="true"
                                                        aria-controls="collapse${e.id_project}">

                                                        <div class="row">
                                                            <div class="col-12 overflow-hidden">
                                                                <h5 class="card-title title_list">
                                                                    ${e.title}
                                                                </h5>
                                                                <div class="card-text d-block description_list">
                                                                    ${e.description}
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </button>
                                                </h2>

                                                <div id="collapse${e.id_project}" class="accordion-collapse collapse"
                                                    aria-labelledby="heading${e.id_project}"
                                                    data-bs-parent="#accordion${e.id_project}">

                                                    <div class="accordion-body bg-danger-subtle">
                                                        <ul class="list-group text-white">

                                                            <!-- Accordion Action -->
                                                            <li class="list-group-item">

                                                                <div class="row">

                                                                    <div class="col-9">
                                                                        Action
                                                                    </div>

                                                                    <div class="col-3 text-end ps-0">
                                                                        <div class="btn-group" role="group" aria-label="Basic example">

                                                                            <a href="#" class="btn btn-outline-success btn-sm"
                                                                                onclick="status(${e.id_project})">
                                                                                <i class="fas fa-check"></i>
                                                                            </a>

                                                                            <a href="#" class="btn btn-outline-warning btn-sm"
                                                                                data-bs-toggle="modal" data-bs-target="#task-project-modal"
                                                                                onclick="show(${e.id_project})">
                                                                                <i class="fas fa-repeat"></i>
                                                                            </a>

                                                                            <a href="#" class="btn btn-outline-danger btn-sm"
                                                                                onclick="remove(${e.id_project})">
                                                                                <i class="fas fa-xmark"></i>
                                                                            </a>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>

                                                            <!-- Accordion Items -->
                                                            <li class="list-group-item">
                                                                <input type="checkbox">
                                                                An item
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <!-- /Accordion -->
                            <!-- Loop Accordion -->
                            <!-- /Card-->
                            <!-- /Table -->

                            `

                        })

                        accordion_list.html(template_accordion);

                    }
                }
            });
        }

        dataProject()
        // accordion loop

        // detail project
        function dataDetail() {
            $.ajax({
                type: "GET",
                url: "{{ url('project') }}/" + id_project,
                dataType: "json",

                success: function(response) {
                    let project_list = $('#project-list-check');
                    let template_project_list = ""

                    if (response.detail_project.length > 0) {
                        response.forEach(e => {
                            template_project_list +=

                            `
                            <li class="list-group-item">
                                <div class="row">

                                    <div class="col-10">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="flexCheckDefault"
                                                value="${e.id_detail_project}" ${ e.status == 1 ? 'checked' : ''}
                                                onclick="statusList(${e.id_detail_project}, ${e.id_project})">

                                            <label for="flexCheckDefault" class="form-check-label">
                                                ${e.detail_project}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-2 text-end">
                                        <a href="#" class="text-decoration-none text-danger"
                                            onclick="removeDetail(${e.id_detail_project}, ${e.id_project})">
                                            <i class="fas fa-minus text-danger"></i>
                                        </a>
                                    </div>

                                </div>
                            </li>
                            `
                        });
                        project_list.html(template_project_list);
                    } else if (response.detail_project.length == 0) {
                        $('#project-list-check').html(`
                            <div class="alert alert-info text-center">
                                <h5>No List, yet</h5>
                            </div>
                        `);
                    }
                }
            })
        }

        // function dataDetail() {
        //     $.ajax({
        //         type: "GET",
        //         url: "{{ url('/project') }}/" + id_project,
        //         dataType: "json",

        //         success: function(response) {
        //             // let project_list_check = $('#project-list-check');
        //             // let template_project_list_check = ""

        //             $('#project-list-check').html("")
        //             if (response.detail_project.length != 0) {
        //                 // response.forEach(e => {
        //                     let s = e.status == 1 ? 'checked' : '';
        //                     // template_project_list_check +=
        //                     $.each(response,detail_project, function(key, e)) {

        //                     $('project-list-check').append(`

    //                     <li class="list-group-item">
    //                         <div class="row">

    //                             <div class="col-10">
    //                                 <div class="form-check">
    //                                     <input type="checkbox" class="form-check-input"
    //                                         value="${e.id_detail_project}" ${s} id="flexCheckDefault"
    //                                         onclick="statusList(${e.id_detail_project}, ${e.id_project})">

    //                                     <label for="flexCheckDefault" class="form-check-label">
    //                                         ${e.detail_project}
    //                                     </label>
    //                                 </div>
    //                             </div>

    //                             <div class="col-2 text-end">
    //                                 <a href="#" class="text-decoration-none text-danger"
    //                                     onclick="removeDetail(${e.id_detail_project}, ${e.id_project})">
    //                                     <i class="fas fa-minus text-danger"></i>
    //                                 </a>
    //                             </div>

    //                         </div>
    //                         </li>

    //                     `);
        //                     }
        //                 })
        //             } else {
        //                 $('#project-list-check').html(`
    //                     <div class="alert alert-info text-center">
    //                         <h5> No List, yet </h5>
    //                     </div>
    //                 `);
        //             }
        //             // project_list_check.html(template_project_list_check)
        //         }
        //     });
        // }

        // detail project

        // create
        function create() {
            $('#create').removeAttr('onclick');

            let title = $('#title').val();
            let description = $('#description').val();

            var data = {
                'title': title,
                'description': description,
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('project.store') }}",
                data: data,
                dataType: "json",

                success: function(response) {
                    // validation
                    if (response.status == 200) {
                        $('#title').val("");
                        $('#description').val("");

                        $('.modal').removeClass('show');
                        $(".modal").css('display', 'none');
                        $('.modal-backdrop').remove();

                        $('body').removeAttr('class');
                        $('body').removeAttr('style');
                        $('#create').attr('onclick', 'create()');

                        dataProject();
                    }
                }
            });
        }
        // create

        // status checklist
        function status(id_project) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "{{ url('/project/status') }}/" + id_project,
                dataType: "json",

                success: function(response) {
                    // validation
                    if (response.status == 200) {
                        console.log('Success');
                        dataProject();
                    }
                }
            });
        }
        // status checklist

        // delete
        function remove(id_project) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "{{ url('/project') }}/" + id_project,
                dataType: "json",

                success: function(response) {
                    // validation
                    if (response.status == 200) {
                        dataProject();
                    }
                }
            });
        }
        // delete

        // show edit
        function show(id_project) {
            $.ajax({
                type: "GET",
                url: "{{ url('/project') }}/" + id_project,
                dataType: "json",

                success: function(response) {
                    console.log(response.detail_project.length)

                    $('#id_project').val(response.id_project)
                    $('#detail-title').val(response.title)
                    $('#detail-description').val(response.description)

                    if (response.detail_project.length > 0) {
                        dataProject(response.id_project)
                    } else if (response.detail_project.length == 0) {
                        $('#project-list-check').html(`
                            <div class="alert alert-info text-center">
                                <h5>No List, yeta</h5>
                            </div>
                        `);
                    }
                }
            });
        }
        // show edit

        // edit
        function modify() {
            $('#click-to-save').removeAttr('onclick');

            let id_project = $('#id_project').val();
            let title = $('#detail-title').val();
            let description = $('#detail-description').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "{{ url('/project') }}/" + id_project,
                data: {
                    "title": title,
                    "description": description
                },
                dataType: "json",

                success: function(response) {
                    // validation
                    if (response.status == 200) {
                        $('.modal').removeClass('show');
                        $(".modal").css('display', 'none');
                        $('.modal-backdrop').remove();

                        $('body').removeAttr('class');
                        $('body').removeAttr('style');
                        $('#click-to-save').attr('onclick', 'modify()');

                        dataProject();
                    }
                }
            });
        }
        // edit

        // function show(id_project) {
        //     $.ajax({
        //         type: "GET",
        //         url: "{{ url('/project') }}/" + id_project,
        //         dataType: "json",

        //          success: function(response) {
        //             $('#id-project').val(response.id_project)
        //             $('#detail-title').val(response.title)
        //             $('#detail-description').val(response.description)
        //         }
        //     });
        // }

        // function modify() {
        //     $('#save-mod').removeAttr('onclick');

        //     let id_project = $('#id_project').val();
        //     let title = $('#detail-title').val();
        //     let description = $('#detail-description').val();

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         type: "PUT",
        //         url: "{{ url('/project') }}/" + id_project,
        //         data: {
        //             "title": title,
        //             "description": description
        //         },
        //         dataType: "json",

        //         success: function(response) {
        //             // validation
        //             if (response.status == 200) {
        //                 $('.modal').removeClass('show');
        //                 $(".modal").css('display', 'none');
        //                 $('.modal-backdrop').remove();

        //                 $('body').removeAttr('class');
        //                 $('body').removeAttr('style');
        //                 $('#save-mod').attr('onclick', 'modify()');

        //                 dataProject();
        //             }
        //         }
        //     });
        // }
    </script>

@endsection
