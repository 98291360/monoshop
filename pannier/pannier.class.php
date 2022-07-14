<?php
class Pannier{
	public function __construct(){
	if(isset($_SESSION)){
		session_start();

	}//fin if
	if (isset($_SESSION['panier'])) {
	$_SESSION['panier'] = array();
}//fin if

}//fin constructeur


}
