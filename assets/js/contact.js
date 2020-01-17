;(function($){
    $(document).ready(function(){
        $("#send-massage").on('click',function(){

            $.post(saneem_url.ajaxurl,{
                action:'contact',
                cn:$('#contact').val(),
                name:$('#name').val(),
                email:$('#email').val(),
                subject:$('#subject').val(),
                message:$('#message').val(),
            },function(data){
                console.log(data);
            });

            return false;
        })
    });
})(jQuery);