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
                            <button class="nav-link" id="v-pills-logout-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logout" type="button" role="tab" aria-controls="v-pills-logout" aria-selected="false">Log Out</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="my-profile-wrapper">
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
                                                <a class="btn green profile-wrapper-btn">Edit<span> <i class="fa fa-arrow-right" aria-hidden="true"></i>
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
                            <div class="my-profile-wrapper1">
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
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-courses" role="tabpanel" aria-labelledby="v-pills-courses-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Include Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Include Footer -->