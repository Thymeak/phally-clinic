<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>


<div class="forms-main">
    <h2 class="inner-tittle">លិខិតចេញពីពេទ្យ </h2>


    <div class="graph-form" style="margin-bottom: 10%">
        <div class="form-body">

            <!--<form>-->
            <?php echo form_open('./admin/submit_maternity_letter_out') ?>
            <input type="hidden" name="txtcustID" id="txtcustID" value="<?php echo set_value('txtcustID', $custID) ?>"  />
            <div class="col-md-6 form-group">
                <label for="txtcustName">ឈ្មោះស្រ្តី*</label>
                <?php echo form_error('txtcustName', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustName" name="txtcustName" value="<?php echo set_value('txtcustName', $custName) ?>"/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtcustAge">អាយុ</label>
                <input type="text" readonly="true" class="form-control" id="txtcustAge" name="txtcustAge" value="<?php echo set_value('txtcustAge', $value->age) ?>"/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtcustNationality">សញ្ញាតិ</label>
                <input type="text" readonly="true" class="form-control" id="txtcustNationality" name="txtcustNationality" value="<?php echo set_value('txtcustNationality', $value->nationality) ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtcustOccupation">មុខរបរ</label>
                <input readonly="true" type="text" class="form-control" id="txtcustOccupation" name="txtcustOccupation" value="<?php echo set_value('txtcustOccupation', $value->occupation) ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtcustUnit">អង្គភាព</label>
                <input type="text" class="form-control" id="txtcustUnit" name="txtcustUnit" value="<?php echo set_value('txtcustUnit') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtcustHusband">ឈ្មោះប្តី*</label>
                <?php echo form_error('txtcustHusband', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustHusband" name="txtcustHusband" value="<?php echo set_value('txtcustHusband', $value->husbandName) ?>"/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txthusAge">អាយុ</label>
                <input type="text" readonly="true" class="form-control" id="txthusAge" name="txthusAge" value="<?php echo set_value('txthusAge', $value->husbandAge) ?>"/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txthusNationality">សញ្ញាតិ*</label>
                <?php echo form_error('txthusNationality', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txthusNationality" name="txthusNationality" value="<?php echo set_value('txthusNationality','ខ្មែរ') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group form-last">
                <label for="txthusOccupation">មុខរបរ*</label>
                <?php echo form_error('txthusOccupation', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txthusOccupation" name="txthusOccupation" value="<?php echo set_value('txthusOccupation') ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txthusUnit">អង្គភាព</label>
                <input type="text" class="form-control" id="txthusUnit" name="txthusUnit" value="<?php echo set_value('txthusUnit') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtvillageNo">ភូមិ</label>
                <input readonly="true" type="text" class="form-control" id="txtvillageNo" name="txtvillageNo" value="<?php echo set_value('txtvillageNo', $value->villageNo) ?>"/>
            </div>

            <div class="col-md-6 form-group">
                <label for="txtcommuneNo">ឃុំ/សង្កាត់</label>
                <input readonly="true" type="text" class="form-control" id="txtcommuneNo" name="txtcommuneNo" value="<?php echo set_value('txtcommuneNo', $value->communNo) ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtdistinctNo">ក្រុង</label>
                <input readonly="true" type="text" class="form-control" id="txtdistinctNo" name="txtdistinctNo" value="<?php echo set_value('txtdistinctNo', $value->distinctNo) ?>"/>
            </div>

            <div class="col-md-6 form-group">
                <label for="txtprovinceNo">ខេត្ត</label>
                <input readonly="true" type="text" class="form-control" id="txtprovinceNo" name="txtprovinceNo" value="<?php echo set_value('txtprovinceNo', $value->provinceNo) ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtphoneNo">លេខទូរសព្ទ</label>
                <input readonly="true" type="text" class="form-control" id="txtphoneNo" name="txtphoneNo" value="<?php echo set_value('txtphoneNo', $value->phone) ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">

            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group">
                <label for="txtdayIn">ចូលសម្រាកព្យាបាលថ្ងែទី*</label>
                <?php echo form_error('txtdayIn', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdayIn" name="txtdayIn" value="<?php echo set_value('txtdayIn') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txtmonthIn">ខែ*</label>
                <?php echo form_error('txtmonthIn', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtmonthIn" name="txtmonthIn" value="<?php echo set_value('txtmonthIn') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txtyearIn">ឆ្នាំ*</label>
                <?php echo form_error('txtyearIn', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtyearIn" name="txtyearIn" value="<?php echo set_value('txtyearIn') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group">
                <label for="txtdayOut">ចេញពីមន្ទីពេទ្យថ្ងៃទី*</label>
                <?php echo form_error('txtdayOut', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdayOut" name="txtdayOut" value="<?php echo set_value('txtdayOut') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txtmonthOut">ខែ*</label>
                <?php echo form_error('txtmonthOut', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtmonthOut" name="txtmonthOut" value="<?php echo set_value('txtmonthOut') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txtyearOut">ឆ្នាំ*</label>
                <?php echo form_error('txtyearOut', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtyearOut" name="txtyearOut" value="<?php echo set_value('txtyearOut') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
                <label for="txtcondition_in">រោគវិនិច្ឆ័យនៅពេលចូលសម្រាកពេទ្យ*</label>
                <?php echo form_error('txtcondition_in', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcondition_in" name="txtcondition_in" value="<?php echo set_value('txtcondition_in') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
                <label for="txtcondition_out">រោគវិនិច្ឆ័យនៅពេលចេញពីពេទ្យ*</label>
                <?php echo form_error('txtcondition_out', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcondition_out" name="txtcondition_out" value="<?php echo set_value('txtcondition_out') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group">
                <label for="txtdayout_1">នៅថ្ងៃទី*</label>
                <?php echo form_error('txtdayout_1', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdayout_1" name="txtdayout_1" value="<?php echo set_value('txtdayout_1') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txtmonthout_1">ខែ*</label>
                <?php echo form_error('txtmonthout_1', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtmonthout_1" name="txtmonthout_1" value="<?php echo set_value('txtmonthout_1') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txtyearout_1">ឆ្នាំ*</label>
                <?php echo form_error('txtyearout_1', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtyearout_1" name="txtyearout_1" value="<?php echo set_value('txtyearout_1') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txttimeout_1">វេលាម៉ោង*</label>
                <?php echo form_error('txttimeout_1', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txttimeout_1" name="txttimeout_1" value="<?php echo set_value('txttimeout_1') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-9 form-group">
                <label for="txtcondition_1">រោគវិនិច្ឆ័យ*</label>
                <?php echo form_error('txtcondition_1', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcondition_1" name="txtcondition_1" value="<?php echo set_value('txtcondition_1') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txtisSugery">វះកាត់</label>
                <input type="checkbox" class="form-control" id="txtisSugery" name="txtisSugery" value="<?php echo set_value('txtisSugery') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
                <label for="txtcust_condition_out">សភាពស្រ្តីនៅពេលចេញពីមន្ទីរពេទ្យ*</label>
                <?php echo form_error('txtcust_condition_out', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcust_condition_out" name="txtcust_condition_out" value="<?php echo set_value('txtcust_condition_out') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group">
                <label for="txttype_1">ក្រោយសំរាល*</label>
                <?php echo form_error('txttype_1', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txttype_1" name="txttype_1" value="<?php echo set_value('txttype_1') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txttype_1_1"></label>
                <?php echo form_error('txttype_1_1', '<div class="error">', '</div>'); ?>
                <select class="form-control" name="txttype_1_1" value="<?php echo set_value('txttype_1_1','ឆ្នាំ') ?>">
                  <option value="ថ្ងៃ">ថ្ងៃ</option>
                  <option value="សប្តាហ៍">សប្តាហ៍</option>
                  <option value="ខែ">ខែ</option>
                  <option value="ឆ្នាំ" selected >ឆ្នាំ</option>
                </select>
            </div>

            <div class="col-md-3 form-group">
                <label for="txttype_2">សំរាក*</label>
                <?php echo form_error('txttype_2', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txttype_2" name="txttype_2" value="<?php echo set_value('txttype_2') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txttype_2_2"></label>
                <?php echo form_error('txttype_2_2', '<div class="error">', '</div>'); ?>
                <select class="form-control" name="txttype_2_2" value="<?php echo set_value('txttype_2_2','ឆ្នាំ') ?>">
                  <option value="ថ្ងៃ">ថ្ងៃ</option>
                  <option value="សប្តាហ៍">សប្តាហ៍</option>
                  <option value="ខែ">ខែ</option>
                  <option value="ឆ្នាំ" selected >ឆ្នាំ</option>
                </select>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group">
                <label for="txttype_3">ហាមមានកូន*</label>
                <?php echo form_error('txttype_3', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txttype_3" name="txttype_3" value="<?php echo set_value('txttype_3','2') ?>"/>
            </div>

            <div class="col-md-3 form-group">
                <label for="txttype_3_3"></label>
                <?php echo form_error('txttype_3_3', '<div class="error">', '</div>'); ?>
                <select class="form-control" name="txttype_3_3" value="<?php echo set_value('txttype_3_3','ឆ្នាំ') ?>" >
                  <option value="ថ្ងៃ">ថ្ងៃ</option>
                  <option value="ខែ">ខែ</option>
                  <option value="ឆ្នាំ" selected >ឆ្នាំ</option>
                </select>
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
