<?php
use Illuminate\Http\Response;
use Illuminate\Http\Request;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

function getUserIP(){
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$router->get('/', function () use ($router) {
    return view('layout')->with(['ip' => getUserIP()]);
});

$router->post('/authip', function (Request $request) use ($router) {

    if ($request->token) {
    
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
        $recaptcha_secret = '6LcUwqwZAAAAABFLlxNqCRlqmiqPV8lIXIl6FbCh'; 
        $recaptcha_response = $_POST['token']; 
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
        $recaptcha = json_decode($recaptcha); 
        
        if($recaptcha->success){
        
            $post_data = [
                "ip_client" => getUserIP()
            ];

            $url="http://167.114.68.37:8080/authip.php";
            
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_VERBOSE, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            
            $curl_exc = curl_exec($ch);
            $finalip="Actualiza el sitio web";
            if ($curl_exc=='54.39.239.119')
            {
                $finalip='ip1.lacuarentenarp.com';
            }
            elseif ($curl_exc=='142.44.204.2')
            {
                $finalip='ip2.lacuarentenarp.com';
            }
            elseif ($curl_exc=='142.44.204.4')
            {
                $finalip='ip3.lacuarentenarp.com';
            }
            elseif ($curl_exc=='54.39.239.37')
            {
                $finalip='ip4.lacuarentenarp.com';
            }
            elseif ($curl_exc=='142.44.204.7')
            {
                $finalip='ip5.lacuarentenarp.com';
            }
            elseif ($curl_exc=='192.99.215.126')
            {
                $finalip='ip6.lacuarentenarp.com';
            }
            elseif ($curl_exc=='192.99.215.127')
            {
                $finalip='ip7.lacuarentenarp.com';
            }
            elseif ($curl_exc=='192.99.215.127')
            {
                $finalip='ip8.lacuarentenarp.com';
            }
            $ip_firewall = array(
                'success'=> true,
                'ip'=> $finalip,
            );
        
            return response()->json(['success' => true, 'ip' => $finalip]);
        } else {
            return response()->json(['success' => false, 'ip' => 'No se pudo validar Captcha! Actualiza']);  
        }
        
    }
    
    
    
});
