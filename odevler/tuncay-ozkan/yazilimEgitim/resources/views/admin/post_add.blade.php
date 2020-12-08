@extends('layouts.admin')

@section('title')
    Makale Ekleme
@endsection
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col s12 l6">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title activator">Form with icon<i class="material-icons right tooltipped"
                                                                      data-position="left" data-delay="50"
                                                                      data-tooltip="Get Code">more_vert</i></h5>
                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="name3" type="text">
                                <label for="name3">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email3" type="email">
                                <label for="email3">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password3" type="password">
                                <label for="password3">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">question_answer</i>
                                <textarea id="message3" class="materialize-textarea"></textarea>
                                <label for="message3">Message</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
