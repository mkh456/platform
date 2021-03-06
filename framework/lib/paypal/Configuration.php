<?php 
class Configuration
{
	// For a full list of configuration parameters refer in wiki page (https://github.com/paypal/sdk-core-php/wiki/Configuring-the-SDK)
	public static function getConfig()
	{
		$config = array(
				// values: 'sandbox' for testing
				//		   'live' for production
                //         'tls' for testing if your server supports TLSv1.2
				"mode" => "sandbox"

                // TLSv1.2 Check: Comment the above line, and switch the mode to tls as shown below
                //"mode" => "tls"
	
				// These values are defaulted in SDK. If you want to override default values, uncomment it and add your value.
				// "http.ConnectionTimeOut" => "5000",
				// "http.Retry" => "2"
		);
		return $config;
	}
	
	// Creates a configuration array containing credentials and other required configuration parameters.
	public static function getAcctAndConfig()
	{
		$config = array(
				// Signature Credential
				"acct1.UserName" => "permissions_api1.cashmusic.org",
				"acct1.Password" => "HYNRY4L6RWM5Q58C",
				"acct1.Signature" => "AFcWxV21C7fd0v3bYYYRCpSSRl31A3tQ7fSy6HXTLvPtfTSdF4LfScnZ",
				"acct1.AppId" => "APP-80W284485P519543T",
				
				// Sample Certificate Credential
				// "acct1.UserName" => "certuser_biz_api1.paypal.com",
				// "acct1.Password" => "D6JNKKULHN3G5B8A",
				// Certificate path relative to config folder or absolute path in file system
				// "acct1.CertPath" => "cert_key.pem",
				// "acct1.AppId" => "APP-80W284485P519543T"
				);
		
		return array_merge($config, self::getConfig());;
	}

}