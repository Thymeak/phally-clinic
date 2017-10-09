<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>


<div class="forms-main">
    <h2 class="inner-tittle">ប័ណ្ណអនុញ្ញាតចូលសំរាកពេទ្យ </h2>


    <div class="graph-form" style="margin-bottom: 10%">
        <div class="form-body"> 

            <!--<form>--> 
            <?php echo form_open('./admin/submitLetterIn') ?>
            <input type="hidden" name="txtcustID" id="txtcustID" value="<?php echo set_value('txtcustID', $custID) ?>"  />
            <div class="col-md-6 form-group"> 
                <label for="txtdoctor">គ្រូពេទ្យព្យាបាល</label> 
                <?php echo form_error('txtdoctor', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdoctor" name="txtdoctor" value="<?php echo set_value('txtdoctor') ?>" placeholder="គ្រូពេទ្យព្យាបាល"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtcustName">អ្នកជម្ងឺឈ្មោះ</label>    
                <?php echo form_error('txtcustName', '<div class="error">', '</div>'); ?>
                <input type="text" readonly="true" class="form-control" id="txtcustName" name="txtcustName" value="<?php echo set_value('txtcustName', $custName) ?>" placeholder="អ្នកជម្ងឺឈ្មោះ"/>
            </div>

            <div class="clearfix"> </div>             

            <div class="col-md-6 form-group"> 
                <label for="txtgender">ភេទ</label><br/>         
                <?php echo form_error('txtgender', '<div class="error">', '</div>'); ?>
                <select readonly="true" class="form-control" name="txtgender" id="txtgender" value="<?php echo set_value('txtgender', $value->gender) ?>">
                    <option value="M">ប្រុស</option>
                    <option value="F">ស្រី</option>
                </select>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtcustNationality">ជាតិ</label> 
                <?php echo form_error('txtcustNationality', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtcustNationality" name="txtcustNationality" value="<?php echo set_value('txtcustNationality', $value->nationality) ?>" placeholder="ជាតិ"/>
            </div>

            <div class="clearfix"> </div>           

            <div class="col-md-6 form-group"> 
                <label for="txtcustFather">ឪពុកឈ្មោះ</label> 
                <?php echo form_error('txtcustFather', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustFather" name="txtcustFather" value="<?php echo set_value('txtcustFather') ?>" placeholder="ឪពុកឈ្មោះ"/>
            </div>

            <div class="col-md-6 form-group form-last"> 
                <label for="txtcustMother">ម្តាយឈ្មោះ</label> 
                <?php echo form_error('txtcustMother', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustMother" name="txtcustMother" value="<?php echo set_value('txtcustMother') ?>" placeholder="ម្តាយឈ្មោះ"/>
            </div>            

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group">               
                <label for="txtprovince">ខេត្ត</label> 
                <?php echo form_error('txtprovince', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtprovince" name="txtprovince" value="<?php echo set_value('txtprovince', $value->provinceNo) ?>" placeholder="ខេត្ត"/>
            </div>

            <div class="col-md-6 form-group form-last"> 
                <label for="txtdistinct">ស្រុក</label> 
                <?php echo form_error('txtdistinct', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtdistinct" name="txtdistinct" value="<?php echo set_value('txtdistinct', $value->distinctNo) ?>" placeholder="ស្រុក"/>
            </div>            

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtcommune">ឃុំ</label> 
                <?php echo form_error('txtcommune', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtcommune" name="txtcommune" value="<?php echo set_value('txtcommune', $value->communNo) ?>" placeholder="ឃុំ"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtvillage">ភូមិ</label> 
                <?php echo form_error('txtvillage', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtvillage" name="txtvillage" value="<?php echo set_value('txtvillage', $value->villageNo) ?>" placeholder="ភូមិ"/>
            </div> 

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtoccupation">មុខរបរ</label> 
                <?php echo form_error('txtoccupation', '<div class="error">', '</div>'); ?>
                <input readonly="true" type="text" class="form-control" id="txtoccupation" name="txtoccupation" value="<?php echo set_value('txtoccupation', $value->occupation) ?>" placeholder="មុខរបរ"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtunit">អង្គភាព</label> 
                <?php echo form_error('txtunit', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtunit" name="txtunit" value="<?php echo set_value('txtunit') ?>" placeholder="អង្គភាព"/>
            </div>

            <div class="clearfix"> </div>            

            <div class="col-md-12 form-group"> 
                <label for="txtcustCondition">រោគវិនិច័្ឆយនៅពេលចូលពេទ្យ</label> 
                <?php echo form_error('txtcustCondition', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustCondition" name="txtcustCondition" value="<?php echo set_value('txtcustCondition') ?>" placeholder="រោគវិនិច័្ឆយនៅពេលចូលពេទ្យ"/>
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtdepartment">ផ្នែក</label> 
                <?php echo form_error('txtdepartment', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdepartment" name="txtdepartment" value="<?php echo set_value('txtdepartment') ?>" placeholder="ផ្នែក"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtdatein">ពេលវេលចូល</label> 
                <?php echo form_error('txtdatein', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtdatein" name="txtdatein" value="<?php echo set_value('txtdatein') ?>" placeholder="ពេលវេលចូល"/>
            </div> 

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtcustPhone">លេខទូរសព្ទ</label> 
                <?php echo form_error('txtcustPhone', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtcustPhone" name="txtcustPhone" value="<?php echo set_value('txtcustPhone', $value->phone) ?>" placeholder="លេខទូរសព្ទ"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 

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