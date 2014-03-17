$(function(){
    
    var btn = $("#jack-ass");
    var wrap = $("#wrapper");
    var blog = $(".blog-post");
    
    if(wrap.css("left") === "0px"){
        btn.on('click', function(){
            wrap.animate({
                left: "275px"
            });
            blog.animate({
                left: "-295px"
            }, 500)
        console.log(true)
        });
    }else{
        btn.on('click', function(){
            wrap.animate({
                left: "0px"
            });
            blog.animate({
                left: "0px"
            }, 800)
        console.log("return")
        });
        
    }
    
})