# baidu-task7-demo

1、html部分
  1.h5兼容处理
<!--[if lte IE 8]>
    <script> src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"</script>
 <![endif]-->
  2..main_content8那里的icon本来想用fontAwesome引入的，结果发现与common.css文件设置font-family冲突了，将就用PS截图吧
2、css部分
原则：尽量使用标准流。
规避脱标流（margin-left:auto将子盒子居右）
标准流解决不了的使用浮动。
浮动解决不了的使用定位。
    1. 不同浏览器的默认样式存在差异
可以使用 Normalize.css 抹平这些差异。
<link href="https://cdn.bootcss.com/normalize/7.0.0/normalize.min.css" rel="stylesheet">
当然也可以定制reset.css
  2. 垂直方向外边距合并
两个盒子垂直一个设置上外边距，一个设置下外边距，取的设置较大的值。
嵌套的盒子外边距塌陷
解决方法:  1  给父盒子设置边框
           2给父盒子overflow:hidden; 
  3. 清除浮动采用伪元素清除浮动
.clearfix:after{
content:'';
display:block;
height:0;
line-height:0;
visibility:hidden;
clear:both;
}
.cleatfix{
zoom:1;
  4. 兼容
伪类和伪元素的区别
伪类的效果可以通过添加一个实际的类来达到，而伪元素的效果则需要通过添加一个实际的元素才能达到，这也是为什么他们一个称为伪类，一个称为伪元素的原因。
伪元素和伪类之所以这么容易混淆，是因为他们的效果类似而且写法相仿，但实际上 css3 为了区分两者，已经明确规定了伪类用一个冒号来表示，而伪元素则用两个冒号来表示。
问题：IE页面有白条框，原因是margin有8px;
nth-child 要IE9才支持，兼容运用first-child（IE7支持）+标签名，使用媒体查询@media实现IE hack的方法@media \0screen；
background-size用滤镜无效，原因未知，解决办法如下：
    behavior:url(htc/backgroundsize.min.htc);该方法弊端，盒子内会生成一个div,并且是第一个child,如果原盒子中有子盒子用了nth-child，则会影响css属性，解决办法直接在原来的子盒子上加一个父盒子跟生成的div并列即可；
rgba兼容两种办法：
a、filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000,endColorstr=
#33000000);此方法必须要允许ActiveX控件允许执行；
b、如果盒子里面没有文字，不考虑opacity的继承性，用opacity:0.4;filter:alpha(opacity=40);
IE下img有蓝色边框，border:0去除；
input和button无法对齐，IE下自带padding-top和padding-bottom,将其设置为0，分别设置vertical-align属性对齐;input会自带padding，注意清除自带样式
border-radius 要IE9才支持,用PIE.htc,behavior:url(PIE.htc),注意该路径是相对html文件的路径;但是此方法设置后为Li添加的margin失效，期间尝试了很久，要不然所有li只能同一个效果，就是用PIE的时候把css属性加上，找原因无果，百度发现有人使用pie.htc时，如果使用圆角跟阴影的效果，则margin-top不起作用。PIE实际问题还是比较多的，改用ie-css3.htc，同样实际使用有诸多局限，只能支持border-radius、box-shadow、text-shadow，要和Position，z-index使用，默认背景是黑色(#000000)，本项目测试不加Position，z-index也可以生效，甚至去掉float也生效，原因不详。
ul的横向滚动条，chrome没有出现，但是火狐及IE8有，overfloe-y:hidden;
  5. 表单
下拉列表
原来写的时候不知道默认样式是可以设置的
清除
{appearance:none;
  -moz-appearance:none;
  -webkit-appearance:none;
}
/*清除ie的默认选择框样式清除，隐藏下拉箭头*/
select::-ms-expand { display: none; }
input自带的蓝边用outline:0消除
  6. 三角形
原理设置盒子的宽高度为0, 当上下左右边框不同颜色，会出现三角斜线，如图

得到三角形只需将其他三个border设置为透明，需求是靠右的三角形，但是psd图上测量的三角的底边长28px,高为24px,拆分得知其他border的长度28/2=14px,而border-right的长度为三角形的高24px
  7. 颜色
图片遮罩
由于color是处于img层下方的，需要再创建一个子div,设置子div的背景颜色,同时要看遮罩层有无颜色设置，将其透明度设置为1看其颜色；
通过after伪元素设置；
  8. js生成的ul默认有margin\padding，重新设置其属性，并且由于ul列表内容过多生成滑动块，导致li的宽度变宽，只有自己调整li的width了；
  9. placeholder兼容找了个插件，自己在js上调了字体的颜色和大小，勉强能用了，但是在ie8窗口宽度缩小是，placeholder的字体会往input右边飘点，未解决
三、js部分
  1. 省市下拉列表选择做法
由于原始json数据直辖市和省下属市格式不一样，因此直辖市的区域选择采用了DOM操作，添加data-index属性，data()直接获取index值
  2. 点击显示ul，利用事件冒泡监听盒子实现点击切换内容
 if($(this).find('ul').is(':visible')){
            //e.target是触发事件的元素,利用冒泡
            $province.text($(e.target).text());
            //获取所选城市的index,用于选择下属市区
            $current=$(e.target).data();
            $(this).find('ul').remove();
  3. Failed to load resource: the server responded with a status of 404 ()解决办法
新建ico文件，head里添加<link href="favicon.ico" rel="shortcut icon">
  4. 本地测试无问题，开源有问题，出现post 405错误，
请求方法不对，改为get
  5. 尝试post改为get，出现provisional headers are shown
结果本地测试能操作成功，但是发现请求没有被发送,from disk cache.
查到的原因：a、是否AdBlock 拦截屏蔽；b、完全相同的请求间隔数毫秒(太短),导致加载失败，这个没找到解决办法；c、点击按钮时触发了表单提交，同时又ajax了，e.preventDefault(); 尝试后发现是第三种;
新问题：加载区县的时候ajax请求成功，但是检查network里面response里php文件开头有ï»¿乱码，重新新建php文件后response返回的全是php源代码
附：发现ajax请求时url的路径其实是以html页面为准的，因为调用这个JS的时候，实际是把JS写到浏览器中，这个路径应该是相对前台代码所在的路径。因此写入后台文件路径不是相对JS的路径，是以index的路径为准的。
  6. IE浏览器无法识别jquery的$对象
jQuery从2.0版开始不再支持IE6、IE7和IE8,本项目引用的JQUERY是1.1版本；
注意不同的浏览器加载不同版本的jquery
四、php的使用
echo输出、关系型数组、json与php数据转换，json转化为php,json_decode(json名)，php转化为json格式json_encode(php名)
