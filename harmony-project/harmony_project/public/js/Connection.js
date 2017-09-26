$(function () {
$('#sel').on('change', function() {
var newHtml = '';
$('#sel11').each(function() {
  var divHtml = $('#div11').html();
  var selVal = $(this).parent().val();
  var optVal = $(this).val();
  if(selVal == optVal) {
    newHtml = divHtml.replace();
  }
});
$('#sel2').each(function() {
  var divHtml = $('#div12').html();
  var selVal = $(this).parent().val();
  var optVal = $(this).val();
  if(selVal == optVal) {
    newHtml = divHtml.replace();
  }
});
$('#sel3').each(function() {
  var divHtml = $('#div13').html();
  var selVal = $(this).parent().val();
  var optVal = $(this).val();
  if(selVal == optVal) {
    newHtml = divHtml.replace();
  }
});
$('#sel4').each(function() {
  var divHtml = $('#div14').html();
  var selVal = $(this).parent().val();
  var optVal = $(this).val();
  if(selVal == optVal) {
    newHtml = divHtml.replace();
    }
  });
  $('#div2').html(newHtml);
});









$('#test').on('change', function() {
var newHtml = '';
$('#test1').each(function() {
  var divHtml = $('#div6').html();
  var selVal = $(this).parent().val();
  var optVal = $(this).val();
  if(selVal == optVal) {
    newHtml = divHtml.replace();
  }
});
  $('#test2').each(function() {
  var divHtml = $('#div7').html();
  var selVal = $(this).parent().val();
  var optVal = $(this).val();
  if(selVal == optVal) {
    newHtml = divHtml.replace();
  }
});
$('#test3').each(function() {
  var divHtml = $('#div8').html();
  var selVal = $(this).parent().val();
  var optVal = $(this).val();
  if(selVal == optVal) {
    newHtml = divHtml.replace();
  }
    });
    $('#div10').html(newHtml);
  });
});