@extends('layouts._dashboard._dashboard')
@section('content')


        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

                    <li class="active"><a href="#">home</a></li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">


                <div class="row">
                    <div class="col-xl-10">
                        <div class="page-header">
                            <h1>
                                Inicio
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    O que podemos ajudar ?
                                </small>
                            </h1>
                        </div>
                        <div class="page-content">


                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->

            <div class="col-xs-12 padding-top-20">
                @include('layouts._dashboard._basicshortcut')
                @include('layouts._dashboard._reports')

            </div>





        </div>

@endsection

