<?php include 'header.php';?>
<?php
session_start();

if(!isset($_SESSION['basic_info_data'])){
    header("Location: calculator.php");
} 
?>
<div class="blur blur1">
 <section class="py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
          	<img src="img/check_circle.svg" width="50">
         <h1>Your roof is great for 3.27kW solar!</h1>
                 <p>Payback in about 3-4 years. ₹0-down financing options available.</p> 
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
                            <h1>2.9 kW</h1>
                        </div>                       
                    </div>
    		 		
    		 		<div class="border corner px-3 py-4 mt-4">
    		 			<p><img src="img/solar_power1.png" class="mr-3">Solar system size <img src="img/help.png" data-toggle="tooltip" title="The system recommendation is based on your monthly bill, location, property type, and average energy consumption pattern. The area required is determined by the recommended system and panel type to ensure the best offers."></p>
                        <div>
                            <p class="mb-0"><img src="img/solar_power1.png" class="mr-3">System recommended </p>
                            <h1>3.27kW</h1>
                        </div>    		 		
    		 			<div class="mt-3">
    		 				<p class="mb-0"><img src="img/pageless.png" class="mr-3">Area required </p>
    		 				<h1>292 sqft</h1>
    		 			</div>
                        <div class="mt-3">
                            <p class="mb-0"><img src="img/manufacturing.png" class="mr-3">Panel type </p>
                            <h2>DCR module</h2>
                        </div>
    		 		</div>
    		 	</div>
                <div class="col-md-3">
                    <div class="border corner px-3 py-4">
                        <p><img src="img/savings.png" class="mr-3">Monthly savings <img src="img/help.png" data-toggle="tooltip" title="With r-solar, you can lower your electricity bills and start saving from day one based on your daytime energy use."></p>

                        <div class="row text-center">
                             <div class="col-6">
                                 <div class="progress  mt-5 mb-5">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">      
                                </div>
                              </div>

                              <h6 class="mb-0">₹1,700</h6>
                              <p>Current bill</p>                           
                             </div>
                              <div class="col-6">
                                 <div class="progress  mt-5 mb-5">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">      
                                </div>
                              </div>    
                              <h6 class="mb-0">₹60</h6>
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
                                <h4>₹1.07 Lakh</h4>
                           </div>
                           <div class="col-md-5">
                                <p class="mb-0"><img src="img/money_bag.png" class="mr-2">Lifetime savings </p>
                                <h4>₹7.08 Lakh</h4>
                           </div>
                           <div class="col-md-3">
                                <p class="mb-0"><img src="img/trending_up.png" class="mr-2">ROI </p>
                                <h4>17.4%</h4>
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
    		 	  	  	  	 	 <h2>210</h2>
    		 	  	  	  	 </div>
    		 	  	  	  	 <div class="col-md-4">
    		 	  	  	  	 	 <img src="img/Car.png" class="w-100">
    		 	  	  	  	 	 <p class="mb-0 mt-2"><img src="img/directions_car.png" class="mr-1">Cars off the road</p>
    		 	  	  	  	 	 <h2>4</h2>
    		 	  	  	  	 </div>
                              <div class="col-md-4">
                                 <img src="img/Factory.png" class="w-75">
                                 <p class="mb-0 mt-2"><img src="img/factory2.png" class="mr-1">Carbon emission saving</p>
                                 <h2>4</h2>
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
    		 	 	 	 		 <p class="mt-4"><span class="h2"><strong>₹1.07 Lakh</strong></span> <small>approx.</small></p>

    		 	 	 	 		 <a href="tel:9407059000"><button class="common-btn2 btn bg5 btn-block">Call Now</button></a>

    		 	 	 	 		 <table class="table mt-4 pricecard">
    		 	 	 	 		 	<tr>
    		 	 	 	 		 		<th>₹ 2,10,000</th>
    		 	 	 	 		 		<th class="text-right">System cost</th>
    		 	 	 	 		 	</tr>
    		 	 	 	 		 	<tr>
    		 	 	 	 		 		<td>₹ 78,000</td>
    		 	 	 	 		 		<td class="text-right">PM Surya Subsidy</td>
    		 	 	 	 		 	</tr>
    		 	 	 	 		 	<tr>
    		 	 	 	 		 		<td>₹ 21,000</td>
    		 	 	 	 		 		<td class="text-right">10% r-solar discount</td>
    		 	 	 	 		 	</tr>
    		 	 	 	 		 	<tr>
    		 	 	 	 		 		<td>₹ 4,000</td>
    		 	 	 	 		 		<td class="text-right">Cash discount</td>
    		 	 	 	 		 	</tr>
    		 	 	 	 		 </table>
    		 	 	 	 	</div>
    		 	 	 	 </div>
                         <div class="col-md-6">
                            <div class="border cardc corner p-3">
                                 <p class="mb-0 mt-2"><img src="img/currency_rupee_circle.png" class="mr-2">Finance payment plan</p>
                                 <p class="mt-4"><span class="h2"><strong>₹1,289*</strong></span> <small>/ month EMI</small></p>

                                 <a href="tel:9407059000"><button class="common-btn2 btn bg5 btn-block">Call Now</button></a>

                                 <table class="table mt-4 pricecard">
                                    <tr>
                                        <th>₹ 2,10,000</th>
                                        <th class="text-right">System cost</th>
                                    </tr>
                                    <tr>
                                        <td>₹ 78,000</td>
                                        <td class="text-right">PM Surya Subsidy</td>
                                    </tr>
                                    <tr>
                                        <td>₹ 21,000</td>
                                        <td class="text-right">10% r-solar discount</td>
                                    </tr>
                                    <tr>
                                        <th>₹ 1,11,000</th>
                                        <th class="text-right">After discount</th>
                                    </tr>
                                     <tr>
                                        <td>7%</td>
                                        <td class="text-right">Interest rate</td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <form>
                                                <select>
                                                    <option value="">10 Years</option>
                                                    <option value="">9 Years</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td class="text-right">Loan term</td>
                                    </tr>
                                    <tr>
                                        <td>₹ 1,54,656</td>
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
<div class="modal" id="myModal" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">

     

      <!-- Modal body -->
      <div class="modal-body py-5">
        <div class="text-center">
            <h1>Almost there!</h1>
            <p>You’re just one click away from the result</p>
        </div>
         <form class="mt-4 px-5" id="myBasicForm">
            <div class="form-group">
                <label >Your full name <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" placeholder="Enter your first and last name" name="name">                                
            </div>
            <div class="form-group">
                <label >Your contact number</label>
                <input type="text" class="form-control" placeholder="Enter phone number" name="mobile_number">                                
            </div>
            <div>
                <input type="submit" type="button" class="resultbtn common-btn2 btn btn-block bg5" value="Show Result" ></button>
            </div>
        </form>
      </div>

    

    </div>
  </div>
</div>




<?php include 'footer.php';?>

<script>
    $(window).on('load', function() {
          $('#myModal').modal('show');
      });
    $(document).ready(function(){
    $('#myBasicForm').on('submit', function(event){
        event.preventDefault(); // Prevent the form from submitting the normal way
        
        var formData = $(this).serialize(); // Serialize form data
        console.log('formData',formData)
        $.ajax({
            url: 'resultLogic.php', // PHP file to handle the request
            type: 'POST',
            data: formData,
            success: function(response){
              console.log('response',response)

              const res = JSON.parse(response)
              if(!res.status){
                toastr.error('Error',res.message)

              }else{
                 window.location.href = 'result.php';
                // $('#myModal').hide()
              }
             
                // $('#response').html(response); // Display the response from the server
            },
            error: function(xhr, status, error) {
                $('#response').html('Error: ' + error);
            }
        });
    });
});
</script>