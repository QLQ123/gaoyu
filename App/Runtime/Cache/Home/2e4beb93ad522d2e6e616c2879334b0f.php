<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>我的网站</title>
<meta name="keywords" content="我的网站" />
<meta name="description" content="我的网站" />
<link href="/gaoyu/Public/Home/default/css/main.css" type="text/css" rel="stylesheet">
<!--幻灯-->
<link href="/gaoyu/Public/Home/default/css/zzsc.css" type="text/css" rel="stylesheet" />
<script src="/gaoyu/Public/Home/default/js/jquery.min.js"></script>
<script>
(function(d,D,v){d.fn.responsiveSlides=function(h){var b=d.extend({auto:!0,speed:1E3,timeout:7E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!1,prevText:"Previous",nextText:"Next",maxwidth:"",controls:"",namespace:"rslides",before:function(){},after:function(){}},h);return this.each(function(){v++;var e=d(this),n,p,i,k,l,m=0,f=e.children(),w=f.size(),q=parseFloat(b.speed),x=parseFloat(b.timeout),r=parseFloat(b.maxwidth),c=b.namespace,g=c+v,y=c+"_nav "+g+"_nav",s=c+"_here",j=g+"_on",z=g+"_s",
o=d("<ul class='"+c+"_tabs "+g+"_tabs' />"),A={"float":"left",position:"relative"},E={"float":"none",position:"absolute"},t=function(a){b.before();f.stop().fadeOut(q,function(){d(this).removeClass(j).css(E)}).eq(a).fadeIn(q,function(){d(this).addClass(j).css(A);b.after();m=a})};b.random&&(f.sort(function(){return Math.round(Math.random())-0.5}),e.empty().append(f));f.each(function(a){this.id=z+a});e.addClass(c+" "+g);h&&h.maxwidth&&e.css("max-width",r);f.hide().eq(0).addClass(j).css(A).show();if(1<
f.size()){if(x<q+100)return;if(b.pager){var u=[];f.each(function(a){a=a+1;u=u+("<li><a href='#' class='"+z+a+"'>"+a+"</a></li>")});o.append(u);l=o.find("a");h.controls?d(b.controls).append(o):e.after(o);n=function(a){l.closest("li").removeClass(s).eq(a).addClass(s)}}b.auto&&(p=function(){k=setInterval(function(){var a=m+1<w?m+1:0;b.pager&&n(a);t(a)},x)},p());i=function(){if(b.auto){clearInterval(k);p()}};b.pause&&e.hover(function(){clearInterval(k)},function(){i()});b.pager&&(l.bind("click",function(a){a.preventDefault();
b.pauseControls||i();a=l.index(this);if(!(m===a||d("."+j+":animated").length)){n(a);t(a)}}).eq(0).closest("li").addClass(s),b.pauseControls&&l.hover(function(){clearInterval(k)},function(){i()}));if(b.nav){c="<a href='javascript:' class='"+y+" prev'>"+b.prevText+"</a><a href='javascript:' class='"+y+" next'>"+b.nextText+"</a>";h.controls?d(b.controls).append(c):e.after(c);var c=d("."+g+"_nav"),B=d("."+g+"_nav.prev");c.bind("click",function(a){a.preventDefault();if(!d("."+j+":animated").length){var c=f.index(d("."+j)),
a=c-1,c=c+1<w?m+1:0;t(d(this)[0]===B[0]?a:c);b.pager&&n(d(this)[0]===B[0]?a:c);b.pauseControls||i()}});b.pauseControls&&c.hover(function(){clearInterval(k)},function(){i()})}}if("undefined"===typeof document.body.style.maxWidth&&h.maxwidth){var C=function(){e.css("width","100%");e.width()>r&&e.css("width",r)};C();d(D).bind("resize",function(){C()})}})}})(jQuery,this,0);
$(function() {
    $(".f426x240").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 700
    });
    $(".f160x160").responsiveSlides({
        auto: true,
        pager: true,
        speed: 700
    });
});
</script>
<!--幻灯结束-->

<!--移动幻灯-->
<link href="/gaoyu/Public/Home/default/css/move-style.css" rel="stylesheet" type="text/css" /> 
<!--<script type="text/javascript" src="/gaoyu/Public/Home/default/js/jquery-1.7.2.min.js"></script> -->
<script src="/gaoyu/Public/Home/default/js/jQuery-jcMarquee.js" type="text/javascript"></script> 
<script> 
$(function(){ 
    $('#Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'10px','speed':20 }); 
    // 提示：10px代表间距，第二个20代表滚动速度 
}); 
</script> 
<!--移动幻灯结束-->

</head>

<body>
<!--头部导航开始-->
<div class="header">
	<div class="header_top">
    	<div class="header_mid">
        	<div class="logo"><a href="http://127.0.0.1"><img src="/gaoyu/Public/Home/default/images/logo.png" ></a></div>
            <div class="tel"><span>服务热线：<br/><b>564-545-110</b></span></div>
      </div>
    </div>
	<div class="meun">
    	<div class="meun_mid">
    	<ul>
        <li><a href="http://127.0.0.1">网站首页</a></li>
        <?php
 $_typeid = 0; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $_navlist = get_category(1); if($_typeid == 0) { $_navlist = Common\Lib\Category::toLayer($_navlist); }else { $_navlist = Common\Lib\Category::toLayer($_navlist, 'child', $_typeid); } foreach($_navlist as $autoindex => $navlist): $navlist['url'] = get_url($navlist); ?><li><a href='<?php echo ($navlist["url"]); ?>'><?php echo ($navlist["name"]); ?></a></li><?php endforeach;?>
        </ul>
        </div>
        <div class="clearb"></div>
    </div>
</div>
<!--头部结束-->


<!--幻灯开始-->

<div class="new_banner">
    <ul class="rslides f426x240">
        <?php
 $_id = intval(1); $where = array('aid'=> $_id, 'status' => 1); $limit = "0"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['starttime'] = array('lt', time()); $where['endtime'] = array('gt', time()); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><li><a href="javascript:"><img src="<?php echo ($abc["content"]); ?>" width="1105" height="393" /></a></li><?php endforeach;?>
    </ul>
</div>

<!--幻灯结束-->

<!--主体部分-->

<div class="main">
	<div class="container">
           
           
<div class="fwxm">
           		<div class="fwxm_tit">服务项目</div>
                <div class="fwxm_tro">
                	<ul>
                       <?php
 $_typeid = intval(12); $_type = "son"; $_temp = explode(',', "10"); $_temp[0] = $_temp[0] > 0? $_temp[0] : 10; if (isset($_temp[1]) && intval($_temp[1]) > 0) { $_limit[0] = $_temp[0]; $_limit[1] = intval($_temp[1]); }else { $_limit[0] = 0; $_limit[1] = $_temp[0]; } if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $__catlist = get_category(1); if (0) { $__catlist = Common\Lib\Category::getLevelOfModelId($__catlist, 0); } if (1 == 0) { $__catlist = Common\Lib\Category::clearPageAndLink($__catlist); } if($_typeid == 0 || $_type == 'top') { $_catlist = Common\Lib\Category::toLayer($__catlist); }else { if ($_type == 'self') { $_typeinfo = Common\Lib\Category::getSelf($__catlist, $_typeid ); $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeinfo['pid']); }else { $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeid); } } foreach($_catlist as $autoindex => $catlist): if($autoindex < $_limit[0]) continue; if($autoindex >= ($_limit[1]+$_limit[0])) break; $catlist['url'] = get_url($catlist); ?><li>
                            <div class="fwxm_pic">
                                <a href="<?php echo ($catlist["url"]); ?>"><img src="<?php echo ($catlist["catpic"]); ?>" width="122" height="109"/></a>
                            </div>
                            <div class="fwxm_wz">
                                <?php echo ($catlist["name"]); ?><span><a href="<?php echo ($catlist["url"]); ?>">>></a></span>
                            </div>
                        </li><?php endforeach;?>                  
                    </ul>
                
                </div>
           
</div>
        
<div  class="gsjs">
                <div class="gs_pic"><img src="<?php
 $_typeid = 1; $_fieldname = "catpic"; $_tempstr = ''; if ($_typeid>0 && !empty($_fieldname)) { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); if ($_tablename == 'page' || 0 == 0) { $_tempstr = M('category')->where(array('id' => $_typeid))->getField($_fieldname); }elseif (!empty($_selfcate )) { $_tempstr = M($_tablename)->where(array('id' => 0))->getField($_fieldname); if ($_fieldname == 'pictureurls' || $_fieldname == 'litpic') { if (empty($_tempstr)) { $_tempstr = get_picture('', 0, 0); }elseif ($_fieldname == 'litpic') { $_tempstr = get_picture($_tempstr, 0, 0); }elseif ($_fieldname == 'pictureurls') { $_pictureurls_arr = explode('|||', $_tempstr); $_pictureurls = array(); foreach ($_pictureurls_arr as $v) { $temp_arr = explode('$$$', $v); if (!empty($temp_arr[0])) { $_pictureurls[] = array( 'url' => $temp_arr[0], 'alt' => $temp_arr[1] ); } } if(!isset($_pictureurls[0]['url'])) $_pictureurls[0]['url'] = ''; $_tempstr = get_picture($_pictureurls[0]['url'],0, 0); } } } if (0 >0 && !empty($_tempstr)) { $_tempstr = str2sub(strip_tags($_tempstr), 0, 0); } } echo $_tempstr; ?>" width="365" height="235"></div>
                <div class="gs_r">
                        <div class="gs_tit">公司简介<span>COMPANY PROFILE</span><a href="/index.php/List/index/cid/1.html">more>></a></div>
                        <div class="gs_tr">
                        	<?php
 $_typeid = 1; $_fieldname = "content"; $_tempstr = ''; if ($_typeid>0 && !empty($_fieldname)) { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); if ($_tablename == 'page' || 0 == 0) { $_tempstr = M('category')->where(array('id' => $_typeid))->getField($_fieldname); }elseif (!empty($_selfcate )) { $_tempstr = M($_tablename)->where(array('id' => 0))->getField($_fieldname); if ($_fieldname == 'pictureurls' || $_fieldname == 'litpic') { if (empty($_tempstr)) { $_tempstr = get_picture('', 0, 0); }elseif ($_fieldname == 'litpic') { $_tempstr = get_picture($_tempstr, 0, 0); }elseif ($_fieldname == 'pictureurls') { $_pictureurls_arr = explode('|||', $_tempstr); $_pictureurls = array(); foreach ($_pictureurls_arr as $v) { $temp_arr = explode('$$$', $v); if (!empty($temp_arr[0])) { $_pictureurls[] = array( 'url' => $temp_arr[0], 'alt' => $temp_arr[1] ); } } if(!isset($_pictureurls[0]['url'])) $_pictureurls[0]['url'] = ''; $_tempstr = get_picture($_pictureurls[0]['url'],0, 0); } } } if (261 >0 && !empty($_tempstr)) { $_tempstr = str2sub(strip_tags($_tempstr), 261, 0); } } echo $_tempstr; ?>
                        </div>
        </div>
        <div class="clearb"></div>
        </div>
    
<div class="main_h">    
    <div class="gscp">
        <div class="gs_tit">绝当品销售<span>PRODUCTS</span><a href="/index.php/List/index/cid/5.html">more>></a></div>
        
        <div class="tupian">
           <div id="mrq"> 
    <!-- HTML注释 divcss5提示：特效DIV开始 --> 
        <div id="Marquee_x"> 
            <ul> 
                <li> 
                	<?php
 $_typeid = -1; $_keyword = ""; $_arcid = ""; if($_typeid == -1) $_typeid = I('get.cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array('product.status' => 0, 'product.cid'=> array('IN',$ids)); }else { $where = array('product.status' => 0); } if ($_keyword != '') { $where['product.title'] = array('like','%'.$_keyword.'%'); } if (!empty($_arcid)) { $where['product.id'] = array('IN', $_arcid); } if (0 > 0) { $where['_string'] = 'product.flag & 0 = 0 '; } if (0 > 0) { $count = D2('ArcView','product')->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "10"; } $_prolist = D2('ArcView','product')->nofield('content,pictureurls')->where($where)->order("id DESC")->limit($limit)->select(); if (empty($_prolist)) { $_prolist = array(); } foreach($_prolist as $autoindex => $prolist): $_jumpflag = ($prolist['flag'] & B_JUMP) == B_JUMP? true : false; $prolist['url'] = get_content_url($prolist['id'], $prolist['cid'], $prolist['ename'], $_jumpflag, $prolist['jumpurl']); if(0) $prolist['title'] = str2sub($prolist['title'], 0, 0); if(0) $prolist['description'] = str2sub($prolist['description'], 0, 0); ?><div><a href="<?php echo ($prolist["url"]); ?>"><img src="<?php echo ($prolist["litpic"]); ?>" alt="<?php echo ($prolist["title"]); ?>"/><span><?php echo ($prolist["title"]); ?></span></a>
					</div><?php endforeach;?>                    
                </li> 
            </ul> 
        </div> 
    <!-- divcss5提示：特效DIV结束 --> 
    </div> 
            
            <div class="clearb"></div>
        </div>
    
    	</div>
        
        <div class="ddzs">
        	<div class="ddzz_tit">典当知识<span>Pawn knowledge</span><a href="/index.php/List/index/cid/17.html">more>></a></div>
        	<div class="ddzz">
            	<ul>
            		<?php
 $_typeid = 17; $_keyword = ""; $_arcid = ""; if($_typeid == -1) $_typeid = I('get.cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array('article.status' => 0, 'article.cid'=> array('IN',$ids)); }else { $where = array('article.status' => 0); } if ($_keyword != '') { $where['article.title'] = array('like','%'.$_keyword.'%'); } if (!empty($_arcid)) { $where['article.id'] = array('IN', $_arcid); } if (0 > 0) { $where['_string'] = 'article.flag & 0 = 0 '; } if (0 > 0) { $count = D2('ArcView','article')->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "7"; } $_artlist = D2('ArcView','article')->nofield('content')->where($where)->order("id DESC")->limit($limit)->select(); if (empty($_artlist)) { $_artlist = array(); } foreach($_artlist as $autoindex => $artlist): $_jumpflag = ($artlist['flag'] & B_JUMP) == B_JUMP? true : false; $artlist['url'] = get_content_url($artlist['id'], $artlist['cid'], $artlist['ename'], $_jumpflag, $artlist['jumpurl']); if(16) $artlist['title'] = str2sub($artlist['title'], 16, 0); if(0) $artlist['description'] = str2sub($artlist['description'], 0, 0); ?><li><a href="<?php echo ($artlist["url"]); ?>"><?php echo ($artlist["title"]); ?></a><span class="time"><?php echo (date('Y-m-d',$artlist["updatetime"])); ?></span></li><?php endforeach;?>
                </ul>
            
            </div>
        </div>
        <div class="clearb"></div>
</div>        
        
        <div class="banner_ad"><img src="/gaoyu/Public/Home/default/images/banner_b.jpg" width="1105" height="106"/></div>
        
        
        <div class="main_b">
        		<div class="new">
                	<div class="new_tit"></div>
                	<div class="new_tro">
                    	<ul>
			                <?php
 $_typeid = 3; $_keyword = ""; $_arcid = ""; if($_typeid == -1) $_typeid = I('get.cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array('article.status' => 0, 'article.cid'=> array('IN',$ids)); }else { $where = array('article.status' => 0); } if ($_keyword != '') { $where['article.title'] = array('like','%'.$_keyword.'%'); } if (!empty($_arcid)) { $where['article.id'] = array('IN', $_arcid); } if (0 > 0) { $where['_string'] = 'article.flag & 0 = 0 '; } if (0 > 0) { $count = D2('ArcView','article')->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "4"; } $_artlist = D2('ArcView','article')->nofield('content')->where($where)->order("id DESC")->limit($limit)->select(); if (empty($_artlist)) { $_artlist = array(); } foreach($_artlist as $autoindex => $artlist): $_jumpflag = ($artlist['flag'] & B_JUMP) == B_JUMP? true : false; $artlist['url'] = get_content_url($artlist['id'], $artlist['cid'], $artlist['ename'], $_jumpflag, $artlist['jumpurl']); if(16) $artlist['title'] = str2sub($artlist['title'], 16, 0); if(0) $artlist['description'] = str2sub($artlist['description'], 0, 0); ?><li><a href="<?php echo ($artlist["url"]); ?>"><?php echo ($artlist["title"]); ?></a></li><?php endforeach;?>
	             
                		</ul>
                    
                   </div>
               </div>
                
                
                <div class="h_new">
                	<div class="h_new_tit"></div>
                	<div class="h_new_tro">
                    	<ul>
                    		<?php
 $_typeid = 4; $_keyword = ""; $_arcid = ""; if($_typeid == -1) $_typeid = I('get.cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array('article.status' => 0, 'article.cid'=> array('IN',$ids)); }else { $where = array('article.status' => 0); } if ($_keyword != '') { $where['article.title'] = array('like','%'.$_keyword.'%'); } if (!empty($_arcid)) { $where['article.id'] = array('IN', $_arcid); } if (0 > 0) { $where['_string'] = 'article.flag & 0 = 0 '; } if (0 > 0) { $count = D2('ArcView','article')->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "4"; } $_artlist = D2('ArcView','article')->nofield('content')->where($where)->order("id DESC")->limit($limit)->select(); if (empty($_artlist)) { $_artlist = array(); } foreach($_artlist as $autoindex => $artlist): $_jumpflag = ($artlist['flag'] & B_JUMP) == B_JUMP? true : false; $artlist['url'] = get_content_url($artlist['id'], $artlist['cid'], $artlist['ename'], $_jumpflag, $artlist['jumpurl']); if(16) $artlist['title'] = str2sub($artlist['title'], 16, 0); if(0) $artlist['description'] = str2sub($artlist['description'], 0, 0); ?><li><a href="<?php echo ($artlist["url"]); ?>"><?php echo ($artlist["title"]); ?></a></li><?php endforeach;?>
                		</ul>
                    
                    </div>
                </div>
    <div class="link">
                	<div class="msg"><img src="/gaoyu/Public/Home/default/images/kehufuwu.jpg" width="240" height="90"></div>
                    <div class="zp"><img src="/gaoyu/Public/Home/default/images/contact.png" width="240" height="90"></div>
                </div>
        
        </div>
        
        

	</div>
    <div class="clearb"></div>
</div>



<!-- 包含页脚文件 -->
<div class="foot">
	<div class="foot_mid">
    	<p>典当行有限公司  备案号：41541521231</p>
        <p>电话：255454    传真：544545 技术支持：钱浩集团</p>
    </div>
</div>
</body>
</html>