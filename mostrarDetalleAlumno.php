<?php
    include_once 'datosAlumnos.php';

    $id;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    mostrarTablaNotasAlumnos($id, $notas);
    
    function mostrarTablaNotasAlumnos($id, $alumnos){
        $html ='<table>
                <tr>
                <td>Materia</td>
                <td>Nota</td>
                </tr>'   ; 
        
        foreach($alumnos as $alumno){

            if($id == $alumno['id']){
                foreach($alumno['promedio'] as $nota){
                    $html .= '<tr>
                             <td>Materia</td>
                             <td>'.$nota.'</td>
                    </tr>';
                }
            }
        
        }

        $html .='</table>';
    }
    
?>