<label for="field2" class="form-label">Cities:</label>

<select name="city" id="city" class="form-control">
    <option value="">Select city</option>
    @forelse ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
    @empty
        <option value=""></option>
    @endforelse
</select>
