<?php include "./partials/menu.php"; ?>






<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header ">
                <h1 class="text-center heading">Project Details</h1>
            </div>
            <div class="card-body">
                <div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="project_name">Project Name</label>
                            <input type="text" class="form-control" name="project_name" placeholder="Project Name"
                                id="">
                        </div>


                        <div class="form-group col-md-4">
                            <label for="">Select Client</label>
                            <select class="form-control" id="" name="client">
                                <option selected>Choose</option>
                                <?php 
                            $sql= "SELECT * FROM `client_details` ";
                            $res = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row=mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $business_name = $row['business_name'];
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $business_name; ?></option>


                                <?php

                                }
                            }
                            
                            ?>


                            </select>
                        </div>


                        <div class="form-group col-md-4">
                            <label for="">Select Service</label>
                            <select class="form-control" id="" name="service">
                                <option selected>Choose</option>
                                <?php
                            $sql2 = "SELECT * FROM service";
                                $res2 =mysqli_query($conn,$sql2);
                                $count2 = mysqli_num_rows($res2);
                                if($count2 > 0){
                                    while($rows=mysqli_fetch_assoc($res2)){
                                        $id = $rows['id'];
                                        $service_name =$rows['service_name'] ;

                                    ?>
                                <option value="<?php echo $id; ?>"><?php echo $service_name; ?></option>
                                <?php    
                                }
                            }
                            ?>



                            </select>
                        </div>

                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="start_date">Project Start Date</label>
                            <input type="date" class="form-control" name="start_date" placeholder="" id="start_date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="renewal_date_gap">Project Renewal Date</label>
                            <input type="date" class="form-control" name="renewal_date_gap" placeholder=""
                                id="renewal_date_gap">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Project Status</label>
                            <select class="form-control" id="" name="project_status">
                                <option selected>Choose</option>
                                <option>Completed</option>
                                <option>Ongoing</option>
                                <option>Undergoing Testing</option>


                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pricing">Total Pricing</label>
                            <input type="number" class="form-control" name="pricing" placeholder="" id="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="status">Billing Status</label>
                            <select class="form-control" id="" name="billing_status">
                                <option selected>Choose</option>
                                <option>Paid</option>
                                <option>Due</option>
                            </select>
                        </div>


                        <div class="form-group col-md-4">
                            <label for="status">Billing File</label>
                            <input type="file" class="form-control" name="billing_file" placeholder="" id="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="end_date">Project End Date</label>
                            <input type="date" class="form-control" name="end_date" placeholder="" id="">
                        </div>
                    </div>




                </div>


                <br />
                <button type="submit" name="submit" class="btn btn-primary ">Submit Details</button>
                <br />


                </form>
            </div>
        </div>

    </div>