@extends('KreasiEvent.masteradmin')
@section('title', 'Dashboard Admin')

@section('KreasiEvent.content.Admin')
<div data-aos="fade-up">
    <div class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
    </div>
    <div class="container-fluid cfd1-dashboard">
        <h1 id="p-dashboard1">Selamat Datang</h1>
        <p id="p-dashboard2">{{ Auth::user()->name }}</p>
        <h1 id="p-dashboard3">Di Kreasi Creator Event</h1>
    </div>  
    <div class="content">
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $event->count() }}</h3>
              <p>Event 1</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Total Event 1</a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $participant->count() }}</h3>
              <p>Peserta</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Total Peserta</a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $events->count() }}</h3>
              <p>Event 2</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Total Event 2</a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </div>
</div>    
@endsection