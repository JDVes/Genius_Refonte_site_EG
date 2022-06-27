  // DATA BACKGROUND IMAGE
  var sliderBgSetting = $(".slide-bg-image");
  sliderBgSetting.each(function(indx){
      if ($(this).attr("data-background")){
          $(this).css("background-image", "url(" + $(this).data("background") + ")");
      }
  });