<?php 

include "conBD.php";

class CRUD extends conBD
{
	private $query;
	private function prepExec($prep, $exec){
		$this->query=$this->getCon()-> prepare($prep);
		$this->query->execute($exec);
	}

	public function insert($table, $cond, $exec){

		$this->prepExec ( 'INSERT INTO ' .$table. ' SET '.$cond.'', $exec);
	}

	public function select($fields, $table, $cond, $exec){
		$this->prepExec('SELECT '.$fields. ' FROM ' .$table. ' '.$cond. '', $exec);
		return $this->query;
	}

	public function update($table, $cond, $exec){
		$this->prepExec('UPDATE '.$table. ' SET '.$cond.'', $exec);
	}

	public function delete($table, $cond, $exec){
		$this->prepExec('DELETE FROM '.$table.' '.$cond.'', $exec);
	}
}