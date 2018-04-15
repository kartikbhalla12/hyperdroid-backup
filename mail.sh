kek = "$message .= '(' . network_site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . ")\r\n";"
sed -i '367s/.*/$kek' wp-login.sh
