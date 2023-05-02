<?php

error_reporting(0);
session_start();

include '../dbconnect.php';

$us = $_SESSION['username'];

if (isset($_GET['id'])) {
  $pid = $_GET['id'];
}

$qry = "SELECT a.*,b.* from `tbl_payment` as a INNER JOIN tbl_registration as b ON `pay_id`='$pid' and b.g_mailid=a.user";
$rslt = mysql_query($qry, $con);
$rq = mysql_fetch_array($rslt);
// echo $name = $rq['g_name'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">


  <title>Invoice receipt - Bootdey.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    .receipt-content .logo a:hover {
      text-decoration: none;
      color: #7793C4;
    }

    .receipt-content .invoice-wrapper {
      background: #FFF;
      border: 1px solid #CDD3E2;
      box-shadow: 0px 0px 1px #CCC;
      padding: 40px 40px 60px;
      margin-top: 40px;
      border-radius: 4px;
    }

    .receipt-content .invoice-wrapper .payment-details span {
      color: #A9B0BB;
      display: block;
    }

    .receipt-content .invoice-wrapper .payment-details a {
      display: inline-block;
      margin-top: 5px;
    }

    .receipt-content .invoice-wrapper .line-items .print a {
      display: inline-block;
      border: 1px solid #9CB5D6;
      padding: 13px 13px;
      border-radius: 5px;
      color: #708DC0;
      font-size: 13px;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear;
    }

    .receipt-content .invoice-wrapper .line-items .print a:hover {
      text-decoration: none;
      border-color: #333;
      color: #333;
    }

    .receipt-content {
      background: #ECEEF4;
    }

    @media (min-width: 1200px) {
      .receipt-content .container {
        width: 900px;
      }
    }

    .receipt-content .logo {
      text-align: center;
      margin-top: 50px;
    }

    .receipt-content .logo a {
      font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
      font-size: 36px;
      letter-spacing: .1px;
      color: #555;
      font-weight: 300;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear;
    }

    .receipt-content .invoice-wrapper .intro {
      line-height: 25px;
      color: #444;
    }

    .receipt-content .invoice-wrapper .payment-info {
      margin-top: 25px;
      padding-top: 15px;
    }

    .receipt-content .invoice-wrapper .payment-info span {
      color: #A9B0BB;
    }

    .receipt-content .invoice-wrapper .payment-info strong {
      display: block;
      color: #444;
      margin-top: 3px;
    }

    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .payment-info .text-right {
        text-align: left;
        margin-top: 20px;
      }
    }

    .receipt-content .invoice-wrapper .payment-details {
      border-top: 2px solid #EBECEE;
      margin-top: 30px;
      padding-top: 20px;
      line-height: 22px;
    }


    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .payment-details .text-right {
        text-align: left;
        margin-top: 20px;
      }
    }

    .receipt-content .invoice-wrapper .line-items {
      margin-top: 40px;
    }

    .receipt-content .invoice-wrapper .line-items .headers {
      color: #A9B0BB;
      font-size: 13px;
      letter-spacing: .3px;
      border-bottom: 2px solid #EBECEE;
      padding-bottom: 4px;
    }

    .receipt-content .invoice-wrapper .line-items .items {
      margin-top: 8px;
      border-bottom: 2px solid #EBECEE;
      padding-bottom: 8px;
    }

    .receipt-content .invoice-wrapper .line-items .items .item {
      padding: 10px 0;
      color: #696969;
      font-size: 15px;
    }

    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .line-items .items .item {
        font-size: 13px;
      }
    }

    .receipt-content .invoice-wrapper .line-items .items .item .amount {
      letter-spacing: 0.1px;
      color: #84868A;
      font-size: 16px;
    }

    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .line-items .items .item .amount {
        font-size: 13px;
      }
    }

    .receipt-content .invoice-wrapper .line-items .total {
      margin-top: 30px;
    }

    .receipt-content .invoice-wrapper .line-items .total .extra-notes {
      float: left;
      width: 40%;
      text-align: left;
      font-size: 13px;
      color: #7A7A7A;
      line-height: 20px;
    }

    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .line-items .total .extra-notes {
        width: 100%;
        margin-bottom: 30px;
        float: none;
      }
    }

    .receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
      display: block;
      margin-bottom: 5px;
      color: #454545;
    }

    .receipt-content .invoice-wrapper .line-items .total .field {
      margin-bottom: 7px;
      font-size: 14px;
      color: #555;
    }

    .receipt-content .invoice-wrapper .line-items .total .field.grand-total {
      margin-top: 10px;
      font-size: 16px;
      font-weight: 500;
    }

    .receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
      color: #20A720;
      font-size: 16px;
    }

    .receipt-content .invoice-wrapper .line-items .total .field span {
      display: inline-block;
      margin-left: 20px;
      min-width: 85px;
      color: #84868A;
      font-size: 15px;
    }

    .receipt-content .invoice-wrapper .line-items .print {
      margin-top: 50px;
      text-align: center;
    }



    .receipt-content .invoice-wrapper .line-items .print a i {
      margin-right: 3px;
      font-size: 14px;
    }

    .receipt-content .footer {
      margin-top: 40px;
      margin-bottom: 110px;
      text-align: center;
      font-size: 12px;
      color: #969CAD;
    }
  </style>
</head>

<body>
  <div class="receipt-content">
    <div class="container bootstrap snippets bootdey">
      <div class="row">
        <div class="col-md-12">
          <div class="invoice-wrapper">
            <div class="intro">
              Hi <strong><?php echo $rq['g_name']; ?></strong>,
              <br>
              <!-- This is the receipt for a payment of <strong>$312.00</strong> (USD) for your works -->
            </div>
            <div class="payment-info">
              <div class="row">
                <div class="col-sm-6">
                  <span>Payment No.</span>
                  <strong><?php echo $rq['transaction_id']; ?></strong>
                </div>
                <div class="col-sm-6 text-right">
                  <span>Payment Date</span>
                  <strong><?php echo $rq['pay_date']; ?></strong>
                </div>
              </div>
            </div>
            <div class="payment-details">
              <div class="row">
                <div class="col-sm-6">
                  <span>Client</span>
                  <strong>
                  <?php echo $rq['g_name']; ?>
                  </strong>
                  <p>
                  <?php echo $rq['g_mailid']; ?> <br>
                  <?php echo $rq['h_name']; ?> <br>
                  <?php echo $rq['g_phno']; ?><br>
                  <?php echo $rq['s_name']; ?><br> 
                  <?php echo $rq['zipcode']; ?><br> <br>
                    
                  </p>
                </div>
                <div class="col-sm-6 text-right">
                  <span>Payment To</span>
                  <strong>
                    Kider
                  </strong>
                  <p>
                  Fifth Avenue Street <br>
                  New York <br>
                   786543
                      <br>
                      USA <br>
                    
                  </p>
                </div>
              </div>
            </div>
            <div class="line-items">
              <div class="headers clearfix">
                <div class="row">
                  <div class="col-xs-4">Description</div>
                  <div class="col-xs-5 text-right" style="margin-left:160px;">Amount</div>
                </div>
              </div>
              <div class="items">
                <div class="row item">
                  <div class="col-xs-4 desc">
                    Service Payment
                  </div>
                  <div class="col-xs-5 amount text-right" style="margin-left:160px;">
                  <?php echo $rq['amount']; ?>
                  </div>
                </div>
              </div>
              <div class="total text-right">
                <div class="field grand-total">
                  Total <span>&#x20b9;<?php echo $rq['amount']; ?></span>
                </div>
              </div>
              <div class="print">
              <a href="#" onclick="window.print(); return false;">
                  <i class="fa fa-print"></i>
                  Print this receipt
                </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">


  </script>
</body>

</html>