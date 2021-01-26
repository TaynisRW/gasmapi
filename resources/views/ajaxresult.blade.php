<div class="input-group mb-3 mt-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="municipality"><i class="fas fa-bus-alt"></i></label>
    </div>
    {!! Form::select('municipality', $matchedState, null, ['class' => 'custom-select', 'id' => 'municipality']) !!}
</div>
