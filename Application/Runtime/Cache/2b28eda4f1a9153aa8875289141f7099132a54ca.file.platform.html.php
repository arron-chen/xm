<?php /* Smarty version Smarty-3.1.6, created on 2017-02-15 14:43:28
         compiled from "./Application/Home/View\Index\platform.html" */ ?>
<?php /*%%SmartyHeaderCode:3124358a3f5f6920a43-75374350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b28eda4f1a9153aa8875289141f7099132a54ca' => 
    array (
      0 => './Application/Home/View\\Index\\platform.html',
      1 => 1487140374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3124358a3f5f6920a43-75374350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a3f5f69ba7c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3f5f69ba7c')) {function content_58a3f5f69ba7c($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>平台风采</title>
<script src="__PUBLIC__/Home/js/modernizr.js" type="text/javascript"></script>

<style>
    
<!-- reset-->
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
<!--style-->
* {
  box-sizing: border-box;
}

body {
  font-family: "楷体";
}

.heading-primary {
  font-size: 2em;
  padding: 2em;
  text-align: center;
}

.accordion dl,
.accordion-list {
  border: 1px solid #ddd;
}
.accordion dl:after,
.accordion-list:after {
  content: "";
  display: block;
  height: 1em;
  width: 100%;
  background-color: #2ba659;
}

.accordion dd,
.accordion__panel {
  background-color: #fff;
  font-size: 1em;
  line-height: 1.5em;
}

.accordion p {
  padding: 1em 2em 1em 2em;
}

.accordion {
  position: relative;
  background-color: #fff;
}

.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 2em 0 2em 0;
}

.accordionTitle,
.accordion__Heading {
  background-color: #38cc70;
  text-align: center;
  font-weight: 700;
  padding: 2em;
  display: block;
  text-decoration: none;
  color: #fff;
  -webkit-transition: background-color 0.5s ease-in-out;
  transition: background-color 0.5s ease-in-out;
  border-bottom: 1px solid #30bb64;
}
.accordionTitle:before,
.accordion__Heading:before {
  content: "+";
  font-size: 1.5em;
  line-height: 0.5em;
  float: left;
  -webkit-transition: -webkit-transform 0.3s ease-in-out;
  transition: -webkit-transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
}
.accordionTitle:hover,
.accordion__Heading:hover {
  background-color: #2ba659;
}

.accordionTitleActive,
.accordionTitle.is-expanded {
  background-color: #2ba659;
}
.accordionTitleActive:before,
.accordionTitle.is-expanded:before {
  -webkit-transform: rotate(-225deg);
          transform: rotate(-225deg);
}

.accordionItem {
  height: auto;
  overflow: hidden;
  max-height: 50em;
  -webkit-transition: max-height 1s;
  transition: max-height 1s;
}
@media screen and (min-width: 48em) {
  .accordionItem {
    max-height: 15em;
    -webkit-transition: max-height 0.5s;
    transition: max-height 0.5s;
  }
}

.accordionItem.is-collapsed {
  max-height: 0;
}

.no-js .accordionItem.is-collapsed {
  max-height: auto;
}

.animateIn {
  -webkit-animation: accordionIn 0.45s normal ease-in-out both 1;
          animation: accordionIn 0.45s normal ease-in-out both 1;
}

.animateOut {
  -webkit-animation: accordionOut 0.45s alternate ease-in-out both 1;
          animation: accordionOut 0.45s alternate ease-in-out both 1;
}

@-webkit-keyframes accordionIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.9) rotateX(-60deg);
            transform: scale(0.9) rotateX(-60deg);
    -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes accordionIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.9) rotateX(-60deg);
            transform: scale(0.9) rotateX(-60deg);
    -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes accordionOut {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.9) rotateX(-60deg);
            transform: scale(0.9) rotateX(-60deg);
  }
}
@keyframes accordionOut {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.9) rotateX(-60deg);
            transform: scale(0.9) rotateX(-60deg);
  }
}



</style>


</head>
<body>

<div class="container">

	<div class="accordion">
		<dl>
			<dt>
				<a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">江西理工大学记者团</a>
			</dt>
			<dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
				<p> &nbsp;&nbsp;&nbsp;江西理工大学记者团是校党委宣传部领导并提供业务指导的学生社团，正式成立于2009年9月，由一批热爱写作、钟情文字并且具备一定摄影功底的在校大学生组成，其业务范围涉及新闻采写、摄影摄像等多个领域。</p>
                                         <p>记者团成立以来，始终坚持以“打造江西一流、全校领先的育人社团”为立团宗旨，以“以贡献求支持”为工作理念，以“传承校园文化，树立理工形象，传递新闻信息，抒发青春情怀”为团队目标，旨在通过新闻采写编辑、专题策划报道、讯息收集、舆论引导等方式，塑造一批具有良好文字功底、新闻素养和摄影水平的优秀大学生记者，并竭力将团队打造成为学校支持、师生点赞、成员满意的江西省最具传播力的校园学生媒体。

</p>
				
			</dd>
			<dt>
				<a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
			江西理工大学报</a>
			</dt>
			<dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
				<p>《江西理工大学报》是江西理工大学党委机关报，是学校精神文明建设的重要宣传阵地，担负着引导舆论、交流信息、弘扬新风、培育新人的重要使命。伴随学校58年的光辉历程，《江西理工大学报》始终围绕“立足校园、服务师生、办报育人”的理念，秉承“贴近校园生活、贴近师生员工、贴近高校实际”的原则，加强策划，追求创新，办出精品，走出了一条特色办报之路，为推动学校教育事业的发展做出了重要贡献。</p>
			</dd>
			<dt>
				<a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
			江西理工大学树人网
			</a>
			</dt>
			<dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
				<p> 江西理工大学树人网作为学校思想政治教育的重要阵地，本着“为学校的思想政治建设做贡献、为学生的生活学习服务”的立网宗旨，秉承“育人为本、服务师生”的工作理念，充分“站在学校舆论高度，把握学生思想动态，挖掘校园文化内涵，传递师生青春能量”。近年来，树人网先后在全校范围内开展了江西理工大学“文心杯”征文大赛、江西理工大学毕业生“跳骚市场”、江西理工大学“三七”女生节庆祝活动、树人网络迎新活动、寻找身边的好人好事网络评选活动，活动范围遍及全校所有师生，让师生在不知不觉中接受正能量的熏陶，让校园文化建设增添光彩。
</p>
<p>作为学校育人平台，树人网成员连任江西校媒主席团，在中国红歌会、亚运会注册大学生记者、全国大学生边防行、“快乐学校”志愿者、上海车展注册大学生记者、南京亚青会等大型活动中表现优异，获得诸多美誉。</p>
			</dd>
            <dt>
				<a href="#accordion1" aria-expanded="false" aria-controls="accordion4" class="accordion-title accordionTitle js-accordionTrigger">江西理工大学《青春之声》广播站</a>
			</dt>
			<dd class="accordion-content accordionItem is-collapsed" id="accordion4" aria-hidden="true">
				<p>江西理工大学青春之声广播站（现名）创建于1989年，原名南方冶金学院广播站，2004年改名江西理工大学广播站，2013年正式更名为江西理工大学青春之声广播站，由江西理工大学党委宣传部主管。广播覆盖范围包括江西理工大学本部、西校区、黄金校区三大校区，每周周一到周五播音，每天中午12:00和下午17:30（冬季作息时间18:00）各播一次，广播站共有新闻传真、人物访谈、英语音乐、综艺彩虹等栏目，每个栏目组都有负责人。</p>
				<p>媒体宗旨及受众定位：受众为江西理工大学全校师生，媒体宗旨是将学校每日的新闻要事、政策通告、就业信息等通过广播站传递给全校师生，同时为学生们提供一个原创文学以及播音主持的平台，为大家发挥自身才能、提升自我能力搭建平台。</p>
			</dd>
			<dt>
				<a href="#accordion1" aria-expanded="false" aria-controls="accordion4" class="accordion-title accordionTitle js-accordionTrigger">江西理工大学新媒体中心</a>
			</dt>
			<dd class="accordion-content accordionItem is-collapsed" id="accordion4" aria-hidden="true">
				<p>新媒体中心成立于2014年4月29日，是校党委宣传部领导的大学生新媒体实践组织。是整合记者团、树人网、广播站等媒体的新媒体而形成的新的机构。</p>
				<p>新媒体中心主要负责江西理工大学官方微博、官方微信等的日常内容维护，业务链包含组建“江西理工大学大学生校媒联盟”微信公众平台和官方微博，配合学校、宣传部开展新媒体工作，包括联盟官方微博，现今继续分块对应管辖各媒体微博（必要时运营、闲时可不管理），协助联盟及下属校园媒体开展各项活动宣传、工作推广工作，负责学校舆情管理，论坛管理工作，品牌活动开展工作等方面。</p>
			</dd>
			<dt>
				<a href="#accordion1" aria-expanded="false" aria-controls="accordion4" class="accordion-title accordionTitle js-accordionTrigger">江西理工大学电视台</a>
			</dt>
			<dd class="accordion-content accordionItem is-collapsed" id="accordion4" aria-hidden="true">
				<p>江西理工大学电视台现属党委宣传部，电视台负责为丰富师生文化生活提供良好的需求环境和优质服务，配合党委宣传部门抓好“窗口”工程建设，加强对外宣传，塑造学校形象。</p>
			</dd>
			<dt>
				<a href="#accordion1" aria-expanded="false" aria-controls="accordion4" class="accordion-title accordionTitle js-accordionTrigger">江西理工大学《清江》杂志社</a>
			</dt>
			<dd class="accordion-content accordionItem is-collapsed" id="accordion4" aria-hidden="true">
				<p>《清江》杂志是由江西理工大学党委宣传部主管，清江杂志社主办，江西理工大学记者团、树人网以及清江文学社协办的大型综合性校园刊物。该杂志于2015年5月5日创刊，至此也成为赣州高校首本由学生自主发起创办的大学校园刊物。《清江》杂志定为双月刊，黑白印刷，杂志以江西理工大学全体师生为主要发行对象 </p>
				<p>《清江》以“弘扬发展青春校园文学、培养发掘文学创作新人”为编辑方针，以“关注莘莘学子，传播校园文化”为办刊宗旨，旨在打破高校文学社团发展的藩篱，传播校园优秀文化，扩大校园媒体的宣传力和影响力，打造媒介融合时代新媒体和传统纸媒融合的新典范。</p>
			</dd>
			
		</dl>
	</div>

</div>

<script type="text/javascript">
//uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function(){
	var d = document,
	accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
	setAria,
	setAccordionAria,
	switchAccordion,
  touchSupported = ('ontouchstart' in window),
  pointerSupported = ('pointerdown' in window);
  
  skipClickDelay = function(e){
	e.preventDefault();
	e.target.click();
  }

		setAriaAttr = function(el, ariaType, newProperty){
		el.setAttribute(ariaType, newProperty);
	};
	setAccordionAria = function(el1, el2, expanded){
		switch(expanded) {
	  case "true":
		setAriaAttr(el1, 'aria-expanded', 'true');
		setAriaAttr(el2, 'aria-hidden', 'false');
		break;
	  case "false":
		setAriaAttr(el1, 'aria-expanded', 'false');
		setAriaAttr(el2, 'aria-hidden', 'true');
		break;
	  default:
				break;
		}
	};
//function
switchAccordion = function(e) {
  console.log("triggered");
	e.preventDefault();
	var thisAnswer = e.target.parentNode.nextElementSibling;
	var thisQuestion = e.target;
	if(thisAnswer.classList.contains('is-collapsed')) {
		setAccordionAria(thisQuestion, thisAnswer, 'true');
	} else {
		setAccordionAria(thisQuestion, thisAnswer, 'false');
	}
	thisQuestion.classList.toggle('is-collapsed');
	thisQuestion.classList.toggle('is-expanded');
		thisAnswer.classList.toggle('is-collapsed');
		thisAnswer.classList.toggle('is-expanded');
	
	thisAnswer.classList.toggle('animateIn');
	};
	for (var i=0,len=accordionToggles.length; i<len; i++) {
		if(touchSupported) {
	  accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
	}
	if(pointerSupported){
	  accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
	}
	accordionToggles[i].addEventListener('click', switchAccordion, false);
  }
})();
</script>


</body>
</html>
<?php }} ?>