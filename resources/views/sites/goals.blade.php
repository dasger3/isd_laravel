<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/media.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_about_us.css')}}">
</head>
<!-- Header --><body>
<div class="header">
    <div class="container_menu_1">

    </div>
    <div class="container_menu_2">
        <div class ="container_menu_3">
            <a class = "menu_logo" href="{{url('')}}"><img class = "menu_logo" src="{{URL::asset('img/menu/logo_150_150.png')}}"></a>
            <div class = "menu">
                <nav class="dws-menu">
                    <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
                    <label for="menu" class="toggleMenu">
                        <img src="{{URL::asset('img/menu/burger_icon.png')}}"><div class = "mb">Меню</div></label>
                    <ul>
                        <li>
                            <a id = "golovna" href="{{url('')}}">Головна</a>
                        </li>
                        <li>
                            <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1">
                            <a href="{{url('isd/goals_of_the_institute')}}">Про інститут</a>
                            <label for="sub_m1" class="toggleSubmenu"></label>
                            <ul>
                                <li><a href="{{url('isd/goals_of_the_institute')}}">Цілі інституту</a></li>
                                <li><a href="{{url('isd/direction_of_activity')}}">Напрями діяльності інституту</a></li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m2">
                            <a href="{{url('isd/1')}}">Міжнародна політика</a>
                            <label for="sub_m2" class="toggleSubmenu"></label>
                            <ul>
                                <li><a href="{{url('isd/1')}}">Міжнародна політика</a></li>
                                <li><a href="{{url('isd/2')}}">Безпека</a></li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m3">
                            <a href="{{url('isd/3')}}">Економічна політика</a>
                            <label for="sub_m3" class="toggleSubmenu"></label>
                            <ul>
                                <li><a href="{{url('isd/3')}}">Міжнародна економічна політика</a></li>
                                <li><a href="{{url('isd/4')}}">Внутрішня економічна політика</a></li>
                                <li><a href="{{url('isd/5')}}">Економічна історія</a></li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m4">
                            <a href="{{url('isd/urbanism')}}">Супільство</a>
                            <label for="sub_m4" class="toggleSubmenu"></label>
                            <ul>
                                <li><a href="{{url('isd/urbanism')}}">Урбаністика</a></li>
                                <li><a href="{{url('isd/8')}}">Історія</a></li>
                                <li><a href="{{url('isd/civil_society')}}">Громадянське суспільство</a></li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m5">
                            <a href="{{url('isd/list_expert/permanent')}}">Експерти</a>
                            <label for="sub_m5" class="toggleSubmenu"></label>
                            <ul>
                                <li><a href="{{url('isd/list_expert/permanent')}}">Постійні експерти</a></li>
                                <li><a href="{{url('isd/list_expert/invited')}}">Запрошені експерти</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('library')}}">Бібліотека</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Main -->
<div class = "container_content">
    <img class = "log_photo" src="{{URL::asset('img/menu/logo_black.png')}}">
    <p class = "heading6">Ціль інституту:</p>
    <p class = "heading7">Інститут суспільних досліджень  – це аналітичний центр, що займається:</p>
    <p class = "heading7">- науковими дослідженнями у сфері міжнародної політики і безпеки, економічної політики, історії, урбаністики та розвитку громадянського суспільства;</p>
    <p class = "heading7">- розробкою проектів, програм та стратегій розвитку;</p>
    <p class = "heading7">-популяризацією результатів досліджень у суспільстві.</p>
    <p class = "heading6 heading8">Місія: </p>
     <p class = "heading7">Зробити ідеї розвитку української новомодерной нації та нової економічної політики доступними та зрозумілими кожноному громадянину.</p>
    <p class = "heading7">Заснований в місті Дніпро як громадська організація, науково-дослідна та просвітницька фундація. Діє з грудня 2003 року. </p>

    <div class = "container_link">
        <a href="https://www.facebook.com/Institute.For.Social.Studies"><img class = "link_icon" src="{{URL::asset('img/main/icon_facebook.png')}}"></a>
        <a href="https://www.youtube.com/channel/UCslObUNpij26zflUM-PoGBA"><img class = "link_icon" src="{{URL::asset('img/main/icon_youtube.png')}}"></a>
        <img class = "link_icon" src="{{URL::asset('img/main/icon_linkedin.png')}}">
    </div>
    
   
</div>
<!-- Footer -->
<div class = "footer">
    <div class = "container_footer">Інститут суспільних досліджень © 2020</div>
</div>
</body>
</html>
