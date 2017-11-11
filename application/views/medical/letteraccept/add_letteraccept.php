<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>


<div class="forms-main">
    <h2 class="inner-tittle">លិខិតយល់ព្រម </h2>


    <div class="graph-form" style="margin-bottom: 10%">
        <div class="form-body">

            <!--<form>-->
            <?php echo form_open('./admin/submit_medical_letter_accept') ?>
            <input type="hidden" name="txtcustID" id="txtcustID" value="<?php echo set_value('txtcustID', $custID) ?>"  />
            <div class="col-md-6 form-group">
                <label for="txtguardian_name">ខ្ញុំបាទ / នាងខ្ញុំឈ្មោះ</label>
                <?php echo form_error('txtguardian_name', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtguardian_name" name="txtguardian_name" value="<?php echo set_value('txtguardian_name') ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtguardian_nationality">សញ្ញាតិ</label>
                <?php echo form_error('txtguardian_nationality', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtguardian_nationality" name="txtguardian_nationality" value="<?php echo set_value('txtguardian_nationality','ខ្មែរ') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtguardian_gender">ភេទ</label><br/>
                <?php echo form_error('txtguardian_gender', '<div class="error">', '</div>'); ?>
                <select class="form-control" name="txtguardian_gender" id="txtguardian_gender" value="<?php echo set_value('txtguardian_gender') ?>">
                    <option value="M">ប្រុស</option>
                    <option value="F">ស្រី</option>
                </select>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtguardian_age">អាយុ</label>
                <?php echo form_error('txtguardian_age', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtguardian_age" name="txtguardian_age" value="<?php echo set_value('txtguardian_age') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtvillageNo">ទីលំនៅ ភូមិ</label>
                <?php echo form_error('txtvillageNo', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtvillageNo" name="txtvillageNo" value="<?php echo set_value('txtvillageNo',$value->villageNo) ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtcommuneNo">ឃុំ/សង្កាត់</label>
                <?php echo form_error('txtcommuneNo', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcommuneNo" name="txtcommuneNo" value="<?php echo set_value('txtcommuneNo',$value->communNo) ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtdistinctNo">ស្រុក/ខណ្ឌ</label>
                <?php echo form_error('txtdistinctNo', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdistinctNo" name="txtdistinctNo" value="<?php echo set_value('txtdistinctNo', $value->distinctNo) ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtprovinceNo">ខេត្ត/ក្រុង</label>
                <?php echo form_error('txtprovinceNo', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtprovinceNo" name="txtprovinceNo" value="<?php echo set_value('txtprovinceNo', $value->provinceNo) ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
                <label for="txtguardian_type">ត្រូវជា</label>
                <?php echo form_error('txtguardian_type', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtguardian_type" name="txtguardian_type" value="<?php echo set_value('txtguardian_type') ?>"/>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtcustName">របស់អ្នកជំងឺឈ្មោះ</label>
                <?php echo form_error('txtcustName', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtcustName" name="txtcustName" value="<?php echo set_value('txtcustName', $custName) ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">
              <label for="txtcustGender">ភេទ</label><br/>
              <?php echo form_error('txtcustGender', '<div class="error">', '</div>'); ?>
              <select readonly="true" class="form-control" name="txtcustGender" id="txtcustGender" value="<?php echo set_value('txtcustGender',$value->gender) ?>">
                  <option value="M">ប្រុស</option>
                  <option value="F">ស្រី</option>
              </select>
            </div>

            <div class="col-md-6 form-group form-last">
                <label for="txtcustAge">អាយុ</label>
                <?php echo form_error('txtcustAge', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtcustAge" name="txtcustAge" value="<?php echo set_value('txtcustAge',$value->age) ?>"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
                <label for="txtaccept_reason">បានសុខចិត្តយល់ព្រមអនុញ្ញាត្តឲ្យគ្រូពេទ្យ ធ្វើការព្យាបាល(ឬវិភាគ)ដោយ</label>
                <?php echo form_error('txtaccept_reason', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtaccept_reason" name="txtaccept_reason" value="<?php echo set_value('txtaccept_reason') ?>"/>
            </div>

            <div class="clearfix"> </div>

            <button type="submit" class="btn btn-default">ចេញលិខិតយល់ព្រម</button>
            <!--</form>-->
            <?php echo form_close() ?>
        </div>

    </div>



</div>
