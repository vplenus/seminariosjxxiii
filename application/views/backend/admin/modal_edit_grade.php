<?php 
$edit_data		=	$this->db->get_where('grade' , array('grade_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo ('Editar aluno');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/grade/do_update/'.$row['grade_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
            <div class="padded">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Nome');?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Ponto de classificação');?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="grade_point" value="<?php echo $row['grade_point'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Marca de');?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="mark_from" value="<?php echo $row['mark_from'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Marcar até');?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="mark_upto" value="<?php echo $row['mark_upto'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Comente');?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="comment" value="<?php echo $row['comment'];?>"/>
                    </div>
                </div>
                  <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo ('Editar nota');?></button>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>



