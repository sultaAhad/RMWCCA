<!-- Include app -->
<?php include 'inc/app.php'; ?>
<!-- Include app -->

<!-- Style Varieble css  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/variables.css">
<link rel="stylesheet" href="css/profile.css">
<!-- Style Varieble css  -->
<section class="profile">
    <div class="container">
        <div class="main-tabs">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex nav-bar-tabs align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <img src="img/profile.png" class="img-fluid" alt="">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">My Profile</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Security</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Membership</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Events</button>
                            <button class="nav-link" id="v-pills-courses-tab" data-bs-toggle="pill" data-bs-target="#v-pills-courses" type="button" role="tab" aria-controls="v-pills-courses" aria-selected="false">Courses</button>
                            <a class="nav-link" href="index.php">Log Out</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="my-profile-wrapper password">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>My Profile</h4>
                                    </div>
                                </div>
                                <div class="main-profile-wrapper">
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="profile-form">
                                                <h3>Personal Information</h3>
                                                <a class="btn green password-wrapper-btn">Edit<span> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Jhon Don">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Email </label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="jhondon@gmail.com">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="+1 234 567 8910 ">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Zip Code</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="122345`">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-profile-wrapper1 password1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Edit My Profile</h4>
                                    </div>
                                </div>
                                <div class="main-profile-wrapper">
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="profile-form">
                                                <h3>Personal Information</h3>
                                                <a class="btn green profile-wrapper-btn" href="">Save<span> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="profile-edit-wrapper">
                                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="profile-edit-wrapper">
                                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="profile-edit-wrapper">
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="profile-edit-wrapper">
                                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="profile-edit-wrapper">
                                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Zip Code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="my-profile-wrapper my-profile-wrapper12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Security</h4>
                                    </div>
                                </div>
                                <div class="main-profile-wrapper ">
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="profile-form">
                                                <h3>Password</h3>
                                                <a class="btn green profile-wrapper-btn">Edit<span> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="**********">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-profile-wrapper1 my-profile-wrapper13">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Change Security</h4>
                                    </div>
                                </div>
                                <div class="main-profile-wrapper">
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="profile-form">
                                                <h3>Change Password</h3>
                                                <a class="btn green profile-wrapper-btn" href="">Save<span> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="profile-edit-wrapper">
                                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Old Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="profile-edit-wrapper">
                                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="profile-edit-wrapper">
                                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Re-Enter Password ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="my-profile-wrapper Membership">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Membership</h4>
                                    </div>
                                </div>
                                <div class="main-profile-wrapper Membership">
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="profile-form">
                                                <h3>Active Membership</h3>
                                                <a class="btn green menbership-wrapper-btn">Renew Now<span> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 ">
                                        <div class="col-lg-7">
                                            <div class="subcribe-heading">
                                                <h4>My Subscribtion</h4>
                                            </div>
                                            <div class="amount-headings">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>My Membership </h6>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <h6>Amount Paid</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contector-heading">
                                                <div class="row text-center">
                                                    <div class="col-lg-6  p-0">
                                                        <h6>Contractors</h6>
                                                    </div>
                                                    <div class="col-lg-6  p-0">
                                                        <h6 class="per-year">$400/ Per Year</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="purchase-heading">
                                                <p>Purchase Date: 24 February 2023</p>
                                                <p>Expire Date: 24 February 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-profile-wrapper1 Membership1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Renew Membership</h4>
                                    </div>
                                </div>
                                <div class="main-profile-wrapper">
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="profile-form">
                                                <h3>Order Summary</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="membership-contector-heading amount-headings">
                                                <div class="amount-headings">
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <h6 class="heading-wrapper-top"> Membership </h6>
                                                        </div>
                                                        <div class="col-lg-3 text-center">
                                                            <h6>Amount Paid</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contector-heading1">
                                                    <div class="row ">
                                                        <div class="col-lg-9 text-start">
                                                            <div class="dius-heading-para">
                                                                <h6>Contractors</h6>
                                                                <p>Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 text-center  align-self-center"">
                                                            <h6 class=" per-year1">$400/ Per Year</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-revew">
                                        <div class="row mt-3">
                                            <div class="col-lg-12">
                                                <div class="profile-form renew-heading">
                                                    <h3>Renew Membership Payment</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="add-card-heading">
                                                            <h6>Add Credit/Debit Card</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-12">
                                                        <div class="profile-edit-wrapper">
                                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Card Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <div class="profile-edit-wrapper">
                                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Expiry">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="profile-edit-wrapper">
                                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="CVC">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="add-card-heading">
                                                            <h6>Order Summary</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="total-payable-main">
                                                    <h3 class="total-payment-heading">Payment Details</h3>
                                                    <div class="renew-wrapper">
                                                        <div class="renew-para-heading">
                                                            <h6>Renew Membership</h6>
                                                            <p>Lorem ipsum</p>
                                                        </div>
                                                        <div class="dollar-total">
                                                            <h6>$400</h6>
                                                        </div>
                                                    </div>
                                                    <div class="renew-wrapper1">
                                                        <div class="total-para-heading">
                                                            <h6>Total Payable</h6>
                                                        </div>
                                                        <div class="dollar-total-main">
                                                            <h5>$400</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row text-right">
                                            <div class="col-lg-12 ">
                                                <a class="btn green membership-wrapper-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">Pay Now<span> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span></a>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 text-center">
                                                                <h3 class="membership-contectus-heading1">Thank You </h3>
                                                            </div>
                                                        </div>
                                                        <h5 class="text-center">Four buying the membership.</h5>
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <a class="btn green" href="index.php">Go Back To Home <span> <i class=" fa fa-arrow-right" aria-hidden="true"></i>
                                                            </span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="my-profile-wrapper4 table-wrapper1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Registered Events</h4>
                                    </div>
                                </div>
                                <div class="main-profile-wrapper">
                                    <div class="table-wrapper" id="delivery">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="table-wrapper main-wrapper">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Venue</th>
                                                                <th>Date</th>
                                                                <th>Day</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h6>EIFS Convention</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Suspenders pretium ante sit amet tur, W28J+JR5, Pretium Block 4, Boston City, USA 74600</h6>
                                                                </td>
                                                                <td>
                                                                    <h6> 7-8, 2023 </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="tuesday"> Tuesday </h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6>EIFS Convention</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Suspenders pretium ante sit amet tur, W28J+JR5, Pretium Block 4, Boston City, USA 74600</h6>
                                                                </td>
                                                                <td>
                                                                    <h6> 7-8, 2023 </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="tuesday"> Tuesday </h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6>EIFS Convention</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Suspenders pretium ante sit amet tur, W28J+JR5, Pretium Block 4, Boston City, USA 74600</h6>
                                                                </td>
                                                                <td>
                                                                    <h6> 7-8, 2023 </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="tuesday"> Tuesday </h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6>EIFS Convention</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Suspenders pretium ante sit amet tur, W28J+JR5, Pretium Block 4, Boston City, USA 74600</h6>
                                                                </td>
                                                                <td>
                                                                    <h6> 7-8, 2023 </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="tuesday"> Tuesday </h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6>EIFS Convention</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Suspenders pretium ante sit amet tur, W28J+JR5, Pretium Block 4, Boston City, USA 74600</h6>
                                                                </td>
                                                                <td>
                                                                    <h6> 7-8, 2023 </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="tuesday"> Tuesday </h6>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-courses" role="tabpanel" aria-labelledby="v-pills-courses-tab">
                            <div class="my-profile-wrapper4 table-wrapper1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Courses</h4>
                                    </div>
                                </div>
                                <div class="main-profile-wrapper">
                                    <div class="table-wrapper" id="delivery">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="table-wrapper main-wrapper">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Venue</th>
                                                                <th>Date</th>
                                                                <th>Day</th>
                                                                <th>Fee</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h6>EIFS Convention</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Suspenders pretium ante sit amet tur, W28J+JR5, Pretium Block 4, Boston City, USA 74600</h6>
                                                                </td>
                                                                <td>
                                                                    <h6> 7-8, 2023 </h6>
                                                                </td>
                                                                <td>
                                                                    <h6> Tuesday </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="tuesday"> Fee</h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6>EIFS Convention</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Suspenders pretium ante sit amet tur, W28J+JR5, Pretium Block 4, Boston City, USA 74600</h6>
                                                                </td>
                                                                <td>
                                                                    <h6> 7-8, 2023 </h6>
                                                                </td>
                                                                <td>
                                                                    <h6> Tuesday </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="tuesday"> Fee</h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6>EIFS Convention</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Suspenders pretium ante sit amet tur, W28J+JR5, Pretium Block 4, Boston City, USA 74600</h6>
                                                                </td>
                                                                <td>
                                                                    <h6> 7-8, 2023 </h6>
                                                                </td>
                                                                <td>
                                                                    <h6> Tuesday </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="tuesday"> Fee</h6>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Include Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Include Footer -->