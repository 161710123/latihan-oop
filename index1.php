<?php
class mobil{
	public $merk ;
	public $berat ;

	public function set_merk($nama)
	{
	return $this->merk=$nama;
}
public function get_merk()
{
	return $this->merk;
}
}
$mobil = new mobil;
$mobil -> set_merk("toyota");
echo $mobil -> get_merk();

?>
