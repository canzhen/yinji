@extends('layouts.content')

@section('title','生成纪念册')

@section('header')
	@parent
	<link href="/css/index.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" type="text/css" href="/css/create_album.css">
	<link rel="stylesheet" href="/css/buttons.css">
   
@stop

@section('footer')
	@parent
	
	<script src="/js/lib/plugins.min.js"></script>
	<script src="/js/lib/modernizr-2.6.2.min.js"></script>
	<script src="js/create_album/custom-file-input.js"></script>
	<script src="js/create_album/vendor/modernizr-2.6.2.min.js"></script>	
	<script src="js/create_album/min/plugins.min.js"></script>
	<script src="js/create_album/min/main.min.js"></script>
	<script src="/js/create_album.js"></script>
	
@stop
 

@section('content')
<div ng-controller="albumController">
<form onsubmit = "return testSub();" action = "/addAlbum" method = "post" enctype = "multipart/form-data">
	<div class="responsive-header visible-xs visible-sm">
	            <div class="container-album">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="top-section">
	                            <div class="profile-image">
	                                <img src="/images/create_album/profile.jpg" alt="用户头像">
	                            </div>
	                            <div class="profile-content">
	                                <h3 class="profile-title">　@{{ userName }}</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <a href="" class="toggle-menu"><i class="fa fa-bars"></i></a>
	                <div class="main-navigation responsive-menu">
	                    <ul class="navigation">
	                        <li ><a href="#top" ><i class="fa fa fa-heart"></i>纪念册风格</a></li>
	                        <li><a href="#about"><i class="fa fa-photo"></i>编辑封面</a></li>
	                        <li><a href="#projects"><i class="fa fa-pencil"></i>填写简介</a></li>
	                    </ul>
	                </div>
	            </div>
	</div>

    <!-- 创建纪念册右边导航栏 -->
    <div class="sidebar-menu hidden-xs hidden-sm">
    	<!-- 用户头像及用户昵称 -->
        <div class="top-section">
            <div class="profile-image">
                <img src="/images/create_album/profile.jpg" alt="用户头像">
            </div>
            <h3 class="profile-title">@{{ userName }}</h3>
        </div> <!-- 用户头像及用户昵称结束 -->
        <!-- 导航栏 -->
        <div class="main-navigation">
            <ul class="navigation">
                <li><a  href="#top"><i class="fa fa-heart"></i>纪念册风格</a></li>
                <li><a  href="#about"><i class="fa fa-photo"></i>编辑封面</a></li>
                <li><a  href="#projects"><i class="fa fa-pencil"></i>填写简介</a></li>
            </ul>
        </div> <!-- 导航栏结束 -->
    </div> <!-- 创建纪念册右边导航栏结束 -->

    <!-- 纪念册风格 -->
    <div class="banner-bg" id="top">
        <div class="book-style-picture">
            <div class="book-style">
                <p class="book-name"><strong>亲亲宝贝</strong></p>
                <p class="book-description">记录宝贝成长的点滴</p>
            	<img class = "noBorder" id = "img1_baby" src="/images/create_album/baby.jpg" alt="亲子记录" 
            		onclick="changecolor(this.id,1)">
            </div>

            <div class="book-style">
                <p class="book-name"><strong>减肥健身</strong></p>
                <p class="book-description">健康生活每一天</p>
            	<img class = "noBorder" id = "img2_health" src="/images/create_album/health.jpg" alt="减肥健身" 
            		onclick="changecolor(this.id,2)">
            </div>

            <div class="book-style">
                <p class="book-name"><strong>旅行游记</strong></p>
                <p class="book-description">旅途中的点点滴滴不会遗忘</p>
            	<img class = "noBorder" id = "img3_travel" src="/images/create_album/travel.jpg" alt="旅行游记" 
            		onclick="changecolor(this.id,3)">
            </div>

            <div class="book-style">
                <p class="book-name"><strong>爱情永驻</strong></p>
                <p class="book-description">因为有你才有爱情</p>
            	<img class = "noBorder" id = "img4_love" src="/images/create_album/love.jpg" alt="爱情永驻" 
            		onclick="changecolor(this.id,4)">
            </div>

            <div class="book-style">
                <p class="book-name"><strong>生活随笔</strong></p>
                <p class="book-description">随时记录生活的琐碎</p>
            	<img class = "noBorder" id = "img5_live" src="/images/create_album/live.jpg" alt="生活随笔" 
            		onclick="changecolor(this.id,5)">
            </div>

            <div class="book-style">
                <p class="book-name"><strong>其他</strong></p>
                <p class="book-description">记录从不需要理由</p>
            	<img class = "noBorder" id = "img6_other" src="/images/create_album/other.jpg" alt="其他" 
            		onclick="changecolor(this.id,6)">
            </div>
            <input type = "text" name = "catNum" id = "hiddenText" hidden>
        </div>       
    </div><!-- 纪念册风格结束 -->

    <!-- 封面设计和填写简介 -->
    <div class="main-content">
        <div class="fluid-container">

            <div class="content-wrapper">

                <!-- 封面设计 -->
                <div class="page-section" id="about">
	                <div class="row">
	                    <div class="cover-design">
	                        <!-- 输入框模板模板 -->
	                        <div class="container-album">
								<section class="content bgcolor-1">
									<span class="input input--haruki">
										<input name = "aName" class="input__field input__field--haruki" type="text" id="input-1" maxlength="10" ng-model = "nameOfAlbum"/>
										<label class="input__label input__label--haruki" for="input-1">
											<span class="input__label-content input__label-content--haruki">纪念册名字（10字以内）：</span>
										</label>
									</span>
									<span class="input input--haruki">
										<input name = "aAuthor" class="input__field input__field--haruki" type="text" id="input-2" maxlength="10" ng-model = "nameOfAuthor"/>
										<label class="input__label input__label--haruki" for="input-2">
											<span class="input__label-content input__label-content--haruki">作者名字（10字以内）：</span>
										</label>
									</span>
									<span class="input input--haruki">
										<input name = "aCover" class="input__field input__field--haruki" type="text" id="input-3" maxlength="20" ng-model = "nameOfMotto"/>
										<label class="input__label input__label--haruki" for="input-3">
											<span class="input__label-content input__label-content--haruki">想加在封面的话（20字以内）：</span>
										</label>
									</span>
								</section>
							</div><!-- 输入框模板结束 -->

							 <div class="book-cover-picture">
	                        	<p class="book-cover-picture-p">封面照片：</p><br/>
	                        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
										<td height="101" align="center">
										<div id="localImag1">
										   <img id="preview1" src="/images/create_album/bookCover.jpg" width="500" height="550" style="display: block; width: 500px; height: 550px;">
										</div>
										</td>
										</tr>
										<tr>
										<td align="center" style="padding-top:10px;">
												<input type = "submit" id = "subBtn" hidden>
												<input type="file" name="fileUpload[]" id="doc1" style="width:500px;" class="inputfile inputfile-1" onchange="javascript:setImagePreview1();" data-multiple-caption="{count} files selected" multiple="multiple" />

						                    <label for="doc1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span style="font-size:16px;">选择本地图片&hellip;</span></label>
						                </td>
										</tr>
									</tbody>
								</table>
	                        </div>

	                	</div>
                	</div>
                </div>

                <!-- 填写简介 -->
                <div class="page-section" id="projects">
                    <div class="book-introduction-photo">


                    	<!-- 上传简介照片
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
									<td height="101" align="center">
									<div id="localImag">
									   <img id="preview" src="/images/create_album/profile.jpg" width="200" height="200" style="display: block; width: 200px; height: 200px;">
									</div>
									</td>
									</tr>
									<tr>
									<td align="center" style="padding-top:10px;">
										<input type="file" name="myfile[]" id="doc" style="width:200px;" class="inputfile inputfile-1" onchange="javascript:setImagePreview();" data-multiple-caption="{count} files selected" multiple="multiple" />

					                <label for="doc"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>选择本地图片&hellip;</span></label>
					                </td>
									</tr>
								</tbody>
						</table>-->
						<!-- 填写简介 -->
	                        <div id="book-introduction_description">
	                            <p>纪念册简介:</p>
	                        	<!-- <textarea name="description" id="description" rows="10" cols="50" wrap="hard"></textarea> -->
	                        	<!-- <form role="form"> -->
								  <div class="form-group">
								    <!-- <label for="name">文本框</label> -->
								    <textarea name = "aDesc" id = "albumDesc" class="form-control" rows="9" 
								    	ng-model = "contentOfDesc"></textarea>
								  </div>
								<!-- </form> -->
	                        </div> 
	                        <div id="send">

	                    <!--     <input type = "button" value = "保存" onclick="saveChange()">
	                        <input type = "button" value = "删除" onclick="deleteAlbum()"> -->

	                        	<input  class="button button-3d button-box button-jumbo"  type="submit" value="提交">
	                        	<!-- <a href="/home" class="button button-raised button-primary button-pill">Visit Us!</a> -->
	                        </div>
                    </div>
                </div>   <!-- 填写简介结束 -->
                <!-- <hr>
                <hr> -->
            </div>
        </div>
    </div>
</form>
</div>
@stop

