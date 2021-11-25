<?php if ($this->uri->segment(3) == 'manage'): ?>

<?= showMsg(); ?>

<?= getBredcrum(ADMIN, array('#' => 'Add/Update Gallery')); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-list"></i> Add/Update <strong>Gallery</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <a href="<?= site_url(ADMIN . '/gallery'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
    </div>
</div>
<div>
    <hr>
    <div class="row col-md-12">
        <form action="" name="frmLocation" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="row col-md-6">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Partners Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row->image) ? getImageSrc(SITE_IMAGES . "/gallery/thumb_", $row->image) : 'http://placehold.it/1500x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>

                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image" accept="image/*" >
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <label class="control-label" for="status"> Status <span class="symbol required">*</span></label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" <?php
                            if (isset($row->status) && '1' == $row->status) {
                                echo 'selected';
                            }
                            ?>>Active</option>
                            <option value="0" <?php
                            if (isset($row->status) && '0' == $row->status) {
                                echo 'selected';
                            }
                            ?>>Inactive</option>
                        </select>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr class="hr-short">
                <div class="form-group text-right">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="clearfix"></div>
</div>
<?php else: ?>
<?= showMsg(); ?>
<?= getBredcrum(ADMIN, array('#' => 'Manage Gallery')); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-list"></i> Manage <strong>Gallery</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <a href="<?= site_url(ADMIN . '/gallery/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
    </div>
</div>
<table class="table table-bordered datatable" id="table-1">
    <thead>
        <tr>
            <th width="5%" class="text-center">Sr#</th>
            <th>Image</th>
            <th width="12%" class="text-center">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($rows) > 0): $count = 0; ?>
            <?php foreach ($rows as $row): 
                // pr($row);
                ?>
                <tr class="odd gradeX">
                    <td class="text-center"><?= ++$count; ?></td>
                    <td><img src="<?=  getImageSrc(UPLOAD_PATH . "/gallery/thumb_", $row->image) ?>" height="50" alt="--"></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-primary" role="menu">
                                <li><a href="<?= site_url(ADMIN); ?>/gallery/manage/<?= $row->id; ?>">Edit</a></li>
                                <li><a href="<?= site_url(ADMIN); ?>/gallery/delete/<?= $row->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
<?php endif; ?>