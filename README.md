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
  1. 垂直方向外边距合并
两个盒子垂直一个设置上外边距，一个设置下外边距，取的设置较大的值。
嵌套的盒子外边距塌陷
解决方法:  1  给父盒子设置边框
           2给父盒子overflow:hidden; 
  2. 清除浮动采用伪元素清除浮动
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
  3. css3兼容
伪类和伪元素的区别
伪类的效果可以通过添加一个实际的类来达到，而伪元素的效果则需要通过添加一个实际的元素才能达到，这也是为什么他们一个称为伪类，一个称为伪元素的原因。
伪元素和伪类之所以这么容易混淆，是因为他们的效果类似而且写法相仿，但实际上 css3 为了区分两者，已经明确规定了伪类用一个冒号来表示，而伪元素则用两个冒号来表示。
anchor伪类
  4. 表单
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
  5. 三角形
  6. 颜色
图片遮罩
由于color是处于img层下方的，需要再创建一个子div,设置子div的背景颜色；
通过after伪元素设置；
  7. 
3、js部分
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
  4. 本地测试无问题，开源有问题，出现post 405错误，未解决
  5. 尝试post改为get，出现provisional headers are shown无果
4、php的使用
echo输出、关系型数组、json与php数据转换，json转化为php,json_decode(json名)，php转化为json格式json_encode(php名)
