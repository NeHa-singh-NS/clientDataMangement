<?php include "./partials/menu.php"; ?>




<body>
    <div class="container my-3">

        <?php 
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                
                
                ?>
        <div class="card">


            <div class="card-header">
                <h1 class="text-center heading">Service Details</h1>


            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="service_name">Service Name</label>
                            <input type="text" class="form-control" name="service_name" placeholder="Name"
                                id="inputName">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" name="duration" placeholder="Duration" id="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="price">Total Price</label>
                            <input type="text" class="form-control" name="price" placeholder="Price" id="price"
                                value="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" rows="5" id=""></textarea>
                        </div>

                    </div>

                    <button type="submit" name="submit" class="btn btn-primary"> Submit </button>
                    <br>


                </form>
            </div>
        </div>

    </div>
    <?php 
    if(isset($_POST['submit'])){

    $service_name=$_POST['service_name'];
    $duration=$_POST['duration'];
    $price=$_POST['price'];
    
    $description=$_POST['description'];
    $service_code = "SERVICE".rand(000,999);

    $sql="INSERT INTO `service`(`service_name`, `description`, `service_code`, `duration`, `pricing`, `status`) VALUES ('$service_name','$description','$service_code','$duration','$price','open')";
    $res = mysqli_query($conn,$sql);
    if($res == true){
        $_SESSION['add']="<div class='alert alert-success' role='alert'>
                             Service Added Successfully.
                            </div> ";;
        

    }else{
        
        $_SESSION['add']="<div class='alert alert-success' role='alert'>
        Client Details Added Successfully.
    </div> ";

    }

    }
    
    ?>