function updateTimer(){
    // Get the element to append to
    var counter = document.getElementById("contador");
    // Set the targetDate
    var targetDate = new Date("June 26, 2015 18:30:00");

    var remainingSeconds = ~ ~((targetDate - new Date()) / 1000);
    var remainingTime = {
        "<span class='texto'>días</span>": remainingSeconds / (60 * 60 * 24),
        "<span class='texto'>horas</span>": (remainingSeconds % (60 * 60 * 24)) / (60 * 60),
        "<span class='texto'>minutos</span>": (remainingSeconds % (60 * 60)) / 60,
        "<span class='texto'>segundos</span>": remainingSeconds % 60
    };

    var str = "Quedan: ";
    for (var i in remainingTime) {
        str += ~ ~remainingTime[i] + " " + i + ", ";
    }
    // Store the result in the element
    counter.innerHTML = str.substring(0, str.length - 2);
 }

 // Update the timer every 1 second
 setInterval(updateTimer, 1000);