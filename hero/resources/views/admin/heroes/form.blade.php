@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name='name' @isset($hero) value="{{ $hero->name }}"@endisset placeholder="...Nombre"
        required>
</div>

<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name='hp' @isset($hero)value="{{ $hero->hp }}"@endisset placeholder="...Vida" required>
</div>

<div class="form-group">
    <label for="atq">Ataque</label>
    <input type="number" class="form-control" id="atq" name='atq' @isset($hero)value="{{ $hero->atq }}"@endisset placeholder="...Ataque"
        required>
</div>

<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name='def' @isset($hero)value="{{ $hero->def }}"@endisset placeholder="...Defensa"
        required>
</div>

<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name='luck' @isset($hero)value="{{ $hero->luck }}"@endisset placeholder="...Suerte"
        required>
</div>

<div class="form-group">
    <label for="coins">Monedas</label>
    <input type="number" class="form-control" id="coins" name='coins' @isset($hero)value="{{ $hero->coins }}"@endisset
        placeholder="...Monedas" required>
</div>
