<label for="field2" class="form-label">States:</label>

<select name="state" id="state" class="form-control">
    <option value="">Select state</option>
    @forelse ($states as $state)
        <option value="{{ $state->id }}">{{ $state->name }}</option>
    @empty
        <option value=""></option>
    @endforelse
</select>
