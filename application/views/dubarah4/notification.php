<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="css/flag-css.min.css" rel="stylesheet">
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <!-- Google WEBONT openSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="css/additional.css">
    <style>

        /* Dropdown Button */
        .notifdownbtn {
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .notifdown {
            position: relative;
            display: inline-block;
        }

        .notificationHeader{
            padding: 15px;
                background-color: #f5f5f5;
            color: #bdbdbd;
        }


        .notificationSetting{
            font-size: 20px;
            padding: 4px 0;
            color: #bdbdbd;
        }

        .readedNoties {
            background-color: #fff;
        }

        /* Dropdown Content (Hidden by Default) */
        .notifdown-content {
            display: none;
            position: absolute;
            background-color: rgba(41, 149, 171, 0.2);
            min-width: 25rem;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            height: 20rem;
            top: 3rem;
            overflow-x: hidden;
        }

        .notifdown-content a{
           color : #2995ab !important;
        }

        .notifdown-content a:hover{
            color : #3e3e3e !important;
        }

        .notifdate{
            font-size: 12px;
            margin: 0 !important;
        }

        /* Links inside the dropdown */
        .noties {
            color: #3e3e3e;
            padding: 1rem 15px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .noties:hover {background-color: #f1f1f1}

        .notifblock{
            position: relative;
        }
        .readedNoties{
            position: absolute;
            font-size: 18px;
            right: 15px;
            color: #3e3e3e;
            top: 10px;
            cursor: pointer;
            background-color: transparent;
        }

        .readedNotiesActivated{
            position: absolute;
            font-size: 18px;
            right: 15px;
            color: #bdbdbd;
            top: 10px;
            cursor: pointer;
            background-color: transparent;
        }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {display:block;}

    </style>
</head>
<body class="grey-lighten-3">
<div class="container">
    <div class="">
        <div class="notifdown">
            <button onclick="notifdownFunction()" class="btn btn-icon no-border notifdownbtn" type="button" ><i class="fa fa-bell fa-lg notifdownbtn" aria-hidden="true"></i><span class="badge badge-pill badge-danger notifdownbtn">12</span></button>

            <div id="notifications" class="notifdown-content">
                <div class="notificationHeader">Notification <span class="badge badge-pill badge-danger notifdownbtn">12</span><i class="fa fa-cog float-right notificationSetting" aria-hidden="true"></i></div>

                <div class="notifblock">
                    <span aria-hidden="true" class="readedNoties"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                    <div class="noties">
                        <a href="#">@adnan_99</a> Followed You .
                        <p class="text-muted notifdate">Just Now</p>
                    </div>
                </div>

                <div class="notifblock">
                    <span aria-hidden="true" class="readedNoties"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                    <div class="noties">
                        <a href="#">@adnan_99</a> Followed You .
                        <p class="text-muted notifdate">Just Now</p>
                    </div>
                </div>

                <div class="notifblock">
                    <span aria-hidden="true" class="readedNoties"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                    <div class="noties">
                        <a href="#">@adnan_99</a> Followed You .
                        <p class="text-muted notifdate">Just Now</p>
                    </div>
                </div>



            </div>
        </div>

    </div>

</div>
<!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->
<script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/additional.js"></script>

<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function notifdownFunction() {
        document.getElementById("notifications").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.notifdownbtn')) {

            var dropdowns = document.getElementsByClassName("notifdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<script>
    //Remove notifications READY
    $(document).ready(function(){
        $(".notifblock").click(function(){
            $(this).remove();
        });
    });

    //Readed notifications ++++++++++>>> Not READY
    $(document).ready(function(){
        $(".readedNoties").click(function(){
            $(this).remove();
        });
    });


</script>

</body>
</html>