<style>
	.btn-success {
		color: #fff;
    	background-color: #5cb85c;
    	border-color: #4cae4c;
	}

	.btn {
	    display: inline-block;
	    margin-bottom: 0;
	    font-weight: 400;
	    text-align: center;
	    white-space: nowrap;
	    vertical-align: middle;
	    touch-action: manipulation;
	    cursor: pointer;
	    background-image: none;
	    border: 1px solid transparent;
	    padding: 6px 12px;
	    font-size: 14px;
	    line-height: 1.42857143;
	    border-radius: 4px;
	    user-select: none;
	}
	.form-control {
	    display: block;
	    width: 100%;
	    height: 34px;
	    padding: 6px 12px;
	    font-size: 14px;
	    line-height: 1.42857143;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
	    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	}
</style>
<?php include('header.php'); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Deposit Details</b></h5>
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
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3">
        <h5>Account Details</h5>
        <div class="w3-white">
        	<form method="post" name="deposit_form" action="action.php">
        		<input type="hidden" name="deposite_action" value="yes">
	        	<table class="w3-table w3-striped w3-white">
		          <tr>
		            <td>Deposite Amount<br><input type="number" name="deposite_amount" class="form-control" required></td>
		            <td>Cheque No (Optional)<br><input type="text" id="cheque_no" name="cheque_no" class="form-control"></td>
		            <td>Comment<br><var><input type="text" name="comment" class="form-control" required></var></td>
		            <td><br><input type="submit" value="Submit" name="submit" class="btn btn-success"></td>
		          </tr>
		         </table>
	     	</form>
        </div>
        <table class="w3-table w3-striped w3-white">
        	<thead>
        		<tr>
	        		<th>Sr No</th>
	        		<th>Deposite Amount</th>
	        		<th>Cheque No</th>
	        		<th>Details</th>
	        		<th>Date & Time</th>
	        	</tr>
        	</thead>
	        	<?php $i=1;
	        	while ($row1 = mysqli_fetch_array($result1)) { 

	        		if($row1['deposite'] > 0) { 
	        	?>
		          <tr>
		          	<td><?php echo $i ?></td>
		            <td><?php echo $row1['deposite']; ?></td>
		            <td><?php echo $row1['cheque_no']; ?></td>
		            <td><?php echo $row1['comment']; ?></td>
		            <td><?php echo date('d/m/Y h:i:s a', strtotime($row1['date'])); ?></td>
		          </tr>

		        <?php $i++; } ?>
		         <?php } ?>
		</table>
      </div>
    </div>
  </div>
  <hr>


</div>


<?php include('footer.php'); ?>