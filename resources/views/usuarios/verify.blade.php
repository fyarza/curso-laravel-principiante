@extends('layouts.app')
@push('styles')
<style>
    .form-group{
        display:flex;
        margin-bottom:0.2rem;   
    }
    .form-group label{
        margin-right:1rem;
    }
    .botones{
        margin-top:1rem;
    }
    .botones .btn{
        margin-right:1rem;
    }
  
</style>
@endpush
@section('content')
<section class="content-header">
    <h1>
        Transfer verification
    </h1>
</section>
<div class="content">
    <!-- @include('adminlte-templates::common.errors') -->
    <div class="box box-primary">

        <div class="box-body">
            <div class="container">
                <div class="row">
                    <!-- Id Field -->
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::label('id', 'Form:') !!}
                            <p>{!! $planilla->id !!}</p>
                        </div>
                        <!-- Customername Field -->
                        <div class="form-group">
                            {!! Form::label('customerName', 'Customer Name:') !!}
                            <p>{!! $planilla->customerName !!}</p>
                        </div>

                        <!-- Date Field -->
                        <div class="form-group">
                            {!! Form::label('date', 'Date:') !!}
                            <p>{!! $planilla->date !!}</p>
                        </div>

                        <!-- Accountnumber Field -->
                        <div class="form-group">
                            {!! Form::label('accountnumber', 'Account Number:') !!}
                            <p>{!! $planilla->accountnumber !!}</p>
                        </div>

                        <!-- Customeraddress Field -->
                        <div class="form-group">
                            {!! Form::label('customeraddress', 'Customer Address:') !!}
                            <p>{!! $planilla->customeraddress !!}</p>
                        </div>

                        <!-- City Field -->
                        <div class="form-group">
                            {!! Form::label('city', 'City:') !!}
                            <p>{!! $planilla->city !!}</p>
                        </div>
                        <!-- State Field -->
                        <div class="form-group">
                            {!! Form::label('state', 'State:') !!}
                            <p>{!! $planilla->state !!}</p>
                        </div>

                        <!-- Zip Field -->
                        <div class="form-group">
                            {!! Form::label('zip', 'Zip:') !!}
                            <p>{!! $planilla->zip !!}</p>
                        </div>

                        <!-- Country Field -->
                        <div class="form-group">
                            {!! Form::label('country', 'Country:') !!}
                            <p>{!! $planilla->country !!}</p>
                        </div>

                        <!-- Amount Field -->
                        <div class="form-group">
                            {!! Form::label('amount', 'Amount:') !!}
                            <p>{!! $planilla->amount !!}</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Currency Field -->
                        <div class="form-group">
                            {!! Form::label('currency', 'Currency:') !!}
                            <p>{!! $planilla->currency !!}</p>
                        </div>

                        <!-- Othercurrency Field -->
                        <div class="form-group">
                            {!! Form::label('Othercurrency', 'Other Currency:') !!}
                            <p>{!! $planilla->Othercurrency !!}</p>
                        </div>

                        <!-- Intermediary Field -->
                        <div class="form-group">
                            {!! Form::label('intermediary', 'Intermediary Bank Name:') !!}
                            <p>{!! $planilla->intermediary !!}</p>
                        </div>

                        <!-- Aba Field -->
                        <div class="form-group">
                            {!! Form::label('aba', 'A.B.A:') !!}
                            <p>{!! $planilla->aba !!}</p>
                        </div>

                        <!-- Iban Field -->
                        <div class="form-group">
                            {!! Form::label('iban', 'IBAN:') !!}
                            <p>{!! $planilla->iban !!}</p>
                        </div>

                        <!-- Swift Field -->
                        <div class="form-group">
                            {!! Form::label('swift', 'Swift:') !!}
                            <p>{!! $planilla->swift !!}</p>
                        </div>

                        <!-- Countryi Field -->
                        <div class="form-group">
                            {!! Form::label('countryi', 'Country:') !!}
                            <p>{!! $planilla->countryi !!}</p>
                        </div>

                        <!-- Beneficiarybankname Field -->
                        <div class="form-group">
                            {!! Form::label('BeneficiaryBankName', 'Beneficiary Bank Name:') !!}
                            <p>{!! $planilla->BeneficiaryBankName !!}</p>
                        </div>

                        <!-- Bankstreetaddress Field -->
                        <div class="form-group">
                            {!! Form::label('Bankstreetaddress', 'Bankstreet Address:') !!}
                            <p>{!! $planilla->Bankstreetaddress !!}</p>
                        </div>

                        <!-- Cityb Field -->
                        <div class="form-group">
                            {!! Form::label('cityb', 'City:') !!}
                            <p>{!! $planilla->cityb !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box box-primary">

        <div class="box-body">
            <div class="container">
                <div class="row">
                        <div class="col-sm-6">
                            <!-- Stateb Field -->
                            <div class="form-group">
                                {!! Form::label('stateb', 'State:') !!}
                                <p>{!! $planilla->stateb !!}</p>
                            </div>

                            <!-- Zipb Field -->
                            <div class="form-group">
                                {!! Form::label('zipb', 'Zip:') !!}
                                <p>{!! $planilla->zipb !!}</p>
                            </div>

                            <!-- Countryb Field -->
                            <div class="form-group">
                                {!! Form::label('countryb', 'Country:') !!}
                                <p>{!! $planilla->countryb !!}</p>
                            </div>

                            <!-- Beneficiaryname Field -->
                            <div class="form-group">
                                {!! Form::label('BeneficiaryName', 'Beneficiary Name:') !!}
                                <p>{!! $planilla->BeneficiaryName !!}</p>
                            </div>

                            <!-- Beneficiaryaccount Field -->
                            <div class="form-group">
                                {!! Form::label('BeneficiaryAccount', 'Beneficiary Account:') !!}
                                <p>{!! $planilla->BeneficiaryAccount !!}</p>
                            </div>

                            <!-- Beneficiaryaddress Field -->
                            <div class="form-group">
                                {!! Form::label('BeneficiaryAddress', 'Beneficiary Address:') !!}
                                <p>{!! $planilla->BeneficiaryAddress !!}</p>
                            </div>

                            <!-- Citybe Field -->
                            <div class="form-group">
                                {!! Form::label('citybe', 'City:') !!}
                                <p>{!! $planilla->citybe !!}</p>
                            </div>

                            <!-- Statebe Field -->
                            <div class="form-group">
                                {!! Form::label('statebe', 'State:') !!}
                                <p>{!! $planilla->statebe !!}</p>
                            </div>

                            <!-- Zipbe Field -->
                            <div class="form-group">
                                {!! Form::label('zipbe', 'Zip:') !!}
                                <p>{!! $planilla->zipbe !!}</p>
                            </div>

                            <!-- Countrybe Field -->
                            <div class="form-group">
                                {!! Form::label('countrybe', 'Country:') !!}
                                <p>{!! $planilla->countrybe !!}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <!-- Finalbeneficiary Field -->
                            <div class="form-group">
                                {!! Form::label('finalbeneficiary', 'Final Beneficiary Name:') !!}
                                <p>{!! $planilla->finalbeneficiary !!}</p>
                            </div>

                            <!-- Accountnumberf Field -->
                            <div class="form-group">
                                {!! Form::label('accountnumberf', 'Account Number:') !!}
                                <p>{!! $planilla->accountnumberf !!}</p>
                            </div>

                            <!-- Wiretransferreference Field -->
                            <div class="form-group">
                                {!! Form::label('wiretransferreference', 'Wire Transfer Reference:') !!}
                                <p>{!! $planilla->wiretransferreference !!}</p>
                            </div>

                            <!-- Especialinstruccions Field -->
                            <div class="form-group">
                                {!! Form::label('especialinstruccions', 'Especial Instruccions:') !!}
                                <p>{!! $planilla->especialinstruccions !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="box box-primary">

        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{ Form::open(['route' => 'planilla.verificacion','id'=>'formulario','name'=>'formulario']) }}
                        <h2>Transfer Verification</h2>
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="fiserv" value="">
                                <span class="label-text">Do the name and acount numbers match
                                    with the ones registered on Fiserv?</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="email" value="">
                                <span class="label-text">Does the email match with the one registered?</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="money" value="">
                                <span class="label-text">Is the money available?</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="number" value="">
                                <span class="label-text">Are the A.B.A and swift numbers correct?</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="direccion" value="">
                                <span class="label-text">Is the information complete including name an address?</span>
                            </label>
                        </div>
                        <div class="form-group botones col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-success','id' =>'btnGuardar']) !!}
                            <a href="{!! route('planillas.index') !!}" class="btn btn-danger">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- Submit Field -->
        
    </div>
</div>
@endsection
