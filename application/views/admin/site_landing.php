<?= getBredcrum(ADMIN, array('#' => 'Landing Page')); ?>

<?= showMsg(); ?>

<div class="row margin-bottom-10">

    <div class="col-md-6">

        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Landing Page</strong></h2>

    </div>

    <div class="col-md-6 text-right">

        <!--        <a href="<?= base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->

    </div>

</div>

<div>

    <hr>

    <div class="clearfix"></div>

    <div class="panel-body">

        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">

            <h3> Main Banner </h3>

            <div class="form-group">

                <div class="row">

                    <div class="col-md-12">

                        <div class="panel panel-primary" data-collapsed="0">

                            <div class="panel-heading">

                                <div class="panel-title">

                                    Left Right Effect Image

                                </div>

                                <div class="panel-options">

                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">

                                        <img src="<?= !empty($row['image1']) ? getImageSrc(UPLOAD_PATH."images/", $row['image1']) : 'http://placehold.it/1000x1000' ?>" alt="--">

                                    </div>

                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>

                                    <div>

                                        <span class="btn btn-white btn-file">

                                            <span class="fileinput-new">Select image</span>

                                            <span class="fileinput-exists">Change</span>

                                            <input type="file" name="image1" accept="image/*" <?php if(empty($row['image1'])){echo 'required=""';}?>>

                                        </span>

                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="panel panel-primary" data-collapsed="0">

                            <div class="panel-heading">

                                <div class="panel-title">

                                    Left Botton Blur Image

                                </div>

                                <div class="panel-options">

                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">

                                        <img src="<?= !empty($row['image2']) ? getImageSrc(UPLOAD_PATH."images/", $row['image2']) : 'http://placehold.it/1000x1000' ?>" alt="--">

                                    </div>

                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>

                                    <div>

                                        <span class="btn btn-white btn-file">

                                            <span class="fileinput-new">Select image</span>

                                            <span class="fileinput-exists">Change</span>

                                            <input type="file" name="image2" accept="image/*" <?php if(empty($row['image2'])){echo 'required=""';}?>>

                                        </span>

                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="panel panel-primary" data-collapsed="0">

                            <div class="panel-heading">

                                <div class="panel-title">

                                    Right Banner Image

                                </div>

                                <div class="panel-options">

                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">

                                        <img src="<?= !empty($row['image3']) ? getImageSrc(UPLOAD_PATH."images/", $row['image3']) : 'http://placehold.it/1000x1000' ?>" alt="--">

                                    </div>

                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>

                                    <div>

                                        <span class="btn btn-white btn-file">

                                            <span class="fileinput-new">Select image</span>

                                            <span class="fileinput-exists">Change</span>

                                            <input type="file" name="image3" accept="image/*" <?php if(empty($row['image3'])){echo 'required=""';}?>>

                                        </span>

                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="form-group">

                            <div class="col-md-6">

                                <label for="banner_heading" class="control-label"> Heading <span class="symbol required">*</span></label>

                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" >

                            </div>

                            <div class="col-md-6">

                                <label for="banner_heading_colored" class="control-label"> Colored Heading <span class="symbol required">*</span></label>

                                <input type="text" name="banner_heading_colored" id="banner_heading_colored" value="<?= $row['banner_heading_colored'] ?>" class="form-control" >

                            </div>

                            <div class="col-md-3">

                                <label for="left_btn_heading" class="control-label"> Left Button Heading <span class="symbol required">*</span></label>

                                <input type="text" name="left_btn_heading" id="left_btn_heading" value="<?= $row['left_btn_heading'] ?>" class="form-control" >

                            </div>

                            <div class="col-md-3">

                                <label for="left_btn_link" class="control-label"> Left Button Link <span class="symbol required">*</span></label>

                                <input type="text" name="left_btn_link" id="left_btn_link" value="<?= $row['left_btn_link'] ?>" class="form-control" >

                            </div>

                            <div class="col-md-3">

                                <label for="right_btn_heading" class="control-label"> Right Button Heading <span class="symbol required">*</span></label>

                                <input type="text" name="right_btn_heading" id="right_btn_heading" value="<?= $row['right_btn_heading'] ?>" class="form-control" >

                            </div>

                            <div class="col-md-3">

                                <label for="right_btn_link" class="control-label"> Right Button Link <span class="symbol required">*</span></label>

                                <input type="text" name="right_btn_link" id="right_btn_link" value="<?= $row['right_btn_link'] ?>" class="form-control" >

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <h3> Section 2 (Welcome)</h3>

            <div class="form-group">

                <div class="row">

                    <div class="col-md-6">

                        <div class="panel panel-primary" data-collapsed="0">

                            <div class="panel-heading">

                                <div class="panel-title">

                                    Left Image

                                </div>

                                <div class="panel-options">

                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">

                                        <img src="<?= !empty($row['image4']) ? getImageSrc(UPLOAD_PATH."images/", $row['image4']) : 'http://placehold.it/1000x1000' ?>" alt="--">

                                    </div>

                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>

                                    <div>

                                        <span class="btn btn-white btn-file">

                                            <span class="fileinput-new">Select image</span>

                                            <span class="fileinput-exists">Change</span>

                                            <input type="file" name="image4" accept="image/*" <?php if(empty($row['image4'])){echo 'required=""';}?>>

                                        </span>

                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <div class="col-md-12">

                                <label for="section2_heading" class="control-label"> Heading <span class="symbol required">*</span></label>

                                <input type="text" name="section2_heading" id="section2_heading" value="<?= $row['section2_heading'] ?>" class="form-control" >

                            </div>

                            <div class="col-md-12">

                                <label for="section2_detail" class="control-label">  Detail <span class="symbol required">*</span></label>

                                <textarea name="section2_detail" rows="3" class="form-control ckeditor" ><?= $row['section2_detail'] ?></textarea>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <h3>Section 3 (Gallery)</h3>

            <div class="form-group">

                <div class="col-md-12">

                    <label for="" class="control-label"> Heading <span class="symbol required">*</span></label>

                    <input type="text" name="section3_heading" value="<?= $row['section3_heading'] ?>" class="form-control">

                </div>

                <div class="col-md-12">

                    <label for="" class="control-label"> Button Heading <span class="symbol required">*</span></label>

                    <input type="text" name="section3_btn_heading" value="<?= $row['section3_btn_heading'] ?>" class="form-control">

                </div>

                <div class="col-md-12">

                    <label for="" class="control-label"> Button Link <span class="symbol required">*</span></label>

                    <input type="text" name="section3_btn_link" value="<?= $row['section3_btn_link'] ?>" class="form-control">

                </div>

            </div>



            <h3> Section 4 (Merchandaise)</h3>

            <div class="form-group">

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <div class="col-md-12">

                                <label for="section4_heading" class="control-label"> Heading <span class="symbol required">*</span></label>

                                <input type="text" name="section4_heading" id="section4_heading" value="<?= $row['section4_heading'] ?>" class="form-control" >

                            </div>

                            <div class="col-md-12">

                                <label for="section4_detail" class="control-label">  Detail <span class="symbol required">*</span></label>

                                <textarea name="section4_detail" rows="3" class="form-control ckeditor" ><?= $row['section4_detail'] ?></textarea>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="panel panel-primary" data-collapsed="0">

                            <div class="panel-heading">

                                <div class="panel-title">

                                    Right Image

                                </div>

                                <div class="panel-options">

                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

                                </div>

                            </div>

                            <div class="panel-body">

                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">

                                        <img src="<?= !empty($row['image5']) ? getImageSrc(UPLOAD_PATH."images/", $row['image5']) : 'http://placehold.it/1000x1000' ?>" alt="--">

                                    </div>

                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>

                                    <div>

                                        <span class="btn btn-white btn-file">

                                            <span class="fileinput-new">Select image</span>

                                            <span class="fileinput-exists">Change</span>

                                            <input type="file" name="image5" accept="image/*" <?php if(empty($row['image5'])){echo 'required=""';}?>>

                                        </span>

                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <h3>Section 5 (Timer)</h3>

            <div class="form-group">

                <div class="col-md-12">

                    <label for="" class="control-label"> Heading <span class="symbol required">*</span></label>

                    <input type="text" name="section5_heading" value="<?= $row['section5_heading'] ?>" class="form-control">

                </div>

                <div class="col-md-12">

                    <label for="" class="control-label"> Timer Date <span class="symbol required">* (<?=date('Y/m/d')?> Format Required)</span></label>

                    <input type="text" name="section5_timer_date" value="<?= $row['section5_timer_date'] ?>" class="form-control">

                </div>

                <div class="col-md-12">

                    <label for="" class="control-label"> Button Heading <span class="symbol required">*</span></label>

                    <input type="text" name="section5_btn_heading" value="<?= $row['section5_btn_heading'] ?>" class="form-control">

                </div>

                <div class="col-md-12">

                    <label for="" class="control-label"> Button Link <span class="symbol required">*</span></label>

                    <input type="text" name="section5_btn_link" value="<?= $row['section5_btn_link'] ?>" class="form-control">

                </div>

            </div>



            <h3>Section 6 (Roadmap)</h3>

            <div class="form-group">

                <div class="col-md-12">

                    <label for="" class="control-label"> Heading <span class="symbol required">*</span></label>

                    <input type="text" name="section6_heading" value="<?= $row['section6_heading'] ?>" class="form-control">

                </div>

            </div>



            <h3>Section 7 (FAQ's)</h3>

            <div class="form-group">

                <div class="col-md-12">

                    <label for="" class="control-label"> Heading <span class="symbol required">*</span></label>

                    <input type="text" name="section7_heading" value="<?= $row['section7_heading'] ?>" class="form-control">

                </div>

            </div>



            <h3>Section 8 (Team)</h3>

            <div class="form-group">

                <div class="col-md-12">

                    <label for="" class="control-label"> Heading <span class="symbol required">*</span></label>

                    <input type="text" name="section8_heading" value="<?= $row['section8_heading'] ?>" class="form-control">

                </div>

            </div>

            

            <div class="form-group">

                <label for="field-1" class="col-sm-2 control-label "></label>

                <div class="col-sm-10">

                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>

                </div>

            </div>

        </form>

    </div>

</div>