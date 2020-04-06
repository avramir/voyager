<div>
    @php
        dump(old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? ''));
    @endphp
</div>
