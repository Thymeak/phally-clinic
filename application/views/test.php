<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>

<div class="forms-main">
    <h2 class="inner-tittle">Add New Customer </h2>


    <div class="graph-form" style="margin-bottom: 10%">
        <div class="form-body">

            <!--<form>-->
            <?php echo form_open('admin/addTest') ?>
            <?php echo $this->session->flashdata('insert'); ?>
            <div class="col-md-6 form-group">
                <label for="txtfirstname">First Name</label>
                <?php echo form_error('txtfirstname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtfirstname" name="txtfirstname" value="<?php echo set_value('txtfirstname') ?>" placeholder="First Name"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtlastname">Last Name</label>
                <?php echo form_error('txtlastname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtlastname" name="txtlastname" value="<?php echo set_value('txtlastname') ?>" placeholder="Last Name"/>
            </div>

            <div class="clearfix"> </div>

            <button type="submit" class="btn btn-default">Add</button>
            <!--</form>-->
            <?php echo form_close() ?>
        </div>

    </div>



</div>

<script src="<?php echo base_url() ?>public/js/cbpFWTabs.js"></script>
<script>
    new CBPFWTabs(document.getElementById('tabs'));
</script>
