$(document).ready(function(){
    var page_url = window.location.href;
    var page_id= page_url.substring(page_url.lastIndexOf("#")+1);
    if(page_id == "nocv3"){
        $("html, body").animate({
            scrollTop:$("#scroll-" + page_id).offset().top-300
        },1000);
    }
     else if(page_id == "nocv2"){
        $("html, body").animate({
            scrollTop:$("#scroll-" + page_id).offset().top-50
        },1000);
    }
    else if(page_id == "nocv1"){
        $("html, body").animate({
            scrollTop:$("#scroll-" + page_id).offset().top-100
        },1000);
    }
});