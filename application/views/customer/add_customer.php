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
            <?php echo form_open('./admin/submitCustomer') ?>
            <?php echo $this->session->flashdata('insert'); ?>
            <div class="col-md-6 form-group"> 
                <label for="txtfname">First Name</label> 
                <?php echo form_error('txtfname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtfname" name="txtfname" value="<?php echo set_value('txtfname') ?>" placeholder="First Name"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtlname">Last Name</label> 
                <?php echo form_error('txtlname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtlname" name="txtlname" value="<?php echo set_value('txtlname') ?>" placeholder="Last Name"/>
            </div> 

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtkhmername">Khmer Name</label>                 
                <input type="text" class="form-control" id="txtkhmername" name="txtkhmername" value="<?php echo set_value('txtkhmername') ?>" placeholder="Khmer Name"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtgender">Gender</label><br/>         
                <?php echo form_error('txtgender', '<div class="error">', '</div>'); ?>
                <select name="txtgender" id="txtgender" value="<?php echo set_value('txtgender') ?>">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div> 

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtage">Age</label> 
                <?php echo form_error('txtage', '<div class="error">', '</div>'); ?>
                <input type="number" class="form-control" id="txtage" name="txtage" value="<?php echo set_value('txtage') ?>" placeholder="Age"/>
            </div>

            <div class="col-md-6 form-group"> 
                <label for="txtageType">Age Type</label><br/> 
                <select name="txtageType" id="txtageType" value="<?php echo set_value('txtageType') ?>">
                    <option value="ឆ្នាំ">ឆ្នាំ</option>
                    <option value="ខែ">ខែ</option>
                </select>
            </div>            

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtoccupation">Occupation</label> 
                <input type="text" class="form-control" id="txtoccupation" name="txtoccupation" value="<?php echo set_value('txtoccupation') ?>" placeholder="Occupation"/>
            </div>

            <div class="col-md-6 form-group form-last"> 
                <label for="txtnationality">Occupation</label> 
                <input type="text" class="form-control" id="txtnationality" value="ខ្មែរ" name="txtnationality" value="<?php echo set_value('txtnationality') ?>" placeholder="Nationality"/>
            </div>            

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txtdepartment">Department</label><br/>   
                <?php echo form_error('txtdepartment', '<div class="error">', '</div>'); ?>
                <select name="txtdepartment" id="txtdepartment" value="<?php echo set_value('txtdepartment') ?>">
                    <option value="All">All</option>
                    <option value="General">General</option>
                    <option value="Maternity">Maternity</option>
                    <option value="Surgery">Surgery</option>         
                    <option value="Emergency">Emergency</option> 
                    <option value="Labo">Labo</option> 
                </select>
            </div>

            <div class="col-md-6 form-group form-last"> 
                <label for="txtphone">Phone Number</label> 
                <input type="text" class="form-control" id="txtphone" name="txtphone" value="<?php echo set_value('txtphone') ?>" placeholder="Phone Number"/>
            </div>            

            <div class="clearfix"> </div>

            <div class="col-md-6 form-group"> 
                <label for="txthomephone">Home Number</label> 
                <input type="text" class="form-control" id="txthomephone" name="txthomephone" value="<?php echo set_value('txthomephone') ?>" placeholder="Home Number"/>
            </div> 

            <div class="col-md-6 form-group form-last"> 
                <label for="txtcreatedate">Register Date</label> 
                <?php echo form_error('txtcreatedate', '<div class="error">', '</div>'); ?>
                <input type="date" class="form-control" id="txtcreatedate" name="txtcreatedate" value="<?php echo set_value('txtcreatedate') ?>" placeholder="Register Date"/>
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
                                        <input type="text" class="form-control" id="txthomeNo" name="txthomeNo" value="<?php echo set_value('txthomeNo') ?>" placeholder="Home No"/>
                                    </div> 

                                    <div class="col-md-6 form-group form-last"> 
                                        <label for="txtstreetNo">Street No</label> 
                                        <input type="text" class="form-control" id="txtstreetNo" name="txtstreetNo" value="<?php echo set_value('txtstreetNo') ?>" placeholder="Street No"/>
                                    </div> 

                                    <div class="clearfix"> </div>

                                    <div class="col-md-6 form-group"> 
                                        <label for="txtgroupNo">Group No</label> 
                                        <input type="text" class="form-control" id="txtgroupNo" name="txtgroupNo" value="<?php echo set_value('txtgroupNo') ?>" placeholder="Group No"/>
                                    </div> 

                                    <div class="col-md-6 form-group form-last"> 
                                        <label for="txtvillageNo">Village No</label> 
                                        <input type="text" class="form-control" id="txtvillageNo" name="txtvillageNo" value="<?php echo set_value('txtvillageNo') ?>" placeholder="Village No"/>
                                    </div> 

                                    <div class="clearfix"> </div>

                                    <div class="col-md-6 form-group"> 
                                        <label for="txtcommuneNo">Commune No</label> 
                                        <input type="text" class="form-control" id="txtcommuneNo" name="txtcommuneNo" value="<?php echo set_value('txtcommuneNo') ?>" placeholder="Commune No"/>
                                    </div>                                     

                                    <div class="col-md-6 form-group form-last"> 
                                        <label for="txtdistinctNo">Distinct No</label> 
                                        <input type="text" class="form-control" id="txtdistinctNo" name="txtdistinctNo" value="<?php echo set_value('txtdistinctNo') ?>" placeholder="Distinct No"/>
                                    </div> 

                                    <div class="clearfix"> </div>

                                    <div class="col-md-6 form-group"> 
                                        <label for="txtprovinceNo">Province No</label> 
                                        <input type="text" class="form-control" id="txtprovinceNo" name="txtprovinceNo" value="<?php echo set_value('txtprovinceNo') ?>" placeholder="Province No"/>
                                    </div> 

                                </section>

                                <section id="section-2" style="font-size: 16px !important;">

                                    <div class="col-md-6 form-group"> 
                                        <label for="txthusbandName">Husband Name</label> 
                                        <input type="text" class="form-control" id="txthusbandName" name="txthusbandName" value="<?php echo set_value('txthusbandName') ?>" placeholder="Husband Name"/>
                                    </div> 

                                    <div class="col-md-6 form-group form-last"> 
                                        <label for="txthusbandAge">Age</label> 
                                        <input type="number" class="form-control" id="txthusbandAge" name="txthusbandAge" value="<?php echo set_value('txthusbandAge') ?>" placeholder="Husband Age"/>
                                    </div> 

                                </section>


                            </div>


                        </div>
                    </div>

                </div>
            </div>

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