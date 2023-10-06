<!-- Detail -->
<div class="modal fade" id="task-project-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content body_card_project text-white">

            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Create List</h5>
                <button type="button" class="btn-light-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body bg-dark text-white">

                <input type="hidden" name="id_project" id="id_project">

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="detail-title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="detail-description" rows="3">
                    </textarea>
                </div>

                <label for="list_project" class="form-label">Add List</label>

                <div class="row mb-3">

                    <div class="col-8 text-end">
                        <label for="project_list" class="visually-hidden">Add List</label>
                        <input type="text" class="form-control" id="project_list" placeholder="Add List">
                    </div>

                    <div class="col-4 text-end">
                        <button type="button" class="btn btn-warning">Add List</button>
                    </div>

                </div>

                <label for="list_project" class="form-label">List Project</label>

                <ul class="list-group" id="project-list-check">

                    <li class="list-group-item">

                        <div class="row">

                            <div class="col-10">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">

                                    <label for="flexCheckDefault" class="form-check-label">
                                        Outside The Door
                                    </label>
                                </div>
                            </div>

                            <div class="col-2 text-end">
                                <a href="#" class="text-decoration-none text-danger">
                                    <i class="fas fa-minus text-danger"></i>
                                </a>
                            </div>

                        </div>

                    </li>

                </ul>

                <div class="text-end mt-4 mb-1">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="click-to-save" onclick="modify()">Save</button>
                </div>

            </div>


        </div>
    </div>
</div>
<!-- /Detail -->
