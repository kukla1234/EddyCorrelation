$(document).ready(function(){
	
	
	// side bar
    setTimeout(function () {
      $('.sidebar').affix({
        offset: {
          top: function () { return $window.width() <= 980 ? 290 : 210 }
        , bottom: 270
        }
      })
    }, 100)
	
});

