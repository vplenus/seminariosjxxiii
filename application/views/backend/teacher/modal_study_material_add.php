<?php $class_info = $this->db->get('class')->result_array(); ?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo ('Adicionar material de estudo'); ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <?php echo form_open(base_url().'index.php?teacher/study_material/create' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo ('Dados'); ?></label>

                        <div class="col-sm-7">
                            <div class="date-and-time">
                                <input type="text" name="timestamp" class="form-control datepicker" data-format="D, dd MM yyyy" placeholder="date here">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo ('Título'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="title" class="form-control" id="field-1" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo ('Descrição'); ?></label>

                        <div class="col-sm-9">
                            <textarea name="description" class="form-control wysihtml5" id="field-ta" data-stylesheet-url="assets/css/wysihtml5-color.css"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo ('Turma'); ?></label>

                        <div class="col-sm-5">
                            <select name="class_id" class="form-control">
                                <option value=""><?php echo ('Selecione a turma'); ?></option>
                                <?php foreach ($class_info as $row) { ?>
                                        <option value="<?php echo $row['class_id']; ?>"><?php echo $row['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Arquivo'); ?></label>

                        <div class="col-sm-5">

                            <input type="file" name="file_name" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i> Browse" />

                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo ('Tipo de arquivo'); ?></label>

                        <div class="col-sm-5">
                            <select name="file_type" class="form-control">
                                <option value=""><?php echo ('Selecione o tipo de arquivo'); ?></option>
                                <option value="Image"><?php echo ('Imagem'); ?></option>
                                <option value="Doc"><?php echo ('Doutor'); ?></option>
                                <option value="PDF"><?php echo ('PDF'); ?></option>
                                <option value="Excel"><?php echo ('Excel'); ?></option>
                                <option value="Other"><?php echo ('Outro'); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3 control-label col-sm-offset-2">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>