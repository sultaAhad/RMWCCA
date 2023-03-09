<!-- Include app -->
<?php include 'inc/app.php'; ?>
<!-- Include app -->

<!-- Style Varieble css  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/variables.css">
<link rel="stylesheet" href="css/wizard-profile.css">
<!-- Style Varieble css  -->
<section class="signup-step-container">
    <div id="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">step1
                        </li>
                        <li>step2</li>
                        <li>step3</li>
                        <li>step4</li>
                        <li>step5</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Who are you buying for?</h2>
                        <h3 class="fs-subtitle">Step 1</h3>
                        <input type="text" name="pickup_date" placeholder="Pickup Date" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Choose keg details</h2>
                        <h3 class="fs-subtitle">Step 2</h3>
                        <select name="keg_type" placeholder="Pickup Date">
                            <option value="" disabled selected style="display: none;">Choose Your Beer</option>
                            <option value="Budweiser">Budweiser</option>
                            <option value="Blue Moon">Blue Moon</option>
                        </select>
                        <select name="keg_size">
                            <option value="" disabled selected style="display: none;">Choose Keg Size</option>
                            <option value="1/2">1/2</option>
                            <option value="1/6">1/6</option>
                        </select>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Personal Details</h2>
                        <h3 class="fs-subtitle">Last Step</h3>
                        <input type="text" name="fname" placeholder="First Name" />
                        <input type="text" name="lname" placeholder="Last Name" />
                        <input type="text" name="phone" placeholder="Phone" />
                        <input type="text" name="email" placeholder="E-mail" />
                        <!--<textarea name="address" placeholder="Address"></textarea>-->
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Personal Details</h2>
                        <h3 class="fs-subtitle">Last Step</h3>
                        <input type="text" name="fname" placeholder="First Name" />
                        <input type="text" name="lname" placeholder="Last Name" />
                        <input type="text" name="phone" placeholder="Phone" />
                        <input type="text" name="email" placeholder="E-mail" />
                        <!--<textarea name="address" placeholder="Address"></textarea>-->
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Choose keg details</h2>
                        <h3 class="fs-subtitle">Step 2</h3>
                        <select name="keg_type" placeholder="Pickup Date">
                            <option value="" disabled selected style="display: none;">Choose Your Beer</option>
                            <option value="Budweiser">Budweiser</option>
                            <option value="Blue Moon">Blue Moon</option>
                        </select>
                        <select name="keg_size">
                            <option value="" disabled selected style="display: none;">Choose Keg Size</option>
                            <option value="1/2">1/2</option>
                            <option value="1/6">1/6</option>
                        </select>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" id="form-submit" />
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- Include Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Include Footer -->