function updateClock()
{
     var currentTime = new Date();

     var currentHour = currentTime.getHours();
     var currentMinutes = currentTime.getMinutes();
     var currentSeconds = currentTime.getSeconds();
     var currentDay = currentTime.getDate();
     var currentMonth = currentTime.getMonth();
     var currentYear = currentTime.getFullYear();

     currentMonth++;
     
     currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
     currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

     var timeOfDay = (currentHour < 12) ? "AM" : "PM";
     currentHour = (currentHour > 12) ? currentHour-12 : currentHour;
     currentHour = (currentHour == 0) ? 12: currentHour;

     var timeString = currentHour + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
     var dateString = currentDay + "/" + currentMonth + "/" + currentYear;

     document.getElementById("clock").firstChild.nodeValue = timeString;

     document.getElementById("date").firstChild.nodeValue = dateString;

     //document.write('<h3' + timeString + '</h3>');

}
