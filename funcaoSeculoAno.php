<?php
    
    function SeculoAno($ano){
        
        if($ano%100 != 0)
        {
			$teste = ($ano%100)/100;
            $calc= ($ano/100)-$teste;
            $seculo=$calc+1;
			echo "século $seculo";
			return "século $seculo";
        }
        else{
            $calc= $ano/100;
            $seculo=$calc;
            echo "século $seculo";
			return "século $seculo";
        }
        
    }

    SeculoAno("1700");

