<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * activities_categorie_id_option_list Model Action
     * @return array
     */
	function activities_categorie_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,title AS label FROM categories";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * jobs_countrie_id_option_list Model Action
     * @return array
     */
	function jobs_countrie_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,country AS label FROM countries";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * users_name_value_exist Model Action
     * @return array
     */
	function users_name_value_exist($val){
		$db = $this->GetModel();
		$db->where("name", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * users_email_value_exist Model Action
     * @return array
     */
	function users_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("users");
		return $exist;
	}

}
