<!-- Stored in resources/views/index.blade.php -->

@extends('layouts.master')

@section('title', 'Contacts')

@section('sidebar')
    @parent
@endsection

@section('content')

<div class="row" ng-controller="ContactsController">
  <h1>New Contact Form</h1>
  <div class="col-sm-offset-2 col-sm-8">
    <div class="alert alert-danger" role="alert" ng-show="errors">
    <div ng-repeat="error in errors">
      [[ error[0] ]]
    </div>
    </div>
<form name="contactForm" class="form-horizontal" ng-submit="submitContactForm()">
  <div class="form-group">
    <label for="fullName" class="col-sm-2 control-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" ng-model="contact.fullName">
    </div>
  </div>
  <div class="form-group">
    <label for="emailAddress" class="col-sm-2 control-label">Email Address</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="emailAddress" placeholder="Email" ng-model="contact.email">
    </div>
  </div>
  <div class="form-group">
    <label for="position" class="col-sm-2 control-label">Position</label>
    <div class="col-sm-10">
      <select class="form-control" name="position" ng-model="contact.role">
        <option value="" selected disabled>Choose a role</option>
        <option value="Teacher">Teacher</option>
        <option value="Head of Department">Head of Department</option>
        <option value="Principal">Principal</option>
        <option value="Student">Student</option>
        <option value="Librarian">Librarian</option>
        <option value="Librarian">Librarian</option>
        <option value="ICT">ICT</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="schoolName" class="col-sm-2 control-label">School/Business Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="schoolName" placeholder="School/Business Name" ng-model="contact.schoolName">
    </div>
  </div>
  <div class="form-group">
    <label for="message" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
      <textarea rows="8" class="form-control" id="message" placeholder="Message" ng-model="contact.message"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-primary">Contact Us</button>
    </div>
  </div>
</form>
</div>
  <div class="col-sm-12">
    <table class="table table-hover">
      <thead>
        <td>Full name</td>
        <td>Email</td>
        <td>Role</td>
        <td>School Name</td>
        <td>Message</td>
        <td></td>
      </thead>
      <tr ng-repeat="ct in cts">
        <td>[[ ct.fullName ]]</td>
        <td>[[ ct.email ]]</td>
        <td>[[ ct.role ]]</td>
        <td>[[ ct.schoolName ]]</td>
        <td>[[ ct.message ]]</td>
        <td><button class="btn btn-danger" ng-click="deleteContact(ct)">Del</button></td>
      </tr>
    </table>
  </div>
</div>
@endsection
