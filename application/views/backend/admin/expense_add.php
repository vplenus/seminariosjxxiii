<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo ('Adicionar despesas');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/expense/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Título');?></label>
                        
						<div class="col-sm-6">
							<input type="text" class="form-control" name="title" data-validate="required" data-message-required="<?php echo ('Valor obrigatório');?>" value="" autofocus>
						</div>
					</div>

					<div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Categoria');?></label>
                        <div class="col-sm-6">
                            <select name="expense_category_id" class="form-control" required>
                                <option value=""><?php echo ('Selecione a categoria de despesa');?></option>
                                <?php 
                                	$categories = $this->db->get('expense_category')->result_array();
                                	foreach ($categories as $row):
                                ?>
                                <option value="<?php echo $row['expense_category_id'];?>"><?php echo $row['name'];?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                    </div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Descrição');?></label>
                        
						<div class="col-sm-6">
							<input type="text" class="form-control" name="description" value="" >
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Quantia');?></label>
                        
						<div class="col-sm-6">
							<input type="text" class="form-control" name="amount" value="" >
						</div> 
					</div>

					<div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Método');?></label>
                        <div class="col-sm-6">
                            <select name="method" class="form-control">
                                <option value="1"><?php echo ('Dinheiro');?></option>
                                <option value="2"><?php echo ('Verifique');?></option>
                                <option value="3"><?php echo ('Cartão');?></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Dados');?></label>
                        <div class="col-sm-6">
                            <input type="text" class="datepicker form-control" name="timestamp"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo ('Adicionar despesas');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>