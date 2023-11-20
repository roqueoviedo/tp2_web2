 <?php
require_once 'app/models/PeliculasModel.php';
require_once 'app/views/PeliculasView.php';
class PeliculasController{
   private $model;
   private $view;

   public function __construct() {
    $this->model = new PeliculasModel();
    $this->view = new PeliculasView();
   }
   public function showHome() {
    $this->view->showHome();
   }
   
   public function getAllMovies() {
    $movies = $this->model->getMovies(); //Realiza una peticion al modelo para que me devuelva todas las peliculas
    // actualizo la vista
    $this->view->showAllMovies($movies); // Realiza una peticion para que me muestre todas las peliculas
   }

   public function showXgenero($genero) {
   $generos = $this->model->getXgenero($genero); //Consulta al modelo y esa consulta se va a almacenar en una variable. 
   $this->view->showByGenre($generos); //Llamada a la vista 
   }

   public function showPeli($idPeli) {
   $pelicula = $this->model->consultaDescripcion($idPeli);
   $this->view->showByMovie($pelicula);
   }

   //Se agrega una nueva pelicula en la base de datos.

   //Se recogen los datos del formulario utilizando $_POST y se asignan a variables locales.
   public function nuevaPeli(){
   $titulo= $_POST['titulo']; 
   $anio= $_POST['anio'];
   $director= $_POST['director']; 
   $clasificacion= $_POST['clasificacion']; 
   $sinopsis= $_POST['sinopsis']; 
   $fk_genero= $_POST['fk_genero'];

   if ((isset($_POST)&& !empty($_POST))&& !empty($fk_genero)){ 
      $this->model->agregarPeli($titulo,$anio,$director,$clasificacion,$sinopsis,$fk_genero);
      $this->view->exito();
   }else{
      //Si datos de peliculas no son correctos.
      $this->view->error();
   }
   }

   public function eliminarPeli(){
      
   }
}