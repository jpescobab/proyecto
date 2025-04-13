<div class="form-group">
    <label for="proyecto">Nombre del Proyecto</label>
    <input 
        type="text" 
        class="form-control" 
        id="proyecto" 
        name="proyecto" 
        value="{{ old('proyecto', $proyecto->proyecto ?? '') }}" 
        required>
</div>

<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea 
        class="form-control" 
        id="descripcion" 
        name="descripcion" 
        required>{{ old('descripcion', $proyecto->descripcion ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="codigo">Código</label>
    <input 
        type="text" 
        class="form-control" 
        id="codigo" 
        name="codigo" 
        value="{{ old('codigo', $proyecto->codigo ?? '') }}" 
        required>
</div>

<div class="form-group">
    <label for="fecha_inicio">Fecha de Inicio</label>
    <input 
        type="date" 
        class="form-control" 
        id="fecha_inicio" 
        name="fecha_inicio" 
        value="{{ old('fecha_inicio', $proyecto->fecha_inicio ?? '') }}" 
        required>
</div>

<div class="form-group">
    <label for="fecha_termino">Fecha de Término</label>
    <input 
        type="date" 
        class="form-control" 
        id="fecha_termino" 
        name="fecha_termino" 
        value="{{ old('fecha_termino', $proyecto->fecha_termino ?? '') }}" 
        required>
</div>

<div class="form-group">
    <label for="avance">Avance (%)</label>
    <input 
        type="number" 
        class="form-control" 
        id="avance" 
        name="avance" 
        value="{{ old('avance', $proyecto->avance ?? 0) }}" 
        min="0" 
        max="100">
</div>

<div class="form-group">
    <label for="monto_estimado">Monto Estimado</label>
    <input 
        type="number" 
        step="0.01" 
        class="form-control" 
        id="monto_estimado" 
        name="monto_estimado" 
        value="{{ old('monto_estimado', $proyecto->monto_estimado ?? '') }}" 
        required>
</div>

<div class="form-group">
    <label for="monto_asignado">Monto Asignado</label>
    <input 
        type="number" 
        step="0.01" 
        class="form-control" 
        id="monto_asignado" 
        name="monto_asignado" 
        value="{{ old('monto_asignado', $proyecto->monto_asignado ?? '') }}" 
        required>
</div>

<div class="form-group">
    <label for="cfinanciero_id">Centro Financiero</label>
    <select 
        class="form-control" 
        id="cfinanciero_id" 
        name="cfinanciero_id" 
        required>
        <option value="">Seleccione una opción</option>
        @foreach($centrosFinancieros as $centroFinanciero)
            <option 
                value="{{ $centroFinanciero->id }}" 
                {{ old('cfinanciero_id', $proyecto->cfinanciero_id ?? '') == $centroFinanciero->id ? 'selected' : '' }}>
                {{ $centroFinanciero->nombre }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="estado_id">Estado</label>
    <select 
        class="form-control" 
        id="estado_id" 
        name="estado_id" 
        required>
        <option value="">Seleccione una opción</option>
        @foreach($estados as $estado)
            <option 
                value="{{ $estado->id }}" 
                {{ old('estado_id', $proyecto->estado_id ?? '') == $estado->id ? 'selected' : '' }}>
                {{ $estado->nombre }}
            </option>
        @endforeach
    </select>
</div>
