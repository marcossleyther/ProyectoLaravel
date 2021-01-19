@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name='name' @isset($enemy) value="{{ $enemy->name }}" @endisset
        placeholder="...Nombre" required>
</div>

<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name='hp' @isset($enemy) value="{{ $enemy->hp }}" @endisset
        placeholder="...Vida" required>
</div>

<div class="form-group">
    <label for="atq">Ataque</label>
    <input type="number" class="form-control" id="atq" name='atq' @isset($enemy) value="{{ $enemy->atq }}" @endisset
        placeholder="...Ataque" required>
</div>

<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name='def' @isset($enemy) value="{{ $enemy->def }}" @endisset
        placeholder="...Defensa" required>
</div>

<div class="form-group">
    <label for="coins">Monedas</label>
    <input type="number" class="form-control" id="coins" name='coins' @isset($enemy) value="{{ $enemy->coins }}"
        @endisset placeholder="...Monedas" required>
</div>

<div class="form-group">
    <label for="xp">Experiencia</label>
    <input type="number" class="form-control" id="xp" name='xp' @isset($enemy) value="{{ $enemy->xp }}" @endisset
        placeholder="...Monedas" required>
</div>

<div class="form-group">
    <label for="img_path">Imagen</label>
    <input type="file" name="img_path" id="img_path">
</div>
