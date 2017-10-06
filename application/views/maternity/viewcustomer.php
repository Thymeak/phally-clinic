<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>

<div class="forms-main">
    <h2 class="inner-tittle"><?php echo $page_title ?> </h2>

    <!--<a class="btn blue" href="<?php echo base_url() ?>admin/addCustomer">Add</a>-->           

    <div class="graph">
        <div class="tables">

            <table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>#</th> 
                        <th>First Name</th> 
                        <th>Last Name</th> 
                        <th>Full Name</th> 
                        <th>Khmer Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Department</th>
                        <th>Phone Number</th>
                        <th>#Action</th>
                    </tr> 
                </thead> 
                <tbody> 

                    <?php
                    $row = 0;
                    foreach ($listCustomer as $value) {
                        $row += 1;
                        ?>                    
                        <tr> 
                            <th scope="row"><?php echo $row ?></th> 
                            <td><?php echo $value->firstname ?></td> 
                            <td><?php echo $value->lastname ?></td> 
                            <td><?php echo $value->fullname ?></td> 
                            <td><?php echo $value->khmername ?></td> 
                            <td><?php echo $value->gender ?></td> 
                            <td><?php echo $value->age ?> <?php echo $value->ageType ?></td> 
                            <td><?php echo $value->department ?></td> 
                            <td><?php echo $value->phone ?></td> 
                            <td style="text-align: center;font-size: 18px;">   
                                <a class="tooltips" href="<?php echo base_url() . $create_action . $value->custID; ?>">    
                                    <span>Add</span>                                   
                                    <i class="lnr lnr-file-add"></i>
                                </a>
                                <a class="tooltips" onclick="btnDelete('<?php echo $value->fullname ?>', '<?php echo $value->custID ?>')" style="color: green !important;">    
                                    <span>View</span>                                   
                                    <i class="lnr lnr-eye"></i>
                                </a>
                            </td>
                        </tr> 
                    <?php } ?>
                </tbody> 
            </table>

        </div>

    </div>


</div>

<script>

    $(document).ready(function () {



    });

    function btnDelete(fullname, custID) {
        $('#lbfullname').html('');
        $('#lbfullname').html(fullname);
        $("#deletecustID").val(custID);
        $("#deleteModal").modal("show");
    }


</script>


<!-- Confirm Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo form_open('admin/deleteCustomer') ?>
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to delete this customer " <span id="lbfullname"></span> " ? 
                <input type="hidden" name="deletecustID" id="deletecustID" />
            </div>
            <div class="modal-footer">                
                <button type="submit" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top: 0px !important;">Close</button>                
            </div>            
            <?php echo form_close() ?>
        </div>
    </div>
</div>