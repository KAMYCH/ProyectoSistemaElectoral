<?php
class usuarioControlador extends usuario{
   
    public function guardarDatos($con,$objAlumno) {
        $variableSql = "INSERT INTO usuario ";
        $variableSql .= "(id,user,clave) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."');";        
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objAlumno) {
        $variableSql = "UPDATE usuario SET  ";
        $variableSql .= "  ,user = '".$objAlumno[1]."'";
        $variableSql .= " ,clave = '".$objAlumno[2]."'";
        $variableSql .= " WHERE id = ".$objAlumno[0].";";                
        return consultaA($con, $variableSql);
        }
}

        