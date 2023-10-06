{{-- <!-- js -->
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed ${ e.status == 0 ? 'bg-white' : 'bg-danger-subtle' }" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${e.id_project}" aria-expanded="true" aria-controls="collapse${e.id_project}">
        <h6> ${e.title} </h6>
        <p> ${e.description} </p>
      </button>
    </h2>
    <div id="collapse${e.id_project}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body bg-danger-subtle">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div> --}}

<!-- Table -->
{{-- <div class="container">
                    <!-- Card -->
                    <div class="list" id="container-list">
                        <!-- Loop Accordion -->
                        <div class="row">

                            @foreach ($project_data as $item)
                                <!-- Accordion -->
                                <div class="col-lg-4">
                                    <div class="accordion mb-3" id="accordion{{ $item->id_project }}"
                                        style="max-width: 26rem;">

                                        <div class="accordion-item">

                                            <h2 class="accordion-header" id="heading{{ $item->id_project }}">
                                                <button class="accordion-button collapsed bg-danger-subtle" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $item->id_project }}" aria-expanded="true"
                                                    aria-controls="collapse{{ $item->id_project }}">

                                                    <div class="row">
                                                        <div class="col-12 overflow-hidden">
                                                            <h5 class="card-title">{{ $item->title }}</h5>
                                                            <div class="card-text d-block description_list">
                                                                {{ $item->description }}
                                                            </div>
                                                        </div>

                                                    </div>

                                                </button>
                                            </h2>

                                            <div id="collapse{{ $item->id_project }}" class="accordion-collapse collapse"
                                                aria-labelledby="heading{{ $item->id_project }}"
                                                data-bs-parent="#accordion{{ $item->id_project }}">

                                                <div class="accordion-body bg-danger-subtle">
                                                    <ul class="list-group text-white">

                                                        <!-- Accordion Action -->
                                                        <li class="list-group-item">

                                                            <div class="row">

                                                                <div class="col-9">
                                                                    Action
                                                                </div>

                                                                <div class="col-3 text-end ps-0">
                                                                    <div class="btn-group" role="group"
                                                                        aria-label="Basic example">
                                                                        <button type="button"
                                                                            class="btn btn-outline-success btn-sm">
                                                                            <i class="fas fa-check"></i>
                                                                        </button>

                                                                        <button type="button"
                                                                            class="btn btn-outline-warning btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#task-project-modal">
                                                                            <i class="fas fa-repeat"></i>
                                                                        </button>

                                                                        <button type="button"
                                                                            class="btn btn-outline-danger btn-sm">
                                                                            <i class="fas fa-xmark"></i>
                                                                        </button>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </li>
                                                        @includeIf('list.detail_project')

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
                            @endforeach

                        </div>
                        <!-- Loop Accordion -->

                    </div> --}}
<!-- /Table -->

{{-- <input type="checkbox" class="btn-check" id="btn-check-2-outlined"
                                        autocomplete="off">
                                    <label class="btn btn-outline-success btn-sm px-2 py-0 me-2" for="btn-check-2-outlined">
                                        <i class="fas fa-check fa-xs"></i>
                                    </label> --}}
