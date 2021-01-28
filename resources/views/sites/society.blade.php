<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/media.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_info.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_index.css')}}">
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
    <div class = "main">
        <img class = "main" src="{{URL::asset('img/info/gs.jpg')}}">
        <div class = "main_block_u">
            <a href ="{{url('isd/9')}}"><p class = "heading_category_1">Управління громад</p></a>
        </div>
        <div class = "main_block_u main_block_u2">
            <a href ="{{url('isd/10')}}"><p class = "heading_category_1">Суспільство і насилля</p></a>

        </div>
</div>
<div class = "container_content_i">
    <p class = "heading_category_3">
        «Громадянське суспільство» - динамічне поняття. В час швидкої комунікації та доступної інформації, самоідентифікація людини залежить від багатьох факторів. Інститут суспільних досліджень аналізує зміни самоідентифікації різних поколінь.
        Ми досліджуємо динаміку ставлення різних вікових та соціальних груп до понять: персональних свобод, державності, громадянського обов’язку і ролі суспільства в досягнені персональної мети.
        У сьогоденні технологія набуває статусу визначального чинника у житті людини, витісняючи на другий план економіку і політику. ІСД вивчає вплив технологічного розвитку і пов’язаних з цим процесів на формування нового суспільства.
    </p>
    <hr>
</div>

<div class = "second_block">
    <?php 
        $i=0; 
        $query = mysqli_query($connect, "SELECT * FROM article_experts WHERE category_id=11 ORDER BY date DESC");
        while($rowe = mysqli_fetch_assoc($query)) {
            $article=App\Article_expert::find($rowe['id']);     
    ?>
    <div class = "second_state third_block article_block">
        <div class = "second_block_left">
        <img class  = "second_block_left" src="{{Storage::url($article->photo)}}">
        
            <a  class = "heading4" href="library/{{$article->id}}">{{$article->artname}}</a>
            <div class = "container_main_text">
                <a class = "heading5" href="library/{{$article->id}}">{{$article->theme1}}</a>
            </div>
        </div>
        <div class = "second_block_right third_block_right">    
        
        <div class = "container_date">
                <a class = "heading5" href="library/{{$article->id}}">{{$article->date}}</a>
                <a href = "library/{{$article->id}}"><img class  = "date_icon" src="{{URL::asset('img/main/icon_more.png')}}"></a>
        </div>
        </div>
    </div>
    <?php 
        $i++; 
        if ($i==6)
            break;
        }
    ?>
   
</div>				    
<!-- Footer -->
<div class = "footer">
    <div class = "container_footer">Інститут суспільних досліджень © 2020</div>
</div>
</body>
</html>
