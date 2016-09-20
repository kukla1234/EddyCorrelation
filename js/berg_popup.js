(function($){
    $.fn.styleddropdown = function(){
        return this.each(function(){
            var obj = $(this)
            obj.find('.field').click(function() { //onclick event, 'list' fadein
            obj.find('.info').fadeIn(400);
            
            $(document).keyup(function(event) { //keypress event, fadeout on 'escape'
                if(event.keyCode == 27) {
                obj.find('.info').fadeOut(400);
                }
            });
            
            obj.find('.info').hover(function(){ },
                function(){
                    $(this).fadeOut(400);
                });
            });
            
            obj.find('.info li').click(function() { //onclick event, change field value with selected 'list' item and fadeout 'list'
            obj.find('.field')
                .val($(this).html())

            obj.find('.info').fadeOut(400);
            });
        });
    };
})(jQuery);
