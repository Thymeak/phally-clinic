<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>


<div class="forms-main">
    <h2 class="inner-tittle">Edit Customer </h2>


    <div class="graph-form" style="margin-bottom: 10%">
        <div class="form-body"> 

            <!--<form>--> 
            <?php echo form_open('./admin/submitEditCustomer') ?>
            <?php echo $this->session->flashdata('update'); ?>

            <input type="hidden" id="txtcustID" name="txtcustID" value="<?php echo set_value('txtcustID', $value->custID) ?>" />

            <div class="col-md-6 form-group"> 
                <label for="txtfname">First Name</label> 
                <?php echo form_error('txtfname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtfname" name="txtfname" value="<?php echo set_value('txtfname', $value->firstname) ?>" placeholder="First Name"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtlname">Last Name</label> 
                <?php echo form_error('txtlname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtlname" name="txtlname" value="<?php echo set_value('txtlname', $value->lastname) ?>" placeholder="Last Name"/>
            </div> 

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtkhmername">ឈ្មោះខ្មែរ</label>                 
                <input type="text" class="form-control" id="txtkhmername" name="txtkhmername" value="<?php echo set_value('txtkhmername', $value->khmername) ?>" placeholder="ឈ្មោះខ្មែរ"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtgender">ភេទ</label><br/>         
                <?php echo form_error('txtgender', '<div class="error">', '</div>'); ?>
                <select class="form-control" name="txtgender" id="txtgender" value="<?php echo set_value('txtgender', $value->gender) ?>">
                    <option value="M">ប្រុស</option>
                    <option value="F">ស្រី</option>
                </select>
            </div> 

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtage">អាយុ</label> 
                <?php echo form_error('txtage', '<div class="error">', '</div>'); ?>
                <input type="number" class="form-control" id="txtage" name="txtage" value="<?php echo set_value('txtage', $value->age) ?>" placeholder="អាយុ"/>
            </div>

            <div class="col-md-6 form-group"> 
                <label for="txtageType">Age Type</label><br/> 
                <select class="form-control" name="txtageType" id="txtageType" value="<?php echo set_value('txtageType', $value->ageType) ?>">
                    <option value="ឆ្នាំ">ឆ្នាំ</option>
                    <option value="ខែ">ខែ</option>
                </select>
            </div>            

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtoccupation">មុខរបរ</label> 
                <input type="text" class="form-control" id="txtoccupation" name="txtoccupation" value="<?php echo set_value('txtoccupation', $value->occupation) ?>" placeholder="មុខរបរ"/>
            </div>

            <div class="col-md-6 form-group form-last"> 
                <label for="txtnationality">សញ្ជាតិ</label> 
                <input type="text" class="form-control" id="txtnationality" name="txtnationality" value="<?php echo set_value('txtnationality', $value->nationality) ?>" placeholder="សញ្ជាតិ"/>
            </div>            

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtdepartment">ផ្នែក</label><br/>   
                <?php echo form_error('txtdepartment', '<div class="error">', '</div>'); ?>
                <select class="form-control" name="txtdepartment" id="txtdepartment" value="<?php echo set_value('txtdepartment', $value->department) ?>">
                    <!--<option value="All">All</option>-->
                    <option value="General">General</option>
                    <option value="Maternity">Maternity</option>
                    <option value="Surgery">Surgery</option>         
                    <option value="Emergency">Emergency</option> 
                </select>
            </div>

            <div class="col-md-6 form-group form-last"> 
                <label for="txtphone">Phone Number</label> 
                <input type="text" class="form-control" id="txtphone" name="txtphone" value="<?php echo set_value('txtphone', $value->phone) ?>" placeholder="Phone Number"/>
            </div>            

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txthomephone">Home Number</label> 
                <input type="text" class="form-control" id="txthomephone" name="txthomephone" value="<?php echo set_value('txthomephone', $value->homePhone) ?>" placeholder="Home Number"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtcreatedate">Register Date</label> 
                <?php echo form_error('txtcreatedate', '<div class="error">', '</div>'); ?>
                <input type="date" class="form-control" id="txtcreatedate" name="txtcreatedate" value="<?php echo set_value('txtcreatedate', $value->createDate) ?>" placeholder="Register Date"/>
            </div> 

            <div class="clearfix"> </div>

            <div class="tab-main">
                <div class="tab-inner">
                    <div id="tabs" class="tabs">
                        <div class="graph">
                            <nav>
                                <ul>
                                    <li><a href="#section-1" class="icon-shop"><i class="lnr lnr-home"></i> <span>Address</span></a></li>
                                    <li><a href="#section-2" class="icon-cup"><i class="lnr lnr-users"></i> <span>Relationship</span></a></li>                            
                                </ul>
                            </nav>

                            <div class="content tab">

                                <section id="section-1" style="font-size: 16px !important;">

                                    <div class="col-md-6 form-group"> 
                                        <label for="txthomeNo">Home No</label> 
                                        <input type="text" class="form-control" id="txthomeNo" name="txthomeNo" value="<?php echo set_value('txthomeNo', $value->homeNo) ?>" placeholder="Home No"/>
                                    </div> 

                                    <div class="col-md-6 form-group form-last"> 
                                        <label for="txtstreetNo">Street No</label> 
                                        <input type="text" class="form-control" id="txtstreetNo" name="txtstreetNo" value="<?php echo set_value('txtstreetNo', $value->streetNo) ?>" placeholder="Street No"/>
                                    </div> 

                                    <div class="clearfix"> </div>

                                    <div class="col-md-6 form-group"> 
                                        <label for="txtgroupNo">Group No</label> 
                                        <input type="text" class="form-control" id="txtgroupNo" name="txtgroupNo" value="<?php echo set_value('txtgroupNo', $value->groupNo) ?>" placeholder="Group No"/>
                                    </div> 

                                    <div class="col-md-6 form-group form-last"> 
                                        <label for="txtvillageNo">Village No</label> 
                                        <input type="text" class="form-control" id="txtvillageNo" name="txtvillageNo" value="<?php echo set_value('txtvillageNo', $value->villageNo) ?>" placeholder="Village No"/>
                                    </div> 

                                    <div class="clearfix"> </div>

                                    <div class="col-md-6 form-group"> 
                                        <label for="txtcommuneNo">Commune No</label> 
                                        <input type="text" class="form-control" id="txtcommuneNo" name="txtcommuneNo" value="<?php echo set_value('txtcommuneNo', $value->communNo) ?>" placeholder="Commune No"/>
                                    </div>                                     

                                    <div class="col-md-6 form-group form-last"> 
                                        <label for="txtdistinctNo">Distinct No</label> 
                                        <input type="text" class="form-control" id="txtdistinctNo" name="txtdistinctNo" value="<?php echo set_value('txtdistinctNo', $value->distinctNo) ?>" placeholder="Distinct No"/>
                                    </div> 

                                    <div class="clearfix"> </div>

                                    <div class="col-md-6 form-group"> 
                                        <label for="txtprovinceNo">Province No</label> 
                                        <input type="text" class="form-control" id="txtprovinceNo" name="txtprovinceNo" value="<?php echo set_value('txtprovinceNo', $value->provinceNo) ?>" placeholder="Province No"/>
                                    </div> 

                                </section>

                                <section id="section-2" style="font-size: 16px !important;">

                                    <div class="col-md-6 form-group"> 
                                        <label for="txthusbandName">Husband Name</label> 
                                        <input type="text" class="form-control" id="txthusbandName" name="txthusbandName" value="<?php echo set_value('txthusbandName', $value->husbandName) ?>" placeholder="Husband Name"/>
                                    </div> 

                                    <div class="col-md-6 form-group form-last"> 
                                        <label for="txthusbandAge">Age</label> 
                                        <input type="number" class="form-control" id="txthusbandAge" name="txthusbandAge" value="<?php echo set_value('txthusbandAge', $value->husbandAge) ?>" placeholder="Husband Age"/>
                                    </div> 

                                </section>


                            </div>


                        </div>
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-default">Update</button> 
            <!--</form>--> 
            <?php echo form_close() ?>
        </div>

    </div>



</div>

<script src="<?php echo base_url() ?>public/js/cbpFWTabs.js"></script>
<script>
    new CBPFWTabs(document.getElementById('tabs'));
</script>