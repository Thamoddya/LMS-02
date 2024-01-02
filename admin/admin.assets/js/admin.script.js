$(document).ready(function() {
    $(".nav-link").click(function() {
        var target = $(this).attr("data-target");
        $(".dynamic-content").hide();
        $("#" + target).show();
        $("#" + target).removeClass('d-none');
    });
});