<h1>Audios</h1>
<ul>
<?php foreach($audios as $audio){?>
    <li>
        <?php echo $audio->name;?>
        <form action="/audio/<?php echo $audio->id; ?>" method="POST">
            @csrf
            @method("delete")
            <input type="submit" value="eliminar">
        </form>
    </li>
<?php }?>
</ul>
