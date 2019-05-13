<h1>Añadir nuevo audio</h1>
<form action='/audio' method='post'>
    @csrf
    <input type='text' name='name' placeholder='Nombre'>
    <input type='text' name='type'placeholder='Tipo de pista'>
    <input type='text' name='extension'placeholder='Extensión del fichero'>
    <input type='hidden' name='user_id' value='1'>

    <input type='submit' name='submit' value="Añadir">

</form>