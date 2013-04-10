<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta property="qc:admins" content="12472730776130006375" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($seo["title"]); ?> - <?php echo ($seo["subtitle"]); ?></title>
<meta name="keywords" content="<?php echo ($seo["keywords"]); ?>" /> 
<meta name="description" content="<?php echo ($seo["description"]); ?>" /> 
<meta property="wb:webmaster" content="c9fd7603df8ff038" />
<link rel="shortcut icon" href="__STATIC__/public/images/fav.ico" type="image/x-icon">
<style>__SITE_THEME_CSS__</style>
<!--[if gte IE 7]><!-->
    <link href="__STATIC__/public/js/dialog/skins5/idialog.css" rel="stylesheet" />
<!--<![endif]-->
<!--[if lt IE 7]>
    <link href="__STATIC__/public/js/dialog/skins5/idialog.css" rel="stylesheet" />
<![endif]-->
<script>var siteUrl = '__SITE_URL__';</script>
<script src="__STATIC__/public/js/jquery.js" type="text/javascript"></script>
<script src="__STATIC__/public/js/common.js" type="text/javascript"></script>
<script src="__STATIC__/public/js/all.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="__STATIC__/public/js/html5.js"></script>
<![endif]-->
<script src="__STATIC__/public/js/dialog/jquery.artDialog.min5.js" type="text/javascript"></script> 
__EXTENDS_JS__
<style type="text/css">
.mod-qpub-main {
	width: 980px;
	margin:0 auto;
}

.title-bar .qpub-text {
    color: #999999;
    font-size: 20px;
    padding-left: 0;
    width: 934px;
}
.title-bar .qpub-text {
 	height: 40px;
    line-height: 20px;
    margin-top: 5px;
	color: #333;
    font-size: 20px;
    padding-left: 0;
	background: none repeat scroll 0 0 transparent;
    border: 0 none;
	font-family: Tahoma,Helvetica,"Microsoft Yahei","微软雅黑",arial;
}
.title-bar {
    border-bottom: 1px solid #EDEDED;
    margin-left: 16px;
    position: absolute;
    top: 46px;
    width: 934px;
    z-index: 901;
}
.title-bar-text{display:block;z-index: -10;  background: none repeat scroll 0 0 transparent;}
.content-warp{position: relative;}
</style>
</head>

<body>
<script>
window.UEDITOR_HOME_URL = '__STATIC__/public/js/editor/ueditor/';
</script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/public/js/editor/ueditor/editor_config.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/public/js/editor/ueditor/editor_all_min.js"></script>
<div class="mod-qpub-main">
    fdsf<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="content-warp">
        <div class="title-bar">
        <span href="#" class="title-bar-text">
        <input type="text" autocomplete="off" class="qpub-text placeholder" name="title" placeholder="输入标题" id="title" tabindex="10" stash-placeholder="输入标题">
        </span>
        </div>
		<script  id="editor" type="text/plain"></script>
    </div>
</div>
<script type="text/javascript">
    //实例化编辑器
    var ue = UE.getEditor('editor');
	window.onscroll = function(){
		if($('#edui1_toolbarbox').attr('style')!=''){
			$('.title-bar').hide();
		}else{ $('.title-bar').show();}
	};
</script>      
<!--footer-->
<footer>
<div id="footer">
	<div class="f_content">
        <span class="fl gray-link" id="icp">
            &copy; 2012－2015 IKPHP.COM, all rights reserved
        </span>
        
        <span class="fr">
            <a href="<?php echo U('help/about');?>">关于爱客</a>
            · <a href="<?php echo U('help/contact');?>">联系我们</a>
            · <a href="<?php echo U('help/agreement');?>">用户条款</a>
            · <a href="<?php echo U('help/privacy');?>">隐私申明</a>
        </span>
        <div class="cl"></div>
        <p>Powered by <a class="softname" href="<?php echo (IKPHP_SITEURL); ?>"><?php echo (IKPHP_SITENAME); ?></a> <?php echo (IKPHP_VERSION); ?>  <?php echo C('site_icp');?> <span style="color:green">ThinkPHP 版本 <?php echo (THINK_VERSION); ?></span><br />
        <span style="font-size:0.83em;">{__RUNTIME__}</span>
        
        <!--<script src="http://s21.cnzz.com/stat.php?id=2973516&web_id=2973516" language="JavaScript"></script>-->
        </p>   
    </div>
</div>
</footer>
</body>
</html>