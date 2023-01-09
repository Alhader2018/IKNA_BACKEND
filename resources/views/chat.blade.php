<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         function getMessage() {
            $.ajax({
               type:'GET',
               url:'http://localhost:8000/iknamessage',
               success:function(data) {
                  console.log(data);
                  for (var j = 0; j < data.length; j++) {
                    $("#msg").html(data.data[j].contenu);
                    }

               }
            });
         }
      </script>
   </head>
   
   <body>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
   
      <button onclick="getMessage()">Clic</button>
   </body>

</html>