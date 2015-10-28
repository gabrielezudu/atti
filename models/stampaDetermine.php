   <?php
   
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
 
//vedi http://phpword.codeplex.com/
require_once '../libs/PHPWord.php';
        
$D=__DIR__;
$C=$_SERVER['DOCUMENT_ROOT'];
$PHPWord = new PHPWord();
//N.B. le var da sostituire devono aver la forma {var}
// Le righe da clonare devono essere identificate da un prefisso, come {T1.var}
$document = $PHPWord->loadTemplate($C .'/atti/Template_Table.docx');

include_once $C .'/atti/config/database.php';
            include_once $C .'/atti/models/Determine.class.php';
 $database = new Database();
            $db = $database->getConnection();
            $Determina = new Determina($db);
                // query products
               
                $stmt = $Determina->readAllRecords();

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
    extract($row); //estraggo la riga così posso usare $ID_Determina invece di $row[$ID_Determina]
    //creo un array multidimensionale dove memorizzo i dati delle righe da clonare       
    $data['ID_Determina'][] = $ID_Determina;
    $data['Oggetto'][] = $Oggetto;
    $data['CIG'][] = $CIG;

  }
  
  // simple parsing
//	$document->setValue('{var1}', 'value'); sostituzione semplice
//	$document->setValue('{var2}', 'Clone'); sostituzione di una variabile che compre più volte
//	$document->setValue('{var3}', 'ONE', 1); sostituzione della prima occorrenza di una var che compare più volte
        
//salvo i dati singoli 
$document->setValue('weekday', date('l'));
$document->setValue('time', date('H:i'));

$document->setValue('name', $name);
//compilo la tabella
$document->cloneRow('T1', $data);
//salvo il file
$document->save($C.'/attiConLogIn/prova.docx');


echo '<strong>Success!</strong> Stampa eseguita.';
}
?>

 
