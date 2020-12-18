<div id="modal-user-settings" class="modal">
    <!-- Modal Dialog -->
    <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Profile Settings</h4>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Content -->
            <div class="modal-body">
                <!-- Tab links -->
                <ul id="example-user-tabs" class="nav nav-tabs" data-toggle="tabs">
                    <li class="active"><a href="#example-user-tabs-account"><i class="fa fa-cogs"></i> Account</a></li>
                    <li><a href="#example-user-tabs-profile"><i class="fa fa-user"></i> Profile</a></li>
                </ul>
                <!-- END Tab links -->

                <!-- END Tab Content -->
                <div class="tab-content">
                    <!-- First Tab -->
                    <div class="tab-pane active" id="example-user-tabs-account">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> Password changed!
                        </div>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Username</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">administrator</p>
                                    <span class="help-block">You can't change your username!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-pass">Password</label>
                                <div class="col-md-9">
                                    <input type="password" id="example-user-pass" name="example-user-pass" class="form-control">
                                    <span class="help-block">if you want to change your password enter your current for confirmation!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-newpass">New Password</label>
                                <div class="col-md-9">
                                    <input type="password" id="example-user-newpass" name="example-user-newpass" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END First Tab -->

                    <!-- Second Tab -->
                    <div class="tab-pane" id="example-user-tabs-profile">
                        <h4 class="page-header-sub">Image</h4>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <img src="{{asset('img/placeholders/image_dark_120x120.png')}}" alt="image" class="img-responsive push">
                                </div>
                                <div class="col-md-9">
                                    <form action="index.html" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal">
                            <h4 class="page-header-sub">Details</h4>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-firstname">Firstname</label>
                                <div class="col-md-9">
                                    <input type="text" id="example-user-firstname" name="example-user-firstname" class="form-control" value="John">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-lastname">Lastname</label>
                                <div class="col-md-9">
                                    <input type="text" id="example-user-lastname" name="example-user-lastname" class="form-control" value="Doe">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-gender">Gender</label>
                                <div class="col-md-9">
                                    <select id="example-user-gender" name="example-user-gender" class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-bio">Bio</label>
                                <div class="col-md-9">
                                    <textarea id="example-user-bio" name="example-user-bio" class="form-control textarea-elastic" rows="3">Bio Information..</textarea>
                                </div>
                            </div>
                            <h5 class="page-header-sub">Social</h5>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-fb">Facebook</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="example-user-fb" name="example-user-fb" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-facebook fa-fw"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-twitter">Twitter</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="example-user-twitter" name="example-user-twitter" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-twitter fa-fw"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-pinterest">Pinterest</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="example-user-pinterest" name="example-user-pinterest" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-pinterest fa-fw"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-github">Github</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="example-user-github" name="example-user-github" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-github fa-fw"></i></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Second Tab -->
                </div>
                <!-- END Tab Content -->
            </div>
            <!-- END Modal Content -->

            <!-- Modal footer -->
            <div class="modal-footer remove-margin">
                <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button class="btn btn-success"><i class="fa fa-spinner fa-spin"></i> Save changes</button>
            </div>
            <!-- END Modal footer -->
        </div>
        <!-- END Modal Content -->
    </div>
    <!-- END Modal Dialog -->
</div>
