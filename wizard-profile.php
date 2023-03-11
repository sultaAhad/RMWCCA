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
            <div class="col-lg-10 mx-auto">
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class=" start active">
                            <h6> start </h6>
                        </li>
                        <li>
                            <h6> step1 </h6>
                        </li>
                        <li>
                            <h6> step2 </h6>
                        </li>
                        <li>
                            <h6> step3 </h6>
                        </li>
                        <li class="end">
                            <h6> step4 </h6>
                        </li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Personal & Company Information</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="membership-main-form">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <h3 class="membership-contectus-heading">Personal Information</h3>
                                        </div>
                                    </div>
                                    <div class="form-contect-wrapper">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1" placeholder="First Name"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1" placeholder="Last Name"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="email" id="form1Example1" placeholder="Email Address"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="number" id="form1Example1" placeholder="Contact Number"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1"
                                                        placeholder="Person To Receive Mailings" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="number" id="form1Example1" placeholder="Fax Number"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1" placeholder="Address Line 1"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1" placeholder="Address Line 2"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1" placeholder="City"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1" placeholder="State"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-outline ">
                                                    <input type="number" id="form1Example1" placeholder="Zip Code"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Country</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="membership-main-form">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <h3 class="membership-contectus-heading">Company Information</h3>
                                        </div>
                                    </div>
                                    <div class="form-contect-wrapper">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1" placeholder="Company Name"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="text" id="form1Example1" placeholder="Company Phone"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="email" id="form1Example1" placeholder="Company Logo"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-outline ">
                                                    <input type="number" id="form1Example1"
                                                        placeholder="Company Website Link" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a type="button" name="next" class="next btn green" value="Next">next <span> <i
                                    class="fa fa-arrow-right" aria-hidden="true"></i>
                            </span></a>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Booth Reservation</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-outline ">
                                    <input type="text" id="form1Example1"
                                        placeholder="What Other Industries Do You Sell So We (RMWCCA) Can Invite Them To The Trade Show?"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5  mx-auto text-center">
                                <div class="pricing-heading">
                                    <h3 class="membership-contectus-heading">Standard Booths</h3>
                                    <p>The Pricing Structure for Non-Members
                                        The First Booth Will Be Of <span> $800 </span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="select-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h4 class="select-booth">Select Booth Choice</h4>
                                        </div>
                                        <div class="col-lg-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Booth Location 1</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Booth Location 2</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Booth Location 3</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6  mx-auto text-center">
                                <div class="pricing-heading">
                                    <h3 class="membership-contectus-heading">Additional Booth</h3>
                                    <p>Each Additional Booth Will Be Of <span> $1140 </span>
                                        Fusce laoreet mauris sit amet venenatis cursus. Fusce quis libero orci.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="qty-container">
                                    <button class="qty-btn-minus btn-cornered" type="button"><i
                                            class="fa fa-chevron-left"></i></button>
                                    <input type="text" name="qty" value="0" class="input-qty input-cornered" />
                                    <button class="qty-btn-plus btn-cornered" type="button"><i
                                            class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title"> Booth Reservation </h2>
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
                        <h2 class="fs-title">Sponsorship & Advertising</h2>
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
                        <h2 class="fs-title">Checkout</h2>
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
                        <input type="submit" name="submit" class="submit action-button" value="Submit"
                            id="form-submit" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Include Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Include Footer -->