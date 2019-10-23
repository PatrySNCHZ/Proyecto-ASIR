<!DOCTYPE html>
<html>
    <head>
        @include("layouts.banner")
        @yield("cabecera")
    </head>
    <body>
     
 
        @include("layouts.base")
        @yield("base")
       
        @include("layouts.pie")
        @yield("pie")
        
    </body>
</html>