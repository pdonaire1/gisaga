 <?php
        //ENTER THE RELEVANT INFO BELOW
        include ("conexion.php");
        $mysqlDatabaseName =$db;
        $mysqlUserName =$user ;
        $mysqlPassword =$pw;
        $mysqlHostName =$host ;
        $fecha = date_default_timezone_get();
        $mysqlExportPath ="GISAGA_PARA_Backup_$fecha.sql";

        //DO NOT EDIT BELOW THIS LINE
        //Export the database and output the status to the page
        $command='mysqldump --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' > ~/' .$mysqlExportPath;
        
        $result = mysql_query("LOAD DATA INFILE '$file' INTO TABLE `$mysq`");
        $res = system("/usr/bin/mysqldump -u $mysqlUserName -p $mysqlPassword $mysqlDatabaseName | gzip > db_backup.sql.gz");
        echo $res;
        if($res)
            echo "Exportado con éxito.";
        else
            echo "Error al Exportado";
        
        if(exec($command))
            echo "Exportado con éxito.";
        else
            echo "Error al Exportado";
 ?>
 
 <?php
 if (!function_exists('mysql_dump')) {
   $database =$mysqlDatabaseName;
   function mysql_dump($database) {
 
      $query = '';
 
      $tables = @mysql_list_tables($database);
      while ($row = @mysql_fetch_row($tables)) { $table_list[] = $row[0]; }
 
      for ($i = 0; $i < @count($table_list); $i++) {
 
         $results = mysql_query('DESCRIBE ' . $database . '.' . $table_list[$i]);
 
         $query .= 'DROP TABLE IF EXISTS `' . $database . '.' . $table_list[$i] . '`;' . lnbr;
         $query .= lnbr . 'CREATE TABLE `' . $database . '.' . $table_list[$i] . '` (' . lnbr;
 
         $tmp = '';
 
         while ($row = @mysql_fetch_assoc($results)) {
 
            $query .= '`' . $row['Field'] . '` ' . $row['Type'];
 
            if ($row['Null'] != 'YES') { $query .= ' NOT NULL'; }
            if ($row['Default'] != '') { $query .= ' DEFAULT \'' . $row['Default'] . '\''; }
            if ($row['Extra']) { $query .= ' ' . strtoupper($row['Extra']); }
            if ($row['Key'] == 'PRI') { $tmp = 'primary key(' . $row['Field'] . ')'; }
 
            $query .= ','. lnbr;
 
         }
 
         $query .= $tmp . lnbr . ');' . str_repeat(lnbr, 2);
 
         $results = mysql_query('SELECT * FROM ' . $database . '.' . $table_list[$i]);
 
         while ($row = @mysql_fetch_assoc($results)) {
 
            $query .= 'INSERT INTO `' . $database . '.' . $table_list[$i] .'` (';
 
            $data = Array();
 
            while (list($key, $value) = @each($row)) { $data['keys'][] = $key; $data['values'][] = addslashes($value); }
 
            $query .= join($data['keys'], ', ') . ')' . lnbr . 'VALUES (\'' . join($data['values'], '\', \'') . '\');' . lnbr;
 
         }
 
         $query .= str_repeat(lnbr, 2);
 
      }
 
      return $query;
 
   }
 
}
 ?>
 
 
 <?
 echo "<br>***<br>";
// Nombre del archivo de con el cual queremos que se guarde la base de datos 
$filename = "tempo.sql"; 
// Cabezeras para forzar al navegador a guardar el archivo 
header("Pragma: no-cache");
echo "<br>";
header("Expires: 0");
echo "<br>";
header("Content-Transfer-Encoding: binary");
echo "<br>";
header("Content-type: application/force-download");
echo "<br>";
header("Content-Disposition: attachment; filename=$filename"); 
echo "<br>";
$usuario=$mysqlUserName;  // Usuario de la base de datos, un ejemplo podria ser 'root' 
$passwd=$mysqlPassword;  // Contraseña asignada al usuario 
$bd=$mysqlDatabaseName;  // Nombre de la Base de Datos a exportar 

// Funciones para exportar la base de datos 
//encaso de que sea linux 
$executa = "/usr/bin/mysqldump -u $usuario --password=$passwd --opt $bd"; 
//en caso de que sea sobre windows esto otro 
//$executa = "c:\\mysql\\bin\\mysqldump.exe -u $usuario --password=$passwd --opt $bd"; 
system($executa, $resultado); 

// Comprobar si se a realizado bien, si no es asi, mostrará un mensaje de error 
if ($resultado) { echo "<H1>Error ejecutando comando: $executa</H1>\n"; } 

?>
 
 
 
 <?php 
// te conectas y demás 
$consulta= mysql_query("SELECT * FROM tabla WHERE ...."); 

while ($row=mysql_fetch_row($consulta)) { 
@$contenido.="INSERT INTO tabla VALUES("; 
for($i=0; $i<count($row); $i++) 
      $contenido.="'".$row[$i]."'"; 
      if($i!=count($row)) $contenido.=", "; 
$contenido.=")\n"; 
} 

$arch= "archivo.sql"; 
$gest= fopen($arch, "w"); 
fwrite($gest, $contenido); 
fclose($gest); 
//header("Location:$arch"); // creo no te lo descargaría tendrías que forzarla










?>

<?php
$dbhost = $host_puerto;
$dbuser = $user;
$dbpass = $pw;
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$table_name = 'gisaga1.encuesta';
$backup_file  = "/tmp/employee.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";

mysql_select_db($db);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not take data backup: ' . mysql_error());
}
echo "Backedup  data successfully\n";
mysql_close($conn);
?>



