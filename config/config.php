<?PHP
# Account Maker Config
$config['site']['serverPath'] = "C:/Users/Administrator/Downloads/alba/";
$config['site']['useServerConfigCache'] = false;
$config['site']['worlds'] = array(0 => 'OTSERVTEAM');
$towns_list[0] = array(1 => 'Venore', 2 => "Thais", 3 => "Kazordoon", 4 => 'Carlin', 5 => 'Abdendriel', 7 => 'Liberty Bay', 8 => 'Port Hope', 9 => 'Ankrahmun', 10 => 'Darashia', 11 => 'Edron', 12 => 'Svargrond', 13 => 'Yalahar', 14=> 'Farmine');

$config['site']['outfit_images_url'] = 'http://outfit-images.ots.me/outfit.php';
$config['site']['item_images_url'] = 'http://item-images.ots.me/860/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'http://flag-images.ots.me/';
$config['site']['flag_images_extension'] = '.png';



$config['site']['langSystem'] = 1;
	$config['site']['chooseLang'] = 'br';







# Create Account Options
$config['site']['one_email'] = false;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 0;
# newaccpremdays is in UNIX time.
# http://www.onlineconversion.com/unix_time.htm
# for example 1385769600 sets premium_account to end of 2014
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'][0] = array(1 => 'Sorcerer Sample', 2 => 'Druid Sample', 3 => 'Paladin Sample', 4 => 'Knight Sample');
$config['site']['newchar_towns'][0] = array(1,2,11,10,8,9,12,14);
$config['site']['max_players_per_account'] = 8;
$vocation_name[0] = array(0 => 'None', 1 => 'Sorcerer', 2 => 'Druid', 3 => 'Paladin', 4 => 'Knight', 5 => 'Master Sorcerer', 6 => 'Elder Druid', 7 => 'Royal Paladin', 8 => 'Elite Knight' ); // id => 'name' , $vocation_name[0] - promotion level 0
$vocation_name = array(0 => 'None', 1 => 'Sorcerer', 2 => 'Druid', 3 => 'Paladin', 4 => 'Knight', 5 => 'Master Sorcerer', 6 => 'Elder Druid', 7 => 'Royal Paladin', 8 => 'Elite Knight' ); // id => 'name' , $vocation_name[0] - promotion level 0
// list of towns on ots

# Emails Config
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "otservteam@wp.pl";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "smtp.wp.pl";
$config['site']['smtp_port'] = 25;
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "otservteam@wp.pl";
$config['site']['smtp_pass'] = "haha";
$config['site']['from_name'] = "OTServ Team"; // password

# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 0;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/



# PAGE: characters.php
$config['site']['quests'] = array();
$config['site']['show_skills_info'] = true;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = false;
$config['site']['generate_new_reckey_price'] = 500;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 1;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 3;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(4, 5, 6);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'tibiacom';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;
