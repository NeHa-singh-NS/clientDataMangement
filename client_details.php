<?php include "./partials/menu.php"; ?>



<div class="container my-2">

    <?php 
        if(isset($_SESSION['client_add'])){

            echo $_SESSION['client_add'];
            unset($_SESSION['client_add']);
        }




        ?>

    <div class="card">
        <div class="card-header">
            <h1 class="text-center heading">Client Details</h1>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <p class="heading">business Details</p>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="business_name">Business Name</label>
                        <input type="text" class="form-control" name="business_name" placeholder="Name" id="">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="service_name">Select Service</label>
                        <select class="form-control" name="service_name">
                            <?php 
                                $sql = "SELECT * FROM service WHERE ";
                                $res =mysqli_query($conn,$sql);
                                $count = mysqli_num_rows($res);
                                if($count > 0){
                                    while($row=mysqli_fetch_assoc($res)){
                                        $id = $row['id'];
                                        $service_name =$row['service_name'] ;

                        ?>
                            <option value="<?php echo $id; ?>"><?php echo $service_name; ?></option>

                            <?php

                            }
                        }
                        
                        
                        ?>




                        </select>
                    </div>


                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="business_email" placeholder="Email"
                            id="inputCompany">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="phone">Contact No</label>
                        <input type="number" class="form-control" name="business_phone" placeholder="Phone" id="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="whatsapp_number">Watsapp Number </label>
                        <input type="number" class="form-control" name="whatsapp_number" placeholder="WhatsApp Number"
                            id="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="business_address">Address</label>
                        <input type="text" class="form-control" name="business_address" placeholder="Address" id="">

                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="gst_number">GST NUMBER</label>
                        <input type="number" class="form-control" name="gst_number" placeholder="GST Number" id="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cin_number">Cin Number</label>
                        <input type="number" class="form-control" name="cin_number"
                            placeholder="Corporate Identification Number" id="">
                    </div>

                </div>
                <p class="heading">bank details</p>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bank_accnt">Bank Account Number</label>
                        <input type="number" class="form-control" name="bank_accnt" placeholder="Bank Account Number"
                            id="bank_accnt">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bank_name">Bank</label>
                        <input type="text" class="form-control" name="bank_name" placeholder="Bank" id="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="ifsc_code">IFSC Code</label>
                        <input type="number" class="form-control" name="ifsc_code" placeholder="IFSC Code" id="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="accnt_holder">Account Holder Name</label>
                        <input type="text" class="form-control" name="accnt_holder" placeholder="Account Holder Name"
                            id="bank_accnt">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bank_branch">Branch</label>
                        <input type="text" class="form-control" name="bank_branch" placeholder="Branch" id="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="google_pay">Google Pay</label>
                        <input type="number" class="form-control" name="google_pay" placeholder="Google Pay" id="">
                    </div>
                </div>


                <p class="heading">Contact Details</p>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="poc_name">Name</label>
                        <input type="text" class="form-control" name="poc_name" placeholder="Name" id="poc_name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="poc_phone">Phone</label>
                        <input type="number" class="form-control" name="poc_phone" placeholder="Phone" id="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="poc_email">Email</label>
                        <input type="email" class="form-control" name="poc_email" placeholder="Email" id="">
                    </div>
                </div>



                <br />
                <button type="submit" name="submit" class="btn btn-primary ">Submit Details</button>
                <br />
        </div>

        </form>
    </div>
</div>

</div>
<?php 

function genString($length) {
    
    $numbers = "1234567890";
    $randomCode = "";
    $max = strlen($numbers) - 1;
    for ($x = 0; $x < abs($length/3); $x++) {
        $randomCode .= $numbers{mt_rand(0, $max)};
    }
    return str_shuffle($randomCode);
}

if(isset($_POST['submit'])){

    $business_name=$_POST['business_name'];
    $service_name=$_POST['service_name'];
    $business_email=$_POST['business_email'];
    $business_phone=$_POST['business_phone'];
    $whatsapp_number=$_POST['whatsapp_number'];
    $business_address=$_POST['business_address'];
    $gst_number=$_POST['gst_number'];
    $business_name=$_POST['business_name'];
    $cin_number=$_POST['cin_number'];
    
    //Bank Details
    $bank_accnt=$_POST['bank_accnt'];
    $bank_name=$_POST['bank_name'];
    $ifsc_code=$_POST['ifsc_code'];
    $accnt_holder=$_POST['accnt_holder'];
    $bank_branch=$_POST['bank_branch'];
    $google_pay=$_POST['google_pay'];

    //contact details
    $poc_name=$_POST['poc_name'];
    $poc_phone=$_POST['poc_phone'];
    $poc_email=$_POST['poc_email'];

    $business_id = genString(10);

    

    $query = "INSERT INTO `client_details`(`id`, `business_id`, `business_name`, `service_id`, `business_email`, `business_phone`, `business_address`, `gst_number`, `cin_number`, `poc_name`, `poc_email`, `whatsapp_number`, `bank_accnt`, `bank_name`, `ifsc_code`, `accnt_holder`, `bank_branch`, `google_pay`, `status`) VALUES ('','$business_id','$business_name','$service_name','$business_email','$business_phone','$business_address','$gst_number','$cin_number','$poc_name','$poc_name','$whatsapp_number','$bank_accnt','$bank_name',$ifsc_code,'$accnt_holder','$bank_branch','$google_pay','open')";

    $result = mysqli_query($conn,$query);
    if($result == true){

        $_SESSION['client_add']= "<div class='alert alert-success' role='alert'>
                                        Client Details Added Successfully.
                                    </div> ";
                                    exit();
    }else{
        
        $_SESSION['client_add']= "  <div class='alert alert-danger' role='alert'>
        Failed to Add Client Details.
    </div> ";

    }

}




?>