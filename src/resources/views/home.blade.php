@extends('layouts.app')

@section('content')

    <div id="page-nav" class="main-nav">

        <div id="page-breadcrumb">
            <a href="#" title="Dashboard">
                <i class="glyph-icon icon-dashboard"></i>
                Dashboard
            </a>
            <a href="#" title="Elements">
                <i class="glyph-icon icon-laptop"></i>
                Elements
            </a>
            <span class="current">Example breadcrumb</span>
        </div>

        <div id="page-nav-right">
            <a href="#" title="" class="btn btn-blue-alt sb-open-right updateEasyPieChart">
                <i class="glyph-icon icon-cogs"></i>
                Statistics
            </a>
            <a href="#" title="" class="btn btn-success sb-open-left updateEasyPieChart">
                <i class="glyph-icon icon-bullhorn"></i>
                Chat
            </a>
        </div>

    </div><!-- #page-nav -->


    <div id="page-content">

        <h1 class="font-gray-dark text-center mrg25T mrg15B">Home page</h1>

    </div><!-- #page-content -->

@endsection
