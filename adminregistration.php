<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="col">
 <?php include_once("header.php"); ?>
            <div class="row">

                <div class="col-sm-12 shadow-lg p-3 mb-5 bg-white rounded my-5">

                    <h1 style="text-align: center; background-color:#ADD8E6;" class="bg-warning">Event Management System</h1>
                    <div id="result" style="color: green; text-align:center;"></div>
                    <center>
                        <div class=" col-sm-6 shadow p-3 mb-5 bg-warning rounded" style="margin-top: 45px;">
                            <div class="">
                                <h1 style="color:blue;text-align: center;">Admin Registration</h1>

                                <form class="form-group" id="contactUsForm">
<input type="hidden" name="admin" value="adminregistration">

                                   
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label"><b>Name</b></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" placeholder="Enter Your Name"
                                                class="form-control" id="name">
                                        </div>

                                    </div><br>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label"><b>Email</b></label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" placeholder="Enter Your Email"
                                                class="form-control" id="email">
                                        </div>

                                    </div><br>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label"><b>Password</b></label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" placeholder="Enter Password"
                                                class="form-control" id="password">
                                        </div>

                                    </div><br>

                                    <center> <button style="color:white" class="btn btn-success">Submit</button>
                                    </center>

                                </form>
                            </div>

                        </div>
                    </center>

                </div>
                <jsp:include page="footer.jsp" />

            </div>

        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#contactUsForm").submit(function (event) {
                event.preventDefault(); // Prevent the form from submitting normally
                var formData = $(this).serialize(); // Serialize the form data
                // Regular expression for a 10-digit mobile number
                var login_type = $("#login_type").val();
                if (login_type == "null") {
                    $("#er").text("Please Select Login Type.");
                } else {
                    $.ajax({
                        type: "POST",
                        url: "Controller/controller.php", // Replace with the URL of your servlet
                        data: formData,
                        success: function (response) {
                            $("#result").html(response);
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            // Handle any errors that occur during the AJAX request
                            console.error("Error: " + errorThrown);
                            $("#result").html("<h3 class='bg-danger'>NetworK Error.</h3>");
                        }
                    });
                }

                //                        if (mobileRegex.test(mobileNumber)) {



                //                        } else {
                //                            $("#result").html("<p class='bg-danger'>Invalid mobile number. Please enter a 10-digit number.</p>");
                //                            setTimeout(function () {
                //                                $('#result').remove();
                //
                //                            }, 5000);
                //
                //                        }

            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>