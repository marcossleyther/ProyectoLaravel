@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name='name' @isset($item) value="{{ $item->name }}" @endisset placeholder="...Nombre"
        required>
</div>

<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name='hp' @isset($item) value="{{ $item->hp }}" @endisset placeholder="...Vida" required>
</div>

<div class="form-group">
    <label for="atq">Ataque</label>
    <input type="number" class="form-control" id="atq" name='atq' @isset($item) value="{{ $item->atq }}" @endisset placeholder="...Ataque"
        required>
</div>

<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name='def' @isset($item) value="{{ $item->def }}" @endisset placeholder="...Defensa"
        required>
</div>

<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name='luck' @isset($item) value="{{ $item->luck }}" @endisset placeholder="...Suerte"
        required>
</div>

<div class="form-group">
    <label for="cost">Monedas</label>
    <input type="number" class="form-control" id="cost" name='cost' @isset($item) value="{{ $item->cost }}" @endisset placeholder="...Monedas"
        required>
</div>

<div class="form-group">
    <label for="img_path">Imagen</label>
    <input type="file" name="img_path" id="img_path">
</div>