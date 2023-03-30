<?php
class Configuracao {

	//const HOST_SERVER        = "http://www.ppc.proeg.ufpa.br";
	//const NAME_DATA_BASE     = "tambaqui_proeg_ppc";
	//const HOST_DATA_BASE     = "vilinha.ufpa.br";
	//const USER_DATA_BASE     = "ppc";
	//const PASSWORD_DATA_BASE = "YSVuNu9VMcwYr2T";

	/* LOCAL
	 */
	
		const HOST_SERVER = "localhost/wordpress";
		const NAME_DATA_BASE = "egressos";
		const HOST_DATA_BASE = "localhost";
		const USER_DATA_BASE = "root";
		const PASSWORD_DATA_BASE = "";
	
	

	const ALERTS    = true;
	const DEBUG_SQL = true;
	const SEND_MAIL = true;

	public static function getDns() {
		return 'mysql:host='.self::HOST_DATA_BASE.';dbname='.Configuracao::NAME_DATA_BASE.';charset=utf8';
	}

	
}
?>