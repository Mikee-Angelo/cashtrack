<div class="card col-sm-6 mx-auto">
    <div class="card-body">
        <?php echo form_open('addexpense');?>

            <div class="form-group">
                <label for="date_income"><i class="dripicons-calendar mr-2"></i>Date</label>
                <input class="form-control" type="date" name="date_income" id="date_expense" required>
            </div>

            <div class="form-group">
                <label for="time_income" class="col-form-label"><i class="fa fa-clock-o mr-2"></i>Time</label>
                <input class="form-control" type="time" name="time_income" id="time_expense" required>
            </div>

            <div class="form-group">
                <label><i class="mdi mdi-coin mr-2"></i>Amount (PHP)</label> 
                <input type="number" name="amount_expense" class="form-control" required>
            </div>

            <div class="form-group">
                <label><i class="mdi mdi-note-plus-outline mr-2"></i>Note</label> 
                <input type="number" name="note_expense" class="form-control">
            </div>

            <div class="form-group">
                <label><i class="fa fa-list-alt mr-2"></i>Categories</label>
                <select class="form-control" name="categpry_expense">
                    <option>Bills</option>
                    <option>Transport</option>
                    <option>Communication</option>
                </select>
            </div>

            <div class="form-group">
            <button type="submit" name="submit_expense"class="btn btn-primary btn-lg btn-block waves-effect waves-light">Add Expense</button>
            </div>
        <?php echo form_close();?>
    </div>
</div>

