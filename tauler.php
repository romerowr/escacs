<?php
	
	require 'quadre.php';

	class Tauler{
		private $peces=array();
		private $tipus; //escac o aleat
		private $nRows=null;
		private $nCols=null;
		

		function __construct($nRows, $nCols, $tipus){ 
	
			$this->tipus=$tipus;
			switch ($this->tipus) {
				case '1': $this->escac($nRows, $nCols, $tipus);//escac
					break;
				
				case '2': $this->aleat($nRows=null, $nCols=null, $tipus);//aleat
					break;
			}
		}

		function escac($nRows, $nCols, $tipus){ //la meva idea era crear una clase escacAleat que controles amb el tipus que volies i despres truques a escac() o aleat() segons si fos un 1 o un 2 pero mem falta temps
			
			$this->nRows=$nRows; 
			$this->nCols=$nCols; 


			for($i=1; $i<=$nRows; $i++){
				for($j=1; $j<=$nCols; $j++){
					if(($i+$j)%2){
						$color='black';
						$this->peces[$i][$j]=new Quadre($color);
					}else{
						$color='white';
						$this->peces[$i][$j]=new Quadre($color);
					}
				}
			}
		}

		function aleat($nRows, $nCols, $tipus){}

		

		function show(){
			echo '<style>html{background-color: tomato;}</style><table>';
			for($i=1; $i<=$this->nRows; $i++){
				echo '<tr>';
				for($j=1; $j<=$this->nCols; $j++){
					$this->peces[$i][$j]->show();
				}
				echo '</tr>';
			}
			echo '</table>';
		}
	}