# Plugin GuardianKey Auth for Roundcube

More info about GuardianKey Auth: https://guardiankey.io

## Instalation

You can install of two forms:

### Install directly

Download and extract the plugin into folder "plugins", in Roundcube root files and rename folder of plugin:

\# cd <roundcube_root>/plugins
\# wget https://github.com/pauloangelo/guardiankey-plugin-roundcube/archive/master.zip
\# unzip guardiankey-plugin-roundcube-master.zip
\# mv guardiankey-plugin-roundcube-master guardiankey_auth

Activate in "<roundcube_root>/config/config.inc.php", in variable "$config['plugins']", example:

    $config['plugins'] = ['archive', 'zipdownload','guardiankey_auth'];


### Install via composer

Not disponible yet
