/**
 * Created by Administrator on 2018/1/14.
 */
$(".city .f_l").each(function () {
    $(this).click(function () {
        if($(this).find("ul").is(":visible")){
            $(".city").find("li").each(function () {
                $(this).click(function () {
                    $(this).parent().prev().text($(this).text());
                })
            })
            $(this).find("ul").hide();
        }else{
            $(this).find("ul").show();
        }
    })
})