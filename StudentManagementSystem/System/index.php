<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Enrollment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <nav>
        <img class="logo" src="https://www.asiancollege.edu.ph/wp-content/uploads/2017/10/ac-logo-stacked-512-1.png"
            alt="">

        <ul>
            <li><a href="login.php" target="_blank">Login</a></li>
            <li><a href="#enrollment-form" onclick="scrollToContent()">Enroll Now</a></li>
        </ul>

        <script>
        function scrollToContent() {
            var element = document.getElementById("enrollment-form");
            element.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
        </script>
    </nav>

    <div class="bgvideotext">
        <h1>Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</h1>
    </div>

    <div class="video_container">
        <video class="bg_video" autoplay muted loop>
            <source src="video/bg.mp4" type="video/mp4">
        </video>
    </div>


    <div class="senior-container">
        <h1 class="seniorhigh">
            SENIOR HIGH SCHOOL
        </h1>
        <img src="img/shs.png">
    </div>
    <div class="college-container">
        <img class="cba" src="img/cba.png">
        <img class="ccse" src="img/ccse.png">
        <img class="cthm" src="img/cthm.png">
        <h1 class="college-text">
            COLLEGE
        </h1>
    </div>

    <div class="tesda-container">
        <img src="img/tesda.png">
        <h1 class="tesda-text">
            TESDA
        </h1>
    </div>

    <div class="container-acads">
        <div>
            <h1 class="acads">
                ACADEMICS
            </h1>
        </div>
        <div class="comprog">
            <img src="img/comprog.jpg" alt="test">
        </div>
        <div class="college">
            <img src="img/college.jpg" alt="">
        </div>
        <div class="tesda">
            <img src="https://www.asiancollege.edu.ph/wp-content/uploads/2017/10/Tesda.png" alt="">
        </div>
    </div>

    <div class="video_container">
        <video class="edit_video" autoplay muted loop>
            <source src="video/edit.mp4" type="video/mp4">
        </video>
    </div>

    <section id="enrollment-form">

        <div id="enrollment-form" class="form-container">
            <h1 class="form-title">Enrollment Form</h1>
            <form action="data_check.php" method="POST">

                <div class="form-group">
                    <label class="form-label" for="first_name">First Name</label>
                    <input class="form-input" type="text" id="first_name" name="first_name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="last_name">Last Name</label>
                    <input class="form-input" type="text" id="last_name" name="last_name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="middle_name">Middle Name</label>
                    <input class="form-input" type="text" id="middle_name" name="middle_name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="registering_for">Registering for</label>
                    <select class="form-input" id="registering_for" name="registering_for">
                        <option value="" selected disabled>Registering for</option>
                        <option value="SHS">Senior High School</option>
                        <option value="College">College</option>
                        <option value="Transferee">Transferee</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="strand">Strand / Course</label>
                    <select class="form-input" id="strand" name="strand">
                        <option value="" selected disabled>Select Strand / Course</option>
                        <option value="abm">Accountancy, Business & Management(ABM)</option>
                        <option value="Bread and pastry">Bread and Pastry Production (National Certificate II)</option>
                        <option value="Computer Programming">Computer Programming</option>
                        <option value="Cookery">Cookery NC II (National Certificate II)</option>
                        <option value="CES">Consumer Electronics Servicing</option>
                        <option value="FBS">Food and Beverage Services NC II(National Certificate II)</option>
                        <option value="GAS">General Academic Strand</option>
                        <option value="Housekeeping">Housekeeping NC II (National Certificate II)</option>
                        <option value="TGTS">Tour Guiding And Travel Services NC II (National Certificate II)</option>
                        <option value="HUMSS">Humanities and Social Sciences</option>
                        <option value="" disabled>Select Course</option>
                        <option value="" disabled>COLLEGE OF BUSINESS ADMINISTRATION</option>
                        <option value="Accountancy">BS in Accountancy</option>
                        <option value="Management Accounting">BS in Management Accounting</option>
                        <option value="Financial Management">BSBA Major in Financial Management</option>
                        <option value="Marketing Management">BSBA Major in Marketing Management</option>
                        <option value="Operations Management">BSBA Major in Operations Management</option>
                        <option value="" disabled>COLLEGE OF COMPUTER STUDIES</option>
                        <option value="ComEng">BS in Computer Engineering</option>
                        <option value="ComScie">BS in Computer Science</option>
                        <option value="Electronics">BS in Electronics Technology</option>
                        <option value="IT">BS in Information Technology</option>
                        <option value="" disabled>COLLEGE OF TOURISM AND HOSPITALITY MANAGEMENT</option>
                        <option value="Hospitality">BS in Hospitality Management</option>
                        <option value="Tourism">BS in Tourism Management</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="birthday">Birthday</label>
                    <input class="form-input" type="date" id="birthday" name="birthday">
                </div>
                <div class="form-group">
                    <label class="form-label" for="gender">Gender</label>
                    <select class="form-input" id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="contact_number">Contact Number</label>
                    <input class="form-input" type="tel" id="contact_number" name="contact_number">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-input" type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label class="form-label" for="nationality">Nationality</label>
                    <input class="form-input" type="text" id="nationality" name="nationality">
                </div>
                <div class="form-group">
                    <label class="form-label" for="religion">Religion</label>
                    <input class="form-input" type="text" id="religion" name="religion">
                </div>
                <div class="form-group">
                    <label class="form-label" for="permanent_address">Permanent Address</label>
                    <textarea class="form-input" id="permanent_address" name="permanent_address"></textarea>
                </div>
                <div class="form-group">
                    <input class="form-button" type="submit" name="apply">
                    </input>
                </div>
            </form>
        </div>

    </section>



</body>

</html>