<?php


namespace App\Http\Controllers\Tools;


use Illuminate\Support\Facades\DB;

class Render
{
    public function view_bg($module)
    {
        $str = '<style>
                    .view_action{
                        position: fixed;
                        display: none;
                        padding: 30px;
                        width: 370px;
                        height: 250px;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%,-50%);
                        background-color: #999;
                        text-align: center;
                    }
                    .view_action select{
                        width: 60%;
                        height: 30px;
                        margin: 20px 0;
                    }
                    .view_select_img{
                        padding: 30px;
                        position: fixed;
                        display: none;
                        width: 500px;
                        height: 200px;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%,-50%);
                        background-color: #999;
                    }
                    .view_action button{
                        width: 60%;
                        height: 30px;
                        display: block;
                        margin: 20px auto;
                        background-color: #00b0ff;
                    }
                    .view_select_img span{
                        position: absolute;
                        right: 20px;
                        top: 20px;
                        background-color: orange;
                        padding: 5px;
                        margin-right: 30px;
                        cursor: pointer;
                        color: #fff;
                    }
                    .img_list{
                        padding-top: 30px;
                        position: fixed;
                        left: 50%;
                        top: 10%;
                        width: 900px;
                        height: 500px;
                        overflow: auto;
                        transform: translateX(-50%);
                        z-index: 1;
                        background: #999;
                        display: none;
                    }
                    .view{
                        margin-bottom: 200px;
                    }
                    .img_close{
                        width: 30px;
                        background: orange;
                        color: #fff;
                        position: absolute;
                        right: 0;
                        top: 0;
                        font-size: 28px;
                        text-align: center;
                        cursor: pointer;
                    }
                    .label{
                        width: 200px;
                        text-align: center;
                        float: left;
                        margin: 10px;
                    }
                    .img_from_list{
                        display: block;
                        display: none;
                    }
                    .img_local{
                        width: 200px;
                        height: 30px;
                    }
                    .view_submit{
                        width: 80px;
                        height: 30px;
                        background-color: #00b0ff;
                    }
                    .view_true_submit{
                        position: fixed;
                        bottom: 10%;
                        left: 50%;
                        width: 300px;
                        height: 50px;
                        font-size: 30px;
                        background-color: #00b0ff;
                        transform: translateX(-50%);
                    }
                    .view_select_img button{
                        display: inline-block;
                        margin: 0 auto;
                        width: 120px;
                        height: 30px;
                        background-color: #00b0ff;
                    }
                </style>
                <body>
                <input class="view_update_id" type="hidden" name="id" value="{{$block->id}}">
                <div class="view">
                    {!! $block->context !!}
                </div>

                <p class="view_action">
                    <span>要改变的选项</span><br><br>
                    <select name="" id="view_select_action">
                        <option value="bg_img">背景图片</option>
                        <option value="bg_color">背景颜色</option>
                    </select>
                    <button class="view_submit">确定</button>
                </p>
                <p class="view_select_img" >
                    <img width="200px" height="120px" class="img_from_list" src="" alt="">
                    <span class="from_img_list">图库选取</span>
                    <button class="view_bg_submit" value="">提交</button>
                    <button class="view_bg_close" value="">取消</button>
                </p>
                <p class="img_list">
                    <span class="img_close">×</span>
                    @foreach($img_list as $item)
                        <label class="label">
                            <img width="200px" height="100px" src="{{url($item->file_name)}}" alt=""><br>
                            <input class="radio" type="radio" name="img" value="{{$item->file_name}}" id="{{$item->id}}">
                        </label>
                    @endforeach
                </p>
                <button class="view_true_submit">确定修改</button>
                </body>
                <script !src="">
                    let div = document.getElementsByTagName(\'div\')
                    let node = \'\'
                    let old = []
                    for (let i = 0; i < div.length; i++) {
                        if (div[i].getAttribute(\'img_id\') !== null){
                            old.push(div[i].getAttribute(\'img_id\'))
                        }
                        div[i].onclick = function(){
                            event.stopPropagation( );
                            event.preventDefault();
                            node = div[i]
                            $(\'.view_action\').toggle()
                        }
                    }
                    $(\'.view_submit\').click(()=>{
                        if($(\'#view_select_action\').val()==\'bg_img\'){
                            $(\'.view_select_img\').toggle()
                        }else{
                            $(\'.view_bg_color\').show()
                        }
                        $(\'.view_action\').hide()
                    })

                    $(\'.from_img_list\').click(()=>{
                        $(\'.img_list\').toggle()
                    })

                    $(\'.img_close\').click(()=>{
                        $(\'.img_list\').toggle()
                        if($(\'input:radio:checked\').val()!=\'\'){
                            $(\'.img_local\').hide()
                            $(\'.img_from_list\').attr(\'src\',\'/\'+$(\'input:radio:checked\').val())
                            $(\'.img_from_list\').attr(\'img_id\',$(\'input:radio:checked\').attr(\'id\'))
                            $(\'.img_from_list\').show()
                            $(\'.view_select_img\').show()
                        }
                    })
                    $(\'.view_bg_submit\').click(()=>{
                        node.style.backgroundImage= \'url(\'+$(\'.img_from_list\')[0].src+\')\'
                        node.setAttribute(\'img_id\',$(\'.img_from_list\').attr(\'img_id\'))
                        $(\'.view_select_img\').hide()
                    })
                    $(\'.view_bg_close\').click(()=>{
                        $(\'.view_select_img\').toggle()
                    })
                    $(\'.view_true_submit\').click(()=>{
                        let img_id = []
                        let div_img_id = document.getElementsByTagName(\'div\')
                        for (let j = 0; j < div.length; j++) {
                            if (div_img_id[j].getAttribute(\'img_id\') !== null){
                                img_id.push(div_img_id[j].getAttribute(\'img_id\'))
                            }
                        }
                        let view = document.getElementsByClassName(\'view\')[0]
                        let str = nodeToString(view);
                        $.ajax({
                            //提交数据的类型 POST GET
                            type:"POST",
                            headers: {
                                \'X-CSRF-TOKEN\': $(\'meta[name="csrf-token"]\').attr(\'content\')
                            },
                            //提交的网址
                            url:\'/admin/action/view_update\',
                            //提交的数据
                            data:{\'id\':$(\'.view_update_id\').val(),\'html\':str,\'new\':img_id,\'old\':old},
                            //返回数据的格式
                            dataType: "text",
                            //成功返回之后调用的函数
                            success:function(data){
                                console.log(data)
                            },
                            error:function () {
                                window.location.href="/admin/view/block"
                            }
                        });
                    })
                    function nodeToString ( node ) {
                        let tmpNode = document.createElement( "div" );
                        tmpNode.appendChild( node.cloneNode( true ) );
                        let str = tmpNode.innerHTML;
                        tmpNode = node = null; // prevent memory leaks in IE
                        return str;
                    }

                </script>
                </html>
                ';
        $module .= '<meta name="csrf-token" content="{{ csrf_token() }}">' . $str;
        return $module;
    }

    public function view_img($module)
    {
        $str = '<style>
    .view_action{
        position: fixed;
        display: none;
        padding: 30px;
        width: 370px;
        height: 250px;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        background-color: #999;
        text-align: center;
    }
    .view_action select{
        width: 60%;
        height: 30px;
        margin: 20px 0;
    }
    .view_select_img{
        padding: 30px;
        position: fixed;
        display: none;
        width: 500px;
        height: 200px;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        background-color: #999;
    }
    .view_action button{
        width: 60%;
        height: 30px;
        display: block;
        margin: 20px auto;
        background-color: #00b0ff;
    }
    .view_select_img span{
        position: absolute;
        right: 20px;
        top: 20px;
        background-color: orange;
        padding: 5px;
        margin-right: 30px;
        cursor: pointer;
        color: #fff;
    }
    .img_list{
        padding-top: 30px;
        position: fixed;
        left: 50%;
        top: 10%;
        width: 900px;
        height: 500px;
        overflow: auto;
        transform: translateX(-50%);
        z-index: 1;
        background: #999;
        display: none;
    }
    .view{
        margin-bottom: 200px;
    }
    .img_close{
        width: 30px;
        background: orange;
        color: #fff;
        position: absolute;
        right: 0;
        top: 0;
        font-size: 28px;
        text-align: center;
        cursor: pointer;
    }
    .label{
        width: 200px;
        text-align: center;
        float: left;
        margin: 10px;
    }
    .img_from_list{
        display: none;
    }
    .img_local{
        width: 200px;
        height: 30px;
    }
    .view_submit{
        width: 80px;
        height: 30px;
        background-color: #00b0ff;
    }
    .view_true_submit{
        position: fixed;
        bottom: 10%;
        left: 50%;
        width: 300px;
        height: 50px;
        font-size: 30px;
        background-color: #00b0ff;
        transform: translateX(-50%);
    }
    .view_select_img button{
        display: block;
        margin: 0 auto;
        width: 120px;
        height: 30px;
        background-color: #00b0ff;
    }
</style>
<body>
<input class="view_update_id" type="hidden" name="id" value="{{$block->id}}">
<div class="view">
    {!! $block->context !!}
</div>
<p class="view_select_img" >
    <img width="200px" height="120px" class="img_from_list" src="" alt="">
    <span class="from_img_list">图库选取</span>
    <button class="view_bg_submit" value="">提交</button>
    <button class="view_bg_close" value="">取消</button>
</p>
<script !src="">
    let img = document.getElementsByTagName(\'img\')
    let node = \'\'
    for (let i = 0; i < img.length; i++) {
        if(img[i].width===0){
            img[i].alt=\'图片不能加载\'
        }
        img[i].onclick = function(){
            event.stopPropagation( );
            event.preventDefault();
            node = img[i]
            $(\'.view_select_img\').toggle()
        }
    }
</script>
<p class="img_list">
    <span class="img_close">×</span>
    @foreach($img_list as $item)
        <label class="label">
            <img width="200px" height="100px" src="{{url($item->file_name)}}" alt=""><br>
            <input class="radio" type="radio" name="img" value="{{$item->file_name}}" id="">
        </label>
    @endforeach
</p>
<button class="view_true_submit">确定修改</button>
</body>
<script !src="">
    $(\'.from_img_list\').click(()=>{
        $(\'.img_list\').toggle()
    })

    $(\'.img_close\').click(()=>{
        $(\'.img_list\').toggle()
        if($(\'input:radio:checked\').val()!=\'\'){
            $(\'.img_local\').hide()
            $(\'.img_from_list\').attr(\'src\',\'/\'+$(\'input:radio:checked\').val())
            $(\'.img_from_list\').show()
            $(\'.view_select_img\').show()
        }
    })
    $(\'.view_bg_close\').click(()=>{
        $(\'.view_select_img\').toggle()
    })
    $(\'.view_bg_submit\').click(()=>{
        node.src= $(\'.img_from_list\')[0].src
        $(\'.view_select_img\').hide()
    })
    $(\'.view_true_submit\').click(()=>{
        let view = document.getElementsByClassName(\'view\')[0]
        let str = nodeToString(view);
        $.ajax({
            //提交数据的类型 POST GET
            type:"POST",
            headers: {
                \'X-CSRF-TOKEN\': $(\'meta[name="csrf-token"]\').attr(\'content\')
            },
            //提交的网址
            url:\'/admin/action/view_update\',
            //提交的数据
            data:{\'id\':$(\'.view_update_id\').val(),\'html\':str},
            //返回数据的格式
            dataType: "text",
            //成功返回之后调用的函数
            success:function(data){
            },
            error:function () {
                window.location.href="/admin/view/block"
            }
        });
    })
    function nodeToString ( node ) {
        let tmpNode = document.createElement( "div" );
        tmpNode.appendChild( node.cloneNode( true ) );
        let str = tmpNode.innerHTML;
        tmpNode = node = null; // prevent memory leaks in IE
        return str;
    }


</script>
</html>
';
        $module .= '\'<meta name="csrf-token" content="{{ csrf_token() }}">\'' . $str;
        return $module;
    }


    public function banner($li, $carousel)
    {
        $str = '';
        if ($carousel == 0) {
            if ($li->url_status == 0) {
                $str = '<a href="' . $li->url . '">
                        <div class="banner" style="background:url(' . '/' .
                    $li->img .
                    ') 0px 0px/100% no-repeat ">
                            <div class="wrap selfSer_b" style="cursor:pointer;height: 460px;"></div>
                        </div>
                    </a>';
            } else {
                $str = '<a href="#">
                        <div class="banner" style="background:url(' . '/' .
                    $li->img .
                    ') 0px 0px/100% no-repeat ">
                            <div class="wrap selfSer_b" style="cursor:pointer;height: 460px;"></div>
                        </div>
                    </a>';
            }
        } else {
            for ($i = 0; $i < count($li); $i++) {
                if ($li[$i]->url_status == 0) {
                    $str .= '<div class="listes lis' . $i . '">
                                <a href="' . $li[$i]->url . '">
                                    <div class="list_imgs" style="background:url(' . '/' . $li[$i]->img .
                        ') 0px 0px/100% no-repeat ">
                                    </div>
                                </a>
                              </div>';

                } else {
                    $str .= '<div class="listes lis' . $i . '">
                                <a href="#">
                                    <div class="list_imgs" style="background:url(' . '/' . $li[$i]->img .
                        ') 0px 0px/100% no-repeat ">
                                    </div>
                                </a>
                              </div>';
                }
            }
            $str = '<div class="main_banner">
                                <div id="carouselBox">
                                    <div class="index_focus">
                                        <div class="caroufredsel_wrapper" style="display: block; text-align: left;
                                         float: none; position: relative; inset: 0px; z-index: auto; width: 100%;
                                         height: 560px; margin: 0px; overflow: hidden;"><div class="carousel " id="carousel"
                                         style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px;
                                         margin: 0px; width: 18480px; height: 560px; opacity: 1; z-index: auto;">' . $str;
            $str .= '</div>
                                </div>
                                <div class="list">
                                    <ul class="hd" id="hd" style="display: block;">';
            for ($i = 0; $i < count($li); $i++) {
                $str .= '<li class="on"><div class="hd_on" style="width: 0px;"></div></li>';
            }
            $str .= '           </ul>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(\'#carousel\').carouFredSel({
                                items: 1,
                                auto: {
                                    pauseOnHover: \'resume\',
                                    progress: {
                                        bar: \'#hd li:first div\'
                                    }
                                },
                                scroll: {
                                    fx: \'fade\',
                                    duration: 300,
                                    timeoutDuration: 5*1000,
                                    onAfter: function() {
                                        allTimers().stop().width(0);
                                        /*prevTimers().width( 140 );*/
                                        $(this).trigger(\'configuration\', [ \'auto.progress.bar\', \'#hd li.selected div\' ]);
                                    }
                                },
                                pagination: {
                                    container: \'#hd\',
                                    anchorBuilder: false
                                }
                            });

                            function allTimers() {
                                return $(\'#hd li div\');
                            }
                        </script>';
        }

        return $str;
    }

    public function cms($element)
    {
        $config = DB::table('config')->find(1);
        $str = '<div class="information overHide">
            <div class="wrap">
                <div class="overHide infor_top">
                    <div class="left infor_tip">
                        <div class="infor_tip_d">
                            <div class="left">
                                <img src="/image/home/index/platform/voice.png" data-original="image/index/platform/voice.png" alt="" style="display: inline;">
                                <span class="infor_span1">公告信息</span>
                            </div>
                            <p class="right infor_p1"><a href="/view/announcement" rel="nofollow">查看更多</a></p>
                        </div>
                        <ul class="infor_detail">';
        $anno = DB::table('announcement')->where('status', '=', 0)->orderBy('sort', 'desc')->limit(5)->get();
        for ($i = 0; $i < 5; $i++) {
            $str .= '<li>
                        <p><a href="/view/announcement?id=' . $anno[$i]->id . '" title="' . $anno[$i]->title . '”" target="_blank">' . $anno[$i]->title . '</a></p>
                        <p class="i_time">2019-12-31</p>
                    </li>';
        }

        $news_img = DB::table('news')->where('img', '<>', 'null')->where('img', '<>', '')->where('status', '=', 0)->orderBy('time', 'desc')->first();
        $str .= ' </ul>
            </div>
            <div class="left infor_company">
                <div class="infor_company1">
                    <div class="infor_tip_d">
                        <div class="left">
                            <img src="/image/home/index/platform/pany.png" data-original="image/index/platform/pany.png" alt="" style="display: inline;">
                            <span class="infor_span1">公司新闻</span>
                        </div>
                        <p class="right infor_p1"><a href="/view/news" class="learn_more" rel="nofollow">查看更多</a></p>
                    </div>
                </div>
                <div class="infor_company2">
                <div class="left infor_list1">
                    <a href="/view/news?id=' . $news_img->id . '" title="' . $news_img->title . '" target="_blank">
                        <img src="/' . $news_img->img . '" class="hover_img" style="display: inline;"> <p class="ellipse">' . $news_img->title . '</p>
                        <p class="i_time">2018-09-29</p>
                    </a>
                </div>
                <ul class="infor_detail">
                <div class="right infor_list2">';
        $news = DB::table('news')->where('img', '=', 'null')->orWhere('img', '=', '')->where('status', '=', 0)->orderBy('sort', 'desc')->get();
        foreach ($news as $item) {
            $str .= '<li>
                        <p><a href="/view/news?id=' . $item->id . '" title="' . $item->title . '" target="_blank">' . $item->title . '</a></p>
                        <p class="i_time">2019-09-12</p>
                    </li>';
        }
        $str .= '</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        return $str;
    }

    public function about($type,$company_profile,$develop,$recruitment_top,$recr,$buss)
    {
        $item ='';
        $val ='';
        $i ='';
        $str ='';
        $str .= "
            <div class=\"main about_main\"></div>
                <div class=\"main about_main\">
                <div class=\"wrap  mainBox1\">
                    <ul class=\" verticalNav\" id=\"nav\">
                            <li class=\"vi\" id=\"color_change1\" onclick=\"change(1)\">
                                <h4><span class=\"list_a\">公司简介</span></h4>
                                 <i class=\"bu\"></i>
                            </li>
                            <li class=\"vi \" id=\"color_change2\" onclick=\"change(2)\">
                                <h4><span class=\"list_a\">发展历程</span></h4>
                                                <i class=\"bu\"></i>
                            </li>
                            <li class=\"vi \" id=\"color_change3\" onclick=\"change(3)\">
                                <h4><span class=\"list_a\">加入我们</span></h4>
                                    <i class=\"bu\"></i>
                            </li>
                            <li id=\"color_change4\" onclick=\"change(4)\" class=\"vi \">
                                <h4><span class=\"list_a\">联系我们</span></h4>
                                <i class=\"bu\"></i>
                            </li>
                     </ul>
                     <input type=\"hidden\" class=\"page_type\" value=\"".$type."\">
                    <ul class=\"choseBox\" style=\"min-height: 1000px\" >
                       <li class=\"ci profile active\" id=\"change1\">
                           <div class=\"column tong\">
                             <h5 class=\"ci_title\">公司简介</h5>";

                                 foreach($company_profile as $item)
                                      if($item->title!==''||$item->title!=null){
                                          $str .= "<h4>{$item->title}</h4>
                                        <div>
                                             <span class=\"profile_context\">&nbsp;&nbsp;&nbsp;&nbsp;{$item->context}</span>
                                        </div>
                                        ";
                                      }
                                         if($item->img_path!=null||$item->img_path!=''){
                                           $str .= " <div>
                                                        <ul class=\"profile_ul\"> ";
                                                foreach($item->img_path as $val) {
                                                    $str .= "<li class=\"profile_img\">
                                                                <img src=\"" . $val . "\" alt=\"\">
                                                             </li>";
                                                }
                                              $str .= "</ul>
                                                    </div>";
                                           }

                                           $str .= "</div>
                                        </li>
                                        <li class=\"ci things\" id=\"change2\">
                                            <div class=\"column \">
                                                  <h5 class=\"ci_title\">发展历程</h5>
                                                        <div class=\"cl_1 posi_dotted\">
                                                        <div class=\"event_dotted\"></div>";
                                        for($i=0;$i<count($develop);$i++){
                                          $str .= "
                                            <div class=\"cl_11 \">
                                                <div class=\"monthThing left\">
                                                    <div class=\"every row2\">
                                                         <p class=\"e_p \" style=\"margin-left: 20px;font-size: 24px\">{$develop[$i]->time_line}，{$develop[$i]->title}</p>
                                                            <div style=\"margin-left: 60px\">
                                                               <span class=\"\">{$develop[$i]->content}</span>";
                                          if ($develop[$i]->img!=''||$develop[$i]->img!=null){
                                             $str .=  "<img src=\"{$develop[$i]->img}\" alt=\"\">";
                                          }
                                                  $str .= "</div>
                                                     </div>
                                                 </div>
                                             </div>";
                                        }
                        $str .= "</div>
                                </div>
                                </li>
                               <li class=\"ci joinUs \" id=\"change3\">";

                            $str .=  $recruitment_top->context;
                            $str .= "<div class=\"require\">
                                        <ul class=\"post row2\">";

                            foreach($recr as $item){
                                $str .= "<li class=\"ps_i psItem1 left\">
                                    <div class=\"pag pag1\">".$item->post."</div>
                                     <dl class=\"p_i_a1 p_i_a\">
                                     <dt>岗位职责：</dt>
                                     <dd>
                                      <i class=\"iconfont icon-right\"></i>
                                        ".$item->content."
                                      </dd>
                                      </dl>
                                      <dl class=\"p_i_b1 p_i_b\">
                                      <dt>任职要求：</dt>
                                      <dd>
                                      <i class=\"iconfont icon-iconfontyuan\"></i>
                                       ".$item->claim."
                                        </dd>
                                        </dl>
                                        <dl class=\"p_i_a1 p_i_a\">
                                        <dt>面试时间：</dt>
                                        <dd>
                                        <i class=\"iconfont icon-right\"></i>
                                        ".$item->time."
                                        </dd>
                                        </dl>
                                        <dl class=\"p_i_a1 p_i_a\">
                                        <dt>联系人：</dt>
                                        <dd>
                                        <i class=\"iconfont icon-right\"></i>
                                        ".$item->contact."
                                        </dd>
                                        </dl>
                                 </li>";
                            }
                            $str .= "
                            </ul>
                        </div>
                    </li>
                    <li class=\"ci contact \" id=\"change4\">
                        <div class=\"group address\">
                            <h5 class=\"ci_title hasLine\">
                                ".$buss->buss_name."<span class=\"isVline\"></span>
                            </h5>
                            <p>地址：".$buss->buss_address."</p>
                            <p>百度地图标记: 敬请期待</p>
                            <p>客服：".$buss->service_tel."</p>
                        </div>
                    </li>
                </ul>
             </div>
            <script>
                function change(num) {
                    for(let i=1;i<5;i++){
                        if(num===i){
                            document.getElementById('change'+i).style.display='block'
                            let colorChange = document.getElementById('color_change'+i)
                            colorChange.style.color='#2199ee'
                        }else{
                            document.getElementById('change'+i).style.display='none'
                            let colorChange = document.getElementById('color_change'+i)
                            colorChange.style.color='#666'
                        }
                    }
                }
                $(function () {
                    if($('.page_type').val()!==''){
                        change(parseInt($('.page_type').val()))
                    }else{
                        change(1)
                    }
                })
            </script>
        </div>";
        return $str;
    }
}
