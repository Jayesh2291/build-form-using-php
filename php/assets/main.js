$(document).ready(function () {
  var juniorOptions = {
    Science: "Science",
    Commerce: "Commerce"
  };
  var ugOptions = {
    BSc: "BSC",
    BComm: "BCOMM"
  };
  var pgOptions = {
    MSc: "MSC",
    MComm: "MCOMM"
  };
  var semIV = {
    1: "I",
    2: "II",
    3: "III",
    4: "IV"
  };
  var semVI = {
    1: "I",
    2: "II",
    3: "III",
    4: "IV",
    5: "V",
    6: "VI"
  };

  $("#level").change(function () {
    $("#course").empty();
    var level = $("#level").val();

    if (level == "junior") {
      $.each(juniorOptions, function (key, value) {
        var $option = $("<option>").attr("value", value).text(key);
        $("#course").append($option);
      });
    } else if (level == "ug") {
      $.each(ugOptions, function (key, value) {
        var $option = $("<option>").attr("value", value).text(key);
        $("#course").append($option);
      });
    } else if (level == "pg") {
      $.each(pgOptions, function (key, value) {
        var $option = $("<option>").attr("value", value).text(key);
        $("#course").append($option);
      });
    }
  });
});
