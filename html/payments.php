<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../jquery-3.6.0.min.js" type="text/javascript"> </script>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/payments.css">
    <link rel="stylesheet" href="../css/newPayment.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">



</head>

<body>
    <header class="navbar">
        <img src="../img/logo2.jpg" alt="gym logo">
        <ul>
            <li><a href="index.html" class="active">Home </a></li>
            <li><a href="payments.html">Payments </a></li>
            <li><a href="newmember.html">New Member </a></li>
            <li><a href="dataTable.html">All Member </a></li>
        </ul>
    </header>

        <!-- <div class="container">
            <h2 id='h2'>Payments  <small>MARCH 2021 </small></h2>
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-1">GYM Id</div>
                    <div class="col col-2"> Name</div>
                    <div class="col col-3"> Due Date </div>
                    <div class="col col-4">Payment Status</div>
                </li>
                <li class="table-row">
                    <div class="col col-1" data-label="Job Id">42235</div>
                    <div class="col col-2" data-label="Customer Name">John Doe</div>
                    <div class="col col-3" data-label="Amount">03</div>
                    <div class="col col-4" data-label="Payment Status">Done</div>
                </li>
                <li class="table-row">
                    <div class="col col-1" data-label="Job Id">42442</div>
                    <div class="col col-2" data-label="Customer Name">Jennifer Smith</div>
                    <div class="col col-3" data-label="Amount">0</div>
                    <div class="col col-4" data-label="Payment Status">Done</div>
                </li>
                <li class="table-row">
                    <div class="col col-1" data-label="Job Id">42257</div>
                    <div class="col col-2" data-label="Customer Name">Akash</div>
                    <div class="col col-3" data-label="Amount">0</div>
                    <div class="col col-4" data-label="Payment Status">Done</div>
                </li>
                <li class="table-row">
                    <div class="col col-1" data-label="Job Id">42311</div>
                    <div class="col col-2" data-label="Customer Name">John Carper</div>
                    <div class="col col-3" data-label="Amount">01</div>
                    <div class="col col-4" data-label="Payment Status">Pending</div>
                </li>
            </ul>
        </div> -->

        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Gym Id</th>
                            <th>Name</th>
                            <th>Payment type</th>
                            <th>Date of Payment</th>
                            <!-- <th>Customer Name</th>-->
        
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php get_payment(); ?>
                    </tbody>
                </table>


          <footer>
            <div>
               
            <div id="contact">
                <button type="button" class="btn btn-warning btn-lg btn-block">+ New Payment</button>
            </div>
            
            <div id="contactForm">
            
                <h1>New Payement Entry</h1>
                <small>March 2021</small>
            
                <form action="func.php" method="post">
                    <input placeholder="Gym Id" type="text" name= "gym_id" required />
                    <input placeholder="name" type="text" name="name" required />
                    Payment Type:
                <select name="payment_type" id="pay-select">
    <option value="cash">Cash</option>
    <option value="upi">Upi</option>
    <option value="other">Other</option>
                    
                    <input name="date_of_payment" type="date" required />
                   
                    <input class="formBtn" name="pay_submit" value= "pay" type="submit" />
                   
                </form>
            </div>
            </div>
           </footer>
            <script src="../js/popupPayment.js"> </script> 
</body>
</html> 