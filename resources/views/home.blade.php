@extends('layouts.app')
@section('content')
    <!-- Sidebar -->
<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>
    </div>
</div>  
@endsection
