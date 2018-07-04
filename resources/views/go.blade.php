<html>
 <head>
  <script src="{{ asset('js/jquery.js')}}"></script>
  <link href="{{asset('css/part1.css')}}" rel="stylesheet" type="text/css">
 </head>
 <body>
   <form id="form">
    <input type="text" class="email" placeholder="Email"/><br/>
    <input type="submit" value="Continue to Product"/>
    <a id="No_Email">Continue to Product Without Providing Email?</a>
   </form>

 <script>
  /** Affiliate links will be hard coded. for now until i dynamically add them**/
   var p = "{{$products}}";
   var items = p.split("$!$");
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
   var product = items[pid];
   alert(product)
   window.location.replace(product);
 });
 </script>
 </body>
</html>
