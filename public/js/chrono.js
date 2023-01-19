
  var timer = document.getElementById("timer");
  var seconds = 0;
  var minutes = 0;
  var hours = 0;
  var intervalId;

  function startTimer() {
    seconds=0;
    minutes=0
    hours=0
    intervalId = setInterval(function() {
      seconds++;
      if (seconds === 60) {
        seconds = 0;
        minutes++;
        if (minutes === 60) {
          minutes = 0;
          hours++;
        }
      }
      timer.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);
    }, 1000);
  }

  function stopTimer() {
    clearInterval(intervalId);
  }