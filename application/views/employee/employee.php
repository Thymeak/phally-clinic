<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="active"><?php echo $current_page ?></li>
    </ol>
</div>

<div class="forms-main">
    <h2 class="inner-tittle">View Employee </h2>

    <a class="btn blue" href="<?php echo base_url() ?>admin/addEmployee">Add</a>           
    <?php echo $this->session->flashdata('message'); ?>
    <div class="graph">
        <div class="tables">

            <table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>#</th> 
                        <th>First Name</th> 
                        <th>Last Name</th> 
                        <th>User Name</th> 
                        <th>#Action</th>
                    </tr> 
                </thead> 
                <tbody> 

                    <?php $row = 0;
                    foreach ($listEmployee as $value) {
                        $row += 1; ?>                    
                        <tr> 
                            <th scope="row"><?php echo $row ?></th> 
                            <td><?php echo $value->firstname ?></td> 
                            <td><?php echo $value->lastname ?></td> 
                            <td><?php echo $value->username ?></td> 
                            <td>   
                                <a class="tooltips" onclick="btnDelete('<?php echo $value->username ?>', '<?php echo $value->empID ?>')" style="color: red !important;">    
                                    <span>Delete</span>                                   
                                    <i class="lnr lnr-trash"></i>
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

    function btnDelete(username, empID) {
        $('#lbusername').html('');
        $('#lbusername').html(username);
        $("#deleteEmpId").val(empID);
        $("#deleteModal").modal("show");
    }


</script>


<!-- Confirm Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
<?php echo form_open('admin/deletEmployee') ?>
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to delete this employee <span id="lbusername"></span> ? 
                <input type="hidden" name="deleteEmpId" id="deleteEmpId" />
            </div>
            <div class="modal-footer">                
                <button type="submit" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top: 0px !important;">Close</button>                
            </div>            
<?php echo form_close() ?>
        </div>
    </div>
</div>