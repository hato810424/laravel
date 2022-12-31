document.addEventListener('DOMContentLoaded', function(){
    $(document).pjax('a[data-pjax]', 'body');
});

$(document).on('pjax:start', function() {
    console.log('pjaxが開始されたときに発生');
    $('body').animate({
        opacity: 0
    },80);
});
// $(document).on('pjax:send', function() {
//     alert('ajaxリクエストを開始した後に発生');
// });
// $(document).on('pjax:success', function() {
//     alert('ajaxリクエストが成功した後に発生');
// });
// $(document).on('pjax:error', function() {
//     alert('ajaxリクエストが失敗した後に発生');
// });
// $(document).on('pjax:timeout', function() {
//     alert('タイムアウト時に発生');
// });
// $(document).on('pjax:complete', function() {
//     alert('ajaxリクエストが終了した後に発生');
// });
$(document).on('pjax:end', function() {
    console.log('pjaxが終了したときに発生');
    $('body').animate({
        opacity: 1
    },80);
});