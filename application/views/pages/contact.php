<!--contact.php-->
<section>
<div class="top-contact">
        <div class="top-about-text">
        <h1>Contact Us</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div> 
	
    <div class="forms">
        <form method="post" action="<?php echo base_url('feedback/send'); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlInput1">First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter FirsName"  class="form-control" required>
                    </div>
			
                    <div class="col">
                        <label for="exampleFormControlInput1">Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter LastName"  class="form-control" required>
                    </div>
                </div>
		    
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email"  class="form-control" required>
            </div>
		
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea name="text-area" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
		
            <button type="submit" name ="submit" value="Submit" class="btn pull-right mt-3">Submit</button>
        </form>
    </div>

</section>
