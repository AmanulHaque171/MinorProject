<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #fffaf3;
        }

        .container {
            position: absolute;
            max-width: 800px;
            height: 500px;
            margin: auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .myRightCtn {
            position: relative;
            /* background-image: linear-gradient(45deg, #f046ff, #9b00e8); */
            background-image:url("loginImage.jpg");
            border-radius: 25px;
            height: 100%;
            padding: 25px;
            color: rgb(192, 192, 192);
            font-size: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .myLeftCtn {
            position: relative;
            background: #fff;
            border-radius: 25px;
            height: 100%;
            padding: 25px;
            padding-left: 50px;
        }

        .myLeftCtn header {
            color: rgb(226, 141, 43);
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .row {
            height: 100%;
        }

        .myCard {
            position: relative;
            background: #fff;
            height: 100%;
            border-radius: 25px;
            -webkit-box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
        }

        .myRightCtn header {
            color: #fff;
            font-size: 44px;

            margin-bottom: 33px;

        }

        .box {
            position: relative;
            margin: 35px;
            margin-bottom: 36px;
        }

        .myLeftCtn .myInput {
            width: 230px;
            border-radius: 25px;
            padding: 10px;
            padding-left: 50px;
            border: none;
            -webkit-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
        }

        .myLeftCtn .myInput:focus {
            outline: none;
        }

        .myForm {
            position: relative;
            margin-top: 100px;
        }

        .myLeftCtn .butt {
            background: linear-gradient(45deg, #fd9636, #e87c00);
            color: #fff;
            width: 230px;
            border: none;
            border-radius: 25px;
            padding: 10px;
            -webkit-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
        }

        .myLeftCtn .butt:hover {
            background: linear-gradient(45deg, #ffb25b, #ffa826);
        }

        .myLeftCtn .butt:focus {
            outline: none;
        }

        .myLeftCtn .fas {
            position: relative;
            color: #fda036;
            left: 36px;
        }

        .butt_out {
            background: transparent;
            color: #fff;
            width: 120px;
            border: 2px solid#fff;
            border-radius: 25px;
            padding: 10px;
            -webkit-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
        }

        .butt_out:hover {
            border: 2px solid#ffeacb;
        }

        .butt_out:focus {
            outline: none;
        }
    </style>
    <title>Login Form Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn">
                        <form class="myForm text-center">
                            <header>Login to AMUEMS Page</header>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="Login ID" id="username" required>
                            </div>



                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" id="password" placeholder="Password" required>
                            </div>



                            <input type="submit" class="butt" value="LOGIN">

                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <div class="box">
                            <header>AMUEMS</header>
                            
                            <p>Examination Management System for PolyTechnic Aligarh Muslim University</p>

                            <p>Using Database to Generate Scheme for Electrical Engineering Section and to Generate Duty
                                Charts for Exam Hall Allotment</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>