<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="d-flex">
                <div class="logo navbar-brand-box">
                    <a href="page.html">
                        <img src="https://themesdesign.in/dason-node/layouts/default/assets/images/logo-sm.svg" alt="" width="32px" height="32px">
                        <h1>DASON</h1>
                    </a>
                </div>
                <button type="button" class="btn1" id="vertical-menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--charm" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16" data-icon="charm:menu-hamburger" style="color: white; font-size: 21px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5"></path></svg>
                </button>
                <form class="app-search">
                    <div class="position-relative">
                        <input type="text" placeholder="Search...">
                        <button class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="13" height="13" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="bx:search-alt" data-width="13" data-height="13" style="color: white;"><path fill="currentColor" d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z"></path><path fill="currentColor" d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z"></path></svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="d-flex align-center">
                <div class="drop-btn">
                    <div class="btn-group">
                        <div class="btn-group">
                            <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img src="images/us.jpg" alt="" height="16">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end" style="margin-top: 23px;">
                                <li><button class="dropdown-item" type="button">
                                        <img src="images/us.jpg" alt="" height="12">
                                        <span>English</span>
                                    </button></li>
                                <li><button class="dropdown-item" type="button">
                                        <img src="images/spain.jpg" alt="" height="12">
                                        <span>Spain</span>
                                    </button></li>
                                <li><button class="dropdown-item" type="button">
                                        <img src="images/germany.jpg" alt="" height="12">
                                        <span>Germany</span>
                                    </button></li>
                                <li><button class="dropdown-item" type="button">
                                        <img src="images/italy.jpg" alt="" height="12">
                                        <span>Italy</span>
                                    </button></li>
                                <li><button class="dropdown-item" type="button">
                                        <img src="images/russia.jpg" alt="" height="12">
                                        <span>Russian</span>
                                    </button></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="drop-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon icon-lg layout-mode-dark"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                </div>
                <div class="drop-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid icon-lg"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                </div>
                <div class="drop-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell icon-lg"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <span class="five">5</span>
                </div>
                <div class="drop-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-lg"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                </div>
                <div class="drop-btn1">
                    <button id="btn" onclick="btn()" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://themesdesign.in/dason-node/layouts/default/assets/images/users/avatar-1.jpg" alt="" width="31" height="31" class="radius">
                        <span>Paul K. </span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ep" width="12" height="19.5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" data-icon="ep:arrow-down" data-width="12" data-height="19.5" style="color: white;"><path fill="currentColor" d="M831.872 340.864L512 652.672L192.128 340.864a30.592 30.592 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.592 30.592 0 0 0-42.752 0z"></path></svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-rg-end letf" style="left: 1093.35pc;">
                        <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="16" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="mdi:face-man-profile" data-width="16" data-height="24" style="margin-left: 10px;"><path fill="currentColor" d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m0 6.39A9.973 9.973 0 0 0 17.42 10c.78 0 1.53-.09 2.25-.26c.21.71.33 1.47.33 2.26c0 4.41-3.59 8-8 8c-3 0-5.61-1.66-7-4.11L6.75 14v-1A1.25 1.25 0 0 1 8 11.75A1.25 1.25 0 0 1 9.25 13v1H12m4-2.25A1.25 1.25 0 0 0 14.75 13A1.25 1.25 0 0 0 16 14.25A1.25 1.25 0 0 0 17.25 13A1.25 1.25 0 0 0 16 11.75Z"></path></svg> <span class="pro">Profile</span></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bxs" width="16" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="bxs:lock" data-width="16" data-height="24" style="margin-left: 10px;"><path fill="currentColor" d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm4 10.723V20h-2v-2.277a1.993 1.993 0 0 1 .567-3.677A2.001 2.001 0 0 1 14 16a1.99 1.99 0 0 1-1 1.723z"></path></svg> <span class="pro">Lock screen</span></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ion" width="16" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" data-icon="ion:exit-outline" data-width="16" data-height="24" style="margin-left: 10px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 176v-40a40 40 0 0 0-40-40H88a40 40 0 0 0-40 40v240a40 40 0 0 0 40 40h192a40 40 0 0 0 40-40v-40m64-160l80 80l-80 80m-193-80h273"></path></svg> <span class="pro">fLogout</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="full">
    <div class="acor" style="padding-top: 30px;  height: 875px;">
        <span class="men2" style="padding: 21px;">Menu</span><br>
        <span class="color menu2">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="bx:home-alt" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 10px;"><path fill="currentColor" d="M5 22h14a2 2 0 0 0 2-2v-9a1 1 0 0 0-.29-.71l-8-8a1 1 0 0 0-1.41 0l-8 8A1 1 0 0 0 3 11v9a2 2 0 0 0 2 2zm5-2v-5h4v5zm-5-8.59l7-7l7 7V20h-3v-5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v5H5z"></path></svg>
        Dashboard
      </span>
        <span class="men2 min" style="padding-top: 30px;">Apps</span><br>
        <!-- <span><span class="iconify" style=" margin-right: 10px;" data-icon="bi:chat-left" style="color: #545a6d;" data-width="20" data-height="20"></span> Chat</span> -->
        <br>
        <button class="accordion ser" style="padding-bottom: 22px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--eva" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="eva:shopping-cart-outline" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 10px;"><path fill="currentColor" d="M21.08 7a2 2 0 0 0-1.7-1H6.58L6 3.74A1 1 0 0 0 5 3H3a1 1 0 0 0 0 2h1.24L7 15.26A1 1 0 0 0 8 16h9a1 1 0 0 0 .89-.55l3.28-6.56A2 2 0 0 0 21.08 7Zm-4.7 7H8.76L7.13 8h12.25Z"></path><circle cx="7.5" cy="19.5" r="1.5" fill="currentColor"></circle><circle cx="17.5" cy="19.5" r="1.5" fill="currentColor"></circle></svg>Esommerse
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--akar-icons" width="10" height="10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" onclick="rotate()" data-icon="akar-icons:chevron-right" data-width="10" data-height="10" style="color: rgb(84, 90, 109); margin-left: 70px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 4l8 8l-8 8"></path></svg>
        </button>
        <div class="panel">
            <p>orders <br><br> crad<br><br>shop</p>
        </div>
        <span class="chat ser" style="padding: 20px 0;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bi" width="15" height="15" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16" data-icon="bi:chat-left" data-width="15" data-height="15" style="color: rgb(84, 90, 109); margin-right: 12px;"><path fill="currentColor" d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path></svg>Chat</span>
        <br>
        <button class="accordion ser active" style="    padding-top: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" data-icon="carbon:email" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 10px;"><path fill="currentColor" d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z"></path></svg>Email
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--akar-icons" width="10" height="10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" onclick="rotate()" data-icon="akar-icons:chevron-right" data-width="10" data-height="10" style="color: rgb(84, 90, 109); margin-left: 110px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 4l8 8l-8 8"></path></svg>
        </button>
        <div class="panel" style="margin-top: 10px;">
            <p>orders <br><br> crad<br><br>shop</p>
        </div>
        <span class="ser2" style="margin-left: 20px; "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ci" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="ci:calendar-calendar" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 8px;"><path fill="currentColor" d="M18.999 22h-14a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2V2h2v2h6V2h2v2h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2Zm-14-12v10h14V10h-14Zm0-4v2h14V6h-14Z"></path></svg>Clendar</span><br>
        <button class="accordion ser active" style="    padding-top: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" data-icon="carbon:email" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 10px;"><path fill="currentColor" d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z"></path></svg>Email
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--akar-icons" width="10" height="10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" onclick="rotate()" data-icon="akar-icons:chevron-right" data-width="10" data-height="10" style="color: rgb(84, 90, 109); margin-left: 110px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 4l8 8l-8 8"></path></svg>
        </button>
        <div class="panel" style="margin-top: 10px;">
            <p>orders <br><br> crad<br><br>shop</p>
        </div>
        <div class="panel">
            <p>orders <br><br> crad<br><br>shop</p>
        </div>
        <span class="ser" style="padding-left: 20px;">Pages</span>
        <br>
        <button class="accordion ser active" style="    padding-top: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" data-icon="carbon:email" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 10px;"><path fill="currentColor" d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z"></path></svg>Email
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--akar-icons" width="10" height="10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" onclick="rotate()" data-icon="akar-icons:chevron-right" data-width="10" data-height="10" style="color: rgb(84, 90, 109); margin-left: 110px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 4l8 8l-8 8"></path></svg>
        </button>
        <div class="panel" style="margin-top: 10px;">
            <p>orders <br><br> crad<br><br>shop</p>
        </div>
        <span class="ser2" style="margin-left: 20px; "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ci" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="ci:calendar-calendar" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 8px;"><path fill="currentColor" d="M18.999 22h-14a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2V2h2v2h6V2h2v2h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2Zm-14-12v10h14V10h-14Zm0-4v2h14V6h-14Z"></path></svg>Clendar</span><br>
        <button class="accordion ser active" style="    padding-top: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" data-icon="carbon:email" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 10px;"><path fill="currentColor" d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z"></path></svg>Email
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--akar-icons" width="10" height="10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" onclick="rotate()" data-icon="akar-icons:chevron-right" data-width="10" data-height="10" style="color: rgb(84, 90, 109); margin-left: 110px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 4l8 8l-8 8"></path></svg>
        </button>
        <div class="panel" style="margin-top: 10px;">
            <p>orders <br><br> crad<br><br>shop</p>
        </div>
        <span class="ser" style="padding-left: 20px;" >Pages</span><br>
        <button class="accordion ser active" style="    padding-top: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" data-icon="carbon:email" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 10px;"><path fill="currentColor" d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z"></path></svg>Email
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--akar-icons" width="10" height="10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" onclick="rotate()" data-icon="akar-icons:chevron-right" data-width="10" data-height="10" style="color: rgb(84, 90, 109); margin-left: 110px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 4l8 8l-8 8"></path></svg>
        </button>
        <div class="panel" style="margin-top: 10px;">
            <p>orders <br><br> crad<br><br>shop</p>
        </div>
        <span class="ser2" style="margin-left: 20px; "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ci" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="ci:calendar-calendar" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 8px;"><path fill="currentColor" d="M18.999 22h-14a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2V2h2v2h6V2h2v2h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2Zm-14-12v10h14V10h-14Zm0-4v2h14V6h-14Z"></path></svg>Clendar</span><br>
        <button class="accordion ser active" style="    padding-top: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" data-icon="carbon:email" data-width="20" data-height="20" style="color: rgb(84, 90, 109); margin-right: 10px;"><path fill="currentColor" d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z"></path></svg>Email
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--akar-icons" width="10" height="10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" onclick="rotate()" data-icon="akar-icons:chevron-right" data-width="10" data-height="10" style="color: rgb(84, 90, 109); margin-left: 110px;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 4l8 8l-8 8"></path></svg>
        </button>
        <div class="panel" style="margin-top: 10px;">
            <p>orders <br><br> crad<br><br>shop</p>
        </div>
    </div>
    <div class="cull" style="width: 100%; padding-left: 75px;">
        <div class="div9">
            <div class="div1">
                <div class="div3" style="display: flex;justify-content: space-between;">
                    <h1 style="display: inline;">Starter Page</h1>
                    <span class="spa">
                  <a href="#">Pages</a>
                  <span class="iconify" data-icon="ant-design:right-outlined" data-width="10" data-height="12"></span>Starter Page</span>
                </div>
            </div>
        </div>
        <table class="styled-table">
            <thead>
            <tr class="active-row">
                <th>Rank</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Name</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Points</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Team</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Phone</th>
                <th></th>
                <th></th>
                <th></th>
                <th class="">Gender</th>
                <th></th>
                <th></th>
                <th></th>
                <th>gmail</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Edit</th>
                <th></th>
                <th></th>
            </tr>

            </thead>
            <tbody>
            <tr class="active-row">
                <td>1</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Dom</td>
                <th></th>
                <th></th>
                <th></th>
                <td>6000</td>
                <th></th>
                <th></th>
                <th></th>
                <td>decode</td>
                <th></th>
                <th></th>
                <th></th>
                <td>999999999</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Male</td>
                <th></th>
                <th></th>
                <th></th>
                <td>@acd</td>
                <th></th>
                <th></th>
                <th></th>
                <td>
                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <span class="iconify" data-icon="raphael:pensil"></span>
                    </a>
                </td>
                <th></th>
                <th></th>

            </tr>
            <tr class="active-row">
                <td>2</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Tom</td>
                <th></th>
                <th></th>
                <th></th>
                <td>6000</td>
                <th></th>
                <th></th>
                <th></th>
                <td>decode</td>
                <th></th>
                <th></th>
                <th></th>
                <td>999999999</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Male</td>
                <th></th>
                <th></th>
                <th></th>
                <td>@acd</td>
                <th></th>
                <th></th>
                <th></th>
                <td>
                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <span class="iconify" data-icon="raphael:pensil"></span>
                    </a>
                </td>
                <th></th>
                <th></th>

            </tr>
            <tr class="active-row">
                <td>3</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Melissa</td>
                <th></th>
                <th></th>
                <th></th>
                <td>5150</td>
                <th></th>
                <th></th>
                <th></th>
                <td>decode</td>
                <th></th>
                <th></th>
                <th></th>
                <td>888888888</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Famale</td>
                <th></th>
                <th></th>
                <th></th>
                <td>@mdo</td>
                <th></th>
                <th></th>
                <th></th>
                <td>
                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <span class="iconify" data-icon="raphael:pensil"></span>
                    </a>
                </td>
                <th></th>
                <th></th>
            </tr>
            <tr class="active-row">
                <td>4</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Tom</td>
                <th></th>
                <th></th>
                <th></th>
                <td>6000</td>
                <th></th>
                <th></th>
                <th></th>
                <td>decode</td>
                <th></th>
                <th></th>
                <th></th>
                <td>999999999</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Male</td>
                <th></th>
                <th></th>
                <th></th>
                <td>@acd</td>
                <th></th>
                <th></th>
                <th></th>
                <td>
                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <span class="iconify" data-icon="raphael:pensil"></span>
                    </a>
                </td>
                <th></th>
                <th></th>

            </tr>
            <tr class="active-row">
                <td>5</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Dom</td>
                <th></th>
                <th></th>
                <th></th>
                <td>6000</td>
                <th></th>
                <th></th>
                <th></th>
                <td>decode</td>
                <th></th>
                <th></th>
                <th></th>
                <td>777777777</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Male</td>
                <th></th>
                <th></th>
                <th></th>
                <td>@fat</td>
                <th></th>
                <th></th>
                <th></th>
                <td>
                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <span class="iconify" data-icon="raphael:pensil"></span>
                    </a>
                </td>
                <th></th>
                <th></th>
            </tr>
            <tr class="active-row">
                <td>6</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Dom</td>
                <th></th>
                <th></th>
                <th></th>
                <td>6000</td>
                <th></th>
                <th></th>
                <th></th>
                <td>decode</td>
                <th></th>
                <th></th>
                <th></th>
                <td>999999999</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Male</td>
                <th></th>
                <th></th>
                <th></th>
                <td>@acd</td>
                <th></th>
                <th></th>
                <th></th>
                <td>
                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <span class="iconify" data-icon="raphael:pensil"></span>
                    </a>
                </td>
                <th></th>
                <th></th>

            </tr>
            <tr class="active-row">
                <td>7</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Melissa</td>
                <th></th>
                <th></th>
                <th></th>
                <td>5150</td>
                <th></th>
                <th></th>
                <th></th>
                <td>decode</td>
                <th></th>
                <th></th>
                <th></th>
                <td>666666666</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Famale</td>
                <th></th>
                <th></th>
                <th></th>
                <td>@twitter</td>
                <th></th>
                <th></th>
                <th></th>
                <td>
                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <span class="iconify" data-icon="raphael:pensil"></span>
                    </a>
                </td>
                <th></th>
                <th></th>
            </tr>
            <tr class="active-row">
                <td>8</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Jeck</td>
                <th></th>
                <th></th>
                <th></th>
                <td>6000</td>
                <th></th>
                <th></th>
                <th></th>
                <td>decode</td>
                <th></th>
                <th></th>
                <th></th>
                <td>999999999</td>
                <th></th>
                <th></th>
                <th></th>
                <td>Male</td>
                <th></th>
                <th></th>
                <th></th>
                <td>@acd</td>
                <th></th>
                <th></th>
                <th></th>
                <td>
                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <span class="iconify" data-icon="raphael:pensil"></span>
                </td>
                <th></th>
                <th></th>

            </tr>
            <!-- and so on... -->
            </tbody>
        </table>
    </div>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="main.js"></script>
<!-- Code injected by live-server -->

</body>
</html>
