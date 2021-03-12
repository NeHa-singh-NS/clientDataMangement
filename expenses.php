<?php include "./partials/menu.php"; ?>







    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center heading">expenses tables</h1>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Expenses Type</label>
                            <input type="number" class="form-control" name="expense_type" placeholder="Expenses Type"
                                id="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Description</label>
                            <input type="number" class="form-control" name="description" placeholder="description"
                                id="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Amount</label>
                            <input type="number" class="form-control" name="amount" placeholder="Amount" id="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Amount Paid Date</label>
                            <input type="date" class="form-control" name="amount_paid_date" placeholder="" id="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Amount Paid By</label>
                            <input type="text" class="form-control" name="amount_paid_by" placeholder="amount paid by"
                                id="">
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="">Amount Paid To</label>
                            <input type="text" class="form-control" name="amount_paid_to" placeholder="amount paid to"
                                id="">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="start_date">Payment Mode</label>
                            <select class="form-control" id="" name="start_date">
                                <option selected>Choose</option>
                                <option>Credit Card/Debit/ATM Card</option>
                                <option>UPI</option>
                                <option>Net Banking</option>


                            </select>
                        </div>

                    </div>


                    <br />
                    <button type="submit" name="submit" class="btn btn-primary ">Submit Details</button>
                    <br />



                </form>
            </div>
        </div>

    </div>