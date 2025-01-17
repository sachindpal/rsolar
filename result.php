<?php include 'header.php';?>
<?php
session_start();
if(!isset($_SESSION['calculation_id'])){
    header("Location: calculator.php");
} 
?>
<div class="blur1">
 <section class="py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
          	<img src="img/check_circle.svg" width="50">
         <h1>Your roof is great for <span class="sys_rec">3.27</span>kW solar!</h1>
                 <p>Payback in about <span id="pay_back">3-4</span> years. ₹0-down financing options available.</p> 
          </div>  
          </div>         
        </div>     
    </section>


    <section>
    	<div class="container">
    		 <div class="row">
    		 	<div class="col-md-3">
                    <div class="border corner px-3 py-4">                      
                        <div>
                            <p class="mb-0"><img src="img/bolt.png" class="mr-3">Capacity required <img src="img/help.png" data-toggle="tooltip" title="Your current energy consumption based on your monthly bill and property type"></p>
                            <h1><span id="cp_required">2.9</span> kW</h1>
                        </div>                       
                    </div>
    		 		
    		 		<div class="border corner px-3 py-4 mt-4">
    		 			<p><img src="img/solar_power1.png" class="mr-3">Solar system size <img src="img/help.png" data-toggle="tooltip" title="The system recommendation is based on your monthly bill, location, property type, and average energy consumption pattern. The area required is determined by the recommended system and panel type to ensure the best offers."></p>
                        <div>
                            <p class="mb-0"><img src="img/solar_power1.png" class="mr-3">System recommended </p>
                            <h1><span class="sys_rec">2.9</span>kW</h1>
                        </div>    		 		
    		 			<div class="mt-3">
    		 				<p class="mb-0"><img src="img/pageless.png" class="mr-3">Area required </p>
    		 				<h1><span id="area_req">292</span> sqft</h1>
    		 			</div>
                        <div class="mt-3">
                            <p class="mb-0"><img src="img/manufacturing.png" class="mr-3">Panel type </p>
                            <h2 id=""><span id="panel_type">DCR</span> module</h2>
                        </div>
    		 		</div>
    		 	</div>
                <div class="col-md-3">
                    <div class="border corner px-3 py-4">
                        <p><img src="img/savings.png" class="mr-3">Monthly savings <img src="img/help.png" data-toggle="tooltip" title="With r-solar, you can lower your electricity bills and start saving from day one based on your daytime energy use."></p>

                        <div class="row text-center">
                             <div class="col-6">
                                 <div class="progress  mt-5 mb-5">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">      
                                </div>
                              </div>

                              <h6 class="mb-0">₹<span id="current_bill">1,700</span></h6>
                              <p>Current bill</p>                           
                             </div>
                              <div class="col-6">
                                 <div class="progress  mt-5 mb-5">
                                <div class="progress-bar" role="progressbar" aria-valuenow="7200" aria-valuemin="0" aria-valuemax="100" style="width:20%">      
                                </div>
                              </div>    
                              <h6 class="mb-0">₹<span id="r_solar_bill">60</span></h6>
                              <p>r - solar bill</p>                     
                             </div>

                        </div>
                    </div>

                </div>
    		 	<div class="col-md-6"> 
                  <div class="border corner p-4">
                    <div class="row mb-4">
                        <div class="ol-md-6">
                             <p class="mb-0"><img src="img/money_bag.png" class="mr-2">Lifetime savings (25 years) <img src="img/help.png" data-toggle="tooltip" title="System cost and Lifetime savings show a comparison between the initial cost of your solar system (Inclusive of all discounts) and your total savings over the next 25 years. ROI shows your net financial returns from solar. In comparison, a similar investment in FDs gives 6~7% returns post tax while mutual funds give about 12% returns."></p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                             <form class="form-inline" >
                                  <label >Payment plan:</label>
                                  <select>
                                      <option value="">Cash</option>
                                      <option value="">Finance</option>
                                  </select>
                                   <img src="img/help.png" class="ml-2" data-toggle="tooltip" title="Based on your payment plan—cash or financing—the system cost, lifetime savings, and ROI will vary.">                              
                                </form>
                        </div>
                    </div>
                       <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                       <div class="row mt-5">
                           <div class="col-md-4">
                                <p class="mb-0"><img src="img/solar_power1.png" class="mr-2">System cost </p>
                                <h4>₹<span id="system_cost_up">1.07</span> Lakh</h4>
                           </div>
                           <div class="col-md-5">
                                <p class="mb-0"><img src="img/money_bag.png" class="mr-2">Lifetime savings </p>
                                <h4>₹<span id="life_time_saving">7.08</span> Lakh</h4>
                           </div>
                           <div class="col-md-3">
                                <p class="mb-0"><img src="img/trending_up.png" class="mr-2">ROI </p>
                                <h4><span id="r_o_i">17.4</span></h4>
                           </div>
                       </div>
                  </div>  		 		
    		 	</div>
    		 </div>
    	</div>
    </section>


    <section class="py-5">
    	<div class="container">
    		 <div class="row">
    		 	  <div class="col-md-6">
    		 	  	  <div class="border corner p-4">
    		 	  	  	  <p class="mb-0"><img src="img/public.png" class="mr-2">Contribution to environment</p>


    		 	  	  	  <div class="row text-center mt-4">
    		 	  	  	  	 <div class="col-md-4">
    		 	  	  	  	 	 <img src="img/Forest.png" class="w-75">
    		 	  	  	  	 	 <p class="mb-0 mt-2"><img src="img/nature.png" class="mr-1">Trees added</p>
    		 	  	  	  	 	 <h2 id="trees_added">210</h2>
    		 	  	  	  	 </div>
    		 	  	  	  	 <div class="col-md-4">
    		 	  	  	  	 	 <img src="img/Car.png" class="w-100">
    		 	  	  	  	 	 <p class="mb-0 mt-2"><img src="img/directions_car.png" class="mr-1">Cars off the road</p>
    		 	  	  	  	 	 <h2 id="cars_of_the_road">4</h2>
    		 	  	  	  	 </div>
                              <div class="col-md-4">
                                 <img src="img/Factory.png" class="w-75">
                                 <p class="mb-0 mt-2"><img src="img/factory2.png" class="mr-1">Carbon emission saving</p>
                                 <h2 id="carbon_emit">4</h2>
                             </div>
    		 	  	  	  </div>
    		 	  	  </div>
    		 	  </div>

    		 	   <div class="col-md-6">
    		 	  	  <div class="border corner p-4">
    		 	  	  	  <p class="mb-0"><img src="img/flag.png" class="mr-2">Your solar journey</p>


    		 	  	  	  <div class="row text-center mt-4">
    		 	  	  	  	 <div class="col-md-4">
                                <h5>Step 1</h5>
    		 	  	  	  	 	 <img src="img/step-1.png" class="w-75">
    		 	  	  	  	 	 <p class="mb-0 mt-2">Run the Calculator</p>
    		 	  	  	  	 	 
    		 	  	  	  	 </div>
    		 	  	  	  	 <div class="col-md-4">
                                <h5>Step 2</h5>
                                 <img src="img/step-2.png" class="w-75">
                                 <p class="mb-0 mt-2">Schedule your site survey</p>
                                 
                             </div>
                              <div class="col-md-4">
                                <h5>Step 3</h5>
                                 <img src="img/step-3.png" class="w-75">
                                 <p class="mb-0 mt-2">Buy solar and reap benefits</p>
                                 
                             </div>
    		 	  	  	  </div>
    		 	  	  </div>
    		 	  </div>
    		 </div>
    	</div>
    </section>


    <section class="py-5">
    	<div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                     <h1 class="mb-md-4">Payment plans</h1>
                </div>
            </div>
    		 <div class="row mt-5">
    		 	 <div class="col-md-8 mx-auto">
    		 	 	 <div class="row">
    		 	 	 	 <div class="col-md-6 mb-3">
    		 	 	 	 	<div class="card1 cardc corner p-3 position-relative ">
                                <div class="text-center card-top">
                                    <p class="mb-0 py-2"><strong>Best value (All discount + Subsidy)</strong></p>
                                </div>
    		 	 	 	 		 <p class="mb-0 mt-2"><img src="img/payment.png" class="mr-2">Cash payment plan</p>
    		 	 	 	 		 <p class="mt-4"><span class="h2"><strong>₹<span id="system_cost_appr">1.07</span> Lakh</strong></span> <small>approx.</small></p>

    		 	 	 	 		 <a href="tel:9407059000"><button class="common-btn2 btn bg5 btn-block">Call Now</button></a>

    		 	 	 	 		 <table class="table mt-4 pricecard">
    		 	 	 	 		 	<tr>
    		 	 	 	 		 		<th>₹ <span id="system_cost_cash">2,10,000</span></th>
    		 	 	 	 		 		<th class="text-right">System cost</th>
    		 	 	 	 		 	</tr>
    		 	 	 	 		 	<tr>
    		 	 	 	 		 		<td><span id="pm_surya_cash">78,000</span></td>
    		 	 	 	 		 		<td class="text-right">PM Surya Subsidy</td>
    		 	 	 	 		 	</tr>
    		 	 	 	 		 	<tr>
    		 	 	 	 		 		<td id="r_solar_discount">₹ 21,000</td>
    		 	 	 	 		 		<td class="text-right">10% r-solar discount</td>
    		 	 	 	 		 	</tr>
    		 	 	 	 		 	<tr>
    		 	 	 	 		 		<td>₹ <span id="cash_dis">4,000</span></td>
    		 	 	 	 		 		<td class="text-right">Cash discount</td>
    		 	 	 	 		 	</tr>
    		 	 	 	 		 </table>
    		 	 	 	 	</div>
    		 	 	 	 </div>
                         <div class="col-md-6">
                            <div class="border cardc corner p-3">
                                 <p class="mb-0 mt-2"><img src="img/currency_rupee_circle.png" class="mr-2">Finance payment plan</p>
                                 <p class="mt-4"><span class="h2"><strong><span id="month_emi">1,289</span>*</strong></span> <small>/ month EMI</small></p>

                                 <a href="tel:9407059000"><button class="common-btn2 btn bg5 btn-block">Call Now</button></a>

                                 <table class="table mt-4 pricecard">
                                    <tr>
                                        <th>₹ <span id="system_fin_cost">2,10,000</span></th>
                                        <th class="text-right">System cost</th>
                                    </tr>
                                    <tr>
                                        <td><span id="pm_surya_fina">78,000</span></td>
                                        <td class="text-right">PM Surya Subsidy</td>
                                    </tr>
                                    <tr>
                                    <td id="r_solar_discount_finance">₹ 21,000</td>
                                        <td class="text-right">10% r-solar discount</td>
                                    </tr>
                                    <tr>
                                        <th>₹ <span id="after_discount">1,11,000</span></th>
                                        <th class="text-right">After discount</th>
                                    </tr>
                                     <tr>
                                        <td id="interest_rate">7%</td>
                                        <td class="text-right">Interest rate</td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <form>
                                                <select id="mySelect">
                                                    
                                                </select>
                                            </form>
                                        </td>
                                        <td class="text-right">Loan term</td>
                                    </tr>
                                    <tr>
                                        <td>₹ <span id="total_cost">1,54,656</span></td>
                                        <td class="text-right">Total cost</td>
                                    </tr>
                                 </table>
                            </div>
                         </div>
    		 	 	 </div>
    		 	 </div>
    		 </div>
    	</div>
    </section>


    <section class="bg-grey mt-5 mcenter">
        <div class="container">
           <div class="row py-5 align-items-center">
            
              <div class="col-md-6 ">
                 <h4>Let’s power your home, your business, and your future—one rooftop at a time.</h4>
                 <p>Contact Us today to be part of the solar revolution!</p>
              </div>
              <div class="col-md-6 text-md-right">
                  <button class="common-btn2 btn bg5">Contact Us</button>
                  
              </div>
           </div>
        </div>
    </section>


</div>


<!-- The Modal -->





<?php include 'footer.php';?>

<script>
    $(document).ready(function(){
        
       function get_cash_calculation(){
        $.ajax({
            url: 'finalCalculation.php', // PHP file to handle the request
            type: 'POST',
            data: {
                function_name: 'getCashCalculation', // Name of the PHP function to call
                params: [`<?php echo $_SESSION['calculation_id']; ?>`] // Parameters to pass to the function
            },
            success: function(response){
            //   console.log('response',response)

              const res = JSON.parse(response)
              if(!res.status){
                toastr.error('Error',res.message)

              }else{
                //  window.location.href = 'result.php';
                // $('#myModal').hide()
               let result =  JSON.parse(response).data;
               if(result){
                
                $('#cp_required').html(result.capacityRequired.toFixed(2))
                $('#pm_surya_cash').html(result.PM_Surya_Subsidy)
                $('#r_solar_discount').html(result.r_solar_discount)
                $('.sys_rec').html(result.system_recommended)
                $('#area_req').html(result.area_required)
                $('#panel_type').html(result.panel_type)
                $('#current_bill').html(result.bill)
                $('#r_o_i').html(result.ROI)
                $('#trees_added').html(result.trees_added)
                $('#cars_of_the_road').html(result.cars_of_the_road)
                $('#carbon_emit').html(result.carbon_emission_saving)
                $('#system_cost_up').html((result.system_cost/100000).toFixed(2))
                $('#system_cost_appr').html((result.system_cost/100000).toFixed(2))
                $('#system_cost_cash').html(result.system_cost)
                $('#life_time_saving').html((result.lifetime_savings/100000).toFixed(2))
                $('#r_solar_bill').html(parseInt(result.solar_bill))
                $('#cash_dis').html(result.cash_discount)
                $('#pay_back').html(result.payback)
                
               }

              }
             
                // $('#response').html(response); // Display the response from the server
            },
            error: function(xhr, status, error) {
                $('#response').html('Error: ' + error);
            }
        });
       }



       function get_finance_calculation(loan_term=1){
        $.ajax({
            url: 'finalCalculation.php', // PHP file to handle the request
            type: 'POST',
            data: {
                function_name: 'getFinanceCalculation', // Name of the PHP function to call
                params: [`<?php echo $_SESSION['calculation_id']; ?>`,loan_term] // Parameters to pass to the function
            },
            success: function(response){
            //   console.log('response',response)

              const res = JSON.parse(response)
              if(!res.status){
                toastr.error('Error',res.message)

              }else{
                //  window.location.href = 'result.php';
                // $('#myModal').hide()
               let result =  JSON.parse(response).data;
               if(result){
                console.log('result',result)
                
                $("#month_emi").html(result.month_emi)
                $("#system_fin_cost").html(result.system_cost)
                $("#pm_surya_fina").html(result.PM_Surya_Subsidy)
                $("#r_solar_discount_finance").html(result.r_solar_discount)
                $("#after_discount").html(result.after_discount)
                $("#interest_rate").html(result.interest_rate)
                $("#total_cost").html(result.total_System_cost)

                let repeatCount = 10;

                // Reference to the select element
                let selectElement = document.getElementById("mySelect");
                selectElement.innerHTML = "";
                // Loop to create and append options
                for (let i = 1; i <= repeatCount; i++) {
                    let option = document.createElement("option");
                    option.value = i; // Option value
                    if(i==loan_term){
                        option.selected = true; // Option value

                    }
                    option.textContent = i+" Year "; // Option text
                    selectElement.appendChild(option); // Append to select element
}

               }

              }
             
                // $('#response').html(response); // Display the response from the server
            },
            error: function(xhr, status, error) {
                $('#response').html('Error: ' + error);
            }
        });
       }

       $("#mySelect").on("change",(target)=>{
        console.log(target.target.value)
        get_finance_calculation(target.target.value)
       })

       get_cash_calculation()
       get_finance_calculation()
});
</script>