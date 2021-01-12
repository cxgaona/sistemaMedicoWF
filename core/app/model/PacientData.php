<?php
class PacientData {
	public static $tablename = "pacient";
	public function PacientData(){
		$this->title = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (name,lastname,gender,day_of_birth,address,phone,email,sick,medicaments,alergy,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->gender\",\"$this->day_of_birth\",\"$this->address\",\"$this->phone\",\"$this->email\",\"$this->sick\",\"$this->medicaments\",\"$this->alergy\",$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto PacientData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set 
		biometria=\"$this->biometria\",
		qsanguinea=\"$this->qsanguinea\",
		rx=\"$this->rx\",
		otros=\"$this->otros\",
		textarea=\"$this->textarea\",

		textdiagnos1=\"$this->textdiagnos1\",
		textcie1=\"$this->textcie1\",
		profesional=\"$this->profesional\",
		
		checkboxpre1=\"$this->checkboxpre1\",
		checkboxdef1=\"$this->checkboxdef1\",
		textdiagnos2=\"$this->textdiagnos2\",
		textcie2=\"$this->textcie2\",
		checkboxpre2=\"$this->checkboxpre2\",
		checkboxdef2=\"$this->checkboxdef2\",
		textdiagnos3=\"$this->textdiagnos3\",
		textcie3=\"$this->textcie3\",
		checkboxpre3=\"$this->checkboxpre3\",
		checkboxdef3=\"$this->checkboxdef3\",
		textdiagnos4=\"$this->textdiagnos4\",
		textcie4=\"$this->textcie4\",
		checkboxpre4=\"$this->checkboxpre4\",
		checkboxdef4=\"$this->checkboxdef4\",

		txtdiag1=\"$this->txtdiag1\",
		txtproc1=\"$this->txtproc1\",
		txtpres1=\"$this->txtpres1\",
		txtpro1=\"$this->txtpro1\",
		dat1=\"$this->dat1\",
		txtdiag2=\"$this->txtdiag2\",
		txtproc2=\"$this->txtproc2\",
		txtpres2=\"$this->txtpres2\",
		txtpro2=\"$this->txtpro2\",

		txtdiag3=\"$this->txtdiag3\",
		txtproc3=\"$this->txtproc3\",
		txtpres3=\"$this->txtpres3\",
		txtpro3=\"$this->txtpro3\",
		dat2=\"$this->dat2\",
		txtdiag4=\"$this->txtdiag4\",
		txtproc4=\"$this->txtproc4\",
		txtpres4=\"$this->txtpres4\",
		txtpro4=\"$this->txtpro4\",
		
		txtdiag5=\"$this->txtdiag5\",
		txtproc5=\"$this->txtproc5\",
		txtpres5=\"$this->txtpres5\",
		txtpro5=\"$this->txtpro5\",
		dat3=\"$this->dat3\",
		txtdiag6=\"$this->txtdiag6\",
		txtproc6=\"$this->txtproc6\",
		txtpres6=\"$this->txtpres6\",
		txtpro6=\"$this->txtpro6\",

		txtdiag7=\"$this->txtdiag7\",
		txtproc7=\"$this->txtproc7\",
		txtpres7=\"$this->txtpres7\",
		txtpro7=\"$this->txtpro7\",
		dat4=\"$this->dat4\",
		txtdiag8=\"$this->txtdiag8\",
		txtproc8=\"$this->txtproc8\",
		txtpres8=\"$this->txtpres8\",
		txtpro8=\"$this->txtpro8\",

		txtdiag9=\"$this->txtdiag9\",
		txtproc9=\"$this->txtproc9\",
		txtpres9=\"$this->txtpres9\",
		txtpro9=\"$this->txtpro9\",
		dat5=\"$this->dat5\",
		txtdiag10=\"$this->txtdiag10\",
		txtproc10=\"$this->txtproc10\",
		txtpres10=\"$this->txtpres10\",
		txtpro10=\"$this->txtpro10\",
		
		dateaper1=\"$this->dateaper1\",
		datecon1=\"$this->datecon1\",
		profesional=\"$this->profesional\",


		cedula=\"$this->cedula\",name=\"$this->name\",lastname=\"$this->lastname\",address=\"$this->address\",phone=\"$this->phone\",email=\"$this->email\",gender=\"$this->gender\",day_of_birth=\"$this->day_of_birth\",sick=\"$this->sick\",medicaments=\"$this->medicaments\",alergy=\"$this->alergy\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PacientData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}


}

?>