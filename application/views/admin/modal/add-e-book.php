<div class="modal fade" id="AddEbookModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="javascript:void(0);" method="POST" id="add_e_book_form" name="add_e_book_form"
                enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
            <div class="modal-header">
                <h5 class="modal-title">Add E-book</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">E-book Title</label>
                            <input type="text" class="form-control" id="book_title" name="book_title" placeholder="E-book Title">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Author Name</label>
                            <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Author Name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description"  placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Languages</label>
                            <select class="form-select js-select2" id="languages" name="languages" multiple="multiple" data-placeholder="Select Multiple options">
                                <option value="default_option">Default Option</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                                <option value="option_select_name">Option select name</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Institution</label>
                            <div class="form-control-select">
                                <select class="form-control" id="institutions" name="institutions" >
                                    <option value="default_option">Choose options</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Course</label>
                            <div class="form-control-select">
                                <select class="form-control" id="courses" name="courses" >
                                    <option value="default_option">Choose options</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <div class="form-control-select">
                                <select class="form-control" id="categories" name="categories">
                                    <option value="default_option">Choose options</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Course</label>
                            <div class="form-control-select">
                                <select class="form-control" id="subjects" name="subjects" >
                                    <option value="default_option">Choose options</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Download URL</label>
                            <input type="text" class="form-control" id="" placeholder="https://" id="download_url" name="download_url">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">E-book Photo <span class="text-soft"><em class="icon ni ni-info"></em></span></label>
                            <div class="form-file">
                                <input type="file" multiple class="form-file-input" id="book_image" name="book_image">
                                <label class="form-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Scheduling options</label>
                            <ul class="custom-control-group g-3 align-center">
                                <li>
                                    <div class="custom-control custom-control-sm custom-radio">
                                        <input type="radio" id="publish_radio" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="publish_radio">Publish Now</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-control-sm custom-radio">
                                        <input type="radio" id="draft_radio" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="draft_radio">Save as Draft</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_add_e_book">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="<?=base_url(); ?>src/admin/modal/add-e-book.modal.js"></script>
<script src="<?=base_url(); ?>src/javascript/institutions.js"></script>
<script src="<?=base_url(); ?>src/javascript/courses.js"></script>
<script src="<?=base_url(); ?>src/javascript/categories.js"></script>
<script src="<?=base_url(); ?>src/javascript/subjects.js"></script>