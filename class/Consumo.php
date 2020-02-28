<?
    class Consumo{
        function consomeDados(){
            // Send the request & save response to $resp
            $url = "https://jsonplaceholder.typicode.com/users";
        
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            return curl_exec($ch);
        }
    }
?>