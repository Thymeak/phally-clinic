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
            <?php echo form_open('./admin/sumbit_medical_letter_out') ?>
            <input type="hidden" name="txtcustID" id="txtcustID" value="<?php echo set_value('txtcustID', $custID) ?>"  />
            <div class="col-md-6 form-group">
                <label for="txtcustName">អ្នកជម្ងឺឈ្មោះ</label>
                <?php echo form_error('txtcustName', '<div class="error">', '</div>'); ?>
                <input type="text" readonly="true" class="form-control" id="txtcustName" name="txtcustName" value="<?php echo set_value('txtcustName', $custName) ?>" placeholder="អ្នកជម្ងឺឈ្មោះ"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtgender">ភេទ</label><br/>
                <?php echo form_error('txtgender', '<div class="error">', '</div>'); ?>
                <select readonly="true" class="form-control" name="txtgender" id="txtgender" value="<?php echo set_value('txtgender', $value->gender) ?>">
                    <option value="M">ប្រុស</option>
                    <option value="F">ស្រី</option>
                </select>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtcustAge">អាយុ</label>
                <?php echo form_error('txtcustAge', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtcustAge" name="txtcustAge" value="<?php echo set_value('txtcustAge', $value->age) ?>" placeholder="អាយុ"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtcustNationality">ជាតិ</label>
                <?php echo form_error('txtcustNationality', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtcustNationality" name="txtcustNationality" value="<?php echo set_value('txtcustNationality', $value->nationality) ?>" placeholder="ជាតិ"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtcustOccupation">មុខរបរ</label>
                <?php echo form_error('txtcustOccupation', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustOccupation" name="txtcustOccupation" value="<?php echo set_value('txtcustOccupation', $value->occupation) ?>" placeholder="មុខរបរ"/>
            </div>

            <div class="col-md-6 form-group form-last">

            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtvillage">ភូមិ</label>
                <?php echo form_error('txtvillage', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtvillage" name="txtvillage" value="<?php echo set_value('txtvillage', $value->villageNo) ?>" placeholder="ភូមិ"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtcommune">ឃុំ</label>
                <?php echo form_error('txtcommune', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtcommune" name="txtcommune" value="<?php echo set_value('txtcommune', $value->communNo) ?>" placeholder="ឃុំ"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtdistinct">ស្រុក</label>
                <?php echo form_error('txtdistinct', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtdistinct" name="txtdistinct" value="<?php echo set_value('txtdistinct', $value->distinctNo) ?>" placeholder="ស្រុក"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtprovince">ខេត្ត</label>
                <?php echo form_error('txtprovince', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtprovince" name="txtprovince" value="<?php echo set_value('txtprovince', $value->provinceNo) ?>" placeholder="ខេត្ត"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtdate_in">បានចូលព្យាបាលជំងឺនៅថ្ងៃទី</label>
                <?php echo form_error('txtdate_in', '<div class="error">', '</div>'); ?>
                <input type="date" class="form-control" id="txtdate_in" name="txtdate_in" value="<?php echo set_value('txtdate_in') ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtdepartment">នៅផ្នែក</label>
                <?php echo form_error('txtdepartment', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdepartment" name="txtdepartment" value="<?php echo set_value('txtdepartment') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtdate_out">ចេញពីមន្ទីពេទ្យនៅថ្ងៃទី</label>
                <?php echo form_error('txtdate_out', '<div class="error">', '</div>'); ?>
                <input type="date" class="form-control" id="txtdate_out" name="txtdate_out" value="<?php echo set_value('txtdate_out') ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txttotal_day_in">បានទទួលការព្យាបាលចំនួន(ថ្ងៃ)</label>
                <?php echo form_error('txttotal_day_in', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txttotal_day_in" name="txttotal_day_in" value="<?php echo set_value('txttotal_day_in') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
                <label for="txtcondition">ដោយជំងឺ</label>
                <?php echo form_error('txtcondition', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcondition" name="txtcondition" value="<?php echo set_value('txtcondition') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
                <label for="txtdoctor_consultant">យោបល់គ្រូពេទ្យ</label>
                <?php echo form_error('txtdoctor_consultant', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdoctor_consultant" name="txtdoctor_consultant" value="<?php echo set_value('txtdoctor_consultant') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <button type="submit" class="btn btn-default">Add</button>
            <!--</form>-->
            <?php echo form_close() ?>
        </div>

    </div>



</div>
