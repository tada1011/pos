<!-- Id Company Field -->
<div class="form-group">
    {!! Form::label('id_company', 'Id Company:') !!}
    <p>{{ $order->id_company }}</p>
</div>

<!-- Id User Field -->
<div class="form-group">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{{ $order->id_user }}</p>
</div>

<!-- Payment Code Field -->
<div class="form-group">
    {!! Form::label('payment_code', 'Payment Code:') !!}
    <p>{{ $order->payment_code }}</p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{{ $order->tanggal }}</p>
</div>

<!-- Subtotal Field -->
<div class="form-group">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    <p>{{ $order->subtotal }}</p>
</div>

<!-- Grand Total Field -->
<div class="form-group">
    {!! Form::label('grand_total', 'Grand Total:') !!}
    <p>{{ $order->grand_total }}</p>
</div>

<!-- Discount Field -->
<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{{ $order->discount }}</p>
</div>

<!-- Cash Field -->
<div class="form-group">
    {!! Form::label('cash', 'Cash:') !!}
    <p>{{ $order->cash }}</p>
</div>

<!-- Change Field -->
<div class="form-group">
    {!! Form::label('change', 'Change:') !!}
    <p>{{ $order->change }}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    <p>{{ $order->note }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $order->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $order->updated_at }}</p>
</div>

