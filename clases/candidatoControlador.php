<?php
class CandidatoControlador extends candidato{
   
    public function guardarDatos($con, $objAlumno) {
        $variableSql = "INSERT INTO inscrip_candi ";
        $variableSql .= "(id, dui, apellido, nombre, id_depa,";
        $variableSql .= "id_muni, tipo_candidatura, id_cargo,";
        $variableSql .= "id_inscrip_parti, depa, muni) ";
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
        $variableSql.="'".$objAlumno[9]."',";
        $variableSql.="'".$objAlumno[10]."');";        
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objAlumno) {
        $variableSql = "UPDATE inscrip_candi SET  ";
        $variableSql .= " dui = '".$objAlumno[1]."'";
        $variableSql .= "  ,apellido = '".$objAlumno[2]."'";
        $variableSql .= " ,nombre = '".$objAlumno[3]."'";
        $variableSql .= " ,id_depa = '".$objAlumno[4]."'";
        $variableSql .= " ,id_muni = '".$objAlumno[5]."'";
        $variableSql .= " ,tipo_candidatura = '".$objAlumno[6]."'";
        $variableSql .= " ,id_cargo = '".$objAlumno[7]."'";
        $variableSql .= " ,id_inscrip_parti = '".$objAlumno[8]."'";
        $variableSql .= " ,depa = '".$objAlumno[9]."'";
        $variableSql .= " ,muni = '".$objAlumno[10]."'";
        $variableSql .= " WHERE id = ".$objAlumno[0].";";                
        return consultaA($con, $variableSql);
        
        }
}