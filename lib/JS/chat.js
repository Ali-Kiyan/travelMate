
// reloading the page to after 10 seconds
setTimeout (reload, 10000);
function reload() {
    window.location.reload();
}
$(document).ready(function() {
    $("#messages").load('./src/travelMateProject/ajaxLoadModel.php');
    $("#userArea").submit(function() {
        $.post('./src/travelMateProject/ajaxPostModel.php', $("#userArea").serialize(), function(data){
            $('#messages').append('<div class="Brown animated fadeInLeft" style="padding: 10px; font-size: 1.4rem; border-radius: 50px !important; margin-bottom: 14px;">' + data + '</div>');
            setTimeout(refresh, 1000);
            function refresh() {
                $("#messages").load('./src/travelMateProject/ajaxLoadModel.php');
            }
            $('#chattxt').val('');
        });
        return false;
    });
});