$(document).ready(function() {
  $(".card").mouseover(function() {
    $(this)
      .mouseover(function() {
        $(this)
          .find(".front")
          .stop()
          .animate(
            {
              height: 0
            },
            200
          );
      })
      .mouseout(function() {
        $(this)
          .find(".front")
          .stop()
          .animate(
            {
              height: 200
            },
            200
          );
      });
  });
});