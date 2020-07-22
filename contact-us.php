<?php include_once('includes/head.inc.php'); ?>
<?php include_once('includes/header.inc.php'); ?>
<section class="contact-section">
    <div class="contact-info p-md-5">
        <div class="row">
            <div class="col-md-5">
                <div class="ion-logo">
                    <i class="ion-ios-walk ion-lg"></i>
                </div>
                <div class="contact-address">
                <span><h5 class='mb-md-2'>Real Estate</h5></span>
                <p class='mb-md-2'>Vellanur, Near Avadi</p>
                <p class='mb-md-2'>Phone: &nbsp; 1234788790</p>
                <p class='mb-md-2'>Email: &nbsp; realestate@realestate.com</p>
                </div>
            
            </div>
            <div class="col-md-7">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Enter your Name" class="form-contact">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telephone" id="telephone" placeholder="Enter your Number" class="form-contact">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-contact">
                    </div>
                    <div class="form-group">
                        <select name="typeOf" id="typeOf" onchange="changeDropdown(this.value)">
                            <option value="--">-----</option>
                            <option value="buyer">Buyer</option>
                            <option value="seller">Seller</option>
                        </select>
                    </div>
                    <div id="buyer" class="hide">
                        <div class="form-group">
                            <input type="text" name="village" id="village" placeholder="Enter your Village" class="form-contact">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30"  placeholder="What are looking for..?"></textarea>
                        </div>
                    </div>
                    <div id="seller" class="hide">
                        <div class="form-group">
                            <input type="text" name="village" id="village" placeholder="Enter your Village" class="form-contact">                         
                        </div>
                        <div class="form-group">
                            <input type="text" name="layout" id="layout" placeholder="Enter your Layout No" class="form-contact">
                        </div>
                        <div class="form-group">
                            <input type="text" name="survey" id="survey" placeholder="Enter your Survey No" class="form-contact">
                        </div>
                        <div class="form-group">
                            <input type="text" name="plot" id="plot" placeholder="Enter your Plot No" class="form-contact">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" placeholder="What are looking for..?"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-contact btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once('includes/footer.inc.php'); ?>