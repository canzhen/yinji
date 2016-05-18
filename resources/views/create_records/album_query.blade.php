@extends('layouts.content')

@section('title','生成相簿')

@section('header')
  @parent
  <link rel="stylesheet" type="text/css" href="/css/create_records/style.css">  
  <link rel="stylesheet" type="text/css" href="/css/create_records/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="/css/create_records/test.css">
  <link rel="stylesheet" type="text/css" href="/css/create_records/button.css">
@stop

@section('footer')
  @parent 
  <script src="/js/create_records/jquery.min.js"></script>
  <script src="/js/create_records/jquery-ui.min.js"></script>
  <script src="/js/create_records/test.js"></script>
@stop

@section('content')
<!-- 页面上面的背景 -->
<div class="bg_top">
    <!-- 右上角的图案 -->
    <div class="header_bg">
    </div>
</div>
<div class="page_box page_box_bg">
<div class="home_menu"><a href="/album_cover"></a></div>
	<!-- 用户查看自定义日期中的内容 -->
  <div class="index_left page_left about_l">
    <!-- 时间选择器 -->
    <div class="user_time">
          <br/>选择一个日期查看那天的记录：<br/><br/><div id="datepicker"></div>
    </div>
  </div>
  <div class="index_right page_right job_r">
    <table border="0" width="400" cellpadding="0" style="border-collapse: collapse; font-size:12px; margin-top:80px; margin-left:30px;" id="table1">
    		<tr>
    		<script language="JavaScript" type="text/javascript">
            function scroll(n)
            {
            temp=n;
            document.getElementById('News').scrollTop=document.getElementById('News').scrollTop+temp;
            if (temp==0) return;
            setTimeout("scroll(temp)",20);
            }
            </script>
    			<td width="53%" valign="top">
    			<div id="News" style="border:0px dashed; OVERFLOW: hidden; WIDTH: 360px; HEIGHT: 480px; color:#875d44; line-height:20px;">
    				<div align="center">
    					<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" id="table31">
    						<tr>
    						   <td>
                                <div class="page_right_2">
                                <div class="job_top"></div>
                                   <div class="my_records2">
                                    <div class="mydiv1112">
                                        <p class="datep">2016年4月13日 16:30</p>
                                        <p class="diary">培根土豆小饼</p>
                                        <div class="divpic">
                                            <img class="mypic" src="images/create_records/records/g1.jpg" />
                                            <img src="images/create_records/records/g2.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g4.jpg" class="mypic"/>
                                        </div>
                                        <br/>
                                        <div class="my_records_button2">
                                            <input  class="button button-pill button-tiny" type="submit" value="修改">
                                            <input  class="button button-pill button-tiny" type="submit" value="删除">
                                        </div>
                                    </div>
                                    <!-- <br/> -->
                                    <div class="mydiv1112">
                                        <p class="datep">2016年4月11日 15:04</p>
                                        <p class="diary">一到下午这个时候又困…又饿…怎么破？…</p>
                                        <div class="divpic">
                                            <img src="images/create_records/records/g3.jpg" class="mypic"/>
                                        </div>
                                        <br/>
                                        <div class="my_records_button2">
                                            <input  class="button button-pill button-tiny" type="submit" value="修改">
                                            <input  class="button button-pill button-tiny" type="submit" value="删除">
                                        </div>
                                    </div>
                                    <!-- <br/> -->
                                    <div class="mydiv1112">
                                        <p class="datep">2016年4月10日 10:30</p>
                                        <p class="diary">【喷香牛肉焖饭】营养丰富又香味十足，煮出来的米饭油光发亮特别的诱惑！绵绵的土豆，微甜的胡萝卜，牛肉香深入米饭，撒一把葱花搅拌下开动啦！</p>
                                        <div class="divpic">
                                            <img src="/images/create_records/records/g5.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g6.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g7.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g8.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g9.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g10.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g11.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g12.jpg" class="mypic"/>
                                            <img src="images/create_records/records/g13.jpg" class="mypic"/>
                                        </div>
                                        <br/>
                                        <div class="my_records_button2">
                                            <input  class="button button-pill button-tiny" type="submit" value="修改">
                                            <input  class="button button-pill button-tiny" type="submit" value="删除">
                                        </div>
                                    </div>    
                                  </div>

                                </div>
                              </td>
    						</tr>
    					</table>
    				</div>
    			</div>
    			</td>
    			<td width="2%" valign="top">
    					<img onmousedown="scroll(-3)" onmouseover="scroll(-3)" style="CURSOR: hand" onmouseout="scroll(0)" border="0" src="images/create_records/job_06.jpg"  title="按下鼠标速度会更快">				
    					<img onmousedown="scroll(3)" onmouseover="scroll(3)" style="CURSOR: hand;margin-top:450px; float:left;" onmouseout="scroll(0)"  border="0" src="images/create_records/job_09.jpg"  title="按下鼠标速度会更快">
    			</td>
    			
    		</tr>
    	</table>
</div>

  <!-- 左面菜单 -->
  <div class="page_right_menu" >
    <ul>
      <li class="menu_1"><a href="/album_index" title="关于工厂——纪念册简介"></a></li>
      <li class="menu_2"><a href="/album_show_records" title="广播站——纪念册内容"></a></li>
     <!-- <li class="menu_3"><a href="blog/" title="团队博客"></a></li>-->
      <li class="menu_5"><a href="/album_create_records" title="厂区仓库——创建记录"></a></li>
      <li class="menu_6"><a class="on" href="/album_query" title="招兵买马——查找纪念册内容"></a></li>
      <li class="menu_4"><a href="/album_order" title="游乐园--下订单"></a></li>
    </ul>
  </div>
</div>
<!-- 书的下半部分的背景 -->
<div class="page_bot"></div>
@stop
