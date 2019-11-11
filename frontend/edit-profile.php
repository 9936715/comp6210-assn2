<?php
$title = "Edit Profile";
include_once('layout/header.php');
?>
        <div class="row">
            <div class="col-lg-9">
                <h2>Edit Profile</h2>
                <form>
                    <div class="form-group row">
                        <label for="name" class="col-md-3  col-form-label">Name</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pic" class="col-md-3  col-form-label">Picture</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="pic" name="pic">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="github" class="col-md-3  col-form-label">GitHub</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="github" name="github">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facebook" class="col-md-3  col-form-label">Facebook</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="facebook" name="facebook">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="linkedin" class="col-md-3  col-form-label">LinkedIn</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="linkedin" name="linkedin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="twitter" class="col-md-3  col-form-label">Twitter</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="twitter" name="twitter">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="youtube" class="col-md-3  col-form-label">YouTube</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="youtube" name="youtube">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article1" class="col-md-3  col-form-label">Article 1</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="article1" name="article1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article2" class="col-md-3  col-form-label">Article 2</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="article2" name="article2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article3" class="col-md-3  col-form-label">Article 3</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="article3" name="article3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article4" class="col-md-3  col-form-label">Article 4</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="article4" name="article4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article5" class="col-md-3  col-form-label">Article 5</label>
                        <div class="col-md-9 ">
                            <input type="text" class="form-control" id="article5" name="article5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3 "></div>
                        <div class="col-md-9 ">
                            <button type="submit" class="btn btn-primary" name="saveProfile">Save Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        include_once ('layout/footer.php');
        ?>