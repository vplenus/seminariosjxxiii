
            
               <table class="table table-bordered table-hover table-striped datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div><?php echo ('Rolar');?></div></th>
                            <th><div><?php echo ('foto');?></div></th>
                            <th><div><?php echo ('Nome');?></div></th>
                            <th><div><?php echo ('Opções');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $students	=	$this->db->get_where('student' , array('class_id'=>$class_id))->result_array();
                                foreach($students as $row):?>
                        <tr>
                            <td><?php echo $row['roll'];?></td>
                            <td align="center"><img src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" class="img-circle" width="30" /></td>
                            <td><?php echo $row['name'];?></td>
                            <td>
                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_student_marksheet/<?php echo $row['student_id'];?>');" class="btn btn-default" >
                                      <i class="entypo-chart-bar"></i>
                                          <?php echo ('Ver folha de avaliação');?>
                                      </a>
                                
                                
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable();
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>