$(document).ready(function(){
  $.ajax({
      url: 'Mockups/mockdata.json',
      dataType: 'json',
      success: function(data){
          console.log(data);
      }
  });
});
