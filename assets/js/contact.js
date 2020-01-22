;(function($){
    $(document).ready(function(){
        $("#send-message").on('click',function(){
            $.post(saneem_url.ajaxurl,{
                action:'contact',
                cn:$('#contact').val(),
                name:$('#cname').val(),
                email:$('#cemail').val(),
                phone:$('#cphone').val(),
                message:$('#cmessage').val(),
            },function(data){
                if('successful'== data){
                    alert('Message Send Successfully')
                }else{
                    alert('Message Send Failed')
                }
            });

            return false;
        })
        
    });
})(jQuery);

