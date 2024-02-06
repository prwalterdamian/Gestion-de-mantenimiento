<!DOCTYPE html>
<html>
    <head>
        <title>cargar</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
    <div class="logo">
      <img src="logo-15.png" width="80px" alt="Bowers and Simmons" />
    </div>
    <h1>Carga de equipo</h1>
    
    <form class="botones" method="post">
      <select class="boton" name="type">
        <option disabled selected>Seleccione un equipo</option>
        <option>AIRE ACONDICIONADO-CONDENSADORA</option>
        <option>AIRE ACONDICIONADO-EVAPORADORA</option>
        <option>BOMBA ELEVADORA</option>
        <option>BOMBA JOCKEY</option>
        <option>BOMBA PRESURIZADORA</option>
        <option>BOMBA PRESURIZADORA INCENDIO</option>
        <option>BOMBA TRITURADORA</option>
        <option>CAJA VAM</option>
        <option>CENTRAL DE INCENDIO</option>
        <option>GRUPO ELECTRÓGENO</option>
        <option>MOTOR DE EXTRACTOR DE AIRE</option>
        <option>MOTOR DE CORTINA</option>
        <option>MOTOR DE INYECTOR DE AIRE</option>
        <option>PULMÓN HIDRONEUMÁTICO</option>
        <option>TABLERO ELÉCTRICO</option>
        <option>TABLERO GENERAL</option>
        <option>TABLERO SECCIONAL</option>
      </select>
      <input class="boton" type="text" name="marc" placeholder="Marca" />
      <select class="boton" name="ubi" >
        <option disabled selected>Ubicación</option>
        <option>3° SUBSUELO TS LADO DIQUE</option>
        <option>3° SUBSUELO TS LADO RÍO</option>
        <option>3° SUBSUELO TN LADO DIQUE</option>
        <option>3° SUBSUELO TN LADO RÍO</option>
        <option>2° SUBSUELO TS LADO DIQUE</option>
        <option>2° SUBSUELO TS LADO RÍO</option>
        <option>2° SUBSUELO TN LADO DIQUE</option>
        <option>2° SUBSUELO TN LADO RÍO</option>
        <option>1° SUBSUELO TS LADO DIQUE</option>
        <option>1° SUBSUELO TS LADO RÍO</option>
        <option>1° SUBSUELO TN LADO DIQUE</option>
        <option>1° SUBSUELO TN LADO RÍO</option>
        <option>PLANTA BAJA TS LADO DIQUE</option>
        <option>PLANTA BAJA TS LADO RÍO</option>
        <option>PLANTA BAJA TN LADO DIQUE</option>
        <option>PLANTA BAJA TN LADO RÍO</option>
        <option>1° PISO TS LADO DIQUE</option>
        <option>1° PISO BAJA TS LADO RÍO</option>
        <option>1° PISO BAJA TN LADO DIQUE</option>
        <option>1° BAJA TN LADO RÍO</option>
        <option>2° PISO TS LADO DIQUE</option>
        <option>2° PISO BAJA TS LADO RÍO</option>
        <option>2° PISO BAJA TN LADO DIQUE</option>
        <option>2° BAJA TN LADO RÍO</option>
        <option>3° PISO TS LADO DIQUE</option>
        <option>3° PISO BAJA TS LADO RÍO</option>
        <option>3° PISO BAJA TN LADO DIQUE</option>
        <option>3° BAJA TN LADO RÍO</option>
        <option>4° PISO TS LADO DIQUE</option>
        <option>4° PISO BAJA TS LADO RÍO</option>
        <option>4° PISO BAJA TN LADO DIQUE</option>
        <option>4° BAJA TN LADO RÍO</option>  
        <option>5° PISO TS LADO DIQUE</option>
        <option>5° PISO BAJA TS LADO RÍO</option>
        <option>5° PISO BAJA TN LADO DIQUE</option>
        <option>5° BAJA TN LADO RÍO</option>
        <option>6° PISO TS LADO DIQUE</option>
        <option>6° PISO BAJA TS LADO RÍO</option>
        <option>6° PISO BAJA TN LADO DIQUE</option>
        <option>6° BAJA TN LADO RÍO</option>
        <option>7° PISO TS LADO DIQUE</option>
        <option>7° PISO BAJA TS LADO RÍO</option>
        <option>7° PISO BAJA TN LADO DIQUE</option>
        <option>7° BAJA TN LADO RÍO</option>
        <option>8° PISO TS LADO DIQUE</option>
        <option>8° PISO BAJA TS LADO RÍO</option>
        <option>8° PISO BAJA TN LADO DIQUE</option>
        <option>8° BAJA TN LADO RÍO</option>
        
      </select>
      <input class="boton" type="text" name="codigo" placeholder="Código" />
      <input class="boton" type="text" name="descripcion" placeholder="Descripción del Equipo" />
      <input class="boton" type="submit" name="register" value="Cargar" />
    </form>
    
    
    <?php
    include("registrar.php");
    ?>
       
    </body>
</html>