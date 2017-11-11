<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>

<div class="forms-main">
    <h2 class="inner-tittle">លិខិតបញ្ចាក់កំណើត </h2>
    <div class="graph-form" style="margin-bottom: 10%">
        <div class="form-body">

            <!--<form>-->
            <?php echo form_open('./admin/submit_maternity_letterbirth') ?>
            <input type="hidden" name="txtcustID" id="txtcustID" value="<?php echo set_value('txtcustID', $custID) ?>"  />

            <div class="col-md-6 form-group">
                <label for="txtcustName">ឈ្មោះស្រ្តី</label>
                <?php echo form_error('txtcustName', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustName" name="txtcustName" value="<?php echo set_value('txtcustName', $custName) ?>" placeholder=""/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtcustAge">អាយុ</label>
                <input type="text" readonly="true" class="form-control" id="txtcustAge" name="txtcustAge" value="<?php echo set_value('txtcustAge', $value->age) ?>" placeholder=""/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtcustNationality">សញ្ញាតិ</label>
                <input type="text" readonly="true" class="form-control" id="txtcustNationality" name="txtcustNationality" value="<?php echo set_value('txtcustNationality', $value->nationality) ?>" placeholder=""/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group">
                <label for="txtcusthomeNo">អាស័យដ្ជានផ្ទះលេខ៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcusthomeNo" name="txtcusthomeNo" value="<?php echo set_value('txtcusthomeNo', $value->homeNo) ?>" placeholder=""/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtcustdistinctNo">ភូមិ៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustdistinctNo" name="txtcustdistinctNo" value="<?php echo set_value('txtcustdistinctNo', $value->distinctNo) ?>" placeholder=""/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtcustcommunNo">ឃុំ៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustcommunNo" name="txtcustcommunNo" value="<?php echo set_value('txtcustcommunNo', $value->communNo) ?>" placeholder=""/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtcustvillageNo">ស្រុក៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustvillageNo" name="txtcustvillageNo" value="<?php echo set_value('txtcustvillageNo', $value->villageNo) ?>" placeholder=""/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group">
                <label for="txtcustprovinceNo">ខេត្ត៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustprovinceNo" name="txtcustprovinceNo" value="<?php echo set_value('txtcustprovinceNo', $value->provinceNo) ?>" placeholder=""/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtcustoccupation">មុខរបរ៖</label>
                <input type="text" readonly="true" class="form-control" id="txtcustoccupation" name="txtcustoccupation" value="<?php echo set_value('txtcustoccupation', $value->occupation) ?>" placeholder=""/>
            </div>


            <div class="col-md-6 form-group form-last" >
                <label for="txthusbandName">ជាភរិយាលោក</label>
                <?php echo form_error('txthusbandName', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txthusbandName" name="txthusbandName" value="<?php echo set_value('txthusbandName', $value->husbandName) ?>" placeholder=""/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group form-last">
                <label for="txthusbandAge">អាយុ</label>
                <input type="text" readonly="true" class="form-control" id="txthusbandAge" name="txthusbandAge" value="<?php echo set_value('txthusbandAge', $value->husbandAge) ?>" placeholder=""/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txthustNationality">សញ្ញាតិ</label>
                <input type="text" readonly="true" class="form-control" id="txthustNationality" name="txthustNationality" value="<?php echo set_value('txthustNationality', $value->nationality) ?>" placeholder=""/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txthusoccupation">មុខរបរ៖</label>
                <?php echo form_error('txthusoccupation', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txthusoccupation" name="txthusoccupation" value="<?php echo set_value('txthusoccupation') ?>" placeholder="មុខរបរ"/>
            </div>

            <div class="col-md-3 form-group form-last">
                <label for="txtbabyGender">ពិតជាបានសំរាលទារក១ភេទ៖</label>
                <?php echo form_error('txtbabyGender', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtbabyGender" name="txtbabyGender" value="<?php echo set_value('txtbabyGender') ?>" placeholder="ភេទ"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-3 form-group ">
                <label for="txtbabyWeight">ទំងន់៖</label>
                <?php echo form_error('txtbabyWeight', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtbabyWeight" name="txtbabyWeight" value="<?php echo set_value('txtbabyWeight') ?>" placeholder="ទំងន់"​​​ />គីឡូក្រាម
            </div>

            <div class="col-md-3 form-group ">
                <label for="txtbabytime">នៅវេលាម៉ោង៖</label>
                <?php echo form_error('txtbabytime', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtbabytime" name="txtbabytime" value="<?php echo set_value('txtbabytime') ?>" placeholder="ម៉ោង"​​​ />
            </div>
            <div class="col-md-2 form-group ">
                    <label for="txtbabyday">កាលពីថ្ងៃទី៖</label>
                <?php echo form_error('txtbabyday', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtbabyday" name="txtbabyday" value="<?php echo set_value('txtbabyday') ?>" placeholder="ថ្ងៃទី"​​​ />
            </div>
            <div class="col-md-2 form-group ">
                <label for="txtbabymonth">ខែ</label>
                <?php echo form_error('txtbabymonth', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtbabymonth" name="txtbabymonth" value="<?php echo set_value('txtbabymonth') ?>" placeholder="ខែ"​​​ />
            </div>
            <div class="col-md-2 form-group ">
                <label for="txtbabyyear">ឆ្នាំ</label>
                <?php echo form_error('txtbabyyear', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtbabyyear" name="txtbabyyear" value="<?php echo set_value('txtbabyyear') ?>" placeholder="ឆ្នាំ"​​​ />​</br> ពិតប្រាកដមែន ។
            </div>

            <div class="clearfix"> </div>

            <button type="submit" class="btn btn-default">ចេញលិខិត</button>
            <!--end form-->
            <?php echo form_close() ?>
        </div>
    </div>
</div>