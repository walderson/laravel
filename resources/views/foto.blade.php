<form action="galeria" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="foto">
    <button type="submit">Enviar foto</button>
</form>