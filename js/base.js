$(function () {
    var $province=$('#province span')
        ,$area=$('#area span')
        ,$current;

//监听打开列表事件
    $('#province').click(function (e) {
        //显示ul选择城市
        if($(this).find('ul').is(':visible')){
            //e.target是触发事件的元素,利用冒泡
            $province.text($(e.target).text());
            //获取所选城市的index,用于选择下属市区
            $current=$(e.target).data();
            $(this).find('ul').remove();
        }else {
            $.ajax({
                url: 'province.php',
contentType:'application/x-www-form-urlencoded',
                type: 'get',
                success: function (data) {
                    var obj={
                        item:data
                    };
                    var resultStr =template('template',obj);
                    $('#province').append(resultStr);
                    //console.log(resultStr);
                },
                dataType: 'json'
            });
            $(this).find('ul').show();
        }
    });
    $('#area').click(function (e) {
        if($(this).find('ul').is(':visible')){
            //e.target是触发事件的元素,利用冒泡
            $area.text($(e.target).text());
            $(this).find('ul').remove();
        }else{
            if(!$current){
                return false;
            }else{
                //直辖市与省的数据格式不一样单独放在一个数组，当省选到直辖市先循环该数组，是直辖市就return,不是直辖市等循环完再执行另一种请求
                var $arrcity=[0,1,8,21,31,32,33];
               for(var i=0;i<$arrcity.length;i++){
                   if($arrcity[i]===$current.index){
                       $.ajax({
                           url: 'area.php',
                           type: 'get',
                           success: function (data) {
                               var arr=data.city[0].area;
                               renderlist(arr);
                           },
                           dataType: 'json',
                           data:{index:$current.index}
                       });
                       return false;
                   }
               }
                $.ajax({
                    url: 'area.php',
                    type: 'get',
                    success: function (data) {
                        var $arr=data.city;
                        var obj={
                            item:$arr
                        };
                        var resultStr =template('template2',obj);
                        $('#area').append(resultStr);
                    },
                    dataType: 'json',
                    data:{index:$current.index}
                });
            }
        }
    })
    //直辖市的引擎模板
    function renderlist(x){
        var item='';
        for(var j=0;j<x.length;j++){
            item+='<li>'+x[j]+'</li>'
        }
        var list='<ul>'+ item+'</ul>';
        $('#area').append(list);
    }
})




