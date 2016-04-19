@extends('layouts.content')

@section('title','生成相簿')

@section('header')
	@parent
	<link href="/css/index.css" rel="stylesheet" type="text/css" media="all"/>
@stop

@section('footer')
	@parent
	<script src="/js/create_album.js"></script>
	<script src="/js/lib/plugins.min.js"></script>
	<script src="/js/lib/modernizr-2.6.2.min.js"></script>
@stop


@section('content')
<div class="responsive-header visible-xs visible-sm">
            <div class="container-album">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="/images/create_album/profile.jpg" alt="用户头像">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title">用户名字</h3>
                                <p class="profile-description">创建一本时光书</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class="fa fa fa-heart"></i>纪念册风格</a></li>
                        <li><a href="#about"><i class="fa fa-photo"></i>编辑封面</a></li>
                        <li><a href="#projects"><i class="fa fa-pencil"></i>填写简介</a></li>
                    </ul>
                </div>
            </div>
        </div>
		
        <!-- SIDEBAR -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                    <img src="/images/create_album/profile.jpg" alt="用户头像">
                </div>
                <h3 class="profile-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户名字</h3>
                <p class="profile-description">&nbsp;&nbsp;&nbsp;创建一本时光书</p>
            </div> <!-- top-section -->
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="#top"><i class="fa fa-heart"></i>纪念册风格</a></li>
                    <li><a href="#about"><i class="fa fa-photo"></i>编辑封面</a></li>
                    <li><a href="#projects"><i class="fa fa-pencil"></i>填写简介</a></li>
                </ul>
            </div> 
        </div> 
        	
        <div class="banner-bg" id="top">
            <div class="book-style-text">
            	<p>快为你的纪念册选一个风格吧：</p>
            </div>
            <div class="book-style-picture">
	            <div class="book-style">
	                <p class="book-name"><strong>亲亲宝贝</strong></p>
	                <p class="book-description">记录宝贝成长的点滴</p>
	            	<img src="/images/create_album/亲子记录.jpg" alt="亲子记录">
	            </div>

	            <div class="book-style">
	                <p class="book-name"><strong>减肥健身</strong></p>
	                <p class="book-description">健康生活每一天</p>
	            	<img src="/images/create_album/减肥健身.jpg" alt="减肥健身">
	            </div>

	            <div class="book-style">
	                <p class="book-name"><strong>旅行游记</strong></p>
	                <p class="book-description">旅途中的点点滴滴不会遗忘</p>
	            	<img src="/images/create_album/旅行游记.jpg" alt="旅行游记">
	            </div>

	            <div class="book-style">
	                <p class="book-name"><strong>爱情永驻</strong></p>
	                <p class="book-description">因为有你才有爱情</p>
	            	<img src="/images/create_album/爱情永驻.jpg" alt="爱情永驻">
	            </div>

	            <div class="book-style">
	                <p class="book-name"><strong>生活随笔</strong></p>
	                <p class="book-description">随时记录生活的琐碎</p>
	            	<img src="/images/create_album/生活随笔.jpg" alt="生活随笔">
	            </div>

	            <div class="book-style">
	                <p class="book-name"><strong>其他</strong></p>
	                <p class="book-description">记录从不需要理由</p>
	            	<img src="/images/create_album/其他.jpg" alt="其他">
	            </div>
            </div>
            
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                
                    <!-- 封面设计 -->
                    <div class="page-section" id="about">
                    <div class="row">
                        <div class="cover-design">
                        <div class="design-title-text">
                        	<p class="design-title">快来设计你的封面吧：</p>
                        </div>

                            <!-- 模板 -->

                            <div class="container-album">
								<section class="content bgcolor-1">
									<span class="input input--haruki">
										<input class="input__field input__field--haruki" type="text" id="input-1" />
										<label class="input__label input__label--haruki" for="input-1">
											<span class="input__label-content input__label-content--haruki">纪念册名字：</span>
										</label>
									</span>
									<span class="input input--haruki">
										<input class="input__field input__field--haruki" type="text" id="input-2" />
										<label class="input__label input__label--haruki" for="input-2">
											<span class="input__label-content input__label-content--haruki">作者名字：</span>
										</label>
									</span>
									<span class="input input--haruki">
										<input class="input__field input__field--haruki" type="text" id="input-3" />
										<label class="input__label input__label--haruki" for="input-3">
											<span class="input__label-content input__label-content--haruki">想加在封面的话：</span>
										</label>
									</span>
								</section>
							</div><!-- /container -->

							<div class="book-cover-picture">
                            	<p>封面照片：</p><br/>
                            	<!-- <img src="/images/create_album/书的封面.jpg"> -->
                            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
										<td height="101" align="center">
										<div id="localImag1">
										   <img id="preview1" src="/images/create_album/书的封面.jpg" width="500" height="550" style="display: block; width: 500px; height: 550px;">
										</div>
										</td>
										</tr>
										<tr>
										<td align="center" style="padding-top:10px;">
											<input type="file" name="file" id="doc1" style="width:500px;" class="inputfile inputfile-1" onchange="javascript:setImagePreview1();" data-multiple-caption="{count} files selected" multiple />
										
						                <label for="doc1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>选择本地图片&hellip;</span></label>
						                </td>
						                <script src="js/custom-file-input.js"></script>
										</tr>
									</tbody>
								</table>
                            </div>
                        </div>
                    
                    <!-- 填写简介 -->
                    <div class="page-section" id="projects">
	                    <div class="book-introduction">
	                    	<p>快来为你的纪念册写简介吧：</p>
	                    </div>
	                    <div class="book-introduction-photo">
	                    	<P>
	                    		编辑本书的简介照片：
	                    	</P>

	                    	<!-- 上传简介照片 -->
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
											<input type="file" name="file" id="doc" style="width:200px;" class="inputfile inputfile-1" onchange="javascript:setImagePreview();" data-multiple-caption="{count} files selected" multiple />
										
						                <label for="doc"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>选择本地图片&hellip;</span></label>
						                </td>
						                <script src="js/custom-file-input.js"></script>
										</tr>
									</tbody>
							</table>
							<!-- 填写简介 -->
                            <div id="book-introduction_description">
                                <p>填写纪念册内容简介:</p>
                            	<textarea name="description" id="description" autofocus rows="10" cols="70">
                    
                            	</textarea>

                            </div>
                            <div id="send">
                            	<input type="submit" value="提交" style="width:100px;height:30px;color:white;background:rgb(169,169,169);"></input>
                            </div>
	                    </div>
                    </div>
                    <hr>
                    <hr>
                </div>

            </div>
        </div>

@stop