<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>​
    <div class="forms-main">
        <h2 class="inner-tittle">PCR-HBV </h2>
        <div class="graph-form" style="margin-bottom: 10%">
            <div class="form-body">
                <!--form-->
                <?php echo form_open('./admin/submitlaborPCR') ?>
                <input type="hidden" name="txtcustID" id="txtcustID" value="<?php echo set_value('txtcustID', $custID) ?>"  />

                <div class="col-md-6 form-group">
                    <label for="txtpatiet">Patient's Name</label>
                    <?php echo form_error('txtpatiet', '<div class="error">', '</div>'); ?>
                    <input type="text" class="form-control" id="txtpatiet" name="txtpatiet" value="<?php echo set_value('txtpatiet') ?>" placeholder="Patient"/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="txtcustName">Provenance</label>
                    <?php echo form_error('txtdocName', '<div class="error">', '</div>'); ?>
                    <input type="text" class="form-control" id="txtdocName" name="txtdocName" value="<?php echo set_value('txtdocName') ?>" placeholder="Dr."/>
                </div>

                <div class="clearfix"> </div>

                <div class="col-md-6 form-group ">
                    <label for="txtdatereceive">Date Receiving</label>
                    <?php echo form_error('txtdatereceive', '<div class="error">', '</div>'); ?>
                    <input type="date" class="form-control" id="txtdatereceive" name="txtdatereceive" value="<?php echo set_value('txtdatereceive', $value->createDate) ?>" placeholder="Date "/>
                </div>
                <div class="col-md-6 form-group form-last">
                    <label for="txtdatecarry">Date Carrying</label>
                    <?php echo form_error('txtdatecarry', '<div class="error">', '</div>'); ?>
                    <input type="date" class="form-control" id="txtdatecarry" name="txtdatecarry" value="<?php echo set_value('txtdatecarry', $value->createDate) ?>" placeholder="Date "/>
                </div>
                <div class="clearfix"> </div>

                <div class="col-md-12 form-group ">
                    <h2 align="center">Report</h2>
                </div>
                <div class="clearfix"> </div>

                <div class="col-md-6 form-group">
                    <label for="txtloadcopyml">The Viral Load(copies/ml)</label>
                    <?php echo form_error('txtloadcopyml', '<div class="error">', '</div>'); ?>
                    <input type="text" class="form-control" id="txtloadcopyml" name="txtloadcopyml" value="<?php echo set_value('txtloadcopyml') ?>" placeholder=""/>
                </div>
                <div class="col-md-6 form-group form-last">
                    <label for="txtloadlog">The Viral Load(log10)</label>
                    <?php echo form_error('txtloadlog', '<div class="error">', '</div>'); ?>
                    <input type="text" class="form-control" id="txtloadlog" name="txtloadlog" value="<?php echo set_value('txtloadlog') ?>" placeholder=""/>
                </div>

                <div class="clearfix"> </div>

                <div class="col-md-6 form-group">
                    <label for="txtloadiu">The Viral Load(IU/ml)</label>
                    <?php echo form_error('txtloadiu', '<div class="error">', '</div>'); ?>
                    <input type="text" class="form-control" id="txtloadiu" name="txtloadiu" value="<?php echo set_value('txtloadiu') ?>" placeholder=""/>
                </div>
                <div class="col-md-6 form-group form-last">
                    <label for="txtgeno">The genotype</label>
                    <?php echo form_error('txtgeno', '<div class="error">', '</div>'); ?>
                    <input type="text" class="form-control" id="txtgeno" name="txtgeno" value="<?php echo set_value('txtgeno') ?>" placeholder=""/>
                </div>
                <div class="clearfix"> </div>

                <div class="col-md-12 form-group form-last">
                    <label for="txtcmt">Comments</label>
                    <?php echo form_error('txtcmt', '<div class="error">', '</div>'); ?>
                    <input type="text" class="form-control" id="txtcmt" name="txtcmt" value="<?php echo set_value('txtcmt') ?>" placeholder=""/>
                </div>
                <div class="clearfix"> </div>
                <button type="submit" class="btn btn-default">Process</button>

                <!--end form-->
                <?php echo form_close() ?>
            </div>
    </div>