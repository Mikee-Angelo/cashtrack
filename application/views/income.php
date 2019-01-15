<?php
        echo $this->session->flashdata('regfalse');
        echo $this->session->flashdata('regtrue');
?>
<div class="card col-sm-6 mx-auto">
    <div class="card-body">
        <?php echo form_open('addincome'); ?>
            <div class="form-group">
                <label for="date_income"><i class="dripicons-calendar mr-2"></i>Date</label>
                <input class="form-control <?php echo (form_error('date_income') ? 'is-invalid' : '');?>" type="date" name="date_income" id="date_income"  value="<?php echo set_value('date_income');?>">
                <div class="invalid-feedback">
                    <?php echo form_error('date_income'); ?>
                </div>            
            </div>

            <div class="form-group">
                <label for="time_income" class="col-form-label"><i class="fa fa-clock-o mr-2"></i>Time</label>
                <input class="form-control <?php echo (form_error('time_income') ? 'is-invalid' : '');?>" type="time" name="time_income" id="time_income"  value="<?php echo set_value('time_income');?>" type="time" name="time_income" id="time_income" value="<?php echo set_value('time_income');?>">
                <div class="invalid-feedback">
                    <?php echo form_error('time_income'); ?>
                </div>   
            </div>

            <div class="form-group">
                <label><i class="mdi mdi-coin mr-2"></i>Amount (PHP)</label> 
                <input type="number" name="amount_income" value="<?php echo set_value('amount_income');?>" name="amount_income" class="form-control <?php echo (form_error('amount_income') ? 'is-invalid' : '');?>" type="number" name="amount_income" id="amount_income" value="<?php echo set_value('amount_income');?>">
                <div class="invalid-feedback">
                    <?php echo form_error('amount_income'); ?>
                </div>  
            </div>

            <div class="form-group">
                <label><i class="mdi mdi-note-plus-outline mr-2"></i>Note</label> 
                <input type="number" name="note_income" value="<?php echo set_value('note_income');?>" class="form-control <?php echo (form_error('note_income') ? 'is-invalid' : '');?>">
                <div class="invalid-feedback">
                    <?php echo form_error('note_income'); ?>
                </div>   
            </div>

            <div class="form-group">
                <label><i class="fa fa-list-alt mr-2"></i>Categories</label>
                <select class="form-control" name="category_income">
                    <?php 
                        foreach($d['ic'] as $key => $row){
                            echo "<option value='".$d['ic'][$key][1]."' >".ucwords($d['ic'][$key][1])."</option>";
                        }
                    ?>
                </select>
                <div class="invalid-feedback">
                    <?php echo form_error('category_income'); ?>
                </div>               
            </div>

            <div class="form-group">
                <button type="submit" name="submit_income" class="btn btn-primary btn-lg btn-block waves-effect waves-light">Add Income</button>
            </div>
        <?php echo form_close();?>
    </div>
</div>

