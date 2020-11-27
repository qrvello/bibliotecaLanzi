<?php

require_once('../config/database.php');


class AccesoADatos
{
    private $db;

    public function __construct()
    {
        $this->db = Database::conectar();
    }

    public function query($query)
    {
        return mysqli_query($this->db, $query);
    }

    public function mostrar_materias()
    {
        $query = $this->query("CALL MostrarMaterias()");
        while ($materia = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $materia['id'] . '</td>';
            echo '<td>' . $materia['nombre'] . '</td>';
            echo '<td>' . $materia['año'] . '°</td>';
            echo '<td>' . $materia['division'] . '°</td>';
            echo '</tr>';
        }
    }

    public function mostrar_alumnos()
    {
        $query = $this->query("CALL MostrarUsuarios()");

        while ($alumnos = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $alumnos['tipo_doc'] . '</td>';
            echo '<td>' . $alumnos['numero_doc'] . '</td>';
            echo '<td>' . $alumnos['nombre'] . '</td>';
            echo '<td>' . $alumnos['apellido'] . '</td>';
            echo '<td>' . $alumnos['año'] . '°</td>';
            echo '<td>' . $alumnos['division'] . '°</td>';
            echo '</tr>';
        }
    }

    public function update()
    {
        $numero = $_SESSION['id'];
        $nombre = $_POST['nombre'];
        $logo_ruta = '';
        $directorio = "../Logo/";

        if (!is_dir($directorio)) {
            mkdir($directorio, 0755, true);
        }

        if (move_uploaded_file($_FILES['logo']['tmp_name'], $directorio . $_FILES['logo']['name'])) {
            $logo_ruta = $_FILES['logo']['name'];
        }

        $query = $this->query("CALL Update_materia('$nombre', '$logo_ruta',$numero);");

        return $query;
    }

    public function buscar()
    {
        $_SESSION['id'] = @$_POST['id'];
        $numero = $_SESSION['id'];
        $query = "CALL Search($numero);";
      
        $resultado = $this->query($query);

        if ($valor = mysqli_fetch_assoc($resultado)) {
            $_SESSION['nombre'] = $valor[0];
            $_SESSION['logo'] = $valor[1];
        } else {
            $_SESSION['id'] = '';
            $_SESSION['nombre'] = '';
            $_SESSION['logo'] = '';
        }
    }

    public function alta()
    {
        try {
            $numero = $_POST['id_materias'];
            $nombre_ma = $_POST['nombre_ma'];
            $nombre_alu = $_POST['nombre_alu'];
            $apellido = $_POST['apellido'];
            $año = $_POST['año'];
            $division = $_POST['division'];
            $tipo_dni = $_POST['tipo_doc'];
            $dni = $_POST['numero_doc'];

            $query_ma = "CALL alta_materia('$numero', '$nombre_ma', '$año', '$division');";
            $query_alu = "CALL alta_usuario('$nombre_alu', '$apellido', '$año', '$division', '$tipo_dni', '$dni');";
            $resultado = $this->query($query_ma);
            $resultado2 = $this->query($query_alu);

            if ($resultado && $resultado2) echo "<center> Materia creada correctamente </center>.";

            else echo "Alumno NO registrado correctamente.";
            
            return $resultado2;
            return $resultado;
        } catch (Exception $e) {
            echo "ERROR AL EJERCUTAR INSERT.";
        }
    }
}
