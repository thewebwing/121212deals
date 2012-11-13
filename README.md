ci-foundation v1.0 by Mike Rogne
================================

CodeIgniter Foundation - A Common Starting Point for New Projects

This is a custom "starter kit" written by me (Mike Rogne) for me. I don't expect anybody to actually use this, but if you do I hope you enjoy.

Included are the following:

+ CodeIgniter 2.1.3
+ MY_Model (Jamie Rumbelow)
+ MY_Controller (Jamie Rumbelow)
+ MY_Presenter (Based on concept by Jamie Rumbelow -- can you tell I'm a big fan?)
+ Ion Auth
+ Zurb Foundation 3.2.2 (Sorry Bootstrap fans, Foundation is my favorite)
+ MY_date_helper (Modified timespan usage, etc)
+ permission_helper (Blank canvas for checking various things, like if a person is in a group, is an admin, is active, etc)
+ native_autoload.php (This sets up the __autoload() magic method per Phil Sturgeon's blog for autoloading base controllers. Modified to autoload presenters!)
+ settings.php (Just a separate area for misc. settings instead of config.php)
+ User_Controller - Base controller that requires a person to be logged in
+ Admin_Controller - Base controller that requires a person to be logged in and be an admin
+ Image_moo - Image manipulation library, see: http://www.matmoo.com/digital-dribble/codeigniter/image_moo/

If you'd like, you can reach me at http://www.infinitywebcreations.com/.