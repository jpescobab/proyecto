<div class="mb-3">
    <label for="item" class="form-label">Ítem</label>
    <input type="text" name="item" value="{{ old('item', $item->item ?? '') }}" class="form-control" required>
    @error('item') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $item->nombre ?? '') }}" class="form-control" required>
    @error('nombre') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $item->descripcion ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-success btn-sm">
    <i class="fa fa-save"></i> Guardar
</button>
<a href="{{ route('items.index') }}" class="btn btn-secondary btn-sm">
    <i class="fa fa-arrow-left"></i> Cancelar
</a>
