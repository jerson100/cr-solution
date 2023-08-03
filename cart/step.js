(function ($) {
    $(document).ready(function () {
        
        $("#toggleButton1").on("click", function () {

            var camposLlenos = true;

            $("#customer_details input").each(function () {
                if ($(this).val().trim() === '') {
                    camposLlenos = false;
                    return false;
                }
            });

            if (camposLlenos) {

                $(this).remove();

                $("#order_review").slideToggle(function () {
                    if ($("#order_review").is(":visible")) {
                        $("#order_review").addClass("open").removeClass("close");
                    } else {
                        $("#order_review").addClass("close").removeClass("open");
                    }
                });
                $("#customer_details").slideToggle(function () {
                    if ($("#customer_details").is(":visible")) {
                        $("#customer_details").addClass("open").removeClass("close");
                    } else {
                        $("#customer_details").addClass("close").removeClass("open");
                    }
                });

            }
            
        });

    });
})(jQuery);
  