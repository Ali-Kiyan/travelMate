
// reloading messages every second-real time simulation
setInterval(reload, 1000);
function reload() {
    $("#messages").load('./src/travelMateProject/ajaxLoadModel.php');
}
$(document).ready(function() {
    $("#messages").load('./src/travelMateProject/ajaxLoadModel.php');
    $("#userArea").submit(function() {
        $.post('./src/travelMateProject/ajaxPostModel.php', $("#userArea").serialize(), function(data){
            $('#messages').append('<div class="Brown animated fadeInLeft" style="padding: 10px; font-size: 1.4rem; border-radius: 50px !important; margin-bottom: 14px;">' + data + '</div>');
            $('#chattxt').val('');
        });
        return false;
    });
});