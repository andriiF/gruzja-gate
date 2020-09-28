function countDownTimer(date) {
    var elem = $('#countDown');

    //$( "p" ).add( "div" ).addClass( "widget" );
    var futureTime = new Date(date).getTime();

    setInterval(function () {
        // Time left between future and current time in Seconds
        var timeLeft = Math.floor((futureTime - new Date().getTime()) / 1000);
        // console.log(timeLeft);

        // Days left = time left / Seconds per Day 
        var days = Math.floor(timeLeft / 86400);
        // console.log(days);

        // 86400 seconds per Day
        timeLeft -= days * 86400;
        // console.log(timeLeft);

        // Hours left = time left / Seconds per Hour
        var hours = Math.floor(timeLeft / 3600) % 24;
        // console.log(hours);

        // 3600 seconds per Hour
        timeLeft -= hours * 3600;
        // console.log(timeLeft);

        // Minutes left = time left / Minutes per Hour
        var min = Math.floor(timeLeft / 60) % 60;
        // console.log(min);

        // 60 seconds per minute
        timeLeft -= min * 60;
        // console.log(timeLeft);

        // Seconds Left
        var sec = timeLeft % 60;

        // Combined DAYS+HOURS+MIN+SEC
        var timeString = "<span class='days'>" + days + " dni " + "</span>" +
                "<span class='hours'>" + hours + " godzin " + "</span>" +
                "<span class='minutes'>" + min + " minut " + "</span>";

        elem.html(timeString);


        if (days <= 0 && hours <= 0 && min <= 0) {
            $('.section-form').removeClass('d-none');
            $('.content').addClass('d-none');
        }

    }, 1000);
}

// Enter date in this format: January 1, 2017 12:00:00
countDownTimer('September 29, 2020 10:00:00');