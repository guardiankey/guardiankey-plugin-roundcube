# Plugin GuardianKey Auth for Roundcube

More info about GuardianKey Auth: https://guardiankey.io

## Instalation

You can install it in two ways:

### Install directly

Download and extract the plugin into folder "plugins", in Roundcube root files and rename folder of plugin:

	\# cd <roundcube_root>/plugins

	\# wget https://github.com/pauloangelo/guardiankey-plugin-roundcube/archive/master.zip

	\# unzip guardiankey-plugin-roundcube-master.zip

	\# mv guardiankey-plugin-roundcube-master guardiankey_auth

Activate in "<roundcube_root>/config/config.inc.php", in variable "$config['plugins']", example:

    $config['plugins'] = ['archive', 'zipdownload','guardiankey_auth'];

You need create a register in https://panel.guardiankey.io/auth/register. Then you navigate to https://panel.guardiankey.io, go to Setings->Authgroups->Edit/view(in My Authgroup)->Deploy information.
Get informations and put in <roundcube_root>/plugins/guardiankey_auth/config.inc.php.

### Install via composer

Not disponible yet
