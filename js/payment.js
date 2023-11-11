function countdown() {
    var now = new Date();
    var deadline = new Date("December 12, 2023 23:59:59");
    var timeLeft = deadline - now;

    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = hours + ":" + minutes + ":" + seconds;
}

function updateDate() {
    var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    var now = new Date();
    var dayIndex = now.getDay();
    var day = days[dayIndex];
    var date = now.getDate();
    var month = now.toLocaleString('en-US', { month: 'long' });
    var year = now.getFullYear();

    document.getElementById("currentDate").innerHTML = day + ', ' + date + ' ' + month + ' ' + year;
}

setInterval(function () {
    countdown();
    updateDate();
}, 1000);