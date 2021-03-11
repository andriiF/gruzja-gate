$(document).ready(function () {
    $('.flipTimer').flipTimer({
        direction: 'down',
        date: '2021-03-25 15:00:00',
        seconds: false,
        callback: function () {
            window.location.reload("https://stream-brandcasters.imagine-nation.pl/");
        }
    });
});