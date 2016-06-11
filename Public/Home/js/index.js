$(function(){
    $('#Contents').click(function() {
    $('#cont').load('./Contents.html');
});
    $('#View').click(function() {
        $('#cont').load('./View.html');
    });
    $('#Other').click(function() {
        $('#cont').load('./Other.html');
    })
    // $('#message').show(function() {
    //     $('#1').load('/blog/Home/View/User/other.php');
    // })
    $(document).ready(function() {
        $('.ca').load('./Ca.html');
    })
});