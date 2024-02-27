<!DOCTYPE html>
<html>
<head>
    <title>Operaciones matemáticas</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.con1 {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    text-align: center;
}
h3 {
    text-align: center;
    font-family: 'Roboto', sans-serif;
    font-size: 2rem;
    font-weight: 700;
    color: black;
    text-transform: uppercase; /* Transforma el texto a mayúsculas */
    margin-bottom: 1rem; /* Espacio entre el título y el siguiente elemento */
}

h2 {
    text-align: center;
    font-family: 'Roboto', sans-serif;
    font-size: 2rem;
    font-weight: 600;
    color: black;
    text-transform: uppercase; /* Transforma el texto a mayúsculas */
    margin-bottom: 1rem; /* Espacio entre el título y el siguiente elemento */
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 30px;
}

label {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    text-align: center;
}

input[type="number"] {
    width: 48%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

select {
    width: 48%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 60%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>


</head>
<body>
    <div class="con1">
        <h2>CALCULADORA</h2>
        <form method="post" action="">
            <label for="numero1">Número 1:</label>
            <input type="number" name="numero1" id="numero1" required>
            <br>
            <label for="numero2">Número 2:</label>
            <input type="number" name="numero2" id="numero2" required>
            <br>
            <label for="opcion">Operación:</label>
            <select name="opcion" id="opcion" required>
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="division">Dividir</option>
                <option value="potenciacion">Potenciación</option>
                <option value="concatenacion">Concatenar</option>
            </select>

            <input type="submit" value="Calcular">
            
        </form>
    </div>
    <?php
        if ($_POST){
            function Sumar (){
                echo "<h3>La suma de los números es: ". ($_POST['numero1']+$_POST['numero2']). "</h3>";
            }
            function Restar (){
                echo "<h3>La resta de los números es: ". ($_POST['numero1']-$_POST['numero2']). "</h3>";
            }
            function Multiplicar (){
                echo "<h3>La multiplicación de los números es: ". ($_POST['numero1']*$_POST['numero2']). "</h3>";
            }
            function Division (){
                if ($_POST['numero2']==0)
                    echo "Error: division por 0";
                else
                    echo "<h3>La division de los números es: ". ($_POST['numero1']/$_POST['numero2']). "</h3>";
            }
            function Potenciacion (){
                echo "<h3>La potenciación de los números es: ". (pow($_POST['numero1'], $_POST['numero2'])). "</h3>";
            }
            function Concatenacion (){
                echo "<h3>La Concatenación de los números es: ". ($_POST['numero1'].$_POST['numero2']). "</h3>";
            }
            switch($_POST['opcion']){
                case 'sumar':
                    Sumar();
                    break;
                case 'restar':
                    Restar();
                    break;
                case 'multiplicar':
                    Multiplicar();
                    break;
                case 'division':
                    Division();
                    break;
                case 'potenciacion':
                    Potenciacion();
                    break;
                case 'concatenacion':
                    Concatenacion();
                    break;
                default:
                    echo "Error en la opción seleccionada";
                    break;
            }
        }
    ?>
</body>
</html>