<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/media.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_index.css')}}">

    <link rel="shortcut icon" href="img/logo.png" type="image/png">
</head>
<!-- Header -->
<body>
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
<?php
        function nl2br2($string) {
            $string = str_replace(array("\r\n)","\r","\n"),"<br />",$string);
            echo $string;
        }
?>
<div class = "main">
    <div class = "container_content">
        <div class = "left_part">
            <p class = "heading_a">{{$articles->artname}}</p>
            <div class = "container_date">
                <p class = "heading5">{{$articles->date}}</p>
            </div>
            <hr>
            <img class = "main_state_img" src="{{Storage::url($articles->photo)}}">

            <p class = "heading15">
                {{nl2br2($articles->text)}}
            </p>
            <div class ="about_state">
                <?php
                 $ex=App\List_expert::find($articles->expert_id);    
                ?>
                <p class = "heading4-1">
                    {{$ex->prof}}
                </p>
                <p class = "heading4-1">
                    {{$ex->name}}
                </p>
                <a class = "headingl" href="{{$articles->link}}">
                Дізнатися більше
                </a>
            </div>
        </div>


       <div class = "right_part">
            <label htmlFor='login_user'></label>
                    <form method="get" class="container_search" action="/../search?go">
                        <input type="text" name="search" class="search" placeholder = "Пошук">
                        <div class  = "right_icon">
                         <input type="submit" name="submit" value = "" class = "right_icon">   
                        </div>
                    </form>
            <div class = "container_category">
                <p class  = "heading1">Книги поштою</p>
                <hr>
                <img class = "list_of_category" src="{{URL::asset('img/main/book.jpg')}}">
            </div>
            <div class = "container_category">
                    <p class  = "heading1">Subcribe </p>
                    <hr>
                    <div class = "list_of_category">
                        <form class = "form_s" method="GET" action="">
                            <input name="email" type="text" class = "rasist" placeholder="email"/>
                            <input type="submit" class = "subcribe_button" value="Підписатися" />
                            <?php                     
                            if(isset($_GET['email'])){
                                $email = $_GET['email'];    
                                $result = mysqli_query($connect, "INSERT INTO email_users (email) VALUES ('$email')");
                                
                            }
                            ?>
                            
                        </form>
                    </div>
                    
                </div>
            <div class = "container_social">
                <a href="https://www.facebook.com/Institute.For.Social.Studies"><img src="{{URL::asset('img/main/icon_facebook.png')}}"> </a>
                <a href="https://www.youtube.com/channel/UCslObUNpij26zflUM-PoGBA"><img src="{{URL::asset('img/main/icon_linkedin.png')}}"> </a>
                <a href=""><img src="{{URL::asset('img/main/icon_youtube.png')}}"> </a>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<div class = "footer">
    <div class = "container_footer">Інститут суспільних досліджень © 2020</div>
</div>
</body>
</html>
