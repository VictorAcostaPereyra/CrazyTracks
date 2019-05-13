<h1>Modificar audio</h1>
<h1><?php echo $audio->name;?></h1>
<form action='<?php echo '/audio/'.$audio->id?>' method='POST'>
    @csrf
    @method('put')

    <input type='text' name='name' placeholder='Nombre' value='<?php echo $audio->name;?>'>
    <input type='text' name='type'placeholder='Tipo de pista' value= '<?php echo $audio->type;?>'>
    <input type='text' name='extension'placeholder='Extensión del fichero' value= '<?php echo $audio->extension;?>'>
    <input type='hidden' name='user_id' value='1'>

    <input type='submit' name='submit' value="Añadir">

</form>