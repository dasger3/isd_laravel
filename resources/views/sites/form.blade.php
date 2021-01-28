<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/media.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style_list_of_experts.css')}}">
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
<div class = "main">
        <div class = "container_content">
            <div class = "left_part left_part1">
                    <?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if(isset($_GET['submit'])){
   $search = explode(" ", $_GET['search']);
    $query = mysqli_query($connect, "SELECT * FROM article_experts WHERE artname LIKE '%$search[0]%' OR text LIKE '%$search[0]%' ORDER BY date DESC");
    while($rowe = mysqli_fetch_assoc($query)) {
        $pages=App\Article_expert::find($rowe['id']);     ?>
        <div class = "second_state">
                    <img class  = "second_block_left1" src="{{Storage::url($pages->photo)}}">
                    <div class = "second_block_right">
                        <a  class = "heading4" href="isd/library/{{$pages->id}}">{{$pages->artname}}</a>
                        <div class = "container_main_text">
                            <a class = "heading5" href="isd/library/{{$pages->id}}">{{$pages->theme1}}</a>
                        </div>
                        <div class = "container_date">
                            <a class = "heading5" href="isd/library/{{$pages->id}}">{{$pages->date}}</a>
                            <a href = "isd/library/{{$pages->id}}"><img class  = "date_icon" src="img/main/icon_more.png"></a>
                        </div>
                    </div>
         </div>
    <?php
    }
    $query = mysqli_query($connect, "SELECT * FROM list_experts WHERE name LIKE '%$search[0]%' OR prof LIKE '%$search[0]%' ORDER BY name");
    while($row = mysqli_fetch_assoc($query)) {
              $ex=App\List_expert::find($row['id']);     ?>
        
        <div class = "profile">
                <a href="isd/list_expert/permanent/{{$ex->id}}">
                    <img class  = "profile_icon" src="{{Storage::url($ex->photo)}}"></a>
                <div class = "profile_info">
                    <a href="isd/list_expert/permanent/{{$ex->id}}"><p  class = "heading_le2">{{$ex->name}}</p> </a>
                    <a href="isd/list_expert/permanent/{{$ex->id}}"><p  class = "heading_le3">{{$ex->prof}}</p></a>
                    <div class = "container_contact">
                        <img class  = "contact_icon" src="{{URL::asset('img/facebook_icon.png')}}">
                        <a  class = "heading_le3" href="{{$ex->facebook}}">Facebook</a>
                    </div>
                    <div class = "container_contact">
                        <img class  = "contact_icon" src="{{URL::asset('img/mail_icon.png')}}">
                        <p  class = "heading_le3" href="">{{$ex->email}}</p>
                    </div>
                    
                </div>
            </div>
      <?php  } } ?>        

				
            </div>




            <div class = "right_part">
                
                     <label htmlFor='login_user'></label>
                    <form method="get" class="container_search" action="search?go">
                        <input type="text" name="search" class="search">
                        <div class  = "right_icon">
                         <input type="submit" name="submit" value = "" class = "right_icon">   
                        </div>
                    </form>
                
                  
                <div class = "container_category">
                    <p class  = "heading1">Книги поштою</p>
                    <hr>
                    <img class = "list_of_category" src="img/main/book.jpg">
                </div>
                <div class = "container_category">
                    <p class  = "heading1">Subcribe </p>
                    <hr>
                    <div class = "list_of_category">
                        <form class = "form_s" onSubmit={this.handleAuth} >
                        <div class="form-group">
                            <label htmlFor='login_user'></label>
                            <input
                                id='login_user'
                                name='login_user'
                                placeholder = 'e-mail'
                                rows='10'
                                value=""
                                onChange={this.handleFieldChange}
                            />
                        </div>
                        </form>
                    </div>
                    <div class = "subcribe_button"><a href="">Підписатися</a></div>
                </div>
                <div class = "container_social">
                        <a href="https://www.facebook.com/Institute.For.Social.Studies"><img src="img/main/icon_facebook.png"> </a>
                        <a href="https://www.youtube.com/channel/UCslObUNpij26zflUM-PoGBA"><img src="img/main/icon_youtube.png"> </a>
                        <a href=""><img src="img/main/icon_linkedin.png"> </a>
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

