<?PHP

# STARAuth Client
# (C) 2014 Clark Testing
# Version 1.0.4 - Nov 2014
# Written by: Mike Gualtieri - M. L. Gualtieri Group <mike.gualtieri@gmail.com>

# Getting started:
# Visit https://auth.clarktesting.com/demo_client.php



class STARAuth
{
    # Configuration variables
    # Set these for your application here or with the API

    public $AppID;
    public $PublicKeyFile;


    # Other variables
    private $AuthHost;
    private $ClientHost;
    private $PublicKey;
    private $AuthURL;
    private $LoginURL;
    private $CallbackURL;



    public function __construct() 
    { 
        # Edit these if necessary, but it shouldn't be
        $this->AuthHost   = "auth.clarktesting.com";                        # The hostname of the STAR Auth server
        $this->AuthURL    = "https://". $this->AuthHost ."/api/1.0/server";  # STAR Auth API server URL
        $this->LoginURL   = "https://". $this->AuthHost ."/login";           # STAR Auth client login page
        $this->ClientHost = $_SERVER['HTTP_HOST'];
    }


    public function getAPIVersion()
    {
        return "STAR Auth API - Version 1.0.4";
    }
    
    public function setAppID($AppID)
    {
        $this->AppID = $AppID;
    }

    public function setCallbackURL($callback_url)
    {
        $this->CallbackURL = $callback_url;
    }

    public function getCallbackURL()
    {
        return $this->CallbackURL;
    }

    public function getLoginURL()
    {
        return $this->LoginURL;
    }

    public function setPublicKey($PublicKeyFile)
    {
        $this->PublicKeyFile = $PublicKeyFile;
        $this->PublicKey  = file_get_contents($this->PublicKeyFile);
    }


    public function authorizeUser($ComToken)
    {
        if(empty($this->CallbackURL))
        {
            print_r("Error.  Callback URL not specified");
        }
        else
        {
            $forward_url = $this->LoginURL ."?ComToken=". $ComToken ."&AppID=". $this->AppID ."&callback_url=". urlencode($this->CallbackURL);
            ob_start();
            header("Location:". $forward_url);
            ob_flush();
        }
    }


    public function getNewComToken() 
    {
        $post_data = array();
        $post_data['AppID']       = $this->AppID;
        $post_data['PublicKey']   = $this->PublicKey;

        $response = $this->cURLRequest($post_data);

        if(!($response['response']))
        {
            return $this->get404Response($response);
        }

        $response = json_decode($response['response'], true);

        return $response;
    }



    public function authorizeUserByPassword($post_data)
    {
        $response = $this->cURLRequest($post_data);

        if(!($response['response']))
        {
            return $this->get404Response($response);
        }
        else
        {
            $response = json_decode($response['response'], true);

            if($response['status_code'] == 200)
            {
                # Store AuthToken for 10 hours
                setcookie("AuthToken", $response['AuthToken'], time() + (3600 * 10), "/", $this->ClientHost, false, true);

                # load cookie immediately for debug
                $_COOKIE['AuthToken'] = $response['AuthToken'];
                
                #return 200 - valid login
                return $response;
            }
            else
            {
                #return 401 - invalid login
                return $response;
            }
        }
    }


    public function getStoredAuthToken()
    {
        return $_COOKIE['AuthToken'];
    }


    public function setAuthToken($AuthToken)
    {
        # Store AuthToken for 10 hour
        setcookie("AuthToken", $AuthToken, time() + (3600 * 10), "/", $this->ClientHost, false, true);

        # load cookie immediately for debug
        $_COOKIE['AuthToken'] = $AuthToken;

        return $_COOKIE['AuthToken'];
    }



    public function logout($ComToken)
    {
        $post_data = array();
        $post_data['ComToken']  = $ComToken;
        $post_data['Logout']    = $_COOKIE['AuthToken'];

        $response = $this->cURLRequest($post_data);

        if(!($response['response']))
        {
            return $this->get404Response($response);
        }
        else
        {
            $response = json_decode($response['response'], true);

            if($response['status_code'] == 200)
            {
                # 200 - valid AuthToken

                # Destroy AuthToken
                setcookie("AuthToken", 0, time() - (3600 * 24 * 14), "/", $this->AuthHost);

                # Destroy the session
                session_destroy(); 
                $_SESSION = array();

                if(empty($this->CallbackURL))
                {
                    print_r("Error.  Callback URL not specified");
                }
                else
                {
                    # Redirect
                    ob_start();
                    header("Location:". $this->CallbackURL);
                    ob_flush();
                }
            }
            else
            {
                #return 401 - invalid AuthToken
                return $response;
            }
        }

    }


    public function getUserDetails($ComToken)
    {
        $post_data = array();
        $post_data['ComToken']     = $ComToken;
        $post_data['AuthToken']    = $_COOKIE['AuthToken'];
        $post_data['UserDetails']  = true;

        $response = $this->cURLRequest($post_data);

        if(!($response['response']))
        {
            return $this->get404Response($response);
        }
        else
        {
            $response = json_decode($response['response'], true);

            if($response['status_code'] == 200)
            {
                # 200 - valid AuthToken
                return $response;
            }
            else
            {
                #return 401 - invalid AuthToken
                return $response;
            }
        }

    }


    public function authorizeUserByToken($post_data)
    {
        $response = $this->cURLRequest($post_data);

        if(!($response['response']))
        {
            return $this->get404Response($response);
        }
        else
        {
            $response = json_decode($response['response'], true);

            if($response['status_code'] == 200)
            {
                #return 200 - valid login
                return $response;
            }
            else
            {
                #return 401 - invalid login
                return $response;
            }
        }
    }



    private function get404Response($data)
    {
        $response = array();

        $response['status'] = $data['msg'];
        $response['status_code'] = "404";

        if(!empty($data) && !empty($data['msg']))
        {
            $response['status'] = $data['msg'];
        }

        return $response;
    }


    private function cURLRequest($post_data)
    {
        # Add to each request
        $post_data['REMOTE_ADDR']     = $_SERVER['REMOTE_ADDR'];
        $post_data['HTTP_USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->AuthURL,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array('request' => json_encode($post_data) )
        ));

        $resp = curl_exec($curl);

        if(!$resp)
        {
            # Problem making request, likely because of a bad hostname
            $response = array();
            $response['msg']      = 'Communication Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl);
            $response['response'] = false;

            curl_close($curl);
            return $response;
        }

        curl_close($curl);


        $response = array();
        $response['msg']      = "OK";
        $response['response'] = $resp;

        # The test string must be the same that is returned as the 404 ErrorDocument on the server
        if( strpos($response['response'], "No content found.") !== false )
        {
            # Problem making request, likely because of an incorrect server location
            $response['msg']      = "404 - Couldn't find server";
            $response['response'] = false;
        }

        return $response;
    }




}


?>
