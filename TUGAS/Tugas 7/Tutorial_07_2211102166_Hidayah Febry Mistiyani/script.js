// Fungsi untuk menjumlahkan bilangan ganjil antara min dan max
function sumOddValues(min, max) {
  let sum = 0;
  for (let i = min; i <= max; i++) {
    if (i % 2 !== 0) {
      sum += i;
    }
  }
  return sum;
}

$(document).ready(function () {
  let isRight = false;
  let colorToggled = false;
  let originalColor = "lightblue";
  let toggledColor = "lightgreen";

  $('#calculate-btn').click(function () {
    let min = parseInt($('#min-val').val());
    let max = parseInt($('#max-val').val());

    if (isNaN(min) || isNaN(max) || min > max) {
      $('#result').text("Invalid input");
    } else {
      let result = sumOddValues(min, max);
      $('#result').text(result);
    }
  });

  $('#align-btn').click(function () {
    $('#text-box').css('text-align', isRight ? 'center' : 'right');
    isRight = !isRight;
  });

  $('#color-btn').click(function () {
    $('#text-box').css('background-color', colorToggled ? originalColor : toggledColor);
    colorToggled = !colorToggled;
  });
});
