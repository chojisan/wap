@extends('layouts.bootstrap')

@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <div class="page page-default">
            <div class="page-heading">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>User Profile</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Users</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">User Accounts List</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">User Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <!--profile cover start-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cover-profile">
                            <div class="profile-bg-img">
                                <img class="profile-bg-img img-fluid" src="{{ asset('assets/images/user-profile/bg-img1.jpg') }}" alt="bg-img" />
                                <div class="card-block user-info">
                                    <div class="col-md-12">
                                        <div class="media-left">
                                            <a href="#" class="profile-image">
                                                <img class="user-img img-radius" src="{{ asset('assets/images/user-profile/user-img.jpg') }}" alt="user-img" />
                                            </a>
                                        </div>
                                        <div class="media-body row">
                                            <div class="col-lg-12">
                                                <div class="user-title">
                                                    <h2>Josephin Villa</h2>
                                                    <span class="text-white">Web designer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right cover-btn">
                                            <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="feather icon-plus"></i> Follow</button>
                                            <button type="button" class="btn btn-primary"><i class="feather icon-message-square"></i> Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--profile cover end-->

                <div class="row">
                    <div class="col-lg-12">
                        <!-- tab header start -->
                        <div class="tab-header card">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's Permission</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- tab header end -->
                        <!-- tab content start -->
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">About Me</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                            <i class="icofont icofont-edit"></i>
                                        </button>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">Full Name</th>
                                                                                <td>Josephine Villa</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Gender</th>
                                                                                <td>Female</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Birth Date</th>
                                                                                <td>October 25th, 1990</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Marital Status</th>
                                                                                <td>Single</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Location</th>
                                                                                                        <td>New York, USA</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Email</th>
                                                                                                        <td><a href="#!"><span class="__cf_email__" data-cfemail="397d5c5456795c41585449555c175a5654">[email&#160;protected]</span></a></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Mobile Number</th>
                                                                                                        <td>(0123) - 4567891</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Twitter</th>
                                                                                                        <td>@xyz</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Skype</th>
                                                                                                        <td>demo.skype</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Website</th>
                                                                                                        <td><a href="#!">www.demo.com</a></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of general info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <!-- end of view-info -->
                                                                <div class="edit-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="Full Name">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="form-radio">
                                                                                                            <div class="group-add-on">
                                                                                                                <div class="radio radiofill radio-inline">
                                                                                                                    <label>
                                                                                                <input type="radio" name="radio" checked><i class="helper"></i> Male
                                                                                            </label>
                                                                                                                </div>
                                                                                                                <div class="radio radiofill radio-inline">
                                                                                                                    <label>
                                                                                                <input type="radio" name="radio"><i class="helper"></i> Female
                                                                                            </label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <select id="hello-single" class="form-control">
                                                                                    <option value="">---- Marital Status ----</option>
                                                                                    <option value="married">Married</option>
                                                                                    <option value="unmarried">Unmarried</option>
                                                                                </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="Address">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-6">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="Mobile Number">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                                                                    <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr> -->
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
                                                                                                            <input type="email" class="form-control" placeholder="Skype Id">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="website">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                                <div class="text-center">
                                                                                    <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                                    <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end of edit info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <!-- end of edit-info -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop