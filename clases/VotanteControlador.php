<?php
class VotanteControlador extends Votante{
   
    public function guardarDatos($con,$objAlumno) {
        $variableSql = "INSERT INTO registro_votante";
        $variableSql .= "(id,dui,nombre,apellido,";
        $variableSql .= "foto,genero,fecha,direccion,iddepa,idmuni)";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."',";
        $variableSql.="'".$objAlumno[3]."',";
        $variableSql.="'".$objAlumno[4]."',";
        $variableSql.="'".$objAlumno[5]."',";
        $variableSql.="'".$objAlumno[6]."',";
        $variableSql.="'".$objAlumno[7]."',";
        $variableSql.="'".$objAlumno[8]."',";
        $variableSql.="'".$objAlumno[9]."');";  
        return consultaA($con, $variableSql);
        }

     public function modificarDatos($con,$objAlumno) {
        $variableSql = "UPDATE registro_votante SET  ";
        $variableSql .= "dui = '".$objAlumno[1]."'";
        $variableSql .= "  ,nombre = '".$objAlumno[2]."'";
        $variableSql .= " ,apellido = '".$objAlumno[3]."'";
        $variableSql .= " ,foto = '".$objAlumno[4]."'";
        $variableSql .= " ,genero = '".$objAlumno[5]."'";
        $variableSql .= " ,fecha = '".$objAlumno[6]."'";
        $variableSql .= " ,direccion = '".$objAlumno[7]."'";
        $variableSql .= " ,iddepa = '".$objAlumno[8]."'";
        $variableSql .= " ,idmuni = '".$objAlumno[9]."'";
        $variableSql .= " WHERE id = ".$objAlumno[0].";";              
        return consultaA($con, $variableSql);
        }
}