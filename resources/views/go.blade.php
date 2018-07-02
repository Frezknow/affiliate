<html>
 <head>
<script src="{{ asset('js/jquery.js')}}"></script>
 </head>
 <body>
   <form id="form">
    <input type="text" class="email"/><br/>
    <input type="submit" value="Go To Product"/>
   </form>
   <a id="No_Email">Continue Without Email</a>
 <script>
   var items =  [
   'https://www.vqventure.com',
   'http://www.homesby360.com'
   ];
   var pid = "{{$pid}}";

 $('#form').on('submit',function(e){
   e.preventDefault();
  var email = $('.email').val();
  var product = items[pid];
  alert(email);
  alert(product);
  window.location.replace(product);

 });
 $('#No_Email').on('click',function(){
   alert("No Email submitted going to product");
 });
 </script>
 </body>
</html>
