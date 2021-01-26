<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de php com ajax</title>
</head>
<body>
    <script language="javascript" type="text/javascript">
    //função para retornan o objeto HTTP
        function getHTTPobject(){
            if(window.ActiveXObject){
                return new ActiveXObject("Microsoft.XMLHTTP");

            }else if(window.XMLHttpRequest){
                return new XMLHttpRequest();
            }
            else{
                alert("o navegador não suporta o ajax");
                return null;

            }
        }
        function resultado(){
            if(httpObject.readyState==4){
                document.getElementById('retorno').value=httpObject.responseText;
            }
        }
        function envia(){
            httpObject=getHTTPobject();
            if(httpObject != null){
                httpObject.open("GET","maiuscula.php?entrada="+documentd.getElementById('entrada').value,true);
                httpObject.send(null);
                httpObject.onreadystatechange=resultado;

            }
        }
        var httpObject=null;
        </script>
        <form name="teste_ajax">
            Digite o texto que deseja converter para maiusculo:<input type="text" onkeyup="envia();" name="entrada" id="entrada" />
            resultado : <input type="text" name="retorno" id="retorno" />

        </form>
        
</body>
</html>