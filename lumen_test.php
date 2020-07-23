<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  //alert("Hai");return false;
  var name = "Albert";
  
  $.ajax({
            url: "http://localhost:8888/receiveData",
            data: { name: name },
            dataType: "JSON",
            type: "post",
            processData:false,
			contentType:false,
            success: function(result){
            $("#test_result").html(result.response)			
            },
			error: function(jqXHR, textStatus, errorThrown){
			 console.log(jqXHR);
			 console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
			}
        });



});
</script>
</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<button>Click me</button>

</body>
</html>
