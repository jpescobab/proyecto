<div class="form-group">
    <label for="nombre">Nombre</label>
    <input 
        type="text" 
        class="form-control" 
        id="nombre" 
        name="nombre" 
        value="{{ old('nombre', $estado->nombre ?? '') }}" 
        required>
</div>

<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea 
        class="form-control" 
        id="descripcion" 
        name="descripcion">{{ old('descripcion', $estado->descripcion ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="tabla_referencia">Tabla de Referencia</label>
    <input 
        type="text" 
        class="form-control" 
        id="tabla_referencia" 
        name="tabla_referencia" 
        value="{{ old('tabla_referencia', $estado->tabla_referencia ?? '') }}">
</div>
