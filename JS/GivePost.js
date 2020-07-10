$(document).ready(function(){
  $.ajax({
      url: 'Mockups/mockdata.json',
      dataType: 'json',
      success: function(data){
          console.log(data);
          $.each(data,function(index,element){
            var id = element.id;
            var title = element.title;
            var secondTitle = element.secondTitle;
            var date = element.date;
            var text = element.Text;
            var img = element.Img;
            $("main").append("<div class=\"post\"><img src=\""+ img +"\" alt=\"PhotoPost\" class=\"imgpost\"><h1 class=\"titlepost\">"+ title +"</h1><h2 class=\"titledescription\">"+secondTitle+", "+ date +"</h2><h3 class=\"textpost\">"+ text +"</h3></div>")
          })
      }
  });
});
