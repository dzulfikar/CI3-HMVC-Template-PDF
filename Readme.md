/// Codeigniter 3 With CRUD Generator and Templating System ///
/// HMVC Framework Models //
Modified:

Author: Raessa Fathul Alim
Last Update : 26/06/2015
Thanks To : 
- http://code.tutsplus.com/tutorials/an-introduction-to-views-templating-in-codeigniter--net-25648
- http://belajarphp.net
- http://harviacode.com


For Load Template
$view = "Your Aplication View";
$template = "Your Template"
$this->template->load('templates/$template','$view', $data);

Modules Folder

./application/modules/your_folder_name_like_main_controller/controllers/main_controller.php
./application/modules/your_folder_name_like_main_controller/views/Your_Aplication_View.php
./application/modules/your_folder_name_like_main_controller/models/Your_Model.php


For Create CRUD Like Make A Baby :D
http://localhost/your_apps/_crudgenerator

!!!!  DONT FORGET TO MODIFICATION DATABASE IN YOUR APPS AND _crudgenerator/lib/config.php !!!
Example :

//configure your database setting here
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'dbtest'; //

BIG THANKS FOR YOU!!
Sorry For RIP English :p