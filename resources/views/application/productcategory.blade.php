@extends('layouts.app')

@section('tittletop', 'All Categories')

@section('header')
@endsection

@section('body')
<div class="dashboard-content">
    <!-- HEADLINE -->
    <div class="headline simple primary">
        <h4>Categories</h4>
    </div>
    @if(session()->has('message'))
  <div class="alert alert-success" role="alert">
    <strong>Success: </strong>{{session()->get('message')}}
  </div>
  @elseif(session()->has('error'))
  <div class="alert alert-danger" role="alert">
    <strong>Error: </strong>{{session()->get('error')}}
  </div>
  @endif
    <!-- /HEADLINE -->
<!-- FORM BOX ITEM -->
<div class="form-box-item withdraw-history">
    <h4>All Categories</h4>
    <hr class="line-separator">
    <!-- TRANSACTION HISTORY -->
    <div class="transaction-history">

        @forelse ($productcategory as $category)
        <!-- TRANSACTION HISTORY ITEM -->
        <div class="transaction-history-item">
            <div class="transaction-history-item-date">
                <p>{{ $category->name }}</p>
            </div>
            <div class="transaction-history-item-mail">
                <p>{{ $category->slug }}</p>
            </div>
            <div class="transaction-history-item-amount">
                <p class="text-header">{{ $category->type }}</p>
            </div>
            <div class="transaction-history-item-status">
                <p class="text-header">Pending</p>
            </div>
        </div>
        <!-- /TRANSACTION HISTORY ITEM -->
        @empty

        @endforelse



    </div>
    <!-- /TRANSACTION HISTORY -->
</div>
<!-- /FORM BOX ITEM -->
</div>
<!-- /FORM BOX ITEMS -->
</div>
<!-- DASHBOARD CONTENT -->
</div>
<!-- /DASHBOARD BODY -->
</div>

<div class="shadow-film closed"></div>
@endsection
