<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<link rel="shortcut icon" href="{{ asset('/1.png') }}">
	<style>
		.table{
			border-collapse: collapse;
			font-family: arial;
		} 
		.table td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 2px;
		  font-family: arial;
		}
		.table th {
		  background-color: #eee; 
		  color: black;
		  font-family: arial;
		}
	</style>
</head>
<body>
<table style="width: 100%; border: none !important;">
	<tr style="width: 100%;">
		<td style="width: 100%;">
			<table style="width: 100%;">
				<tr style="width: 100%;">
					<td style="width: 50%; text-align: left;">
						<table style="width: 100%;">
							<tr style="width: 100%;">
								<td style="width: 30%; text-align: left;">
									<img src="{{public_path('Website/images/logo/logo.jpg')}}" alt="Moirai"  class="img-fluid" style="height: 100px; padding-bottom: 10px;">
								</td>
							</tr>
							<tr style="width: 100%;">
								<td style="font-size: 22px; margin-bottom: 0px; width: 100%; font-weight: 600;"> Tax Invoice</td>
							</tr>							
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	

	<tr style="width: 100%;">
		<td style="width: 100%;">
			<table style="width: 100%; border-top: 4px dotted #000;">
				<tr style="width: 100%;">
					<td  style="width: 30%;">
						<table style="width: 100%;">
							<tr style="width: 100%;">
								<td style="width: 100%; margin-top: 0px; margin-bottom: 0px; font-size: 14px; text-align: left; font-weight: 600; "> Customer Name : <span style="font-weight: 600; font-size: 14px; padding-left:15px;">{{$billing_user_info->name}}</span></td>
							</tr>							
                        	<tr style="width: 100%;">
								<td style="width: 100%; margin-top: 0px; margin-bottom: 0px; font-size: 14px; text-align: left; font-weight: 600; "> Invoice Number : <span style="font-weight: 600; font-size: 14px; padding-left:15px;">{{$orderDetails->order_id}}</span></td>
							</tr>
							
						</table>
					</td>
					<td  style="width: 30%;">
						<table style="width: 100%;">
							<tr style="width: 100%; padding-top:0px!important;">
								<td style="width: 100%; margin-top: 0px; margin-bottom: 0px; font-size: 14px; text-align: left; font-weight: 600; "> Phone Number : <span style="font-weight: 600; font-size: 14px; padding-left:15px;">Demo12345</span></td>
							</tr> 					
							<tr style="width: 100%;">								 
								<td style="width: 100%; margin-top: 0px; margin-bottom: 0px; font-size: 14px; text-align: left; font-weight: 600; "> Invoice Date : <span style="font-weight: 600; font-size: 14px; padding-left:15px;">{{$orderDetails->created_at}}</span></td>
							</tr> 
						</table>
					</td>
					
				</tr>
			</table>
		</td>
	</tr>


	 
	
	<tr style="width: 100%;">
		<td style="width: 100%;">
			@if(count($order)>0)
			<table style="width: 100%;" class="table">  
				<tr>
					<td style="border: 1px solid black;text-align: center;font-weight: bold;">Sr.No.</td> 
					<td style="border: 1px solid black;text-align: center;font-weight: bold;" colspan="4">Product Name</td>
					<td style="border: 1px solid black;text-align: center;font-weight: bold;">Quantity</td>
					<td style="border: 1px solid black;text-align: center;font-weight: bold;">Price</td> 
				</tr> 
				<?php
					$f = 0;
					$copoun1= 0;
					$count = 1;
					$t_gst = 0;
					$dis_count = 0;
				?> 	
			 
				 @foreach($order as $row)					
					<tr>
						<td style="border: 1px solid black;text-align: center;">{{$count++}}</td>	  
						<td style="border:1px solid black;" colspan="4">{{$row->prod_name}} </td> 
						<td style="border: 1px solid black;text-align: center;">{{$row->quantity}}</td>  
						<td style="border: 1px solid black;text-align: center;">{{($row->price)}}</td> 
					</tr>
				@endforeach 			
				
				<tr style="width: 100%;">
					<td colspan="5"></td>
						<td colspan="" style="font-weight: 400; color: black; text-align: left; font-size:14px;">Total Discount
						</td>
						<td style="text-align: center;  font-size:14px;">Rs <?php echo round($dis_count,2); ?></td> 
				</tr>
				<?php if($orderDetails->shipping_charge != null) {?>
					<tr style="width: 100%;">
						<td colspan="5"></td>
							<td  style="font-weight: 400; color: black; text-align: left; font-size:14px;">Shipping Charges
							</td>
							<td  style="text-align: center;  font-size:14px;">Rs 
								{{round($orderDetails->shipping_charge)}}
							</td> 
						</tr>
					<?php } ?>
				<tr style="width: 100%;">
					<td  style="text-align: right;" colspan="5"></td>					
					<td  style="font-weight: 700; color: black;  padding-top:10px; padding-bottom:10px;">TOTAL AMOUNT:</td>
					<td style=" background-color: #eee; text-align: center; padding-top:10px; padding-bottom:10px;">Rs {{round($orderDetails->amount)}}</td> 
				</tr> 
				<tr style="width: 100%;">
					<td colspan="7" style="margin-top: 5px; font-size: 12px; font-weight: 100; width: 100%; text-align:center;">Moirai
					</td>
				</tr>
            	<tr style="width: 100%;">
					<td colspan="7" style="font-weight: 700; color: black; text-align: center; ">All Prices Inclusive of GST.
					</td>
				</tr>
				<tr style="width: 100%;">
					<td colspan="7" style="font-weight: 700; color: black; text-align: left; padding-left:10px;">Terms & Conditions :
					</td>
				</tr>
			</table>
			@else
	            No Record found
			@endif
		</td>
	</tr>
</table>
{{-- <script type="text/javascript">
      window.onload = function() { window.print(); }
 </script> --}}
</body>
</html>