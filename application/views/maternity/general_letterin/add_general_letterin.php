<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>​
<div class="forms-main">
    <h2 class="inner-tittle">ប័ណ្ណចូលសំរាកពេទ្យ្ </h2>
    <div class="graph-form" style="margin-bottom: 10%">
        <div class="form-body">
            <!--<form>-->
            <?php echo form_open('./admin/submit_general_letterin') ?>
            <input type="hidden" name="txtcustID" id="txtcustID" value="<?php echo set_value('txtcustID', $custID) ?>"  />

            <div class="col-md-6 form-group">
                <label for="txtcustName">គ្រូពេទ្យព្យាបាល</label>
                <?php echo form_error('txtdocName', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdocName" name="txtdocName" value="<?php echo set_value('txtdocName') ?>" placeholder="ឈ្មោះ"/>
            </div>
            <div class="col-md-6 form-group">
                <br/>
            <h4> នៃមន្ទីសំរាកព្យាបាល និងសម្ពពផល្លី</h4>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtcustName">បានអនុញ្ញាតឲ្យអ្នកជំងឺឈ្មោះ</label>
                <?php echo form_error('txtcustName', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustName" name="txtcustName" value="<?php echo set_value('txtcustName', $custName) ?>" placeholder=""/>
            </div>
            <div class="col-md-3 form-group form-last">
                <label for="txtcusgender">ភេទ</label>
                <?php echo form_error('txtcusgender', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcusgender" name="txtcusgender" value="<?php echo set_value('txtcusgender') ?>" placeholder="ភេទ"/>
            </div>
            <div class="col-md-3 form-group form-last">
                <label for="txtcustNationality">សញ្ញាតិ</label>
                <input type="text" readonly="true" class="form-control" id="txtcustNationality" name="txtcustNationality" value="<?php echo set_value('txtcustNationality', $value->nationality) ?>" placeholder=""/>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtdadname">ឪពុកឈ្មោះ</label>
                <?php echo form_error('txtdadname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdadname" name="txtdadname" value="<?php echo set_value('txtdadname') ?>" placeholder="ឪពុកឈ្មោះ"/>
            </div>
            <div class="col-md-6 form-group">
                <label for="txtmomname">ម្ដាយឈ្មោះ</label>
                <?php echo form_error('txtmomname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtmomname" name="txtmomname" value="<?php echo set_value('txtmomname') ?>" placeholder="ម្ដាយឈ្មោះ"/>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-3 form-group">
                <label for="txtcustprovinceNo">ខេត្ត៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustprovinceNo" name="txtcustprovinceNo" value="<?php echo set_value('txtcustprovinceNo', $value->provinceNo) ?>" placeholder=""/>
            </div>
            <div class="col-md-3 form-group form-last">
                <label for="txtcustvillageNo">ស្រុក៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustvillageNo" name="txtcustvillageNo" value="<?php echo set_value('txtcustvillageNo', $value->villageNo) ?>" placeholder=""/>
            </div>
            <div class="col-md-3 form-group form-last">
                <label for="txtcustcommunNo">ឃុំ៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustcommunNo" name="txtcustcommunNo" value="<?php echo set_value('txtcustcommunNo', $value->communNo) ?>" placeholder=""/>
            </div>
            <div class="col-md-3 form-group form-last">
                <label for="txtcustdistinctNo">ភូមិ៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustdistinctNo" name="txtcustdistinctNo" value="<?php echo set_value('txtcustdistinctNo', $value->distinctNo) ?>" placeholder=""/>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtcustoccupation">មុខរបរ៖</label>
                <?php echo form_error('txtcustoccupation', '<div class="error">', '</div>'); ?>
                <input type="text"  class="form-control" id="txtcustoccupation" name="txtcustoccupation" value="<?php echo set_value('txtcustoccupation') ?>" placeholder="មុខរបរ"/>
            </div>
            <div class="col-md-6 form-group form-last">
                <label for="txtunit">អង្គភាព៖</label>
                <?php echo form_error('txtunit', '<div class="error">', '</div>'); ?>
                <input type="text"  class="form-control" id="txtunit" name="txtunit" value="<?php echo set_value('txtunit') ?>" placeholder="អង្គភាព"/>
            </div>

            <div class="clearfix"> </div>
            <div class="col-md-2 form-group form-last">
            <br/>
                <h4>រោគវិនិច្ឆ័យនៅពេលចូលសំរាក៖ </h4>
            </div>
            <div class="col-md-10 form-group form-last">
                <label for="txtcondition_in"></label>
                <?php echo form_error('txtcondition_in', '<div class="error">', '</div>'); ?>
                <input type="text"  class="form-control" id="txtcustill" name="txtcondition_in" value="<?php echo set_value('txtcondition_in') ?>" placeholder=""/>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtdepartment">ផ្នែក៖</label>
                <?php echo form_error('txtdepartment', '<div class="error">', '</div>'); ?>
                <input type="text"  class="form-control" id="txtdepartment" name="txtdepartment" value="<?php echo set_value('txtdepartment') ?>" placeholder="អង្គភាព"/>
            </div>
            <div class="col-md-6 form-group form-last">
                <label for="txttimein">ពេលវេលាចូល៖</label>
                <?php echo form_error('txttimein', '<div class="error">', '</div>'); ?>
                <input type="text"  class="form-control" id="txttimein" name="txttimein" value="<?php echo set_value('txttimein') ?>" placeholder="ពេលវេលាចូល"/>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-6 form-group form-last">
                <label for="txtphone">លេខទូរសព្ទ័៖</label>
                <?php echo form_error('txtphone', '<div class="error">', '</div>'); ?>
                <input type="text"  class="form-control" id="txtphone" name="txtphone" value="<?php echo set_value('txtphone') ?>" placeholder="លេខទូរសព្ទ័"/>
            </div>
            <div class="clearfix"> </div>
            <button type="submit" class="btn btn-default">ចេញលិខិត</button>

            <!--end form-->
            <?php echo form_close() ?>
        </div>
    </div>
</div>