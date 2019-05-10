<?php

namespace Curso\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function displayAudioAction(){
       
    $audios = DB::table('audios')->get();
    var_dump($audios); die;

    while($row=mysqli_fetch_array($r)){

       echo '<a href="play.php?name='.$row['name'].'">'.$row['name'].'</a>';
       echo "<br/>";
       

    }

    mysqli_close($conn);
   }

}
