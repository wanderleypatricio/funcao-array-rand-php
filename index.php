<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array Randômico</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript">
            $(document).on('click', "#btnEnviarDados", function () {
               
                var url = "arrayRand.php";
                
                $.post(
                 url, //Required URL of the page on server
                 function(response,status)
                 {
                   // tratando o status de retorno. Sucesso significa que o envio e retorno foi executado com sucesso.
                   if(status == "success")
                   {
                     
                      console.log(response);
                     $("#result").html(
                       "Array sorteado: " + response
                       
                     );
                   }    	
                 },
                );
            });
        </script>
    </head>
    <body>
        <h2>Array randômico</h2>
        <h3>gera um array com 20 números inteiros e verifica quais números não se repetem</h3>
        <input id="btnEnviarDados" type="button" value="clique no botão para gerar o array"/>
        
        <div id="result">
            
        </div>
    </body>
</html>
