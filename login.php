<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>百度任务七</title>
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <link href="css/common.css" type="text/css" rel="stylesheet">
</head>
<body>
<!--主容器-->
<div class="container">
    <div class="header clearfix" id="head">
        <div class="left f_l">
            <img src="images/header-logo.png" alt="">
            <span>新世界</span>
        </div>
        <ul class="f_r">
            <li class="f_l"><a href="index.html">首页</a></li>
            <li class="f_l"><a href="#">最新活动</a></li>
            <li class="f_l"><a href="#">项目介绍</a></li>
            <li class="f_l"><a href="#">爱心社区</a></li>
            <li class="f_l"><a href="#">关于我们</a></li>
            <li class="f_l"><a href="#"><?php
                                          echo $_POST['userName'];
                                           ?></a></li>
        </ul>
    </div>
    <div class="banner">
        <div class="text">
            <p>Time of new life</p>
            <p>新时代，年轻的人们让我们一起<br>
                体验新生活，享受新生活</p>
            <a href="#">开始体验</a>
        </div>
    </div>
    <div class="main_content1 clearfix">
        <ul>
            <li class="f_l"><p>打造全新世界观，让你更<br>
                爱你的生活</p></li>
            <li class="f_l"><p>丰富多彩的公益活动，发<br>
                挥新世界的主人公意识</p></li>
            <li class="f_l"><p>时尚的新理念，超前体验<br>
                未知的生活</p></li>
            <li class="f_l"><p>完善的培养机制，培养你<br>
                全新的世界观</p></li>
        </ul>
    </div>
    <div class="main_content2">
        <p>关于新世界，你不知道的还有什么？</p>
    </div>
    <div class="main_content3">
        <div class="color">
            <p>查找新世界城市活动信息</p>
            <hr>
            <p>每个城市的有不同的活动信息，请自主查询您所需要了解的城市</p>
            <div class="city">
                <div class="f_l">
                    <span>中国</span>
                    <ul>
                        <li>中国</li>
                        <li>美国</li>
                    </ul>
                </div>
                <div class="f_l">
                    <span>省份</span>
                    <ul>
                        <li>北京市</li>
                        <li>天津市</li>
                        <li>河北省</li>
                    </ul>
                </div>
                <div class="f_l">
                    <span>城市</span>
                    <ul>
                        <li>海淀区</li>
                        <li>朝阳区</li>
                        <li>东城区</li>
                    </ul>
                </div>
                <input type="button" value="搜索">
            </div>
        </div>
    </div>
    <div class="main_content4">
        <div class="photo">
            <div class="f_l"><img src="images/4-1.jpg"><p><span>北京活动</span><br>新社区大联盟</p></div>
            <div class="f_l"><p><span>上海活动</span><br>夜上海新景观探索</p><img src="images/4-2.jpg"></div>
            <div class="f_l"><img src="images/4-3.jpg"><p><span>深圳活动</span><br>全新海岸线观点站</p></div>
            <div class="f_l"><img src="images/4-4.jpg"><p><span>香港活动</span><br>奢侈消费大派送</p></div>
        </div>
    </div>
    <div class="main_content5 clearfix">
        <div class="f_l">
            <p>新世界</p>
            <p>TIME</p>
            <p>@新世界-北京<br>
                2016.04.01
            </p>
            <span></span>
        </div>
        <div class="f_r">
            <p>新世界/<span>01</span></p>
            <p>新世界是个新世界新世界是个新世界新世界是个新世界新世界是个新世界新世界是个新世界新世界是个新世界新世界是个新世界新世界是个新世界新世界是个新世界新世界是个新世界新世界是个新世界</p>
            <a href="#">更多详情</a>
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="main_content6 clearfix">
        <div class="f_l">
            <p>新时代<br>关于爱生活的我们</p>
            <hr>
            <a href="#">查看更多</a>
        </div>
        <div class="f_l">
            <p>新时代<br>关于爱生活的我们</p>
            <hr>
            <a href="#">查看更多</a>
        </div>
        <div class="f_r">
            <div class="cover">
                <span></span>
            </div>
        </div>
    </div>
    <div class="main_content7">
        <div class="top">
            <p>成为我们的志愿者</p>
            <hr/>
            <p>新世界的大家庭需要每一个爱生活的人的加入，如果你够年轻，有梦想，有激情<br/>
                那就不要犹豫，快来加入我们，成为改变所有人生活的人 </p>
        </div>
        <div class="bottom">
            <div class="f_l">
                <dl>
                    <dt>新世界志愿者协议</dt>
                    <dd>加入新世界志愿者的人员必须遵守中华人民共共和国的相关法律法规，并且本着平等资源的原则 ...... </dd>
                    <dd>more</dd>
                    <dt>新世界志愿者权利</dt>
                    <dd>加入新世界志愿者的人员必须遵守中华人民共共和国的相关法律法规，并且本着平等资源的原则</dd>
                    <dd>more</dd>
                    <dt>更多条款</dt>
                    <dd>more</dd>
                </dl>
            </div>
            <div class="f_r">
                <input type="text" placeholder="姓名：">
                <input type="text" placeholder="年龄：">
                <input type="text" placeholder="联系方式：">
                <input type="text" placeholder="联系地址：">
                <textarea placeholder="请简单描述您梦想的生活："></textarea>
                <button type="submit">提交申请</button>
            </div>
        </div>
    </div>
    <div class="main_content8">
        <p>联系我们</p>
        <p>为了更好的获取我们最新的产品资讯，您可以留下您的电子邮箱快速订阅我们的产品资讯<br>
            也可以通过以下任何方式关注我们动态</p>
        <form>
            <input type="text" value="someone@email.com">
            <button type="submit" value="提交">提交</button>
        </form>
        <div class="icon">
            <a href="#"><img src="images/QQ.png" alt=""></a>
            <a href="#"><img src="images/SINA.png" alt=""></a>
            <a href="#"><img src="images/TWITTER.png" alt=""></a>
            <a href="#"><img src="images/INTERNET.png" alt=""></a>
        </div>
    </div>
    <div class="footer clearfix">
        <span>@2016新世界</span>
        <a class="f_r" href="#head">Back to top</a>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/1.10.1/jquery.js"></script>
<script src="base.js"></script>
</body>
</html>