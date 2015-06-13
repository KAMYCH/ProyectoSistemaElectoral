<?php
class partidoControlador extends partido{
   
    public function guardarDatos($con,$objAlumno) {
        $variableSql = "INSERT INTO inscri_partido ";
        $variableSql .= "(id,nombre_partido,bandera,dui,representante) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."',";
        $variableSql.="'".$objAlumno[3]."',";
        $variableSql.="'".$objAlumno[4]."');";  
         return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objAlumno) {
        $variableSql = "UPDATE inscri_partido SET  ";
        $variableSql .= "  ,nombre_partido = '".$objAlumno[1]."'";
       $variableSql .= " ,bandera= '".$objAlumno[2]."'";
        $variableSql .= "  ,dui = '".$objAlumno[3]."'";
        $variableSql .= "  ,representante = '".$objAlumno[4]."'";
        $variableSql .= " WHERE id = ".$objAlumno[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
