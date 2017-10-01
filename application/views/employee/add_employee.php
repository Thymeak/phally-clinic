<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>


<div class="forms-main">
    <h2 class="inner-tittle">Add New Employee </h2>


    <div class="graph-form col-md-6" style="margin-bottom: 10%">
        <div class="form-body"> 

            <!--<form>--> 
            <?php echo form_open('./admin/submitEmployee') ?>
            <?php echo $this->session->flashdata('insert'); ?>
            <div class="form-group"> 
                <label for="txtfname">First Name</label> 
                <?php echo form_error('txtfname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtfname" name="txtfname" value="<?php echo set_value('txtfname') ?>" placeholder="First Name"/>
            </div> 

            <div class="form-group"> 
                <label for="txtlname">Last Name</label> 
                <?php echo form_error('txtlname', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtlname" name="txtlname" value="<?php echo set_value('txtlname') ?>" placeholder="Last Name"/>
            </div> 

            <div class="form-group"> 
                <label for="txtgender">Gender</label><br/>         
                <?php echo form_error('txtgender', '<div class="error">', '</div>'); ?>
                <select name="txtgender" id="txtgender" value="<?php echo set_value('txtgender') ?>">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>              

            <div class="form-group"> 
                <label for="txtdepartment">Department</label><br/>   
                <?php echo form_error('txtdepartment', '<div class="error">', '</div>'); ?>
                <select name="txtdepartment" id="txtdepartment" value="<?php echo set_value('txtdepartment') ?>">
                    <option value="All">All</option>
                    <option value="General">General</option>
                </select>
            </div>

            <div class="form-group"> 
                <label for="txtphone">Phone Number</label> 
                <input type="text" class="form-control" id="txtphone" name="txtphone" value="<?php echo set_value('txtphone') ?>" placeholder="Phone Number"/>
            </div> 

            <div class="form-group"> 
                <label for="txtusername">Username</label> 
                <?php echo form_error('txtusername', '<div class="error">', '</div>'); ?>
                <input type="text" class="form-control" id="txtusername" name="txtusername" value="<?php echo set_value('txtusername') ?>" placeholder="Username"/>
            </div>

            <div class="form-group"> 
                <label for="txtpassword">Username</label> 
                <?php echo form_error('txtpassword', '<div class="error">', '</div>'); ?>
                <input type="password" class="form-control" id="txtpassword" name="txtpassword" value="<?php echo set_value('txtpassword') ?>" placeholder="Password"/>
            </div>

            <button type="submit" class="btn btn-default">Add</button> 
            <!--</form>--> 
            <?php echo form_close() ?>
        </div>

    </div>

</div>