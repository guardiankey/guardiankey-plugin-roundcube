<?php

/**
 * GuardianKey Auth Security
 *
 *
 * Please, register in https://panel.guardiankey.io and put deploy info in config.inc.php!
 *
 * @license GNU GPLv3+
 * @author GuardianKey Security
 */
 
require 'guardiankey.class.php';
 
class guardiankey_auth extends rcube_plugin
{


    function init()
    {
        $this->add_hook('login_after', array($this, 'login'));
		$this->add_hook('login_failed', array($this, 'login_failed'));
		$this->load_config();
		
    }


    function login($args)
    {
		$rcmail = rcmail::get_instance();
        $GKconfig = $rcmail->config->get('Gkconfig');
		$GK = new guardiankey($GKconfig);
		$rcmail2 =  json_decode(json_encode($rcmail->user->data));
        $username = $rcmail2->username;
		$GKRet = $GK->checkaccess($username,'','1');
		$GKJSONReturn = @json_decode($GKRet);
        if ($GKJSONReturn->response == 'BLOCK' ) {
			$RCMAIL = rcmail::get_instance(0, $GLOBALS['env']);
            $RCMAIL->kill_session();        }
		else {
			return $args;
		}
	}
  function login_failed($args)
    {
		$rcmail = rcmail::get_instance();
        $GKconfig = $rcmail->config->get('Gkconfig');
		$GK = new guardiankey($GKconfig);
        $username = $args['user'];
		$GK->checkaccess($username,'','1');
		return $args;
	}
}