-<?php include('header.php'); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Welcome to Raigad Bank</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-money w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $balance_amt; ?>.Cr</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Balance</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-money w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $deposite_amt; ?>.Cr</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Deposite</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-money w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $withdraw_amt; ?>.Cr</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Withdraw</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $transaction_cnt; ?>0</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Transactions</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Our Branches</h5>
        <img src="https://www.w3schools.com/w3images/region.jpg" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="w3-twothird">
        <h5>Account Details</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-bank w3-text-blue w3-large"></i></td>
            <td>Account Type</td>
            <td><i><b>Saving Account</b></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-money w3-text-red w3-large"></i></td>
            <td>Account Balance</td>
            <td><i><b><?php echo $balance_amt; ?>.Cr</b></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-link w3-text-yellow w3-large"></i></td>
            <td>FD Link</td>
            <td><i><b><a href="#">Click Here</a></b></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-book w3-text-red w3-large"></i></td>
            <td>Card Number</td>
            <td><i><b>675823169465</b></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>MIRC</td>
            <td><i><b>ABCD1563240</b></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-red w3-large"></i></td>
            <td>IFSC</td>
            <td><i><b>006161</b></i></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>

<?php include('footer.php'); ?>