<!DOCTYPE html>
<html lang="ar">

<head>
    <title>بربجر لينج | الصفحة الريسية</title>
    <link rel="shortcut icon" type="image/x-icon" href="./photos/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://kit.fontawesome.com/2b6685be60.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lateef&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mirza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

</head>

<style>
    /* General : */

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background: rgb(234, 225, 208);

    }


    @media(min-width:0px) and (max-width:315px) {
        .test {
            color: palevioletred;
        }

        /* header */




        /* Homepage container : */


        #navlist {
            display: none !important;
        }

        .hover:hover {
            border: none !important;
            transition: 0.5s;
        }



        .head-name {
            border: 3px orange solid;
            border-bottom-left-radius: 30px;
            overflow: hidden;
            white-space: nowrap;
            width: 0;
            animation: typing 1.5s forwards, blink-caret 1.5s forwards;

        }


        @keyframes typing {
            from {
                width: 0%;
            }

            to {
                width: 100%;
            }
        }


        @keyframes blink-caret {

            from,
            to {
                border: 3px orange solid;
            }

            50% {
                border: 3px orange solid;
            }
        }

        .cont {
            display: inline-block;
        }

        .head-name {
            font-size: 21px !important;
            margin-left: 5% !important;
            margin-right: 5% !important;

        }

        .most {
            margin-left: 5% !important;
        }

        .now {
            font-size: 18px !important;
        }

        :root {
            --base-grid: 4px !important;
        }


    }


    @media(min-width:0px) and (max-width:766px) {
        .test {
            color: red;
        }

        /* header */



        /* Homepage container : */


        #navlist {
            display: none !important;
        }

        .hover:hover {
            border: none !important;
            transition: 0.5s;
        }

        #login {
            display: none !important;
        }

        .most {
            margin-left: 8% !important;
        }

        .fa-hand-point-left {
            display: none !important;
        }

    }


    @media(max-width:500px) {
        .test {
            color: yellow;
        }



        /* Homepage container : */


        #navlist {
            display: none !important;
        }

        .hover:hover {
            border: none !important;
            transition: 0.5s;
        }



        .head-name {
            border: 3px orange solid;
            border-bottom-left-radius: 30px;
            overflow: hidden;
            white-space: nowrap;
            width: 0;
            animation: typing 1.5s forwards, blink-caret 1.5s forwards;

        }


        @keyframes typing {
            from {
                width: 0%;
            }

            to {
                width: 62%;
            }
        }


        @keyframes blink-caret {

            from,
            to {
                border: 3px orange solid;
            }

            50% {
                border: 3px orange solid;
            }
        }

        .cont {
            display: inline-block;
        }

        #login {
            display: none !important;
        }





    }


    @media(min-width:501px) and (max-width:767px) {
        .test {
            color: blue;
        }


        /* header */



        /* Homepage container : */

        #navlist {
            display: none !important;
        }


        .hover:hover {
            border: none !important;
            transition: 0.5s;
        }



        .head-name {
            border: 3px orange solid;
            border-bottom-left-radius: 30px;
            overflow: hidden;
            white-space: nowrap;
            width: 0;
            animation: typing 1.5s forwards, blink-caret 1.5s forwards;

        }


        @keyframes typing {
            from {
                width: 0%;
            }

            to {
                width: 34%;
            }
        }


        @keyframes blink-caret {

            from,
            to {
                border: 3px orange solid;
            }

            50% {
                border: 3px orange solid;
            }
        }

        .cont {
            display: inline-block;
        }

        #login {
            display: none !important;
        }

        #login2 {
            display: block !important;
        }


    }


    @media(min-width:768px) and (max-width:991px) {
        .test {
            color: yellow;
        }



        /* Homepage Conrtainer : */

        #hide {
            display: none !important;
        }

        #nohide {
            display: none !important;
        }




        .head-name {
            border: 3px orange solid;
            border-bottom-left-radius: 30px;
            overflow: hidden;
            white-space: nowrap;
            width: 0;
            animation: typing 1.5s forwards, blink-caret 1.5s forwards;

        }


        @keyframes typing {
            from {
                width: 0%;
            }

            to {
                width: 23%;
            }
        }


        @keyframes blink-caret {

            from,
            to {
                border: 3px orange solid;
            }

            50% {
                border: 3px orange solid;
            }
        }

        .cont {
            display: inline-block;
        }

        #login2 {
            display: none !important;
        }




    }


    @media(min-width:992px) and (max-width:1199px) {
        .test {
            color: green;
        }




        /* Homepage Conrtainer : */

        #hide {
            display: none !important;
        }

        #nohide {
            display: none !important;
        }




        .head-name {
            border: 3px orange solid;
            border-bottom-left-radius: 30px;
            overflow: hidden;
            white-space: nowrap;
            width: 0;
            animation: typing 1.5s forwards, blink-caret 1.5s forwards;

        }


        @keyframes typing {
            from {
                width: 0%;
            }

            to {
                width: 20%;
            }
        }


        @keyframes blink-caret {

            from,
            to {
                border: 3px orange solid;
            }

            50% {
                border: 3px orange solid;
            }
        }

        .cont {
            display: inline-block;
        }

        #login2 {
            display: none !important;
        }



    }


    @media(min-width:1200px) {
        .test {
            color: red;
        }


        /* Homepage Conrtainer : */


        #hide {
            display: none !important;
        }

        #nohide {
            display: none !important;
        }


        .head-name {
            border: 3px orange solid;
            border-bottom-left-radius: 30px;
            overflow: hidden;
            white-space: nowrap;
            width: 0;
            animation: typing 1.5s forwards, blink-caret 1.5s forwards;

        }


        @keyframes typing {
            from {
                width: 0%;
            }

            to {
                width: 16%;
            }
        }


        @keyframes blink-caret {

            from,
            to {
                border: 3px orange solid;
            }

            50% {
                border: 3px orange solid;
            }
        }

        .cont {
            display: inline-block;
        }

        #login2 {
            display: none !important;
        }



    }

    .hover:hover {
        color: brown;
        transition: 0.5s;
    }


    .hovera:hover {
        background: white;
        border: 2px orange solid;
        border-radius: 10px;
        transition: 0.7s;
        border-bottom-left-radius: 30px;
        border-top-right-radius: 30px;

    }

    .list-group-item {
        padding: 10px !important;
        margin-top: 0;
        height: 40px;
        background: transparent;
        border: none;
    }

    .head-name {
        border: 3px orange solid;
        border-bottom-left-radius: 30px;
        box-shadow: 5px 5px rgb(224, 224, 85);
        transform: scale(0.91);
        transition: 0.5s;
        margin-right: 7% !important;

    }

    .head-name:hover {
        box-shadow: 10px 10px rgb(224, 224, 85);
        transition: 0.5s;
    }

    .fa-xmark:hover {
        color: orange !important;
        transform: scale(1.5);
        transition: 0.5s;
    }

    .menu:hover {
        color: orange !important;
        transform: scale(1.2);
        transition: 0.5s;
    }

    .app {
        display: flex;
        align-items: center;
        flex-direction: row;
    }

    .fa-2x:hover {
        transform: scale(1.2);
        transition: 0.5s;
    }

    .hr-ani {
        display: inline-block;
    }

    .hr-most {
        border: 3px orange solid;
        border-bottom-left-radius: 30px;
        overflow: hidden;
        white-space: nowrap;
        width: 0;
        animation: mymove 2.5s forwards, blink-caret 1.5s forwards;

    }


    @keyframes mymove {
        from {
            width: 0%;
        }

        to {
            width: 70%;
        }
    }


    @keyframes blink-caret {

        from,
        to {
            border: 3px orange solid;
        }

        50% {
            border: 3px orange solid;
        }
    }


    .cont {
        display: inline-block;
    }

    #login2 {
        display: none !important;
    }

    .most {
        border-bottom: 4px brown solid;
        font-family: amiri;
    }

    .card {
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
    }

    .card-img-top:hover {
        transform: scale(1.1);
        transition: 0.5s;
        border-radius: 15px;
    }


    .card-img-top img:hover {
        border-radius: 15px;
    }

    #btn-back-to-top {
        position: fixed;
        bottom: 85px;
        right: 20px;
        display: none;
        z-index: 1;
    }

    .hover-sm:hover {
        font-size: 20px !important;
        color: orange;
    }



    :root {
        --base-grid: 4px;
        --colour-white: #fff;
        --colour-black: #1a1a1a;
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
    }


    .links {
        --link-size: calc(var(--base-grid)*20);
        color: var(--colour-black);
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        min-height: 100vh;
    }

    .links__list {
        position: relative;
        list-style: none;
    }

    .links__item {
        width: var(--link-size);
        height: var(--link-size);
        position: absolute;
        top: 0;
        left: 0;
        margin-top: calc(var(--link-size)/-2);
        margin-left: calc(var(--link-size)/-2);
        --angle: calc(360deg/var(--item-total));
        --rotation: calc(140deg + var(--angle)*var(--item-count));
        transform: rotate(var(--rotation)) translate(calc(var(--link-size) + var(--base-grid)*2)) rotate(calc(var(--rotation)*-1));
    }

    .links__link {
        opacity: 0;
        animation: on-load .3s ease-in-out forwards;
        animation-delay: calc(var(--item-count)*150ms);
        width: 100%;
        height: 100%;
        border-radius: 50%;
        position: relative;
        background-color: var(--colour-white);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: inherit;
    }

    .links__icon {
        width: calc(var(--base-grid)*8);
        height: calc(var(--base-grid)*8);
        transition: all .3s ease-in-out;
        fill: var(--colour-black);
    }

    .links__text {
        position: absolute;
        width: 100%;
        left: 0;
        text-align: center;
        height: calc(var(--base-grid)*2);
        font-size: calc(var(--base-grid)*2);
        display: none;
        bottom: calc(var(--base-grid)*8.5);
        animation: text .3s ease-in-out forwards;
    }

    .links__link:after {
        content: "";
        background-color: transparent;
        width: var(--link-size);
        height: var(--link-size);
        border: 2px dashed var(--colour-white);
        display: block;
        border-radius: 50%;
        position: absolute;
        top: 0;
        left: 0;
        transition: all .3s cubic-bezier(.53, -.67, .73, .74);
        transform: none;
        opacity: 0;
    }

    .links__link:hover .links__icon {
        transition: all .3s ease-in-out;
        transform: translateY(calc(var(--base-grid)*-1));
    }

    .links__link:hover .links__text {
        display: block;
    }

    .links__link:hover:after {
        transition: all .3s cubic-bezier(.37, .74, .15, 1.65);
        transform: scale(1.1);
        opacity: 1;
    }

    @keyframes on-load {
        0% {
            opacity: 0;
            transform: scale(.3);
        }

        70% {
            opacity: .7;
            transform: scale(1.1);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes text {
        0% {
            opacity: 0;
            transform: scale(0.3) translateY(0);
        }

        100% {
            opacity: 1;
            transform: scale(1) translateY(calc(var(--base-grid)*5));
        }
    }

    .kind {
        position: relative;
    }

    .kindd {
        position: absolute;
        top: 0;
        left: 0;
    }

    .alo {
        background: rgba(155, 155, 155, 0.5) !important;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        border-radius: 80px;
        transition: 1s ease;
        opacity: 0.0;

    }

    .ph:hover .alo {
        opacity: 1;
    }

    ::-webkit-input-placeholder{
        text-align: right;
    }
</style>
</head>


<body>

    <div class="header p-1 " style="background:rgb(82, 36, 21);">

        <div class="d-flex justify-content-between align-items-center cont">



            <div class="ml-xl-5 ml-md-5 ml-sm-5 ml-lg-5 ml-3" id="hide"> <button onclick="headerhide()"
                    style="background:transparent; border:none;"><i
                        class="fa-solid fa-bars fa-2x text-white"></i></button></div>


            <div class="ml-xl-5 ml-md-5 ml-sm-5 ml-lg-5 ml-3 d-none" id="nohide"> <button onclick="noheaderhide()"
                    style="background:transparent; border:none;"><i
                        class="fa-solid fa-bars fa-2x text-white"></i></button></div>



            <div class="" id="navlist" style="margin-left:10%;">
                <ul class="list-group list-group-horizontal">
                    <a href="#" class="text-white hovera  h5 text-decoration-none font-weight-bold ml-5 disabled">
                        <li class="list-group-item border-0 hover" style="background:transparent; font-family:lateef;">
                            فرص عمل</li>
                    </a>
                    <a href="#" class="text-white  hovera h5 text-decoration-none font-weight-bold  ml-5">
                        <li class="list-group-item border-0 hover" style="background:transparent;  font-family:lateef;">
                            تقديم مقترح</li>
                    </a>

                    <a href="#" class="text-white hovera h5 text-decoration-none font-weight-bold ml-5">
                        <li class="list-group-item border-0 hover" style="background:transparent;  font-family:lateef;">
                            اوردر تليفون
                        </li>
                    </a>

                </ul>


            </div>




            <div class="h4 head-name text-white mt-2 mb-2 mr-xl-5 mr-md-5 mr-sm-5 mr-lg-5 mr-3 p-3">
                <a href="index.html" class="text-decoration-none text-white" style="font-family:lobster;">
                    AME - Burger
                    <i class="fa-solid fa-utensils"></i>
                </a>
            </div>
        </div>


        <div class=" d-none" id="navsm">

            <div class="nav-sm mt-3 ml-5">
                <a href="#" class="text-white text-decoration-none">
                    <p class="h5  hover hover-sm" style="background:transparent; font-family:lateef;">تقديم مقترح</p>
                </a>
            </div>

            <div class="nav-sm mt-3 ml-5">
                <a href="#" class="text-white text-decoration-none" style="background:transparent; font-family:lateef;">
                    <p class="h5  hover  hover-sm">فرصة عمل </p>
                </a>
            </div>


            <div class="nav-sm mt-3 ml-5">
                <a href="#" class="text-white text-decoration-none  hover-sm"
                    style="background:transparent; font-family:lateef;">
                    <p class="h5  hover">حجز طلب </p>
                </a>
            </div>

        </div>



    </div>










    <div class="container">
        <div class=" text-right mt-5 pb-2 h5 font-weight-bold most">تقديم شكوى أو مقترح
        </div>
    </div>
    <div class="container mt-0 mb-5 hr-ani">
        <hr style="background:orange; width:80%; border: 2px orange solid; margin-top:0; margin-left:10%;"
            class="hr-most" class="float-right">
    </div>


<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$com=$_POST['com'];

$total = [$name , $phone , $com]

$myfile = fopen("complain.txt", "w") or die("Unable to open file!");
fwrite($myfile, $total);
fclose($myfile);


if($myfile == true){
    echo'
    <div class='row'>
    <div class='col-8  mx-auto h3 text-right' style='font-family:amiri;'>تم تقديم الشكوى بنجاح <br><br> نسعى دامًا لتقديم أفضل خدمة</div>
    <a class='col-8  mx-auto h3 text-right text-decoration-none text-secondary' style='font-family:amiri;' href='index.html'> الانتقال لآخر العروض</a>
    </div>';
}else{

    echo'
    <div class='row'>
    <div class='col-8  mx-auto h3 text-right' style='font-family:amiri;'>لم يتم تقديم الشكوى, الرجاء المحاولة مرة ثانيًة <br><br> نسعى دامًا لتقديم أفضل خدمة</div>
    </div>';

}

?>









    <footer style="display:flex; flex-direction:column; align-items:center; background: rgb(222,184,135);" class="mt-5">

        <div style="display:flex; flex-direction:row; align-items:center;" class="mt-5 ">
            <div class="col-3 ml-3"><a href="#"><i class="fab fa-google-play fa-2x"
                        style="color:rgb(82, 36, 21);"></i></a></div>
            <div class="col-3 ml-3"><a href="#"><i class="fa-brands fa-app-store fa-2x"
                        style="color:rgb(82, 36, 21);"></i></a></div>
        </div>

        <hr style="color:gray; width:80%;">

        <div class="">
            <a href="#"> <i class="fa-brands fa-facebook mr-3 fa-2x" style="color:rgb(82, 36, 21);"></i> </a>
            <a href="#"> <i class="fa-brands fa-instagram mr-3 fa-2x" style="color:rgb(82, 36, 21);"></i></a>
            <a href="#"> <i class="fa-brands fa-whatsapp mr-3 fa-2x" style="color:rgb(82, 36, 21);"></i></a>
            <a href="#"> <i class="fa-solid fa-phone mr-3 fa-2x" style="color:rgb(82, 36, 21);"></i></a>


        </div>

        <hr style="color:gray; width:80%;">

        <div class="row" style="display:flex; flex-direction:row; align-items:center;">

            <div class="" style="display:flex; flex-direction:column; align-items:center;">
                <a href="#" style="font-family:lateef; color:rgb(82, 36, 21);" class="h4 text-decoration-none">معلومات
                    عنا</a>
                <a href="#" style="font-family:lateef; color:rgb(82, 36, 21);" class="h4 text-decoration-none">شروط
                    الاستخدام</a>
                <a href="#" style="font-family:lateef; color:rgb(82, 36, 21);" class="h4 text-decoration-none">تواصل</a>
                <a href="#" style="font-family:lateef; color:rgb(82, 36, 21);"
                    class="h4 text-decoration-none">سياستنا</a>
            </div>


            <div class="ml-5" style="display:flex; flex-direction:column; align-items:center;">
                <a href="#" style="font-family:lateef; color:rgb(82, 36, 21);" class="h4 text-decoration-none">جد
                    وظيفة</a>
                <a href="#" style="font-family:lateef; color:rgb(82, 36, 21);"
                    class="h4 text-decoration-none">فروعنا</a>
                <a href="#" class="h4 font-weight-bold  text-decoration-none"
                    style="font-family:lateef;  color:rgb(82, 36, 21);">اطلب الآن</a>
                <a href="#" class="h4 font-weight-bold text-decoration-none"
                    style="font-family:lateef; color:rgb(82, 36, 21);"> شكوى</a>
            </div>


        </div>

        <hr style="color:gray; width:80%;">

        <div class=" mb-3">جميع الحقوق محفوظة &copy; 2022</div>


        <div class=" mb-3" style="font-family:amiri;"> تمت برمجة الموق بواسطة : أحمد خالد الداخلي </div>

    </footer>












    <div class="fixed-bottom row" style="background:rgb(82, 36, 21);" id="fixed">



        <ul class="list-group list-group-horizontal col-12 list-unstyled p-0">

            <div class=" col-3 menu" style="display:flex; flex-direction:column; align-items:center; margin-left:4%;">

                <div class="" style="margin-top: 0;  padding-top:0; font-family: amiri;">
                    <a href="menu.html" class="text-white ml-5 text-decoration-none">
                        <li class="text-center h5 menu">قائمة الطعام</li>
                    </a>
                </div>

                <div class=""><i class="fa-solid fa-utensils text-white menu"></i></div>
            </div>


            <div class="col-3 menu" style="display:flex; flex-direction:column; align-items:center; margin-left:4%;">

                <div class="" style="margin-top: 0;  padding-top:0; font-family: amiri;">
                    <a href="#" class="text-white ml-5 text-decoration-none">
                        <li class="text-center h5 menu">عروض</li>
                    </a>
                </div>

                <div class=""><i class="fa-solid fa-sack-dollar text-white menu"></i></div>
            </div>


            <div class="col-3 menu" style="display:flex; flex-direction:column; align-items:center; margin-left:4%;">

                <div class="" style="margin-top: 0; padding-top:0; font-family: amiri;">
                    <a href="index.html" class="text-white ml-5 text-decoration-none">
                        <li class="text-center h5 menu">الرئيسية</li>
                    </a>
                </div>

                <div class=""><i class="fa-solid fa-house text-white menu"></i></div>
            </div>


            <div class="mt-2 col-1" style="display:flex; flex-direction:column; align-items:center; margin-left:4%;">


                <div class=""><button onclick="hidebottom()" style="background:transparent; border:none;"> <i
                            class="fa-solid fa-xmark text-white float-right"></i></button>
                </div>

            </div>






        </ul>


    </div>






    <script src="./js/main.js"></script>
</body>