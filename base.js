/**
 * Created by Administrator on 2018/1/14.
 */
$(function () {
    var $content=$(".city .f_l");

// $(".city .f_l").each(function () {
//     $(".city .f_l").click(function () {
//         if($(this).find("ul").is(":visible")){
//             $(this).find("li").each(function () {
//                 $(this).click(function () {
//                     $(this).parent().prev().text($(this).text());
//                 })
//             })
//             $(this).find("ul").hide();
//         }else{
//             $(this).find("ul").show();
//         }
//     })
// })

//监听打开列表事件
    $content.each(function () {
        $(this).click(function () {
            if($(this).find('ul').is(':visible')){
                $(this).find('ul').hide();
            }else {
                $(this).find('ul').show();
                change(this);
            }
        })
    });
//变更内容
    function change(box) {
        $(box).find('li').each(function () {
            $(this).click(function () {
                $(box).find('span').text($(this).text());
            })
        })
    }
})


