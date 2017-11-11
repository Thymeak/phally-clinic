<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>

<div class="forms-main">
    <h2 class="inner-tittle">ចេញវិជ្ជះបញ្ជា </h2>
    <div class="graph-form" style="margin-bottom: 10%">
        <div class="form-body">
            <!--<form>-->
            <?php echo form_open('./admin/') ?>
            <input type="hidden" name="txtcustID" id="txtcustID" value="<?php echo set_value('txtcustID', $custID) ?>"  />

            <div class="col-md-6 form-group">
                <label for="txtcustName">អ្នកជំងឺ</label>
                <?php echo form_error('txtcustName', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustName" name="txtcustName" value="<?php echo set_value('txtcustName', $custName) ?>" placeholder=""/>
            </div>
            <div class="col-md-3 form-group">
                <label for="txtgender">អាយុ</label>
                <?php echo form_error('txtgender', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtgender" name="txtgender" value="<?php echo set_value('txtgender') ?>" placeholder=""/>
            </div>

            <div class="clearfix"> </div>

            <!--end form-->
            <?php echo form_close() ?>
        </div>
    </div>
</div>>