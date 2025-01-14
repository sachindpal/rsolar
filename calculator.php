<?php include 'header.php';?>

<?php
include('db.php');

// Start the session
session_start();

// SQL query to fetch data from 'users' table
$sql = "SELECT * FROM districts";
$result = $conn->query($sql);

?>
    <section class="py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
         <h1>Energy Savings Calculator</h1>
                 <p>Take the guesswork out of solar! Our advanced savings calculator provides detailed insights into your financial savings, energy production, and environmental impact—all customized for your home or business.</p> 
          </div>  
          </div>         
        </div>     
    </section>


    <section>
        <div class="container bg">
             <div class="row">
                 <div class="col-md-5 mx-auto">
                     <div class="border p-5 corner bg-white">
                         <h3 class="text-center">Instantly Calculate <br>your Savings</h3>
                         <form class="mt-4" id="myForm">
                              <div class="form-group">
                                <label for="pwd">Choose your district</label>
                                <select class="form-control" name="district">
                                    <option value="">Select District</option>
                                    <?php
    // Check if there are results
    if ($result->num_rows > 0) {
        // Loop through the rows of data
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row['id']."'>" . $row['name'] . "</option>";
        }
    }

   
    ?>
                                </select>
                              </div>
                              
                            <div class="form-group">
                                 <label class="w-100 position-relative" for="rangeSlider">Average monthly bill
                                   <span class="position-absolute" id="rangeOutput">1000-1500</span>
                                 </label>
                                   <div>
                                        <input class="form-control" type="range" name="average_monthly_bill" id="rangeSlider" min="1000" max="10000" step="500" value="0" />
                                   
                                         
                                   
                                    <div class="form-group" id="inputContainer"></div> <!-- Placeholder for text field -->
                                   </div>
                            </div>


                             <div class="form-group mb-0">
                                <label for="radio">Property type</label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="propertyType" value="Residential">Residential
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="propertyType" value="Commercial">Commercial
                              </label>
                            </div>


                            <div class="mt-4 submit">
                            <input class="common-btn2 btn bg5 btn-block" type="submit" value="Calculate My Savings">
                                <!-- <button class="common-btn2 btn bg5 btn-block">Calculate My Savings</button> -->
</div>
                  </form>
                     </div>
                 </div>
             </div>
        </div>
    </section>

    <section class="mt-5">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1>Why Use Our <br>Savings Calculator?</h1>
               
            </div>


            <div class="col-md-10 mx-auto">
               <div class="row text-center mt-4">
                  <div class="col-md-4">
                     <img src="img/check_circle.png" width="40">
                     <p class="mt-3"><strong>Accurate Estimates</strong></p>
                     <p>Tailored to your energy needs and location.</p>
                  </div>
                   <div class="col-md-4">
                     <img src="img/payments.png" width="40">
                     <p class="mt-3"><strong>Smart Financial Planning</strong></p>
                     <p> Understand costs, subsidies, and payback time.</p>
                  </div>
                   <div class="col-md-4">
                     <img src="img/psychiatry.png" width="40">
                     <p class="mt-3"><strong>See Your Impact</strong></p>
                     <p>Calculate your environmental contribution in real time.</p>
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
    



    <?php include 'footer.php';?>

    <script>
    $(document).ready(function(){
    $('#myForm').on('submit', function(event){
        event.preventDefault(); // Prevent the form from submitting the normal way
        
        var formData = $(this).serialize(); // Serialize form data
        console.log('formData',formData)
        $.ajax({
            url: 'calculatorLogic.php', // PHP file to handle the request
            type: 'POST',
            data: formData,
            success: function(response){
              console.log('response',response)

              const res = JSON.parse(response)
              if(!res.status){
                toastr.error('Error',res.message)

              }else{
                 window.location.href = 'tempResult.php';
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