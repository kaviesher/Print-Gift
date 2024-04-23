<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT GIFT - Admin Dashboard</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../library/admin.css">
</head>

<body data-page='users'>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- Edit User Profile -->
            <div class="edit-user-profile">
                <h1>Edit Profile of Peter</h1>
                <form class="edit-profile-details" id="adminEditUserForm" data-user-id="1234">
                    <a href="../users/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <div>
                        <label for="adminEditUserProfileFName">First Name</label>
                        <input type="text" name="fname" id="adminEditUserProfileFName" value="Peter">
                    </div>
                    <div>
                        <label for="adminEditUserProfileLName">Last Name</label>
                        <input type="text" name="lname" id="adminEditUserProfileLName" value="Parker">
                    </div>
                    <div>
                        <label for="adminEditUserProfileTel">Phone Number</label>
                        <input type="tel" name="tel" id="adminEditUserProfileTel" value="0703467918">
                    </div>
                    <div>
                        <label for="adminEditUserProfileDOB">Date of Birth</label>
                        <input type="date" name="dob" id="adminEditUserProfileDOB" value="2005-04-12">
                    </div>
                    <div class="address-field">
                        <label for="adminEditUserProfileAddress">Address</label>
                        <input type="text" name="address" id="adminEditUserProfileAddress"
                            value="Peter Parker, 22/A/12, Alwis Road, Kaduwela">
                    </div>
                    <div>
                        <label for="adminEditUserProfileCity">City</label>
                        <input type="text" name="city" id="adminEditUserProfileCity" value="Kaduwela">
                    </div>
                    <div>
                        <label for="adminEditUserProfilePostalCode">Postal Code</label>
                        <input type="text" name="postalcode" id="adminEditUserProfilePostalCode" value="10640">
                    </div>
                    <div>
                        <label for="adminEditUserProfilePassword">New Password (If required)</label>
                        <input type="password" name="password" id="adminEditUserProfilePassword"
                            placeholder="Enter password">
                    </div>
                    <div>
                        <label for="adminEditUserProfileConfirmPassword">Confirm Password</label>
                        <input type="password" name="confirm-password" id="adminEditUserProfileConfirmPassword"
                            placeholder="Confirm password">
                    </div>

                    <input type="submit" value="Save">
                    <p id="adminEditUserCardMsg"></p>
                </form>
            </div>
        </div>



    </div>


    </div>

    <script src="./editUserProfile.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>